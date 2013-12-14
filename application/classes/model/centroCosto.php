
<?php

class Model_centroCosto extends ORM {

    protected $_table_name = 'centrocosto';
    protected $_primary_key = 'idCentroCosto';

//    function insert($DATA) {
//            $query=DB::insert('centroCosto',array_keys ($DATA));
//            $query ->values(array(
//                        $DATA['idArea'],
//                        trim($DATA['codigo']),
//                        strtoupper(trim($DATA['descripcion']))
//                ));
//            $query->execute();       
//    }
//    
    function guardar($DATA, $ID) {
        $query = ORM::factory('centroCosto', $ID);
        $query->idArea = $DATA['idArea'];
        $query->codigo = trim($DATA['codigo']);
        $query->descripcion = strtoupper(trim($DATA['descripcion']));
        $query->save();
    }

//    
    function eliminar ($ID){
        $query = ORM::factory('centroCosto', $ID);
        $query->status = 'ELIMINADO';
        $query->save();     
    }

    function getCentroCostoList() {
        return ORM::factory('centroCosto')
                        ->where('status', ' = ', 'ACTIVO')
                        ->order_by('codigo', 'ASC')
                        ->find_all();
    }

    function getCentroCosto($id) {
        return DB::select()->from('centroCosto')
                        ->where('idCentroCosto', '=', $id)
                        ->as_object()
                        ->execute()
                        ->current();
    }

}

?>
