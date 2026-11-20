<?php

use SilverStripe\Admin\ModelAdmin;

class NewsletterAdmin extends ModelAdmin {

    private static $menu_icon_class = 'font-icon-edit-list';
    
    private static $managed_models = [
        'NewsletterSubscription'/*, 
        'NewsletterGroup'*/
    ]; 
    
    private static $url_segment = 'newsletter'; 
    private static $menu_title = "Newsletter";

    //private static $menu_priority = -80;

    
    
}