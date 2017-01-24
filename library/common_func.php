<?php 
function get_content($file){
	global $_REQUEST;
	extract ($_REQUEST);
    ob_start();
	if (file_exists($file))
		include $file;
    return ob_get_clean();
}
