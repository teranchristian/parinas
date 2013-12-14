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
<script>
$(function(){
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(),nowTemp.getDate() , 0, 0, 0, 0);
        var checkin = $('#fechaInicio').datepicker({
			format: 'dd/mm/yyyy',
          onRender: function(date) {
           return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
		
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#fechaFin')[0].focus();
        }).data('datepicker');
		
        var checkout = $('#fechaFin').datepicker({
		format: 'dd/mm/yyyy',
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
});
	</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Nueva Obra</div>
        </div>
    </div>
    <br/> 
    <div  style="margin-top: 40px" class="offset3 span6 offset3">      
        <form action="<?php echo URL::site('obra/guardar').'/'.@$obra->idObra ?>" method="POST">            
            <div class=" form-horizontal">    
                <div class="control-group">
                    <label for="idCentroCosto" class="control-label">Centro de Costo</label>
                    <div class="controls" > 
                        <select name="idCentroCosto" id="idArea">
                            <?php foreach ($centroCostoList as $item) { 
                                    if (isset($obra))                                  
                                        $selected= $item->idCentroCosto == $obra->idCentroCosto ? 'selected':NULL;?>
                                <option <?php echo @$selected ?> value="<?php echo $item->idCentroCosto ?>"><?php echo $item->codigo . ' - ' . $item->descripcion ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>  

                <div class="control-group">
                    <label for="descripcion" class="control-label">Descripcion</label>
                    <div class="controls">
                        <input  type="text" name="descripcion" id="descripcion"  value="<?php echo @$obra->descripcion ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label for="moneda" class="control-label">Moneda</label>
                    <div class="controls">
                        <select name="moneda" id="moneda">
                                <option <?php echo @$obra->moneda == '' ? 'selected':NULL;?> value="">---</option>                            
                                <option <?php echo @$obra->moneda == 's' ? 'selected':NULL;?> value="s">Soles</option>                            
                                <option <?php echo @$obra->moneda == 'd' ? 'selected':NULL;?> value="d">Dolares</option>                            
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label for="montoContrato" class="control-label">Monto Contrato</label>
                    <div class="controls">
                        <input  type="text" name="montoContrato" id="montoContrato" value="<?php echo @$obra->montoContrato ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label for="idEstadoObra" class="control-label">Estado de la Obra</label>
                    <div class="controls" style="width: 10%" >
                        <select name="idEstadoObra" id="idEstadoObra">
                            <?php foreach ($estadoObraList as $item) { 
                                    if (isset($obra))                                  
                                        $selected= $item['idEstadoObra'] == $obra->idEstadoObra ? 'selected':NULL;?>
                                <option <?php echo @$selected ?> value="<?php echo $item['idEstadoObra'] ?>"><?php echo $item['descripcion'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>  
    
                <div class="control-group">
                    <label for="fechaInicio" class="control-label">Fecha de Inicio</label> 
                    <div class="controls ">
                        <div class="input-append input-prepend date" >
                            <span class="add-on"><i class="icon-remove" onclick="javascript:$('#fechaInicio').val('')" ></i></span>
                            <input type="text" class="date-picker input-medium"  id="fechaInicio" name="fechaInicio" readonly  value="<?php echo @$obra->fechaInicio==''? '':date("d/m/Y", strtotime($obra->fechaInicio))?>" >
                            <label for="fechaInicio" class="add-on"><i class="icon-calendar"></i></label>
			</div>
                    </div>
                </div>

                <div class="control-group">
                    <label for="fechaFin" class="control-label">Fecha de Fin</label>
                    <div class="controls">
                        <div class="input-append input-prepend date" >
                            <span class="add-on"><i class="icon-remove" onclick="javascript:$('#fechaFin').val('')"></i></span>
                            <input type="text" class="date-picker input-medium"  id="fechaFin" name="fechaFin" readonly value="<?php echo @$obra->fechaFin==''? '':date("d/m/Y", strtotime($obra->fechaFin))?>" >
                            <label for="fechaFin" class="add-on"><i class="icon-calendar"></i></label>
			</div>
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