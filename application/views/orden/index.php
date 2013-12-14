<div class="container">
    <div class="row">
        <div class="span12">
            <div class="headblocktitle">Orden de compra de trabajo</div>
        </div>
    </div>
    <br/>
    <div class="form" style="margin-top: 40px">      
        <form action="<?php echo URL::site('user/updatePwd') ?>">            
            <div class=" form-horizontal">
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 5px;">Senor(es): </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span9" value="BP SOLUTIONS S.A.C" readonly="true"/>
                        <input type="text" class="span2" value="N 28.06.2013-001" readonly="true" />
                    </div>
                </div>
              <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 5px;">Direccion : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span10" value="Av. Del Ejercito 1020 - Urb El Molino - Trujillo " readonly="true"/>
                        <input type="text" class="span1" value="4123" readonly="true"/>
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;margin-right: 33px;">Obra : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span9" value="Servicio 1" readonly="true"/>
                        <input type="text" class="span2" value="28/06/2013" readonly="true" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="current_password" class="control-label" style="width:auto;">Solicitante : </label>
                    <div class="controls controls-row row-fluid" style="margin-left:auto">
                        <input type="text" class="span3" value="Coke" readonly="true"/>
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
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <br/>
                <div class="control-group">
                    <label for="current_password" class="control-label">Notas anteriores : </label>
                    <div class="controls ">
                        <textarea  rows="5" class="field span8" readonly="true">---- 20/04/2013 por Ing. Miguel Montero----
                        Nueva cantidad para items 01, 1 unidad
---- 03/05/2013 por Coke----
Cambio realizado
                        </textarea>
                    </div>
                </div>
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
                <input type="submit" class="btn btn-warning pull-left"  value="Aprobar"/>
                <input type="submit" class="btn btn-success"  value="Guardar"/>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="history.go(-1);">Cancelar</button>
            </div>
        </form>    
    </div>
</div>