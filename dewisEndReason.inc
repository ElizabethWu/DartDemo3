<?php

include_once("dewisfunctions.inc");

$id = $_REQUEST['did'];

if($_POST['submit'] == 'save') {
	$reason = addslashes($_POST['endreason']);
	$date = date("Y-m-d");
	$sql = "UPDATE dewis set enddate = '$date', endreason='$reason', dewisstatus='prior' WHERE id = '$id' ";
	echo $sql;

	$db->get_results($sql);
	echo "<script>
			  window.opener.location.reload(true);
			  window.close(); 
		 </script>";

} else {
	echo "<form method=post action=?cmd=dewisEndReason>
	<input type=hidden name=did value='$id'>
		Type in End Reason<br>
		<input type=text name=endreason  size=50><br>
		<input type=submit name=submit value=save> <button onclick=window.close()>Close</button>
		</form>
		";
}
?>