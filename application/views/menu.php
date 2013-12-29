<div class="menuColor">
    <div class="container">
        <div class="row">            
            <div class="span4 ">
                <div class="pageheading menuCompany">
                    <?php echo $page_title ?> 
                </div>
            </div>
            <?php 
            if ($menu == TRUE) { 
                ?>
                <div class="span8 ">    
                    <ul class="nav nav-pills pull-right" style="margin-bottom: 10px;margin-top: 10px;">
                        <?php
                        foreach ($modules as $headitem => $subitems) { 
                             $moduletype = $modules[$headitem]['type'];
                            ?>
                            <li class="<?php echo Request::initial()->controller() == $moduletype ? 'active' : 'normal' ?> dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo url::site($moduletype) ?>"><?php echo $headitem ?> <b class="caret"></b></a>
                                <?php
                                if (isset($subitems['subitems'])){
                                    echo "<ul class='dropdown-menu'>";
                                    foreach ($subitems['subitems'] as $subitem) {
                                        echo '<li><a href="' . url::site($moduletype . '/' . $subitem['type']) . '">' . $subitem['actionName'] . '</a></li>';                                    
                                    } 
                                    echo " </ul>";
                                }
                         }?>
                            </li>
                    </ul>
                </div> 
            <?php } else {
                 echo '<div class="span8 menuColor"></div>'; 
            } ?>
        </div>
    </div>  
</div>  
<br/>