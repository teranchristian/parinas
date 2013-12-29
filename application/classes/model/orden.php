
<?php

class Model_Orden extends ORM {

    protected $_table_name = 'orden';
    protected $_primary_key = 'idOrden';
    protected $_belongs_to = array('proveedor' => array(
                                'model' => 'proveedor',
                                'foreign_key' => 'idProveedor',
                                ),
                             'solicitante' => array(
                                'model' => 'user',
                                'foreign_key' => 'idSolicitante',
                                
                                ),
                             'obra' => array(
                                'model' => 'obra',
                                'foreign_key' => 'idObra',
                                ));
    
    function getOrdenList($filter) {
        return ORM::factory('orden')
                        ->select('orden.*', 'obra.*', 'users.*', array('estadoobra.descripcion', 'estadoObra'), array('orden.moneda', 'monedaObra'), 'procesoorden.*')
                        ->join('obra', 'INNER')
                        ->on('obra.idObra', '=', 'orden.idObra')
                        ->join('users', 'INNER')
                        ->on('users.id', '=', 'orden.idSolicitante')
                        ->join('estadoobra', 'INNER')
                        ->on('estadoobra.idEstadoObra', '=', 'obra.idEstadoObra')
                        ->join('procesoorden', 'INNER')
                        ->on('procesoorden.idProcesoOrden', '=', 'orden.idProcesoOrden')
                        ->where('orden.status', '=', 'ACTIVO')
                        ->and_where('orden.idProcesoOrden', 'in', $filter)                        
                        ->order_by('orden.creado', 'ASC')
                        ->find_all();
    }
    function getOrdenListFilter($filter,$id=null) {
        return ORM::factory('orden')
                        ->select('orden.*', 'obra.*', 'users.*', array('estadoobra.descripcion', 'estadoObra'), array('orden.moneda', 'monedaObra'), 'procesoorden.*')
                        ->join('obra', 'INNER')
                        ->on('obra.idObra', '=', 'orden.idObra')
                        ->join('users', 'INNER')
                        ->on('users.id', '=', 'orden.idSolicitante')
                        ->join('estadoobra', 'INNER')
                        ->on('estadoobra.idEstadoObra', '=', 'obra.idEstadoObra')
                        ->join('procesoorden', 'INNER')
                        ->on('procesoorden.idProcesoOrden', '=', 'orden.idProcesoOrden')
                        ->where('orden.status', '=', 'ACTIVO')
                        ->and_where('orden.idProcesoOrden', 'in', $filter)                        
                        ->and_where('orden.idSolicitante', '=', $id)
                        ->order_by('orden.creado', 'ASC')
                        ->find_all();
    }

    /**
     * Guardar/Update orden
     * Este metodo guarda/update las ordenes de compra
     * -El solocitante solo le inserta (no se actualiza)
     */
    function guardar($DATA, $ID) {
        $query = ORM::factory('Orden', $ID);
        if (!($query->loaded()))
            $query->idSolicitante = Session::instance()->get('idUsuario');
        $query->cliente = ucwords(strtolower(trim($DATA['cliente'])));
        $query->fechaOrden = ($DATA['fechaOrden'] != null) ? date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaOrden']))) : null;
        $query->idObra = $DATA['idObra'];
        $query->idProveedor = $DATA['idProveedor'];
        $query->moneda = $DATA['moneda'];
        $query->mensaje = $DATA['mensaje'];
        $query->idProcesoOrden = $DATA['idProcesoOrden'];        
        $query->save();
    }
    /**
     * Archivar orden
     * Este metodo archiva la orden (la remueve del inbox y lo pone en el historial)
     */
    function archivar($DATA, $ID) {
        $query = ORM::factory('Orden', $ID);        
        $query->mensaje = $DATA['mensaje'];
        $query->idProcesoOrden = $DATA['idProcesoOrden'];        
        $query->save();
    }
    

    function getOrden($id) {
        return ORM::factory('orden')
                        ->select('orden.*', 'obra.*', 'users.*', array('estadoobra.descripcion', 'estadoObra'), array('orden.moneda', 'monedaObra'), array('centrocosto.codigo', 'codigo'), 'procesoorden.*')
                        ->join('obra', 'INNER')
                        ->on('obra.idObra', '=', 'orden.idObra')
                        ->join('users', 'INNER')
                        ->on('users.id', '=', 'orden.idSolicitante')
                        ->join('estadoobra', 'INNER')
                        ->on('estadoobra.idEstadoObra', '=', 'obra.idEstadoObra')
                        ->join('centrocosto', 'INNER')
                        ->on('centrocosto.idCentroCosto', '=', 'obra.idCentroCosto')
                        ->join('procesoorden', 'INNER')
                        ->on('procesoorden.idProcesoOrden', '=', 'orden.idProcesoOrden')
                        ->where('orden.status', '=', 'ACTIVO')
                        ->and_where('orden.idOrden', '=', $id)
                        ->order_by('orden.creado', 'ASC')
                        ->find();
    }

    function eliminar($ID) {
        $query = ORM::factory('orden', $ID);
        $query->status = 'ELIMINADO';
        $query->save();
    }

}

?>
