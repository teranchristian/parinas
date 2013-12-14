<div class="container">
        <div class="row">
            <div class="span12">
                <div class="headblocktitle">Proveedores</div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="span12">
                <button type="button" class="btn btn-warning pull-right" onclick="document.location.href='proveedor/nuevo';">Nuevo proveedor</button>                
            </div>
        </div>
        <br/>	
        <div class="mainlist">
            <table border="0" cellpadding="1px" cellspacing="0px" width="100%" nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
                <thead>
                    <tr>
                        
                        <th class="mainlistheading" align="left" valign="center">
                            PROVEEDOR
                        </th>
                        <th class="mainlistheading" style="width: 10%">
                            RUC
                        </th>
                        <th class="mainlistheading" style="width: 10%" >
                            TELEFONO
                        </th>							
                        <th class="mainlistheading" style="width: 15%" >
                            EMAIL
                        </th>
                        <th class="mainlistheading" style="width: 5%">
                            VER
                        </th>						
                        <th class="mainlistheading" style="width: 5%">
                            ELIM
                        </th>						
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proveedorList as $item) { ?>
                    <tr>
                        <td>
                            <?php echo $item->proveedor?>
                        </td>
                        <td>
                            <?php echo $item->ruc ?>
                        </td>
                        <td>
                            <?php echo $item->telefono ?>
                        </td>
                        <td>
                            <?php echo $item->email?>
                        </td>
                        <td>
                            <center><a  class='icon iconEdit'  href="<?php echo URL::site('proveedor/editar/'.$item->idProveedor)?>" ></a></center>
                        </td>
                        <td>
                            <center><i id="del" value="<?php echo $item->idProveedor ?>" class="icon-trash"></i></center>
                        </td>
                    </tr>
                    <?PHP } ?>
                </tbody>
            </table>
        </div>	
    </div>