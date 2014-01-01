<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Orden de compra de trabajo</div>
        </div>
    </div>
    <br/>
    <div class="form" style="margin-top: 40px">      
        <form action="<?php echo URL::site('user/updatePwd') ?>">            
            <div class=" form-horizontal">
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 5px;">Senor(es): </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span9" value="BP SOLUTIONS S.A.C NO" readonly="true"/>
                        <input type="text" class="span2" value="N 28.06.2013-001 NO" readonly="true" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 5px;">Direccion : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span10" value="Av. Del Ejercito 1020 - Urb El Molino - Trujillo NO" readonly="true"/>
                        <input type="text" class="span1" value="<?php echo @$orden->codigo?>" readonly="true"/>
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 33px;">Obra : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span9" value="<?php echo @$orden->descripcion ?>" readonly="true"/>
                        <input type="text" class="span2" value="<?php echo @$orden->fechaOrden == '' ? '' : date("d/m/Y", strtotime($orden->fechaOrden)) ?>" readonly="true" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;">Solicitante : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span3" value="Coke" readonly="true"/>
                    </div>
                </div>

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
                            </tr>
                        </thead>
                        <tbody>                          
                            <?php
                            $id = 1;
                            $total = 0;
                            foreach ($orden->producto->find_all() as $item) {
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
                                        <?php echo $item->precio ?>
                                    </td>
                                    <td class="text-right total">
    <?php echo ($item->cantidad * $item->precio) ?>
                                    </td>
                                </tr>

    <?php $total+=($item->cantidad * $item->precio);
} ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">
                                    TOTAL
                                </th>
                                <th class="text-right">
                                    <span id="grandtotal"> $<?php echo $total ?></span>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <br/>
<?php if (isset($orden->mensaje)) { ?>
                    <div class="control-group">
                        <label  class="control-label">Notas anteriores : </label>
                        <div class="controls ">
                            <div  id='mensajeAnteriorHTML'  style="overflow: auto;width: 605px;height: 200px;   border: 1px solid #ccc; background: #eeeeee;padding: 5px;"><?php echo $orden->mensaje ?></div>
                        </div>
                    </div>
<?php } ?>
                <div class="control-group">
                    <label for="current_password" class="control-label">Nueva nota : </label>
                    <div class="controls ">
                        <textarea  rows="5" class="field span8">               
                        </textarea>
                    </div>
                </div>

            </div>
            <br/>
            <div class="modal-footer">                            
                <input type="submit" class="btn btn-success"  value="Guardar"/>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="history.go(-1);">Cancelar</button>
            </div>
        </form>    
    </div>
</div> 