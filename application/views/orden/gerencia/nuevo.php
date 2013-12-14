
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Nueva Orden de Compra de Trabajo</div>
        </div>
    </div>
    <br/>
    <div  style="margin-top: 20px">      
        <form id="ordenForm" action="<?php echo URL::site('orden/guardar') . '/' . @$orden->idOrden ?>" method="POST" onsubmit=" $('#mensajeAnterior').val($('#mensajeAnteriorHTML').html());">                       
            <input type="hidden" name="idProcesoOrden" id="idProcesoOrden" value="<?php echo isset($orden->idProcesoOrden) ? $orden->idProcesoOrden : "1" ?>"/>
            <div class=" form-horizontal">
                <div class="control-group">
                    <label  class="control-label" style="width:auto;margin-right: 7px;">Proveedor: </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <select name="idProveedor" id="idProveedor" class="span8" >
                            <?php
                            foreach ($proveedorList as $item) {
                                // if (isset($obra))
                                //   $selected = $item->idCentroCosto == $obra->idCentroCosto ? 'selected' : NULL;
                                ?>

                                <option <?php echo @$selected ?> value="<?php echo $item->idProveedor ?>" rel="<?php echo $item->proveedor ?>"><?php echo $item->proveedor ?></option>
                            <?php } ?>
                        </select>

                        <input type="text" class="span3"  readonly="true"/>
                    </div>
                </div>                
                <div class="control-group">
                    <label class="control-label" style="width:auto;margin-right: 5px;">Direccion : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span11" name="direccion" id="direccion" readonly="true" />                        
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="width:auto;margin-right: 5px;">Cliente(s) : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span6" name="cliente" id="cliente"  value="<?php echo @$orden->cliente ?>"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label  class="control-label" style="width:auto;margin-right: 33px;">Obra : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        
                        <select name="idObra" id="idObra" class="span9" >
                            <?php
                            foreach ($obraList as $item) {
                                if (isset($orden))
                                    $selected = ($item->idObra == $orden->idObra )? 'selected' : NULL;
                                ?>
                                <option <?php echo @$selected ?> value="<?php echo $item->idObra ?>" rel="<?php echo $item->codigo ?>"><?php echo $item->descripcion ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" readonly class="span1"  id="ccosto" value="<?php echo @$orden->codigo ?>"/>
                    </div>
                </div>
                <div class="control-group">
                    <label  class="control-label" style="width:auto;margin-right: 13px;">Moneda : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">

                        <select name="moneda" id="moneda" class="span2" >
                            <option <?php echo @$orden->monedaObra == 'PEN' ? 'selected' : NULL; ?>  value="PEN" >Soles (S/.)</option>
                            <option <?php echo @$orden->monedaObra == 'USD' ? 'selected' : NULL; ?>  value="USD" >Dolares ($)</option>                            
                        </select>

                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-label" style="width:auto;margin-right: 10px;">F. Orden : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <div class="input-append input-prepend date" >
                            <input type="text" class="date-picker input-medium"  id="fechaOrden" name="fechaOrden" readonly  value="<?php echo @$orden->fechaOrden == '' ? '' : date("d/m/Y", strtotime($orden->fechaOrden)) ?>" >
                            <label for="fechaOrden" class="add-on"><i class="icon-calendar "></i></label>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-label" style="width:auto;">Solicitante : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span3" value="<?php echo Session::instance()->get('usuario'); ?>" readonly="true"/>
                    </div>
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
                    <label  class="control-label">Nueva nota : </label>
                    <div class="controls ">
                        <textarea  rows="5" class="field span8" name="mensaje" id="mensaje"></textarea>
                    </div>
                </div>
                <input type='hidden' id='mensajeAnterior' name='mensajeAnterior'  />
        </form>    
        <?php if (isset($orden->idOrden)) { ?>
            <hr>
            <form id="productoForm" name="productoForm" action="<?php echo URL::base() ?>producto/nuevo" >
                <input type="hidden" name="idOrden" value="<?php echo $orden->idOrden ?>" />
                <input type="hidden" name="idProducto"  id="idProducto"  />
                <input type="hidden" name="idItem"  id="idItem"  />
                <div class="well">
                    <br/>
                    <div class="control-group">
                        <div class="form-inline "style="margin-left: 140px" >
                            <label for="inputKey">Descripcion :</label>
                            <input type="text"  class="input-xxlarge" name="descripcion" id="descripcion">

                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-inline "style="margin-left: 140px" >
                            <label for="inputValue"> Unidad : </label>
                            <input type="text" class="input-large"  name="unidad" id="unidad">
                            <label for="inputKey"  style="margin-left: 10px">Cant :</label>
                            <input type="text"  class="input-small"  name="cantidad" id="cantidad">
                            <label for="inputValue" style="margin-left: 10px"> Precio(U) : </label>
                            <input type="text" class="input-small"  name="precio" id="precio">
                            <br/>
                            <br/> 
                            <button TYPE="reset"  style="margin-left: 25px" class="btn btn-success " >
                                <i class="icon-edit icon-white"></i> Nuevo
                            </button> 
                            <button TYPE="button" style="margin-left: 410px"  style="margin-left: 25px" class="btn btn-warning "   id="agregar" name="agregar">
                                <i class="icon-plus icon-white"></i> Agregar
                            </button>

                        </div>
                    </div>
                </div>
            </form>
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
                        $total = 0;
                        foreach ($productoList as $item) {
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
                                <td>
                        <center><i id="editar" value="<?php echo $item->idProducto ?>"  class="icon-pencil"></i></center>
                        </td>
                        <td>
                        <center><i id="del" value="<?php echo $item->idProducto ?>" class="icon-trash"></i></center>
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
                            <th class="mainlistheading" colspan="2">

                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
<?php } ?>
    <br/>
    <div class="modal-footer">            
        <input type="button" class="btn btn-warning pull-left"  value="Aprobar" onclick="$('#idProcesoOrden').val('4'); $('#ordenForm').submit();"/>
        <input type="button" class="btn btn-info pull-left"  value="Modificar" onclick="$('#idProcesoOrden').val('3'); $('#ordenForm').submit();"/>
        <input type="button" class="btn btn-success"  value="Guardar" onclick="$('#ordenForm').submit();"/>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="history.go(-1);">Cancelar</button>
    </div>
    </br>

</div>
</div>