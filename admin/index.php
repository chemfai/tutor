<?php

require_once (dirname(__FILE__)."/library/init.php");

$full_path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (empty($path)){
	$path = "index";
}

if ($config[cache]=="active" && strpos($_SERVER['REQUEST_URI'], "?")===false && strpos($_SERVER['REQUEST_URI'], "action.php")===false && empty($_POST)){
	
	$cache_file = str_replace("/", "_", $path);
	$cache_path = "cache/$cache_file";

	if (file_exists($cache_path)) {

		$html = read_cache($cache_path);
		if ($html != ""){
			echo $html;
			exit;
		}

	} else {
		
		write_cache($full_path, $cache_file);
		
	}

}
	
$bread = explode('/', $path);
$module = $bread[0];
$seo_title = end($bread);
$title = end($bread);
if (count($bread)>0){
	$path2 = str_replace("/$title", "", $path);
}

if (strpos($path, "action.php")!==false){
		
	if (file_exists(dirname(__FILE__)."/module/$path")){
		include dirname(__FILE__)."/module/$path";
	} else {
		echo "error: file not found.";
	}

}
else
{
		
	include dirname(__FILE__)."/library/header.php";

	if (file_exists(dirname(__FILE__)."/module/$path/index.php")){
		include dirname(__FILE__)."/module/$path/index.php";
	}
	else if (file_exists(dirname(__FILE__)."/module/$path.php")){
		include dirname(__FILE__)."/module/$path.php";
	} 
	else if (file_exists(dirname(__FILE__)."/module/$path2/index.php")){
		include dirname(__FILE__)."/module/$path2/index.php";
	} 
	else if (file_exists(dirname(__FILE__)."/module/$path2.php")){
		include dirname(__FILE__)."/module/$path2.php";
	} 
	else if (file_exists(dirname(__FILE__)."/module/$path")){
		include dirname(__FILE__)."/module/$path";
	}
	else {
		include dirname(__FILE__)."/under_construction.php";
		//include dirname(__FILE__)."/404.php";
	}

	include dirname(__FILE__)."/library/footer.php";

}
