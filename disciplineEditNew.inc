<?php

include_once ("disciplineFunctions.inc");

if($_POST['cmdSearch'] != '') {
	saveDisciplineEntry($_POST);
}
if($_GET['subcmd'] == 'new') {
	$db->get_results("INSERT INTO discipline set studentid = '{$_GET['studentid']}' ");
	$dispid = mysql_insert_id();
} else {
	$dispid = $_GET['disciplineid'];
}

$body .= topPartDisciplineEdit($dispid);
$body .= createMainScreen($dispid);


include ("template.inc");


?>
