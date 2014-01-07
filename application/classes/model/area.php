
<?php

class Model_Area extends ORM {
protected $_table_name  = 'area'; 
protected $_primary_key  = 'idArea'; 

protected $_has_many = array('centroCosto' => array('model' => 'centroCosto','foreign_key' => 'idArea',),);
//protected $_has_many = array('direccion' => array('model' => 'direccionEmpresa','foreign_key' => 'idEmpresa',),);
    function getAreaList() {
         return ORM::factory('area')
                 ->where('status', '=', 'ACTIVO')
                 ->order_by('codigoArea', 'ASC')
                        ->find_all();
         
               
    }
    

}

?>
