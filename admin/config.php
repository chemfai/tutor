<?php

$is_debug 		= FALSE;//TRUE;
$is_admin 		= FALSE;//TRUE;
$maintenance 	= FALSE;
$date 			= date("Y-m-d H:i:s");

$theme = "default"; // default theme directory

$lang = 'zh_HK';
$lang_code = 'zh_HK';

$config['google-site-verification'] = "";
$config['app_id'] = "";
$url['facebook'] = "https://www.facebook.com/";

$page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$host = 'localhost';
$dbname='hkdcom_tutor';
$db_username='hkdcom_tutor';
$db_password='tm2017';

$db_prefix = "tm";

$wwwroot = $settings['wwwroot']?$settings['wwwroot']:"//".$_SERVER[SERVER_NAME].str_replace(str_replace('\\', "/", $_SERVER["DOCUMENT_ROOT"]), "", str_replace('\\', "/", dirname(__FILE__)));

$settings['logo'] = "";
$settings['slogan'] = "";

$version = rand(0,1000);
