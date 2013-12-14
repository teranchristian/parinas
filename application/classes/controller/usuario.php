<?php

class Controller_Usuario extends Controller_Demo {

    public function action_index() {
        $usuariosList = Model::factory('usuario')->getUsuariosList();
        $this->template->content = View::factory('usuario/index')
                ->set('usuariosList', $usuariosList);
    }
    
    public function action_nuevo() {        
        $rolList = Model::factory('usuario')->getRolList();
        $this->template->scripts = array('media/js/validate.js',);
        $this->template->content = View::factory('usuario/nuevo')
                ->set('rolList', $rolList);
    }


 

    public function action_updatePwd() {
        $DATA = array();
        parse_str($_POST['DATA'], $DATA);
        $DATA["EMAIL"] = Session::instance()->get('Email');
        $userKey = Model::factory('user')->getUserKey($DATA["EMAIL"]);
        $DATA["PWD"] = Hash::create('sha1', $DATA["PWD"], $userKey->UserKey);
        $UserData = Model::factory('user')->checkUser($DATA);
        if ($UserData != '') {
            $DATA['KEY'] = SimpleAuth::instance()->randomKey();
            $DATA["PWD"] = Hash::create('sha1', $DATA["NPWD"], $DATA['KEY']);
            Model::factory('user')->updatePWD($DATA);
            $sendPHP = array(
                "TYPE" => 'S', "VALUE" => 'Your password has been changed.');
        } else {
            $sendPHP = array(
                "TYPE" => 'E', "VALUE" => 'The password is incorrect.');
        }
        echo json_encode($sendPHP);
    }

}

?>
