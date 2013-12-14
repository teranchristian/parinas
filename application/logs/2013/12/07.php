<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-07 03:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orden/editar/obra/eleminar ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-07 03:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: orden/editar/obra/eleminar ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-07 03:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL producto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-07 03:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL producto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-07 03:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL producto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-07 03:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL producto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-07 03:20:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\producto.php [ 6 ]
2013-12-07 03:20:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\producto.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_prod...')
#1 {main}
2013-12-07 03:20:35 --- ERROR: ReflectionException [ 0 ]: Class Controller_Producto does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\kohana\request\client\internal.php [ 101 ]
2013-12-07 03:20:35 --- STRACE: ReflectionException [ 0 ]: Class Controller_Producto does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\kohana\request\client\internal.php [ 101 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#4 {main}
2013-12-07 03:31:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  DATA ~ APPPATH\classes\controller\producto.php [ 11 ]
2013-12-07 03:31:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  DATA ~ APPPATH\classes\controller\producto.php [ 11 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\producto.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Producto->action_nuevo(Object(Controller_Producto))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-12-07 03:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-07 03:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-07 03:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-07 03:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-07 03:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-07 03:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-07 20:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-07 20:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-07 20:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-07 20:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-07 20:03:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-07 20:03:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-07 20:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-07 20:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL exchange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-07 20:06:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\exchange.php [ 26 ]
2013-12-07 20:06:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\exchange.php [ 26 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\exchange.php(26): Kohana_Core::error_handler()
#1 [internal function]: Controller_Exchange->action_index(Object(Controller_Exchange))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-12-07 20:06:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\exchange.php [ 26 ]
2013-12-07 20:06:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\exchange.php [ 26 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\exchange.php(26): Kohana_Core::error_handler()
#1 [internal function]: Controller_Exchange->action_index(Object(Controller_Exchange))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-12-07 20:39:01 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'currency' at 'MODPATH\currency' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2013-12-07 20:39:01 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'currency' at 'MODPATH\currency' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\bootstrap.php(112): Kohana_Core::modules(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(102): require('C:\Program File...')
#2 {main}
2013-12-07 20:39:01 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'currency' at 'MODPATH\currency' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2013-12-07 20:39:01 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'currency' at 'MODPATH\currency' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\bootstrap.php(112): Kohana_Core::modules(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(102): require('C:\Program File...')
#2 {main}