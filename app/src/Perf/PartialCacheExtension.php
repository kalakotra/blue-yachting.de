<?php

namespace App\Perf;

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Core\Extension;

/**
 * Template helper for partial caching: <% cached $PartialCacheKey('header-nav', 1) %>.
 *
 * - $name:    block name
 * - $perPage: 1 if the block depends on the current page (e.g. LinkingMode in menus)
 *
 * @extends Extension<ContentController>
 */
class PartialCacheExtension extends Extension
{
    public function PartialCacheKey(string $name, $perPage = 0): string
    {
        $parts = [$name, ContentVersion::context(), ContentVersion::get()];
        if ((int) $perPage) {
            $record = $this->getOwner()->data();
            $parts[] = $record ? $record->ID : 0;
        }
        return implode('_', $parts);
    }
}
