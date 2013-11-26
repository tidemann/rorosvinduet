<?php

class Contact extends DataObject {

	private static $db = array(
        'Name' => 'Varchar(256)',
		'Title' => 'Varchar(256)',
		'Caption' => 'Text',
		'Email' => 'Varchar(256)',
        'Fax' => 'Varchar(256)',
        'Tlf' => 'Varchar(256)',
        'Mob' => 'Varchar(256)',
        'Section' =>  'Text',
        'IconsSize' =>  'Text',
	);

	private static $has_one = array(
        'Photo' => 'Image',
	);

    private static $belongs_many_many = array( 
        'Parents' => 'ContactGroup',
    ); 
    
	private static $summary_fields = array(
    
		'Name' => 'Name',
		'Caption' => 'Caption',
		'Email' => 'Email',    
    );   

	function getCMSFields() {
		$fields = parent::getCMSFields();
        $fields->addFieldToTab("Root.Main", new TextField('Name', _t('Contact.Name', 'Name')));
        $fields->addFieldToTab("Root.Main", new TextField('Title', _t('Contact.Title', 'Title')));
        $fields->addFieldToTab("Root.Main", new TextAreaField('Caption', _t('Contact.Caption', 'Caption')));
        $fields->addFieldToTab("Root.Main", new TextField('Email', _t('Contact.Email', 'Email')));
        $fields->addFieldToTab("Root.Main", new TextField('Tlf', _t('Contact.Tlf', 'Tlf')));
        $fields->addFieldToTab("Root.Main", new TextField('Fax', _t('Contact.Fax', 'Fax')));
        $fields->addFieldToTab("Root.Main", new TextField('Mob', _t('Contact.Mob', 'Mob')));

        $fields->addFieldToTab("Root.Main", $uploadField = UploadField::create('Photo', _t('Contact.Photo', 'Photo')));
        $uploadField->setFolderName('Photos');
       
        $fields->addFieldToTab("Root.Main", new DropdownField(
            'Section',
            'Section',
            array(
                '' => 'None',
                'bolig' => 'Bolig',
                'barnehage' => 'Barnehage',  
                'raadgivning' => 'Raadgivning',
                'cafe' => 'Cafe',
            )
        ));

        $fields->addFieldToTab("Root.Main", new DropdownField(
            'IconsSize',
            'IconsSize',
            array(
                'big' => 'Big',
                'small' => 'Small'           
            )
        ));
        return $fields;
    }
}