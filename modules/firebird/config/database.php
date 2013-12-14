<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'firebird',
		'connection' => array(
			/**
			 * The following options are available for Firebird:
			 *
			 * string   hostname     server hostname
			 * string   database     database alias or filename
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Port number may be appended following the sample
                         * server/port
                         * 'dsn'        => 'firebird:dbname=auscoldata.cloudservices.asia:C:\ndata\auscoleast\AUSCOLEAST.GDB',
			'username'   => 'SYSDBA',
			'password'   => 'masterkey',
			 */
			'hostname'   => 'auscoldata.cloudservices.asia',
			'database'   => 'C:\ndata\auscoleast\AUSCOLEAST.GDB',
			'username'   => 'SYSDBA',
			'password'   => 'masterkey',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	)
);