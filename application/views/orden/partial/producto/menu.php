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