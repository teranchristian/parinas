<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Logon extends Controller_Template_webPage {

    public function action_index() {
//        if (SimpleAuth::instance()->logged_in()) {
//            echo Session::instance()->get('rol');
//            if (Session::instance()->get('rol') == 'Gerencia') {
//                $this->request->redirect('orden/gerencia');
//            } else {
//                $this->request->redirect('orden/logistica');
//            }
//            Request::current()->redirect('product');
//        }

        $auth = Auth::instance();
        // Auth::instance()->logout(TRUE);
        if ($auth->logged_in()) {
            echo 'yeah user is still logged in...<br/>';
        }



        if ($_POST) {
            if ($auth->login($_POST['EMAIL'], $_POST["PWD"])) {
                if ($auth->has_role('administrator')) {
                    $this->request->redirect('orden/gerencia');
                }
                if ($auth->has_role('logistica')) {
                    // $this->request->redirect('orden/logistica');
                    $this->request->redirect('orden/logistica');
                }
                $msg = 'error</br> no tiene roles';
                //$modules = $auth->getNavigationItems();
//                foreach ($modules as $headitem => $subitems) {
//                  //  print_r($subitems);
//                    //this could be a controller
//                    $moduletype = $modules[$headitem]['type'];
//                    echo '<br/><b><a href="' . url::site($moduletype) . '">' . $headitem . '</a></b><br/>';
//                    foreach ($subitems['subitems'] as $subitem) {
//                        echo '-<a href="' . url::site($moduletype . '/' . $subitem['type']) . '">' . $subitem['actionName'] . '</a><br/>';
//                    }
//                }
            } else {
                // Auth::instance()->logout(TRUE);
                $msg = 'error';
            }
        }

        $this->template->menu = FALSE;
        $this->template->content = View::factory('logon/index')
                ->bind('msg', $msg);
    }

    public function action_signout() {
        Auth::instance()->logout(TRUE);
        $this->request->redirect('');
    }

}

