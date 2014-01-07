<div class="container">
<div class="mainlist">
        <table border="0" cellpadding="1px" cellspacing="0px" width="100%" nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
<!--            <thead>
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
            </thead>-->
            <tbody>
                <?php foreach ($area as $areaItem): ?>
                <tr  class="info">
                    <td colspan="7" style="font-weight: bold">
                        <?php echo $areaItem->area?>
                    </td>
                </tr>   
                <tr class="well">
                    <td></td>
                    <td>DESCRIPCION</td>
                    <td>ESTADO</td>
                    <td>FECHA INICIO</td>
                    <td>FECHA FIN</td>
                    <td>MONTO (S/.)</td>
                    <td>MONTO ($)</td>
                </tr>
                <?php foreach ($areaItem->centroCosto->where('status','=','ACTIVO')->find_all() as $centroCostoItem): ?>
                <tr style="font-weight: bold;">
                    <td>
                        <?php echo $centroCostoItem->codigo?>
                    </td>
                    <td>
                        <?php echo $centroCostoItem->descripcion?>
                    </td>                    
                    <td colspan="3">
                        
                    </td>
                    <td  style="text-align: right;">
                        <?php 
                        $total =$centroCostoItem->obra->select(array( DB::expr('sum(`montoContrato`)'),'sum'))->where('status','=','ACTIVO')->find()->sum;
                        echo $total == '' ? '':number_format($total,2,'.',',')
                                ?>
                    </td>
                    <td  style="text-align: right;">
                        <?php 
                        $total =$centroCostoItem->obra->select(array( DB::expr('sum(`montoContrato`)'),'sum'))->where('status','=','ACTIVO')->find()->sum;
                        echo $total == '' ? '':number_format($total,2,'.',',')
                                ?>
                    </td>
                </tr>                  
                <?php foreach ($centroCostoItem->obra->where('status','=','ACTIVO')->find_all() as $obraItem): ?>
                <tr>
                    <td colspan="2" style="padding-left: 100px">
                        <?php echo $obraItem->descripcion?>
                    </td>                                     
                    <td>
                        <?php echo $obraItem->estadoObra->descripcion?>
                    </td>
                    <td>
                        <?php echo $obraItem->fechaInicio == '' ? '' : date("d/m/Y", strtotime($obraItem->fechaInicio)) ?>
                    </td>
                    <td>
                        <?php echo $obraItem->fechaFin == '' ? '' : date("d/m/Y", strtotime($obraItem->fechaFin)) ?>
                    </td>
                    <td  style="text-align: right;">
                        <?php echo $obraItem->montoContrato == '--' ? '' : number_format($obraItem->montoContrato,2,'.',',')  ?>
                    </td>   
                    <td  style="text-align: right;">
                        <?php echo $obraItem->montoContrato == '--' ? '' : number_format($obraItem->montoContrato,2,'.',',')  ?>
                    </td>   
                </tr>  
                <?php endforeach; ?>
                <?php endforeach; ?>
                <?php endforeach;   ?>
            </tbody>
        </table>
    </div>	
    </div>	