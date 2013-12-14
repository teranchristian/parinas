<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-05 02:09:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\centroCosto\nuevo.php [ 37 ]
2013-07-05 02:09:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\centroCosto\nuevo.php [ 37 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(37): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-05 02:09:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  idRol ~ APPPATH\views\centroCosto\nuevo.php [ 38 ]
2013-07-05 02:09:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  idRol ~ APPPATH\views\centroCosto\nuevo.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(38): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-05 03:01:51 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idArea' doesn't have a default value [ INSERT INTO centroCosto (codigo, descripcion) VALUES ('220', 'REFINERIA CONCHAN') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-05 03:01:51 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idArea' doesn't have a default value [ INSERT INTO centroCosto (codigo, descripcion) VALUES ('220', 'REFINERIA CONCHAN') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(23): Model_centroCosto->insert(Array)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-05 03:09:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  description ~ APPPATH\views\obra\nuevo.php [ 38 ]
2013-07-05 03:09:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  description ~ APPPATH\views\obra\nuevo.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\nuevo.php(38): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\demo.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Obra))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-07-05 05:54:35 --- ERROR: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-05 05:54:35 --- STRACE: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('product/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('product/index', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\product.php(13): Kohana_View::factory('product/index')
#3 [internal function]: Controller_Product->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-05 05:54:41 --- ERROR: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-05 05:54:41 --- STRACE: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('product/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('product/index', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\product.php(13): Kohana_View::factory('product/index')
#3 [internal function]: Controller_Product->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-05 05:54:47 --- ERROR: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-05 05:54:47 --- STRACE: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('product/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('product/index', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\product.php(13): Kohana_View::factory('product/index')
#3 [internal function]: Controller_Product->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-05 05:54:52 --- ERROR: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-05 05:54:52 --- STRACE: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('product/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('product/index', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\product.php(13): Kohana_View::factory('product/index')
#3 [internal function]: Controller_Product->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-05 05:55:04 --- ERROR: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-05 05:55:04 --- STRACE: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('product/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('product/index', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\product.php(13): Kohana_View::factory('product/index')
#3 [internal function]: Controller_Product->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-05 05:55:15 --- ERROR: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-05 05:55:15 --- STRACE: View_Exception [ 0 ]: The requested view product/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('product/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('product/index', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\product.php(13): Kohana_View::factory('product/index')
#3 [internal function]: Controller_Product->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}