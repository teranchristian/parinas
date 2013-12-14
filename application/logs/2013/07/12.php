<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-12 03:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL parinas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-12 03:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL parinas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-12 04:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-07-12 04:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}