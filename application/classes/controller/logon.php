<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Logon extends Controller_Template_webPage {

    public function action_index() {
        if (SimpleAuth::instance()->logged_in()) {
            echo Session::instance()->get('rol');
            if (Session::instance()->get('rol') == 'Gerencia') {
                $this->request->redirect('orden/gerencia');
            } else {
                $this->request->redirect('orden/logistica');
            }
            Request::current()->redirect('product');
        }

        if ($_POST) {

            if (SimpleAuth::instance()->login($_POST['EMAIL'], $_POST["PWD"])) {

                if (Session::instance()->get('rol') == 'Gerencia') {
                    $this->request->redirect('orden/gerencia');
                } else {
                    $this->request->redirect('orden/logistica');
                }
            } else {

                $msg='error';
            }
        }

        $this->template->menu = FALSE;
        $this->template->content = View::factory('logon/index')
                ->bind('msg', $msg);
    }

    public function action_signout() {
        SimpleAuth::instance()->logout();
        $this->request->redirect('');
    }

}

