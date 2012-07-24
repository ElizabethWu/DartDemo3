<?php

include_once("dewisfunctions.inc");


$B16Priv = PrivilegeB(B16);

if($B16Priv != 'none'){
    if($_POST['submit'] != '') {
	saveStudentTest($_POST);
    }
$editDewis=  editStudentScore($_GET['testname'], $_GET['year'],$_GET['listid']);
$body=$editDewis;
}
else $body='';

include ("template.inc");

?>