<?php

include_once('./pathwayFunctions.inc');

$gpaid = $_GET['gpaid']==''? '1' : $_GET['gpaid'];
if($_GET['subcmd'] == 'delete') {
	deleteGpaEntry($_GET['id']);
} else if($_GET['subcmd'] == 'add'){
	addGpaEntry($gpaid);
}else if($_GET['subcmd'] == 'deletegpa') {
	deleteGpa($gpaid);
	$gpaid=1;
} else if($_GET['subcmd'] == 'addgpa'){
	$gpaid = addGpa($gpaid);
}

$title = $db->get_var("SELECT name FROM gpa where gpaid = '$gpaid' "); 
$sql = "SELECT gpaid as id, name as name from gpa";
$sel = sqlSelect($sql, $gpaid);


function deleteGpa($gpaid) {
	global $db;
	
	$sql1 = "DELETE FROM gpa_list where gpaid = '$gpaid'";
	$sql2 = "DELETE FROM gpa where gpaid = '$gpaid'";
//	echo "$sql1<br>$sql2";
	$db->get_results($sql1);
	$db->get_results($sql2);
}
function addGpa($gpaid) {
	global $db;
	
	$sql = "INSERT INTO gpa set name = 'NEW' ";
	$db->get_results($sql);
	return(mysql_insert_id() );

}
function deleteGpaEntry($id) {
	global $db;
	
	$sql = "DELETE FROM gpa_list where gpalistid = '$id'";
//	echo $sql;
	$db->get_results($sql);

}
function addGpaEntry($gpaid) {
	global $db;
	
	$sql = "INSERT INTO gpa_list set gpaid = '$gpaid' ";
	$db->get_results($sql);

}
	$addgpa = "<a href=?cmd=gpaEdit&subcmd=addgpa&gpaid={$gpaid}>Add GPA</a>";
	$delgpa = "<a href=?cmd=gpaEdit&subcmd=deletegpa&gpaid={$gpaid} onclick=\"return(confirmMsg('Delete'))\">Delete GPA</a>";

$body .= <<<END
<table cellpadding="0" cellspacing="0" border="0" width="90%">
<tr>
	<td align="left" width="50%">
		<input type="button" value="Edit GPA Setup" onclick="javascript: window.location = '?cmd=gpaEdit';" style="width: 100%;" />
	</td>
	<td align="left" width="50%">
		<input type="button" value="Edit GPA Site" onclick="javascript: window.location = '?cmd=gpaEditSite';" style="width: 100%;" />
</tr>
</table><br>

END;

$body .= <<<END
<script>
		function doit(val) {
			window.location = '?cmd=gpaEdit&gpaid='+val;
//			alert(val);
		}
	</script>
	[$addgpa | $delgpa]<br>
	Different GPA Computation: <select name=test onchange='doit(this.value);'>$sel</select><br>
	<input type=text value='$title' id='gpa-name-gpaid-{$gpaid}' onchange=saveValue(this.id)><br>
END;

$body .= editPathwayElectives($gpaid);

function editPathwayElectives($gpaid) {
	global $db;
	

	$savepage = "?cmd=pathwayEditSave";
	$add = "<a href=?cmd=gpaEdit&subcmd=add&gpaid={$gpaid}>Add</a>";
	$str .=<<<END
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
		<script>
		function saveValue(id) {
//			alert(id);
			val = $("#"+id).val();
//			alert(id+'=>'+val);
			$.get("$savepage", { id: id, val: val, sep: '-' },
			   function(data){
//					alert("Data Loaded: " + data);
			   });
		}
		</script>
		$add<br>
END;
	$results = $db->get_results("SELECT * FROM gpa_list
				WHERE gpaid = '$gpaid' 
				ORDER BY subject, level
	", ARRAY_A);
//	print_r($results);
	$subjects = $db->get_results("SELECT id, id as name from subjects", ARRAY_A);
	$levels = $db->get_results("SELECT distinct(level) as id, level as name from level", ARRAY_A);
	foreach($results as $g) {
		$subject = $g['subject'];
		$level = $g['level'];
		$suboptions = arrayOptions($subjects, $subject);
		$levoptions = arrayOptions($levels, $level);
		
		$subsel = "<select  id='gpa_list-subject-gpalistid-{$g['gpalistid']}' onchange=saveValue(this.id)>$suboptions</select>";
		$levsel = "<select  id='gpa_list-level-gpalistid-{$g['gpalistid']}' onchange=saveValue(this.id)>$levoptions</select>";

		$del = "<a href=?cmd=gpaEdit&subcmd=delete&gpaid={$gpaid}&id={$g['gpalistid']} onclick=\"return(confirmMsg('Delete'))\">Delete</a>";
		$str .= "subject/level: $subsel $levsel [$del]<br>";
	}

/*	$str =<<<END
	<style>
	#sortable1, #sortable2 {
    float: left;
    list-style-type: none;
    margin: 0 10px 0 0;
    padding: 0;
}
#sortable1 li, #sortable2 li {
    font-size: 1.2em;
    margin: 0 5px 5px;
    padding: 5px;
    width: 350px;
}
</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js">
	
	<script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>

	<script>
	$(function() {
		$( "#sortable1" ).sortable({
			connectWith: ".connectedSortable"
		}).disableSelection();
	});
	</script>


		<ul id="sortable1" class="connectedSortable ui-sortable">
			$str
		</ul>
		
END;
*/
	return($str);
}

include("template.inc");

?>