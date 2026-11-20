<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBField;

class NewsletterUser extends DataObject
{
    
    private static $default_sort = "Email";

    private static $db = [
        'Email' => 'Varchar(250)',
        'PersonalCode' => 'Varchar(250)',
        'Confirmed' => 'Boolean'
    ];

    /*private static $many_many = [
        'NewsletterYacht' => NewsletterYacht::class
    ];*/

    private static $summary_fields = [
        'Email' => 'Email',
        'PersonalCode' => 'PersonalCode',
        'myYachts' => 'Yachts'
    ];


    public function myYachts() {
        /*$myYachts = "";
        foreach ($this->NewsletterYacht() as $key => $value) {
            $myYachts .= $value->Title."<br />";
        }

        return DBField::create_field('HTMLVarchar', $myYachts);*/
    }
}
