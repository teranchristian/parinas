<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-05 02:16:51 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 02:16:51 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuarios' doesn't exist [ SHOW FULL COLUMNS FROM `usuarios` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuarios')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(36): Kohana_ORM::factory('USUARIO')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-12-05 02:17:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::execute() ~ MODPATH\simpleauth\classes\simpleauth.php [ 40 ]
2013-12-05 02:17:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::execute() ~ MODPATH\simpleauth\classes\simpleauth.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:18:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 41 ]
2013-12-05 02:18:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:19:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::as_object() ~ MODPATH\simpleauth\classes\simpleauth.php [ 40 ]
2013-12-05 02:19:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::as_object() ~ MODPATH\simpleauth\classes\simpleauth.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:19:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::execute() ~ MODPATH\simpleauth\classes\simpleauth.php [ 41 ]
2013-12-05 02:19:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::execute() ~ MODPATH\simpleauth\classes\simpleauth.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:19:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 41 ]
2013-12-05 02:19:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:19:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
2013-12-05 02:19:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(48): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:20:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
2013-12-05 02:20:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(48): Kohana_Core::error_handler('test@test.com', '')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:20:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
2013-12-05 02:20:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(48): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:20:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'password1' in 'where clause' [ SELECT `usuario`.* FROM `usuario` AS `usuario` WHERE `email` = 'test@test.com' AND `password1` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 02:20:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'password1' in 'where clause' [ SELECT `usuario`.* FROM `usuario` AS `usuario` WHERE `email` = 'test@test.com' AND `password1` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `usuario...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(40): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 02:22:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'password1' in 'where clause' [ SELECT `usuario`.* FROM `usuario` AS `usuario` WHERE `email` = 'test@test.com' AND `password1` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 02:22:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'password1' in 'where clause' [ SELECT `usuario`.* FROM `usuario` AS `usuario` WHERE `email` = 'test@test.com' AND `password1` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `usuario...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(40): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 02:22:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
2013-12-05 02:22:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  LastName ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(48): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:23:25 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 47 ]
2013-12-05 02:23:25 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:23:52 --- ERROR: Kohana_Exception [ 0 ]: The LastName property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 02:23:52 --- STRACE: Kohana_Exception [ 0 ]: The LastName property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(47): Kohana_ORM->__get('LastName')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:24:27 --- ERROR: Kohana_Exception [ 0 ]: The Apellido property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 02:24:27 --- STRACE: Kohana_Exception [ 0 ]: The Apellido property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(47): Kohana_ORM->__get('Apellido')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:24:41 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 47 ]
2013-12-05 02:24:41 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:25:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
2013-12-05 02:25:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:25:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 53 ]
2013-12-05 02:25:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ MODPATH\simpleauth\classes\simpleauth.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-05 02:34:21 --- ERROR: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 02:34:21 --- STRACE: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(49): Kohana_ORM->__get('rol')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:35:24 --- ERROR: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 02:35:24 --- STRACE: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(49): Kohana_ORM->__get('rol')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:35:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'usuario.email1' in 'where clause' [ SELECT `usuario`.* FROM `usuario` AS `usuario` INNER JOIN `rol` ON (`rol`.`idRol` = `usuario`.`idRol`) WHERE `usuario`.`email1` = 'test@test.com' AND `usuario`.`password` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 02:35:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'usuario.email1' in 'where clause' [ SELECT `usuario`.* FROM `usuario` AS `usuario` INNER JOIN `rol` ON (`rol`.`idRol` = `usuario`.`idRol`) WHERE `usuario`.`email1` = 'test@test.com' AND `usuario`.`password` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `usuario...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(40): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 02:37:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'usuario.email1' in 'where clause' [ SELECT `usuario`.*, `rol`.* FROM `usuario` AS `usuario` INNER JOIN `rol` ON (`rol`.`idRol` = `usuario`.`idRol`) WHERE `usuario`.`email1` = 'test@test.com' AND `usuario`.`password` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 02:37:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'usuario.email1' in 'where clause' [ SELECT `usuario`.*, `rol`.* FROM `usuario` AS `usuario` INNER JOIN `rol` ON (`rol`.`idRol` = `usuario`.`idRol`) WHERE `usuario`.`email1` = 'test@test.com' AND `usuario`.`password` = 'Parra2013' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `usuario...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(41): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): SimpleAuth->login('test@test.com', 'Parra2013')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 02:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 02:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 02:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 02:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 02:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 02:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 02:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 02:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 02:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 02:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 02:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 02:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 02:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:57:45 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
2013-12-05 02:57:45 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_usua...')
#1 {main}
2013-12-05 02:57:45 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
2013-12-05 02:57:45 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_usua...')
#1 {main}
2013-12-05 02:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 02:59:31 --- ERROR: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 02:59:31 --- STRACE: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(49): Kohana_ORM->__get('rol')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): SimpleAuth->login('test@test.com2', 'Parra2013')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 02:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 02:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 03:00:32 --- ERROR: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:00:32 --- STRACE: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(49): Kohana_ORM->__get('rol')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(20): SimpleAuth->login('tes1t@test.com', 'Parra2013')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 03:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 03:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 03:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 03:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 03:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 03:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 03:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 03:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 03:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 03:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 03:24:15 --- ERROR: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:24:15 --- STRACE: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(48): Kohana_ORM->__get('Nombre')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 03:24:16 --- ERROR: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:24:16 --- STRACE: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(48): Kohana_ORM->__get('Nombre')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 03:30:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\orden.php [ 24 ]
2013-12-05 03:30:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  fechaInicio ~ APPPATH\classes\model\orden.php [ 24 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(24): Kohana_Core::error_handler(Array, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(26): Model_Orden->guardar()
#2 [internal function]: Controller_Orden->action_guardar(Object(Controller_Orden))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 03:30:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  cliente ~ APPPATH\classes\model\orden.php [ 23 ]
2013-12-05 03:30:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  cliente ~ APPPATH\classes\model\orden.php [ 23 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(23): Kohana_Core::error_handler(Array, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(26): Model_Orden->guardar()
#2 [internal function]: Controller_Orden->action_guardar(Object(Controller_Orden))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-05 03:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 03:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 03:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 03:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 03:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 03:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 03:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-12-05 03:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL orden was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-05 03:32:55 --- ERROR: Kohana_Exception [ 0 ]: The fechOrden property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:32:55 --- STRACE: Kohana_Exception [ 0 ]: The fechOrden property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(45): Kohana_ORM->__get('fechOrden')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 03:32:56 --- ERROR: Kohana_Exception [ 0 ]: The fechOrden property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:32:56 --- STRACE: Kohana_Exception [ 0 ]: The fechOrden property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(45): Kohana_ORM->__get('fechOrden')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 03:37:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoobra.descripcion estadoObra' in 'field list' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 03:37:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoobra.descripcion estadoObra' in 'field list' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(20): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(44): Model_Orden->getOrdenList()
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 03:37:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoobra.descripcion estadoObra' in 'field list' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 03:37:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoobra.descripcion estadoObra' in 'field list' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(20): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(44): Model_Orden->getOrdenList()
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 03:38:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 03:38:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(20): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(44): Model_Orden->getOrdenList()
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 03:38:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 03:38:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.*, `estadoobra`.`descripcion` AS `estadoObra` FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(20): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(44): Model_Orden->getOrdenList()
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 03:41:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 03:41:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(20): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(44): Model_Orden->getOrdenList()
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 03:41:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-05 03:41:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'orden.idEstadoObra' in 'on clause' [ SELECT `orden`.*, `obra`.*, `usuario`.* FROM `orden` AS `orden` INNER JOIN `obra` ON (`obra`.`idObra` = `orden`.`idObra`) INNER JOIN `usuario` ON (`usuario`.`idUsuario` = `orden`.`idSolicitante`) INNER JOIN `estadoobra` ON (`estadoobra`.`idEstadoObra` = `orden`.`idEstadoObra`) WHERE `orden`.`status` = 'ACTIVO' ORDER BY `orden`.`creado` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orden`....', 'Model_Orden', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\orden.php(20): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(44): Model_Orden->getOrdenList()
#5 [internal function]: Controller_Orden->action_logistica()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-05 03:42:32 --- ERROR: Kohana_Exception [ 0 ]: The estadoObra property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:42:32 --- STRACE: Kohana_Exception [ 0 ]: The estadoObra property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(51): Kohana_ORM->__get('estadoObra')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 03:42:33 --- ERROR: Kohana_Exception [ 0 ]: The estadoObra property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-05 03:42:33 --- STRACE: Kohana_Exception [ 0 ]: The estadoObra property does not exist in the Model_Orden class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(51): Kohana_ORM->__get('estadoObra')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 04:07:29 --- ERROR: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-05 04:07:29 --- STRACE: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orde/gerencia')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orde/gerencia', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(37): Kohana_View::factory('orde/gerencia')
#3 [internal function]: Controller_Orden->action_gerencia()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-05 04:07:30 --- ERROR: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-05 04:07:30 --- STRACE: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orde/gerencia')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orde/gerencia', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(37): Kohana_View::factory('orde/gerencia')
#3 [internal function]: Controller_Orden->action_gerencia()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-05 04:08:07 --- ERROR: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-05 04:08:07 --- STRACE: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orde/gerencia')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orde/gerencia', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(37): Kohana_View::factory('orde/gerencia')
#3 [internal function]: Controller_Orden->action_gerencia()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-05 04:08:07 --- ERROR: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-05 04:08:07 --- STRACE: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orde/gerencia')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orde/gerencia', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(37): Kohana_View::factory('orde/gerencia')
#3 [internal function]: Controller_Orden->action_gerencia()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-05 04:08:11 --- ERROR: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-05 04:08:11 --- STRACE: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orde/gerencia')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orde/gerencia', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(37): Kohana_View::factory('orde/gerencia')
#3 [internal function]: Controller_Orden->action_gerencia()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-05 04:08:11 --- ERROR: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-05 04:08:11 --- STRACE: View_Exception [ 0 ]: The requested view orde/gerencia could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('orde/gerencia')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('orde/gerencia', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(37): Kohana_View::factory('orde/gerencia')
#3 [internal function]: Controller_Orden->action_gerencia()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-05 04:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-05 04:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-05 04:24:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
2013-12-05 04:24:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\nuevo.php(46): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 04:24:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
2013-12-05 04:24:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\nuevo.php(46): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 04:24:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
2013-12-05 04:24:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\nuevo.php(46): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-05 04:24:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
2013-12-05 04:24:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: obraList ~ APPPATH\views\orden\nuevo.php [ 46 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\nuevo.php(46): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}