<?php

namespace App\Seo;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Company data for JSON-LD (TSEO-006) and the default share image/description (TSEO-007).
 *
 * @extends Extension<SiteConfig>
 */
class SeoSiteConfigExtension extends Extension
{
    private static array $db = [
        'SeoCompanyName' => 'Varchar(255)',
        'SeoStreetAddress' => 'Varchar(255)',
        'SeoPostalCode' => 'Varchar(20)',
        'SeoCity' => 'Varchar(100)',
        'SeoCountryCode' => 'Varchar(2)',
        'SeoDefaultDescription' => 'Varchar(255)',
    ];

    private static array $has_one = [
        'SeoShareImage' => Image::class,
        'SeoLogo' => Image::class,
    ];

    private static array $owns = [
        'SeoShareImage',
        'SeoLogo',
    ];

    private static array $defaults = [
        'SeoCountryCode' => 'DE',
    ];

    protected function updateCMSFields(FieldList $fields): void
    {
        $fields->addFieldsToTab('Root.SEO', [
            HeaderField::create('SeoCompanyHeader', 'Unternehmen (strukturierte Daten)', 3),
            TextField::create('SeoCompanyName', 'Firmenname')
                ->setDescription('Wie im Impressum, z. B. „Blue Sailing GmbH“. Leer = kein LocalBusiness-Markup.'),
            TextField::create('SeoStreetAddress', 'Straße und Hausnummer'),
            TextField::create('SeoPostalCode', 'PLZ'),
            TextField::create('SeoCity', 'Ort'),
            TextField::create('SeoCountryCode', 'Ländercode (ISO, 2 Zeichen)'),
            UploadField::create('SeoLogo', 'Logo (PNG/JPG, mind. 112×112 px)')
                ->setFolderName('Uploads/seo/')
                ->setAllowedFileCategories('image/supported'),
            HeaderField::create('SeoShareHeader', 'Teilen in sozialen Netzwerken', 3),
            UploadField::create('SeoShareImage', 'Standard-Vorschaubild (1200×630 px)')
                ->setFolderName('Uploads/seo/')
                ->setAllowedFileCategories('image/supported')
                ->setDescription('Wird verwendet, wenn eine Seite kein eigenes Kopf- oder Vorschaubild hat.'),
            TextareaField::create('SeoDefaultDescription', 'Standard-Beschreibung (Vorschau)')
                ->setRows(2)
                ->setDescription('Für og:description, wenn eine Seite keine Meta-Beschreibung hat. 120–158 Zeichen.'),
        ]);
    }

    public function getSeoHasCompany(): bool
    {
        $owner = $this->getOwner();
        return (bool) ($owner->SeoCompanyName && $owner->SeoStreetAddress && $owner->SeoPostalCode && $owner->SeoCity);
    }
}
