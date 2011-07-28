<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-07-28 03:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 03:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 10:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 10:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 10:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 10:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:28:22 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'ODBC'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-07-28 11:28:22 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'ODBC'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\application\classes\controller\welcome.php(12): Kohana_ORM::factory('user')
#8 [internal function]: Controller_Welcome->action_install()
#9 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#13 {main}
2011-07-28 11:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:29:21 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-07-28 11:29:21 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 [internal function]: Kohana_Auth->hash('test')
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(1110): call_user_func_array(Array, Array)
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('password', 'test')
#3 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password', 'test')
#4 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\application\classes\controller\welcome.php(18): Kohana_ORM->__set('password', 'test')
#5 [internal function]: Controller_Welcome->action_install()
#6 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#10 {main}
2011-07-28 11:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:30:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  role ~ MODPATH\orm\classes\kohana\orm.php [ 1376 ]
2011-07-28 11:30:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  role ~ MODPATH\orm\classes\kohana\orm.php [ 1376 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\modules\orm\classes\kohana\orm.php(1376): Kohana_Core::error_handler('role', Object(Model_Role))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\application\classes\controller\welcome.php(25): Kohana_ORM->has()
#2 [internal function]: Controller_Welcome->action_install(Object(Controller_Welcome))
#3 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 11:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 11:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 11:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-07-28 12:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-28 12:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-07-28 12:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-28 12:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-07-28 12:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-28 12:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-07-28 12:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-28 12:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-07-28 12:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-28 12:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-07-28 12:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sr-admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-28 12:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:52:07 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-07-28 12:52:07 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_SRAdmin))
#5 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-28 12:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 12:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 12:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-28 13:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-07-28 13:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Mijn Documenten\Werkmap Sammy\Eclipse Projects\brise\public\index.php(109): Kohana_Request->execute()
#1 {main}