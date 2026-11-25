<?php

namespace {

    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
    use SilverStripe\Assets\Image;
	use SilverStripe\AssetAdmin\Forms\UploadField;
    use Bummzack\SortableFile\Forms\SortableUploadField;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use Symbiote\GridFieldExtensions\GridFieldOrderableRows;
    use SilverStripe\Control\Controller;
    use SilverStripe\Model\List\PaginatedList;

    class BlogHolder extends Page
    {
        private static $icon_class = "font-icon-page-multiple";

        private static $allowed_children = [
            'BlogPage'
        ];

        private static $db = [
        ];

        private static $has_one = [
        	'HeaderImage' => Image::class,
            'ContentImage' => Image::class
        ];

        private static $has_many = [
            
        ];

        private static $many_many = [
        ];

        private static $many_many_extraFields = [
        ];

        private static $owns = [
        	'HeaderImage',
            'ContentImage'
        ];

        /**
         * Posts per overview page (config: BlogHolder.posts_per_page).
         */
        private static $posts_per_page = 12;

        private ?PaginatedList $paginatedPosts = null;

        /**
         * Paginated posts, newest first (same order as before: Sort descending).
         */
        public function PaginatedPosts(): PaginatedList
        {
            if ($this->paginatedPosts) {
                return $this->paginatedPosts;
            }
            $controller = Controller::curr();
            $list = PaginatedList::create(
                BlogPage::get()->filter('ParentID', $this->ID)->sort('Sort', 'DESC'),
                $controller ? $controller->getRequest() : null
            );
            return $this->paginatedPosts = $list->setPageLength((int) $this->config()->get('posts_per_page'));
        }

        public function getCMSFields() {
        	$fields = parent::getCMSFields();

            $fields->addFieldToTab("Root.Main", UploadField::create("HeaderImage")->setFolderName('Uploads/header/'));
            $fields->addFieldToTab("Root.Main", UploadField::create("ContentImage")->setFolderName('Uploads/blog/'));

        	return $fields;
        }
    }
}
