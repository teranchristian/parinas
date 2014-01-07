<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-01-02 03:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/localization/es.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 03:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/localization/es.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 03:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/localization/es.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 03:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/localization/es.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 03:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/localization/es.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 03:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/localization/es.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 03:21:24 --- ERROR: Database_Exception [ 1364 ]: Field 'idCentroCosto' doesn't have a default value [ INSERT INTO `obra` (`descripcion`, `moneda`, `montoContrato`, `idEstadoObra`) VALUES ('', '', '', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-01-02 03:21:24 --- STRACE: Database_Exception [ 1364 ]: Field 'idCentroCosto' doesn't have a default value [ INSERT INTO `obra` (`descripcion`, `moneda`, `montoContrato`, `idEstadoObra`) VALUES ('', '', '', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ob...', false, Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(67): Kohana_ORM->save()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(42): Model_Obra->guardar(Array, NULL)
#5 [internal function]: Controller_Obra->action_guardar()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Obra))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#10 {main}
2014-01-02 03:21:25 --- ERROR: ErrorException [ 8 ]: Undefined index:  descripcion ~ APPPATH\classes\model\obra.php [ 61 ]
2014-01-02 03:21:25 --- STRACE: ErrorException [ 8 ]: Undefined index:  descripcion ~ APPPATH\classes\model\obra.php [ 61 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\obra.php(61): Kohana_Core::error_handler(Array, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\obra.php(42): Model_Obra->guardar()
#2 [internal function]: Controller_Obra->action_guardar(Object(Controller_Obra))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#7 {main}
2014-01-02 03:38:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\centroCosto.php [ 38 ]
2014-01-02 03:38:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\centroCosto.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 03:38:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\centroCosto.php [ 38 ]
2014-01-02 03:38:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\centroCosto.php [ 38 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(38): Kohana_Core::error_handler()
#1 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 03:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 03:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 03:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 03:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 03:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 03:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assests/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jqueryvalidation/media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jqueryvalidation/media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jqueryvalidation/media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jqueryvalidation/media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 04:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 04:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/validation.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 05:06:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 114 ]
2014-01-02 05:06:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 114 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 05:06:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 114 ]
2014-01-02 05:06:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 114 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(114): Kohana_Core::error_handler()
#1 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 05:06:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 115 ]
2014-01-02 05:06:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 115 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Core::error_handler()
#1 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 05:06:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 115 ]
2014-01-02 05:06:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 115 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Core::error_handler()
#1 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 05:09:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 115 ]
2014-01-02 05:09:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\controller\template\webPage.php [ 115 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Core::error_handler()
#1 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#6 {main}
2014-01-02 05:15:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
2014-01-02 05:15:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:15:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
2014-01-02 05:15:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:15:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
2014-01-02 05:15:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:15:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
2014-01-02 05:15:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:16:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\views\template\header.php [ 22 ]
2014-01-02 05:16:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\views\template\header.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(22): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:16:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\views\template\header.php [ 22 ]
2014-01-02 05:16:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\views\template\header.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(22): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:16:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template\header.php [ 22 ]
2014-01-02 05:16:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template\header.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(22): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:16:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template\header.php [ 22 ]
2014-01-02 05:16:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template\header.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(22): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:21:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 29 ]
2014-01-02 05:21:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:21:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 29 ]
2014-01-02 05:21:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:21:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 29 ]
2014-01-02 05:21:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\template\header.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2014-01-02 05:23:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\header.php [ 28 ]
2014-01-02 05:23:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\header.php [ 28 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(28): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:23:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\header.php [ 28 ]
2014-01-02 05:23:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\header.php [ 28 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(28): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:23:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\header.php [ 28 ]
2014-01-02 05:23:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\header.php [ 28 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\header.php(28): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(1): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Obra))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:43:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\centroCosto.php [ 21 ]
2014-01-02 05:43:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\centroCosto.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_cent...')
#1 {main}
2014-01-02 05:43:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\centroCosto.php [ 21 ]
2014-01-02 05:43:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\centroCosto.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_cent...')
#1 {main}
2014-01-02 05:43:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::validar() ~ APPPATH\classes\controller\centroCosto.php [ 20 ]
2014-01-02 05:43:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::validar() ~ APPPATH\classes\controller\centroCosto.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-02 05:43:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::validar() ~ APPPATH\classes\controller\centroCosto.php [ 20 ]
2014-01-02 05:43:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_centroCosto::validar() ~ APPPATH\classes\controller\centroCosto.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-01-02 05:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 05:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 05:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 05:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 05:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 05:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 05:51:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\centroCosto\nuevo.php [ 35 ]
2014-01-02 05:51:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\centroCosto\nuevo.php [ 35 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(35): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 05:51:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\centroCosto\nuevo.php [ 35 ]
2014-01-02 05:51:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\centroCosto\nuevo.php [ 35 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\centroCosto\nuevo.php(35): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(128): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_CentroCosto))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 06:18:01 --- ERROR: ReflectionException [ 0 ]: Function 2() does not exist ~ MODPATH\orm\classes\kohana\orm.php [ 1115 ]
2014-01-02 06:18:01 --- STRACE: ReflectionException [ 0 ]: Function 2() does not exist ~ MODPATH\orm\classes\kohana\orm.php [ 1115 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1115): ReflectionFunction->__construct('2')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('descripcion', 'ADMINISTRACION ...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('descripcion', 'ADMINISTRACION ...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('descripcion', 'ADMINISTRACION ...')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(29): Kohana_ORM->values(Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(43): Model_centroCosto->guardar(Array, '2')
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-02 06:25:31 --- ERROR: ReflectionException [ 0 ]: Function preg_replace('/\s+/', '', 2)() does not exist ~ MODPATH\orm\classes\kohana\orm.php [ 1115 ]
2014-01-02 06:25:31 --- STRACE: ReflectionException [ 0 ]: Function preg_replace('/\s+/', '', 2)() does not exist ~ MODPATH\orm\classes\kohana\orm.php [ 1115 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1115): ReflectionFunction->__construct('preg_replace('/...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('descripcion', 'ADMINISTRACION ...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('descripcion', 'ADMINISTRACION ...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('descripcion', 'ADMINISTRACION ...')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(29): Kohana_ORM->values(Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(43): Model_centroCosto->guardar(Array, '2')
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-02 06:25:48 --- ERROR: ReflectionException [ 0 ]: Function preg_replace('/\s+/', '', 2)() does not exist ~ MODPATH\orm\classes\kohana\orm.php [ 1115 ]
2014-01-02 06:25:48 --- STRACE: ReflectionException [ 0 ]: Function preg_replace('/\s+/', '', 2)() does not exist ~ MODPATH\orm\classes\kohana\orm.php [ 1115 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1115): ReflectionFunction->__construct('preg_replace('/...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('descripcion', 'ADMINISTRACION ...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('descripcion', 'ADMINISTRACION ...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('descripcion', 'ADMINISTRACION ...')
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(29): Kohana_ORM->values(Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(43): Model_centroCosto->guardar(Array, '2')
#6 [internal function]: Controller_CentroCosto->action_guardar()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CentroCosto))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-02 06:27:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\kohana\orm.php [ 1098 ]
2014-01-02 06:27:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\kohana\orm.php [ 1098 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1098): Kohana_Core::error_handler('descripcion', 'ADMINISTRACION ...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('descripcion', 'ADMINISTRACION ...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('descripcion', 'ADMINISTRACION ...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set(Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(29): Kohana_ORM->values(Array, '2')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(43): Model_centroCosto->guardar()
#6 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-02 06:27:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\kohana\orm.php [ 1098 ]
2014-01-02 06:27:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\orm\classes\kohana\orm.php [ 1098 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1098): Kohana_Core::error_handler('descripcion', 'ADMINISTRACION ...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('descripcion', 'ADMINISTRACION ...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('descripcion', 'ADMINISTRACION ...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set(Array)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\model\centroCosto.php(29): Kohana_ORM->values(Array, '2')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\centroCosto.php(43): Model_centroCosto->guardar()
#6 [internal function]: Controller_CentroCosto->action_guardar(Object(Controller_CentroCosto))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2014-01-02 06:34:14 --- ERROR: ErrorException [ 1 ]: Call to undefined function reg_replace() ~ APPPATH\classes\model\centroCosto.php [ 25 ]
2014-01-02 06:34:14 --- STRACE: ErrorException [ 1 ]: Call to undefined function reg_replace() ~ APPPATH\classes\model\centroCosto.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('011        asd ...')
#1 {main}
2014-01-02 07:13:19 --- ERROR: View_Exception [ 0 ]: The requested view usuario/password could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-01-02 07:13:19 --- STRACE: View_Exception [ 0 ]: The requested view usuario/password could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('usuario/passwor...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('usuario/passwor...', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(13): Kohana_View::factory('usuario/passwor...')
#3 [internal function]: Controller_Usuario->action_password()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-02 07:13:21 --- ERROR: View_Exception [ 0 ]: The requested view usuario/password could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2014-01-02 07:13:21 --- STRACE: View_Exception [ 0 ]: The requested view usuario/password could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('usuario/passwor...')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('usuario/passwor...', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(13): Kohana_View::factory('usuario/passwor...')
#3 [internal function]: Controller_Usuario->action_password()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2014-01-02 07:14:13 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-01-02 07:14:13 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(6): Kohana_Model::factory('usuario')
#7 [internal function]: Controller_Usuario->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2014-01-02 07:14:14 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-01-02 07:14:14 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(6): Kohana_Model::factory('usuario')
#7 [internal function]: Controller_Usuario->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2014-01-02 07:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2014-01-02 07:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/action/prodAct.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2014-01-02 07:14:51 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-01-02 07:14:51 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(6): Kohana_Model::factory('usuario')
#7 [internal function]: Controller_Usuario->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2014-01-02 07:14:52 --- ERROR: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2014-01-02 07:14:52 --- STRACE: Database_Exception [ 1146 ]: Table 'mycparinas.usuario' doesn't exist [ SHOW FULL COLUMNS FROM `usuario` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuario')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\model.php(26): Kohana_ORM->__construct()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\usuario.php(6): Kohana_Model::factory('usuario')
#7 [internal function]: Controller_Usuario->action_index()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#12 {main}
2014-01-02 07:16:11 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
2014-01-02 07:16:11 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_usua...')
#1 {main}
2014-01-02 07:16:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
2014-01-02 07:16:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Demo' not found ~ APPPATH\classes\controller\usuario.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_usua...')
#1 {main}
2014-01-02 07:16:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\usuario\password.php [ 90 ]
2014-01-02 07:16:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\usuario\password.php [ 90 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\usuario\password.php(90): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Usuario))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 07:16:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\usuario\password.php [ 90 ]
2014-01-02 07:16:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: rolList ~ APPPATH\views\usuario\password.php [ 90 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\usuario\password.php(90): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Usuario))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 07:17:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: areaList ~ APPPATH\views\usuario\password.php [ 16 ]
2014-01-02 07:17:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: areaList ~ APPPATH\views\usuario\password.php [ 16 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\usuario\password.php(16): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Usuario))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}
2014-01-02 07:17:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: areaList ~ APPPATH\views\usuario\password.php [ 16 ]
2014-01-02 07:17:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: areaList ~ APPPATH\views\usuario\password.php [ 16 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\usuario\password.php(16): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(115): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_webPage->after(Object(Controller_Usuario))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#14 {main}