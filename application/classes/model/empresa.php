
<?php

class Model_Empresa extends ORM {

    protected $_table_name = 'empresa';
    protected $_primary_key = 'idEmpresa';
    protected $_has_many = array('direccion' => array('model' => 'direccionEmpresa','foreign_key' => 'idEmpresa',),);

     function getIGV() {
        return ORM::factory('empresa')
                        ->select('IGV')
                        ->limit(1)
                        ->find();
    }
}

?>
