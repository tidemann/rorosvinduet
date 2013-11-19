<?php

global $project;
$project = 'mysite';

global $database;
$database = 'ss_rorosvinduet';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('nb_NO');

// Default translations
if (class_exists('Translatable')) {
	Translatable::set_default_locale('nb_NO');
	Translatable::set_allowed_locales(array(
		'nb_NO', // NZ English    
		'en_GB' // Needed to be able to create users in the CMS
	));
	Translatable::set_default_locale('nb_NO');
	SiteTree::add_extension('Translatable');
	SiteConfig::add_extension('Translatable');
}

