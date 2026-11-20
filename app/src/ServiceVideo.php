<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DateField;

class ServiceVideo extends DataObject
{

	private static $default_sort = "Sort";

    private static $db = [
    	'Title' => 'Varchar(250)',
        'YoutubeCode' => 'Varchar(20)',
        'Sort' => 'Int'
    ];

    private static $has_one = [
        'ServicePage' => ServicePage::class
    ];

    private static $many_many = [
    	
    ];

    private static $many_many_extraFields = [
    	
    ];

    private static $summary_fields = [
        'Title',
        'YoutubeCode'
    ];

    public function getCMSFields() {
    	$fields = parent::getCMSFields();

        $fields->removeFieldFromTab("Root.Main", "Sort");

    	return $fields;
    }

}
