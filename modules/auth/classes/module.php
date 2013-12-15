<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Module extends ORM {

      protected $_table_name = 'modules';
	protected $has_one = array('auth_action');
}