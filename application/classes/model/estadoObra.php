
<?php

class Model_estadoObra extends ORM {

    protected $_table_name  = 'estadoObra'; 
protected $_primary_key  = 'idEstadoObra'; 

    function getEstadoObraList() {
         return DB::select()->from('estadoObra')
                 ->where('status', '=', 'ACTIVO')
                 ->order_by('descripcion', 'ASC')
                        ->execute();
    }
    

}

?>
