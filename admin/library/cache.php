<?php 
function read_cache($path) {
	$f = fopen($path, 'r');
	$buffer = '';
	while(!feof($f)) {
		$buffer .= fread($f, 2048);
	}
	fclose($f);
	return $buffer;
}

function write_cache($url, $cache_file) {
	$string = "";
	$f = fopen(dirname(__FILE__)."/../cache/$cache_file", 'w');
	fwrite ($f, $string, strlen($string));
	fclose($f);
	
	$string = file_get_contents($url);
	$f = fopen(dirname(__FILE__)."/../cache/$cache_file", 'w');
	fwrite ($f, $string, strlen($string));
	fclose($f);
	return true;
}
