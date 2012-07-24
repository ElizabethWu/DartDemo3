<?php

//error_reporting(E_ALL);

include_once("./sped/sped_functions.inc");
include_once("./pathwayFunctions.inc");

$gpid = $_GET['gpid']==''? '1' : $_GET['gpid'];

$sql = "SELECT gpid as id, gpname as name from gp";
$sel = sqlSelect($sql, $gpid);
$title = $db->get_var("SELECT gpname FROM gp where gpid = '$gpid' "); 


$mylists = getMyListSped($currentUserID, 'all');

$listid = ($_GET['listid'] == "") ? $mylists[0]['listid'] : $_GET['listid'];

$listInfo = getListInfo($listid);

$listname = $listInfo['listname'];

$listOptions = getOptionList($mylists, $listid);

$body = "<form name=pathwayComments action=index.php method=get>

					<input type=hidden name=cmd value=pathwayComments>
					
					<select name='listid' onChange='submit()'>

						$listOptions

					</select>					
					<select name=gpid onChange='submit()'>$sel</select>
					</form>

				";

$students = getStudentList($listid);

$savepage = "?cmd=pathwayCommentSave";
$body .= <<<END
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<script>
	function saveValue(id) {
		val = $("#"+id).val();
//		alert(id+"  "+val);
		$.get("$savepage", { id: id, val: val },
		   function(data){
//				alert("Data Loaded: " + data);
//				if(refresh) window.location = "?cmd=pathwayEdit&gpid=$gpid";
		   });
	}
</script>
<table border=1><tr><th>Name</th><th>Comment</th></tr>
END;

foreach($students as $stu) {

	$studentid = $stu['studentid'];
	$fname = $stu['fname'];
	$lname = $stu['lname'];
	$num = count($itid[$studentid]);
	$sql = "SELECT comments FROM gpcomment WHERE studentid = '$studentid' and gpid = '$gpid' ";
	$comments = $db->get_var($sql);
	$id = "{$studentid}_{$gpid}";
	$body .= "<tr><td valign=top>$studentid $fname $lname</td>
				<td><textarea id='$id' cols=70 rows=4  onchange=saveValue(this.id)>{$comments}</textarea></td></tr>";
	
}
$body .= "</table>";

include ("template.inc");


?>