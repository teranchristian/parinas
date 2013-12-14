<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-02 00:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/product/getProList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-02 00:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/product/getProList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-02 00:33:36 --- ERROR: View_Exception [ 0 ]: The requested view orden/ could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-02 00:33:36 --- STRACE: View_Exception [ 0 ]: The requested view orden/ could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orden/')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orden/', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(7): Kohana_View::factory('orden/')
#3 [internal function]: Controller_Orden->action_ver()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-02 00:33:37 --- ERROR: View_Exception [ 0 ]: The requested view orden/ could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-02 00:33:37 --- STRACE: View_Exception [ 0 ]: The requested view orden/ could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orden/')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orden/', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(7): Kohana_View::factory('orden/')
#3 [internal function]: Controller_Orden->action_ver()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-02 01:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-02 01:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-02 01:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-02 01:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-02 02:42:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\menu-logistica.php [ 10 ]
2013-07-02 02:42:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\menu-logistica.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-07-02 02:42:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\menu-logistica.php [ 10 ]
2013-07-02 02:42:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\menu-logistica.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-07-02 02:53:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\controller\demo.php [ 87 ]
2013-07-02 02:53:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\controller\demo.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\demo.php(87): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Orden))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-02 02:53:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\controller\demo.php [ 87 ]
2013-07-02 02:53:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\controller\demo.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\demo.php(87): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Orden))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-02 02:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-07-02 02:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-07-02 02:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-07-02 02:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}