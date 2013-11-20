<?php
class PageFilesExtension extends DataExtension {
    private static $db = array(
        'Description' => 'Text'
    );

    static $has_one = array(
        'LinkedTo' => 'SiteTree'
    );


    private static $belongs_many_many = array('Files' => 'Page');

    function getCustomFields() {
        $fields = new FieldList();
        $fields->push(new TextField('Title', 'Title'));
        $fields->push(new TextareaField('Description', 'Description'));
        $treedropdownfield = new TreeDropdownField("LinkedToID", "Link image to::", "SiteTree");
        return $fields;
    }


}
  