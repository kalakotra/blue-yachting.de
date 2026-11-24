<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;
    use SilverStripe\View\SSViewer;
    use SilverStripe\ORM\FieldType\DBField;
    use SilverStripe\Forms\Form;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\FormAction;
    use SilverStripe\Forms\Validation\RequiredFieldsValidator;
    use SilverStripe\Forms\DropdownField;
    use SilverStripe\Forms\EmailField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\CheckboxSetField;
    use SilverStripe\Control\Email\Email;
    use SilverStripe\Model\List\ArrayList;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [
            'NewsletterForm',
            'ShopForm',
            'getImpressions',
            'NewsletterPageForm'
        ];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/


            if ($this->URLSegment != "Security") {
                $myThemes = SSViewer::get_themes();
                $myThemePath = "themes/".$myThemes[1]."/";

                Requirements::css($myThemePath.'css/scss/bootstrap.scss', 'all');

                Requirements::backend()->setWriteHeaderComment(false);
                $css = [];
                $css[] = $myThemePath.'css/layout.css';
                $css[] = $myThemePath.'css/navigation.css';
                $css[] = $myThemePath.'css/reset.css';
                $css[] = $myThemePath.'css/fonts.css';
                $css[] = $myThemePath.'css/font-size.css';
                Requirements::combine_files('styles2.css', $css, ["media"=>"all"]);
                Requirements::process_combined_files();

                $css = [];
                $css[] = $myThemePath.'css/jquery.fancybox.min.css';            // fancybox popup
                $css[] = $myThemePath.'css/aos.css';                            // animate on scroll
                $css[] = $myThemePath.'css/hamburgers.min.css';                 // hamburger menu
                $css[] = $myThemePath.'css/all.min.css';                        // fontawesome
                Requirements::combine_files('plugins.css', $css, ["media"=>"all"]);
                Requirements::process_combined_files();

                $js = [];
                $js[] = $myThemePath.'javascript/jquery-3.5.1.min.js';
                Requirements::combine_files('jquery.js', $js);
                Requirements::process_combined_files();

                $js = [];
                $js[] = $myThemePath.'javascript/popper.min.js';
                $js[] = $myThemePath.'javascript/bootstrap.min.js';
                $js[] = $myThemePath.'javascript/aos.js';
                $js[] = $myThemePath.'javascript/jquery.fancybox.min.js';
                $js[] = $myThemePath.'javascript/script.js';
                Requirements::combine_files('javascripts.js', $js, ["async"=>true, "defer" => true]);
                Requirements::process_combined_files();
            }
        }


        public function getMyClass($myClass = "Page") {
            return $myClass::get();
        }

        /**
         * Absolute link to the privacy policy page (TSEO-003: avoid relative "datenschutz/" links).
         */
        public function privacyPolicyLink(): string
        {
            $page = \SilverStripe\CMS\Model\SiteTree::get()->filter('URLSegment', 'datenschutz')->first();
            return $page ? htmlspecialchars($page->Link(), ENT_QUOTES) : '';
        }

        public function getRandomServicePages($limit = 3) {
            $pages = ServicePage::get()->toArray();
            shuffle($pages);

            return ArrayList::create(array_slice($pages, 0, (int) $limit));
        }

        public function getImpressions() {
            $myParent = $this->request->param("ID");
            $myImp = $this->request->param("OtherID");

            $myHolder = BooteHolder::get()->byId($myParent);
            $myChildren = [];
            foreach ($myHolder->Children()->map("ID", "Title") as $key => $value) {
                $myChildren[$key] = $value;
            }
            $myArray = ["children"=>$myChildren, "active"=>$myImp];

            $this->response->addHeader('Content-Type', 'application/json');
            return json_encode($myArray);

        }

        public function NewsletterForm() { 
            $myTM = $this->getMyClass("BooteHolder")->filter(["ShowOnHomeLogo" => "1"]);
            $fields = FieldList::create( 
                EmailField::create('Email', 'Email')->setAttribute("placeholder", "Email")->addExtraClass("hide-label")->setAttribute('aria-label', 'Email'), 
                DropdownField::create('Trademark', 'Trademark', $myTM->map("ID", "MenuTitle"))->setEmptyString(_t("NewsletterForm.Trademark","Welche Marken interessieren Sie?"))->addExtraClass("mb-0")->addExtraClass("hide-label"),
                CheckboxField::create("datenschutz", DBField::create_field("HTMLFragment", 'Ich habe die <a href="' . $this->privacyPolicyLink() . '" target="_blank" class="text-white-">Datenschutzerklärung</a> gelesen und akzeptiere sie.')) //->addExtraClass("text-white")
            ); 

            $actions = FieldList::create( 
                FormAction::create('submitNewsletterForm', _t("NewsletterForm.Submit","Abschicken"))->addExtraClass("btn-info")->setDisabled(true) 
            ); 

            $validator = RequiredFieldsValidator::create('Email', 'Trademark');

            $form = Form::create($this, 'NewsletterForm', $fields, $actions, $validator);

            // form add legend
            $form->setLegend(_t("NewsletterForm.Legend","Newsletter abonnieren"));

            $form->setTemplate('NewsletterForm');

            return $form;
        }

        public function submitNewsletterForm($data, $form) {

        }


        public function ShopForm() { 
            $myProducts = $this->getMyClass("Product")->filter(["ShopPageID" => $this->ID]);
            $fields = FieldList::create( 
                CheckboxSetField::create('Products', 'Ausgewählte Produkte', $myProducts->map()),
                EmailField::create('Email', 'Email')->setAttribute("placeholder", "Email")->addExtraClass("hide-label"), 
                CheckboxField::create("datenschutz", DBField::create_field("HTMLFragment", 'Ich habe die <a href="' . $this->privacyPolicyLink() . '" target="_blank" ><u>Datenschutzerklärung</u></a> gelesen und akzeptiere sie.'))
            ); 

            $actions = FieldList::create( 
                FormAction::create('submitShopForm', _t("ShopForm.Submit","Angebot anfordern"))->addExtraClass("btn-info") 
            ); 

            $validator = RequiredFieldsValidator::create('Products', 'Email', 'datenschutz');

            $form = Form::create($this, 'ShopForm', $fields, $actions, $validator); 

            //$form->setTemplate('NewsletterForm');

            return $form;
        }

        public function submitShopForm($data, $form) {

            $myProducts = $this->getMyClass("Product")->filter(["ShopPageID" => $this->ID, "ID"=>$data["Products"]]);
            $myBody = "<p><strong>Ausgewählte Produkte:</strong></p>";
            foreach ($myProducts as $key => $value) {
                $myBody .= "<p>".$value->Title."</p>";
            }

            $email = new Email(); 

            $email->setTo($this->ShopFormEmail); 
            $email->setFrom($data['Email']); 
            $email->setSubject("Blue Yachting Shop"); 

            $email->setBody($myBody); 
            $email->send(); 
            return [
                'Content' => DBField::create_field("HTMLFragment", $this->ShopTextAfterSend),
                'ShopForm' => false,
                'Product' => false
            ];
        }

        public function NewsletterPageForm() { 
            $myTM = $this->getMyClass("BooteHolder")->filter(["ShowOnHomeLogo" => "1"]);
            $fields = FieldList::create(
                TextField::create('Subject', 'Betreff')->setAttribute("placeholder", "Betreff")->setAttribute('aria-label', 'Betreff'),
                EmailField::create('Email', 'Email')->setAttribute("placeholder", "Email")->setAttribute('aria-label', 'Email'), 
                TextField::create('FirstName', 'Vorname')->setAttribute("placeholder", "Vorname")->setAttribute('aria-label', 'Vorname'),
                TextField::create('LastName', 'Nachname')->setAttribute("placeholder", "Nachname")->setAttribute('aria-label', 'Nachname'),
                CheckboxField::create("datenschutz", DBField::create_field("HTMLFragment", 'Ich habe die <a href="' . $this->privacyPolicyLink() . '" target="_blank" class="text-white-">Datenschutzerklärung</a> gelesen und akzeptiere sie.'))
            ); 

            $actions = FieldList::create( 
                FormAction::create('submitNewsletterPageForm', _t("NewsletterForm.Submit","Abschicken"))->addExtraClass("btn-info")
            ); 

            $validator = RequiredFieldsValidator::create('Email', 'FirstName', 'LastName', 'datenschutz');

            $form = Form::create($this, 'NewsletterPageForm', $fields, $actions, $validator);

            // form add legend
            $form->setLegend(_t("NewsletterForm.Legend","Newsletter abonnieren"));

            return $form;
        }

        public function submitNewsletterPageForm($data, $form) {
            // subject is a fake field for robots, if it is filled redirect home, otherwise save the subscription
            if ($data["Subject"] != "") {
                $this->redirect("/");
            } else {
                $subscription = NewsletterSubscription::create();
                $form->saveInto($subscription);
                $subscription->NewsletterPageID = $this->ID;
                $subscription->write();

                return [
                    'Content' => DBField::create_field("HTMLFragment", $this->TextAfterNewsletterSubscription),
                    'NewsletterPageForm' => false
                ];
                
            }
        }
    }
}