
<?php

class Model_Obra extends ORM {

    protected $_table_name = 'obra';
    protected $_primary_key = 'idObra';

    function getObraList() {
        return ORM::factory('obra')
                        ->select('obra.idObra', 'centroCosto.codigo', 'Obra.descripcion', 'obra.fechaInicio', 'obra.fechaFin', array('estadoObra.descripcion', 'descripcionEstatus'))
                        ->join('centroCosto', 'INNER')->on('centroCosto.idCentroCosto', '=', 'Obra.idCentroCosto')
                        ->join('estadoObra', 'INNER')->on('estadoObra.idEstadoObra', '=', 'Obra.idEstadoObra')
                        ->where('Obra.status', '=', 'ACTIVO')
                        ->order_by('obra.idObra', 'ASC')
                        ->find_all();
    }

//
//    function insert($DATA) {
//        $fechaInicio = $DATA['fechaInicio'] == '' ? NULL : date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaInicio'])));
//        $fechafin = $DATA['fechaFin'] == '' ? NULL : date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaFin'])));
//        DB::insert('obra', array_keys($DATA))
//                ->values(array(
//                    $DATA['idCentroCosto'],
//                    ucwords(strtolower(trim($DATA['descripcion']))),
//                    $DATA['moneda'],
//                    $DATA['montoContrato'],
//                    $DATA['idEstadoObra'],
//                    $fechaInicio,
//                    $fechafin,
//                    $DATA['idUsuario']
//                        //date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaInicio'])) ),
//                        //date("Y-m-d", strtotime($DATA['fechaInicio']) )
//                ))
//                ->execute();
//    }

    function guardar($DATA, $ID) {
//        $query = DB::update('Obra');
//        $query->set(array(
//            'idArea' => $DATA['idArea'],
//            'codigo' => trim($DATA['codigo']),
//            'descripcion' => strtoupper(trim($DATA['descripcion']))
//        ));
//        $query->where('idCentroCosto', '=', $ID);
//        $query->execute();
//                    ,
//                    $DATA['moneda'],
//                    $DATA['montoContrato'],
//                    $DATA['idEstadoObra'],
//                    $fechaInicio,
//                    $fechafin,
//                    $DATA['idUsuario']
//                        //date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaInicio'])) ),
//                        //date("Y-m-d", strtotime($DATA['fechaInicio']) )
        $query = ORM::factory('Obra', $ID);
        $query->descripcion = ucwords(strtolower(trim($DATA['descripcion'])));
        $query->moneda = $DATA['moneda'];
        $query->montoContrato = $DATA['montoContrato'];
        $query->idEstadoObra = $DATA['idEstadoObra'];
        $query->fechaInicio = ($DATA['fechaInicio'] != null) ? date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaInicio']))) : null;
        $query->fechaFin = ($DATA['fechaInicio'] != null) ? date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaFin']))) : null;
        $query->save();
    }

    function getObra($id) {
        return DB::select()->from('obra')
                        ->where('idObra', '=', $id)
                        ->as_object()
                        ->execute()
                        ->current();
    }

    function eliminar($ID) {
        $query = ORM::factory('obra', $ID);
        $query->status = 'ELIMINADO';
        $query->save();
    }

}

?>
