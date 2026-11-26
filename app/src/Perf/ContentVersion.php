<?php

namespace App\Perf;

use SilverStripe\Assets\File;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\DB;
use SilverStripe\Security\Security;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\Versioned\Versioned;
use TractorCow\Fluent\State\FluentState;

/**
 * Cheap fingerprint of all content that ends up in cached template blocks.
 *
 * Changes whenever a page (incl. Fluent translations), file or the site config is
 * written/published, so partial caches never serve stale navigation or teasers.
 * Computed once per request (a handful of MAX/COUNT queries).
 */
class ContentVersion
{
    private static ?string $memo = null;

    public static function get(): string
    {
        if (self::$memo !== null) {
            return self::$memo;
        }

        $live = Versioned::get_stage() === Versioned::LIVE;
        $suffix = $live ? '_Live' : '';
        $parts = [$live ? 'live' : 'draft'];

        // Base tables only: Fluent's localised tables have no LastEdited, but every
        // translation write/publish also writes the base row and bumps its Version.
        $tables = [
            DataObject::getSchema()->baseDataTable(SiteTree::class) . $suffix,
            DataObject::getSchema()->baseDataTable(File::class) . $suffix,
        ];
        foreach ($tables as $table) {
            $row = DB::query(sprintf(
                'SELECT MAX("LastEdited") AS m, COUNT(*) AS c, SUM("Version") AS v FROM "%s"',
                $table
            ))->record();
            $parts[] = ($row['m'] ?? '') . '/' . ($row['c'] ?? 0) . '/' . ($row['v'] ?? 0);
        }
        $parts[] = (string) SiteConfig::get()->max('LastEdited');

        return self::$memo = md5(implode('|', $parts));
    }

    /**
     * Key segments that vary per visitor context: locale, stage, logged-in member.
     * Member is included because canView() decides which menu entries are shown.
     */
    public static function context(): string
    {
        $locale = class_exists(FluentState::class) ? (string) FluentState::singleton()->getLocale() : '';
        $member = Security::getCurrentUser();
        return implode('_', [$locale, Versioned::get_stage(), $member ? $member->ID : 0]);
    }

    /**
     * Reset the per-request memo (tests, long-running CLI tasks).
     */
    public static function reset(): void
    {
        self::$memo = null;
    }
}
