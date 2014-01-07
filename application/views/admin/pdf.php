
<style type="text/css">
    <!--
    table.page_header {width: 100%; border: none; border-bottom: solid 0.5mm #000000; padding: 2mm}
    table.page_footer {width: 100%; border: none; background-color: #eeeeee; border-top: solid 0.5mm #000000; padding: 2mm}
    table.info_header{width: 100%; border: none; font-size: 7pt;  border-bottom: 0.6mm solid #000000;}
    
    table.cliente{width: 100%; border: none; font-size: 9pt;  border-bottom: 0.6mm solid #000000;}

    table.producto{width: 100%;border:1px;}    
    table.producto{font-weight:normal; font-size:9pt;}
    table.producto th{font-weight:normal;border-bottom:0.1mm solid #dddddd; }
    table.producto td{font-weight:normal; border-bottom:0.1mm solid #dddddd; font-size:9pt;}
    table.producto .titulo{background-color: #F6F6F6;text-align:center;  vertical-align:middle;}
    table.producto .titulo h2{font-size:11pt;}
#signature { height: auto; width: 150px;  }

    -->
</style>
<page backtop="30mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 7pt">
    <page_header>
        <table class="page_header">
            <tr>
                <td style="width: 70%; text-align: left">
                    <img class="pull-left" src="<?php //echo URL::base()   ?>media/images/logo.jpg"/>

                </td>

                <td style="width: 30%; text-align:right;">
                    <h2 style="float: right; clear: right;" class="pull-right" >Orden de Compra</h2>    
                    <b>RUC</b> <?php echo @$empresa->ruc?>

                </td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 100%; text-align: right">
                    page [[page_cu]]/[[page_nb]]
                </td>
            </tr>
        </table>
    </page_footer>
</page>
<table border="0px" style="width: 100%;" class="info_header" >
    <tr>
        <td style="width: 60%; text-align: left;font-size: 15px;">
            <span style="font-size: 17px; font-weight: bold;"><?php echo @$empresa->nombre?></span><br/>

            <div style="padding-left:20px">
                <table>
                 <?php foreach ($empresa->direccion->find_all() as $item) : ?>
                    <tr>
                        <td>
                            <b><?php echo $item->departamento?> : </b>
                        </td>
                        <td>
                            <?php echo $item->direccion?> <br/>
                            <b>Telefono(s) :</b> <?php echo $item->telefono?> <br/>
                            <b>Fax :</b> <?php echo $item->fax?> <br/>
                        </td>
                </tr>
                <?php endforeach;?>
                </table>
            </div>
        </td>
        <td style="width: 5%;">                    
        </td>

        <td style="width: 35%; text-align:right;">

            <table style="table-layout:fixed;" style="font-size: 15px;background-color: #eeeeee;border-collapse:collapse;width:100%;" border="1px" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:left;width:90px;">
                        <span style="width:90px;"><b>FECHA </b></span>
                    </td>
                    <td style="width:120px;">
                        <span style="width:120px;"><?php echo @$orden->fechaOrden == '' ? '' : date("d/m/Y", strtotime($orden->fechaOrden)) ?></span>
                    </td>
                </tr>    
                <tr>
                    <td style="text-align:left;">
                        <b>N. DE ORDEN </b>
                    </td>
                    <td style="text-align:right;">
                        <b><?php echo @sprintf('%06u',$orden->numeroOrden)?></b>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;">
                        <b>MONEDA </b>
                    </td>
                    <td style="text-align:right;">
                        <b><?php echo ($orden->monedaObra=='PEN')?'SOLES':'DOLARES'; ?></b>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;">
                        <b>TOTAL </b>
                    </td>
                    <td style="text-align:right;">
                        <b><?php echo ($orden->monedaObra=='PEN')?'S/.':'$'; 
                            $subTotal=$orden->producto->select(array( DB::expr('sum(cantidad*precio)'),'sum'))->where('status','=','ACTIVO')->find()->sum;
                            $igv = ($orden->IGV / 100) * $subTotal ;
                            echo number_format($subTotal+$igv,2,'.',',') ;
                        ?></b>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- Início Informações do Header  -->

<table class="cliente">
    <tr>
        <td colspan="2" style="width: 100%; text-align: left">SENOR(ES): <strong><?php echo @$orden->proveedor->proveedor ?></strong></td>
    </tr>
    <tr>
        <td colspan="2" style="width: 100%; text-align: left">DIRECCION: <strong><?php echo @$orden->proveedor->direccion ?></strong></td>
    </tr>
    <tr>
        <td style="width: 50%; text-align: left">TELEFONO (S): <strong><?php echo @$orden->proveedor->telefono ?></strong></td>
        <td style="width: 50%; text-align: left">RUC: <strong><?php echo @$orden->proveedor->ruc ?></strong></td>
    </tr>
    <tr>
        <td style="width: 50%; text-align: left">OBRA: <strong><?php echo @$orden->obra->descripcion ?></strong></td>
        <td style="width: 50%; text-align: left">C. DE COSTO: <strong><?php echo @$orden->obra->centroCosto->codigo ?></strong></td>
    </tr>
</table>
<P/>
<!-- Fim Informações do Header  -->
<div style="margin-bottom: 150px;">
<table border="0px" class="producto" cellpadding="0px" cellspacing="2px" >
    <tr>
        <td style="width: 40px;" class="titulo" >ITEM</td>
        <td style="width: 375px;" class="titulo" >DESCRIPCION</td>
        <td style="width: 50px;" class="titulo" >UNIDAD</td>
        <td style="width: 60px;" class="titulo" >CANTIDAD</td>
        <td style="width: 50px;" class="titulo" >P/UNIDAD</td>
        <td style="width: 60px" class="titulo" >TOTAL</td>
    </tr>
    <?php
    $id = 1;
    foreach ($orden->producto->find_all() as $item) :
        ?>
        <tr>
            <td style=" text-align: center;vertical-align: central"  >
                <?php echo sprintf('%02u', $id++) ?>
            </td>
            <td style="width: 375px;;vertical-align: central">
                <span style="width:375px;"><?php echo $item->descripcion ?></span>
            </td>
            <td style="text-align: center;vertical-align: central">
                <?php echo $item->unidad ?>
            </td>
            <td style="text-align: right;vertical-align: central">
                <?php echo sprintf('%03u', $item->cantidad) ?>
            </td>
            <td style="text-align: right;vertical-align: central" >
                <?php echo number_format($item->precio,2,'.',','); ?>
            </td>
            <td style="text-align: right;vertical-align: central" >
                <?php echo number_format($item->cantidad * $item->precio,2,'.',','); ?>
            </td>
        </tr>

        <?php
    endforeach;
    ?>
    <tr>
        <td style="border: 0mm;" colspan="4"></td>
        <td style="border: 0mm;" style="text-align: right" >SUBTOTAL</td>
        <td style="text-align: right"  ><?php echo number_format($subTotal,2,'.',','); ?></td>
    </tr>
    <tr>
        <td style="border: 0mm;" colspan="4"></td>
        <td style="border: 0mm;" style="text-align: right" >IGV (<?php echo @$orden->IGV ?>%)</td>
        <td style="text-align: right"  ><?php $igv = ($orden->IGV / 100) * $subTotal; echo  number_format($igv,2,'.',',')  ?></td>
    </tr>
    <tr>
        <td style="border: 0mm;" colspan="4"></td>
        <td style="border: 0mm;"  style="text-align: right">TOTAL (<?php echo ($orden->monedaObra=='PEN')?'S/.':'$'; ?>)</td>
        <td style="border: 0mm;"  style="text-align: right"><?php echo  number_format($igv + $subTotal,2,'.',',')  ?></td>
    </tr>
</table>
</div>
<!-- footer -->
<div style="position: absolute;
     bottom: 20px;
     width: 100%; ">
    <table border="0px" style="width: 100%;"  >
        <tr>
            <td style="width: 33%; text-align: center;font-size: 15px;vertical-align: bottom">
                <?php echo @$orden->cliente ?><br/>
                <span style="font-size: 14px; font-weight: bold;">PROVEEDOR</span>
            </td>
            <td style="width: 33%;text-align: center;vertical-align: bottom">  
                <?php echo @$orden->solicitante->lastName.', '.@$orden->solicitante->name ?><br/>
                <span style="font-size: 14px; font-weight: bold;">SOLICITANTE</span>
            </td>

            <td style="width: 33%; text-align: center;">                
                <img id="signature" src="<?php //echo URL::base()   ?>media/images/signature.jpg"/><br/>               
                XXXX<br/>
                <span style="font-size: 14px; font-weight: bold;">M Y C PARINAS S.A.</span>
            </td>
        </tr>
    </table>
</div>