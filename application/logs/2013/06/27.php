<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-27 00:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/getProList() was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 00:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/getProList() was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 00:02:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/getProList() was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 00:02:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/getProList() was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 00:05:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\demo.php [ 138 ]
2013-06-27 00:05:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\demo.php [ 138 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Demo')
#1 {main}
2013-06-27 00:05:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\demo.php [ 138 ]
2013-06-27 00:05:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\demo.php [ 138 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Demo')
#1 {main}
2013-06-27 00:07:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$response ~ APPPATH\classes\controller\demo.php [ 137 ]
2013-06-27 00:07:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$response ~ APPPATH\classes\controller\demo.php [ 137 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(137): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Product))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 00:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:18:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::and_wher() ~ APPPATH\classes\controller\product.php [ 33 ]
2013-06-27 00:18:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::and_wher() ~ APPPATH\classes\controller\product.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-27 00:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:20:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  HTTP_X_REQUESTED_WITH ~ APPPATH\classes\controller\product.php [ 24 ]
2013-06-27 00:20:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  HTTP_X_REQUESTED_WITH ~ APPPATH\classes\controller\product.php [ 24 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\product.php(24): Kohana_Core::error_handler()
#1 [internal function]: Controller_Product->action_getProList(Object(Controller_Product))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 00:20:25 --- ERROR: ErrorException [ 8 ]: Undefined index:  HTTP_X_REQUESTED_WITH ~ APPPATH\classes\controller\product.php [ 24 ]
2013-06-27 00:20:25 --- STRACE: ErrorException [ 8 ]: Undefined index:  HTTP_X_REQUESTED_WITH ~ APPPATH\classes\controller\product.php [ 24 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\product.php(24): Kohana_Core::error_handler()
#1 [internal function]: Controller_Product->action_getProList(Object(Controller_Product))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 00:21:31 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:21:31 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:21:32 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:21:32 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:21:49 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:21:49 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:21:50 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:21:50 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:21:52 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:21:52 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:21:53 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:21:53 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:22:09 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:22:09 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:22:09 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:22:09 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:22:22 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:22:22 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:22:22 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:22:22 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:22:51 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:22:51 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:22:51 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:22:51 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:23:05 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:23:05 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:23:05 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:23:05 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:23:26 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:23:26 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:23:26 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:23:26 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:23:28 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:23:28 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:23:28 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:23:28 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:01 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:01 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:01 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:01 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:07 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:07 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:08 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:08 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:11 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:11 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:12 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:12 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:14 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:14 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:14 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:14 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:14 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:14 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:15 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:15 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:15 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:15 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:24:15 --- ERROR: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-27 00:24:15 --- STRACE: View_Exception [ 0 ]: The requested view logon could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('logon')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('logon', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(21): Kohana_View::factory('logon')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 00:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 00:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/editicon.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 00:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-27 00:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 00:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-27 00:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 00:42:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\product.php [ 32 ]
2013-06-27 00:42:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\product.php [ 32 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\product.php(32): Kohana_Core::error_handler()
#1 [internal function]: Controller_Product->action_getProList(Object(Controller_Product))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 00:47:24 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 15 ]
2013-06-27 00:47:24 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-06-27 00:47:26 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 15 ]
2013-06-27 00:47:26 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-06-27 00:47:45 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 12 ]
2013-06-27 00:47:45 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-06-27 00:47:46 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 12 ]
2013-06-27 00:47:46 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\menu.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-06-27 01:03:23 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-06-27 01:03:23 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(124): Kohana_View->__get('menu')
#1 [internal function]: Controller_Demo->after()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:03:24 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-06-27 01:03:24 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(124): Kohana_View->__get('menu')
#1 [internal function]: Controller_Demo->after()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:03:51 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-06-27 01:03:51 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(124): Kohana_View->__get('menu')
#1 [internal function]: Controller_Demo->after()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:03:52 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-06-27 01:03:52 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(124): Kohana_View->__get('menu')
#1 [internal function]: Controller_Demo->after()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:05:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\demo.php [ 53 ]
2013-06-27 01:05:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\demo.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-27 01:05:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\demo.php [ 53 ]
2013-06-27 01:05:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\demo.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-27 01:09:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:09:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:09:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:09:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:10:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:10:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:10:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:10:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:10:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:10:38 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:10:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:10:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:10:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:10:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:10:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:10:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:11:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:11:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:11:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:11:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  US ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:24:30 --- ERROR: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 44 ]
2013-06-27 01:24:30 --- STRACE: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 44 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:24:31 --- ERROR: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 44 ]
2013-06-27 01:24:31 --- STRACE: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 44 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(44): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:27:55 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:27:55 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'FALSE')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:28:13 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:28:13 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:28:19 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 45 ]
2013-06-27 01:28:19 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(45): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:28:26 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:28:26 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:28:32 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:28:32 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:28:43 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:28:43 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:31:28 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:31:28 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The second argument should be either an array or an object ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): array_key_exists()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:32:04 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:32:04 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:32:14 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:32:14 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('asd', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:32:32 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:32:32 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:32:37 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:32:37 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('edit', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:32:42 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:32:42 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('editw', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:32:48 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
2013-06-27 01:32:48 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(46): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:33:34 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:33:34 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:33:34 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:33:34 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:33:52 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:33:52 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:33:52 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:33:52 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:33:58 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:33:58 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:33:59 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:33:59 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:34:00 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:34:00 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:34:00 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:34:00 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:34:01 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:34:01 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:34:01 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:34:01 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:36:23 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:36:23 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:36:24 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
2013-06-27 01:36:24 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(47): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:36:43 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 43 ]
2013-06-27 01:36:43 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(43): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:36:43 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 43 ]
2013-06-27 01:36:43 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(43): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:37:47 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 43 ]
2013-06-27 01:37:47 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(43): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:39:44 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:39:44 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:39:44 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:39:44 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:40:31 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:40:31 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('AD', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:40:31 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:40:31 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('AD', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Product))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:41:46 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:41:46 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:41:51 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:41:51 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:41:52 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:41:52 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:42:10 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:42:10 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:42:10 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:42:10 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:42:18 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:42:18 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:42:19 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
2013-06-27 01:42:19 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 51 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', 'F')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(51): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:44:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 50 ]
2013-06-27 01:44:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 50 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:44:04 --- ERROR: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 50 ]
2013-06-27 01:44:04 --- STRACE: ErrorException [ 8 ]: Undefined index:  AD ~ APPPATH\classes\controller\demo.php [ 50 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 01:47:39 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:47:39 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:47:39 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:47:39 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 01:47:40 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
2013-06-27 01:47:40 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\classes\controller\demo.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler('index', true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(49): in_array()
#2 [internal function]: Controller_Demo->before(Object(Controller_Supplier))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-27 02:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/supListAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier/getSupplierList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 02:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier/getSupplierList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 02:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier/getSupplierList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 02:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier/getSupplierList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 02:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier/getSupplierList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 02:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier/getSupplierList was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 02:08:27 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID  '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:08:27 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID  '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:09:05 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID  '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:09:05 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID  '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:09:36 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID = '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:09:36 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID = '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:10:19 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID != '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:10:19 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID != '1' AND Code  '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:10:32 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID != '1' AND Code != '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:10:32 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID != '1' AND Code != '' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:11:02 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID != '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:11:02 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID != '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:11:29 --- ERROR: ErrorException [ 8 ]: Use of undefined constant HASH_GENERAL_KEY - assumed 'HASH_GENERAL_KEY' ~ APPPATH\classes\controller\supplier.php [ 27 ]
2013-06-27 02:11:29 --- STRACE: ErrorException [ 8 ]: Use of undefined constant HASH_GENERAL_KEY - assumed 'HASH_GENERAL_KEY' ~ APPPATH\classes\controller\supplier.php [ 27 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(27): Kohana_Core::error_handler()
#1 [internal function]: Controller_Supplier->action_getSupplierList(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 02:12:04 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID  '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:12:04 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID  '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:13:36 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID < > '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:13:36 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID < > '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:13:59 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID = '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-27 02:13:59 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'SupplierID'. [10007] (severity 5) [SELECT * FROM Supplier WHERE SupplierID = '1' AND Status = 'ACTIVE' ORDER BY Description ASC] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\model\supplier.php(22): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(19): Model_Supplier->getSupplierList()
#3 [internal function]: Controller_Supplier->action_getSupplierList()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Supplier))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-27 02:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL prodList/update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-27 02:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL prodList/update was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 02:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:34:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:34:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/bootstrap/js/jqueryCus.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier/changePwd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 02:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier/changePwd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL supplier/changePwd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-27 02:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL supplier/changePwd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-27 02:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:39:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: HASH_GENERAL_KEY ~ APPPATH\classes\controller\supplier.php [ 38 ]
2013-06-27 02:39:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: HASH_GENERAL_KEY ~ APPPATH\classes\controller\supplier.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_Supplier->action_changePwd(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 02:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:40:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: HASH_GENERAL_KEY ~ APPPATH\classes\controller\supplier.php [ 38 ]
2013-06-27 02:40:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: HASH_GENERAL_KEY ~ APPPATH\classes\controller\supplier.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\supplier.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_Supplier->action_changePwd(Object(Controller_Supplier))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-27 02:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-icons_469bdd_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-27 02:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-27 02:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}