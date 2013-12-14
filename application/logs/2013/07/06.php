<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-06 04:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-06 04:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-06 19:25:10 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idCentroCosto' doesn't have a default value [ INSERT INTO obra (idUsuario) VALUES ('2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:25:10 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idCentroCosto' doesn't have a default value [ INSERT INTO obra (idUsuario) VALUES ('2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(22): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:26:13 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idCentroCosto' doesn't have a default value [ INSERT INTO obra () VALUES () ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:26:13 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idCentroCosto' doesn't have a default value [ INSERT INTO obra () VALUES () ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(22): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:27:00 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idCentroCosto' doesn't have a default value [ INSERT INTO obra () VALUES () ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:27:00 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'idCentroCosto' doesn't have a default value [ INSERT INTO obra () VALUES () ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(22): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:28:06 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'idArea' in 'field list' [ INSERT INTO obra (idArea, descripcion, montoContrato, idEstadoObra, idUsuario) VALUES ('s', 'sad', '123', '1', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:28:06 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'idArea' in 'field list' [ INSERT INTO obra (idArea, descripcion, montoContrato, idEstadoObra, idUsuario) VALUES ('s', 'sad', '123', '1', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:28:50 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'idArea' in 'field list' [ INSERT INTO obra (idArea, descripcion, montoContrato, idEstadoObra, idUsuario) VALUES ('s', 'sad', '123', '1', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:28:50 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'idArea' in 'field list' [ INSERT INTO obra (idArea, descripcion, montoContrato, idEstadoObra, idUsuario) VALUES ('s', 'sad', '123', '1', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:29:42 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'idArea' in 'field list' [ INSERT INTO obra (idArea, descripcion, moneda, montoContrato, idEstadoObra, idUsuario) VALUES ('3', 'asdasd', 's', '123', '1', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:29:42 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'idArea' in 'field list' [ INSERT INTO obra (idArea, descripcion, moneda, montoContrato, idEstadoObra, idUsuario) VALUES ('3', 'asdasd', 's', '123', '1', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(9): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:37:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\obra.php [ 14 ]
2013-07-06 19:37:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\obra.php [ 14 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(14): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#2 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-06 19:38:56 --- ERROR: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\obra.php [ 14 ]
2013-07-06 19:38:56 --- STRACE: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\obra.php [ 14 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(14): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#2 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-06 19:39:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\obra.php [ 18 ]
2013-07-06 19:39:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\obra.php [ 18 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(18): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#2 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-06 19:41:52 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 16 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-07-06 19:41:52 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 16 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler('2', 'Qwe', 's', '123', '1', '2013-07-10', '2013-10-07')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(16): Kohana_Database_Query_Builder_Insert->values(Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#3 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:43:09 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 18 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-07-06 19:43:09 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 18 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler('2', 'Qwe', 's', '123', '1', '10/07/2013', '10/07/2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(18): Kohana_Database_Query_Builder_Insert->values(Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#3 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:43:46 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 19 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-07-06 19:43:46 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 19 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler('2', 'Qwe', 's', '123', '1', '10/07/2013', '10/07/2013', '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(19): Kohana_Database_Query_Builder_Insert->values(Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#3 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:44:43 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 19 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-07-06 19:44:43 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php on line 19 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler('2', 'Qwe', 's', '123', '1', '', '', '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(19): Kohana_Database_Query_Builder_Insert->values(Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert()
#3 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:48:49 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1292 Incorrect date value: '' for column 'fechaInicio' at row 1 [ INSERT INTO obra (idCentroCosto, descripcion, moneda, montoContrato, idEstadoObra, fechaInicio, fechaFin, idUsuario) VALUES ('2', 'Qwe', 's', '123', '1', '', '', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:48:49 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1292 Incorrect date value: '' for column 'fechaInicio' at row 1 [ INSERT INTO obra (idCentroCosto, descripcion, moneda, montoContrato, idEstadoObra, fechaInicio, fechaFin, idUsuario) VALUES ('2', 'Qwe', 's', '123', '1', '', '', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(20): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:49:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ')' ~ APPPATH\classes\model\obra.php [ 16 ]
2013-07-06 19:49:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ')' ~ APPPATH\classes\model\obra.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_obra')
#1 {main}
2013-07-06 19:52:24 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1292 Incorrect date value: '' for column 'fechaInicio' at row 1 [ INSERT INTO obra (idCentroCosto, descripcion, moneda, montoContrato, idEstadoObra, fechaInicio, fechaFin, idUsuario) VALUES ('2', 'Test', 's', '13', '1', '', '', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:52:24 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1292 Incorrect date value: '' for column 'fechaInicio' at row 1 [ INSERT INTO obra (idCentroCosto, descripcion, moneda, montoContrato, idEstadoObra, fechaInicio, fechaFin, idUsuario) VALUES ('2', 'Test', 's', '13', '1', '', '', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(21): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 19:52:40 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1292 Incorrect date value: '09/07/2013' for column 'fechaInicio' at row 1 [ INSERT INTO obra (idCentroCosto, descripcion, moneda, montoContrato, idEstadoObra, fechaInicio, fechaFin, idUsuario) VALUES ('2', 'Test', 's', '13', '1', '09/07/2013', '10/07/2013', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 19:52:40 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1292 Incorrect date value: '09/07/2013' for column 'fechaInicio' at row 1 [ INSERT INTO obra (idCentroCosto, descripcion, moneda, montoContrato, idEstadoObra, fechaInicio, fechaFin, idUsuario) VALUES ('2', 'Test', 's', '13', '1', '09/07/2013', '10/07/2013', '2') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO obr...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(21): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(23): Model_Obra->insert(Array)
#3 [internal function]: Controller_Obra->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 20:31:25 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'Obra.status' in 'where clause' [ SELECT * FROM Obra JOIN centroCosto ON (centroCosto.idCentroCosto = Obra.idCentroCosto) WHERE Obra.status = 'ACTIVO' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 20:31:25 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'Obra.status' in 'where clause' [ SELECT * FROM Obra JOIN centroCosto ON (centroCosto.idCentroCosto = Obra.idCentroCosto) WHERE Obra.status = 'ACTIVO' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM O...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(11): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#3 [internal function]: Controller_Obra->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 20:32:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: usuariosList ~ APPPATH\views\obra\index.php [ 40 ]
2013-07-06 20:32:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: usuariosList ~ APPPATH\views\obra\index.php [ 40 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(40): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 20:33:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: usuariosList ~ APPPATH\views\obra\index.php [ 40 ]
2013-07-06 20:33:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: usuariosList ~ APPPATH\views\obra\index.php [ 40 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(40): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 20:33:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: usuariosList ~ APPPATH\views\obra\index.php [ 40 ]
2013-07-06 20:33:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: usuariosList ~ APPPATH\views\obra\index.php [ 40 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(40): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 20:50:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  idEstadoObra ~ APPPATH\views\obra\index.php [ 55 ]
2013-07-06 20:50:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  idEstadoObra ~ APPPATH\views\obra\index.php [ 55 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(55): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 20:51:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  idEstadoObra ~ APPPATH\views\obra\index.php [ 55 ]
2013-07-06 20:51:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  idEstadoObra ~ APPPATH\views\obra\index.php [ 55 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(55): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 21:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/editar2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-06 21:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/editar2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-06 21:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/editar2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-07-06 21:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL centroCosto/editar2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-06 21:16:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: areaList ~ APPPATH\views\centroCosto\index.php [ 34 ]
2013-07-06 21:16:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: areaList ~ APPPATH\views\centroCosto\index.php [ 34 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\index.php(34): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 21:17:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: centroCostoList ~ APPPATH\views\centroCosto\index.php [ 40 ]
2013-07-06 21:17:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: centroCostoList ~ APPPATH\views\centroCosto\index.php [ 40 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\index.php(40): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 21:19:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$codigo ~ APPPATH\views\centroCosto\nuevo.php [ 46 ]
2013-07-06 21:19:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$codigo ~ APPPATH\views\centroCosto\nuevo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(46): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 21:38:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 36 ]
2013-07-06 21:38:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 36 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(36): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 21:39:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 38 ]
2013-07-06 21:39:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 38 ]
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
2013-07-06 21:39:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 38 ]
2013-07-06 21:39:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 38 ]
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
2013-07-06 21:58:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  idCentroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 40 ]
2013-07-06 21:58:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  idCentroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 40 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(40): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 22:16:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 31 ]
2013-07-06 22:16:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: centroCosto ~ APPPATH\views\centroCosto\nuevo.php [ 31 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(31): Kohana_Core::error_handler('C:\Program File...', Array)
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
2013-07-06 22:20:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  descrpcion ~ APPPATH\classes\model\centroCosto.php [ 11 ]
2013-07-06 22:20:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  descrpcion ~ APPPATH\classes\model\centroCosto.php [ 11 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(11): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(36): Model_centroCosto->insert()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-06 22:20:19 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto (action, idArea, codigo, descripcion, id) VALUES ('1', 'test', 'test') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 22:20:19 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto (action, idArea, codigo, descripcion, id) VALUES ('1', 'test', 'test') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(16): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(36): Model_centroCosto->insert(Array)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 22:21:04 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto (action, idArea, codigo, descripcion) VALUES ('1', 'test', 'test') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 22:21:04 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto (action, idArea, codigo, descripcion) VALUES ('1', 'test', 'test') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(16): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(36): Model_centroCosto->insert(Array, NULL)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 22:21:55 --- ERROR: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto (action, idArea, codigo, descripcion) VALUES ('1', 'test', 'test') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 22:21:55 --- STRACE: Database_Exception [ 21S01 ]: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1 [ INSERT INTO centroCosto (action, idArea, codigo, descripcion) VALUES ('1', 'test', 'test') ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(2, 'INSERT INTO cen...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(16): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(36): Model_centroCosto->insert(Array, NULL)
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-06 22:22:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::where() ~ APPPATH\classes\model\centroCosto.php [ 14 ]
2013-07-06 22:22:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::where() ~ APPPATH\classes\model\centroCosto.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array, '17')
#1 {main}
2013-07-06 22:24:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::where() ~ APPPATH\classes\model\centroCosto.php [ 17 ]
2013-07-06 22:24:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::where() ~ APPPATH\classes\model\centroCosto.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array, '17')
#1 {main}
2013-07-06 22:24:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Update::values() ~ APPPATH\classes\model\centroCosto.php [ 11 ]
2013-07-06 22:24:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Update::values() ~ APPPATH\classes\model\centroCosto.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array, '17')
#1 {main}
2013-07-06 22:26:46 --- ERROR: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 = '1', 1 = '2200', 2 = '22' WHERE idCentroCosto = '17'' at line 1 [ UPDATE centroCosto SET 0 = '1', 1 = '2200', 2 = '22' WHERE idCentroCosto = '17' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-06 22:26:46 --- STRACE: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 = '1', 1 = '2200', 2 = '22' WHERE idCentroCosto = '17'' at line 1 [ UPDATE centroCosto SET 0 = '1', 1 = '2200', 2 = '22' WHERE idCentroCosto = '17' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(3, 'UPDATE centroCo...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(24): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(36): Model_centroCosto->insert(Array, '17')
#3 [internal function]: Controller_CentroCosto->action_guardar()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}