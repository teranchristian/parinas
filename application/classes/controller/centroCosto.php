<?php

class Controller_CentroCosto extends Controller_Template_webPage {

    public function action_index() {
        //$centroCostoList = Model::factory('centroCosto')->getCentroCostoList();
        $centroCostoList = ORM::factory('centroCosto')->getCentroCostoList();

        $areaList = ORM::factory('area')->getAreaList();
        $this->template->scripts = array('media/js/jquery-ui.js',);
        $this->template->styles = array('media/css/jquery.css' => 'screen, projection',);
        $this->template->content = View::factory('centroCosto/index')
                ->set('areaList', $areaList)
                ->set('centroCostoList', $centroCostoList->as_array());
    }

// start insertar
    public function action_nuevo() {
        $areaList = Model::factory('area')->getAreaList();
        $this->template->scripts = array('media/js/validate.js',);
        $this->template->content = View::factory('centroCosto/nuevo')
                ->set('areaList', $areaList);
    }

// end insertar
// start editar
    public function action_editar() {
        //echo $this->request->param('id');
        $centroCosto = Model::factory('centroCosto')->getCentroCosto($this->request->param('id'));
        $areaList = Model::factory('area')->getAreaList();
        $this->template->content = View::factory('centroCosto/nuevo')
                ->set('centroCosto', $centroCosto)
                ->set('areaList', $areaList);
    }

// end editar    
    public function action_guardar() {
        $areaList = Model::factory('area')->getAreaList();
        @$ID = $this->request->param('id');
        //Model::factory('centroCosto')->guardar($this->request->post(), $this->request->param('id'));
        $errors = array();
        
        $centroCosto = ORM::factory('centroCosto', $ID);
        $centroCosto ->values( $this->request->post() );
        
        try {
        $centroCosto->save();
       
         } catch (ORM_Validation_Exception $ex) {
       
            $errors = $ex->errors('validation');
            $this->template->content = View::factory('centroCosto/nuevo')
                ->set('errors', $errors)
                    ->set('centroCosto', $centroCosto)
                ->set('areaList', $areaList);
            
        }
       
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

}

?>
