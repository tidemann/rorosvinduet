<?php
class Page extends SiteTree {

	private static $db = array(
        "Subtitle" => "Text",
        "Introduction" => "Text",
        "TeaserText" => "Text",        

        'LeftBlock' => 'HTMLText',
        'RightBlock' => 'HTMLText',

        "SideMenuTitle" => "Text",
        "SideMenuIntro" => "Text",
        "ShowIntroInContainer" => "Boolean",
        "LargeTopCarousel" => "Boolean",
	);

	private static $has_one = array(
        'TeaserImage' => 'Image',
	);


  	private static $many_many= array (
        'RelatedPages' => "Page",
        'CarouselImages' => 'Image',
        'PageFiles' => 'File',   
        'ExtLinks' => "ExtLink"
    );


    private static $many_many_extraFields=array( 'GalleryImages'=>array('SortOrder'=>'Int'), 'Links'=>array('SortOrder'=>'Int'));

	function getCMSFields() {
		$fields = parent::getCMSFields();
    
        $fields->addFieldToTab("Root.Main", new TextAreaField('Subtitle', _t('Page.SUBTITLE', 'Subtitle')), "Content");
        $fields->addFieldToTab("Root.Main", new TextAreaField('Introduction', _t('Page.INTRODUCTION', 'Introduction')), "Content");
        $fields->addFieldToTab("Root.Main", new TextAreaField('TeaserText', _t('Page.TEASERTEXT', 'TeaserText')), "Content");


        $fields->addFieldToTab("Root.Main", HtmlEditorField::create('LeftBlock', _t('Page.LeftBlock', 'Left'))->setRows(12), "Content");
        $fields->addFieldToTab("Root.Main", HtmlEditorField::create('RightBlock', _t('Page.RightBlock', 'Right'))->setRows(12), "Content");
 

        $fields->addFieldToTab("Root.Images", $image = UploadField::create('TeaserImage', _t('Page.TeaserImage', 'TeaserImage')));       
        $fields->addFieldToTab("Root.Images", $uploadField = SortableUploadField::create('CarouselImages', _t('Page.CarouselImages', 'Gallery Images')));
        $fields->addFieldToTab("Root.Images", new CheckBoxField('LargeTopCarousel', _t('Page.LARGETOPCAROUSEL', 'Use large top carousel'),'Gallery Images')); 
        $uploadField->setFolderName('CarouselImages');
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
        return $this->CarouselImages()->sort('SortOrder');
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

    public function TeaserChildren() {
        return $this->Children()->filter("ShowIntroInContainer", true);
    }
    public function TeaserCols() {
        $items = $this->TeaserChildren()->Count();
        $cols = 12;
        if ($items > 0)
        {
            $cols = 12 /$items;
            if ($cols < 3){
                $cols = 3;
            }
        }

        return  $cols;
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
