
<?php

class Model_Producto extends ORM {

    protected $_table_name = 'producto';
    protected $_primary_key = 'idProducto';

    function getProductoList($id) {
        return ORM::factory('producto')                   
                        ->where('idOrden', '=', $id)
                        ->and_where('status', '=', 'ACTIVO')
                        ->order_by('idProducto', 'ASC')                        
                        ->find_all();
    }



    function guardar($DATA, $ID) {
        $query = ORM::factory('producto', $ID);
        $query->idOrden = $DATA['idOrden'];
        $query->descripcion = ucwords(strtolower(trim($DATA['descripcion'])));
        $query->unidad = $DATA['unidad'];
        $query->cantidad = $DATA['cantidad'];
        $query->precio = $DATA['precio'];
        $query->save();
        return $query->idProducto;
    }

    function eliminar($ID) {
        $query = ORM::factory('producto', $ID);
        $query->status = 'ELIMINADO';
        $query->save();
    }
    
//    function getObra($id) {
//        return DB::select()->from('obra')
//                        ->where('idObra', '=', $id)
//                        ->as_object()
//                        ->execute()
//                        ->current();
//    }
//
//    function eliminar($ID) {
//        $query = ORM::factory('obra', $ID);
//        $query->status = 'ELIMINADO';
//        $query->save();
//    }

}

?>
