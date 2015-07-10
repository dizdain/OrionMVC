<?php
/****************************************************************
 * Variables defined for use throughout the application.
 ***************************************************************/
define( 'DBHOST'        ,   'localhost' );
define( 'DBUSER'        ,   'root' );
define( 'DBPASS'        ,   'root' );
define( 'DBNAME'        ,   'orion' );
define( 'DOMAIN'        ,   'localhost' );
define( 'LANGUAGE'      ,   'EN' );
define( 'COPYRIGHT'     ,   '2014-' . date('Y') . ' &copy; The Orion Project | Valkyr' );
define( 'SSL'           ,   false );
define( 'PREFIX'        ,   ( SSL ) ? 'https://' : 'http://' );
define( 'ROOT'          ,   PREFIX . DOMAIN );
define( 'WEB'           ,   '/' );
define( 'MODELS'        ,   '../application/models/' );
define( 'LOGS'          ,   '../application/logs' );
define( 'APP'           ,   '../application/' );
define( 'VIEWS'         ,   '../application/views/' );
define( 'CTRLS'         ,   '../application/controllers/' );
define( 'LANG'          ,   '../application/language/' );
define( 'DOCS'          ,   '../documentation/' );
define( 'HEADER'        ,   'tpl.module.header.php' );
define( 'FOOTER'        ,   'tpl.module.footer.php' );
define( 'DEBUG_MODE'    ,   false );

date_default_timezone_get( 'America/Chicago' );
error_reporting( E_ALL );
ini_set( 'display_errors' , 1);
