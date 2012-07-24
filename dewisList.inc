<?php

$B15Priv = PrivilegeB(B15);
include_once("dewisfunctions.inc");

$dewis_result=createAllDewisEvents();
$body= $B15Priv != 'none' ? $dewis_result:"";

include ("template.inc");

?>
