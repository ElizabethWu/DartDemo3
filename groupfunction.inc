<?php

function groupCourseMenu($listid) {
 ECHO 'GROUPcOURSE IS CALLED'.$listid;
	$str =<<<END
<table width=100%>	
<tr>
	<td align="left" width="33%%">
		<input type="button" value="Group Edit Course" onclick="javascript: window.location = '?cmd=groupEdit&listid=$listid';" style="width: 100%;" />
	</td>
	<td align="left" width="33%%">
		<input type="button" value="Group Add Course" onclick="javascript: window.location = '?cmd=groupAdd&listid=$listid';" style="width: 100%;" />
	</td>
	<td align="left" width="33%%">
		<input type="button" value="Group Close Course" onclick="javascript: window.location = '?cmd=groupClose&listid=$listid';" style="width: 100%;" />
	</td>

</tr>
</table>
<hr>
END;

	return($str);
}

function addCoursesStudents($studentid, $subject, $level,$comment) {
	global $db, $currentUserName, $currentUserID;
	
	echo "--$studentid--";
	$dt = date("Y-m-d");
	$tm = time();

	foreach($studentid as $s) {
		$sql = "Insert into studentlevel 
						SET studentid = '$s',
							subject = '$subject',
							level = '$level',
							start = '$dt',
							progress='',
							change_username='$currentUserName', 
							change_user='$currentUserID', 
							change_timestamp='$tm'"; 
//		echo "--$sql<br>";
		$db->get_results($sql);
		logEntry("Start Level", $comment, $studentid, $subject, $level);
	}
}
function closeCoursesStudents($studentid, $subject, $level, $comment) {
	global $db, $currentUserName, $currentUserID;
	
	$dt = date("Y-m-d");
	$tm = time();

	foreach($studentid as $s) {
		$sql = "Update studentlevel 
						SET final='$dt'
						WHERE
							 studentid = '$s' and
							 subject = '$subject' and
							 level = '$level'";
//		echo "--$sql<br>";
		$db->get_results($sql);
		logEntry("Progress Level", $comment, $studentid, $subject, $level, "", $comment);
	}
}
?>