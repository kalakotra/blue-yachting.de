<?php

use SilverStripe\ORM\DataObject;

class NewsletterGroup extends DataObject
{
    
    private static $default_sort = "Title";

    private static $db = [
        'Title' => 'Varchar(250)',
        'Hide' => 'Boolean'
    ];

    private static $has_many = [
        'Yacht' => NewsletterYacht::class
    ];
}
