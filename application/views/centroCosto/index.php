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
                <?php foreach ($areaList as $itemArea) { ?>
                <tr  class="info">
                    <td colspan="4" style="font-weight: bold">
                        <?php echo $itemArea->area?>
                    </td>
                </tr>                   
                <?php foreach ($centroCostoList as $itemCosto) {
                    if ($itemArea->idArea==$itemCosto->idArea){ ?>
                <tr>
                    <td>
                        <?php echo $itemCosto->codigo?>
                    </td>
                    <td>
                        <?php echo $itemCosto->descripcion?>
                    </td>
                    <td>
                        <center><a  class='icon iconEdit' href="<?php echo URL::site('centroCosto/editar/'.$itemCosto->idCentroCosto)?>" ></a></center>
                    </td>
                    <td>
                        <center><i id="del" value="<?php echo $itemCosto->idCentroCosto ?>" class="icon-trash"></i></center>
                    </td>
                </tr>   
                <?php }} ?>
                <?php } ?>
            </tbody>
        </table>
    </div>	
</div>