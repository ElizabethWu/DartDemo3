<?php


function filterGPAbyType($studentid, $gpaid) {
	global $db;
	
	$sql = "SELECT sum( sweight * spoints ) / sum( sweight ) as gpa
			FROM studentlevel, gpa_list
			WHERE studentid = '$studentid' and sweight > 0 and
				studentlevel.subject = gpa_list.subject and
				studentlevel.level = gpa_list.level and
				gpa_list.gpaid = '$gpaid'
				";
//	echo $sql;
	$gpa = number_format(round($db->get_var($sql), 3), 3);
	return($gpa);
}

function filterGPAbyPathway($studentid, $gpid) {
	global $db;
	
	$sql = "SELECT sum( sweight * spoints ) / sum( sweight ) as gpa 
			FROM studentlevel, gpelectives, gpvalues 
			WHERE studentid = '$studentid' and sweight > 0 and 
				((gpelectives.subject = studentlevel.subject and 
					gpelectives.level = studentlevel.level and gpelectives.gpid = '1') or 
				 (gpvalues.subject = studentlevel.subject and 
				 	gpvalues.level = studentlevel.level and gpvalues.gpid = '$gpid'))
				";
//	echo $sql;
	$gpa = number_format(round($db->get_var($sql), 3), 3);
	return($gpa);
}

function displayTests($sid, $tid) {
	global $db;
	echo 'display called';
	$fsql = "select newtest_items.*, newtest.name as nm from newtest, newtest_items WHERE
								newtest.tid = newtest_items.tid and
								newtest.tid = '$tid'";
	$fields = $db->get_results($fsql, ARRAY_A);
	echo "$fsql<br><br>";
	$sql = "select newtest_ind_test.sid,newtest_ind_test.itid,newtest_values.tiid, val, tvid
				from newtest, newtest_ind_test, newtest_items, newtest_values where
				newtest.tid = newtest_ind_test.tid and
				newtest_ind_test.sid = '$sid' and
				newtest_items.tid = newtest.tid and
				newtest_values.tiid = newtest_items.tiid and
				newtest_values.itid = newtest_ind_test.itid and
				newtest.tid = '$tid'
									";
	echo $sql;
	$vs = $db->get_results($sql, ARRAY_A);
	
	foreach($vs as $v) {
		$values[$v['itid']][$v['tiid']]['val'] = $v['val'];
		$values[$v['itid']][$v['tiid']]['tvid'] = $v['tvid'];
	}
	$cts = $db->get_results("SELECT itid FROM `newtest_ind_test` WHERE tid = '$tid' and sid = '$sid'", ARRAY_A);
	foreach($cts as $c) $itid[$c['sid']][] = $c['itid'];
	$str .= "<b>{$fields[0]['nm']}<br><table border=1><tr>";
	foreach($fields as $f) {
		$str .= "\n<th>{$f['name']}</th>";
	}
	$str .= "</tr>";
	if(count($cts)> 0) {
		$i =0;
		foreach($cts as $t) {
			reset($fields);
			$str .="<tr>";
			foreach($fields as $f) {
				$fieldval = $values[$t['itid']][$f['tiid']]['val'];
				$display = $fieldval == '' ? "--" : $fieldval;
				$str .= "\n<td align=center>$display</td>";
			}
			$str .= "</tr>";
			$i++;
		}
	}
	$str .= "</table><br>";
//	$str .= "<b>$test</b><br>";
	return($str);
}
function displayHSGQE($sid) {

	$str .= "<b>HSGQE</b><br>";
	return($str);
}
?>