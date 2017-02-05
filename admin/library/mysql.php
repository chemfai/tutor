<?php 

function db_connect(){
	global $db, $host, $dbname, $db_username, $db_password;
	$db = mysql_connect($host, $db_username, $db_password);
	if(!$db) {
        echo "Fail to connect db";
    }
    if((strlen($dbname) > 0) AND (!@mysql_select_db($dbname, $db))) {
        echo "Fail to select table";
    }
	mysql_set_charset('utf8', $db);
	mysql_select_db($dbname, $db);
	return true;
}

function db_close(){
	global $db;
	mysql_close($db);
}

function db_run($stmt){
	db_connect();
	$result = mysql_query($stmt);
	db_close();
	return $result;	
}
