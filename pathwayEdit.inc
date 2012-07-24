<?php

include_once('./pathwayFunctions.inc');
$gpid = $_GET['gpid']==''? '1' : $_GET['gpid'];
if($_GET['subcmd'] == 'delete') {
	deletePathwayEntry('gpvalues', 'gpvid', $_GET['id']);
} else if($_GET['subcmd'] == 'add'){
	addPathwayEntry('gpvalues', $gpid);
}else if($_GET['subcmd'] == 'deletepathway') {
	deletePathways($gpid);
	$gpid=1;
} else if($_GET['subcmd'] == 'addpathway'){
	$gpid = addPathways('');
} else if($_GET['subcmd'] == 'spedcreate') {
	$gpstudentid = $_GET['id'];
	$pathwayid = $db->get_var("SELECT gpid from gp where studentid = '$gpstudentid' ");
//	echo "PATHWAY: $pathwayid";
	if($pathwayid == '') {
		$gpid = addPathways($_GET['name'],$_GET['id']);
	} else {
		$gpid = $pathwayid;
	}
	$header = 'no';
//	$return = "<a href='?cmd=spededit&module=sped&id=$gpstudentid'>Back To Student</a><br>";
}
//    -moz-user-modify: read-write !important;
$sql = "SELECT gpid as id, concat(gpname,' (',studentid,')') as name from gp ORDER BY studentid, gpname";
$sel = sqlSelect($sql, $gpid);
$gpinfo = $db->get_row("SELECT * FROM gp where gpid = '$gpid' ", ARRAY_A); 
$title = $gpinfo['gpname'];
$side = $gpinfo['side'];

function deletePathways($gpid) {
	global $db;
	
	$sql1 = "DELETE FROM gp where gpid = '$gpid'";
	$sql2 = "DELETE FROM gpvalues where gpid = '$gpid'";
	$sql3 = "DELETE FROM gpelectives where gpid = '$gpid'";
//	echo "$sql1<br>$sql2";
	$db->get_results($sql1);
	$db->get_results($sql2);
	$db->get_results($sql3);
}
function addPathways($name='NEW',$id='') {
	global $db;
	
	$add = $id == '' ? '' : ",studentid='$id'";
	$sql = "INSERT INTO gp set gpname = '$name' $add ";
	$db->get_results($sql);
	return(mysql_insert_id() );

}

if($header != 'no') {
	$addgpa = "<a href=?cmd=pathwayEdit&subcmd=addpathway&gpid={$gpid}>Add Pathway</a>";
	$delgpa = "<a href=?cmd=pathwayEdit&subcmd=deletepathway&gpid={$gpid} onclick=\"return(confirmMsg('Delete'))\">Delete Pathway</a>";

	$body .= <<<END
	<script>
			function doit(val) {
				window.location = '?cmd=pathwayEdit&gpid='+val;
	//			alert(val);
			}
		</script>
		[$addgpa | $delgpa]<br>
		Different Progress Reports: <select name=test onchange='doit(this.value);'>$sel</select><br>
END;
}
$body .= "{$return}Pathway Name: <input type=text value='$title' id='gp_gpname_gpid-{$gpid}' onchange=saveValue(this.id) > 
				   Elective Side (1 or 2): <input type=text value='$side' id='gp_side_gpid-{$gpid}' onchange=saveValue(this.id) size=3> <button>Save</button><br>";


$body .= editPathway($gpid);

function editPathway($gpid) {
	global $db, $rootURL;
	

	$results = $db->get_results("SELECT gpvalues.* FROM gpvalues  
				LEFT JOIN level ON gpvalues.subject = level.subject and gpvalues.level = level.level
				WHERE gpid = '$gpid'
				ORDER BY side, loc
	", ARRAY_A);
//	print_r($results);
	$subjects = $db->get_results("SELECT id, id as name from subjects", ARRAY_A);
	$levels = $db->get_results("SELECT distinct(level) as id, level as name from level", ARRAY_A);
	$kinds = array(array("id"=>"0","name"=>"Category"),array("id"=>"1","name"=>"Requirement"));
	$add = "<a href=?cmd=pathwayEdit&subcmd=add&gpid={$gpid}>Add Category/Requirement</a>";
	foreach($results as $g) {
		$kind = $g['kind'];
		$loc = $g['loc'];
		$side = $g['side'];
		$title = $g['title'];
		$subject = $g['subject'];
		$bgcolor = $g['bgcolor'];
		$level = $g['level'];
		$color = $kind == '0' ? "lightgrey" : "white";
		$suboptions = arrayOptions($subjects, $subject);
		$levoptions = arrayOptions($levels, $level);
		$kindoptions = arrayOptions($kinds, $kind);
		
		$del = "<a href=?cmd=pathwayEdit&subcmd=delete&gpid={$gpid}&id={$g['gpvid']} onclick=\"return(confirmMsg('Delete'))\">Delete</a>";
		$subsel = "<select id=gpvalues_subject_gpvid_{$g['gpvid']} onchange=\"saveValue(this.id); setupLevel('{$g['gpvid']}')\">$suboptions</select>";
		$levsel = "<select id=gpvalues_level_gpvid_{$g['gpvid']} onchange=saveValue(this.id)>$levoptions</select>";
		$kindsel = "<select id=gpvalues_kind_gpvid_{$g['gpvid']} onchange=saveValue(this.id,true)>$kindoptions</select>";
		$input = "<input type=text value='$title' id=gpvalues_title_gpvid_{$g['gpvid']} onchange=saveValue(this.id)>";
		$c = "<input type=text value='$bgcolor' id=gpvalues_bgcolor_gpvid_{$g['gpvid']} onchange=saveValue(this.id) size=6>";

		$itemid = $g['gpvid'];
		if($kind == 0) {
			${"str".$side} .= "<li id='$itemid' style='background-color: $color;'>$itemid) $kindsel title: $input [$del]</li>";
		} else {
			${"str".$side} .= "<li id='$itemid' style='background-color: $color;'>$itemid) $kindsel req/level: $subsel $levsel $c [$del]</li>";
		}		
	}
/*
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
*/
	$savepage = "?cmd=pathwayEditSave";
	$reorder = "?cmd=reorderPathway";
	$str .=<<<END
	<style>
	#sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0; float: left; margin-right: 10px; background: #eee; padding: 5px; width: 473px;}
	#sortable1 li, #sortable2 li { margin: 5px; padding: 5px; font-size: 1.2em; width: 450px; }

	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js">
	
	<script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>

	<script>
	function setupLevel(id) {
//		alert(id);
	}
	function saveValue(id,refresh) {
//		alert(refresh);
		val = $("#"+id).val();
		$.get("$savepage", { id: id, val: val },
		   function(data){
//				alert("Data Loaded: " + data);
				if(refresh) window.location = "?cmd=pathwayEdit&gpid=$gpid";
		   });
	}
	$(function() {
		$( "#sortable1, #sortable2" ).sortable({
			connectWith: ".connectedSortable",
			stop: function(event, ui) {
				val1 = $("#sortable1").sortable("toArray");
				val2 = $("#sortable2").sortable("toArray");
				$.get("$reorder", {  val1: val1, val2: val2 },
					function(data){
//						alert(data);
					});
			}
		});
		
	});
	</script>

		$add
		<table width=1000 border=0><tr><td>
			<ul id="sortable1" class="connectedSortable ui-sortable">
				$str1
			</ul>
			<ul id="sortable2" class="connectedSortable ui-sortable"> 
				$str2		
			</ul>
			</td>
			</tr>
		</table>
		
END;
/*
	$sql = "SELECT * FROM gpelectives as el, level as l where 
			and l.subject=el.subject and l.level = el.level and gpid = '$gpid' ";
//	echo $sql;
	$elements = $db->get_results($sql, ARRAY_A);
	$loc = $gpinfo['electives']; $el_side = $gpinfo['side']; $el_side_opposite = ($el_side == 1) ? "2" : "1";//fmod($el_side,2);
	foreach($elements as $el) {
//	echo "$loc-$el_side ";
		$gp[$loc]['type'] = "course";
		$gp[$loc]['name'.$el_side] = $el['name'] . " ({$el['subject']}.{$el['level']})";
		$val = ($el['final'] == '0000-00-00 00:00:00') ? round($el['percentcomp'] * 100/ 25) : '4';
		$gp[$loc]['value'.$el_side] = fillvalue($val);
		$gp[$loc]['value'.$el_side_opposite] = "<td colspan=4></td>";
		$gp[$loc]['credit'.$el_side] = $val;

		$loc++;
	}
//	print_r($gp);echo "<br><br>";	
	$results = $db->get_results("SELECT * FROM gpvalues  
				LEFT JOIN level ON gpvalues.subject = level.subject and gpvalues.level = level.level
				WHERE gpid = '$gpid'
	", ARRAY_A);
//	print_r($results);
	foreach($results as $g) {
		$gp[$g['loc']]['type'] = $g['kind'] == 0 ? "title" : "course";
		$gp[$g['loc']]['name'.$g['side']] = $g['kind'] == 0 ? $g['title'] : ($g['name'] . ($g['subject'] !='' ? " ({$g['subject']}.{$g['level']})":"")); //.$g['subject'].$g['level']."-".$scores[$g['subject']][$g['level']]
		$gp[$g['loc']]['value'.$g['side']] = fillvalue($scores[$g['subject']][$g['level']]);
		$gp[$g['loc']]['credit'.$g['side']] = $scores[$g['subject']][$g['level']];
	}
//	$gpa = filterGPAbyType($studentid, '1');
//	$pgpa = filterGPAbyPathway($studentid, $gpid);
*/
	return($str);
}

include("template.inc");

?>