<?php

include_once("dewisfunctions.inc");

if($_GET['subcmd'] == 'delete') {
	$noteid = $_GET['noteid'];
	$sql = "DELETE FROM dewis_notes WHERE id = '$noteid' ";
	$db->get_results($sql);
}
$values = editdewis($_GET['id']);

// print_r($values);

extract($values);

$str = "\"" . addslashes($text) . "\"";
$str2 = "return($str);";
$text = eval($str2);

$filecontent = file_get_contents('dewis.html');

$str = "\"" . addslashes($filecontent) . "\"";
$str2 = "return($str);";
$body .= eval($str2);
/*
$str = "\"" . addslashes($body1) . "\"";
$str2 = "return($str);";
$body .= eval($str2);
*/
include ("template.inc");

?>