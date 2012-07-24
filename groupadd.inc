<?php

include_once("./groupfunction.inc");
$listid = $_GET['listid'];
$subject = $_GET['subject'];
$level = $_GET['level'];

if($_POST['subcmd'] == 'add') {
	echo "add";
	addCoursesStudents($_POST['studentid'], $subject, $level, $_POST['comment']);
}

$body .= groupCourseMenu($listid);

$body .= "<h3>Add Course Groups</h3>";

$listOptions = getMyListOptions($currentUserID, $listid);
$subjectOptions = SQLOptions("select id as id, id as name from subjects", $subject);
$levelOptions = SQLOptions("select level as id, level as name from level WHERE subject = '$subject' ", $level);

$body .= <<<END
		<script>
			function setCheckboxes (c, value) {
//			alert(c + "--"+ value);
				$("."+c).attr('checked', value);
				return(false);
			}

		</script>
		<form name=groupAdd action=index.php method=get>
			<input type=hidden name=cmd value=groupAdd>
			Lists:
			<select name='listid' onChange='submit()'>
				<option value=''></option>
				$listOptions
			</select>
			Subject:
			<select name='subject' onChange='submit()'>
				<option value=''></option>
				$subjectOptions
			</select> 
			Level:
			<select name='level' onChange='submit()'>
				<option value=''></option>
				$levelOptions
			</select> <br>
			</form>

END;
//echo "---$listid--";
$studentlist = getListStudents($listid);
//echo $studentlist;
$total = count(explode(",", $studentlist));
$studentlist = $studentlist == '' ? "0": $studentlist;
$sql = "SELECT * from student
		WHERE
			student.studentid IN ($studentlist) and
			student.studentid NOT IN (
				SELECT studentid FROM studentlevel 
					WHERE subject='$subject' and level='$level')
			";
$stus = $db->get_results($sql,ARRAY_A);
$subtotal = count($stus);

$body .= "$subtotal/$total Show students who have not taken courses in the list<br><br>
		<form method=post>
		Comment: <input type=text size=40 id=comment name=comment>
		<input type=hidden name=subject1 value='{$_GET['subject']}'>
		<input type=hidden name=level value='{$_GET['level']}'>
		<input type=hidden name=subcmd value='add'>
		<table border=1>
			<tr>
				<td></td>
				<td>first name</td>
				<td>last name</td>
				<td>grade </td>
			</tr>";
foreach($stus as $stu) {
	$id = $stu['studentid'];
	$body .= "<tr>
				<td><input name=\"studentid[]\" value=\"{$stu['studentid']}\" class=\"studentselect\" type=\"checkbox\"></td>
				<td>{$stu['fname']}</td><td>{$stu['lname']}</td><td>{$stu['grade']}</td>
			 </tr>\n";
}
$body .= <<<END
			</table>
			<div align="left">

				<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><a href="#" onclick=javascript:return(setCheckboxes('studentselect',true)) class="action">Check All</a>&nbsp;/&nbsp;<a href="#" onclick=javascript:return(setCheckboxes('studentselect',false)) class="action">UnCheck All</a></font>
			</div>
				<input type=submit value=Add>
			</form>

END;

include("template.inc");

?>