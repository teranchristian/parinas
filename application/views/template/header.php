
<!DOCTYPE html>
<html>
    <head>
        <html lang="<?php echo I18n::$lang ?>">      
        <title><?php echo $page_title?></title>
        <link rel="SHORTCUT ICON" href="http://www.agbiz.co/images/agbizicon.ico"/>
        <link rel="apple-touch-icon" href="http://www.agbiz.co/images/agbizlogoonlywhite.jpg">	
<!--        public/js/jquery.js"></script>
        public/js/jqueryCus.js"></script>
       public/css/xero.css" /> -->
<script type="text/javascript" src="<?php echo URL::base()?>/media/js/jquery.js"></script>
        <?php foreach ($styles as $file => $type) echo HTML::style($file), PHP_EOL ?>
       
        <!--<link href="/parinas/media/bootstrap/css/bootstrap.css" rel="stylesheet">-->    
        
        <?php //echo Minify::factory('css')->minify_input('foo {display:none}'); ?>
         </head>
      <body>