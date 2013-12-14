  
<div class="header">
<div class="container ">
    <div class="row ">
        <div class="span12 ">
            <div class="header">
                <?php if (Session::instance()->get('Login')) { ?>
                    <h3 class="currentUser">Current User :
                        <div class="btn-group">
                            <button class="btn btn-mini btn-inverse" data-toggle="dropdown"><i class="icon-white icon-user"></i> <?php echo Session::instance()->get('usuario'); ?></button>
                            <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
                                <span class="icon-align-justify"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="user/settings">Change your password</a></li>
                            </ul>
                        </div>
                        |  <?php echo HTML::anchor('logon/signout', 'Logout'); ?> </h3>            
                <?php } else { ?>
                    <h3 class="currentUser"></h3>    
                <?php } ?>
            </div>
        </div>
    </div>
</div>  
</div>  

