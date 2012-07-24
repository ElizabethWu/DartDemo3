<?php

include_once("./sped/sped_functions.inc");

//if(getSecLevel('inputGrades') == 0) {
$B27Priv = PrivilegeB(B27);

if($B27Priv == 'none' ){
	NoPriv("deny access to Input Grading", "user=$currentUserID");
}

$mylists = getMyListSped($currentUserID, 'all');


$listid = ($_GET['listid'] == "") ? $mylists[0]['id'] : $_GET['listid'];

$tid = $_GET['tid'];
$sid = $_GET['sid'];
$cmd2 = $_GET['cmd2'];

if($cmd2 == 'add') {
	$db->get_results("INSERT INTO newtest_ind_test set tid = '$tid',sid='$sid' ");
} else if($cmd2 == 'del') {
	$delid = $_GET['itid'];
	$d1 = "DELETE FROM newtest_ind_test where itid = '$delid' ";
	$d2 = "DELETE FROM newtest_values where itid = '$delid' ";
	$db->get_results($d1);
	$db->get_results($d2);
	echo "$d1<br>$d2";
}

$listInfo = getListInfo($listid);

$listname = $listInfo['listname'];

$listOptions = getOptionList($mylists, $listid);

$tests = $db->get_results("SELECT tid as id, name FROM newtest", ARRAY_A);
$testOptions = getOptionList($tests, $tid);

$body = "<form name=gradTesting action=index.php method=get>

					<input type=hidden name=cmd value=gradTesting>
					
					<select name='listid' onChange='submit()'>

						$listOptions

					</select>
					<select name='tid' onChange='submit()'>
						<option value=''></option>
						$testOptions

					</select>
					
					
					</form>

				";

$students = getStudentList($listid);
foreach($students as $s) $l .= ( $l == '') ? $s[studentid] : ",{$s['studentid']}";


$fields = $db->get_results("select newtest_items.* from newtest, newtest_items WHERE
								newtest.tid = newtest_items.tid and
								newtest.tid = '$tid'", ARRAY_A);

$sql = "select newtest_ind_test.sid,newtest_ind_test.itid,newtest_values.tiid, val, tvid
			from newtest, newtest_ind_test, newtest_items, newtest_values where
			newtest.tid = newtest_ind_test.tid and
			newtest_ind_test.sid in ($l) and
			newtest_items.tid = newtest.tid and
			newtest_values.tiid = newtest_items.tiid and
			newtest_values.itid = newtest_ind_test.itid and
			newtest.tid = '$tid'
								";
//echo $sql;
$vs = $db->get_results($sql, ARRAY_A);

foreach($vs as $v) {
	$values[$v['sid']][$v['itid']][$v['tiid']]['val'] = $v['val'];
	$values[$v['sid']][$v['itid']][$v['tiid']]['tvid'] = $v['tvid'];
/*	if($sid_itid != $v['sid']."_".$v['itid']) {
		$values[$v['sid']]['count']++;
		$sid_itid = $v['sid']."_".$v['itid'];
		echo "$sid_itid<br>";
	}
*/
}
$cts = $db->get_results("SELECT sid, itid FROM `newtest_ind_test` WHERE tid = '$tid' ", ARRAY_A);
foreach($cts as $c) $itid[$c['sid']][] = $c['itid'];
//print_r($itid);

$savepage = '/index.php';
$body .= <<<END
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<script>
function saveValues(id) {
	val = $("#"+id).val();
//	alert(id+":"+val);
	$.get("$savepage", { cmd: 'gradSaving', id: id, val: val },
   function(data){
		if(data != '') {
//     		alert("Data Loaded: " + data);
			$("#"+id).attr('id',id+data);
     	}
   });
}
</script>
<table border=1><th>name</th><th></th><th>N</th><th>Delete</th>
END;
foreach($fields as $f) {
	$body .= "<th>{$f['name']}</th>";
}
$body .= "</tr>";
foreach($students as $stu) {

	
	$studentid = $stu['studentid'];
	$fname = $stu['fname'];
	$lname = $stu['lname'];
	$num = count($itid[$studentid]);
	$add = "<a href='?cmd=gradTesting&listid=$listid&tid=$tid&sid=$studentid&cmd2=add'>+</a>";

	$body .= "<tr><td>$studentid $fname $lname</td><td>$add</td><td>$num&nbsp;</td>";
	if(count($itid[$studentid])> 0) {
		$i =0;
		foreach($itid[$studentid] as $t) {
			$del = "<a href='?cmd=gradTesting&listid=$listid&tid=$tid&itid=$t&cmd2=del' onclick=\"return(confirmMsg('Do you want to delete this score?'))\">del</a>";

			reset($fields);
			if($i > 0) $body .= "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>$del</td>";
			else $body .= "<td>$del</td>";
			foreach($fields as $f) {
				$inputid = "{$studentid}_{$t}_{$f['tiid']}_{$values[$studentid][$t][$f['tiid']]['tvid']}";
				$body .= "\n<td><input id='$inputid' type=text value='{$values[$studentid][$t][$f['tiid']]['val']}' size=10 onChange=saveValues(this.id)></td>";
			}
			$body .= "</tr>";
			$i++;
		}
	} else {
		reset($fields);
		$body .= "<td>&nbsp;</td>";
		foreach($fields as $f) {
			$body .= "<td><center>--</center></td>";
		}
		$body .= "</tr>";
	}
}
$body .= "</table>";
include ("template.inc");

?>