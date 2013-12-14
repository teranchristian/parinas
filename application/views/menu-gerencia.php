<div class="menuColor">
    <div class="container">
        <div class="row">
            
            <div class="span4 ">
                <div class="pageheading menuCompany">
                    <?php echo $page_title ?> 
                </div>
            </div>
            <?php
            if ($menu==TRUE) {
            ?>
                <div class="span8 ">    
                    <ul class="nav nav-pills pull-right" style="margin-bottom: 10px;margin-top: 10px;">
                        <li class="<?php echo Request::initial()->controller() == 'orden' ? 'active':'normal' ?>"><?php echo html::anchor('orden/gerencia', 'Ordenes');?></li>
                        <li class="<?php echo Request::initial()->controller() == 'usuario' ? 'active':'normal' ?>"><?php echo html::anchor('usuario', 'Usuarios');?></li>
                        <li class="<?php echo Request::initial()->controller() == 'product' ? 'active':'normal' ?>"><?php echo html::anchor('product', 'Historial');?></li>
                    </ul>
                </div> 
            <?php } else { ?>
                <div class="span8 menuColor"></div>
            <?php } ?>
        </div>
    </div>  
</div>  
<br/>