<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-14 04:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 04:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 04:07:08 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 39 ]
2013-12-14 04:07:08 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL l was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-12-14 04:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL l was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#3 {main}
2013-12-14 04:07:16 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 8 ]
2013-12-14 04:07:16 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:09:36 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
2013-12-14 04:09:36 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:13:12 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
2013-12-14 04:13:12 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:20:47 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 21 ]
2013-12-14 04:20:47 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:20:56 --- ERROR: ErrorException [ 8 ]: Undefined index:  session ~ MODPATH\auth\classes\auth.php [ 23 ]
2013-12-14 04:20:56 --- STRACE: ErrorException [ 8 ]: Undefined index:  session ~ MODPATH\auth\classes\auth.php [ 23 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\auth.php(23): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\auth.php(11): Auth->__construct()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth::instance()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 04:21:41 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\auth\classes\auth.php [ 52 ]
2013-12-14 04:21:41 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\auth\classes\auth.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-14 04:22:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: session_key ~ MODPATH\auth\classes\auth.php [ 53 ]
2013-12-14 04:22:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: session_key ~ MODPATH\auth\classes\auth.php [ 53 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\auth.php(53): Kohana_Core::error_handler('test@test.com', 'Parra2013')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 04:22:11 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH\auth\classes\auth.php [ 56 ]
2013-12-14 04:22:11 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH\auth\classes\auth.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('test@test.com', 'Parra2013')
#1 {main}
2013-12-14 04:22:27 --- ERROR: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-14 04:22:27 --- STRACE: Kohana_Exception [ 0 ]: The rol property does not exist in the Model_Usuario class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\auth.php(49): Kohana_ORM->__get('rol')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 04:35:57 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\config\file\reader.php on line 49 and defined ~ SYSPATH\classes\kohana\arr.php [ 411 ]
2013-12-14 04:35:57 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\config\file\reader.php on line 49 and defined ~ SYSPATH\classes\kohana\arr.php [ 411 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\arr.php(411): Kohana_Core::error_handler(Array, 1)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\config\file\reader.php(49): Kohana_Arr::merge('auth')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('auth')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\kohana\auth.php(26): Kohana_Config->load()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Kohana_Auth::instance()
#5 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 04:41:17 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 21 ]
2013-12-14 04:41:17 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:41:32 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
2013-12-14 04:41:32 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:42:16 --- ERROR: ErrorException [ 1 ]: Class 'auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
2013-12-14 04:42:16 --- STRACE: ErrorException [ 1 ]: Class 'auth' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:42:35 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Core' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
2013-12-14 04:42:35 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Core' not found ~ APPPATH\classes\controller\logon.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:43:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function Auth_Core() ~ APPPATH\classes\controller\logon.php [ 21 ]
2013-12-14 04:43:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function Auth_Core() ~ APPPATH\classes\controller\logon.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:46:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\Auth.php [ 33 ]
2013-12-14 04:46:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\Auth.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-12-14 04:50:05 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 208 ]
2013-12-14 04:50:05 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 208 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:51:44 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 209 ]
2013-12-14 04:51:44 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:52:41 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ MODPATH\auth\classes\Auth.php [ 27 ]
2013-12-14 04:52:41 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ MODPATH\auth\classes\Auth.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 04:53:03 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 04:53:03 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(47): Kohana_ORM::factory('user')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-12-14 04:54:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User1' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 04:54:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User1' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('user1')
#1 {main}
2013-12-14 04:54:34 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 04:54:34 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(47): Kohana_ORM::factory('user')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-12-14 04:55:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH\auth\classes\Auth.php [ 49 ]
2013-12-14 04:55:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ MODPATH\auth\classes\Auth.php [ 49 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(49): Kohana_Core::error_handler('a', 'a')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 04:55:22 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 04:55:22 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(47): Kohana_ORM::factory('user')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-12-14 04:59:16 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 47 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 04:59:16 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 47 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(47): Kohana_ORM->where('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 05:01:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 47 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 05:01:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 47 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(47): Kohana_ORM->where('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 05:08:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 50 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 05:08:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 50 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(50): Kohana_ORM->where('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 05:08:14 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 103 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 05:08:14 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 103 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler('token', 'il6tf5AxbJ7AARb...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(103): Kohana_ORM->where()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(61): Auth->create_token('a', 'a')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#4 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-12-14 05:09:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_token ~ MODPATH\auth\classes\Auth.php [ 106 ]
2013-12-14 05:09:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_token ~ MODPATH\auth\classes\Auth.php [ 106 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(61): Auth->create_token('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 05:30:54 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 104 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 05:30:54 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 104 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler('token', 'cMhvvbEKezsJ0ZC...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(104): Kohana_ORM->where()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(61): Auth->create_token('a', 'a')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#4 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-12-14 05:31:19 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\auth\classes\Auth.php [ 70 ]
2013-12-14 05:31:19 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\auth\classes\Auth.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a', 'a')
#1 {main}
2013-12-14 05:38:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_user_tokens' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 05:38:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_user_tokens' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_user_token...')
#1 {main}
2013-12-14 05:40:10 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 05:40:10 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(74): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 05:40:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_user_tokens' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 05:40:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_user_tokens' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_user_token...')
#1 {main}
2013-12-14 05:41:02 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 05:41:02 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(74): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 05:41:40 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 05:41:40 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(74): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 05:42:15 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 05:42:15 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(74): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 05:42:26 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 89 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 05:42:26 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 89 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(89): Kohana_ORM->where('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 05:42:55 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 89 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 05:42:55 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 89 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(89): Kohana_ORM->where('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 05:53:04 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$user_agent ~ MODPATH\auth\classes\Auth.php [ 79 ]
2013-12-14 05:53:04 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$user_agent ~ MODPATH\auth\classes\Auth.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a', 'a')
#1 {main}
2013-12-14 05:54:05 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 05:54:05 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 05:55:34 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 05:55:34 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 05:56:17 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 05:56:17 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 05:59:06 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 05:59:06 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 05:59:38 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 05:59:38 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 05:59:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_1auth_user_token' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 05:59:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_1auth_user_token' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('1auth_user_toke...')
#1 {main}
2013-12-14 06:00:09 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:00:09 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 06:00:56 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:00:56 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 06:01:10 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:01:10 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 06:01:38 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:01:38 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 06:01:46 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:01:46 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 06:02:51 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_users' doesn't exist [ SHOW FULL COLUMNS FROM `auth_users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:02:51 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_users' doesn't exist [ SHOW FULL COLUMNS FROM `auth_users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_users')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('auth_user')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#8 [internal function]: Controller_Logon->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#13 {main}
2013-12-14 06:03:06 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:03:06 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 06:03:18 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:03:18 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 06:03:55 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:03:55 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:04:10 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:04:10 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 06:04:23 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:04:23 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:05:04 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:05:04 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:05:13 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:05:13 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:05:41 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:05:41 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:05:51 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:05:51 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:06:15 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:06:15 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:06:20 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:06:20 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(106): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(59): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 06:07:06 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'token' at row 1 [ INSERT INTO `user_tokens` (`user_id`, `token`) VALUES ('1', 'a31e98f94cf22f10733f5c0e83705054c4372908') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:07:06 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'token' at row 1 [ INSERT INTO `user_tokens` (`user_id`, `token`) VALUES ('1', 'a31e98f94cf22f10733f5c0e83705054c4372908') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(56): Kohana_ORM->create(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM->save()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 06:11:56 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 06:11:56 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(70): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 06:15:08 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 06:15:08 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(73): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 06:17:37 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 06:17:37 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(74): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 06:17:50 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 06:17:50 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(74): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 07:50:58 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 223 ]
2013-12-14 07:50:58 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 223 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 08:04:13 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'mycparin1as' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2013-12-14 08:04:13 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'mycparin1as' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('mycparin1as')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(53): Kohana_ORM::factory('user')
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:09:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ MODPATH\auth\classes\Auth.php [ 58 ]
2013-12-14 08:09:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ MODPATH\auth\classes\Auth.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a', 'a')
#1 {main}
2013-12-14 08:09:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ MODPATH\auth\classes\Auth.php [ 58 ]
2013-12-14 08:09:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ MODPATH\auth\classes\Auth.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a', 'a')
#1 {main}
2013-12-14 08:13:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\Auth.php [ 49 ]
2013-12-14 08:13:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\Auth.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a', 'a')
#1 {main}
2013-12-14 08:13:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\Auth.php [ 49 ]
2013-12-14 08:13:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\Auth.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a', 'a')
#1 {main}
2013-12-14 08:14:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED ~ MODPATH\auth\classes\Auth.php [ 50 ]
2013-12-14 08:14:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED ~ MODPATH\auth\classes\Auth.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Auth')
#1 {main}
2013-12-14 08:14:18 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 08:14:18 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(79): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 08:15:37 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysql1' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2013-12-14 08:15:37 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysql1' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth')
#1 {main}
2013-12-14 08:15:51 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 08:15:51 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(79): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 08:16:44 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 08:16:44 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(80): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 08:17:02 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:17:02 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:17:16 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:17:16 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:17:31 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 08:17:31 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(80): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 08:17:43 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:17:43 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:17:55 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:17:55 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:18:08 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysql1' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2013-12-14 08:18:08 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysql1' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth')
#1 {main}
2013-12-14 08:18:14 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:18:14 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(76): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:18:41 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysql1' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2013-12-14 08:18:41 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysql1' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth')
#1 {main}
2013-12-14 08:18:50 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:18:50 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(77): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:21:18 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:21:18 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(77): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:21:25 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root1'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-12-14 08:21:25 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root1'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(60): Kohana_ORM::factory('user')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:21:37 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'auth1' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2013-12-14 08:21:37 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'auth1' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('auth1')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(60): Kohana_ORM::factory('user')
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:21:55 --- ERROR: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:21:55 --- STRACE: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(114): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(67): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:22:27 --- ERROR: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:22:27 --- STRACE: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:22:46 --- ERROR: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:22:46 --- STRACE: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:23:02 --- ERROR: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:23:02 --- STRACE: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(109): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:23:13 --- ERROR: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:23:13 --- STRACE: Database_Exception [ 1146 ]: Table 'auth.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(84): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#9 [internal function]: Controller_Logon->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-12-14 08:26:17 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 230 ]
2013-12-14 08:26:17 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_User_Exception' not found ~ MODPATH\auth\classes\Auth.php [ 230 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 08:26:42 --- ERROR: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:26:42 --- STRACE: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:26:49 --- ERROR: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:26:49 --- STRACE: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:27:30 --- ERROR: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:27:30 --- STRACE: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:27:51 --- ERROR: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:27:51 --- STRACE: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:28:02 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 08:28:02 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete auth_user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(81): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 08:28:20 --- ERROR: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:28:20 --- STRACE: Database_Exception [ 1146 ]: Table 'login.user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('user_tokens')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(65): Kohana_ORM::factory('user_token', Array)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(54): Model_Auth_User_Token->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(88): Kohana_ORM->save()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#12 [internal function]: Controller_Logon->action_index()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#17 {main}
2013-12-14 08:29:50 --- ERROR: Database_Exception [ 1146 ]: Table 'login.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:29:50 --- STRACE: Database_Exception [ 1146 ]: Table 'login.auth_user_tokens' doesn't exist [ SHOW FULL COLUMNS FROM `auth_user_tokens` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('auth_user_token...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(113): Kohana_ORM::factory('auth_user_token')
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(66): Auth->create_token()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#10 [internal function]: Controller_Logon->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-14 08:30:06 --- ERROR: Database_Exception [ 1406 ]: Data too long for column 'token' at row 1 [ INSERT INTO `user_tokens` (`user_id`, `user_agent`, `token`, `created`, `expires`) VALUES ('1', '2a45585bf6fbca9e24972054edb9a714', 'be64087a892785ebc5ade82d14b114345c23de3f', 1387031406, 1388241006) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 08:30:06 --- STRACE: Database_Exception [ 1406 ]: Data too long for column 'token' at row 1 [ INSERT INTO `user_tokens` (`user_id`, `user_agent`, `token`, `created`, `expires`) VALUES ('1', '2a45585bf6fbca9e24972054edb9a714', 'be64087a892785ebc5ade82d14b114345c23de3f', 1387031406, 1388241006) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\model\auth\user\token.php(56): Kohana_ORM->create(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Model_Auth_User_Token->create(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(90): Kohana_ORM->save()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a')
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 16:52:56 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 57 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
2013-12-14 16:52:56 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php on line 57 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1685 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1685): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(57): Kohana_ORM->where('a', 'a')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login()
#3 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-14 16:58:28 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2013-12-14 16:58:28 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\cookie.php(115): Kohana_Cookie::salt('auth_user', 'Xpw6GR6tmmWJ4h8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(238): Kohana_Cookie::set('auth_user', 'Xpw6GR6tmmWJ4h8...', 1209600)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(72): Auth->set_cookie('Xpw6GR6tmmWJ4h8...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(21): Auth->login('a', 'a', true)
#4 [internal function]: Controller_Logon->action_index()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#9 {main}
2013-12-14 17:04:27 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\auth\classes\Auth.php [ 251 ]
2013-12-14 17:04:27 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\auth\classes\Auth.php [ 251 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('administrator')
#1 {main}
2013-12-14 17:08:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 17:08:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_roles')
#1 {main}
2013-12-14 17:09:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 17:09:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_roles')
#1 {main}
2013-12-14 17:09:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 17:09:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('roles')
#1 {main}
2013-12-14 17:10:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 17:10:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('roles')
#1 {main}
2013-12-14 17:11:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 17:11:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('roles')
#1 {main}
2013-12-14 17:11:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 17:11:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('roles')
#1 {main}
2013-12-14 17:12:19 --- ERROR: Database_Exception [ 1146 ]: Table 'login.role_users' doesn't exist [ SELECT `role`.`id as roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `role_users` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:12:19 --- STRACE: Database_Exception [ 1146 ]: Table 'login.role_users' doesn't exist [ SELECT `role`.`id as roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `role_users` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(265): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:12:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'role.id as roleid' in 'field list' [ SELECT `role`.`id as roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:12:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'role.id as roleid' in 'field list' [ SELECT `role`.`id as roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(265): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:12:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles.id as roleid' in 'field list' [ SELECT `roles`.`id as roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:12:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles.id as roleid' in 'field list' [ SELECT `roles`.`id as roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `roles`....', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(265): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:19:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles.id' in 'field list' [ SELECT `roles`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_usersauth_role_id` = `roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:19:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles.id' in 'field list' [ SELECT `roles`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_usersauth_role_id` = `roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `roles`....', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(265): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:19:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles_usersauth_role_id' in 'on clause' [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_usersauth_role_id` = `roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:19:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles_usersauth_role_id' in 'on clause' [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_usersauth_role_id` = `roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(265): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:20:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles.id' in 'on clause' [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_users`.`auth_role_id` = `roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:20:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles.id' in 'on clause' [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_users`.`auth_role_id` = `roles`.`id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(265): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:22:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles_users.user_id1' in 'where clause' [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_users`.`auth_role_id` = `role`.`id`) WHERE `roles_users`.`user_id1` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 17:22:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles_users.user_id1' in 'where clause' [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users` ON (`roles_users`.`auth_role_id` = `role`.`id`) WHERE `roles_users`.`user_id1` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(266): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(22): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 17:49:35 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-12-14 17:49:35 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete user_token model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(82): Kohana_ORM->delete()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(29): Auth->login('b', 'b', true)
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 17:52:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH\auth\classes\Auth.php [ 81 ]
2013-12-14 17:52:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH\auth\classes\Auth.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(81): Kohana_Core::error_handler('b', 'b', true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(29): Auth->login()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 18:02:53 --- ERROR: Database_Exception [ 1146 ]: Table 'login.roles_users1' doesn't exist [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users1` ON (`roles_users`.`auth_role_id` = `role`.`id`) WHERE `roles_users`.`user_id` = '2' AND `role`.`name` LIKE 'administrator' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 18:02:53 --- STRACE: Database_Exception [ 1146 ]: Table 'login.roles_users1' doesn't exist [ SELECT `role`.`id` AS `roleid`, `role`.* FROM `roles` AS `role` INNER JOIN `roles_users1` ON (`roles_users`.`auth_role_id` = `role`.`id`) WHERE `roles_users`.`user_id` = '2' AND `role`.`name` LIKE 'administrator' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(239): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(23): Auth->has_role('administrator')
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 18:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:51:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:51:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 18:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-14 18:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-14 21:20:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Logon::getNavigationItems() ~ APPPATH\classes\controller\logon.php [ 36 ]
2013-12-14 21:20:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Logon::getNavigationItems() ~ APPPATH\classes\controller\logon.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-12-14 21:21:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:21:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('modules')
#1 {main}
2013-12-14 21:21:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:21:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:21:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:21:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:22:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:22:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('modules')
#1 {main}
2013-12-14 21:22:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modul' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:22:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modul' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('modul')
#1 {main}
2013-12-14 21:22:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:22:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('modules')
#1 {main}
2013-12-14 21:23:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:23:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:23:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:23:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:24:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:24:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:24:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:24:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('modules')
#1 {main}
2013-12-14 21:24:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:24:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:25:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:25:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Module')
#1 {main}
2013-12-14 21:25:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:25:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Modules')
#1 {main}
2013-12-14 21:25:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:25:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Modules')
#1 {main}
2013-12-14 21:26:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Action_module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:26:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Action_module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('action_module')
#1 {main}
2013-12-14 21:27:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Action_modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:27:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Action_modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('action_modules')
#1 {main}
2013-12-14 21:27:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Action_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:27:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Action_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Action_Modules')
#1 {main}
2013-12-14 21:27:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:27:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('roles')
#1 {main}
2013-12-14 21:28:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:28:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:29:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controller' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:29:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controller' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller')
#1 {main}
2013-12-14 21:29:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:29:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:30:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:30:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:33:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:33:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:36:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:36:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:37:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:37:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:37:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:37:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:37:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_actions' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:37:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_actions' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_actions')
#1 {main}
2013-12-14 21:38:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_action' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:38:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_action' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_action')
#1 {main}
2013-12-14 21:39:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth_action' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:39:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth_action' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth_action')
#1 {main}
2013-12-14 21:40:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:40:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:40:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:40:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:40:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controller' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:40:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controller' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller')
#1 {main}
2013-12-14 21:40:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controller' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:40:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controller' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller')
#1 {main}
2013-12-14 21:40:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:40:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Controllers' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controllers')
#1 {main}
2013-12-14 21:42:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:42:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:42:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:42:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:43:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:43:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:43:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:43:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:43:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:43:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:48:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:48:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:50:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 21:50:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Module' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('module')
#1 {main}
2013-12-14 21:51:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.enabled' in 'where clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`modules`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `modules`.`enabled` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 21:51:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.enabled' in 'where clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`modules`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `modules`.`enabled` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(323): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 21:51:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modul.enabled' in 'where clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`modules`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `modul`.`enabled` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 21:51:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modul.enabled' in 'where clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`modules`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `modul`.`enabled` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(323): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 21:51:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'on clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`modules`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `module`.`enabled` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 21:51:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'on clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`modules`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `module`.`enabled` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(323): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-14 21:55:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\auth\classes\Auth.php [ 335 ]
2013-12-14 21:55:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ MODPATH\auth\classes\Auth.php [ 335 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(335): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#2 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-14 22:07:02 --- ERROR: Database_Exception [ 1146 ]: Table 'login.auth_roles' doesn't exist [ SELECT `roles_users`.`user_id` AS `id`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `modules`.`id`) INNER JOIN `auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_roles_users`.`auth_role_id` = 'auth_roles.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:07:02 --- STRACE: Database_Exception [ 1146 ]: Table 'login.auth_roles' doesn't exist [ SELECT `roles_users`.`user_id` AS `id`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `modules`.`id`) INNER JOIN `auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_roles_users`.`auth_role_id` = 'auth_roles.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `roles_u...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(317): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(345): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 22:08:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\auth\classes\Auth.php [ 319 ]
2013-12-14 22:08:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\auth\classes\Auth.php [ 319 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Auth')
#1 {main}
2013-12-14 22:08:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles_users.user_id' in 'field list' [ SELECT `roles_users`.`user_id` AS `id`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `modules`.`id` AND `auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:08:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles_users.user_id' in 'field list' [ SELECT `roles_users`.`user_id` AS `id`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `modules`.`id` AND `auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `roles_u...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(319): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(347): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 22:11:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `modules`.`id` AND `auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:11:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `modules`.`id` AND `auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(318): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(346): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 22:16:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-12-14 22:16:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('modules')
#1 {main}
2013-12-14 22:17:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:17:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(318): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(346): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 22:23:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:23:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(314): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(342): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 22:26:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:26:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(314): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(342): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-14 22:28:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-14 22:28:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(317): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(345): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}