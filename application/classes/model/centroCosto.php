
<?php

class Model_centroCosto extends ORM {

    protected $_table_name = 'centrocosto';
    protected $_primary_key = 'idCentroCosto';
    protected $_validation_required = FALSE;

    public function rules() {
        echo 1;
        
       // if ($this->validation_required()) {
            return array(
                'codigo' => array(array('not_empty'),),
                'descripcion' => array(array('not_empty'),),
            );
        //} else {
            // skip validation 
            return array();
        //}
    }

    public function labels() {
        return array('codigo' => 'Codigo',);
    }

    // protected $_filters = array('codigo' => array('strtoupper‎'));

    public function filters() {

        return array(
            // Field Filters
            // $field_name => array(mixed $callback[, array $params = array(':value')]),
            'codigo' => array(
                // PHP Function Callback, default implicit param of ':value'
                array('trim'),
            ),
        );
    }

    protected $_labels = array(
        'codigo' => 'pretty name',
    );

    // protected $_ignored_columns = array('document');
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
        $query->values($DATA);
        //$query ->values( $DATA, array_keys( $DATA ) );
        //$query->idArea = $DATA['idArea'];
        //$query->codigo = trim($DATA['codigo']);
        //$query->descripcion = strtoupper(trim($DATA['descripcion']));
        $query->save();
    }

//    
    function eliminar($ID) {
        $this->_valid=FALSE;
        $this->_validation=FALSE;
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
