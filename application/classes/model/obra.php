
<?php

class Model_Obra extends ORM {

    protected $_table_name = 'obra';
    protected $_primary_key = 'idObra';
    protected $_belongs_to = array('centroCosto' => array(
                                'model' => 'centroCosto',
                                'foreign_key' => 'idCentroCosto',
                                ),'estadoObra' => array(
                                'model' => 'estadoObra',
                                'foreign_key' => 'idEstadoObra',
                                ));
    function getObraList() {
        return ORM::factory('obra')
                        ->select('obra.idObra',  'Obra.descripcion', 'obra.fechaInicio', 'obra.fechaFin')
                        ->where('Obra.status', '=', 'ACTIVO')
                        ->order_by('obra.idObra', 'ASC')
                        ->find_all();
    }

    function guardar($DATA, $ID) {
        $query = ORM::factory('Obra', $ID);
        $query->descripcion = ucwords(strtolower(trim($DATA['descripcion'])));
        $query->moneda = $DATA['moneda'];
        $query->idCentroCosto = $DATA['idCentroCosto'];
        $query->montoContrato = $DATA['montoContrato'];
        $query->idEstadoObra = $DATA['idEstadoObra'];
        $query->fechaInicio = ($DATA['fechaInicio'] != null) ? date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaInicio']))) : null;
        $query->fechaFin = ($DATA['fechaInicio'] != null) ? date("Y-m-d", strtotime(str_replace('/', '-', $DATA['fechaFin']))) : null;
        $query->idUsuario = Session::instance()->get('idUsuario');
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
