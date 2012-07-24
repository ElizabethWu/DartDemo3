<?php

include_once('./pathwayFunctions.inc');

$gpid = $_GET['gpid']==''? '1' : $_GET['gpid'];
$sql = "SELECT gpid as id, gpname as name from gp";
$sel = sqlSelect($sql, $gpid);

if($_GET['subcmd'] == 'delete') {
	deletePathwayEntry('gpelectives', 'gpeid', $_GET['id']);
} else if($_GET['subcmd'] == 'add'){
	addPathwayEntry('gpelectives', $gpid);
}

$body .= <<<END
<script>
		function doit(val) {
			window.location = '?cmd=pathwayEditElectives&gpid='+val;
//			alert(val);
		}
	</script>
	Different Progress Reports: <select name=test onchange='doit(this.value);'>$sel</select><br>
END;

$body .= editPathwayElectives($gpid);

function editPathwayElectives($gpid) {
	global $db;
	

	$savepage = "?cmd=pathwayEditSave";
	$add = "<a href=?cmd=pathwayEditElectives&subcmd=add&gpid={$gpid}>Add</a>";
	$str .=<<<END
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
		<script>
		function saveValue(id) {
//			alert(id);
			val = $("#"+id).val();
			$.get("$savepage", { id: id, val: val },
			   function(data){
//					alert("Data Loaded: " + data);
			   });
		}
		</script>
		$add<br>
END;
	$results = $db->get_results("SELECT gpelectives.* FROM gpelectives
				LEFT JOIN level ON gpelectives.subject = level.subject 
					and gpelectives.level = level.level
				WHERE gpid = '$gpid' 
				ORDER BY gpelectives.subject, gpelectives.level
	", ARRAY_A);
//	print_r($results);
	$subjects = $db->get_results("SELECT id, id as name from subjects", ARRAY_A);
	$levels = $db->get_results("SELECT distinct(level) as id, level as name from level", ARRAY_A);
	foreach($results as $g) {
		$kind = $g['kind'];
		$loc = $g['loc'];
		$side = $g['side'];
		$title = $g['title'];
		$subject = $g['subject'];
		$level = $g['level'];
		$color = $kind == '0' ? "lightgrey" : "white";
		$suboptions = arrayOptions($subjects, $subject);
		$levoptions = arrayOptions($levels, $level);
		
		$subsel = "<select  id=gpelectives_subject_gpeid_{$g['gpeid']} onchange=saveValue(this.id)>$suboptions</select>";
		$levsel = "<select  id=gpelectives_level_gpeid_{$g['gpeid']} onchange=saveValue(this.id)>$levoptions</select>";

		$del = "<a href=?cmd=pathwayEditElectives&subcmd=delete&gpid={$gpid}&id={$g['gpeid']} onclick=\"return(confirmMsg('Delete'))\">Delete</a>";
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