<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-15 06:04:35 --- ERROR: Database_Exception [ 1146 ]: Table 'login.auth_roles' doesn't exist [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) INNER JOIN `auth_roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-15 06:04:35 --- STRACE: Database_Exception [ 1146 ]: Table 'login.auth_roles' doesn't exist [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) INNER JOIN `auth_roles` ON (`auth_roles_users`.`auth_role_id` = `auth_roles`.`id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(320): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(348): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-15 06:08:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) INNER JOIN `roles_users` ON (`roles_users`.`auth_role_id` = `roles`.`id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-15 06:08:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'modules.id' in 'where clause' [ SELECT `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`auth_actions`.`module_id` = `module`.`id`) INNER JOIN `auth_actions_auth_roles` ON (`auth_actions_auth_roles`.`auth_action_id` = `auth_actions`.`id`) INNER JOIN `roles` ON (`roles`.`id` = `auth_actions_auth_roles`.`auth_role_id`) INNER JOIN `roles_users` ON (`roles_users`.`auth_role_id` = `roles`.`id`) WHERE `modules`.`id` = '1' AND `auth_actions`.`type` = 'ver centros de costo' AND `auth_roles_users`.`user_id` = '1' AND `auth_actions_auth_roles`.`auth_action_id` = 'auth_actions.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(320): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(348): Auth->has_action('1', 'ver centros de ...')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#6 [internal function]: Controller_Logon->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-15 06:14:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'roles_users.user_id' in 'where clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`module`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `module`.`enabled` = '1' AND `roles_users`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-12-15 06:14:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'roles_users.user_id' in 'where clause' [ SELECT `module`.`id` AS `moduleid`, `module`.`name` AS `modulename`, `module`.`type` AS `moduletype`, `auth_actions`.`name` AS `actiontype`, `module`.* FROM `modules` AS `module` INNER JOIN `auth_actions` ON (`module`.`id` = `auth_actions`.`module_id`) WHERE `auth_actions`.`navigation_item` = '1' AND `module`.`enabled` = '1' AND `roles_users`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `module`...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(345): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#5 [internal function]: Controller_Logon->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-12-15 06:29:36 --- ERROR: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-15 06:29:36 --- STRACE: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(353): Kohana_ORM->__get('actionname')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-15 06:30:46 --- ERROR: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-15 06:30:46 --- STRACE: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(353): Kohana_ORM->__get('actionname')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-15 06:31:19 --- ERROR: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-15 06:31:19 --- STRACE: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(352): Kohana_ORM->__get('actionname')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-15 06:31:46 --- ERROR: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-12-15 06:31:46 --- STRACE: Kohana_Exception [ 0 ]: The actionname property does not exist in the Model_Module class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\auth\classes\Auth.php(352): Kohana_ORM->__get('actionname')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\logon.php(36): Auth->getNavigationItems()
#2 [internal function]: Controller_Logon->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-12-15 07:13:12 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 18 ]
2013-12-15 07:13:12 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\logon.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}