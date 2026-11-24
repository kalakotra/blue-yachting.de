<?php

namespace App\Seo;

use SilverStripe\Assets\Image;
use SilverStripe\Assets\Storage\AssetContainer;
use SilverStripe\CMS\Controllers\RootURLController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Control\Director;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\i18n\i18n;
use SilverStripe\Model\ArrayData;
use SilverStripe\Model\List\ArrayList;
use SilverStripe\SiteConfig\SiteConfig;
use TractorCow\Fluent\Model\Locale;

/**
 * Technical SEO for every page: title, canonical, hreflang, Open Graph, robots.
 * Findings: TSEO-002, TSEO-004, TSEO-005, TSEO-007, CSEO-002.
 *
 * @extends Extension<SiteTree>
 */
class SeoPageExtension extends Extension
{
    private static array $db = [
        'MetaTitle' => 'Varchar(255)',
    ];

    /**
     * Has-one relations tried in this order for og:image.
     */
    private static array $og_image_relations = ['HeaderImage', 'PreviewImage'];

    /**
     * Has-many relations (with an Image has-one) tried after $og_image_relations.
     */
    private static array $og_image_slide_relations = ['Slide'];

    /**
     * Locale => hreflang. Unlisted locales use the full RFC 1766 code (e.g. "de-at").
     * "de" instead of "de-de" because the site targets DE, AT and German-speaking CH.
     */
    private static array $hreflang_map = [];

    protected function updateCMSFields(FieldList $fields): void
    {
        $metaTitle = TextField::create('MetaTitle', 'Meta-Titel')
            ->setDescription('Optional, 50–60 Zeichen. Wird unverändert als &lt;title&gt; ausgegeben. Leer = „Seitentitel » Website-Name“.');

        $metadata = $fields->fieldByName('Root.Main.Metadata');
        if ($metadata) {
            $metadata->insertBefore('MetaDescription', $metaTitle);
        } else {
            $fields->addFieldToTab('Root.Main', $metaTitle);
        }
    }

    /**
     * Full <title> content.
     */
    public function getSeoTitle(): string
    {
        $owner = $this->getOwner();
        if ($owner->MetaTitle) {
            return (string) $owner->MetaTitle;
        }
        $site = SiteConfig::current_site_config()->Title;
        return $site ? sprintf('%s » %s', $owner->Title, $site) : (string) $owner->Title;
    }

    /**
     * Absolute, query-free URL of this page in the current locale.
     */
    public function getCanonicalURL(): string
    {
        return (string) $this->getOwner()->AbsoluteLink();
    }

    /**
     * hreflang alternates. Only output when the page is published in at least two locales.
     * Uses the real language code even if a locale is flagged "UseDefaultCode" in Fluent,
     * and emits exactly one x-default (the default locale's URL).
     */
    public function getHreflangLinks(): ArrayList
    {
        $owner = $this->getOwner();
        $links = ArrayList::create();
        if (!class_exists(Locale::class) || !$owner->hasMethod('Locales')) {
            return $links;
        }

        $default = null;
        foreach ($owner->Locales() as $recordLocale) {
            // Published in exactly this locale; fallback content would only duplicate the source page.
            if (!$recordLocale->IsPublished(true) || !$recordLocale->canViewInLocale()) {
                continue;
            }
            $href = (string) $recordLocale->getAbsoluteLink();
            if ($href === '') {
                continue;
            }
            $localeObj = $recordLocale->getLocaleObject();
            $map = (array) $owner->config()->get('hreflang_map');
            $links->push(ArrayData::create([
                'HrefLang' => $map[$localeObj->Locale] ?? strtolower(i18n::convert_rfc1766($localeObj->Locale)),
                'Href' => $href,
            ]));
            if ($localeObj->getIsDefault()) {
                $default = $href;
            }
        }

        if ($links->count() < 2) {
            return ArrayList::create();
        }
        if ($default) {
            $links->push(ArrayData::create(['HrefLang' => 'x-default', 'Href' => $default]));
        }
        return $links;
    }

    public function getOGTitle(): string
    {
        $owner = $this->getOwner();
        return (string) ($owner->MetaTitle ?: $owner->Title);
    }

    public function getOGDescription(): string
    {
        $owner = $this->getOwner();
        if ($owner->MetaDescription) {
            return (string) $owner->MetaDescription;
        }
        $config = SiteConfig::current_site_config();
        return (string) ($config->SeoDefaultDescription ?: '');
    }

    public function getOGType(): string
    {
        return $this->getOwner() instanceof \BlogPage ? 'article' : 'website';
    }

    public function getOGLocale(): string
    {
        return str_replace('-', '_', i18n::get_locale());
    }

    /**
     * Share image, scaled to max. 1200 px wide (Image or DBFile variant), or null.
     */
    public function getOGImage(): ?AssetContainer
    {
        $owner = $this->getOwner();
        $image = null;

        foreach ($owner->config()->get('og_image_relations') as $rel) {
            if ($owner->hasMethod($rel)) {
                $candidate = $owner->$rel();
                if ($candidate instanceof Image && $candidate->exists()) {
                    $image = $candidate;
                    break;
                }
            }
        }

        if (!$image) {
            foreach ($owner->config()->get('og_image_slide_relations') as $rel) {
                if (!$owner->hasMethod($rel)) {
                    continue;
                }
                foreach ($owner->$rel() as $slide) {
                    if ($slide->hasMethod('Image') && $slide->Image()->exists()) {
                        $image = $slide->Image();
                        break 2;
                    }
                }
            }
        }

        if (!$image) {
            $fallback = SiteConfig::current_site_config()->SeoShareImage();
            if ($fallback && $fallback->exists()) {
                $image = $fallback;
            }
        }

        if (!$image) {
            return null;
        }
        $resized = $image->getWidth() > 1200 ? $image->ScaleWidth(1200) : $image;
        return $resized ?: $image;
    }

    /**
     * Non-live environments must never be indexed.
     */
    public function getSeoNoIndex(): bool
    {
        return !Director::isLive();
    }

    /**
     * JSON-LD script body (already JSON-encoded, safe for <script>).
     */
    public function getSchemaJSONLD(): string
    {
        return SchemaBuilder::create()->toJson($this->getOwner());
    }

    /**
     * True on the site home page (independent of locale prefix).
     */
    public function getIsSeoHomePage(): bool
    {
        return $this->getOwner()->URLSegment === RootURLController::get_homepage_link();
    }
}
