<?php 

function create_data($tbl, $data){
	$fields = get_field_names($tbl);
	print_r($fields);
	$id = db_create_data($tbl, $fields, $data);
	if (!$id){
		check_tbl_exists($tbl);
		$id = db_create_data($tbl, $fields, $data);
	}
	if (!$id){
		echo "<error>Fail to create data '$tbl'</error>";
		return false;
	}
}

function update_data($tbl, $id, $data){
	$fields = get_field_names($tbl);

	foreach($fields as $field){
		if ($data[$field]){
			if (!db_update_data($tbl, $field, $id, $data[$field])){
				check_field_exists($tbl, $field);
				if (!db_update_data($tbl, $field, $id, $data[$field])){
					echo "<error>Fail to update data '$tbl, $field, $id, $data[$field]'</error>";
				}
			}
		}
	}

}

function db_update_data($tbl, $field, $id, $value){
	global $db_prefix;
	$tbl = $db_prefix.'_'.$tbl;
	$stmt = "update from $tbl set $field = '$value' where id = $id limit 1";
	echo "<h2>$stmt</h2>";
	
	return db_run($stmt);
}

function db_create_data($tbl, $fields, $data){
	global $db_prefix;
	$tbl = $db_prefix.'_'.$tbl;
	$stmt = "insert into $tbl set ";
	foreach($fields as $field){
		$arr[] = " $field = '".$data[$field]."' ";
	}
	$stmt .= implode(',', $arr);
	echo "<h2>$stmt</h2>";
	return db_run($stmt);
}

function get_field_names($tbl){
	global $table_structure;
	if (!$table_structure[$tbl]) return false;
	$arr = array();
	foreach($table_structure[$tbl] as $field => $field_setting){
		$arr[] = $field;
	}
	return $arr;
}

function check_tbl_exists($tbl){
	global $table_structure;
	if (!$table_structure[$tbl]) return false;
	$field_settings = $table_structure[$tbl];
	global $db_prefix;
	$tbl = $db_prefix.'_'.$tbl;
	
	$stmt = " CREATE TABLE IF NOT EXISTS `$tbl` ( ";
	$arr[] = " `id` int(11) NOT NULL auto_increment ";
	foreach($field_settings as $field => $field_setting){
		$arr[] = " `$field` $field_setting ";
	}
	$arr[] = " `deleted` int(1) NOT NULL ";
	$arr[] = " `active` int(1) NOT NULL DEFAULT 1 ";
	$stmt .= implode(',', $arr);
	$stmt .=" , PRIMARY KEY  (`id`) ); ";
	echo "<h2>$stmt</h2>";
	return db_run($stmt);
}

function check_field_exists($tbl, $field){
	global $table_structure, $dbname;
	if (!$table_structure[$tbl][$field]) return false;
	$field_settings = $table_structure[$tbl];
	global $db_prefix;
	$tbl = $db_prefix.'_'.$tbl;
	
	$stmt = "IF NOT EXISTS( SELECT NULL
            FROM INFORMATION_SCHEMA.COLUMNS
           WHERE table_name = '$tbl'
             AND table_schema = '$dbname'
             AND column_name = '$field')  THEN

			ALTER TABLE `$tbl` ADD `$dbname` ".$field_settings[$field].";

			END IF;";
	
	echo "<h2>$stmt</h2>";
	return db_run($stmt);
}

function get_content($file){
	global $_REQUEST;
	extract ($_REQUEST);
    ob_start();
	if (file_exists($file))
		include $file;
    return ob_get_clean();
}

function create_slug($string, $ext=''){     
        $replace = '-';         
        $string = strtolower($string);     
		
        //replace / and . with white space     
        $string = preg_replace("/[\/\.]/", " ", $string);     
        //$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);     
		
        //remove multiple dashes or whitespaces     
        $string = preg_replace("/[\s-]+/", " ", $string);     
		
        //convert whitespaces and underscore to $replace     
        $string = preg_replace("/[\s_]/", $replace, $string);     
		
        //limit the slug size     
        $string = substr($string, 0, 100);     
		
        //slug is generated     
        return ($ext) ? $string.$ext : $string; 
}
