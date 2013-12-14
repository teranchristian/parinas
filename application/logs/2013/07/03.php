<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-03 02:38:59 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-07-03 02:38:59 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\pdo.php(248): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database.php(473): Kohana_Database_PDO->escape('test@test.com')
#2 [internal function]: Kohana_Database->quote('test@test.com')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\select.php(417): Kohana_Database_Query->compile(Object(Database_PDO))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(38): Kohana_Database_Query->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-03 02:39:38 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-07-03 02:39:38 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\pdo.php(248): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database.php(473): Kohana_Database_PDO->escape('test@test.com')
#2 [internal function]: Kohana_Database->quote('test@test.com')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\select.php(417): Kohana_Database_Query->compile(Object(Database_PDO))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(38): Kohana_Database_Query->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-03 02:46:03 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[28000] [1045] Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-07-03 02:46:03 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[28000] [1045] Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\pdo.php(248): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database.php(473): Kohana_Database_PDO->escape('test@test.com')
#2 [internal function]: Kohana_Database->quote('test@test.com')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query\builder\select.php(417): Kohana_Database_Query->compile(Object(Database_PDO))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(38): Kohana_Database_Query->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-03 02:46:20 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.supplier' doesn't exist [ SELECT * FROM supplier WHERE email = 'test@test.com' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-03 02:46:20 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.supplier' doesn't exist [ SELECT * FROM supplier WHERE email = 'test@test.com' ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM s...', true, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(38): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-03 02:47:33 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.usuario1' doesn't exist [ SELECT * FROM usuario1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-03 02:47:33 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.usuario1' doesn't exist [ SELECT * FROM usuario1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(34): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-03 02:49:27 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.usuario1' doesn't exist [ SELECT * FROM usuario1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-03 02:49:27 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.usuario1' doesn't exist [ SELECT * FROM usuario1 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(34): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-03 02:49:37 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.role' doesn't exist [ SELECT * FROM role ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-03 02:49:37 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.role' doesn't exist [ SELECT * FROM role ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM r...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(34): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-03 03:02:48 --- ERROR: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.supplier' doesn't exist [ SELECT * FROM Supplier ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-07-03 03:02:48 --- STRACE: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'mycparinas.supplier' doesn't exist [ SELECT * FROM Supplier ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT * FROM S...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(12): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-03 03:05:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\controller\logon.php [ 15 ]
2013-07-03 03:05:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\controller\logon.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-03 03:06:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\controller\logon.php [ 15 ]
2013-07-03 03:06:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\controller\logon.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_logo...')
#1 {main}
2013-07-03 03:08:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_usuario1' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2013-07-03 03:08:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_usuario1' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('usuario1')
#1 {main}
2013-07-03 03:10:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::find_all() ~ APPPATH\classes\controller\logon.php [ 14 ]
2013-07-03 03:10:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::find_all() ~ APPPATH\classes\controller\logon.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-03 03:14:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Usuario::find_all() ~ APPPATH\classes\controller\logon.php [ 14 ]
2013-07-03 03:14:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Usuario::find_all() ~ APPPATH\classes\controller\logon.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-03 03:47:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\logon.php [ 32 ]
2013-07-03 03:47:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\logon.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_logo...')
#1 {main}
2013-07-03 03:47:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\logon.php [ 32 ]
2013-07-03 03:47:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\logon.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_logo...')
#1 {main}
2013-07-03 03:47:34 --- ERROR: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\controller\logon.php [ 13 ]
2013-07-03 03:47:34 --- STRACE: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\controller\logon.php [ 13 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): Kohana_Core::error_handler()
#1 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-03 03:50:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
2013-07-03 03:50:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('SimpleAuth')
#1 {main}
2013-07-03 03:50:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::where() ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
2013-07-03 03:50:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::where() ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-07-03 03:52:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ MODPATH\simpleauth\classes\simpleauth.php [ 81 ]
2013-07-03 03:52:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ MODPATH\simpleauth\classes\simpleauth.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('SimpleAuth')
#1 {main}
2013-07-03 03:53:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: field ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
2013-07-03 03:53:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: field ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(35): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-03 03:53:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
2013-07-03 03:53:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-07-03 03:56:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 38 ]
2013-07-03 03:56:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::current() ~ MODPATH\simpleauth\classes\simpleauth.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-07-03 03:58:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\simpleauth\classes\simpleauth.php [ 42 ]
2013-07-03 03:58:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\simpleauth\classes\simpleauth.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('SimpleAuth')
#1 {main}
2013-07-03 03:59:15 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$Id ~ MODPATH\simpleauth\classes\simpleauth.php [ 60 ]
2013-07-03 03:59:15 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$Id ~ MODPATH\simpleauth\classes\simpleauth.php [ 60 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(60): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-03 03:59:34 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$idUsuaio ~ MODPATH\simpleauth\classes\simpleauth.php [ 60 ]
2013-07-03 03:59:34 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$idUsuaio ~ MODPATH\simpleauth\classes\simpleauth.php [ 60 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(60): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-03 04:00:00 --- ERROR: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-07-03 04:00:00 --- STRACE: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'sys.messages' doesn't exist ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(3, 'UPDATE usuario ...', false, Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(61): Kohana_Database_Query->execute()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login('test@test.com', 'Parra2013')
#4 [internal function]: Controller_Logon->action_index()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-03 04:00:40 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$Role ~ MODPATH\simpleauth\classes\simpleauth.php [ 63 ]
2013-07-03 04:00:40 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$Role ~ MODPATH\simpleauth\classes\simpleauth.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(63): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-03 04:01:33 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$Id ~ MODPATH\simpleauth\classes\simpleauth.php [ 73 ]
2013-07-03 04:01:33 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$Id ~ MODPATH\simpleauth\classes\simpleauth.php [ 73 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\simpleauth\classes\simpleauth.php(73): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(13): SimpleAuth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}