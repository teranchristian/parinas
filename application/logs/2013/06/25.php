<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-25 00:04:02 --- ERROR: View_Exception [ 0 ]: The requested view footer could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-06-25 00:04:02 --- STRACE: View_Exception [ 0 ]: The requested view footer could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
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
2013-06-25 00:04:21 --- ERROR: ErrorException [ 8 ]: Use of undefined constant scripts - assumed 'scripts' ~ APPPATH\classes\controller\demo.php [ 65 ]
2013-06-25 00:04:21 --- STRACE: ErrorException [ 8 ]: Use of undefined constant scripts - assumed 'scripts' ~ APPPATH\classes\controller\demo.php [ 65 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(65): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:12:03 --- ERROR: ErrorException [ 8 ]: Use of undefined constant menu - assumed 'menu' ~ APPPATH\views\template.php [ 2 ]
2013-06-25 00:12:03 --- STRACE: ErrorException [ 8 ]: Use of undefined constant menu - assumed 'menu' ~ APPPATH\views\template.php [ 2 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(2): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(73): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-25 00:12:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH\views\template.php [ 2 ]
2013-06-25 00:12:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH\views\template.php [ 2 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(2): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(73): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-25 00:14:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: menUser ~ APPPATH\views\template.php [ 2 ]
2013-06-25 00:14:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: menUser ~ APPPATH\views\template.php [ 2 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(2): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(74): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#10 {main}
2013-06-25 00:42:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\menu-user.php [ 16 ]
2013-06-25 00:42:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\menu-user.php [ 16 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\menu-user.php(16): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(2): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(75): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-25 00:44:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\menu-user.php [ 16 ]
2013-06-25 00:44:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\menu-user.php [ 16 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\menu-user.php(16): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(2): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(78): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-25 00:44:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function set() ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:44:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function set() ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 00:45:11 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:45:11 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:33 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:33 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:56 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:56 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:57 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:57 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:58 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:58 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:58 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:58 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:58 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:58 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:59 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:59 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:59 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:59 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:46:59 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:46:59 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:05 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:05 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:07 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:07 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:08 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:08 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:08 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:08 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:08 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:08 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:09 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:09 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:09 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:09 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:09 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:09 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:10 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:10 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:10 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:10 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:10 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:10 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:10 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:10 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:11 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:11 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:11 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:11 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:11 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:11 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:49:11 --- ERROR: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:49:11 --- STRACE: ErrorException [ 8 ]: Object of class View could not be converted to int ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:52:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\classes\controller\demo.php [ 67 ]
2013-06-25 00:52:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\classes\controller\demo.php [ 67 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(67): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:52:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\classes\controller\demo.php [ 68 ]
2013-06-25 00:52:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\classes\controller\demo.php [ 68 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(68): Kohana_Core::error_handler()
#1 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 00:54:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant CP_NAME - assumed 'CP_NAME' ~ APPPATH\views\logon\index.php [ 22 ]
2013-06-25 00:54:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant CP_NAME - assumed 'CP_NAME' ~ APPPATH\views\logon\index.php [ 22 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\logon\index.php(22): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(80): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-25 00:54:14 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\logon\index.php [ 41 ]
2013-06-25 00:54:14 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\logon\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-06-25 00:54:23 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\logon\index.php [ 44 ]
2013-06-25 00:54:23 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\logon\index.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\Program File...', Array)
#1 {main}
2013-06-25 00:54:33 --- ERROR: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH\views\logon\index.php [ 50 ]
2013-06-25 00:54:33 --- STRACE: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ APPPATH\views\logon\index.php [ 50 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\logon\index.php(50): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(80): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-25 01:10:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: APM ~ APPPATH\views\logon\index.php [ 31 ]
2013-06-25 01:10:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: APM ~ APPPATH\views\logon\index.php [ 31 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\logon\index.php(31): Kohana_Core::error_handler('C:\Program File...', Array)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(4): Kohana_View->__toString('C:\Program File...', Array)
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(80): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#14 {main}
2013-06-25 01:11:13 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\logon\index.php on line 31 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
2013-06-25 01:11:13 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::open() must be an array, string given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\logon\index.php on line 31 and defined ~ SYSPATH\classes\kohana\form.php [ 35 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\form.php(35): Kohana_Core::error_handler('logon/validatio...', '123')
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\logon\index.php(31): Kohana_Form::open('C:\Program File...', Array)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\views\template.php(4): Kohana_View->__toString('C:\Program File...', Array)
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(61): include('C:\Program File...')
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\demo.php(80): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Demo->after(Object(Controller_Logon))
#11 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#15 {main}
2013-06-25 01:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logon/validation was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 01:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logon/validation was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 01:15:37 --- ERROR: ErrorException [ 8 ]: Undefined index:  FNAME ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 01:15:37 --- STRACE: ErrorException [ 8 ]: Undefined index:  FNAME ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(10): Kohana_Core::error_handler()
#1 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 01:20:00 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-25 01:20:00 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('supplier')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(9): Kohana_ORM::factory()
#6 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-25 01:20:22 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-25 01:20:22 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('supplier')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(9): Kohana_ORM::factory()
#6 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-25 01:20:47 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-25 01:20:47 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('Supplier')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(9): Kohana_ORM::factory()
#6 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-25 01:21:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Supplier' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-25 01:21:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Supplier' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Supplier')
#1 {main}
2013-06-25 01:21:12 --- ERROR: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2013-06-25 01:21:12 --- STRACE: ErrorException [ 2 ]: array_fill() [function.array-fill]: Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(0, 0, NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(411): array_fill()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize(NULL)
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct('Supplier')
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(9): Kohana_ORM::factory()
#6 [internal function]: Controller_Logon->action_index(Object(Controller_Logon))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#11 {main}
2013-06-25 01:24:52 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Supplier as array ~ APPPATH\classes\controller\logon.php [ 12 ]
2013-06-25 01:24:52 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Supplier as array ~ APPPATH\classes\controller\logon.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 01:25:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\logon.php [ 12 ]
2013-06-25 01:25:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\logon.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_logo...')
#1 {main}
2013-06-25 01:33:20 --- ERROR: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
2013-06-25 01:33:20 --- STRACE: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 01:34:18 --- ERROR: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
2013-06-25 01:34:18 --- STRACE: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 01:36:30 --- ERROR: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
2013-06-25 01:36:30 --- STRACE: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 01:36:50 --- ERROR: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
2013-06-25 01:36:50 --- STRACE: ErrorException [ 1 ]: Class 'Hash' not found ~ APPPATH\classes\controller\logon.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 01:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Hash/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 01:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Hash/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(14): Kohana_Request->execute()
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-25 01:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Hash/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 01:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Hash/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(14): Kohana_Request->execute()
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-25 01:43:12 --- ERROR: Kohana_Exception [ 0 ]: The PWD property does not exist in the Model_Supplier class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-06-25 01:43:12 --- STRACE: Kohana_Exception [ 0 ]: The PWD property does not exist in the Model_Supplier class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(13): Kohana_ORM->__get('PWD')
#1 [internal function]: Controller_Logon->action_index()
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-25 01:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-06-25 01:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 02:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 02:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 02:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL product/logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 02:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL product/logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 02:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 02:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 02:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 02:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 02:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-25 02:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logon/signout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-25 02:07:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\logon.php [ 41 ]
2013-06-25 02:07:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\logon.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 02:24:04 --- ERROR: ErrorException [ 1 ]: Class 'Simple_Auth' not found ~ APPPATH\classes\controller\logon.php [ 29 ]
2013-06-25 02:24:04 --- STRACE: ErrorException [ 1 ]: Class 'Simple_Auth' not found ~ APPPATH\classes\controller\logon.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 02:24:29 --- ERROR: ErrorException [ 1 ]: Class 'Simple_Auth' not found ~ APPPATH\classes\controller\logon.php [ 29 ]
2013-06-25 02:24:29 --- STRACE: ErrorException [ 1 ]: Class 'Simple_Auth' not found ~ APPPATH\classes\controller\logon.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 05:40:42 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2013-06-25 05:40:42 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(15): Kohana_Session::instance()
#3 [internal function]: Controller_Logon->action_index()
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Logon))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#8 {main}
2013-06-25 06:15:07 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php on line 6 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
2013-06-25 06:15:07 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php on line 6 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller.php(43): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(6): Kohana_Controller->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_Logon->__construct(Object(Request), Object(Response))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-25 06:15:43 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php on line 6 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
2013-06-25 06:15:43 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php on line 6 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller.php(43): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(6): Kohana_Controller->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_Logon->__construct(Object(Request), Object(Response))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-25 06:15:49 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Auth ~ APPPATH\classes\controller\logon.php [ 8 ]
2013-06-25 06:15:49 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Auth ~ APPPATH\classes\controller\logon.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:16:15 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php on line 6 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
2013-06-25 06:16:15 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php on line 6 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
--
#0 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\controller.php(43): Kohana_Core::error_handler()
#1 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\application\classes\controller\logon.php(6): Kohana_Controller->__construct(Object(Request), Object(Response))
#2 [internal function]: Controller_Logon->__construct(Object(Request), Object(Response))
#3 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request))
#4 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\Program Files (x86)\Apache Software Foundation\Apache2.2\htdocs\andromedaK\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-25 06:24:13 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2013-06-25 06:24:13 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:24:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:24:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:25:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:25:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:52 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:52 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:26:54 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 9 ]
2013-06-25 06:26:54 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:27:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 06:27:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:27:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 06:27:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:27:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 06:27:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:27:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 06:27:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:27:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 06:27:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:27:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
2013-06-25 06:27:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Request), Object(Response))
#1 {main}
2013-06-25 06:28:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:33 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:33 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:35 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:35 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:35 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:35 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:36 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
2013-06-25 06:28:36 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\controller\logon.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:54 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2013-06-25 06:28:54 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 06:28:57 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2013-06-25 06:28:57 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 08:03:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\controller\logon.php [ 13 ]
2013-06-25 08:03:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\controller\logon.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_logo...')
#1 {main}
2013-06-25 08:03:42 --- ERROR: ErrorException [ 1 ]: Class 'Simple_Auth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
2013-06-25 08:03:42 --- STRACE: ErrorException [ 1 ]: Class 'Simple_Auth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 08:05:15 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
2013-06-25 08:05:15 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 08:05:17 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
2013-06-25 08:05:17 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 08:05:17 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
2013-06-25 08:05:17 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 08:05:17 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
2013-06-25 08:05:17 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-25 08:05:17 --- ERROR: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
2013-06-25 08:05:17 --- STRACE: ErrorException [ 1 ]: Class 'SimpleAuth' not found ~ APPPATH\classes\controller\logon.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}