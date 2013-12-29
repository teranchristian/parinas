<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-26 03:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:07:02 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
2013-12-26 03:07:02 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_usua...')
#1 {main}
2013-12-26 03:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:32:35 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-26 03:32:35 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\auth.php(72): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(27): Auth->login('c', 'c')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-26 03:35:03 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idProcesoOrden` IN ('1', '2', '3') ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-26 03:35:03 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idProcesoOrden` IN ('1', '2', '3') ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(23): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(90): Model_Orden->getOrdenList(Array)
#5 [internal function]: Controller_Orden->action_gerencia()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-26 03:35:27 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idProcesoOrden` IN ('1', '2', '3', '4') ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-26 03:35:27 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idProcesoOrden` IN ('1', '2', '3', '4') ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(23): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(104): Model_Orden->getOrdenList(Array)
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-26 03:36:24 --- ERROR: Kohana_Exception [ 0 ]: The apellido property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-26 03:36:24 --- STRACE: Kohana_Exception [ 0 ]: The apellido property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(55): Kohana_ORM->__get('apellido')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(120): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-26 03:37:35 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-26 03:37:35 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(55): Kohana_ORM->__get('lastname')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(120): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-26 03:44:24 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Orden::getOrdenList(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php on line 92 and defined ~ APPPATH\classes\model\orden.php [ 9 ]
2013-12-26 03:44:24 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Orden::getOrdenList(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php on line 92 and defined ~ APPPATH\classes\model\orden.php [ 9 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(9): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(92): Model_Orden->getOrdenList()
#2 [internal function]: Controller_Orden->action_gerencia(Object(Controller_Orden))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-26 03:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:46:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\model\orden.php [ 22 ]
2013-12-26 03:46:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\model\orden.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(22): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(92): Model_Orden->getOrdenList()
#2 [internal function]: Controller_Orden->action_gerencia(Object(Controller_Orden))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-26 03:47:04 --- ERROR: Kohana_Exception [ 0 ]: The apellido property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-26 03:47:04 --- STRACE: Kohana_Exception [ 0 ]: The apellido property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\gerencia.php(55): Kohana_ORM->__get('apellido')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(120): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-26 03:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:51:22 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `centrocosto`.`codigo` AS `codigo`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `centrocosto` ON (`centrocosto`.`idCentroCosto` = `obra`.`idCentroCosto`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idOrden` = '34' ORDER BY `orden`.`creado` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-26 03:51:22 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `centrocosto`.`codigo` AS `codigo`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `centrocosto` ON (`centrocosto`.`idCentroCosto` = `obra`.`idCentroCosto`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idOrden` = '34' ORDER BY `orden`.`creado` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(72): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(43): Model_Orden->getOrden('34')
#5 [internal function]: Controller_Orden->action_editar()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-26 03:52:38 --- ERROR: Database_Exception [ 1051 ]: Unknown table 'usuario' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `centrocosto`.`codigo` AS `codigo`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `users` ON (`users`.`id` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `centrocosto` ON (`centrocosto`.`idCentroCosto` = `obra`.`idCentroCosto`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idOrden` = '34' ORDER BY `orden`.`creado` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-26 03:52:38 --- STRACE: Database_Exception [ 1051 ]: Unknown table 'usuario' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra`, `orden`.`moneda` AS `monedaObra`, `centrocosto`.`codigo` AS `codigo`, `procesoorden`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `users` ON (`users`.`id` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `obra`.`idEstadoObra`) INNER JOIN `centrocosto` ON (`centrocosto`.`idCentroCosto` = `obra`.`idCentroCosto`) INNER JOIN `procesoorden` ON (`procesoorden`.`idProcesoOrden` = `orden`.`idProcesoOrden`) WHERE `orden`.`status` = 'ACTIVO' AND `orden`.`idOrden` = '34' ORDER BY `orden`.`creado` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(72): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(43): Model_Orden->getOrden('34')
#5 [internal function]: Controller_Orden->action_editar()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-26 03:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-26 03:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-26 03:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}