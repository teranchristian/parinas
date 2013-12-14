<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Editar Orden de compra de trabajo</div>
        </div>
    </div>
    <br/>
    <div  style="margin-top: 20px">      
        <form action="<?php echo URL::site('user/updatePwd') ?>">            
            <div class=" form-horizontal">
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 5px;">Senor(es): </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span9"  />
                        <input type="text" class="span2"  />
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 5px;">Direccion : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span10"  />
                        <input type="text" class="span1"  />
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 33px;">Obra : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span9"  />
                        <input type="text" class="span2"  />
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;">Solicitante : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span3" value="Coke" readonly="true"/>
                    </div>
                </div>
                <hr>
                <div class="well">
                <div class="control-group">
                    <div class="form-inline "style="margin-left: 140px" >
                        <label for="inputKey">Descripcion :</label>
                        <input type="text"  class="input-xxlarge" id="inputKey">
                        
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-inline "style="margin-left: 140px" >
                        <label for="inputValue"> Unidad : </label>
                        <input type="text" class="input-small" id="inputValue">
                        <label for="inputKey"  style="margin-left: 10px">Cant :</label>
                        <input type="text"  class="input-small">
                        <label for="inputValue" style="margin-left: 10px"> Precio(U) : </label>
                        <input type="text" class="input-small">
                        <button TYPE="button" class="btn btn-warning"  style="margin-left: 25px">
                            <i class="icon-plus icon-white"></i> Agregar
                        </button>
                    </div>
                </div>
                 </div>   
                <div class="mainlist">
                    <table border="0" cellpadding="1px" cellspacing="0px"  nowrap="nowrap"  id="example" class="table-bordered data-table table table-hover" style="border: 1px solid black;">
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
                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    Codos de 90 RL de diametro de 26", 3/8" de espesor, A-234 GR WPB
                                </td>
                                <td>
                                    EA
                                </td>
                                <td>
                                    03
                                </td>
                                <td>
                                    $2,507.76
                                </td>
                                <td>
                                    $7,523.28
                                </td>
                                <td>
                                    <center><i class="icon-pencil"></i></center>
                                </td>
                                <td>
                                    <center><i class="icon-trash"></i></center>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">
                                    TOTAL
                                </th>
                                <th>
                                    $21,231.61
                                </th>
                                <th class="mainlistheading" colspan="2">
                                    
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <br/>
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