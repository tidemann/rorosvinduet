<?php
class Page extends SiteTree {

	private static $db = array(
        "Subtitle" => "Text",
        "Introduction" => "Text",

        'LeftBlock' => 'HTMLText',
        'RightBlock' => 'HTMLText',

        "SideMenuTitle" => "Text",
        "SideMenuIntro" => "Text",
        "ShowIntroInContainer" => "Boolean",
	);

	private static $has_one = array(
        'Packshot' => 'Image',
	);


  	private static $many_many= array (
        'RelatedPages' => "Page",
        'CarouselImags' => 'Image',
        'PageFiles' => 'File',   
        'ExtLinks' => "ExtLink"
    );


    private static $many_many_extraFields=array( 'GalleryImages'=>array('SortOrder'=>'Int'), 'Links'=>array('SortOrder'=>'Int'));

	function getCMSFields() {
		$fields = parent::getCMSFields();
    
        $fields->addFieldToTab("Root.Main", new TextAreaField('Subtitle', _t('Page.SUBTITLE', 'Subtitle')), "Content");
        $fields->addFieldToTab("Root.Main", new TextAreaField('Introduction', _t('Page.INTRODUCTION', 'Introduction')), "Content");


        $fields->addFieldToTab("Root.Main", HtmlEditorField::create('LeftBlock', _t('Page.LeftBlock', 'Left'))->setRows(12), "Content");
        $fields->addFieldToTab("Root.Main", HtmlEditorField::create('RightBlock', _t('Page.RightBlock', 'Right'))->setRows(12), "Content");
 

        $fields->addFieldToTab("Root.Images", $image = UploadField::create('Packshot', _t('Product.packshot', 'Packshot')));       
        $fields->addFieldToTab("Root.Images", $uploadField = SortableUploadField::create('CarouselImags', _t('Page.CarouselImags', 'Gallery Images')));
        $uploadField->setFolderName('CarouselImags');
        $uploadField->setFileEditFields('getCustomFields');
        $uploadField->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

        $fields->addFieldToTab("Root.SideMenu", new TextField('SideMenuTitle', _t('Page.TITLE', 'Title')));
        $fields->addFieldToTab("Root.SideMenu", new TextAreaField('SideMenuIntro', _t('Page.INTRODUCTION', 'Introduction')));
        $fields->addFieldToTab("Root.SideMenu", new TreeMultiselectField('RelatedPages', _t('Page.RELATEDPAGES', 'Related pages'), "SiteTree"));
        $fields->addFieldToTab("Root.SideMenu", $uploadField = SortableUploadField::create('PageFiles', _t('Page.Files', 'Files')));
        $uploadField->setFolderName('Files');
        // Carousel tab
        $extLinks = new GridField(
            'ExtLinks',
            'ExtLink',
            $this->SortedExtLinks() ,
            GridFieldConfig_RelationEditor::create());

        $extLinks->setModelClass('ExtLink');
        $extLinks->getConfig()->addComponent(new GridFieldOrderableRows('ManyManySort'));

        $fields->addFieldToTab('Root.SideMenu', $extLinks);

        return $fields;
    }
    function getSettingsFields() { 
      $fields = parent::getSettingsFields(); 
      $fields->addFieldToTab("Root.Settings", new CheckBoxField('ShowIntroInContainer', 'Show intro in container?'),'ShowInSearch'); 
      return $fields; 
   }


 
    public function GalleryImages() {
        return $this->CarouselImags()->sort('SortOrder');
    }

    
    public function SortedFiles() {
        return $this->PageFiles()->sort('SortOrder');
    }

    public function SortedExtLinks() {
        return $this->ExtLinks()->sort('ManyManySort');
    }

    public function NavChildren() {
        return $this->Children()->exclude('ClassName', "SubPage") ;
    }

    public function SubPages() {
        return $this->Children()->filter('ClassName', "SubPage") ;
    }
}

class Page_Controller extends ContentController {

	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();

	}
}
