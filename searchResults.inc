<?php

// ==================================================================
//  Author: Robert Joseph (dart@vizmotion.com)
//  Modified: Bolek Kurowski (bkurowsk@andrew.cmu.edu)
//		Elizabeth Wu (lizzy.cmu@gmail.com)
//	 Web: http://wiki.bssd.org/index.php/DART_System
// ==================================================================

global $db;

global $currentSearch;
global $total,$end, $start;
$defaultLimit = 50;

$sort=$_GET['sort']!=""?$_GET['sort']:$_POST['sort'];
$start=$_GET['start']!=""?$_GET['start']:$_POST['start'];
$end=$_GET['end']!=""?$_GET['end']:$_POST['end'];
$total=$_GET['total']!=""?$_GET['total']:$_POST['total'];
 $limit = $_GET['limit']!=""?$_GET['limit']:$_POST['linit'];
$receivesql=$_GET['sql']!=""?$_GET['sql']:$_POST['sql'];
$dir=$_GET['dir']!=""?$_GET['dir']:$_POST['dir'];
//if (isset($_POST['continue']) && $_POST['continue'] == "yes") {

if($_POST['continue'] == "yes"||$sort!=""){  
    echo'if  ';
    if ($limit < 1) {
        $limit = $defaultLimit;
    }
   
   $limitstart = $start;
    
   // $sql = stripslashes($_GET['sql']);
    
    $sql = str_replace(" ","_",stripslashes($receivesql));
    echo $total.'=total    '.$start.'-start   '.$limit.'-limit  '.$dir.'-dir  '.$sort.'-sort   ';
    $sql = URLdecode($sql);
    $currentSearch=$sql;
    if($sort!='')
    {
    $dir = $dir == 'ASC' ? "DESC": ($dir == '' ? "DESC" : "ASC");
	 
        $sql1 = $sql . " order by $sort $dir LIMIT $limitstart, $limit";}
    
    else{ $sql1 = $sql . "  LIMIT $limitstart, $limit";}
    
    echo $sql1;
    $sql1=str_replace("_"," ",$sql1);
    $students = $db->get_results($sql1, ARRAY_A);
    }
 else {
    echo 'else';
    
    $limit = $defaultLimit;
    $start = 1;
    $dir = "DESC";
    $values = getStudentSearchResults($_POST, $start - 1, $limit,$sort,$dir);
    $students = $values['list'];
    
    $total = $values['total'];
    $sql = $values['sql'];
    $currentSearch=str_replace(" ","_",$sql);
    echo $currentSearch.'     ';
}

$end = min($total, $start + $limit - 1);

if ($start + $limit > $total) {
    $nextstart = $start;
} else {
    $nextstart = $start + $limit;
}
if ($start - $limit > 0) {
    $prevstart = $start - $limit;
} else {
    $prevstart = $start;
}

$dates = getQuarterDates();
$qstart = $dates['start'];
$qend = $dates['stop'];

//*****************************************************************************
// Set Export Options
//*****************************************************************************
$showExportOptions = array();
if (PrivilegeB(B5) == 'district') {
    $showExportOptions["Discipline"] = "Discipline Export";
}

if (PrivilegeB(B6) == 'district') {
    $showExportOptions["Attendance"] = "Attendance Export";
}

if (PrivilegeB(B7) == 'district') {
    $showExportOptions["EnterExit"] = "Enter Exit Export";
}

if (PrivilegeB(B8) == 'district') {
    $showExportOptions["FallOasis"] = "Fall Oasis Export";
}

$checkall = $total == 0 ? "" : $checkall;

if (Privilege(A6) == 'district')
    $showEdit = 1;
else
    $showEdit = 0;

$yearDisplay = $CurrentYear . "-" . substr($CurrentYear + 1, 2, 2) . ":Q$CurrentQuarter";

$showStudentStatusLink = 0;
if (PDisplay(A30))
    $showStudentStatusLink = 1;

//******************************************************************************
// Assign variable to Smarty
//******************************************************************************
$smarty->assign("total", $total);
$smarty->assign("prevstart", $prevstart);
$smarty->assign("nextstart", $nextstart);
$smarty->assign("urlSQL", urlencode($sql));
$smarty->assign("limit", $limit);
$smarty->assign("start", $start);
$smarty->assign("end", $end);
$smarty->assign("qstart", $qstart);
$smarty->assign("qend",$qend);
$smarty->assign("showExportOptions",$showExportOptions);
$smarty->assign("students", $students);
$smarty->assign("showStudentStatusLink", $showStudentStatusLink);
$smarty->assign("yearDisplay", $yearDisplay);
$smarty->assign("showEdit", $showEdit);
$smarty->assign("currentSearch",$currentSearch);
$smarty->assign("sort",$sort);
$smarty->assign("dir",$dir);
$isSmarty = true;

include ("template.inc");

$smarty->display("searchResults.tpl");
?>
