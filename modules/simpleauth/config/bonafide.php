<?php defined('SYSPATH') or die('No direct script access.');

return array(

	'default' => array(
		'mechanisms' => array(
			'kohana' => array('pbkdf2', array(
				'type'       => 'sha256',
				'iterations' => 4096,
				'length'     => 40
			)),
		),
	),

);
