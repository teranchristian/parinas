<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-24 01:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 01:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 01:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 01:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 01:27:27 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-mssql' at 'MODPATH\kohana-mssql' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2013-06-24 01:27:27 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-mssql' at 'MODPATH\kohana-mssql' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\bootstrap.php(110): Kohana_Core::modules(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(102): require('C:\Program File...')
#2 {main}
2013-06-24 01:27:27 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-mssql' at 'MODPATH\kohana-mssql' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2013-06-24 01:27:27 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-mssql' at 'MODPATH\kohana-mssql' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\bootstrap.php(110): Kohana_Core::modules(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(102): require('C:\Program File...')
#2 {main}
2013-06-24 01:28:33 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\ARM.php [ 7 ]
2013-06-24 01:28:33 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\ARM.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 01:28:34 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\ARM.php [ 7 ]
2013-06-24 01:28:34 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\ARM.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 01:28:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Model' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-24 01:28:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Model' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('model')
#1 {main}
2013-06-24 01:28:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Model' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-24 01:28:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Model' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('model')
#1 {main}
2013-06-24 01:29:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_ARM' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-24 01:29:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_ARM' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('ARM')
#1 {main}
2013-06-24 01:29:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_ARM' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-24 01:29:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_ARM' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('ARM')
#1 {main}
2013-06-24 01:29:29 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-06-24 01:29:29 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:29:30 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-06-24 01:29:30 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:29:53 --- ERROR: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:29:53 --- STRACE: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(248): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(473): Kohana_Database_PDO->escape('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(215): Kohana_Database->quote('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MsSQL->list_columns('arms')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#9 [internal function]: Controller_ARM->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-24 01:29:53 --- ERROR: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:29:53 --- STRACE: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(248): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(473): Kohana_Database_PDO->escape('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(215): Kohana_Database->quote('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MsSQL->list_columns('arms')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#9 [internal function]: Controller_ARM->action_index()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-24 01:30:12 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-06-24 01:30:12 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:30:14 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2013-06-24 01:30:14 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:30:26 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2013-06-24 01:30:26 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('arms')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#6 [internal function]: Controller_ARM->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:30:26 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
2013-06-24 01:30:26 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\kohana\database\pdo.php [ 241 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('arms')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#6 [internal function]: Controller_ARM->action_index()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:32:21 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:32:21 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:32:23 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:32:23 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:32:42 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:32:42 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:32:43 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:32:43 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[HY000] [2003] Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:34:06 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:34:06 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:35:09 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:35:09 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:35:10 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[28000] Login incorrect. (severity 2) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:35:10 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[28000] Login incorrect. (severity 2) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:35:11 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[28000] Login incorrect. (severity 2) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 01:35:11 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[28000] Login incorrect. (severity 2) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 01:35:34 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:35:34 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:35:35 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:35:35 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:36:00 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:36:00 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:36:01 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:36:01 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:36:50 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:36:50 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:36:51 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:36:51 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:37:40 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:37:40 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:37:41 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
2013-06-24 01:37:41 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10007 'NAMES' is not a recognized SET option. [10007] (severity 5) [] ~ MODPATH\database\classes\kohana\database\pdo.php [ 130 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(130): PDO->exec('SET NAMES 'utf8...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(67): Kohana_Database_PDO->set_charset('utf8')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#10 [internal function]: Controller_ARM->action_index()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-24 01:38:53 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:38:53 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:38:54 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:38:54 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:39:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_ARMs' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-24 01:39:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_ARMs' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('ARMs')
#1 {main}
2013-06-24 01:39:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_ARMs' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-24 01:39:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_ARMs' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('ARMs')
#1 {main}
2013-06-24 01:39:56 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:39:56 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:39:56 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:39:56 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:40:59 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:40:59 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:41:00 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:41:00 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:41:18 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:41:18 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:41:19 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:41:19 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:41:42 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:41:42 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:41:43 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:41:43 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:42:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:42:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:42:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:42:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:42:43 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:42:43 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:42:43 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 01:42:43 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 01:44:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXTENDS ~ APPPATH\classes\database\pdo.php [ 7 ]
2013-06-24 01:44:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXTENDS ~ APPPATH\classes\database\pdo.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Database_PDO')
#1 {main}
2013-06-24 01:44:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXTENDS ~ APPPATH\classes\database\pdo.php [ 7 ]
2013-06-24 01:44:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXTENDS ~ APPPATH\classes\database\pdo.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Database_PDO')
#1 {main}
2013-06-24 01:44:18 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:44:18 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:44:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:44:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:28 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:28 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:47 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:47 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:47 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:46:47 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:46:58 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:46:58 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:46:59 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:46:59 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:47:16 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:47:16 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:47:17 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:47:17 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:47:27 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:47:27 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:47:28 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:47:28 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM arms] [ SHOW FULL COLUMNS FROM arms ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:47:40 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:47:40 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:47:40 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:47:40 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:03 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:03 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:04 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:04 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:05 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:05 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:06 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:06 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:20 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:20 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:21 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:21 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:26 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:26 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:26 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:26 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:33 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:33 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:34 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:34 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:42 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:42 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:43 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:43 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:48 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:48 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:49 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:49 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:56 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:56 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:48:57 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:48:57 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(45): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:49:14 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:49:14 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:49:15 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:49:15 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:49:23 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:49:23 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:49:24 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:49:24 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:49:37 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:49:37 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:49:38 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:49:38 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:50:08 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:50:08 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:50:08 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:50:08 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:52:18 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:52:18 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:52:19 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:52:19 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:52:40 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:52:40 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:52:41 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:52:41 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('arms')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:54:53 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:54:53 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('ARM')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:54:54 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:54:54 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('ARM')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:55:13 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:55:13 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('ARM')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:55:14 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:55:14 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'FULL'. [10007] (severity 5) [SHOW FULL COLUMNS FROM ARM] [ SHOW FULL COLUMNS FROM ARM ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\database\pdo.php(47): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Database_PDO->list_columns('ARM')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#7 [internal function]: Controller_ARM->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 01:55:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:55:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:55:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-06-24 01:55:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-06-24 01:55:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-06-24 01:55:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
2013-06-24 01:55:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 65 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(65): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:57 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:55:57 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:55:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:55:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:57:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:57:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:57:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 01:57:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 01:58:38 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near 'LIMIT'. [10007] (severity 5) [SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30] [ SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:58:38 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near 'LIMIT'. [10007] (severity 5) [SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30] [ SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_PDO))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#4 [internal function]: Controller_ARM->action_index()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 01:58:39 --- ERROR: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near 'LIMIT'. [10007] (severity 5) [SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30] [ SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
2013-06-24 01:58:39 --- STRACE: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 10007 Incorrect syntax near 'LIMIT'. [10007] (severity 5) [SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30] [ SELECT arm.* FROM ARM AS arm LIMIT 15 OFFSET 30 ] ~ MODPATH\database\classes\kohana\database\pdo.php [ 157 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_PDO))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#4 [internal function]: Controller_ARM->action_index()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 01:59:07 --- ERROR: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\controller\ARM.php [ 9 ]
2013-06-24 01:59:07 --- STRACE: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\controller\ARM.php [ 9 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 01:59:08 --- ERROR: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\controller\ARM.php [ 9 ]
2013-06-24 01:59:08 --- STRACE: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\classes\controller\ARM.php [ 9 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 01:59:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\ARM.php [ 9 ]
2013-06-24 01:59:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\ARM.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_ARM')
#1 {main}
2013-06-24 01:59:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\ARM.php [ 9 ]
2013-06-24 01:59:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\ARM.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_ARM')
#1 {main}
2013-06-24 02:00:53 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 02:00:53 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(12): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MsSQL))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#5 [internal function]: Controller_ARM->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:01:54 --- ERROR: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
2013-06-24 02:01:54 --- STRACE: Database_Exception [ 0 ]: SQLSTATE[01002] Unable to connect: SQL Server is unavailable or does not exist.  Unable to connect: SQL Server does not exist or network access denied. (severity 9) ~ MODPATH\database\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(12): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MsSQL))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#5 [internal function]: Controller_ARM->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:03:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 02:03:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:03:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 02:03:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL USERXERO was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 02:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL USERXERO was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 02:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL USERXERO was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 02:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL USERXERO was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 02:08:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ARM.php [ 9 ]
2013-06-24 02:08:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ARM.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_ARM')
#1 {main}
2013-06-24 02:08:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ARM.php [ 9 ]
2013-06-24 02:08:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\ARM.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_ARM')
#1 {main}
2013-06-24 02:08:40 --- ERROR: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 02:08:40 --- STRACE: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_ORM->__get('body')
#1 [internal function]: Controller_ARM->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 02:08:41 --- ERROR: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 02:08:41 --- STRACE: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_ORM->__get('body')
#1 [internal function]: Controller_ARM->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 02:09:48 --- ERROR: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 02:09:48 --- STRACE: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_ORM->__get('body')
#1 [internal function]: Controller_ARM->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 02:09:49 --- ERROR: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 02:09:49 --- STRACE: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_ORM->__get('body')
#1 [internal function]: Controller_ARM->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 02:11:39 --- ERROR: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 02:11:39 --- STRACE: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_ORM->__get('body')
#1 [internal function]: Controller_ARM->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 02:11:40 --- ERROR: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 02:11:40 --- STRACE: Kohana_Exception [ 0 ]: The body property does not exist in the Model_ARM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(9): Kohana_ORM->__get('body')
#1 [internal function]: Controller_ARM->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 02:14:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 02:14:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:14:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 02:14:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:15:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 02:15:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:15:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
2013-06-24 02:15:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\kohana\database.php [ 81 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database.php(81): Kohana_Core::error_handler(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#5 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 02:16:51 --- ERROR: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ APPPATH\classes\database\pdo.php [ 8 ]
2013-06-24 02:16:51 --- STRACE: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ APPPATH\classes\database\pdo.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Database_PDO')
#1 {main}
2013-06-24 02:16:52 --- ERROR: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ APPPATH\classes\database\pdo.php [ 8 ]
2013-06-24 02:16:52 --- STRACE: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ APPPATH\classes\database\pdo.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Database_PDO')
#1 {main}
2013-06-24 02:17:28 --- ERROR: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
2013-06-24 02:17:28 --- STRACE: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2013-06-24 02:17:29 --- ERROR: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
2013-06-24 02:17:29 --- STRACE: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2013-06-24 02:18:26 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 02:18:26 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 02:18:27 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 02:18:27 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 02:18:50 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'user'. [10007] (severity 5) [SELECT arm.* FROM user AS arm] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 02:18:50 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'user'. [10007] (severity 5) [SELECT arm.* FROM user AS arm] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#4 [internal function]: Controller_ARM->action_index()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 02:18:51 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'user'. [10007] (severity 5) [SELECT arm.* FROM user AS arm] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 02:18:51 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Incorrect syntax near the keyword 'user'. [10007] (severity 5) [SELECT arm.* FROM user AS arm] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#4 [internal function]: Controller_ARM->action_index()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 02:22:08 --- ERROR: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
2013-06-24 02:22:08 --- STRACE: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2013-06-24 02:22:09 --- ERROR: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
2013-06-24 02:22:09 --- STRACE: ErrorException [ 1 ]: Class 'Database_PDO' not found ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2013-06-24 02:25:54 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 02:25:54 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 02:25:55 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-24 02:25:55 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('ARM')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory()
#6 [internal function]: Controller_ARM->action_index(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 04:46:45 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\ARM\new.php on line 5 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2013-06-24 04:46:45 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\ARM\new.php on line 5 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\form.php(93): Kohana_Core::error_handler('FNAME', 'asd', 'sdf')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\ARM\new.php(5): Kohana_Form::input('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(16): Kohana_Response->body()
#7 [internal function]: Controller_ARM->action_new(Object(Controller_ARM))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 04:46:46 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\ARM\new.php on line 5 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2013-06-24 04:46:46 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\ARM\new.php on line 5 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\form.php(93): Kohana_Core::error_handler('FNAME', 'asd', 'sdf')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\ARM\new.php(5): Kohana_Form::input('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(16): Kohana_Response->body()
#7 [internal function]: Controller_ARM->action_new(Object(Controller_ARM))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-06-24 04:49:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_ARM::redirect() ~ APPPATH\classes\controller\ARM.php [ 19 ]
2013-06-24 04:49:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_ARM::redirect() ~ APPPATH\classes\controller\ARM.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 04:51:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_ARM::redirect() ~ APPPATH\classes\controller\ARM.php [ 19 ]
2013-06-24 04:51:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_ARM::redirect() ~ APPPATH\classes\controller\ARM.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 04:56:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\ARM.php [ 13 ]
2013-06-24 04:56:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\ARM.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_ARM')
#1 {main}
2013-06-24 04:56:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\ARM.php [ 13 ]
2013-06-24 04:56:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\ARM.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_ARM')
#1 {main}
2013-06-24 04:57:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2013-06-24 04:57:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(18): Kohana_ORM->save()
#3 [internal function]: Controller_ARM->action_new()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-24 05:15:27 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10005 DBPROCESS is dead or not enabled. [10005] (severity 1) [select * from sys.messages where  language_id=1033 and message_id=10025] ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-06-24 05:15:27 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10005 DBPROCESS is dead or not enabled. [10005] (severity 1) [select * from sys.messages where  language_id=1033 and message_id=10025] ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(215): Kohana_Database_MsSQL->query(1, 'SELECT * FROM I...', false)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MsSQL->list_columns('ARM')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM::factory('ARM')
#8 [internal function]: Controller_ARM->action_index()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-06-24 05:15:48 --- ERROR: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10005 DBPROCESS is dead or not enabled. [10005] (severity 1) [select * from sys.messages where  language_id=1033 and message_id=10025] ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
2013-06-24 05:15:48 --- STRACE: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: 10005 DBPROCESS is dead or not enabled. [10005] (severity 1) [select * from sys.messages where  language_id=1033 and message_id=10025] ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 80 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\kohana-mssql\classes\kohana\database\mssql.php(80): PDO->query('select * from s...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT arm.* FR...', 'Model_ARM', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MsSQL))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\ARM.php(7): Kohana_ORM->find_all()
#5 [internal function]: Controller_ARM->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_ARM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL APM was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL APM was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL APM was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL APM was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:24:12 --- ERROR: View_Exception [ 0 ]: The requested view article/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 05:24:12 --- STRACE: View_Exception [ 0 ]: The requested view article/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('article/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(6): Kohana_View->__construct('article/index')
#2 [internal function]: Controller_APM->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 05:24:13 --- ERROR: View_Exception [ 0 ]: The requested view article/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 05:24:13 --- STRACE: View_Exception [ 0 ]: The requested view article/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('article/index')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(6): Kohana_View->__construct('article/index')
#2 [internal function]: Controller_APM->action_index()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 05:28:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
2013-06-24 05:28:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:28:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
2013-06-24 05:28:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:28:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
2013-06-24 05:28:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:28:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
2013-06-24 05:28:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:28:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
2013-06-24 05:28:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:28:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
2013-06-24 05:28:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_APM' not found ~ APPPATH\classes\controller\APM.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:28:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 5 ]
2013-06-24 05:28:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 5 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(5): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body()
#6 [internal function]: Controller_APM->action_new(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:28:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 5 ]
2013-06-24 05:28:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 5 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(5): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body()
#6 [internal function]: Controller_APM->action_new(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:31:32 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_APM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 05:31:32 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_APM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(5): Kohana_ORM->__get('id')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_APM->action_new()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:31:33 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_APM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-24 05:31:33 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_APM class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(5): Kohana_ORM->__get('id')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_APM->action_new()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:32:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 8 ]
2013-06-24 05:32:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 8 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(8): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body()
#6 [internal function]: Controller_APM->action_new(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:32:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 8 ]
2013-06-24 05:32:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 8 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(8): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body()
#6 [internal function]: Controller_APM->action_new(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:32:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 13 ]
2013-06-24 05:32:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 13 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(13): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body()
#6 [internal function]: Controller_APM->action_new(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:32:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 13 ]
2013-06-24 05:32:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\APM\edit.php [ 13 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\views\APM\edit.php(13): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(17): Kohana_Response->body()
#6 [internal function]: Controller_APM->action_new(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-24 05:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/post was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/7 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/7 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/7 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/7 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 05:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 05:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 05:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 05:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 05:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL APM/edit/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 05:39:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 39 ]
2013-06-24 05:39:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:39:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 39 ]
2013-06-24 05:39:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH\classes\controller\APM.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 05:40:07 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:40:07 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(39): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:40:08 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:40:08 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(39): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:42:34 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:42:34 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:42:35 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:42:35 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:43:17 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:43:17 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:43:18 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:43:18 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:49:32 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:49:32 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:49:33 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:49:33 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:49:36 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:49:36 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 05:49:37 --- ERROR: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
2013-06-24 05:49:37 --- STRACE: Database_Exception [ HY000 ]: [HY000] SQLSTATE[HY000]: General error: 10007 Invalid column name 'id'. [10007] (severity 5) [SELECT TOP 1 apm.* FROM APM AS apm WHERE apm.id = '6' ] ( The provider indicated an invalid handle was used. ) ~ MODPATH\kohana-mssql\classes\kohana\database\mssql.php [ 83 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MsSQL->query(1, 'SELECT apm.* FR...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MsSQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\APM.php(41): Kohana_ORM->__construct('6')
#5 [internal function]: Controller_APM->action_edit()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_APM))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-24 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 20:53:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:53:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/123 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/asd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/asd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/asd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/asd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 20:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL basic/as was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 20:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL basic/as was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:08:41 --- ERROR: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:08:41 --- STRACE: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('demo/template')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('demo/template', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\controller\template.php(33): Kohana_View::factory('demo/template')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\demo.php(16): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Demo->before()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Demo))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 21:10:17 --- ERROR: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:10:17 --- STRACE: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('demo/template')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('demo/template', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\controller\template.php(33): Kohana_View::factory('demo/template')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\demo.php(16): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Demo->before()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 21:10:25 --- ERROR: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:10:25 --- STRACE: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('demo/template')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('demo/template', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\controller\template.php(33): Kohana_View::factory('demo/template')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\demo.php(16): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Demo->before()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 21:11:40 --- ERROR: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:11:40 --- STRACE: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('demo/template')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('demo/template', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\controller\template.php(33): Kohana_View::factory('demo/template')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\demo.php(16): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Demo->before()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 21:11:57 --- ERROR: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:11:57 --- STRACE: View_Exception [ 0 ]: The requested view demo/template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('demo/template')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('demo/template', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\controller\template.php(33): Kohana_View::factory('demo/template')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\demo.php(16): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Demo->before()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-06-24 21:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 21:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:13:02 --- ERROR: View_Exception [ 0 ]: The requested view page/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:13:02 --- STRACE: View_Exception [ 0 ]: The requested view page/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('page/home')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('page/home', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\application\classes\controller\page.php(9): Kohana_View::factory('page/home')
#3 [internal function]: Controller_Page->action_home()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-24 21:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 21:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-24 21:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:21:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\static.php [ 20 ]
2013-06-24 21:21:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\static.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-24 21:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 21:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 21:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-24 21:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-24 21:44:01 --- ERROR: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:44:01 --- STRACE: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('header')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(52): Kohana_View->__construct('header')
#2 [internal function]: Controller_Demo->after()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 21:44:04 --- ERROR: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 21:44:04 --- STRACE: View_Exception [ 0 ]: The requested view header could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('header')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(52): Kohana_View->__construct('header')
#2 [internal function]: Controller_Demo->after()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 21:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:53:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Page::$type ~ APPPATH\classes\controller\demo.php [ 56 ]
2013-06-24 21:53:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Page::$type ~ APPPATH\classes\controller\demo.php [ 56 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(56): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Page))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 21:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 21:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 21:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 5 ]
2013-06-24 22:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 5 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\header.php(5): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(62): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-24 22:00:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 5 ]
2013-06-24 22:00:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 5 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\header.php(5): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(62): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-24 22:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:02:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 24 ]
2013-06-24 22:02:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 24 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(24): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->before(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 22:03:14 --- ERROR: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 57 ]
2013-06-24 22:03:14 --- STRACE: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 57 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(57): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 22:04:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 57 ]
2013-06-24 22:04:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 57 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(57): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 22:04:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 57 ]
2013-06-24 22:04:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\demo.php [ 57 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(57): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 22:29:39 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\demo.php [ 56 ]
2013-06-24 22:29:39 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\demo.php [ 56 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(56): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 22:29:59 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\demo.php [ 56 ]
2013-06-24 22:29:59 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\demo.php [ 56 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(56): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-24 22:30:23 --- ERROR: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 22:30:23 --- STRACE: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(334): Kohana_View->set_filename(true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(58): Kohana_View->render(true)
#2 [internal function]: Controller_Demo->after()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 22:30:48 --- ERROR: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 22:30:48 --- STRACE: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(334): Kohana_View->set_filename(true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(58): Kohana_View->render(true)
#2 [internal function]: Controller_Demo->after()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 22:30:50 --- ERROR: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 22:30:50 --- STRACE: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(334): Kohana_View->set_filename(true)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(58): Kohana_View->render(true)
#2 [internal function]: Controller_Demo->after()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Logon))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-24 22:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:33:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:33:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:33:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH\views\header.php [ 8 ]
2013-06-24 22:33:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH\views\header.php [ 8 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\header.php(8): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-24 22:34:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\header.php [ 12 ]
2013-06-24 22:34:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\header.php [ 12 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\header.php(12): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-24 22:38:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\demo.php [ 58 ]
2013-06-24 22:38:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\demo.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Demo')
#1 {main}
2013-06-24 22:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 22:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-24 22:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/public/css/xero.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-24 23:11:06 --- ERROR: View_Exception [ 0 ]: The requested view footer could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-24 23:11:06 --- STRACE: View_Exception [ 0 ]: The requested view footer could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(137): Kohana_View->set_filename('footer')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(30): Kohana_View->__construct('footer', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(64): Kohana_View::factory('footer')
#3 [internal function]: Controller_Demo->after()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}