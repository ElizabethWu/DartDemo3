<?php

// ==================================================================

//  Author: Robert Joseph (dart@vizmotion.com)
//Modifyed by: Elizabeth Wu (lizzy.cmu@gmail.com)
//	 Web: http://wiki.bssd.org/index.php/DART_System

// ==================================================================

function topPartDisciplineEdit($disp) {
    global $db;
	  
	$studentid = $db->get_var("SELECT studentid from discipline where disciplineid = '$disp' ");
	$s = getStudentInfo($studentid);
        $str .= <<<END
	<script>
	function obnLengthChange() {
		consequence = $("#i_consequence").val();
		sus = $("#i_prior").html();
		susp = $("#s_prior").html();
		if(consequence == 'S') {
			val = $("#i_lengthdays").val();
		} else {
			val = 0;
		}
		$("#i_after").html(parseInt(sus)+parseInt(val));
		$("#s_after").html(parseInt(sus)+parseInt(val));
	}
	 $(document).ready(function() {
   		$("#i_lengthdays").change(function() { onLengthChange(); });
   		$("#i_consequence").change(function() { onLengthChange(); });
 	});
	</script>
	<table>
	<tr>
		<td>
			<div align="left">
				<br>
				<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="4">Discipline Log Entries </font><font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">- {$s['fname']} {$s['lname']} - {$s['site']} </font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><br>

					<table border="0" cellpadding="3" cellspacing="2" width="80%">
						<tbody><tr>
							<td><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">All discipline events are entered here. The latest event is displayed below. Click the button to add a new referral. The discipline events in the list below include both relatively minor infractions and more serious discipline events for this student. <br>
									<br>
									Since this data is used for both reporting purposes and Rti efforts, please include both relatively minor infractions, as well as more serious ones from your school.<br>
									<br>
							<td><img src="{$s['pict']}" alt="" align="right" border="3" height="105" hspace="3" width="95"></td>

						</tr>
					</tbody></table>
			</div>
		</td>
	</tr>
</table>
	
END;
	return($str);
}
function topPartDisciplineList($studentid) {
	
        
	$s = getStudentInfo($studentid);
        //echo 'the search is '.$s['fname']. $s['lname'];
	//$currentStudentName=$s['fname']. ' '.$s['lname'];
	//echo $currentStudentName;
        
	$str .= <<<END
	<table>
		<tr>
			<td>
				<div align="left">
					<br>
					<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="4">Discipline Log Entries </font><font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">- {$s['fname']} {$s['lname']} - {$s['site']} </font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><br>
						<table border="0" cellpadding="3" cellspacing="2" width="100%">
							<tbody><tr>
								<td><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">All discipline referral log entries for you are entered here in a list. Please contact your school administrator for more informaiton on any of these.<br>
	
										<br>
									</font></td>
								<td><img src="{$s['pict']}" alt="" align="right" border="3" height="105" hspace="3" width="95"></td>
							</tr>
						</tbody></table>
					</font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"> </font></div>
				<div align="right">
				</div>
			</td>
		</tr>
	</table>
	
END;
	return($str);
}
function getSchoolYear($date) {
	global $db;
	
	
	$rows = $db->get_results("SELECT q1.start as start, q4.finish as finish, q1.year as year,
								q1.quarter as q1quarter, q4.quarter as q4quarter
								FROM quarters as q1, quarters as q4
								WHERE q1.year = q4.year and q1.quarter = '1' and q4.quarter = '4'", ARRAY_A);
	foreach($rows as $r) {
		$ans = (($date > $r['start']) and ($date < $r['finish']));
//		echo "$ans Q{$r['q1quarter']}-{$r['start']}-   $date   -{$r['finish']}-Q{$r['q4quarter']}<br>";
		if(($date > $r['start']) and ($date < $r['finish'])) return($r);
	}
	return('');
}
function getCurrentYearDates() {
	global $db,$CurrentYear;
	
	
	$row = $db->get_row("SELECT q1.start as start, q4.finish as finish
								FROM quarters as q1, quarters as q4
								WHERE q1.year = q4.year and q1.quarter = '1' and q4.quarter = '4' and
									q1.year = '$CurrentYear' ", ARRAY_A);
	return($row);
}

function createNewDiscipline($studentid) {
	global $db;
	
	$sql = "INSERT INTO discipline set studentid = '$studentid', cuser = '$CurrentUserID' ";
	$db->get_results($sql);
}

function prepareValues($dispid, $edit) {
	global $db;
	
//	echo $dispid;
    $entry = $db->get_row("select * from discipline where disciplineid = '$dispid'", ARRAY_A);
//    print_r($entry);
    $values = $db->get_results("select * from discipline_items",ARRAY_A);
//    print_r($values);
	$arr['sid'] = $entry['studentid'];
	$s = getStudentInfo($arr['sid']);
    foreach($values as $v) {
    	$id = trim($v['item']);
    	$arr[$id] = getEntry($v, $entry[$id], $edit[$v['section']]);
    }
    $arr['sped'] = $db->get_var("SELECT if(exitdate < entrysped, 'yes', 'no') FROM speddata WHERE studentid = '{$arr['sid']}' ");

	$incidentdate = substr($entry['incidentdate'], 0, 10);
	$schoolyearinfo = getSchoolYear($incidentdate);
	$yearstart = $schoolyearinfo['start'];
	$sql = "SELECT count(disciplineid) FROM discipline 
			WHERE incidentdate > '$yearstart' and incidentdate < '$incidentdate' and studentid = '{$entry['studentid']}'";
//	echo $sql;
	$dispcount = $db->get_var($sql);
	$dispcount = $dispcount == '' ? 0 : $dispcount;
	$arr['dispcount'] = $dispcount;
	$sql2 = "select sum(lengthdays) FROM discipline 
				WHERE incidentdate > '$yearstart' and incidentdate < '$incidentdate' and consequence = 'I'
				 and studentid = '{$entry['studentid']}'";
	$issdays = $db->get_var($sql2);
	$issdays = $issdays == '' ? 0 : $issdays;
//	echo $issdays;
	$arr['issdays'] = $issdays;

	$arr['issafter'] = $arr['issdays'] + ($entry['consequence']=='I' ? $entry['lengthdays'] : '0');

	$sql2 = "select sum(lengthdays) FROM discipline 
				WHERE incidentdate > '$yearstart' and incidentdate < '$incidentdate' and consequence = 'S'
				 and studentid = '{$entry['studentid']}'";
//	echo $sql2;
	$sus = $db->get_var($sql2);
//		echo "-$sus)";
	$sus = $sus == '' ? 0 : $sus;
	
	$arr['suspensiondays'] = $sus;
//	echo "INCIDENT DATE: $incidentdate SCHOOL START DATE: $yearstart DISPCOUNT: $dispcount<br>";

	$arr['after'] = $arr['suspensiondays'] + ($entry['consequence']=='S' ? $entry['lengthdays'] : '0');
	$arr['guardianinfo'] = "
	{$s['parent']}<br>
	Site: {$s['parentvillage']}<br>
	Phone: {$s['parentphone']}<br>
	";
//	echo "--".$arr['sped'];
//    print_r($arr);
	return($arr);
}

function get2ArrayOptions($item,$val,$sel) {
//print_r($val);
	for($i=0;$i<count($val);$i++) {
		$sel1 = ($sel == $val[$i]) ? "selected" : "";
		$options .= "<option value='{$val[$i]}' $sel1>{$item[$i]}</option>\n";
	}
	return($options);
}

function saveDisciplineEntry($values) {
	global $db;
	
	while(list($var, $val) = each($values) ) {
		if(substr($var, 0,2) == 'i_') {
			$v = substr($var, 2, 100);
			$str .= $str == '' ? "" : ",";
			$str .= "$v = '$val'";
		}
	}
	$sql = "UPDATE discipline SET $str WHERE disciplineid = '{$values['disciplineid']}'";
	$db->get_results($sql);
//	echo $sql;
}

function getEntry($v, $val, $edit) {
//	echo "$val, $edit==<br>";
//	$str = "<input type=text name={$v['item']} value='$val'>";
	if($v['kind'] == 'text') {
		if($edit) {
			$str = "<input type=text name=i_{$v['item']} id=i_{$v['item']} value='$val'>";
		} else {
			$str = $val;
		}
	} else if($v['kind'] == 'int') {
		if($edit) {
			$str = "<input type=text name=i_{$v['item']} id=i_{$v['item']} value='$val'>";
		} else {
			$str = $val;
		}
	} else if($v['kind'] == 'date') {
		if($edit) {
			$str = "<input type=text name=i_{$v['item']} id=i_{$v['item']} value='$val'>";
		} else {
			$str = $val;		
		}	
	} else if($v['kind'] == 'hidden') {
		$str = "<input type=hidden name={$v['item']} id={$v['item']} value='$val'>";
	} else if($v['kind'] == 'textarea') {
		if($edit) {
			$str = "<textarea name=i_{$v['item']} id=i_{$v['item']} rows=10 cols=88>$val</textarea>";
		} else {
			$str = "<div style='text-align: left; border: 1px solid black; padding: 5px;'>$val</div>";		
		}	
	} else if($v['kind'] == 'datetimestamp') {
		if($edit) {
			$str = "<input type=text name=i_{$v['item']} id=i_{$v['item']} value='$val'>";		
		} else {
			$str = $val;		
		}	
	} else if($v['kind'] == 'select') {
		if($edit) {
			$options = get2ArrayOptions(explode(",",$v['aux1']), explode(",",$v['aux2']),$val);
			$str = "<select name=i_{$v['item']} id=i_{$v['item']}>$options</select>";		
		} else {
			$str = $val;		
		}
	} else {
		$str = 'UNDEFINED TYPE: '.$v['kind']."--";
	}
	return($str);
}
function createMainScreen($dispid) {

	$edit[0] = true;
	$edit[1] = PrivilegeB('B21')!='none';
	$edit[2] = PrivilegeB('B23')!='none';
	$edit[3] = PrivilegeB('B25')!='none';

	$values = prepareValues($dispid, $edit);
	$str .= "<a href=index.php?cmd=disciplineEditNew&subcmd=new&studentid={$values['sid']}>Create Discipline Referral</a>";

//	print_r($values);
	$str .= <<<END
	<form action=?cmd=disciplineEditNew&disciplineid=$dispid method=post>
	{$values['studentid']}
	{$values['disciplineid']}
	
END;
	
	$str .= <<<END
	<table border="0" cellpadding="2" cellspacing="2" width="80%">
					<tbody>

END;
         // echo 'view individual'.  PrivilegeB('$B20').'AND'.  PrivilegeB('B21').'AND'.  PrivilegeB('B22');
        //view individual
        //CHECKED. NO PROBLEM, THE RETURN IS "IS DISTRICT" 
	if(PrivilegeB('B20')!='none') {
          
		$str .= createReferralInfo($values);
	}
        //view admin
	if(PrivilegeB('B22')!='none') {
          //  echo 'view admin';
		$str .= createAdmin($values);
	}
        //view sped
	$str .= "</tbody></table>";
	if(PrivilegeB('B24')!='none' and ($values['sped'] == 'yes'))  {
          //  echo 'view sped';
		$str .= createSpecialEd($values);
	}
	if($edit[1] or $edit[2] or $edit[3]) { 
		$str .=<<<END
			<div >
				<p><input name="cmdSearch" value="Save Log Entry" type="submit"></p>
			</div>
			</form>
END;
	}
	$str .= createPriorEventList($values['sid'], true);
	
	return($str);
	
}

function createReferralInfo($values) {
//	print_r($values);
//	echo $values['title'];
	$str =<<<END
		<tr>
			<td colspan="4" bgcolor="#ccffff">
				<div align="right">
					<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Discipline Referral Information</font></b></div>
			</td>
		</tr>
		<tr>
			<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Incident Date &amp; Time:</b></font></td>
			<td width="50%">
				<div align="left">
					{$values['incidentdate']}
				</div>
			</td>
			<td width="50%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Event Title:</b></font></td>
			<td nowrap="nowrap" width="15%">
				<div align="left">
					{$values['title']}
				</div>
			</td>
		</tr>
		<tr>
			<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Referring Staff Member</b></font></td>
			<td width="100%">{$values['referer']}</td>
			<td nowrap="nowrap" width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Log Entry By:</b></font></td>
			<td width="15%">{$values['logger']}</td>
		</tr>
		<tr>
			<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Others Involved:</b></font></td>
			<td width="100%">
				{$values['dstatus']}
			</td>
			<td nowrap="nowrap" width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Incident Location:</b></font></td>
			<td width="15%">
				{$values['loc']}
			</td>
		</tr>
		<tr>
			<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Type of Offense:</b></font></td>
			<td width="100%">
				{$values['typeofoffense']}			
			</td>
			<td nowrap="nowrap" width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Scale of This Infraction:</b></font></td>
			<td width="15%">
				{$values['scale']}
			</td>
		</tr>
		<tr>
			<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Possible Motivation:</b></font></td>
			<td width="100%">
				{$values['motivation']}
			</td>
			<td nowrap="nowrap" width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Handled in Classroom or<br>
						Referred to Office?</b></font></td>
			<td width="15%">
				{$values['handled']}
			</td>
		</tr>
		<tr>
			<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Referral Comments:<br>
					</b></font></td>
			<td colspan="3">
				<div align="center">					
					{$values['notes']}
				</div>
				<div align="center">
					
				</div>
			</td>
		</tr>
		<tr>
			<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>What has been tried to<br>
						address this behavior?:
					</b></font></td>
			<td colspan="3">
				<div align="center">
					{$values['addlcomments']}
					
				</div>
			</td>
		</tr>
END;
	return($str);
}

function createAdmin($values) {
	
	if($values['sped'] == 'yes') {
		$warning = "<img src=/geges/warning_sign.png alt=IEP Warning border=0 height=113 width=176>";
	}
	$logentries = $values['dispcount'];
	$issdays = $values['issdays'];
	$issafter = $values['issafter'];
	$prior = $values['suspensiondays'];
	$newdisp = $values['after'];
	$guardianinfo = $values['guardianinfo'];
	$str =<<<END
						<tr>
							<td colspan="4" bgcolor="#ccffff">
								<div align="right">
									<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Administrator Action &amp; Data Tracking</font></b></div>
							</td>
						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Prior Log Entries (SY):</b></font></td>
							<td width="100%"><font color="#cc0000" size="2"><b> </b></font><font size="2"><b>{$logentries}</b></font></td>
							<td colspan=2></td>
						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>ISS Days (SY):</b></font></td>
							<td width="100%"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><span id=i_prior>$issdays</span></b> day(s) <u>before</u> today</font></td>
							<td width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Prior Supension Days (SY):</b></font></td>
							<td width="15%"><font color="red" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
								<b><span id=s_prior>$prior</span></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"> days <u>before</u> today</font>
							</td>
						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
								<b>New Total Days(SY):</b></font>
							</td>
							<td width="100%"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
								<b><span id=i_after>$issafter</span></b> ISS day(s) <u>before</u> today</font>
							</td>
							<td width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>New Total Days (SY):</b></font></td>
							<td width="15%">
								<div align="left">
									<font color="red" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><span id=s_after>$newdisp</span></b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"> S days <u>after</u> this event</font></div>
	
							</td>

						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Non-Weapon Incident:</b></font></td>
							<td width="100%">
							{$values['nonweapon']}
							</td>
							<td width="15%">
								<div align="left">
	
									<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Weapon Incident:</b></font></div>
							</td>
							<td width="15%">
								{$values['weapon']}
							</td>

						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Number of Victims:</b></font></td>
							<td width="100%">
								{$values['victimno']}
							</td>
							<td width="15%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Victim Type:</b></font></td>
							<td width="15%">
								{$values['victimtype']}
							</td>

						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Police Involved?:</b></font></td>
							<td width="100%">
								{$values['police']}
							</td>
							<td rowspan="4">
								<div align="left" nowrap>
									<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Suspension or ISS Dates:<br>
										</b></font><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>
											$warning
										</b></font></div>
							</td>
							<td bgcolor="#98fb98">
								<div align="center">
									<font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Suspension / ISS Start Date</b></font></div>
							</td>
						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Consequence:</b></font></td>
							<td width="100%">
								{$values['consequence']}
							</td>
							<td bgcolor="#98fb98" width="15%">{$values['startdate']}</td>
						</tr>
						<tr>
							<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Suspension / ISS Length<br>
										in School Days:</b></font></td>
							<td width="100%">{$values['lengthdays']} <font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>School Days</b></font></td>
							<td bgcolor="#ffc0cb" width="15%">
								<div align="center">
									<font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Suspension / ISS End Date</b></font></div>
							</td>
							</tr>
							<tr>
								<td nowrap="nowrap" width="22%"></td>
								<td width="100%">
									<div align="center">
										<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><font size="2"><a href="http://dart.bssd.org/attendance_change_student.html">Calendar Detail View</a></font></font></div>
								</td>
								<td bgcolor="#ffc0cb" width="15%">{$values['enddate']}</td>
							</tr>
							<tr>
								<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Guardian Contact Info:</b></font></td>
								<td valign="top" width="100%"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
									$guardianinfo
								</td>
								<td>
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Guardian Contacted?:</b></font></div>
								</td>
								<td>
								{$values['guardian']}
								</td>
							</tr>
							<tr>
								<td nowrap="nowrap" width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Administrator Comments:</b></font></td>
								<td colspan="3" valign="top">{$values['admincomments']}</td>
							</tr>

END;
		return($str);
}

function createSpecialEd($values) {
	$str =<<<END
			<table border="0" cellpadding="0" cellspacing="2" width="80%">
				<tbody><tr>
					<td colspan="4" bgcolor="#ffc0cb">
						<div align="right">
							<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Special Education Discipline Tracking</font></b></div>
					</td>
				</tr>
				<tr>
					<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Educational Services?:</b></font><font color="#000000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><strong><br>
							</strong></font></td>
					<td width="184">
						{$values['eduservice']}
					</td>
					<td width="188">
						<div align="right">
							<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Did the IEP Team Meet?:</b></font></div>
					</td>
					<td>
						{$values['iepmeet']}
					</td>
				</tr>
				<tr>
					<td width="22%"><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Related to Disability?:</b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><br>
						</font></td>
					<td width="184">
						{$values['relateddisability']}
					</td>
					<td width="188">
						<div align="right">
							<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Date of Meeting:</b></font></div>
					</td>
					<td>{$values['meetdate']}</td>
				</tr>
				<tr>
					<td width="22%">
						<div align="center">
							<font color="blue" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Special Ed Questions?</b></font><font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><br>
								</b></font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><br>
								<a href="mailto:spedhelp@bssd.org"><b>Contact Special Ed Staff</b></a><br>
								<br>
							</font></div>
					</td>
					<td colspan="3"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b><font color="red">Important Note:</font></b>
A special education student may be suspended for a total of 10 school 
days in a school year without the need for services or a  meeting.  
Before the 11th day of suspension, however, the IEP team must convene.  
Based on the determination that the behavior was or was not a manifestation of the disability,
the team will either suspend the student and make arrangements to 
provide services,  or will amend the IEP to better meet the student&#8217;s 
needs.  <br>
							<br>
								In addition, if the the incident is found by the IEP team to be related to the student's disability, the student can't be suspended for that incident. The IEP Team must then conduct a "Functional Behavior Analysis", and create or review a behavior plan.<br>
						</font>
						<ul>
							<li><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>BSSD Memo:</b> Discipline Procedures for Special Education</font>
						</li></ul>
					</td>
				</tr>
			</tbody></table>
END;
	return($str);
}

function createPriorEventList($studentid, $edit) {
	global $db;
	
//	echo $studentid;
	
    $sql = "select *, DATE_FORMAT(incidentdate, '%m.%d.%Y') as dt from discipline where studentid = '$studentid' order by incidentdate DESC";
//echo $sql;
    $results = $db->get_results($sql, ARRAY_A);
	if($_GET['subcmd'] == 'export') {
		exportSQL($sql);
	}
	$export = "<br><a href=?cmd=disciplineListNew&subcmd=export&studentid=$studentid>Export</a>";

	foreach($results as $r) {
		while(list($var, $val) = each($r) ) { $r[$var] = addRedDot($val); }
		if($edit == true) {
			$date =<<<END
			<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
							<a href="?cmd=disciplineEditNew&disciplineid={$r['disciplineid']}">{$r['dt']}</a></font>
END;
		} else {
			$date = "{$r['dt']}";
		}
		//TRY COMMENT THE CHECK
               // if(getSecLevel('dispdel') > 0) {
			$del = "<a href=?cmd=disciplineListNew&studentid=$studentid&disciplineid={$r['disciplineid']}&subcmd=del onclick=return(confirmMsg('delete?'))>Del</a>";
			$deltitle = "Action";
		//}
		$ind .=<<<END
			<tr>
				<td >
					<div align="center">
						$date
					</div>
				</td>
				<td width="191">
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['referer']}</font></div>
				</td>
				<td width="191">
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['title']}</font></div>
				</td>
				<td width="167">
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['typeofoffense']}</font></div>
				</td>
				<td width="53">
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['scale']}</font></div>
				</td>
				<td width="112">
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['consequence']}</font></div>
				</td>
				<td width="112">
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['handled']}</font></div>
				</td>
				<td>
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">{$r['lengthdays']}</font></div>
				</td>
				<td>
					<div align="center">
						<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">$del</font></div>
				</td>
			</tr>
END;
	}
	$str =<<<END
							<table border="0" cellpadding="0" cellspacing="2" width="80%">
							<tbody><tr>
								<td colspan="9" bgcolor="#ccffff">
									<div align="right">
										<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Prior Discipline Events (Cumulative)</font></b></div>
								</td>
							</tr>
							<tr>
								<td nowrap>
									<div align="center">
										<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Date</b></font></div>
								</td>
								<td width="191">
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Referred By</b></font></div>
								</td>
								<td width="191">
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Title</b></font></div>
								</td>
								<td width="167">
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Behavior</b></font></div>
								</td>
								<td width="53">
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Scale </b></font></div>
								</td>
								<td width="112">
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Consequence</b></font></div>
								</td>
								<td width="112">
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Handled By</b></font></div>
								</td>
								<td>
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>Days</b></font></div>
								</td>
								<td>
									<div align="center">
										<font color="#cc0000" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>$deltitle</b></font></div>
								</td>
							</tr>
$ind
						</tbody></table>
						$export
END;
	return($str);
}

function addRedDot($val) {
global $imageURL;
$picture1=$imageURL."red_dot.gif";
	if($val == '') {
		return("<img src=$picture1>");
	} else {
		return($val);
	}
}


function sortDisciplineHeader($title, $name,$sort, $dir, $params) {
global $imageURL;
$picture1=$imageURL."up.gif";
$picture2=$imageURL."down.gif";
	$display = $sort != $name ? "" : ($dir == 'ASC' ? "<img src=$picture1>": "<img src=$picture2>");
	$dir = $dir == 'ASC' ? "DESC": ($dir == '' ? "DESC" : "ASC");
	$str = <<<END
	<td nowrap>
		<div align="center">
			<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>
				<a href=?sort=$name&dir=$dir$params>$title $display</a>
			</b></font></div>
	</td>
END;
	return($str);
}

function valueDiscipline($val) {
	$str = <<<END
	<td  nowrap>
		<div align='center'>
			<font face='Arial,Helvetica,Geneva,Swiss,SunSans-Regular' size='2'>$val</font>
		</div>
	</td>
END;
	return($str);
	/*
	$str = <<<END
	<td  nowrap>
		<div align="center">
			<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">$val</font></div>
	</td>
END;
	return($str);
	*/
}
function testValueEvent($val) {
global $imageURL;
$picture1=$imageURL."red_dot.gif";

	if($val == '') $val = "<img src=$picture1>";
	$str = <<<END
	<td  nowrap>
		<div align='center'>
			<font face='Arial,Helvetica,Geneva,Swiss,SunSans-Regular' size='2'>$val</font>
		</div>
	</td>
END;
	return($str);
}
function createAllPriorEventsNew()

{
    
	global $db, $currentMySite, $currentUserID   ;
	
	$p = 'disciplineAll';
	
	$page = $_GET['page'] == '' ? '100' : $_GET['page'];;
	$start = $_GET['num'] == '' ? '1' : $_GET['num'];
	$sort =  $_GET['sort'];
	$dir =  $_GET['dir'];
	
        $_GET['site'] = PrivilegeB(B26) == 'none' ? $currentMySite : $_GET['site'];
        $site = $_GET['site'];
        $where .= $_GET['site'] != '' ? " and student.site = '{$_GET['site']}'" : "";
	
	
        $group=$_GET['group'];
        $groupSelect="select studentid from listvalues where listid=".$group;
        $groupSelect1=$group!=''? "and student.studentid in (".$groupSelect.")":'';
        //echo $groupSelect1;
        
	//add two filters, sped (Y/N) and status (active/inactive) 
        $sped =  $_GET['sped'];
	
        if($sped == 'Y') {
		//$spedselect=  " and student.studentid IN (SELECT studentid FROM speddata WHERE entrysped > exitdate) ";
	$spedselect="and student.sped='Y'";
            
        }
	if($sped == 'N') {
		// $spedselect= " and student.studentid NOT IN (SELECT studentid FROM speddata WHERE entrysped > exitdate) ";
	$spedselect="and student.sped='N'";
            
        }
	
        //$status = $_GET['status'] == '' ? "Current" : $_GET['status'];
        
        //$statusselect = $status != 'all' ? ($status == 'Current' ? " and student.status = 'Active' " : "and student.status='Inactive'"): "";
	 
        $status = $_GET['status'] == '' ? "Active" : $_GET['status'];
        
       
        
        //$statusselect = $status != 'all' ? ($status == 'Current' ? " and student.status = 'Active' " : "and student.status='Inactive'"): "";
	
        //$status = $_GET['status'] ;
        if($status=='Active'){
            $statusselect="and student.status='Active'";
        }
        if($status=='Inactive'){
            $statusselect="and student.status='Inactive'";
        }
        if($status=='All'){
            $statusselect;
        }
        
         $where.=$groupSelect1;
         $where.=$spedselect;
         $where.=$statusselect;
        
        
        //$dates is empty
	$dates = getCurrentYearDates();
 
	$siteList = getSitesOptions($site);
      
    //   $activeList=getStatusOption();
      
        $listid = $_GET['listid'];	
        $mylists = getMyList($currentUserID, 'all');
        //$mylists = getMyListSped($currentUserID);
        $listOptions = getOptionList($mylists, $listid);
        
       
       
	$sitepulldown = "
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=dir value='$dir'>
	<input type=hidden name=page value='$page'>
        <input type=hidden name=sped value='$sped'>
        <input type=hidden name=group value='$group'>
        <input type=hidden name=status value='$status'>
	
	<select name=\"site\" onChange=\"submit()\">
		<option value='' align= center>All Sites</option>
		$siteList
	</select>
	</form>";
        
         
         $listpulldown = "
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=dir value='$dir'>
	<input type=hidden name=page value='$page'>
        <input type=hidden name=site value='$site'>
	<input type=hidden name=sped value='$sped'>
        <input type=hidden name=status value='$status'>
        
        
	<select name=\"group\" onChange=\"submit()\">
		<option value='' align=center>No List</option>
		$listOptions
	</select> 
	</form>";
        
        
          ${$status."_status"} = "selected";
	$statuspulldown = "
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=dir value='$dir'>
        <input type=hidden name=site value='$site'>
	<input type=hidden name=group value='$group'>
        <input type=hidden name=sped value='$sped'>
        
	<select name=\"status\" onChange=\"submit()\">
		<option value='Active' $Active_status >Active</option>
                <option value='Inactive' $Inactive_status>Inactive</option>
                <option value='All' $All_status>All</option>
	</select>
	</form>";
	
        ${$sped."_sped"} = "selected";
	$spedpulldown = "
	<td> 
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=dir value='$dir'>
	<input type=hidden name=site value='$site'>
	<input type=hidden name=status value='$status'>
	<input type=hidden name=sped value='$group'>
        
	<select name='sped' onChange='submit()'>
		<option value=''>All Students</option>
		<option value='Y' $Y_sped>SpEd Y</option>
		<option value='N' $N_sped>SpEd N</option>
	</select> </form>
	</select>
	</form>
	</td>";
        
                        
	
       if ($sort != '') $order = "ORDER BY $sort $dir, incidentdate DESC";


	$sqlcount = "SELECT count(*) from discipline, student
    		WHERE discipline.studentid = student.studentid and 
    			incidentdate > '{$dates['start']}' and incidentdate < '{$dates['finish']}' $where $groupSelect1 $spedselect $statusselect $order
    		";
                     
             $ct = $db->get_var($sqlcount);
             $pagenum = intval($ct/$page)+1;
        
        $sql = "SELECT fname,lname,student.studentid,referer,title,status, sped,typeofoffense,scale, consequence, handled, lengthdays,
    		DATE_FORMAT(incidentdate, '%m.%d.%Y') as dt, student.site as ssite,disciplineid from discipline,student 
    		WHERE discipline.studentid = student.studentid  $where and
    			incidentdate > '{$dates['start']}' and incidentdate < '{$dates['finish']}' 
    		$order";
	
               $results = $db->get_results($sql, ARRAY_A);
               
               
               
	if($_GET['subcmd'] == 'export') {
		exportSQL($sql);
	}
	$export = "<br><a href=?cmd=$p&subcmd=export&site=$site&sort=$sort&dir=$dir>Export</a>";

	$start = min($start, intval($ct/$page)*$page) == 0 ? '1' : min($start, intval($ct/$page)*$page);
	if($ct > $page) {
		for($j=1; $j <= intval($ct/$page)+1; $j++) {
			$color = ($start == $j) ? "lightblue" : "white";
			$links .= "<a href=?cmd=$p&page=$page&site=$site&num=".$j."&sort=$sort&dir=$dir style='background-color: $color;'>$j</a> ";
		}
		$prev = ($start == 1) ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : "<a href=?cmd=$p&page=$page&site=$site&num=". ($start - 1) ."&sort=$sort&dir=$dir> &lt;&lt;prev </a>";
		$next = ($start == $pagenum) ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : "<a href=?cmd=$p&site=$site&page=$page&num=". ($start + 1) ."&sort=$sort&dir=$dir> next&gt;&gt; </a>";
		$heading = "$start of $pagenum";
	}
        
        
	$displaycount = <<<END
        
        
	<table align= center>
		<tr>
                <td>Sites: </td> <td>$sitepulldown</td>
                <td> Group: </td><td>$listpulldown</td> 
                <td> Status: </td><td>$statuspulldown</td> 
                <td> SpEd Status: </td><td>$spedpulldown</td> 
        
                </tr> 
	</table>
	<br>
	<form>
	<input type=hidden value='$start' name=num>
	<input type=hidden value='$site' name=site>
	<input type=hidden value='$sort' name=sort>
	<input type=hidden value='$dir' name=dir>
	<input type=hidden value='$start' name=num>
	<input type=hidden value='$p' name=cmd>

	<table align=center><tr><td>$prev $links $next</td><td>Number to display: <input type=text name=page value='$page' size=3><input type=submit value=GO> Total Number: $ct</td></tr></table>
	</form>
END;


	$j=0;
	$params = "&cmd=$p&page=$page&num=$num&site=$site&list=$group&status=$status&sped=$sped";
	$values['name'][$j] = sortDisciplineHeader("Date", 'incidentdate', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$date}");

	$values['name'][$j] = sortDisciplineHeader("SITE", 'student.site', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$r['ssite']}");
	
	$values['name'][$j] = sortDisciplineHeader("Name", 'lname', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$name}");
        
       
        $values['name'][$j] = sortDisciplineHeader("Status", 'status', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$stu_status}");
        
       	
        $values['name'][$j] = sortDisciplineHeader("SpEd Status", 'sped', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$stu_sped}");    
        
	$values['name'][$j] = sortDisciplineHeader("Referrer", 'referer', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['referer']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Title", 'title', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['title']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Type Of Offense", 'typeofoffense', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['typeofoffense']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Scale", 'scale', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['scale']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Consequence", 'consequence', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['consequence']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Handled By", 'handled', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['handled']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Length Of Days", 'lengthdays', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['lengthdays']).\"";
	
//	$test = '".testValueEvent($r['scale']). "';
	$v1 = "<tr>";
	$v2 = "<tr>";
	for($j = 0; $j< count($values['name']); $j++) {
		$v1 .= $values['name'][$j] ;
		$v2 .= $values['fill'][$j] ;
	}
	$v1 .= "</tr>";
	$v2 .= "</tr>";
	$str = $displaycount;
	$str .= <<<END
	<table border=0 align=center style='width: 1000px;'>
	<tr>
		<td colspan="$j" bgcolor="#ccffff">
			<div align="right">
				<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Prior Discipline Events (Cumulative)</font></b></div>
		</td>
	</tr>
END;
	$str .= $v1;
	for($i = ($start-1)*$page; $i < min($ct, ($start*$page)); $i++) {
			$r = $results[$i];
	//		print_r($r);
			$date =<<<END
					<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
									<a href="?cmd=disciplineEditNew&disciplineid={$r['disciplineid']}">{$r['dt']}</a></font>
END;
			$name = trim($r['lname']).",".trim($r['fname']);
		$stu_status=$r['status'];
                $stu_sped=$r['sped'];
			eval("\$str .= \"$v2\";");
	//		$str .= "$v2";
	}
	$str .= "</table><center> <font size=2>$export</center><br>";

	return($str);
}


 /*{
      
	global $db, $currentMySite, $currentUserID   ;
	
	$p = 'disciplineAll';
	
	$page = $_GET['page'] == '' ? '100' : $_GET['page'];;
	$start = $_GET['num'] == '' ? '1' : $_GET['num'];
	$sort =  $_GET['sort'];
	$dir =  $_GET['dir'];
	
	 
        $_GET['site'] = PrivilegeB(B26) == 'none' ? $currentMySite : $_GET['site'];
        $site = $_GET['site'];
	
        $group=$_GET['group'];
        $groupSelect="select studentid from listvalues where listid=".$group;
        $groupSelect1=$group!=''? "and student.studentid in (".$groupSelect.")":'';
       // echo $groupSelect1;
        
	$where .= $_GET['site'] != '' ? " and student.site = '{$_GET['site']}'" : "";
	
	
	//add two filters, sped (Y/N) and status (active/inactive) 
        $sped =  $_GET['sped'];
        if($sped == 'Y') {
		//$spedselect=  " and student.studentid IN (SELECT studentid FROM speddata WHERE entrysped > exitdate) ";
	$spedselect="and student.sped='Y'";
            
        }
	if($sped == 'N') {
		// $spedselect= " and student.studentid NOT IN (SELECT studentid FROM speddata WHERE entrysped > exitdate) ";
	$spedselect="and student.sped='N'";
            
        }
	 //$status = $_GET['status'] == '' ? "Current" : $_GET['status'];
        
        //$statusselect = $status != 'all' ? ($status == 'Current' ? " and student.status = 'Active' " : "and student.status='Inactive'"): "";
	
        $status = $_GET['status'] ;
        if($status=='Current'){
            $statusselect="and studdnt.status='Active'";
        }
        if($status=='Prior'){
            $statusselect="and student.status='Inactive'";
        }
        
	
	
	
	
        //$dates is empty
	$dates = getCurrentYearDates();
 
	$siteList = getSitesOptions($site);
        
        
        $listid = $_GET['listid'];	
        $mylists = getMyList($currentUserID, 'all');
        //$mylists = getMyListSped($currentUserID);
        $listOptions = getOptionList($mylists, $listid);
        
        
	$sitepulldown = "
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=dir value='$dir'>
	<input type=hidden name=page value='$page'>
        <input type=hidden name=sped value='$sped'>
        <input type=hidden name=group value='$group'>
        <input type=hidden name=status value='$status'>
	
	<select name=\"site\" onChange=\"submit()\">
		<option value='' align= center>All Sites</option>
		$siteList
	</select>
	</form>";
        
          ${$group."_group"} = "selected";
         $listpulldown = "
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=dir value='$dir'>
	<input type=hidden name=page value='$page'>
        <input type=hidden name=site value='$site'>
	<input type=hidden name=sped value='$sped'>
        <input type=hidden name=status value='$status'>
        
        
	<select name=\"group\" onChange='submit()'>
		<option value='' align=center>No List</option>
		$listOptions
	</select> </form>
	</select>
	</form>";
        
        
        ${$status."_status"} = "selected";
	$statuspulldown = "
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=dir value='$dir'>
        <input type=hidden name=site value='$site'>
	<input type=hidden name=group value='$group'>
        <input type=hidden name=sped value='$sped'>
        
	<select name=\"status\" onChange=\"submit()\">
		<option value='Current' $Current_status>Current</option>
                <option value='' $all_status>All</option>
		<option value='Prior' $Prior_status>Prior</option>
	</select>
	</form>";
	
        ${$sped."_sped"} = "selected";
	$spedpulldown = "
	<td> 
	<form >
	<input type=hidden name=cmd value=$p>
	<input type=hidden name=sort value='$sort'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=dir value='$dir'>
	<input type=hidden name=site value='$site'>
	<input type=hidden name=status value='$status'>
	<input type=hidden name=sped value='$group'>
        
	<select name='sped' onChange='submit()'>
		<option value=''>All Students</option>
		<option value='Y' $Y_sped>SpEd Y</option>
		<option value='N' $N_sped>SpEd N</option>
	</select> </form>
	</select>
	</form>
	</td>";
        
      
      
      
        

	$sqlcount = "SELECT count(*) from discipline, student
    		WHERE discipline.studentid = student.studentid and 
    			incidentdate > '{$dates['start']}' and incidentdate < '{$dates['finish']}' $where $groupSelect1  $spedselect $statusselect
    		";
                     
                        echo 'sqlcount'.$sqlcount;
                        //in the fake one, $sqlcount is senven.
                        
	$ct = $db->get_var($sqlcount);
	$pagenum = intval($ct/$page)+1;
     //   echo $ct. 'page'.$pagenum;
	if ($sort != '') $order = "ORDER BY $sort $dir, fname DESC";
/*    $sql = "SELECT *, DATE_FORMAT(incidentdate, '%m.%d.%Y') as dt, student.site as ssite from discipline,student 
    		WHERE discipline.studentid = student.studentid  $where and
    			incidentdate > '{$dates['start']}' and incidentdate < '{$dates['finish']}' 
    		$order";
*//*
    $sql = "SELECT fname,lname,student.studentid,referer,title,status, typeofoffense,scale, consequence, handled, lengthdays,
    		DATE_FORMAT(incidentdate, '%m.%d.%Y') as dt, student.site as ssite,disciplineid from discipline,student 
    		WHERE discipline.studentid = student.studentid $where $groupSelect1 $spedselect $statusselect $order";
        /*$where and
    			incidentdate > '{$dates['start']}' and incidentdate < '{$dates['finish']}' 
    		$order";
//	echo $sql;
    */
        
     /*   $results = $db->get_results($sql, ARRAY_A);
    if($result!=null) echo'the result is not null';
    
	if($_GET['subcmd'] == 'export') {
		exportSQL($sql);
	}
	$export = "<br><a href=?cmd=$p&subcmd=export&site=$site&sort=$sort&dir=$dir>Export</a>";

	$start = min($start, intval($ct/$page)*$page) == 0 ? '1' : min($start, intval($ct/$page)*$page);
	if($ct > $page) {
		for($j=1; $j <= intval($ct/$page)+1; $j++) {
			$color = ($start == $j) ? "lightblue" : "white";
			$links .= "<a href=?cmd=$p&page=$page&site=$site&num=".$j."&sort=$sort&dir=$dir style='background-color: $color;'>$j</a> ";
		}
		$prev = ($start == 1) ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : "<a href=?cmd=$p&page=$page&site=$site&num=". ($start - 1) ."&sort=$sort&dir=$dir> &lt;&lt;prev </a>";
		$next = ($start == $pagenum) ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : "<a href=?cmd=$p&site=$site&page=$page&num=". ($start + 1) ."&sort=$sort&dir=$dir> next&gt;&gt; </a>";
		$heading = "$start of $pagenum";
	}
        
	$displaycount = <<<END
        
        
	<table align= center>
		<tr>
                <td>Sites: </td> <td>$sitepulldown</td>
                <td> Group: </td><td>$listpulldown</td> 
                 <td> Status: </td><td>$statuspulldown</td> 
                <td> SpEd Status: </td><td>$spedpulldown</td> 
                </tr> 
	</table>
	<br>
	<form>
	<input type=hidden value='$start' name=num>
	<input type=hidden value='$site' name=site>
	<input type=hidden value='$sort' name=sort>
	<input type=hidden value='$dir' name=dir>
	<input type=hidden value='$start' name=num>
	<input type=hidden value='$p' name=cmd>

	<table align=center><tr><td>$prev $links $next</td><td>Number to display: <input type=text name=page value='$page' size=3><input type=submit value=GO> Total Number: $ct</td></tr></table>
	</form>
END;


	$j=0;
	$params = "&cmd=$p&page=$page&num=$num&site=$site&list=$group&status=$status&sped=$sped";
	$values['name'][$j] = sortDisciplineHeader("Date", 'incidentdate', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$date}");

	$values['name'][$j] = sortDisciplineHeader("SITE", 'student.site', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$r['ssite']}");
	
	$values['name'][$j] = sortDisciplineHeader("Name", 'fname', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$name}");
	
       
        $values['name'][$j] = sortDisciplineHeader("Status", 'status', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$stu_status}");
        
       	
        $values['name'][$j] = sortDisciplineHeader("SpEd Status", 'sped', $sort,$dir, $params);
	$values['fill'][$j++] = valueDiscipline("{\$stu_sped}");    
        
	
	$values['name'][$j] = sortDisciplineHeader("Referrer", 'referer', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['referer']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Title", 'title', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['title']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Type Of Offense", 'typeofoffense', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['typeofoffense']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Scale", 'scale', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['scale']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Consequence", 'consequence', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['consequence']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Handled By", 'handled', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['handled']).\"";
	
	$values['name'][$j] = sortDisciplineHeader("Length Of Days", 'lengthdays', $sort,$dir, $params);
	$values['fill'][$j++] = "\".testValueEvent (\$r['lengthdays']).\"";
	
//	$test = '".testValueEvent($r['scale']). "';
	$v1 = "<tr>";
	$v2 = "<tr>";
	for($j = 0; $j< count($values['name']); $j++) {
		$v1 .= $values['name'][$j] ;
		$v2 .= $values['fill'][$j] ;
	}
	$v1 .= "</tr>";
	$v2 .= "</tr>";
	$str = $displaycount;
	$str .= <<<END
	<table border=0 align=center style='width: 1000px;'>
	<tr>
		<td colspan="$j" bgcolor="#ccffff">
			<div align="right">
				<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Prior Discipline Events (Cumulative)</font></b></div>
		</td>
	</tr>
END;
	$str .= $v1;
	for($i = ($start-1)*$page; $i < min($ct, ($start*$page)); $i++) {
			$r = $results[$i];
	//		print_r($r);
			$date =<<<END
					<font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">
									<a href="?cmd=disciplineEditNew&disciplineid={$r['disciplineid']}">{$r['dt']}</a></font>
END;
			$name = trim($r['fname'])."&nbsp;".trim($r['lname']);
		        $stu_status=$r['status'];
			eval("\$str .= \"$v2\";");
	//		$str .= "$v2";
	}
	$str .= "</table><br><center> <font size=4>$export</center>";

	return($str);

}*/



?>