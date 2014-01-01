<!--<script>
    $(document).ready(function(){
        $("form").validate({
            rules: {
                codigo: { 
                    required: true
                },
                descripcion: { 
                    required: true
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
</script>  -->
<?php $errors = isset($errors) ? $errors : array(); ?>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle"><?php echo (@$centroCosto->idCentroCosto? "Editar" : "Nuevo"); ?>  Centro de Costo</div>
        </div>
    </div>
    <br/>
    <div  style="margin-top: 40px" class="offset3 span6 offset3">      
        <form action="<?php echo URL::site('centroCosto/guardar/'.@$centroCosto->idCentroCosto) ?>" method="POST">            
            <div class=" form-horizontal">    
                 <div class="control-group">
                    <label for="area" class="control-label">Area</label>
                    <div class="controls" >
                        <select name="idArea" id="idArea"> 
                            <?php foreach ($areaList as $item) {
                                 if (isset($centroCosto))                                  
                                    $selected= $item->idArea == $centroCosto->idArea ? 'selected':NULL;?>
                            <option <?php echo @$selected ?> value="<?php echo $item->idArea?>"><?php echo $item->area?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label for="codigo" class="control-label">Codigo</label>
                    <div class="controls">
                        <input  type="text" name="codigo" id="codigo" value="<?php echo @$centroCosto->codigo ?>"/>
                        <?php //echo Form::input("codigo", @$centroCosto->codigo); ?>
                        <span class="error"><?php echo '<br/>'.Arr::get($errors, 'codigo');?></span>                        
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="descripcion" class="control-label">Descripcion</label>
                    <div class="controls">
                        <input  type="text" name="descripcion" id="descripcion" value="<?php echo @$centroCosto->descripcion ?>"/>
                        <span class="error"><?php echo '<br/>'.Arr::get($errors, 'descripcion');?></span>                        
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