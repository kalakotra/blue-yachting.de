<?php

use SilverStripe\ORM\DataObject;

class NewsletterYacht extends DataObject
{
    
    private static $default_sort = "Title";

    private static $db = [
        'Title' => 'Varchar(250)',
        'Inactive' => 'Boolean'
    ];

    private static $has_one = [
        'NewsletterGroup' => NewsletterGroup::class
    ];
}
