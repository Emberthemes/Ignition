<?php

/**
 * Load all required files
 * Emberthemes.net
 */


// Define Paths

define('PATH_ABSOLUTE', dirname(__FILE__) . '/');
define('PATH_LANGUAGE', PATH_ABSOLUTE . 'language/');

include (PATH_ABSOLUTE . 'config.php');

// Check if language file exists, default to engrish

if (file_exists(PATH_LANGUAGE . $config['language'] . '.php')) {
  
	include (PATH_LANGUAGE . $config['language'] . '.php');
	
} else {
  
	include (PATH_LANGUAGE . 'en.php');
	
}

?>
