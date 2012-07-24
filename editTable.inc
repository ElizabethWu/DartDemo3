<?php
include_once('./pathwayFunctions.inc');

$gpid = $_GET['gpid'] == '' ? 1 : $_GET['gpid'];
if($_GET['subcmd'] == 'add') {
	addE($_GET['gpid'], $_GET['loc'], $_GET['side']);
} else if($_GET['subcmd'] == 'del') {
	delE($_GET['gpvid'],$_GET['gpid'],$_GET['side']);
} else if ($_GET['subcmd'] == 'reorder') {
	reorderList($_GET['gpid'],$_GET['side']);
}

$side1 .= editTable("SELECT * FROM gpvalues where gpid = '$gpid' and side=1 ORDER BY side, loc");
$side2 .= editTable("SELECT * FROM gpvalues where gpid = '$gpid' and side=2 ORDER BY side, loc");

$sql = "SELECT gpid as id, gpname as name from gp ORDER BY gpid";
$sel = sqlSelect($sql, $gpid);

$body = "
	<script>
		function doit(val) {
			window.location = '?cmd=editTable&gpid='+val;
		}
	</script>
	Different Progress Reports: <select name=test onchange='doit(this.value);'>$sel</select>
		<table>
			<tr>
				<td><a href='?cmd=editTable&subcmd=reorder&side=1&gpid={$gpid}'>reorder side1</a></td>
				<td><a href='?cmd=editTable&subcmd=reorder&side=2&gpid={$gpid}'>reorder side2</a></td>
			</tr>
			<tr><td valign=top>$side1</td><td valign=top>$side2</td></tr></table>";

function reorderList($gpid, $side) {
	global $db;
	
	$sql = "SELECT * FROM gpvalues where gpid = '$gpid' and side='$side' ORDER BY side, loc";
//	echo $sql;
	$rows = $db->get_results($sql,ARRAY_A);
	for($i=0; $i < count($rows); $i++) {
		$loc = $i+1;
		$sql = "UPDATE gpvalues set loc = '$loc' where gpvid = '{$rows[$i]['gpvid']}' ";
//		echo "$sql<br>";
		$db->query($sql);
	}
	
}
function addE($gpid, $loc, $side) {
	global $db;
	$sql = "UPDATE gpvalues set loc = loc+1 WHERE gpid='$gpid' and side = '$side' and loc >= '$loc' ";
//	echo $sql;
	$db->get_results($sql);
	$sql = "INSERT INTO gpvalues set gpid = '$gpid', loc='$loc', side='$side', kind='1'";
//	echo $sql;
	$db->query($sql);
	
}
function delE($gpvid, $gpid, $side) {
	global $db;
	
	$sql = "DELETE FROM gpvalues WHERE gpvid = '$gpvid'";
//	echo $sql;
	$db->query($sql);
	reorderList($gpid, $side);
}
function editTable($sql) {
	global $db;
	
	$results = $db->get_results($sql, ARRAY_A);
	$savepage = "?cmd=pathwayEditSave";
	$str .= <<<END
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
	<script>
	function saveValue(id,refresh) {
		val = $("#"+id).val();
//		alert(id+val);
		$.get("$savepage", { id: id, val: val },
		   function(data){
//				alert("Data Loaded: " + data);
				if(refresh) window.location = "?cmd=pathwayEdit&gpid=$gpid";
		   });
	}
	
	</script>
	<table><tr><th>gpvid</th><th>kind</th><th>loc</th><th>side</th><th>title</th><th>subject</th><th>level</th><th>Action</th></tr>
END;
	foreach($results as $r ) {
		$del = "<a href='?cmd=editTable&subcmd=add&gpid={$r['gpid']}&side={$r['side']}&loc={$r['loc']}'>D</a>";
		$str .= "<tr>
					<td><input type=text id=gpvalues_gpid_gpvid_{$r['gpvid']} value='{$r['gpid']}' size=4 onchange=saveValue(this.id)></td>
					<td><input type=text id=gpvalues_kind_gpvid_{$r['gpvid']} value='{$r['kind']}' size=4 onchange=saveValue(this.id)></td>
					<td><input type=text id=gpvalues_loc_gpvid_{$r['gpvid']} value='{$r['loc']}' size=4 onchange=saveValue(this.id)></td>
					<td><input type=text id=gpvalues_side_gpvid_{$r['gpvid']} value='{$r['side']}' size=4 onchange=saveValue(this.id)></td>
					<td><input type=text id=gpvalues_title_gpvid_{$r['gpvid']} value='{$r['title']}' onchange=saveValue(this.id)></td>
					<td><input type=text id=gpvalues_subject_gpvid_{$r['gpvid']} value='{$r['subject']}' size=4 onchange=saveValue(this.id)></td>
					<td><input type=text id=gpvalues_level_gpvid_{$r['gpvid']} value='{$r['level']}' size=4 onchange=saveValue(this.id)></td>
					<td><a href='?cmd=editTable&subcmd=add&gpid={$r['gpid']}&side={$r['side']}&loc={$r['loc']}'>+</a> |
						<a href='?cmd=editTable&subcmd=del&gpvid={$r['gpvid']}&side={$r['side']}&gpid={$r['gpid']}'>D</a>
					</td>
				</tr>";
	}
	$str .= "</table>";
	return($str);
}
include("template.inc");

?>