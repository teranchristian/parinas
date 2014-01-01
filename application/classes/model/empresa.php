
<?php

class Model_Empresa extends ORM {

    protected $_table_name = 'empresa';
    protected $_primary_key = 'idEmpresa';
    protected $_has_many = array('direccion' => array('model' => 'direccionEmpresa','foreign_key' => 'idEmpresa',),);

}

?>
