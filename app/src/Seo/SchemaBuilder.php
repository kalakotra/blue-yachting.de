<?php

namespace App\Seo;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Control\Director;
use SilverStripe\Core\Injector\Injectable;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Builds the JSON-LD graph for a page (TSEO-006).
 * Only types whose required properties are reliably available are emitted:
 * LocalBusiness (if company data is filled in), WebSite, BreadcrumbList, BlogPosting.
 */
class SchemaBuilder
{
    use Injectable;

    public function build(SiteTree $page): array
    {
        $config = SiteConfig::current_site_config();
        $base = rtrim(Director::absoluteBaseURL(), '/') . '/';
        $orgId = $base . '#organization';
        $graph = [];

        if ($config->getSeoHasCompany()) {
            $graph[] = $this->organization($config, $base, $orgId);
        }

        if ($page->getIsSeoHomePage()) {
            $website = [
                '@type' => 'WebSite',
                '@id' => $base . '#website',
                'url' => $base,
                'name' => (string) ($config->Title ?: 'Blue Yachting'),
                'inLanguage' => str_replace('_', '-', $page->getOGLocale()),
            ];
            if ($config->getSeoHasCompany()) {
                $website['publisher'] = ['@id' => $orgId];
            }
            $graph[] = $website;
        } else {
            $crumbs = $this->breadcrumbs($page);
            if ($crumbs) {
                $graph[] = $crumbs;
            }
        }

        if ($page instanceof \BlogPage) {
            $graph[] = $this->blogPosting($page, $config, $orgId);
        }

        return $graph ? ['@context' => 'https://schema.org', '@graph' => $graph] : [];
    }

    public function toJson(SiteTree $page): string
    {
        $data = $this->build($page);
        if (!$data) {
            return '';
        }
        return (string) json_encode(
            $data,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP
        );
    }

    private function organization(SiteConfig $config, string $base, string $orgId): array
    {
        $org = [
            '@type' => 'LocalBusiness',
            '@id' => $orgId,
            'name' => (string) $config->SeoCompanyName,
            'url' => $base,
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => (string) $config->SeoStreetAddress,
                'postalCode' => (string) $config->SeoPostalCode,
                'addressLocality' => (string) $config->SeoCity,
                'addressCountry' => (string) ($config->SeoCountryCode ?: 'DE'),
            ],
        ];
        if ($config->TelephoneLink) {
            $org['telephone'] = (string) $config->TelephoneLink;
        }
        if ($config->Email) {
            $org['email'] = (string) $config->Email;
        }
        $logo = $config->SeoLogo();
        if ($logo && $logo->exists()) {
            $org['logo'] = $logo->getAbsoluteURL();
        }
        $image = $config->SeoShareImage();
        if ($image && $image->exists()) {
            $org['image'] = $image->getAbsoluteURL();
        }
        $sameAs = array_values(array_filter([
            (string) $config->Facebook,
            (string) $config->Instagram,
            (string) $config->Twitter,
        ], fn ($u) => str_starts_with($u, 'http')));
        if ($sameAs) {
            $org['sameAs'] = $sameAs;
        }
        return $org;
    }

    private function breadcrumbs(SiteTree $page): ?array
    {
        $items = [];
        $position = 1;
        $home = \HomePage::get()->first();
        if ($home) {
            $items[] = $this->crumb($position++, (string) $home->MenuTitle, $home->AbsoluteLink());
        }
        foreach ($page->getBreadcrumbItems() as $item) {
            if ($home && (int) $item->ID === (int) $home->ID) {
                continue;
            }
            $items[] = $this->crumb($position++, (string) ($item->MenuTitle ?: $item->Title), $item->AbsoluteLink());
        }
        if (count($items) < 2) {
            return null;
        }
        return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
    }

    private function crumb(int $position, string $name, string $url): array
    {
        return ['@type' => 'ListItem', 'position' => $position, 'name' => $name, 'item' => $url];
    }

    private function blogPosting(\BlogPage $page, SiteConfig $config, string $orgId): array
    {
        $post = [
            '@type' => 'BlogPosting',
            '@id' => $page->getCanonicalURL() . '#article',
            'mainEntityOfPage' => $page->getCanonicalURL(),
            'headline' => mb_substr((string) $page->Title, 0, 110),
            'datePublished' => date('c', strtotime((string) $page->Created)),
            'dateModified' => date('c', strtotime((string) $page->LastEdited)),
            'inLanguage' => str_replace('_', '-', $page->getOGLocale()),
        ];
        if ($page->MetaDescription) {
            $post['description'] = (string) $page->MetaDescription;
        } elseif ($page->PreviewText) {
            $post['description'] = (string) $page->PreviewText;
        }
        $image = $page->getOGImage();
        if ($image) {
            $post['image'] = $image->getAbsoluteURL();
        }
        if ($config->getSeoHasCompany()) {
            $post['author'] = ['@id' => $orgId];
            $post['publisher'] = ['@id' => $orgId];
        } else {
            $post['author'] = ['@type' => 'Organization', 'name' => (string) ($config->Title ?: 'Blue Yachting')];
        }
        return $post;
    }
}
