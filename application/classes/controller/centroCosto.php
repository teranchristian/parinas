<?php

class Controller_CentroCosto extends Controller_Template_webPage {

    public function action_index() {
        //$centroCostoList = Model::factory('centroCosto')->getCentroCostoList();

        $areaList = ORM::factory('area')->getAreaList();
        $this->template->scripts = array('media/js/jquery-ui.js',);
        $this->template->styles = array('media/css/jquery.css' => 'screen, projection',);
        $this->template->content = View::factory('centroCosto/index')
                ->set('areaList', $areaList);
    }

// start insertar
    public function action_nuevo() {
        $this->template->validation=$this->valid();        
        $areaList = Model::factory('area')->getAreaList();
        $this->template->scripts = array('media/js/validate.js',);
        $this->template->content = View::factory('centroCosto/nuevo')
                ->set('areaList', $areaList);
    }

// end insertar
// start editar
    public function action_editar() {
        $this->template->validation=$this->valid();
        $this->template->scripts = array('media/js/validate.js',);
        $centroCosto = Model::factory('centroCosto')->getCentroCosto($this->request->param('id'));
        $areaList = Model::factory('area')->getAreaList();
        $this->template->content = View::factory('centroCosto/nuevo')
                ->set('centroCosto', $centroCosto)
                ->set('areaList', $areaList);
    }

// end editar    
    public function action_guardar() {       
        $areaList = Model::factory('area')->getAreaList();        
        Model::factory('centroCosto')->guardar($this->request->post(), $this->request->param('id'));        
        $this->request->redirect('centroCosto/');
            
        
       
        //$this->request->redirect('centroCosto/');
        
    }

    public function action_eleminar() {
        if ($this->request->is_ajax()) {
            // $this->_empty_rules;
             
            Model::factory('centroCosto')->eliminar($_POST['ID']);
            echo json_encode('ok');
        } else {
            header('location: ' . URL);
        }
    }
    
      public function valid() {        
            return array(
                'idArea' => array('required: true',),
                'codigo' => array('required: true','number: true'),
                'descripcion' => array('required: true'),
            );        
            return array();
    }

}

?>
