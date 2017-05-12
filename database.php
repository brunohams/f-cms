#!/usr/bin/env php
<?php
	/** Include the Composer files */
    include_once ('vendor/autoload.php');

    /** Define the base path **/
    define ('path',__DIR__.DIRECTORY_SEPARATOR);

	/** Init the database */
	$database = new \Parvus\Database($argv);
	$database->run();