<?php 

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$tbl = "tutor";
if ($action == "save"){
	if ($id){
		update_data($tbl, $id, $_POST);
	} else {
		create_data($tbl, $_POST);
	}
}