
<?php

class Model_Proveedor extends ORM {

    protected $_table_name = 'proveedor';
    protected $_primary_key = 'idProveedor';

    function getProveedorList() {
        return ORM::factory('proveedor')
                        ->where('status', '=', 'ACTIVO')
                        ->order_by('idProveedor', 'ASC')
                        ->find_all();
    }

    function guardar($DATA, $ID) {
        $query = ORM::factory('Proveedor', $ID);
        $query->proveedor = $DATA['proveedor'];
        $query->direccion = $DATA['direccion'];
        $query->ruc = $DATA['ruc'];
        $query->telefono = $DATA['telefono'];
        $query->fax = $DATA['fax'];
        $query->email = $DATA['email'];        
        $query->save();
    }

    function getProveedor($id) {
        return DB::select()->from('Proveedor')
                        ->where('idProveedor', '=', $id)
                        ->as_object()
                        ->execute()
                        ->current();
    }

    function eliminar($ID) {
        $query = ORM::factory('proveedor', $ID);
        $query->status = 'ELIMINADO';
        $query->save();
    }

}

?>
