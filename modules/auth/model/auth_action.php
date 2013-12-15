<?php defined('SYSPATH') or die('No direct script access.');
 
class Auth_action_Model extends ORM {
	protected $has_one = array('module');
	protected $has_and_belongs_to_many = array('auth_action_roles');
}