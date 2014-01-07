       
<div class="container">
        <div class="row">
            <div class="span12">
                <div class="headblocktitle">Ordenes</div>
            </div>
        </div>
        <br/>	
        <div  style="margin-top: 20px"> 
            <table border="0" cellpadding="1px" cellspacing="0px" width="100%" nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
                <thead>
                    <tr>
                        <th class="mainlistheading" style="width: 15%" >
                            N. ORDEN
                        </th>
                        <th class="mainlistheading" align="left" valign="center">
                            OBRAS
                        </th>
                        <th class="mainlistheading" align="left" valign="center">
                            CLIENTE
                        </th>
                        <th class="mainlistheading" style="width: 10%">
                            FECHA
                        </th>
                        <th class="mainlistheading" style="width: 10%" >
                            SOLICITANTE
                        </th>		
                        <th class="mainlistheading" style="width: 10%">
                            PROCESO
                        </th>						
                        <th class="mainlistheading" style="width: 5%">
                            VER
                        </th>						
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ordenList as $item) { ?>
                    <tr>
                        <td>
                            <?php echo $item->idOrden?>
                        </td>
                        <td>
                            <?php echo $item->obra->descripcion  ?>
                        </td>
                        <td>
                            <?php echo $item->cliente ?>
                        </td>
                        <td>
                            <?php echo $item->fechaOrden == '' ? '<center>--</center>':date("d/m/Y", strtotime($item->fechaOrden) )?>
                        </td>
                        <td>
                           <?php echo $item->solicitante->lastName .' '. $item->solicitante->name?>
                        </td>
                        <td>
                            <span class="label <?php echo $item->procesoorden->procesoOrdenColor?>"><?php echo $item->procesoorden->procesoOrden?></span>
                        </td>
                        <td>
                            <center><a  class='icon iconEdit'  href="<?php echo URL::site('orden/editar/'.$item->idOrden)?>" ></a></center>
                        </td>
                    </tr>
                    <?PHP } ?>
                </tbody>
            </table>
        </div>	
    </div>
