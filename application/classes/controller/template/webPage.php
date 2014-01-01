<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Template_webPage extends Controller_Template {

    public $template = 'template/default';
    // Controls access for the whole controller, if not set to FALSE we will only allow user roles specified
    // Can be set to a string or an array, for example 'login' or array('login', 'admin')
    // Note that in second(array) example, user must have both 'login' AND 'admin' roles set in database
    public $auth_required = FALSE;
    // Controls access for separate actions
    // 'adminpanel' => 'admin' will only allow users with the role admin to access action_adminpanel
    // 'moderatorpanel' => array('login', 'moderator') will only allow users with the roles login and moderator to access action_moderatorpanel
    public $secure_actions = FALSE;

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public $script = FALSE;
    public $menu = FALSE;
    public $title = "";

    public function before() {

        //echo Request::initial()->action();
        // echo Request::initial()->controller();  

        parent::before();


//        $a = Auth::instance();
//
        //#Check user auth and role        
        //echo Request::initial()->action();
         //echo Request::initial()->controller();
//        $auth = Auth::instance();
//        //if ($auth->logged_in()) {
//        if ($auth->logged_in() && (Request::initial()->controller() != 'logon')){
//            if ($auth->has_action( Request::initial()->controller(), Request::initial()->action())) {
//                echo 'yeah the user can delete pages<br/>';
//            }else 
//               Requesat::current()->redirect('');
//        }
//       Database::$default = 'default';
        #Open session
        $this->session = Session::instance();


//        if (!SimpleAuth::instance()->logged_in() && (Request::initial()->controller() != 'logon'))
//            Request::current()->redirect('');
        //========================    
        //echo 1;

        //++++++++++++++++++++++++    
        //#Check user auth and role        
        //echo Request::initial()->action();
        // echo Request::initial()->controller();    
        //control user role
        $action_name = Request::initial()->action();
//        if (($this->secure_actions !== FALSE))
//            if (isset($this->secure_actions[Session::instance()->get('Role')]))
//                if (in_array($action_name, ($this->secure_actions[Session::instance()->get('Role')])))
//                    Request::current()->redirect('product');
        //++++++++++++++++++++++++
        //========================

        if ($this->auto_render) {
            // Initialize empty values
            $this->template->content = '';

            $this->template->styles = array();
            $this->template->scripts = array();

            if (Session::instance()->get('Login'))
                $this->menu = TRUE;
        }
    }

    /**
     * The after() method is called after your controller action.
     * In our template controller we override this method so that we can
     * make any last minute modifications to the template before anything
     * is rendered.
     */
    public function after() {
        //$menu=  $menu;

        if (!$this->request->is_ajax()) {
            //echo 2;
            if ($this->auto_render) {
                $styles = array(
                    'media/bootstrap/css/bootstrap.css' => 'screen, projection',
                    'media/css/xero.css' => 'screen, projection',
                );

                $scripts = array(
                    'media/bootstrap/js/bootstrap.js',
                    'media/js/jqueryCus.js',
                );
                
                $path = 'media/action/'.Request::initial()->controller().'.js';
                $additional_js=null;
                if (file_exists($path)) {
                    $additional_js=$path;
                }

                $this->template->header = View::factory('template/header')
                        ->set('styles', array_merge($this->template->styles, $styles));
                //$this->template->header=null;
                $this->template->menuUser = View::factory('menu-user');
//$this->template->menuUser=null;
                $modules = Auth::instance()->getNavigationItems();
                $this->template->menu = View::factory('menu')
                        ->bind('menu', $this->menu)
                        ->bind('modules', $modules);
//                $this->template->menu =null;
                //array_merge($additional_js, $scripts);
                array_push($scripts,$additional_js);
                $this->template->footer = View::factory('template/footer')
                        ->set('scripts', array_merge($this->template->scripts, $scripts));
            }
            parent::after();
        }
    }

}