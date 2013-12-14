
<?php

class Model_Orden extends ORM {

    protected $_table_name = 'orden';
    protected $_primary_key = 'idOrden';

    function getOrdenList($filter) {
        return ORM::factory('orden')
                        ->select('orden.*', 'obra.*', 'usuario.*', array('estadoobra.descripcion', 'estadoObra'), array('orden.moneda', 'monedaObra') , 'procesoorden.*' )
                        ->join('obra', 'INNER')
                        ->on('obra.idObra', '=', 'orden.idObra')                        
                        ->join('usuario', 'INNER')
                        ->on('usuario.idUsuario', '=', 'orden.idSolicitante') 
                        ->join('estadoobra', 'INNER')
                        ->on('estadoobra.idEstadoObra', '=', 'obra.idEstadoObra')                         
                        ->join('procesoorden', 'INNER')
                        ->on('procesoorden.idProcesoOrden', '=', 'orden.idProcesoOrden')                         
                        ->where('orden.status', '=', 'ACTIVO')
                        ->and_where('orden.idProcesoOrden', 'in', $filter)
                        ->order_by('orden.creado', 'ASC')
                        ->find_all();
    }

    function guardar($DATA, $ID) {
        $query = ORM::factory('Orden', $ID);
        $query->cliente = ucwords(strtolower(trim($DATA['cliente'])));
         $query->fechaOrden = ($DATA['fechaOrden'] != null) ? date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaOrden']))) : null;
        $query->idObra = $DATA['idObra'];
        $query->moneda = $DATA['moneda'];
        $query->mensaje = $DATA['mensaje'];
        $query->idProcesoOrden = $DATA['idProcesoOrden'];
        $query->idSolicitante = Session::instance()->get('idUsuario');
        $query->save();
    }
    
       function getOrden($id) {
        return ORM::factory('orden')
                        ->select('orden.*', 'obra.*', 'usuario.*', array('estadoobra.descripcion', 'estadoObra'), array('orden.moneda', 'monedaObra'), array('centrocosto.codigo', 'codigo'),'procesoorden.*' )
                        ->join('obra', 'INNER')
                        ->on('obra.idObra', '=', 'orden.idObra')                        
                        ->join('usuario', 'INNER')
                        ->on('usuario.idUsuario', '=', 'orden.idSolicitante') 
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
