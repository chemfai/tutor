<?php 
echo $tbl = $path;
if ($action == "save"){
	if ($id){
		update_data($tbl, $id, $_POST);
	} else {
		create_data($tbl, $_POST);
	}
}