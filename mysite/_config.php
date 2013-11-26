<?php

global $project;
$project = 'mysite';

global $database;
$database = 'ss_rorosvinduet';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('nb_NO');


Image::add_extension('GalleryImageExtension');
File::add_extension('PageFilesExtension');