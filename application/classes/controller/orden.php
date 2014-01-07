<?php

class Controller_Orden extends Controller_Template_webPage {

     public function action_index() {        
         if (Session::instance()->get('rol') == 'administrator')
            self::action_gerencia();
        else
            self::action_logistica();
                 
    }
    /**
     * Ver Ordenes de compra
     * Este metodo muestra todas las Ordenes de compra
     * Administrador
     * -Puedes visualizar todas las ordes de compra
     * Logistica
     * -Solo puede ver las ordenes por usuario
     */
    public function action_ver() {        
            $this->template->content = View::factory('orden/index');        
    }

    /**
     * Nueva Orden
     * Este metodo muestra el formulation para una nueva obra
     * -LLama a la lista de obras
     * -Llama a la lista de proveedores
     */
    public function action_nuevo() {
        $this->template->scripts = array('media/action/orden.js', 'media/js/validate.js', 'media/bootstrap/js/datepicker.js',);
        $this->template->styles = array('media/bootstrap/css/datepicker.css' => 'screen, projection',);
        $obraList = Model::factory('obra')->getObraList();
        $proveedorList = Model::factory('proveedor')->getProveedorList();
        $this->template->content = View::factory('orden/nuevo')
                ->set('proveedorList', $proveedorList)
                ->set('obraList', $obraList);
    }

    public function action_editar() {        
        $this->template->scripts = array( 'media/js/validate.js', 'media/bootstrap/js/datepicker.js', 'media/js/jquery-ui.js',);
        $this->template->styles = array('media/bootstrap/css/datepicker.css' => 'screen, projection', 'media/css/jquery.css' => 'screen, projection',);
            
        $orden=Model::factory('orden')->getOrden($this->request->param('id'));
        $view = null;
        Model::factory('orden')->actualizarIGV($this->request->param('id'));
        switch ($orden->idProcesoOrden) {
            case 1: $view = 'orden/logistica/nuevo';
                break;
            case 2: $view = 'orden/ver'; //por aprovar
                break;
            case 3: $view = 'orden/logistica/nuevo';
                break;
            case 4: $view = 'orden/aprobada';
                break;
        }

        if (Session::instance()->get('rol') == 'administrator')
            $view = 'orden/gerencia/nuevo';

        $this->template->content = View::factory($view)
                ->set('proveedorList', Model::factory('proveedor')->getProveedorList())
                ->set('obraList', Model::factory('obra')->getObraList())
                ->set('orden', $orden);
        //Editar Orden de compra de trabajo
    }

    public function action_guardar() {
        @$ID = $this->request->param('id');
        if ($_POST['mensaje'])
            $_POST['mensaje'] = '<b>' . Session::instance()->get('usuario') . "</b><span class='float:right;'> - (" . date('h:m a d/m/Y') . ")</span></br><hr> - " . $_POST['mensaje'] . '</br></p>' . $_POST['mensajeAnterior'];
        else 
            $_POST['mensaje'] = $_POST['mensajeAnterior'];
        Model::factory('orden')->guardar($_POST, $ID);
        
        $this->request->redirect('orden/index');
    }
    public function action_archivar() {
        @$ID = $this->request->param('id');     
        if ($_POST['mensaje'])
            $_POST['mensaje'] = '<b>' . Session::instance()->get('usuario') . "</b><span class='float:right;'> - (" . date('h:m a d/m/Y') . ")</span></br><hr> - " . $_POST['mensaje'] . '</br></p>' . $_POST['mensajeAnterior'];
        Model::factory('orden')->archivar($_POST, $ID);
        self::action_index();
    }
    
 
//----
    public function action_gerencia() {
        $this->template->scripts = array('media/dtable/dtable.js', 'media/dtable/dt-bootstrap.js',
            'media/js/jquery-ui.js',
            'media/js/action/prodAct.js',);
        $ordenList = Model::factory('orden')->getOrdenList(array('1', '2', '3'));
        //$this->template->scripts = array('media/js/validate.js','media/js/action/userAct.js');
        $this->template->content = View::factory('orden/gerencia/index')
                ->set('ordenList', $ordenList);
    }

//
    //logistica
    public function action_logistica() {
        //$this->template->scripts = array('media/js/validate.js','media/js/action/userAct.js');
        $ordenList = Model::factory('orden')->getOrdenListFilterUser(array('1', '2', '3', '4'),Session::instance()->get('idUsuario'));
        $this->template->content = View::factory('orden/logistica/index')
                ->set('ordenList', $ordenList);
    }

    //end logistica
}

?>

