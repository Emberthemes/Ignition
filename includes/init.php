<?php

/**
 * Load all required files
 * Emberthemes.net
 */

// Define Paths

define('PATH_BASE',  realpath(dirname(__FILE__) . '..'));
define('PATH_ABSOLUTE', dirname(__FILE__) . '/');
define('PATH_ASSETS',  PATH_BASE . 'assets/');
define('PATH_LANGUAGE', PATH_ABSOLUTE . 'language/');
define('PATH_IGNITION', PATH_ABSOLUTE . 'ignition/');
define('PATH_TEMPLATES', PATH_ABSOLUTE . 'templates/');

// Include Config

include (PATH_ABSOLUTE . 'config.php');

// Check if language file exists, default to engrish

if (file_exists(PATH_LANGUAGE . $config['language'] . '.php')) {

	include (PATH_LANGUAGE . $config['language'] . '.php');

} else {

	include (PATH_LANGUAGE . 'en.php');

}

// Define & Dynamically load ignition classes

foreach($classes as $class) {
	if(file_exists(PATH_IGNITION . $class . '.class.php')) {
		include(PATH_IGNITION . $class . '.class.php');
	} else {
		echo 'Ignition Class:' . $class . ' does not exist';
	}
}

// Include Header

include (PATH_TEMPLATES . 'header.php');

?>
