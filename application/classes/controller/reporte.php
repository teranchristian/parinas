<?php

class Controller_reporte extends Controller_Template_webPage {

    
    
    /**
     * Generar Orden de Comra
     * Este metodo genera una orden de compra en PDF
     */
    public function action_ordenCompra() {
       // echo $this->request->param('id');
        $orden = Model::factory('orden')->getOrden($this->request->param('id'));
        $empresa =Model::factory('empresa')->find();
         $config = array(
                'author'   => 'Parinas',
                'title'    => 'Orden de compra',
                'subject'  => 'Orden de compra',
                'name'     => Text::random().'.pdf', // name file pdf
        );
       $view = View_PDF::factory('admin/pdf', $config)
       ->set('orden', $orden)
       ->set('empresa', $empresa)
        ->render();

        //$this->template->content = View::factory('admin/pdf');
    }
    
    public function action_centroCosto() {
        $area=  Model::factory('area')->getAreaList();
        $this->template->content = View::factory('reporte/centroCosto')
                ->set('area', $area);
        
    }
}

