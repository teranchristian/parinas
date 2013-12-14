<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-11-30 03:09:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 39 ]
2013-11-30 03:09:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 03:09:40 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 39 ]
2013-11-30 03:09:40 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 03:10:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 40 ]
2013-11-30 03:10:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 03:10:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 40 ]
2013-11-30 03:10:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Area as array ~ APPPATH\views\centroCosto\nuevo.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 03:11:56 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
2013-11-30 03:11:56 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1247): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Kohana_ORM->update()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:11:57 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
2013-11-30 03:11:57 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1247): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Kohana_ORM->update()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:16:44 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:16:44 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(30): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:16:44 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:16:44 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(30): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:16:48 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
2013-11-30 03:16:48 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
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
2013-11-30 03:16:48 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
2013-11-30 03:16:48 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
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
2013-11-30 03:16:53 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
2013-11-30 03:16:53 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
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
2013-11-30 03:16:53 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
2013-11-30 03:16:53 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 56 ]
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
2013-11-30 03:17:54 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:17:54 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:17:54 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:17:54 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:18 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:18:18 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:18 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:18:18 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:31 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:18:31 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:32 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:18:32 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:37 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:18:37 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:37 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
2013-11-30 03:18:37 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_centroCosto::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\centroCosto.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(4): Kohana_Core::error_handler('Model_centroCos...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_centroCos...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('centroCosto')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(29): Kohana_Model::factory()
#5 [internal function]: Controller_CentroCosto->action_editar(Object(Controller_CentroCosto))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 03:18:53 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
2013-11-30 03:18:53 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1247): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Kohana_ORM->update()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:18:54 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
2013-11-30 03:18:54 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php on line 39 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1247 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1247): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Kohana_ORM->update()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:19:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'centrocosto.id' in 'where clause' [ SELECT `centrocosto`.* FROM `centrocosto` AS `centrocosto` WHERE `centrocosto`.`id` = '2' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 03:19:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'centrocosto.id' in 'where clause' [ SELECT `centrocosto`.* FROM `centrocosto` AS `centrocosto` WHERE `centrocosto`.`id` = '2' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `centroc...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('2')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(18): Kohana_ORM::factory('centroCosto', '2')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto(Array, '2')
#7 [internal function]: Controller_CentroCosto->action_guardar()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2013-11-30 03:19:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'centrocosto.id' in 'where clause' [ SELECT `centrocosto`.* FROM `centrocosto` AS `centrocosto` WHERE `centrocosto`.`id` = '2' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 03:19:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'centrocosto.id' in 'where clause' [ SELECT `centrocosto`.* FROM `centrocosto` AS `centrocosto` WHERE `centrocosto`.`id` = '2' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `centroc...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('2')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(18): Kohana_ORM::factory('centroCosto', '2')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto(Array, '2')
#7 [internal function]: Controller_CentroCosto->action_guardar()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2013-11-30 03:23:03 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::set(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php on line 25 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 645 ]
2013-11-30 03:23:03 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::set(), called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php on line 25 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 645 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(645): Kohana_Core::error_handler(Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(25): Kohana_ORM->set(Array, '2')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto()
#3 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-30 03:23:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  idArea ~ APPPATH\classes\model\centroCosto.php [ 22 ]
2013-11-30 03:23:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  idArea ~ APPPATH\classes\model\centroCosto.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(22): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:56:04 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\model\centroCosto.php [ 24 ]
2013-11-30 03:56:04 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\model\centroCosto.php [ 24 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(24): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:56:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\model\centroCosto.php [ 23 ]
2013-11-30 03:56:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\model\centroCosto.php [ 23 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(23): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:56:26 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\model\centroCosto.php [ 23 ]
2013-11-30 03:56:26 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\model\centroCosto.php [ 23 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(23): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:56:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\model\centroCosto.php [ 23 ]
2013-11-30 03:56:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\model\centroCosto.php [ 23 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(23): Kohana_Core::error_handler(Array, '2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(39): Model_centroCosto->updateCentroCosto()
#2 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 03:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-30 03:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-30 03:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-11-30 03:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-30 03:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-30 03:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-11-30 03:59:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::eliminar() ~ APPPATH\classes\controller\centroCosto.php [ 47 ]
2013-11-30 03:59:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::eliminar() ~ APPPATH\classes\controller\centroCosto.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:06:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
2013-11-30 04:06:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_obra')
#1 {main}
2013-11-30 04:06:13 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
2013-11-30 04:06:13 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\obra.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_obra')
#1 {main}
2013-11-30 04:06:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus ` FROM `Obra` JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 04:06:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus ` FROM `Obra` JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(14): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#3 [internal function]: Controller_Obra->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-30 04:06:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus ` FROM `Obra` JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 04:06:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus ` FROM `Obra` JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(14): Kohana_Database_Query->execute()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#3 [internal function]: Controller_Obra->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-11-30 04:13:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::select() ~ APPPATH\classes\model\obra.php [ 16 ]
2013-11-30 04:13:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::select() ~ APPPATH\classes\model\obra.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:13:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::select() ~ APPPATH\classes\model\obra.php [ 16 ]
2013-11-30 04:13:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::select() ~ APPPATH\classes\model\obra.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:13:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 17 ]
2013-11-30 04:13:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:13:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 17 ]
2013-11-30 04:13:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:14:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 18 ]
2013-11-30 04:14:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:14:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 18 ]
2013-11-30 04:14:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:14:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 21 ]
2013-11-30 04:14:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:14:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 21 ]
2013-11-30 04:14:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:18:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 20 ]
2013-11-30 04:18:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:18:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 20 ]
2013-11-30 04:18:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::join() ~ APPPATH\classes\model\obra.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:18:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::order_by() ~ APPPATH\classes\model\obra.php [ 23 ]
2013-11-30 04:18:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::order_by() ~ APPPATH\classes\model\obra.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:18:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::order_by() ~ APPPATH\classes\model\obra.php [ 23 ]
2013-11-30 04:18:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::order_by() ~ APPPATH\classes\model\obra.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:19:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
2013-11-30 04:19:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:19:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
2013-11-30 04:19:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:20:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
2013-11-30 04:20:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 04:20:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
2013-11-30 04:20:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 05:03:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 18 ]
2013-11-30 05:03:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 05:03:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 18 ]
2013-11-30 05:03:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Obra::find_all() ~ APPPATH\classes\model\obra.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-11-30 05:03:34 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Obra::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\obra.php [ 4 ]
2013-11-30 05:03:34 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Obra::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\obra.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(4): Kohana_Core::error_handler('Model_obra')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_obra')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('obra')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Kohana_Model::factory()
#5 [internal function]: Controller_Obra->action_index(Object(Controller_Obra))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:03:34 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Obra::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\obra.php [ 4 ]
2013-11-30 05:03:34 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Obra::update() should be compatible with that of Kohana_ORM::update() ~ APPPATH\classes\model\obra.php [ 4 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(4): Kohana_Core::error_handler('Model_obra')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\core.php(496): require('C:\Program File...')
#2 [internal function]: Kohana_Core::auto_load('Model_obra')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): spl_autoload_call('obra')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Kohana_Model::factory()
#5 [internal function]: Controller_Obra->action_index(Object(Controller_Obra))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:03:44 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
2013-11-30 05:03:44 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:03:44 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
2013-11-30 05:03:44 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:04:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:04:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:04:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:04:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:04:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
2013-11-30 05:04:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:04:30 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
2013-11-30 05:04:30 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:04:58 --- ERROR: Kohana_Exception [ 0 ]: The codigo property does not exist in the Model_Obra class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-11-30 05:04:58 --- STRACE: Kohana_Exception [ 0 ]: The codigo property does not exist in the Model_Obra class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(46): Kohana_ORM->__get('codigo')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Obra))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-11-30 05:04:59 --- ERROR: Kohana_Exception [ 0 ]: The codigo property does not exist in the Model_Obra class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-11-30 05:04:59 --- STRACE: Kohana_Exception [ 0 ]: The codigo property does not exist in the Model_Obra class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\obra\index.php(46): Kohana_ORM->__get('codigo')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Obra))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2013-11-30 05:05:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:05:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:05:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:05:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:07:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:07:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:07:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:07:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:07:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion  ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion  `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:07:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion  ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion  `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:07:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion  ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion  `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:07:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion  ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion  `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:07:27 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:07:27 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:07:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:07:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:07:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:07:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:07:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-11-30 05:07:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'estadoObra.descripcion as descripcionEstatus ' in 'field list' [ SELECT `obra`.`idObra`, `centroCosto`.`codigo`, `Obra`.`descripcion`, `obra`.`fechaInicio`, `obra`.`fechaFin`, `estadoObra`.`descripcion as descripcionEstatus `, `obra`.* FROM `obra` AS `obra` INNER JOIN `centroCosto` ON (`centroCosto`.`idCentroCosto` = `Obra`.`idCentroCosto`) INNER JOIN `estadoObra` ON (`estadoObra`.`idEstadoObra` = `Obra`.`idEstadoObra`) WHERE `Obra`.`status` = 'ACTIVO' ORDER BY `codigo` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `obra`.`...', 'Model_Obra', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(24): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(6): Model_Obra->getObraList()
#5 [internal function]: Controller_Obra->action_index()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2013-11-30 05:11:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:11:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:11:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:33 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:11:33 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:34 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:11:34 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:11:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:37 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
2013-11-30 05:11:37 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 61 ]
2013-11-30 05:11:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:11:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 61 ]
2013-11-30 05:11:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:12:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 64 ]
2013-11-30 05:12:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:12:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 64 ]
2013-11-30 05:12:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Obra as array ~ APPPATH\views\obra\index.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:18:22 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
2013-11-30 05:18:22 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:18:23 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
2013-11-30 05:18:23 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:19:34 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
2013-11-30 05:19:34 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:19:35 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
2013-11-30 05:19:35 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_centroCosto as array ~ APPPATH\views\obra\nuevo.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-11-30 05:21:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  idArea ~ APPPATH\classes\model\obra.php [ 57 ]
2013-11-30 05:21:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  idArea ~ APPPATH\classes\model\obra.php [ 57 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(57): Kohana_Core::error_handler(Array, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(39): Model_Obra->guardar()
#2 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2013-11-30 05:21:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  idArea ~ APPPATH\classes\model\obra.php [ 57 ]
2013-11-30 05:21:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  idArea ~ APPPATH\classes\model\obra.php [ 57 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(57): Kohana_Core::error_handler(Array, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(39): Model_Obra->guardar()
#2 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}