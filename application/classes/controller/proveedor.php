<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Proveedor extends Controller_Template_webPage {

    public function action_index() {
        $proveedorList = Model::factory('proveedor')->getProveedorList();
        $this->template->scripts = array( 'media/js/jquery-ui.js',);
        $this->template->styles = array('media/css/jquery.css' => 'screen, projection',);
        $this->template->content = View::factory('proveedor/index')
                ->set('proveedorList', $proveedorList);
    }

    public function action_nuevo() {
        $this->template->content = View::factory('proveedor/nuevo');
    }

    // start editar
    public function action_editar() {
        $proveedor = Model::factory('proveedor')->getProveedor($this->request->param('id'));;
        $this->template->scripts = array('media/js/validate.js', 'media/bootstrap/js/datepicker.js',);
        $this->template->styles = array('media/bootstrap/css/datepicker.css' => 'screen, projection',);
        $this->template->content = View::factory('proveedor/nuevo')
                ->set('proveedor', $proveedor);
    }

// end editar 
    public function action_guardar() {
        @$ID = $this->request->param('id');
        Model::factory('proveedor')->guardar($_POST, $ID);
        $this->request->redirect('proveedor/');
    }

    public function action_eleminar() {
        if ($this->request->is_ajax()) {
            Model::factory('proveedor')->eliminar($_POST['ID']);
            echo json_encode('ok');
        } else {
            header('location: ' . URL);
        }
    }

}

?>
