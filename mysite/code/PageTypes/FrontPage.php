<?php

class FrontPage extends Page
{
	private static $db = array(
      
	);

	private static $has_one = array(
        'TeaserCol1'=> 'Page',
        'TeaserCol2'=> 'Page',
        'TeaserCol3'=> 'Page'

    );


    public function Some($number=3, $start=0) {
        return $this->Children()->limit($number, $start); 
    }
	function getCMSFields() {
		$fields = parent::getCMSFields();
    
        $fields->addFieldToTab("Root.Teasers", new TreeDropdownField("TeaserCol1ID", "Teaser column 1", "SiteTree"));
        $fields->addFieldToTab("Root.Teasers", new TreeDropdownField("TeaserCol2ID", "Teaser column 2", "SiteTree"));
        $fields->addFieldToTab("Root.Teasers", new TreeDropdownField("TeaserCol3ID", "Teaser column 3", "SiteTree"));
        
        return $fields;
    }

	public function Teasers() {
        return new ArrayList(array($this->TeaserCol1(), $this->TeaserCol2(), $this->TeaserCol3()));
    }


}

class FrontPage_Controller extends Page_Controller {

}
