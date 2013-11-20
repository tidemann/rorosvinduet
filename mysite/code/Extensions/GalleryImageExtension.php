<?php
class GalleryImageExtension extends DataExtension {

    private static $db = array(
        'Description' => 'Text',
        'ExtLink' => 'Text',
        'ButtonText' => 'Text'
    );

    static $has_one = array(
        'LinkedToPage' => 'SiteTree'
    );


    private static $belongs_many_many = array(
        'Galleries' => 'Page' );

    function getCustomFields() {
        $fields = new FieldList();
        $fields->push(new TextField('Name', 'File name'));
        $fields->push(new TextField('Title', 'Title'));


        $fields->push(new TextareaField('Description', 'Description'));
        $fields->push(new TextField('ButtonText', 'Button Text'));
        $fields->push(new TextField('ExtLink', 'External link'));
        $fields->push($treedropdownfield = new TreeDropdownField("LinkedToPageID", "Link image to::", "SiteTree"));
        return $fields;
    }


    function DecNum($num) {       
        return  $num - 1;
    }
    


}
  