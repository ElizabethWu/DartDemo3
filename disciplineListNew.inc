<?php

include_once ("disciplineFunctions.inc");

//if(($_GET['subcmd'] == 'del') and (getSecLevel('dispdel') > 0) ) {
	$db->get_results("DELETE FROM discipline where disciplineid = '{$_GET['disciplineid']}'");
//}
$studentid = $_GET['studentid'];

//$body = studentMenu($studentid);

$body = topPartDisciplineList($studentid);
$s = getStudentInfo($studentid);
       // echo 'the search is '.$s['fname']. $s['lname'];
	$currentStudentName=$s['fname']. ' '.$s['lname'];
	
$body .= "<a href=index.php?cmd=disciplineEditNew&subcmd=new&studentid=$studentid>Create Discipline Referral</a>";

$body .= createPriorEventList($studentid, true);


include ("template.inc");

?>
