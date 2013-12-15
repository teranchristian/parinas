<?php defined('SYSPATH') or die('No direct script access.');
 
class user_token_Model extends ORM {
   protected $_table_name = 'user_token';
	protected $has_one = array('user');
}