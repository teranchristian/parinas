<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Producto extends Controller_Template_webPage {

    public function action_nuevo() {
        if ($this->request->is_ajax()) {
            $DATA = array();
            parse_str($_POST['DATA'], $DATA);
            @$ID = $DATA['idProducto'];            
            $idProducto= Model::factory('producto')->guardar($DATA, $ID);
            $DATA['idProducto']=$idProducto;
               echo json_encode($DATA);

        } else {
            header('location: ' . URL);
        }
    }
    
    public function action_eleminar() {
        if ($this->request->is_ajax()) {
            Model::factory('producto')->eliminar($_POST['ID']);
            echo json_encode('ok');
        } else {
            header('location: ' . URL);
        }
    }

}

//                $arr = array();
//                array_push($arr, $item['Barcode']);
//                array_push($arr, $item['Description']);
//                array_push($arr, $item['Units']);
