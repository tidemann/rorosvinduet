<?php
/**
 * Adds new global settings.
 */

class SitelSiteConfig extends DataExtension {
	static $db = array(
        'FooterContact' => 'HTMLText'
	);

	static $has_one = array(
        'FooterLinksCol1'=> 'Page',
        'FooterLinksCol2'=> 'Page',
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
        $fields->addFieldToTab('Root.Footer', $gaCode = new TreeDropdownField("FooterLinksCol1ID", "Footer column 1", "SiteTree"));
        $fields->addFieldToTab('Root.Footer', $gaCode = new TreeDropdownField("FooterLinksCol2ID", "Footer column 2", "SiteTree"));
        $fields->addFieldToTab("Root.Footer", new HTMLEditorField("FooterContact", "Content"));

        for ($i = 1; $i < 5; $i++) {
            $fields->addFieldToTab('Root.Navigation', $gaCode = new TreeDropdownField("Top{$i}PageID", "{$i}. Top navigation:", "SiteTree"));
        }
        for ($i = 1; $i < 5; $i++) {
            $fields->addFieldToTab('Root.Navigation', $gaCode = new TreeDropdownField("Menu{$i}PageID", "{$i}. Main navigation:", "SiteTree"));
        }
	}
    function FooterCols(){
        return new ArrayList(array($this->owner->FooterLinksCol1(), $this->owner->FooterLinksCol2()));
    }

    function TopNav(){
        return   new ArrayList(array($this->owner->Top1Page(), $this->owner->Top2Page(), $this->owner->Top3Page(), $this->owner->Top4Page()));        
    }
    function MainNav(){
        return   new ArrayList(array($this->owner->Menu1Page(), $this->owner->Menu2Page(), $this->owner->Menu3Page(), $this->owner->Menu4Page()));        
    }
 
}
