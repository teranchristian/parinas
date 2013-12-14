<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-11-28 02:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 02:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 03:16:22 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Obra::action_guardar() ~ APPPATH\classes\controller\obra.php [ 34 ]
2013-11-28 03:16:22 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Obra::action_guardar() ~ APPPATH\classes\controller\obra.php [ 34 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(34): Kohana_Core::error_handler()
#1 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-28 03:16:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: ID ~ APPPATH\classes\controller\obra.php [ 38 ]
2013-11-28 03:16:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: ID ~ APPPATH\classes\controller\obra.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-11-28 03:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL obra/guardar1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-11-28 03:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL obra/guardar1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-28 03:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL obra/guardar1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-11-28 03:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL obra/guardar1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-11-28 03:35:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
2013-11-28 03:35:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 03:35:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
2013-11-28 03:35:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 03:36:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
2013-11-28 03:36:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 03:36:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\controller\obra.php [ 41 ]
2013-11-28 03:36:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\controller\obra.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_obra')
#1 {main}
2013-11-28 03:36:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 40 ]
2013-11-28 03:36:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 03:38:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
2013-11-28 03:38:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 03:42:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
2013-11-28 03:42:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::update() ~ APPPATH\classes\controller\obra.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 03:52:50 --- ERROR: View_Exception [ 0 ]: The requested view template/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-11-28 03:52:50 --- STRACE: View_Exception [ 0 ]: The requested view template/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('template/defaul...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('template/defaul...', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template/defaul...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(28): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Template_webPage->before()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-11-28 03:53:28 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\orden.php [ 3 ]
2013-11-28 03:53:28 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\orden.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_orde...')
#1 {main}
2013-11-28 03:54:12 --- ERROR: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-11-28 03:54:12 --- STRACE: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('header')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('header', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(86): Kohana_View::factory('header')
#3 [internal function]: Controller_Template_webPage->after()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-28 03:57:18 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\orden.php [ 3 ]
2013-11-28 03:57:18 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\orden.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_orde...')
#1 {main}
2013-11-28 03:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 03:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 03:59:09 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template\default.php [ 2 ]
2013-11-28 03:59:09 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template\default.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 03:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 03:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-28 04:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-28 04:05:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
2013-11-28 04:05:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_obra')
#1 {main}
2013-11-28 04:05:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
2013-11-28 04:05:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_obra')
#1 {main}
2013-11-28 04:06:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\centroCosto.php [ 3 ]
2013-11-28 04:06:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\centroCosto.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_cent...')
#1 {main}
2013-11-28 04:06:36 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\centroCosto.php [ 3 ]
2013-11-28 04:06:36 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\centroCosto.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_cent...')
#1 {main}
2013-11-28 04:09:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:09:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:09:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:10:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::find_all() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:10:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::find_all() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:10:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::find_all() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
2013-11-28 04:10:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::find_all() ~ APPPATH\classes\model\centroCosto.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:10:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 37 ]
2013-11-28 04:10:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:10:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 37 ]
2013-11-28 04:10:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::where() ~ APPPATH\classes\model\centroCosto.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:10:55 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 55 ]
2013-11-28 04:10:55 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 55 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): Kohana_Core::error_handler('Model_CentroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_CentroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_CentroCosto->action_index(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-28 04:10:56 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 55 ]
2013-11-28 04:10:56 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 55 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): Kohana_Core::error_handler('Model_CentroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_CentroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_CentroCosto->action_index(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-28 04:11:08 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2013-11-28 04:11:08 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('centrocosto')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory('centroCosto')
#6 [internal function]: Controller_CentroCosto->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-28 04:11:09 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2013-11-28 04:11:09 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('centrocosto')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory('centroCosto')
#6 [internal function]: Controller_CentroCosto->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-28 04:12:35 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2013-11-28 04:12:35 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('centrocosto')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory('centroCosto')
#6 [internal function]: Controller_CentroCosto->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-28 04:12:35 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2013-11-28 04:12:35 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('centrocosto')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory('centroCosto')
#6 [internal function]: Controller_CentroCosto->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-11-28 04:14:43 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:14:43 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:14:44 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:14:44 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:25:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:25:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:25:37 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:25:37 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:27:20 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:27:20 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:27:20 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:27:20 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:27:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
2013-11-28 04:27:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:27:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
2013-11-28 04:27:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:28:15 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:28:15 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:28:16 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:28:16 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:30:32 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:30:32 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:30:33 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:30:33 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:34:21 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:34:21 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:34:22 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:34:22 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:34:34 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:34:34 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:34:35 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:34:35 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:36:44 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.centrocostos' doesn't exist [ SHOW FULL COLUMNS FROM `centrocostos` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-28 04:36:44 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.centrocostos' doesn't exist [ SHOW FULL COLUMNS FROM `centrocostos` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('centrocostos')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory('centroCosto')
#7 [internal function]: Controller_CentroCosto->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2013-11-28 04:36:45 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.centrocostos' doesn't exist [ SHOW FULL COLUMNS FROM `centrocostos` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-28 04:36:45 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.centrocostos' doesn't exist [ SHOW FULL COLUMNS FROM `centrocostos` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('centrocostos')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(7): Kohana_ORM::factory('centroCosto')
#7 [internal function]: Controller_CentroCosto->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2013-11-28 04:36:50 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:36:50 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:36:51 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:36:51 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:37:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\model\centroCosto.php [ 7 ]
2013-11-28 04:37:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\model\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_CentroCos...')
#1 {main}
2013-11-28 04:37:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\model\centroCosto.php [ 7 ]
2013-11-28 04:37:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\model\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_CentroCos...')
#1 {main}
2013-11-28 04:38:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:38:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:38:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:38:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:39:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:39:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:39:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:39:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:39:19 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2013-11-28 04:39:19 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:39:19 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2013-11-28 04:39:19 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:39:25 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:39:25 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:39:26 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:39:26 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:41:12 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mssql' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2013-11-28 04:41:12 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mssql' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(NULL)
#1 {main}
2013-11-28 04:41:12 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mssql' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2013-11-28 04:41:12 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mssql' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(NULL)
#1 {main}
2013-11-28 04:41:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:41:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:41:30 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:41:30 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:42:53 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:42:53 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:42:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:42:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:42:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:42:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:42:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:42:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:43:03 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:43:03 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:44:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:44:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:44:11 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:44:11 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:44:20 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
2013-11-28 04:44:20 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:44:21 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
2013-11-28 04:44:21 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-28 04:44:27 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:44:27 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:44:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:44:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:44:43 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:44:43 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:44:43 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:44:43 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:25 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:25 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:26 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:26 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:38 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:38 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:45:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:45:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:46:02 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:46:02 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:46:03 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:46:03 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:46:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:46:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:46:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:46:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:46:58 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
2013-11-28 04:46:58 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:47:51 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 44 ]
2013-11-28 04:47:51 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:47:52 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 44 ]
2013-11-28 04:47:52 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:48:03 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 47 ]
2013-11-28 04:48:03 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:48:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 47 ]
2013-11-28 04:48:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:48:13 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 50 ]
2013-11-28 04:48:13 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:48:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 50 ]
2013-11-28 04:48:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\centroCosto\index.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:50:22 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\index.php [ 37 ]
2013-11-28 04:50:22 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\index.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-28 04:50:23 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\index.php [ 37 ]
2013-11-28 04:50:23 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\index.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}