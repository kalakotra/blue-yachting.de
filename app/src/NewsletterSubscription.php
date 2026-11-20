<?php

use SilverStripe\ORM\DataObject;

class NewsletterSubscription extends DataObject
{
    
    private static $default_sort = "Email";

    private static $db = [
        'Email' => 'Varchar(250)',
        'FirstName' => 'Varchar(250)',
        'LastName' => 'Varchar(250)',
    ];

    private static $has_one = [
        'NewsletterPage' => NewsletterPage::class,
    ];

    private static $field_labels = [
        'Email' => 'E-Mail',
        'FirstName' => 'Vorname',
        'LastName' => 'Nachname',
    ];

    private static $summary_fields = [
        'Email' => 'E-Mail',
        'FirstName' => 'Vorname',
        'LastName' => 'Nachname',
        'NewsletterPage.Title' => 'Newsletter Seite',
    ];
}
