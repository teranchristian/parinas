<?php

defined('SYSPATH') or die('No direct access allowed.');

return array
    (
    'default' => array
        (
        'type' => 'mysql',
        'connection' => array(
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => 'root',
            'persistent' => FALSE,
            'database' => 'mycparinas',
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'profiling' => TRUE,
    ),
    'auth' => array(
       'type' => 'mysql',
        'connection' => array(
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => 'root',
            'persistent' => FALSE,
            'database' => 'login',
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'profiling' => TRUE,
    ),
);