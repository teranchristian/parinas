<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Centro de Costo</div>
        </div>
    </div>
    <br/>
    <div class="row">
<!--        <div class="span12">
            <button type="button" class="btn btn-warning pull-right" onclick="document.location.href='centroCosto/nuevo';">Nuevo Centro de Costo</button>
        </div>-->
    </div>
    <br/>	
    <div class="mainlist">
        <table border="0" cellpadding="1px" cellspacing="0px" width="100%" nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
            <thead>
                <tr>
                    <th class="mainlistheading" style="width: 15%" >
                        CODIGO
                    </th>
                    <th class="mainlistheading" align="left" valign="center">
                        DESCRIPCION
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
                <?php  foreach ($areaList as $areaItem): ?>
                <tr  class="info">
                    <td colspan="4" style="font-weight: bold">
                       <?php echo $areaItem->area?>
                    </td>
                </tr>                   
                <?php foreach ($areaItem->centroCosto->where('status','=','ACTIVO')->find_all() as $centroCostoItem): ?>
                <tr>
                    <td>
                        <?php echo $centroCostoItem->codigo?>
                    </td>
                    <td>
                        <?php echo $centroCostoItem->descripcion?>
                    </td>
                    <td>
                        <center><a  class='icon iconEdit' href="<?php echo URL::site('centroCosto/editar/'.$centroCostoItem->idCentroCosto)?>" ></a></center>
                    </td>
                    <td>
                        <center><i id="del" value="<?php echo $centroCostoItem->idCentroCosto ?>" class="icon-trash"></i></center>
                    </td>
                </tr>   
                <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>	
</div>

