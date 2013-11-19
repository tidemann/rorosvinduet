<?php

class ContactGroup extends DataObject {

	private static $db = array(
		'Title' => 'Varchar(256)' ,  
        'Introduction' => 'HTMLText',
	);

    private static $many_many= array (
        'Contacts' => "Contact",       
    );
    
	private static $summary_fields = array(    
		'Title' => 'Title',       
    ); 


    private static $many_many_extraFields = array(
        'Contacts' => array('ManyManySort' => 'Int'),    
    );

    public function getCMSFields() {
		$fields = parent::getCMSFields();


        $fields->addFieldToTab("Root.Main", new TextField('Title', _t('ContactGroup.Title', 'Title')) );
        $fields->addFieldToTab("Root.Main", HtmlEditorField::create('Introduction', _t('ContactGroup.INTRODUCTION', 'Introduction')));

        $contactGroups = new GridField(
            'Contacts',
            'Contact',
            $this->Contacts() ,
            GridFieldConfig_RelationEditor::create());

        $contactGroups->setModelClass('Contact');
        $contactGroups->getConfig()->addComponent(new GridFieldOrderableRows('ManyManySort'));

        $fields->addFieldToTab('Root.Contacts', $contactGroups);

        return $fields; 
    }

   
}