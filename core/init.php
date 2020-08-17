<?php
session_start(); // wat doet een sessie precies?

// configuratie om te gebruiken bij config class.
// overal includen

$GLOBALS['config'] = array( 
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'oop'	
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' => array(
		'session_name' => 'user'
	)
);
	
// niet handig om te doen voor elke klasse:
// require_once 'classes/Config.php';
// sommige klasses niet altijd nodig maar worden dan wel altijd geladen
// bij naamsverandering van klasse moet je hier het path aanpassen.

spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
});

// functies includen

require_once 'functions/sanitize.php';

?>