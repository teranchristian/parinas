<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Lista de Usuarios</div>
        </div>
    </div>
    <br/>
    <div class="row">            
        <button type="button" class="btn btn-warning pull-right" onclick="document.location.href='usuario/nuevo';">Nuevo Usuario</button>                
    </div>    
    <div  style="margin-top: 40px">      
        <div class="mainlist">
            <table border="0" cellpadding="1px" cellspacing="0px"  nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
                <thead>
                    <tr>
                        <th class="mainlistheading" style="width: 5%" >
                            ID
                        </th>
                        <th class="mainlistheading" align="left" valign="center">
                            USUARIO
                        </th>
                        <th class="mainlistheading" style="width: 20%">
                            EMAIL
                        </th>
                        <th class="mainlistheading" style="width: 10%" >
                            ROL
                        </th>				
                        <th class="mainlistheading" style="width: 5%">
                            EDIT
                        </th>						
                        <th class="mainlistheading" style="width: 5%">
                            ELIM
                        </th>						
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariosList as $item) { ?>
                    <tr>
                        <td>
                            <?php echo $item['idUsuario']?>
                        </td>
                        <td>
                            <?php echo $item['cargo'].' '.$item['apellido'].', '.$item['nombre']?>
                        </td>
                        <td>
                            <?php echo $item['email']?>
                        </td>
                        <td>
                            <?php echo $item['rol']?>
                        </td>
                        <td>
                            <a href="<?php echo URL::site('usuario/edit/'.$item['idUsuario'])?>"><center><i class="icon-pencil"></i></center></a>
                        </td>
                        <td>
                            <center><i class="icon-trash"></i></center>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>                
            </table>
        </div>
    </div>
</div>