<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'session' => array(
		// Session type
		'type' => 'native',

		// Session key
		'key' => 'kohana_user',
	),

	'bonafide' => array(
		// Bonafide instance name to used
		'instance' => 'default',

		// Dummy hash to reduce timing attacks.
		// Adjust this if you upgrade hashing mechanism.
		//
		// $hash = Bonafide::instance()->hash('kohana', 'framework');
		'dummy' => array(
			'hash' => 'kohanaQS5c/F6admzCjwt5eAuyNrFZZYJwYzL8pmVm1JlvbbE7uPi0yEUjvw==',
			'salt' => 'framework',
		),
	),

);
