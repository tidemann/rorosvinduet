<?php

class FrontPage extends Page
{
	private static $db = array(
      
	);

	private static $has_one = array(
    );


    public function Some($number=3, $start=0) {
        return $this->Children()->limit($number, $start); 
    }
}

class FrontPage_Controller extends Page_Controller {

}
