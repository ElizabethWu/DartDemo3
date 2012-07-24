<?php

function deletePathwayEntry($table, $key, $id) {
	global $db;
	
	$sql = "DELETE FROM $table where $key = '$id'";
	$db->get_results($sql);
}

function addPathwayEntry($table, $gpid) {
	global $db;
	
	$sql = "INSERT INTO $table set gpid = '$gpid' ";
	$db->get_results($sql);
}
function sqlSelect($sql, $val) {
	global $db;
	
	
	$str = "<option value=''></option>";
	$results = $db->get_results($sql,ARRAY_A);
	foreach($results as $r ) {
		if($r['id'] == $val) $select = 'selected';
		$str .= "<option value={$r['id']} $select>{$r['name']}</option>\n\r";
		$select = '';
	}
	return($str);

}
if(!function_exists('arrayOptions')) {
	function arrayOptions($a, $sel) {
	//	print_r($a);
		$str = "<option value=''></option>";
		foreach($a as $r) {
			$select = ($r['id'] == $sel) ? "selected" : "";
			$str .= "<option value='{$r['id']}' $select>{$r['name']}</option>\n";
		}
		return($str);
		
	}
}

/*

function deleteEntry($table, $key, $id) {
	global $db;
	
	$sql = "DELETE FROM $table where $key = '$id'";
	echo $sql;
}


function sqlSelect($sql, $val) {
	global $db;
	
	
	$results = $db->get_results($sql,ARRAY_A);
	$str = "<option value=''></option>";
	foreach($results as $r ) {
		if($r['id'] == $val) $select = 'selected';
		$str .= "<option value={$r['id']} $select>{$r['name']}</option>\n\r";
		$select = '';
	}
	return($str);

}

function arrayOptions($a, $sel, $blank) {
//	print_r($a);
	$str .= $blank ? "<option value=''></option>";
	foreach($a as $r) {
		$select = ($r['id'] == $sel) ? "selected" : "";
		$str .= "<option value='{$r['id']}' $select>{$r['name']}</option>\n";
	}
	return($str);
	
}

*/
?>