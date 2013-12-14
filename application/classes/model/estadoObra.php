
<?php

class Model_estadoObra extends Model {

    function getEstadoObraList() {
         return DB::select()->from('estadoObra')
                 ->where('status', '=', 'ACTIVO')
                 ->order_by('descripcion', 'ASC')
                        ->execute();
    }
    

}

?>
