<?php

class Controller_reporte extends Controller_Template_webPage {

    
    
    /**
     * Generar Orden de Comra
     * Este metodo genera una orden de compra en PDF
     */
    public function action_ordenCompra() {
       // echo $this->request->param('id');
        $orden = Model::factory('orden')->getOrden($this->request->param('id'));
        $productoList = Model::factory('producto')->getProductoList($this->request->param('id'));
         $config = array(
                'author'   => 'Your name',
                'title'    => 'Your title',
                'subject'  => 'Your subject',
                'name'     => Text::random().'.pdf', // name file pdf
        );
       $view = View_PDF::factory('admin/pdf', $config)
       ->set('orden', $orden)
       ->set('productoList', $productoList)
        ->render();

        //$this->template->content = View::factory('admin/pdf');
    }
}

