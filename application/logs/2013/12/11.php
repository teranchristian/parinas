<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-12-11 03:41:50 --- ERROR: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\views\orden\logistica.php [ 69 ]
2013-12-11 03:41:50 --- STRACE: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\views\orden\logistica.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-12-11 03:41:51 --- ERROR: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\views\orden\logistica.php [ 69 ]
2013-12-11 03:41:51 --- STRACE: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\views\orden\logistica.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-12-11 03:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-11 03:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_inset-hard_100_fcfdfd_1x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-11 03:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-11 03:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_gloss-wave_55_5c9ccc_500x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-11 03:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-12-11 03:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/ui-bg_flat_0_aaaaaa_40x100.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#1 {main}
2013-12-11 05:54:39 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-11 05:54:39 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View::factory('editor')
#3 [internal function]: Controller_Orden->action_logistica()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-11 05:55:01 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-11 05:55:01 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View::factory('editor')
#3 [internal function]: Controller_Orden->action_logistica()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-11 05:55:04 --- ERROR: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-12-11 05:55:04 --- STRACE: View_Exception [ 0 ]: The requested view editor could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(137): Kohana_View->set_filename('editor')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(30): Kohana_View->__construct('editor', NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View::factory('editor')
#3 [internal function]: Controller_Orden->action_logistica()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Orden))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#8 {main}
2013-12-11 05:56:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:56:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\nuevo.php(89): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:57:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:57:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:57:25 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:57:25 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:57:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:57:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:57:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:57:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:58:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:58:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:58:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:58:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 05:59:02 --- ERROR: Kohana_Exception [ 0 ]: Editor driver custom not found! ~ MODPATH\ckeditor\classes\Editor\Core.php [ 136 ]
2013-12-11 05:59:02 --- STRACE: Kohana_Exception [ 0 ]: Editor driver custom not found! ~ MODPATH\ckeditor\classes\Editor\Core.php [ 136 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core::factory('custom')
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
2013-12-11 05:59:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 05:59:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 06:00:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\ckeditor\classes\Editor\Core.php [ 132 ]
2013-12-11 06:00:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\ckeditor\classes\Editor\Core.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-12-11 06:00:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\ckeditor\classes\Editor\Core.php [ 132 ]
2013-12-11 06:00:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\ckeditor\classes\Editor\Core.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-12-11 06:05:00 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ MODPATH\ckeditor\classes\Editor\Core.php [ 133 ]
2013-12-11 06:05:00 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ MODPATH\ckeditor\classes\Editor\Core.php [ 133 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2013-12-11 06:05:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
2013-12-11 06:05:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(63): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\orden\logistica.php(1): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\template\default.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\template\webPage.php(104): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_webPage->after(Object(Controller_Orden))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#15 {main}
2013-12-11 06:07:47 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
2013-12-11 06:07:47 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(63): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:07:57 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
2013-12-11 06:07:57 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(63): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:08:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
2013-12-11 06:08:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(63): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:08:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
2013-12-11 06:08:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(63): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:08:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
2013-12-11 06:08:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 63 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(63): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:15:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 06:15:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:16:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
2013-12-11 06:16:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH\ckeditor\classes\Editor\Core.php [ 66 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\modules\ckeditor\classes\Editor\Core.php(66): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\views\editor.php(3): Editor_Core->render('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\application\classes\controller\orden.php(58): Kohana_View->__toString()
#6 [internal function]: Controller_Orden->action_logistica(Object(Controller_Orden))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\parinas\index.php(109): Kohana_Request->execute()
#11 {main}
2013-12-11 06:16:39 --- ERROR: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\views\orden\logistica.php [ 71 ]
2013-12-11 06:16:39 --- STRACE: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH\views\orden\logistica.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-12-11 06:17:56 --- ERROR: ErrorException [ 1 ]: Class 'ckeditor' not found ~ APPPATH\views\orden\logistica.php [ 71 ]
2013-12-11 06:17:56 --- STRACE: ErrorException [ 1 ]: Class 'ckeditor' not found ~ APPPATH\views\orden\logistica.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-12-11 06:20:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STATIC ~ MODPATH\formo\classes\Formo\Core\Formo.php [ 548 ]
2013-12-11 06:20:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STATIC ~ MODPATH\formo\classes\Formo\Core\Formo.php [ 548 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Formo_Core_Form...')
#1 {main}