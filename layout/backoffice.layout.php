<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=no" />
    <meta name="author" content="<?php echo HCStudio\Connection::$proyect_name;?> all rights reserved <?php echo date('Y');?>">
    <meta name="HandheldFriendly" content="True"/>
    <meta name="description" content="Venta de productos"/>
    %metadata%
    <title>%title%</title>
    <script src="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/js/jquery-1.11.2.js" type="text/javascript"></script>
    <script src="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/js/wow.js" type="text/javascript"></script>
    <script src="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/js/home.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/css/forms.css" />
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/css/front.css" />
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/subcore/css/overlay.css" />
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/css/responsive.css" />
    <link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/css/backoffice.css" />
    
    <link rel="shortcut icon" type="image/png" href="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/img/favicon.png"/>
    
    <!-- Javascript functions -->
    %js_scripts%
    <!-- <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script> -->
    <!-- <script src="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/js/bootstrap.js" type="text/javascript"></script> -->
    <script src="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/js/jquery.spidertools.core.js" type="text/javascript"></script>
    <script src="<?php echo HCStudio\Connection::$protocol;?>://<?php echo HCStudio\Connection::$proyect_url;?>/src/js/jquery.spidertools.extend.js" type="text/javascript"></script>
    <!-- css styles -->
    %css_scripts%
  </head>
  <body>
    <div class = "bo">
        Hola <?php echo $UserLogin->names; ?>
        <a href="?logout=true">Salir</a>
    </div>    
    %content%
  </body>
</html>