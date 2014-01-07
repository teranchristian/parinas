<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Obra extends Controller_Template_webPage {

    public function action_index() {
        $obraList = Model::factory('obra')->getObraList();
        $this->template->scripts = array('media/action/obra.js', 'media/js/jquery-ui.js',);
        $this->template->styles = array('media/css/jquery.css' => 'screen, projection',);
        $this->template->content = View::factory('obra/index')
                ->set('obraList', $obraList);
    }

    public function action_nuevo() {
        $areaList = Model::factory('area')->getAreaList();
        $estadoObraList = Model::factory('estadoObra')->getEstadoObraList();
        $this->template->scripts = array('media/js/validate.js', 'media/bootstrap/js/datepicker.js',);
        
        $this->template->styles = array('media/bootstrap/css/datepicker.css' => 'screen, projection',);
        $this->template->content = View::factory('obra/nuevo')
                ->set('areaList', $areaList)
                ->set('estadoObraList', $estadoObraList);
    }

    // start editar
    public function action_editar() {
        $areaList = Model::factory('area')->getAreaList();
        $obra = Model::factory('obra')->getObra($this->request->param('id'));
        
        $centroCostoList = Model::factory('centroCosto')->getCentroCostoList();
        $estadoObraList = Model::factory('estadoObra')->getEstadoObraList();
        $this->template->scripts = array('media/js/validate.js', 'media/bootstrap/js/datepicker.js',);
        $this->template->styles = array('media/bootstrap/css/datepicker.css' => 'screen, projection',);
        $this->template->content = View::factory('obra/nuevo')
                ->set('areaList', $areaList)
                ->set('estadoObraList', $estadoObraList)
                ->set('obra', $obra);
    }

// end editar 
    public function action_guardar() {
        @$ID = $this->request->param('id');
        
        Model::factory('obra')->guardar($_POST, $ID);
        $this->request->redirect('obra/');
    }

    public function action_eleminar() {
        if ($this->request->is_ajax()) {
            Model::factory('obra')->eliminar($_POST['ID']);
            echo json_encode('ok');
        } else {
            header('location: ' . URL);
        }
    }

}

?>
