<?php

use SilverStripe\i18n\i18n;
use SilverStripe\TinyMCE\TinyMCEConfig;

i18n::set_locale('de_DE');

TinyMCEConfig::get('cms')
    ->addButtonsToLine(1, 'styleselect')
    ->setOption('importcss_append', true);
