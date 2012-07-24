<?php

$msg = $_GET[msg];
$smarty->assign('currentUserName',$currentUserName);
$smarty->assign('msg',$msg);
$isSmarty =true;


include("template.inc");
$smarty->display("editProfile.tpl");

?>
