<div class="control-group">
    <label  class="control-label" style="width:auto;margin-right: 7px;">Proveedor: </label>
    <div class="controls controls-row row-fluid" style="margin-left:auto">
        <select name="idProveedor" id="idProveedor" class="span8" >
            <?php
            foreach ($proveedorList as $item) {
                if (isset($orden))
                    $selected = $item->idProveedor == $orden->idProveedor ? 'selected' : NULL;
                ?>

                <option <?php echo @$selected ?> value="<?php echo $item->idProveedor ?>" rel="<?php echo $item->direccion ?>"><?php echo $item->proveedor ?></option>
            <?php } ?>
        </select>
        <input type="text" class="span2 text-right"  readonly="true" value="<?php echo @sprintf('%06u', $orden->numeroOrden) ?>"/>
    </div>
</div>                
<div class="control-group">
    <label class="control-label" style="width:auto;margin-right: 5px;">Direccion : </label>
    <div class="controls controls-row row-fluid" style="margin-left:auto">
        <input type="text" class="span11" name="proveedor" id="proveedor" readonly="true" />                        
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
                    $selected = ($item->idObra == $orden->idObra ) ? 'selected' : NULL;
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
            <option <?php echo @$orden->monedaObra == 'PEN' ? 'selected' : NULL; ?>  value="PEN" rel="S/.">Soles (S/.)</option>
            <option <?php echo @$orden->monedaObra == 'USD' ? 'selected' : NULL; ?>  value="USD" rel="$">Dolares ($)</option>                            
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
        <input type="text" class="span3" value="<?php echo (@$orden->idSolicitante)?@$orden->solicitante->lastName.', '.@$orden->solicitante->name:Session::instance()->get('usuario'); ?>" readonly="true"/>
    </div>
</div>