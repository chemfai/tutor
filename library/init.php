<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);

require_once (dirname(__FILE__)."/../config.php");

if ($maintenance)
{
	$content = 'In Construction';
	echo $content;
	exit();
}

extract($_REQUEST);

if (file_exists(dirname(__FILE__)."/../lang/$lang.php")){
	include dirname(__FILE__)."/../lang/$lang.php";
}
require_once (dirname(__FILE__)."/table_structure.php");
require_once (dirname(__FILE__)."/mysql.php");
require_once (dirname(__FILE__)."/common_func.php");
require_once (dirname(__FILE__)."/cache.php");

if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
{
	function undo_magic_quotes_gpc(&$array)
	{
		foreach($array as &$value)
		{
			if(is_array($value))
			{
				undo_magic_quotes_gpc($value);
			}
			else
			{
				$value = stripslashes($value);
			}
		}
	}

	undo_magic_quotes_gpc($_POST);
	undo_magic_quotes_gpc($_GET);
	undo_magic_quotes_gpc($_COOKIE);
}

session_start();
