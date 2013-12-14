<?php

defined('SYSPATH') OR die('No direct script access.');

class SimpleAuth {

    protected static $_instance;

    public static function instance($config = array()) {
        if (!isset(SimpleAuth::$_instance)) {
            SimpleAuth::$_instance = new SimpleAuth($config);
        }
        return SimpleAuth::$_instance;
    }

    protected $_config;
    protected $_session;
    protected $_extra;

    public function __construct($config = array()) {
        $this->_config = $config ? $config : Kohana::$config->load('simpleauth');

        $this->_session = Session::instance($this->_config['session']['type']);

        $this->_extra = sha1(Request::$user_agent . Request::$client_ip);
    }

    public function login($username, $password) {
        // Allow user to login using username or email
        //$field = Valid::email($username) ? 'email' : 'username';
      
        //   echo $field;
        // Attempt to load the user
       
        $user = ORM::factory('usuario')
                ->select('usuario.*','rol.*')
                ->join('rol', 'inner')
                ->on('rol.idRol', '=', 'usuario.idRol')
                ->where("usuario.email","=",($username))
                ->and_where('usuario.password', "=", ($password))                
                ->find()
                ;
    
            //  print_r($user);
     
        if (isset($user)) {
            Session::instance()->set('usuario', $user->apellido." ".$user->nombre);
            Session::instance()->set('idUsuario', $user->idUsuario);
            Session::instance()->set('rol', $user->rol);
            Session::instance()->set('Login', 'True');
            // Set session stuff
            $session_key = $this->_session->get($this->_config['session']['key'], array());
            $session_key = (array) $session_key;
            $session_key['id'] =  $user->idUsuario;
            $session_key['extra'] = $this->_extra;
            $this->_session->set($this->_config['session']['key'], $session_key);
            return TRUE;
        } else {
//			// Invalid password or username or email address, it does not matter which
            return FALSE;
        }
    }

    public function update ($DATA){        
            $complete = DB::update('supplier');
            $complete->set(array('UserKey' => $DATA['KEY'],'Pwd' => $DATA['PWD']))
                    ->where('Id', '=', ':value')
                    ->param(':value', Session::instance()->get('userID'))
                    ->execute();
    }
    public function logout($destroy = TRUE) {
        if ($destroy === TRUE) {
            Session::instance()->destroy();
        } else {
            $this->_session->delete($this->_config['session']['key']);

            $this->_session->regenerate();
        }

        return !$this->logged_in();
    }

    public function logged_in() {
//            echo 1;
//		$session_key = $this->_session->get($this->_config['session']['key'], array());
//                echo $this->_session->get($this->_config['session']['key'], array());
//
//		$session_key = (array) $session_key;
//                print_r($session_key);
//		$id = Arr::get($session_key, 'id');
//
//		$extra = Arr::get($session_key, 'extra');
//
//		$user = DB::select('id')->from('supplier')
//			->where('Id', '=', $id)
//			->execute();
//
//		//return ($this->_extra === $extra AND $user);
        if ((Session::instance()->get('Login')))
            return TRUE;
        else
            return FALSE;
    }

    function randomKey() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

}

// End SimpleAuth
