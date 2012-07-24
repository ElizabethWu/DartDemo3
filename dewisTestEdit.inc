<?php
include_once("dewisfunctions.inc");


$B17Priv = PrivilegeB(B17);

if($B17Priv != 'none'){
    if($_POST['submit'] != '') {
	saveTestCutscores($_POST);
    }
$editCut=  editScore($_GET['testname'], $_GET['year'], $_GET['tier']);
$body=$editCut;
}
else $body='';

include ("template.inc");



?>