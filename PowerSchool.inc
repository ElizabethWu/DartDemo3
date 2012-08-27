<?php

include_once("mapping.inc");

if($_GET['student.site']==''){
    echo 'nothing comes';
$dewis_result=createMappingEvents();
$body= $dewis_result != 'none' ? $dewis_result:"Nothing";
}
else{
echo 'SOMETHING'.$_GET['student.site'];}
include ("template.inc");

 /*
//sql = "insert into test($item[1],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6],$item[7],$item[8],$item[9],$item[10],$item[11],$item[12],$item[13]) values('Smith','Adam')";
$link=mysql_connect('localhost','root','root');
if(!$link) echo "fails!";
else echo "succeed!";

mysql_select_db('powerschool');

$sql = "insert into test($item[3],$item[4]) values('Johnson','Alice')";
echo $sql;
$result = mysql_query($sql);
echo 'done';

}
 */
?>
