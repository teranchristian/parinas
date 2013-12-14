
<?php

class Model_Usuario extends ORM {
    protected $_table_name = 'usuario';
    protected $_primary_key = 'idUsuario';
    function getUsuariosList() {
        return DB::select()->from('usuario')
                        ->join('rol')
                        ->on('usuario.idRol', '=', 'rol.idRol')
                        ->where('usuario.status', '=', 'ACTIVO')
                        ->execute();
    }
    
    function getRolList() {
        return DB::select()->from('rol')
                        ->execute();
    }

}

?>
