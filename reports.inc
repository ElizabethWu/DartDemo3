<?php
// ==================================================================
//  Author: Robert Joseph (dart@vizmotion.com)
//	 Web: http://wiki.bssd.org/index.php/DART_System
// ==================================================================

include ("sreportFunction.inc");
include("progressReportFunction.inc");
include ("pacingReportFunction.inc");

include_once ($rootPATH."/testing/testing_functions.inc");
include_once ($rootPATH."/graduation_report_aux.inc");
include_once ("graduation_function.inc");

debugPrint("here");

//$names = $_POST['selectNames'];
$names = getReportListItems($currentUserID);
debugPrint("Names: " . print_r($names, true));

$body = "<html>
<head>
<title>Multiple Reports Page</title>
<link rel=\"stylesheet\" href=\"css/dart.css\" type=\"text/css\">
<body>";

foreach ($names as $stu) {
   $id = $stu['studentid'];
   if($_POST['rcard'] == 'X') {
       $body .= "<DIV style=\"page-break-after:always\">";
       $body .= createSReport($id, "on", "official");  
       $body .= "</DIV>";
   }
   
   if($_POST['rcardwo'] == 'X') {
       $body .= "<DIV style=\"page-break-after:always\">";
       $body .= createSReport($id, "off", "official");  
       $body .= "</DIV>";
   }
   
   if($_POST['paceguide'] == 'X') {
      $body .= "<DIV style=\"page-break-after:always\">";
      $body .= createPacingReport($id, "official");  
      $body .= "</DIV>";
   }
   
  if($_POST['progrep'] == 'X') {
       $body .= "<DIV style=\"page-break-after:always\">";
       $body .= createProgressReport($id, "official");  
       $body .= "</DIV>";
   }
    if($_POST['pathways'] == 'X') {
       // echo 'called';
       $body .= "<DIV style=\"page-break-after:always\">";
       $gpid = $stu['gpid'] == 0 ? '1' : $stu['gpid'];
       //echo $id.'and'.$gpid;
       $body .= producePage($id, $gpid);//==""? "no response":"response";
       $body .= "</DIV>";
   }

}

$body .= "</body></html>";

echo "<html><body>$body</body></html>";

?>
