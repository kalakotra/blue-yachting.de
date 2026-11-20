<?php

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class NewsletterPage extends Page
{
    private static $db = [
        'TextAfterNewsletterSubscription' => 'HTMLText',
    ];

    private static $has_many = [
        'Subscriptions' => NewsletterSubscription::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', HTMLEditorField::create('TextAfterNewsletterSubscription', 'Text nach Newsletter Anmeldung')->setRows(10));

        $gridConfig = GridFieldConfig_RecordEditor::create();
        $gridField = GridField::create(
            'Subscriptions',
            'Newsletter Subscriptions',
            $this->Subscriptions(),
            $gridConfig
        );
        $fields->addFieldToTab('Root.Subscriptions', $gridField);

        return $fields;
    }
}