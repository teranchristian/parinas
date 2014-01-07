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
                    <label for="password" class="control-label">Password</label>
                    <div class="controls">
                        <input  type="text" name="password" id="password" />
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="rpassword" class="control-label">Repetir Password</label>
                    <div class="controls">
                        <input  type="text" name="rpassword" id="rpassword" />                        
                    </div>
                </div>
                 
                                
            </div>
            <br/>
            <div class="modal-footer">            
                <input type="submit" class="btn btn-success"  value="Cambiar"/>
                <button type="button" class="btn btn-danger" onclick="history.go(-1);">Cancelar</button>
            </div>
        </form>    
    </div>
</div>