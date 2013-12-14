<script>
    $(document).ready(function() {
        $("form").validate({
            rules: {
                descripcion: {
                    required: true
                },
                montoContrato: {
                    required: true,
                    number: true
                }
            },
            highlight: function(element) {
                $(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function(element) {
                element
                        .addClass('valid')
                        .closest('.control-group').removeClass('error').addClass('success');
            }
        });
    });
</script>  

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Nueva Proveedor</div>
        </div>
    </div>
    <br/> 
    <div  style="margin-top: 20px">   
            <form action="<?php echo URL::site('proveedor/guardar').'/'.@$proveedor->idProveedor ?>" method="POST">            
        <div class=" form-horizontal">
            <div class="control-group">
                <label  class="control-label" style="width:auto;margin-right: 7px;">Proveedor: </label>
                <div class="controls controls-row row-fluid" style="margin-left:auto">
                    <input type="text" class="span11"  name="proveedor" id="proveedor" value="<?php echo @$proveedor->proveedor ?>"/>
                    
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" style="width:auto;margin-right: 5px;">Direccion : </label>
                <div class="controls controls-row row-fluid" style="margin-left:auto">
                    <input type="text" class="span11" name="direccion" id="direccion" value="<?php echo @$proveedor->direccion ?>"/>                    
                </div>
            </div> 
            <div class="control-group">
                <label class="control-label" style="width:auto;margin-right: 35px;">RUC : </label>
                <div class="controls controls-row row-fluid" style="margin-left:auto">
                    <input type="text" class="span8" name="ruc" id="ruc" value="<?php echo @$proveedor->ruc ?>"/>                    
                </div>
            </div> 
            <div class="control-group">
                <label class="control-label" style="width:auto;margin-right: 10px;">Telefono : </label>
                <div class="controls controls-row row-fluid" style="margin-left:auto">
                    <input type="text" class="span3" name="telefono" id="telefono" value="<?php echo @$proveedor->telefono ?>"/>                    
                </div>
            </div> 
            <div class="control-group">
                <label class="control-label" style="width:auto;margin-right: 38px;">Fax : </label>
                <div class="controls controls-row row-fluid" style="margin-left:auto">
                    <input type="text" class="span3" name="fax" id="fax" value="<?php echo @$proveedor->fax ?>"/>                    
                </div>
            </div> 
            <div class="control-group">
                <label class="control-label" style="width:auto;margin-right: 25px;">Email : </label>
                <div class="controls controls-row row-fluid" style="margin-left:auto">
                    <input type="text" class="span3" name="email" id="email" value="<?php echo @$proveedor->email ?>"/>                    
                </div>
            </div> 
            <br/>
                <div class="modal-footer">                               
                    <input type="submit" class="btn btn-success"  value="Guardar" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="history.go(-1);">Cancelar</button>
                </div>
        </div>
        </form>
    </div>