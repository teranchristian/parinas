<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-04 04:20:52 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\kohana\view.php [ 290 ]
2013-07-04 04:20:52 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\kohana\view.php [ 290 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(290): Kohana_Core::error_handler(Object(Database_Result_Cached), Object(Database_Result_Cached))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(8): Kohana_View->set()
#2 [internal function]: Controller_Usuario->action_index(Object(Controller_Usuario))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-04 04:21:03 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\kohana\view.php [ 290 ]
2013-07-04 04:21:03 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\kohana\view.php [ 290 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(290): Kohana_Core::error_handler(Object(Database_Result_Cached), Object(Database_Result_Cached))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(8): Kohana_View->set()
#2 [internal function]: Controller_Usuario->action_index(Object(Controller_Usuario))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-04 04:21:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant usuariosList - assumed 'usuariosList' ~ APPPATH\classes\controller\usuario.php [ 8 ]
2013-07-04 04:21:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant usuariosList - assumed 'usuariosList' ~ APPPATH\classes\controller\usuario.php [ 8 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(8): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_index(Object(Controller_Usuario))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-04 04:23:17 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\views\usuario\index.php [ 66 ]
2013-07-04 04:23:17 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\views\usuario\index.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-07-04 04:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-04 04:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 04:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL link was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 04:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL link was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 04:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-04 04:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 05:29:28 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$Cargo ~ MODPATH\simpleauth\classes\simpleauth.php [ 70 ]
2013-07-04 05:29:28 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$Cargo ~ MODPATH\simpleauth\classes\simpleauth.php [ 70 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(70): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-04 07:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/logistica was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 07:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/logistica was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 07:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/logistica was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 07:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/logistica was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 07:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden/orden/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-04 07:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden/orden/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 07:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL obra was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 07:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL obra was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 07:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/logistica was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 07:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/logistica was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 07:37:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\centroCosto\nuevo.php [ 90 ]
2013-07-04 07:37:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\centroCosto\nuevo.php [ 90 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(90): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\demo.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-07-04 07:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 07:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 07:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 07:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 19:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 19:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 19:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-04 19:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 20:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario/guardar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-04 20:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario/guardar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 20:07:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::insert() ~ APPPATH\classes\model\centroCosto.php [ 7 ]
2013-07-04 20:07:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::insert() ~ APPPATH\classes\model\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-07-04 20:09:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::insert() ~ APPPATH\classes\model\centroCosto.php [ 7 ]
2013-07-04 20:09:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::insert() ~ APPPATH\classes\model\centroCosto.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-07-04 20:10:14 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:10:14 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:11:07 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:11:07 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:11:17 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:11:17 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:12:58 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:12:58 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:13:09 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:13:09 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:14:11 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:14:11 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(8): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:14:25 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:14:25 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(8): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:18:29 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:18:29 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(141): Kohana_Database_MsSQL->query(1, 'SELECT IDENT_CU...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(124): Kohana_Database_MsSQL->insert_id()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Database_Query->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:23:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\model\centroCosto.php [ 10 ]
2013-07-04 20:23:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\model\centroCosto.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_centroCos...')
#1 {main}
2013-07-04 20:25:27 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:25:27 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(12): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:31:59 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:31:59 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(141): Kohana_Database_MsSQL->query(1, 'SELECT IDENT_CU...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(124): Kohana_Database_MsSQL->insert_id()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(12): Kohana_Database_Query->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:33:54 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-07-04 20:33:54 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct('centroCosto')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Kohana_Model::factory()
#6 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:34:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::values() ~ APPPATH\classes\model\centroCosto.php [ 11 ]
2013-07-04 20:34:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::values() ~ APPPATH\classes\model\centroCosto.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-07-04 20:44:34 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-07-04 20:44:34 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct('centroCosto')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Kohana_Model::factory()
#6 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:44:43 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-07-04 20:44:43 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct('centroCosto')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Kohana_Model::factory()
#6 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:44:52 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-07-04 20:44:52 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct('centroCosto')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Kohana_Model::factory()
#6 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:45:03 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:45:03 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(13): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#4 [internal function]: Controller_CentroCosto->action_guardar()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-04 20:47:59 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:47:59 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(141): Kohana_Database_MsSQL->query(1, 'SELECT IDENT_CU...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(124): Kohana_Database_MsSQL->insert_id()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Database_Query->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:49:26 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-04 20:49:26 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(141): Kohana_Database_MsSQL->query(1, 'SELECT IDENT_CU...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(124): Kohana_Database_MsSQL->insert_id()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(2, 'INSERT INTO cen...', false, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Database_Query->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-04 20:51:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::commit() ~ APPPATH\classes\model\centroCosto.php [ 11 ]
2013-07-04 20:51:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::commit() ~ APPPATH\classes\model\centroCosto.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-07-04 20:54:40 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '123, 12) VALUES' at line 1 [ INSERT INTO centroCosto (123, 12) VALUES  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-04 20:54:40 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '123, 12) VALUES' at line 1 [ INSERT INTO centroCosto (123, 12) VALUES  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-04 20:55:02 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto () VALUES ('123', '12') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-04 20:55:02 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto () VALUES ('123', '12') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-04 20:55:16 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '123, 12) VALUES ('123', '12')' at line 1 [ INSERT INTO centroCosto (123, 12) VALUES ('123', '12') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-04 20:55:16 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '123, 12) VALUES ('123', '12')' at line 1 [ INSERT INTO centroCosto (123, 12) VALUES ('123', '12') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-04 20:56:29 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '123, christian) VALUES' at line 1 [ INSERT INTO centroCosto (123, christian) VALUES  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-04 20:56:29 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '123, christian) VALUES' at line 1 [ INSERT INTO centroCosto (123, christian) VALUES  ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(19): Model_centroCosto->insert(Array)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-04 20:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/centroCosto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-04 20:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/centroCosto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 20:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/centroCosto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-04 20:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/centroCosto/nuevo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-04 21:00:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::getCentroCostoList() ~ APPPATH\classes\controller\centroCosto.php [ 6 ]
2013-07-04 21:00:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::getCentroCostoList() ~ APPPATH\classes\controller\centroCosto.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}