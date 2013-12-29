<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Roles2 extends ORM {
 
 	protected $has_and_belongs_to_many = array('users','auth_actions');
}