<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Auth module
 *
 * @author     Martijn van de Sande
 * @copyright  hm... nothing at all
 * thanks to the kohana framework! What would we do without it...
 * Some advertising for my website(it's dutch only) ^^
 * www.promadesign.nl
 * 
 * thanks to remorse.nl
 */
class Auth extends ORM {

    private $config;
    // Session library
    protected $session;
    protected static $_instance;

    public static function instance($config = array()) {
        // Database::instance('auth');
        if (!isset(Auth::$_instance)) {
            Auth::$_instance = new Auth($config);
        }
        return Auth::$_instance;
    }

    public function __construct($config = array()) {
        Database::$default = 'auth';

        if (empty($config)) {
            $config['lifetime'] = 1209600;
            $this->config['lifetime'] = $config['lifetime'];
        }
        //simple check the config
        $this->checkConfig();

        // Load libraries
        $this->session = Session::instance();
    }

    public function login($username, $password, $remember = false) {
        //$user = ORM::factory('user', $username);
//		$user = ORM::factory('user')
//                        ->where(array('username1'=>$username,
//                                      'password'=>md5($password),
//                                    'active'=>1,'deleted'=>0))->find();

        $user = ORM::factory('user')
                ->where("username", "=", ($username))
                ->and_where('password', "=", md5($password))
                ->and_where('active', "=", 1)
                ->and_where('deleted', "=", 0)
                ->find();
        if ($user->id) {
            $newToken = $this->create_token();
            $this->store_session($user->id);
            if ($remember === TRUE) {
                $this->set_cookie($newToken);
            }
            //cant do this that quick with ORM!
            //$db = new Database;
            //$db->query('delete from auth_user_tokens where user_id = '.$db->escape($user->id));
            $delete = ORM::factory('user_token')
                    ->where("user_id", "=", ($user->id))
                    ->find();
            if (count($delete) > 0)
                $delete->delete();

            $token = ORM::factory('user_token');
            $token->user_id = $user->id;
            $token->user_agent = md5(Request::$user_agent);
            $token->token = $newToken;
            $token->created = time();
            $token->expires = time() + $this->config['lifetime'];
            $token->save();

            $_SESSION['auth_user'] = $user->id;
            
            $role = ORM::factory('role')
                ->select(array('role.id', 'roleid'),array('role.name', 'rolName'))
                ->join('roles_users', 'INNER')
                ->on('roles_users.auth_role_id', '=', 'role.id')
                ->where('roles_users.user_id', '=', $_SESSION["auth_user"])
                ->find();
            
            Session::instance()->set('usuario', $user->lastName." ".$user->name);
            Session::instance()->set('idUsuario', $user->id);
            Session::instance()->set('rol', $role->rolName);
            Session::instance()->set('Login', 'True');
            //$user = ORM::factory('user')->where('id', '=', 1)->find();

            return true;
        }

        return false;
    }

    protected function create_token() {

        while (TRUE) {
            // Create a random token
            $token = text::random('alnum', 32);

            $user_token = ORM::factory('user_token')
                            ->select('id')->where('token', "=", $token)->find();

            // Make sure the token does not already exist
            if (!$user_token->id) {
                // A unique token has been found
                return $token;
            }
        }
    }

    /*
     * allways login.. even if cookie set.. and user id set.. ??
     * you decide
     */

    public function force_login($username = '') {
        
    }

    /*
     * with cookie
     */

    public function cookie_login() {

        if ($token = cookie::get('auth_user')) {
            $token = ORM::factory('auth_user_token')->where('token', $token)->find();

            if ($token->user_id && ($token->user_agent === md5(Kohana::$user_agent))) {
                // create a new token
                $newToken = $this->create_token();
                $token->token = $newToken;
                $token->save();

                // Set the new token and new expiration time
                cookie::set('auth_user', $newToken, $token->expires - time());

                $_SESSION['auth_user'] = $token->user_id;

                return true;
            }
        }

        return false;
    }

    /*
     * $destroy = destroys all session data, including the browser cookie that is used to identify it
     */

    public function logout($destroy = false) {
        // Delete the autologin cookie if it exists
        cookie::get('auth_user') and cookie::delete('auth_user');

        if ($destroy === TRUE) {
            // Destroy the session completely
            $this->session->destroy();
        } else {
            // Remove the user object from the session
            unset($_SESSION['auth_user']);
            // Regenerate session_id
            $this->session->regenerate();
        }

        // Double check
        return !isset($_SESSION['auth_user']);
    }

    /*
     * check login status
     */

    public function logged_in($role = '') {
        //check for session
        if (!isset($_SESSION['auth_user']) || empty($_SESSION['auth_user'])) {
            return false;
        }
        if (!empty($role)) {
            $db = new Database;

            $result = $db->query('select auth_role_id from users where id=' . $db->escape($_SESSION['auth_user']));

            foreach ($result as $row) {
                if (isset($row->role_id)) {
                    $role_id = $row->role_id;
                } else {
                    return false;
                }
            }

            $result = $db->query('select id from auth_roles where id=' . $db->escape($role_id) . ' and name=' . $db->escape($role));

            foreach ($result as $row) {
                if (isset($row->id)) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        return true;
    }

    private function checkConfig() {
        if (!isset($this->config['lifetime']) || empty($this->config['lifetime'])) {
            throw new Kohana_User_Exception('hm....', 'Lifetime is not set.');
        }
    }

    //delete the old one and... make a new one ^^
    private function set_cookie($token) {
        cookie::delete('auth_user');
        cookie::set('auth_user', $token, $this->config['lifetime']);
    }

    private function store_session($user_id) {
        $_SESSION['auth_user'] = $user_id;
    }

    //$givenrole = like administrator
    public function has_role($givenrole) {
        if (!$this->logged_in() || !isset($_SESSION['auth_user'])) {
            return false;
        }

//		$db = new Database;
//		
//		//yet another fine type of data selection
//		//this is fun!
//		$db->select('auth_roles.id as roleid');
//		$db->from('auth_roles');
//		$db->where(array('auth_roles_users.user_id =' => $db->escape($_SESSION['auth_user'])));
//		$db->join('auth_roles_users', 'auth_roles_users.auth_role_id = auth_roles.id','','INNER');
//		$data = $db->get();

        $data = ORM::factory('role')
                ->select(array('role.id', 'roleid'))
                ->join('roles_users', 'INNER')
                ->on('roles_users.auth_role_id', '=', 'role.id')
                ->where('roles_users.user_id', '=', $_SESSION["auth_user"])
                ->and_where('role.name', 'like', $givenrole)
                ->find_all();
        
        if (count($data) >= 1) {
            return TRUE;
        }
        return FALSE;
    }

    //module is the "type" from the modules table or the "id" from the modules table
    //type is from the actions table like: view,add,edit,delete
    public function has_action($module, $type) {
        //if user is not logged in...
        if (!$this->logged_in() || !isset($_SESSION['auth_user'])) {
            return false;
        }
//
        if (is_numeric($module)) {
            $field = 'id';
        } else {
            $field = 'type';
        }


        //should we do this with ORM? ^^
//        $db = new Database;
//        $result = $db->query('
//							select  as id
//							from 
//								,
//								,
//								,
//								,
//								
//							where
//								modules.' . $field . ' = ' . $db->escape($module) . '
//							AND
//								 = 1
//							AND
//								 = 
//							AND
//								 = ' . $db->escape() . '
//							AND
//								 = 
//							AND
//								 = 
//							AND
//								 = 
//							AND
//								 = ' . $db->escape()
//        );array('roles_users.user_id', 'id')
            $result = ORM::factory('module')
                
                ->join('auth_actions', 'INNER')
                ->on('auth_actions.module_id', '=', 'module.id')
                                  
                ->join('auth_actions_auth_roles', 'INNER')
                ->on('auth_actions_auth_roles.auth_action_id', '=', 'auth_actions.id')
                ->on('auth_actions_auth_roles.auth_action_id', '=', 'auth_actions.id')    
                    
                ->join('roles', 'INNER')
                ->on('roles.id', '=', 'auth_actions_auth_roles.auth_role_id')
                    
                ->join('roles_users', 'INNER')
                ->on('roles_users.auth_role_id','=', 'roles.id')
                    
                ->where('module.' . $field , '=', $module)                    
                ->and_where('auth_actions.type', '=', $type)
                ->and_where('roles_users.user_id', '=', $_SESSION['auth_user'])
                
                
                   
                ->find_all();
        if ($result->count() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
        return FALSE;
    }

    
    ///Menu
        //get the modules and actions for in the navigation menu
    public function getNavigationItems() {
        //$auth = new Auth;
       
        $result = ORM::factory('module')
                ->select(array('module.id', 'moduleid'),
                         array('module.name', 'modulename'),
                         array('module.type', 'moduletype'),
                         array('auth_actions.type', 'actiontype'),
                         array('auth_actions.name', 'actionName'))
                ->join('auth_actions', 'INNER')
                ->on('module.id', '=', 'auth_actions.module_id')
                ->where('auth_actions.navigation_item', '=', '1')
                ->and_where('module.enabled', '=', '1')
                
                ->find_all();
        $returnArray = array();
        $i = 0;
        foreach ($result as $value) {
            if ($this->has_action($value->moduleid, $value->actiontype)) {
                $returnArray[$value->modulename]['subitems'][$i]['type'] = $value->actiontype;
                $returnArray[$value->modulename]['subitems'][$i]['name'] = $value->moduletype;
                $returnArray[$value->modulename]['subitems'][$i]['actionName'] = $value->actionName;
                if (!isset($returnArray[$value->modulename]['type'])) {
                    $returnArray[$value->modulename]['type'] = $value->moduletype;
                }
            }
            $i++;
        }
        return $returnArray;
    }
}

