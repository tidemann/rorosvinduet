<?php
/**
 * Adds new global settings.
 */

class SitelSiteConfig extends DataExtension {
	static $db = array(
	    
	);

	static $has_one = array(
		'Top1Page' => 'Page',
        'Top2Page' => 'Page',
        'Top3Page' => 'Page',
        'Top4Page' => 'Page',
		'Menu1Page' => 'Page',
		'Menu2Page' => 'Page',
		'Menu3Page' => 'Page',
		'Menu4Page' => 'Page',
	);

	function updateCMSFields(FieldList $fields) {

        for ($i = 1; $i < 5; $i++) {
            $fields->addFieldToTab('Root.Navigation', $gaCode = new TreeDropdownField("Top{$i}PageID", "{$i}. Top navigation:", "SiteTree"));
        }
        for ($i = 1; $i < 5; $i++) {
            $fields->addFieldToTab('Root.Navigation', $gaCode = new TreeDropdownField("Menu{$i}PageID", "{$i}. Main navigation:", "SiteTree"));
        }
	}

    function TopNav(){
        return   new ArrayList(array($this->owner->Top1Page(), $this->owner->Top2Page(), $this->owner->Top3Page(), $this->owner->Top4Page()));        
    }
    function MainNav(){
        return   new ArrayList(array($this->owner->Menu1Page(), $this->owner->Menu2Page(), $this->owner->Menu3Page(), $this->owner->Menu4Page()));        
    }
 
}
