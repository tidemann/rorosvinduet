<?php

class ContactsPage extends Page {

	/** //--// **/


	private static $many_many= array (
        'ContactGroups' => "ContactGroup",
       
    );

    public static $many_many_extraFields = array(
        'ContactGroups' => array('ManyManySort' => 'Int'),    
    );



	public function getGeneratedCMSFields() {
		$fields = parent::getCMSFields();

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();

        $contactGroups = new GridField(
            'ContactGroups',
            'ContactGroup',
            $this->ContactGroups() ,
            GridFieldConfig_RelationEditor::create());

        $contactGroups->setModelClass('ContactGroup');
        $contactGroups->getConfig()->addComponent(new GridFieldOrderableRows('ManyManySort'));

        $fields->addFieldToTab('Root.ContactGroups', $contactGroups);

        return $fields; 
    }

}

class ContactsPage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}