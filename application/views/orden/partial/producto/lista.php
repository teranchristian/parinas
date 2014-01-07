<div class="mainlist">
    <table border="0" cellpadding="1px" cellspacing="0px"  nowrap="nowrap"  id="productoList" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
        <thead>
            <tr>
                <th class="mainlistheading" style="width: 5%" >
                    DE
                </th>
                <th class="mainlistheading" align="left" valign="center">
                    DESCRIPCION
                </th>
                <th class="mainlistheading" style="width: 10%">
                    UND
                </th>
                <th class="mainlistheading" style="width: 5%" >
                    CANT
                </th>		
                <th class="mainlistheading" style="width: 10%">
                    PRECIO UNID
                </th>						
                <th class="mainlistheading" style="width: 5%">
                    TOTAL
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
            <?php
            $id = 1;
            $subTotal = 0;
            foreach ($orden->producto->where('status', '=', 'ACTIVO')->find_all()as $item) {
                ?>
                <tr>
                    <td >
                        <?php echo sprintf('%02u', $id++) ?>
                    </td>
                    <td>
                        <?php echo $item->descripcion ?>
                    </td>
                    <td>
                        <?php echo $item->unidad ?>
                    </td>
                    <td class="text-right">
                        <?php echo sprintf('%03u', $item->cantidad) ?>
                    </td>
                    <td class="text-right">
                        <?php echo number_format($item->precio,2,'.',',')  ?>
                    </td>
                    <td class="text-right total">
                        <?php echo number_format(($item->cantidad * $item->precio),2,'.',',')  ?>
                    </td>
                    <td>
            <center><i id="editar" value="<?php echo $item->idProducto ?>"  class="icon-pencil"></i></center>
            </td>
            <td>
            <center><i id="del" value="<?php echo $item->idProducto ?>" class="icon-trash"></i></center>
            </td>
            </tr>
            <?php $subTotal+=($item->cantidad * $item->precio);
        } ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="text-right" colspan="5">
                    SUBTOTAL
                </th>
                <th class="text-right">
                    <span id="grandtotal"> <?php echo number_format($subTotal,2,'.',',')  ?></span>
                </th>
                <th class="mainlistheading" colspan="2">

                </th>
            </tr>
            <tr>
                <th class="text-right" colspan="5">
                    IGV (<?php echo @$orden->IGV ?>%)
                </th>
                <th class="text-right">
                    <span id="grandtotal"> <?php $igv = ($orden->IGV / 100) * $subTotal; echo  number_format($igv,2,'.',',')  ?></span>
                </th>
                <th class="mainlistheading" colspan="2">

                </th>
            </tr>
            <tr>
                <th class="text-right" colspan="5">
                    TOTAL (<span id="monedaSigno">$</span>)
                </th>
                <th class="text-right">
                    <span id="grandtotal"> <?php echo  number_format($igv + $subTotal,2,'.',',')  ?></span>
                </th>
                <th class="mainlistheading" colspan="2">

                </th>
            </tr>
        </tfoot>
    </table>
</div>