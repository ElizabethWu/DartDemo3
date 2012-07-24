<?php

include_once("dewisfunctions.inc");

if($_POST['save'] == 'Save') {
	if($_POST['id'] == '') {
		$sql = "INSERT INTO dewis_notes set did = '{$_POST['did']}'";
		$db->get_results($sql);
		$id = mysql_insert_id();
		$_POST['id'] = $id;
	}
	savedewisedit($_POST);
	
	 echo "<BODY onLoad=\"redirect()\">";
	  
} else {
 	echo editdewisedit($_GET['id'],$_GET['did']);
}

?>