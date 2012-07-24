<?php

//error_reporting(E_ALL);
include_once("./groupfunction.inc");
$listid = $_GET['listid'];
$subject = $_GET['subject'];
$level = $_GET['level'];

if($_GET['subcmd'] == 'save' and $_POST['changed'] != ''){

	$body .= "changed";
	$change = explode(",",$_POST['changed']);
	$comment = $_POST['comment'];
//	print_r($_POST);
	foreach($change as $c) {
		$val = explode("_", $c);
		$v = $_POST[$c];
		$sql = "UPDATE studentlevel set {$val[3]} = '$v' 
				WHERE studentid = '{$val[0]}' and
					subject = '{$val[1]}' and
					level = '{$val[2]}' 
					";
		
//		echo "$sql<br>$comment<br>";
		$db->get_results($sql);
		logEntry("Edit Studentlevel", $comment, $val[0], $val[1], $val[2], "");	
	}
	$info = "Saved";

}
$body .= groupCourseMenu($listid);

$body .= "<h3>Edit Course Groups</h3>";

$listOptions = getMyListOptions($currentUserID, $listid);
$subjectOptions = SQLOptions("select id as id, id as name from subjects", $subject);
$levelOptions = SQLOptions("select level as id, level as name from level WHERE subject = '$subject' ", $level);

$body .= <<<END
		<script>
		var list = new Array();
		function changeValue(id) {
//			alert(id);
			var str='';
			list.push(id);
			for(var i=0;i<list.length;i++){
				if(i>0) str = str + ','; 
				str = str + list[i];
			}
			$('#changed').val(str);
//			$('#changed2').html(str);
			$('#'+id).css('background-color', 'pink');
		}
		</script>
		<form name=groupEdit action=index.php method=get>
			<input type=hidden name=cmd value=groupEdit>
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

$studentlist = getListStudents($listid);
//echo "__ $studentlist __";
//$studentlistarray = explode(",", $studentlist);
$total = count(explode(",", $studentlist));
$studentlist = $studentlist == '' ? "0": $studentlist;
$sql = "SELECT * FROM studentlevel, student 
			WHERE subject='$subject' and level='$level' and
				student.studentid = studentlevel.studentid and 
				student.studentid in ($studentlist)";
$stus = $db->get_results($sql,ARRAY_A);
//echo $sql;
$subtotal = count($stus);
$body .= "$subtotal/$total Show students who have taken courses in the list
	<form method=post action=?cmd=groupEdit&subject=$subject&level=$level&subcmd=save&listid=$listid>
	<div id=changed2 style='color: red;'>$info</div>
	<input id=changed type=hidden name=changed value=''>

	Comment: <input type=text size=40 id=comment name=comment>
	<table border=1>
			<tr>
				<td>first name</td>
				<td>last name</td>
				<td>letter grade </td>
				<td>points</td>
				<td>weight</td>
				<td>%</td>
				<td>actual Points</td>
				<td>start date</td>
				<td>final date</td>
			</tr>";
			// progress 	spoints 	sweight 	percentcomp 	avg 	start 	final
foreach($stus as $stu) {
	$id = "{$stu['studentid']}_{$subject}_{$level}";
	$body .= "<tr><td>{$stu['fname']}</td><td>{$stu['lname']}</td>
			  	<td><input type=text id={$id}_progress name={$id}_progress onchange=changeValue(this.id) size=4 value=\"{$stu['progress']}\"></td>
				<td><input type=text id={$id}_spoints name={$id}_spoints onchange=changeValue(this.id) size=4 value=\"{$stu['spoints']}\"></td>
				<td><input type=text id={$id}_sweight name={$id}_sweight onchange=changeValue(this.id) size=4 value=\"{$stu['sweight']}\"></td>
				<td><input type=text id={$id}_percentcomp name={$id}_percentcomp onchange=changeValue(this.id) size=4 value=\"{$stu['percentcomp']}\"></td>
				<td><input type=text id={$id}_avg name={$id}_avg onchange=changeValue(this.id) size=4 value=\"{$stu['avg']}\"></td>
				<td><input type=text id={$id}_start name={$id}_start onchange=changeValue(this.id) size=20 value=\"{$stu['start']}\"></td>
				<td><input type=text id={$id}_final name={$id}_final onchange=changeValue(this.id) size=20 value=\"{$stu['final']}\"></td>
</tr>\n";
}
$body .= "</table>
<input type=submit name=submit value=Save>
</form>";
include("template.inc");

?>