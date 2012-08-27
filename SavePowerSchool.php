<?php
//***********************************
//Edit by Elizabeth Wu (jingyuew@andrew.cmu.edu)
//***********************************
 include_once ("lib/machine.config.php"); 
 
 $con = mysql_connect("localhost","dartdem2","mK1G64mdS4Xa");
    if (!$con)
     {
     die('Could not connect: ' . mysql_error());
     echo "con fails";
     }
     mysql_select_db("dartdem2_demo", $con);
//vars are the names of the columns in the files
//after fetch the mapping relations between database's columns and file's columns, we should store that in the some golbal place. 
$var1=$_GET['studentsite'];
$var2=$_GET['studentlname'];
$var3=$_GET['studentmname'];
$var4=$_GET['studentfname'];
$var5=$_GET['studentethnicity'];
$var6=$_GET['studentgender'];
$var7=$_GET['studentstudentid'];
$var8=$_GET['studentalaskaid'];
$var9=$_GET['studentgrade'];
$var10=$_GET['studentsped'];
$var11=$_GET['dewisdattendance'];
$var12=$_GET['dewisstartdate'];
$var13=$_GET['dewisenddate'];

//$updateResult=  updatePowerSchool($var8);
    if($var1!=null) {
     insertPowerSchool("student.site",$var1);
     }
     if($var2!=null) {
     insertPowerSchool("student.lname",$var2);
     }
     if($var3!=null) {
     insertPowerSchool("student.mname",$var3);
     }
     if($var4!=null) {
     insertPowerSchool("student.fname",$var4);
     }
     if($var5!=null) {
     insertPowerSchool("student.ethnicity",$var5);
     }
     if($var6!=null) {
     insertPowerSchool("student.gender",$var6);
     }
     if($var7!=null) {
     insertPowerSchool("student.studentid",$var7);
     }
     if($var8!=null) {
     insertPowerSchool("student.alaskaid",$var8);
     }
     if($var9!=null) {
     insertPowerSchool("student.grade",$var9);
     }
     if($var10!=null) {
     insertPowerSchool("student.sped",$var10);
     }
     if($var11!=null) {
     insertPowerSchool("dewis.dattendance",$var11);
     }
     if($var12!=null) {
     insertPowerSchool("dewis.startdate",$var12);
     }
     if($var13!=null) {
     insertPowerSchool("dewis.enddate",$var13);
     }
   
function insertPowerSchool($dbvar,$fvar) {
     global $db;
   
    $createMapping = "insert into powerschool (databaseCol,fileCol) values (\"$dbvar\", \"$fvar\")";
    mysql_query($createMapping);
   echo "Mapping ".$dbvar." succeed! <br>";
}

echo" <html>
<body>
<form action=\"index.php?cmd=home\" method=\"post\">
   <button type=submit name=submit> Return to Homepage </button>
</form>
</body>
</html>"

?>
