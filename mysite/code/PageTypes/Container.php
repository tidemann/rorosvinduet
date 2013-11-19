<?php

class Container extends Page
{
	private static $db = array(
      
	);

	private static $has_one = array(
    );


    public function Some($number=3, $start=0) {
        return $this->Children()->limit($number, $start); 
    }
}

class Container_Controller extends Page_Controller {

	function rss() {
        $rss = new RSSFeed($this->Children(), $this->Link(), $this->MetaTitle );
        $rss->outputToBrowser();
	}

	function init() { 
        RSSFeed::linkToFeed($this->Link() . "rss");
        parent::init();
	}
}