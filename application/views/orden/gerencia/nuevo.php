
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Nueva Orden de Compra de Trabajo</div>
        </div>
    </div>
    <br/>
    <div  style="margin-top: 20px">              
            <div class=" form-horizontal">
                <form id="ordenForm" action="<?php echo URL::site('orden/guardar') . '/' . @$orden->idOrden ?>" method="POST" onsubmit=" $('#mensajeAnterior').val($('#mensajeAnteriorHTML').html());">                       
            <input type="hidden" name="idProcesoOrden" id="idProcesoOrden" value="<?php echo isset($orden->idProcesoOrden) ? $orden->idProcesoOrden : "1" ?>"/>
                <?php include APPPATH .'views\orden\partial\orden\detalles.php'; ?>
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
            <?php include APPPATH .'views\orden\partial\producto\menu.php'; ?>
            <?php include APPPATH .'views\orden\partial\producto\lista.php'; ?>
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