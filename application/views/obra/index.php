<div class="container">
        <div class="row">
            <div class="span12">
                <div class="headblocktitle">Obras pendientes</div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="span12">
                <button type="button" class="btn btn-warning pull-left">Re-Abrir Obra</button>
                <button type="button" class="btn btn-warning pull-right" onclick="document.location.href='obra/nuevo';">Crear Nueva Obra</button>                
            </div>
        </div>
        <br/>	
        <div class="mainlist">
            <table border="0" cellpadding="1px" cellspacing="0px" width="100%" nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
                <thead>
                    <tr>
                        <th class="mainlistheading" style="width: 15%" >
                            CENTRO DE COSTO
                        </th>
                        <th class="mainlistheading" align="left" valign="center">
                            OBRAS
                        </th>
                        <th class="mainlistheading" style="width: 10%">
                            FECHA
                        </th>
                        <th class="mainlistheading" style="width: 10%" >
                            SOLICITANTE
                        </th>		
                        <th class="mainlistheading" style="width: 10%">
                            ESTATUS
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
                    <?php foreach ($obraList as $item) { ?>
                    <tr>
                        <td>
                            <?php echo $item->codigo?>
                        </td>
                        <td>
                            <?php echo $item->descripcion ?>
                        </td>
                        <td>
                            <?php echo $item->fechaInicio == '' ? '<center>--</center>':date("d/m/Y", strtotime($item->fechaInicio) )?>
                        </td>
                        <td>
                            <?php echo $item->fechaFin == '' ? '<center>--</center>':date("d/m/Y", strtotime($item->fechaFin) )?>
                        </td>
                        <td>
                            <?php echo $item->descripcionEstatus?>
                        </td>
                        <td>
                            <center><a  class='icon iconEdit'  href="<?php echo URL::site('obra/editar/'.$item->idObra)?>" ></a></center>
                        </td>
                        <td>
                            <center><i id="del" value="<?php echo $item->idObra ?>" class="icon-trash"></i></center>
                        </td>
                    </tr>
                    <?PHP } ?>
                </tbody>
            </table>
        </div>	
    </div>