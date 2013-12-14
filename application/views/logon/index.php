<script>
$(document).ready(function(){
    $('input:text:first').focus();   
});
</script>    
</header>
<body> 
    <br/>
    <div class="container">
        <div class="row">
            <div class="offset3 span6 offset3">
                <div class="headblocktitle">Logon</div>
            </div>
        </div>
    </div>
    <br/>
    <div class="container">	
        <table  nowrap align="center" border="0" cellpadding="3" cellspacing="3">   
            <tr>
                <td align="center"  >
                    <?php if (isset($msg )) {?>
                    <div class="alert alert-error">  
                        <a class="close" data-dismiss="alert">×</a>  
                        <i class="icon-warning-sign"></i> <strong>Warning!</strong><br/> <?php echo $msg ?> 
                    </div>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <form   id="logon-form" name="logon-form" method="post"  >
            <table  class="well"  nowrap align="center" border="0" cellpadding="3" cellspacing="3"  width="25%">       
                <tr>
                    <td colspan="2">     
                        <div id="error" class="errorFormat"></div>
                        <input type="hidden" name="AT" id="AT" maxlength="50" size="25"  />
                    </td>	
                </tr>                 
                <tr>
                    <td colspan="2">
                        <div >
                            Email Address :<br>
                            <input type="text" name="EMAIL" id="EMAIL" maxlength="50" size="25" value="test@test.com"  autocomplete="off" autofocus="autofocus"/>
                            <div id="errorE" class="errorFormat"></div>
                        </div
                    </td>	
                </tr>	
                <tr>
                    <td colspan="2">
                        Password :<br>
                        <input type="password" name="PWD" id="PWD" maxlength="50" size="25" value="Parra2013" onKeyPress="{if (event.keyCode==13)getLogon(this.form)}"/>
                        <div id="errorF" class="errorFormat"></div>
                    </td>	
                </tr>	
                <tr>
                    <td colspan="2" align="right">
                        <input TYPE="submit" class="btn btn-warning" Value="Entar" />
                    </td>					
                </tr>						
            </table>	
        </form>
    </div>