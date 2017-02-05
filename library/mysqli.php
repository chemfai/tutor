<?php 

function db_connect(){
	global $db, $host, $db_username, $db_password;

	$db = mysqli_connect($host, $db_username, $db_password);
	// Create connection

	// Check connection
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	mysql_set_charset('utf8', $db);
	mysql_select_db($dbname, $db);
}

function db_close(){
	global $db;
	mysql_close($db);
}

function db_run($stmt){
	global $db;
	db_connect();
	$result = mysql_query($stmt, $db);
	db_close();
	return $result;	
}
