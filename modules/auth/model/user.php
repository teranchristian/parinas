<?php defined('SYSPATH') or die('No direct script access.');
 
class User_Model extends ORM {
	//protected $has_many = array('user_tokens');
   protected $db = 'auth';
        protected $_db_group = 'alternate';
	protected $has_one = array('user_token');
	protected $has_and_belongs_to_many = array('auth_roles');
}