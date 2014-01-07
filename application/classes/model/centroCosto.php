
<?php

class Model_centroCosto extends ORM {

    protected $_table_name = 'centrocosto';
    protected $_primary_key = 'idCentroCosto';
    protected $_has_many = array('obra' => array('model' => 'obra','foreign_key' => 'idCentroCosto',),);
 
    public function filters() {

        return array(
            // Field Filters
            // $field_name => array(mixed $callback[, array $params = array(':value')]),
            'codigo' => array(
                array('trim'),
            ),
            'descripcion' => array(
               array(array($this, 'your_callback')),
            ),
        );
    }
public function your_callback($value)
{   
    return preg_replace('/\s+/', ' ', $value);
}

    // protected $_ignored_columns = array('document');
 
    function guardar($DATA, $ID) {
        $query = ORM::factory('centroCosto', $ID);
        $query->values($DATA);
        //$query ->values( $DATA, array_keys( $DATA ) );
        //$query->idArea = $DATA['idArea'];
        //$query->codigo = trim($DATA['codigo']);
        //$query->descripcion = strtoupper(trim($DATA['descripcion']));
        $query->save();
    }

//    
    function eliminar($ID) {
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
