<?php
require_once (dirname(__FILE__)."/library/init.php");

extract($_REQUEST);

$full_path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (empty($path)){
	$path = "index";
}

if (strpos($_SERVER['REQUEST_URI'], "?")===false && strpos($_SERVER['REQUEST_URI'], "action.php")===false && empty($_POST)){
	
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

$seo_title = "";
$title = "";
	
$bread = explode('/', $path);
if (count($bread)>0){
	$seo_title = end($bread);
	$title = end($bread);
	$path2 = str_replace("/$title", "", $path);
}

if (file_exists(dirname(__FILE__)."/module/$path/index.php")){
	$content = get_content(dirname(__FILE__)."/module/$path/index.php");
}
else if (file_exists(dirname(__FILE__)."/module/$path.php")){
	$content = get_content(dirname(__FILE__)."/module/$path.php");
} 
else if (file_exists(dirname(__FILE__)."/module/$path2.php")){
	$content = get_content(dirname(__FILE__)."/module/$path2.php");
} 
else if (file_exists(dirname(__FILE__)."/module/$path")){
	$content = get_content(dirname(__FILE__)."/module/$path");
}
else {
	$content = "404 error";
}

if (strpos($path, "action.php")!==false){
	
	echo $content;
	
} else {
		
	include "library/header.php";

	echo $content;

	include "library/footer.php";

}
	