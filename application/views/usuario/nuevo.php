<script>
    $(document).ready(function(){
        $("form").validate({
            rules: {
                nombre: { 
                    required: true
                },
                apellido: { 
                    required: true
                },
                email: { 
                    required: true,
                    email: true
                },
                password: { 
                    required: true
                },
                rpassword: {
                    equalTo: "#password"
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
            <div class="headblocktitle">Nuevo Usuario</div>
        </div>
    </div>
    <br/>
    <div  style="margin-top: 40px" class="offset3 span6 offset3">      
        <form action="<?php echo URL::site('usuario/guardar') ?>">            
            <div class=" form-horizontal">    
                
                <div class="control-group">
                    <label for="cargo" class="control-label">Cargo</label>
                    <div class="controls">
                        <input  type="text" name="cargo" id="cargo"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="nombre" class="control-label">Nombre</label>
                    <div class="controls">
                        <input  type="text" name="nombre" id="nombre"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="apellido" class="control-label">Apellido</label>
                    <div class="controls">
                        <input  type="text" name="apellido" id="apellido"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="email" class="control-label">Email</label>
                    <div class="controls">
                        <input  type="text" name="email" id="email"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="password" class="control-label">Password</label>
                    <div class="controls">
                        <input  type="password" name="password" id="password"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="rpassword" class="control-label">Confirmar password</label>
                    <div class="controls">
                        <input  type="password" name="rpassword" id="rpassword"/>
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="rol" class="control-label">Rol</label>
                    <div class="controls">
                        <select>
                            <?php foreach ($rolList as $item) { ?>
                            <option value="<?php echo $item['idRol']?>"><?php echo $item['rol']?></option>
                            <?php } ?>
                        </select>
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