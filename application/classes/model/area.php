
<?php

class Model_Area extends ORM {
protected $_table_name  = 'area'; 
    function getAreaList() {
         return ORM::factory('area')
                 ->where('status', '=', 'ACTIVO')
                 ->order_by('codigoArea', 'ASC')
                        ->find_all();
         
               
    }
    

}

?>
