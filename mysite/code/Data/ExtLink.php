<?php


class ExtLink extends DataObject {

	private static $db = array(
		'Title' => 'Text',
		'Caption' => 'Text',
		'Link' => 'Varchar(256)',       
	);


    private static $belongs_many_many = array( 
        'Parents' => 'Page',
    ); 
    
	private static $summary_fields = array(
    
		'Title' => 'Title',
		'Caption' => 'Text',
		'Link' => 'Link',    
    ); 
}