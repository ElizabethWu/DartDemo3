<?php

// ==================================================================

//  Author: Robert Joseph (dart@vizmotion.com)

//	 Web: http://wiki.bssd.org/index.php/DART_System

// ==================================================================



$mylists = getMyListSped($currentUserID, 'all');


$listid = ($_GET['listid'] == "") ? $mylists[0]['listid'] : $_GET['listid'];



$listInfo = getListInfo($listid);

$listname = $listInfo['listname'];



$listOptions = getOptionList($mylists, $listid);

while(list($var, $val) = each ($_GET) ) {
	$params .= $params != '' ? '&': '';
	$params .= "$var=$val";
}
$params = urlencode($params);
// echo $params;

$headerspedstatus=$_GET['spedstatus'];
$headerstartdate=$_GET['startdate'];
$headerenddate=$_GET['enddate'];
$headerschoolyear=$_GET['schoolyear'];
$spedstatusoptions = statusOptionList($_GET['spedstatus']);


//all the options in terms of list selection
$updateList = "<form name=editList action=index.php method=get>

					<input type=hidden name=cmd value=spedlist>

					<input type=hidden name=module value=sped>
					
					<select name='listid' onChange='submit()'>

						$listOptions

					</select> Select to edit list</form>

				";




$_GET['sortval'] = ($_GET['sortval'] == '') ? 'lname' : $_GET['sortval'];
$_GET['sortdir'] = ($_GET['sortdir'] == '') ? 'ASC' : $_GET['sortdir'];

${'sortval_'.$_GET['sortval']} = 'selected';
${'sortdir_'.$_GET['sortdir']} = 'selected';

//echo 'the listid is'.$listid;
$students = getStudentListSep($listid, $_GET);
$template = spedListTemplate();
$template1 = $template[1];
$i;
foreach($students as $stu) {
$i++;
	
	$studentid = $stu['studentid'];
//echo $studentid."   ";
	//$sped = ($stu['entrysped'] >=$stu['exitdate'] and $stu['entrysped']!='')? "Yes" : "No";
        $sped = ($stu['entrysped'] >$stu['exitdate'] )? "Yes" : "No";
     //   $sped=($stu['sped']=='Y')?"Yes":"No";
	$editspedurl = "index.php?cmd=spededit&module=sped&id=$studentid&close=$params";
	$editstudenturl = "index.php?cmd=StudentEdit&id=$studentid";
	
	$editsped = ($sped == 'Yes') ? 
			"<a href='index.php?cmd=spededit&module=sped&id=$studentid&close=$params'>Edit SpEd</a>&nbsp;&nbsp;&nbsp;" : 
			"Not SpEd | <a href='index.php?cmd=spededit&module=sped&id=$studentid&close=$params'>+</a>";

	$editstudent = "<a href='index.php?cmd=StudentEdit&id=$studentid'>Edit Student</a>";

	$color = fmod($i++, 2) == 0 ? "lightgrey" : "white";

	$spedstatus = $sped == 'Yes' ? ($stu['Sped_Status'] ==''?'No Value' : $stu['Sped_Status']) : (($stu['entrysped'] < $stu['exitdate'] and $stu['entrysped']!='')? $stu['Sped_Status'] : "");
	
	$age = age($stu['bday']);

        $IEPcolor = ''; $ESERcolor = '';
	if($sped == 'Yes') {
		$today = time();
		$iepend_diff = floor((convert_date($stu['iepend']) - $today)/60/60/24);
		$eser_diff = floor((convert_date($stu['ESER_plus3']) - $today)/60/60/24);
		$ESERcolor =( $eser_diff < 30)? "red" : ($eser_diff < 180 ? "yellow" : ""); // ESER_plus3 == *yellow = 6 months    *red = 1 month
		$IEPcolor = ($iepend_diff < 21) ? "red" : (($iepend_diff < 60) ? "yellow" : ""); // iepend == *yellow = 2 months      *red = 3 weeks
                //DEFINE THE BELOW COLOR
                $OSS;
                $MD;
                
                
}

        $ct1array[$stu['status']] +=1;
	$ct2array[$spedstatus] +=1;
        $iss = $ddays[$studentid]['I'];
	$oss = $ddays[$studentid]['S'];
	$stulist .= "<tr bgcolor=\"$color\">";
        eval("\$stulist .= \"$template1\";");
	$spedstatusdisplay = str_replace("_", " ", $spedstatus);
	$stulist .= "</tr>";

}

$body = <<<END

		<style type="text/css">

		@import " $rootURL/js/jquery.datepick.package/jquery.datepick.css";
URL /jquery.datepick.pa
		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

		<script type="text/javascript" src=" $rootURL/js/jquery.datepick.package/jquery.datepick.js"></script>

		<style type="text/css">

			@import "http://keith-wood.name/css/jquery.datepick.css";

		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

		<script type="text/javascript" src="http://keith-wood.name/js/jquery.datepick.js"></script>	<script>

		

		$(function() {

			$('#startdate').datepick({
				onClose: function(dates) { 
//					document.editlist.submit();
					alert('test');
//					var selected = ''; 
//					for (var i = 0; i < dates.length; i++) { 
//						selected += ',' + $.datepick.formatDate(dates[i]); 
//					} 
//					alert('Selected dates are: ' + selected.substring(1)); 
//
				} 		
    		});

			$('#enddate').datepick();

		});
		
		function setSpEd(id, val) {
            if(val == 'Y') val = 'N';
            else val = 'Y';
//			alert(id + val);
			$.get("https://dartdemo.bssd.org/index.php", { studentid: id, sped: val, module: 'sped', cmd: 'setsped' },
			   function(data){
//				 alert("Data Loaded: " + data);
				 window.location.reload( true );
			   });
		}
		function setCheckboxes (class, value) {
			$("."+c).attr('checked', value);
 			return(false);
		}
		function makeGroup(type) {
			if(type == '') return;
			var str = '';
			$(".studentselect").each(function(){ 
				
				if(this.checked) {
					if(str != '') str = str+",";
					str = str+this.value;
				}
			});
			if(str == '') {
				alert('No students selected');
			} else {
				$("#param1").val(str);
				$("#param2").val(type);
				cform.submit()
			}		
		}

$(document).ready(function() 
			{ 
				$.tablesorter.addParser({
				  id: "birthday",
				  is: function (s) {
					  return false;
				  },
				  format: function (s) {
//				  	  alert(s);
					  return s.toLowerCase().replace(/y/,'').replace(/m/,'').replace(/d/,''); 
				  },
				  type: 'text'
			  	});
				$.tablesorter.addParser({
				  id: "gr",
				  is: function (s) {
					  return false;
				  },
				  format: function (s) {
					  return s.toLowerCase().replace(/pk/,'-2').replace(/k/,'-1'); 
				  },
				  type: 'numeric'
			  	});
				$.tablesorter.addParser({
				  id: "spedexit",
				  is: function (s) {
					  return false;
				  },
				  format: function (s) {
				  	  if(isNaN(parseInt(s)) || (s == '')) {
//				  	  	alert(s+"-1-");
				  	  	return('-1');
				  	  } else {
//				  	  	alert("-"+s+"=");
				  	  	return(parseInt(s));
				  	  }
				  },
				  type: 'numeric'
			  	});
				$("#myTable").tablesorter({ 
					headers: { 
						$bhead: { 
							sorter:'birthday' 
						}, 
						$ghead: { 
							sorter:'gr'
						},
						$shead: { 
							sorter:'spedexit'
						}
					}					
				}); 
			} 
		); 
	</script>
	
<table border="0" cellpadding="0" cellspacing="2" width="100%">



	<tr>

		<td width="406">

			<div align="left">

				<br>

				<font color="#cc0000" size="4" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Special Education Data Overview </font><font class="big" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"> </font><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><br>

				</font></div>

			<blockquote>

				<div align="left">



					<div class="noteimportant">

						<font size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">This data is here for ready reference by teachers and principals. It is <u>not</u> directly entered here . If you spot any errors, please <a title="Email Special Ed District Staff" href="mailto:sped_info@bssd.org" target="_blank">email us</a>. </font></div>

				</div>

			</blockquote>

		</td>

		<td>

			<form name=editList action=index.php method=get>

			<input type=hidden name=cmd value=spedlist>

			<input type=hidden name=module value=sped>
			

			<table width="608" border="0" cellspacing="2" cellpadding="0">

				<tr>

					<td nowrap>

						<div align="right">

							<font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b><font size="2" color="#336666">Current Group:</font></b></font></div>

					</td>

					<td nowrap><font color="#000099" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"></font>

						<div align="center">

							<select name='listid' onChange='submit()'>

								$listOptions

							</select>
					</td>

					<td nowrap></td>

					<td nowrap>

						<div align="right">


					</td>

					<td nowrap>



						<div align="center">


						</div>

					</td>

					<td nowrap>

						<div align="center">

							

						</div>

					</td>

					<td rowspan="6" nowrap><img src=/images/gold_panning.gif alt="" height="174" width="216" align="left" border="0"></td>

				</tr>

				<tr>



					<td nowrap>

						<div align="right">

							<font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b><font size="2" color="#336666">SpEd Status View: </font></b></font></div>

					</td>

					<td nowrap>

						<div align="center">

							<select name="spedstatus" onchange="submit()">

								$spedstatusoptions



							</select></div>

					</td>

					<td nowrap></td>

					<td nowrap>

						<div align="right">

							

						</div>

					</td>

					<td nowrap></td>

					<td nowrap>



						<div align="center">

							

						</div>

					</td>

				</tr>

				<tr>

					<td nowrap>

						<div align="right">

							<b><font size="2" color="#336666" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">View Date - Begin:</font></b></div>



					</td>

					<td nowrap>
					
					<input id=startdate type=text name=startdate value='{$_GET['startdate']}' onChange=alert('here');>

					<input id=startOutput type=hidden name=startOutput  value='{$_GET['startOutput']}'>

					<td nowrap></td>

					<td nowrap>

						<div align="right">

							<b><font size="1" color="#336666" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">View Date - End:</font></b></div>

					</td>

					<td nowrap><font size="1"><input type="text" id="enddate" name="enddate" value="2008-10-17" size="24"></font></td>



					<td nowrap>

						<div align="center">

							

						</div>

					</td>

				</tr>

				<tr>

					<td nowrap>

						<div align="right">

							

						</div>



					</td>

					<td nowrap>

						<div align="center">

							<font size="1" color="#cc3300" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">Default = SY Start Date<br>

								<br>

							</font></div>

					</td>

					<td nowrap><input name="save" value="Define Range" type="submit"></td>



					<td nowrap>

						<div align="right">

							

						</div>

					</td>

					<td nowrap>

						<div align="center">

							<font size="1" color="#cc3300" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">Default = Today<br>

								<br>



							</font></div>

					</td>

					<td nowrap>

						<div align="center">

							

						</div>

					</td>

				</tr>

				<tr>

					<td nowrap>



						<div align="center">

							<font size="1" color="#cc3300" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">- OR - </font></div>

					</td>

					<td nowrap></td>

					<td nowrap></td>

					<td nowrap>

						<div align="right">

							

						</div>



					</td>

					<td nowrap></td>

					<td nowrap>

						<div align="center">

							

						</div>

					</td>

				</tr>

				<tr>

					<td nowrap>



						<div align="right">

							<b><font size="2" color="#336666" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">Switch to Prior Year:</font></b></div>

					</td>

					<td nowrap>

						<div align="center">

							<select name="schoolyear" onchange="submit()">

								<option value="self" selected="selected">School Year</option>

								<option value="999">2007-08 SY</option>



								<option value="999">2006-07 SY</option>

								<option value="999">2005-06 SY</option>

								<option value="NO DATA in DART">Look in FMP!</option>

							</select></div>

					</td>

					<td></td>

					<td>



						<div align="left">

							<font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b><font size="2" color="#336666">Sort Order:</font></b></font></div>

					</td>

					<td nowrap>

						<div align="center">

							<select name="sortval" onchange="submit()">

								<option value="lname" $sortval_lname >Last Name (Default)</option>

								<option value="fname" $sortval_fname >First Name</option>

								<option value="sped" $sortval_sped >SpEd</option>


								<option value="bday" $sortval_bday >Age </option>

								<option value="grade" $sortval_GR >Grade Level</option>
								
								<option value="site" $sortval_site >Site</option>

								<option value="iepend" $sortval_iepend >IEP End Date</option>

								<option value="IEPLessAge3" $sortval_IEPLessAge3 >ESER + 3 Years</option>

								<option value="45_Days" $sortval_45_Days >Eval -45 Days</option>

								<option value="ISS" $sortval_ISS >Number ISS</option>



								<option value="Int_Needs" $sortval_Int_Needs >Intensive Needs</option>

								<option value="OSS" $sortval_OSS >Number OSS</option>

								<option value="dc" $sortval_dc >Disabilty Code</option>

								<option value="pcode" $sortval_pcode >Placement Code</option>

								<option value="psyreeval" $sortval_psyreeval >Psych Eval Date</option>

								<option value="splangreeval" $sortval_splangreeval >Speech Eval Date</option>



								<option value="SpEd_Exit_Date" $sortval_SpEd_Exit_Date >Exit Date</option>

								<option value="SpEd_Exit_Code" $sortval_SpEd_Exit_Code >Exit Code</option>

							</select></div>

					</td>

					<td nowrap>

						<div align="center">

							<select name="sortdir" onchange="submit()">

								<option value="ASC" $sortdir_ASC >Ascending</option>



								<option value="DESC" $sortdir_DESC >Descending</option>

							</select></div>

					</td>

				</tr>

			</table>

			</form>

		</td>

	</tr>

	<tr>



		<td colspan="2">

			<div align="left">

				<br>
<form name=cform action=index.php?cmd=handleSpedGroup&module=sped method=post>
			<input type=hidden id=param1 name=param1 value=''>
			<input type=hidden id=param2 name=param2 value=''>
				<table border="0" cellpadding="2" cellspacing="2" width="100%">


						<tr>

							<td colspan="2" bgcolor="#ccffff">

								<div align="left">

									<font class="big" size="2" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"><b>Special Education Data Summaries </b>:: </font><font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><font size="2" color="#006633">Active Students</font><font size="2"> - {$ct1array['Active']}<b> :: </b></font><font size="2" color="red">Inactive Students</font><font size="2"> - {$ct1array['Inactive']}<b> :: </b></font><font size="2" color="#006633">In Program Students</font><font size="2"> - {$ct2array['In_Program']} <b> :: </b></font><font size="2" color="red">Eligible Students</font><font size="2"> - {$ct2array['Eligible']}<b> :: </b></font><font size="2" color="red">TNP Students</font><font size="2"> - {$ct2array['TNP']}</font></font></div>



							</td>

						</tr>

						<tr>

							<td colspan="2" valign="top">

								<div align="left">

									<table border="1" width="95%" id="myTable" class="tablesorter">

										<thead>
											<tr>

												{$template[0]}

											</tr>
                                                                                   <thead>
                                                                                       <tbody>
                                                                                

											$stulist

                                                                                        </tbody>
                                                                                        <tbody>

											<tr bgcolor="white">

												<td colspan="7" nowrap="nowrap">

													<div align="right">

														</div>

												</td>

												<td colspan="6" nowrap="nowrap">

													<div align="center">

											<!--			<input type=text size=3 name=limit value=50><input type=submit name=submit value="Display Results"></div>
											-->

												</td>



												<td colspan="6" nowrap="nowrap">
												&nbsp;
											<!--
												<font size="2"><font face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>DART Special Ed Records - (1 to 13 from 13)</b></font></font></td>
											-->
												<td colspan="31" nowrap="nowrap"></td>

											</tr>

										</tbody>

									</table>

									<table width="862" border="0" cellspacing="2" cellpadding="0">

										<tr>

											<td nowrap><img src="images/135pix_hz.gif" alt="" border="0" height="2" width="135"></td>



											<td nowrap><img src="images/135pix_hz.gif" alt="" border="0" height="2" width="135"></td>

											<td nowrap><img src="images/135pix_hz.gif" alt="" border="0" height="2" width="135"></td>

											<td nowrap></td>

											<td nowrap width="181"></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>



										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap width="181">

												<div align="right">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><a href="javascript: ;" onclick="setCheckboxes('studentselect', true); return false;" class="action">Check All</a>&nbsp;/&nbsp;<a href="javascript: ;" onclick="setCheckboxes('studentselect', false); return false;" class="action">UnCheck All</a></font></div>



											</td>

											<td nowrap>

												<div align="right">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><i>with selected students</i> &nbsp;&nbsp;</font></div>

											</td>

											<td colspan="3" nowrap>

												<div align="center">

													Export: <select name=cmd2 onClick="makeGroup(this.value);return(false);">



														<option value="">Select Action Here</option>

														<option value="ExportAll">Export All SpEd Data</option>

														<option value="ExportDiscipline">SpEd and Discipline Data</optoin></option>

														<option value="ExportAttendance">SpEd and Attendance</optoin></option>

														<option value="ExportEnterExit">SpEd and Entry/Exit</optoin></option>



														<option value="ExportFallOasis">SpEd and Fall Oasis</optoin></option>

														<option value="ExportSpringOasis">SpEd and Spring Oasis</option>

														<option value="ExportSummerOasis">SpEd and Summer Oasis</option>

														<option value="ExportAccommodations">SpEd and Accommodations</option>

													</select></div>



											</td>

											<td nowrap><!-- <input type=submit name=Go value=Go onclick="javascript: return makeGroup('group');"> --> </td>

										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>

											<td rowspan="4" colspan="2" nowrap valign=top>

												<div align="center" >

													<a title="View Group Change History" href="/index.php?module=sped&cmd=spedhistory" target="_blank">History<!--<img src="http://dart.bssd.org/images/check_history.gif" alt="View Group Change History" height="46" width="46" border="0">--></a></div>



											</td>

											<td nowrap width="181"></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

										<tr>



											<td colspan="2" nowrap>

												<div align="right">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><i><b>View this group's change history here! ==&gt;</b></i></font></div>

											</td>

											<td nowrap width="181"></td>

											<td nowrap>

												<div align="center">

													<font size="1" color="#cc3300" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>- OR - </b></font></div>



											</td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>



											<td nowrap width="181">

												<div align="center"></div>

											</td>

											<td nowrap><b><font size="2" color="#336666" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><button onclick="makeGroup('group');return(false);">Save Checked As Group</button></font></b></td>

											<td nowrap><!-- <input type=text name=grpname size=10> --></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap width="181"></td>

											<td nowrap></td>



											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>



											<td nowrap></td>

											<td nowrap width="181"></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

										<tr>



											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap width="181"></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>



											<td nowrap></td>

										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap width="181"></td>

											<td nowrap></td>



											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

										<tr>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>



											<td nowrap></td>

											<td nowrap width="181"></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

											<td nowrap></td>

										</tr>

									</table>



									<table width="1335" border="1" cellspacing="2" cellpadding="0">

										<tr>

											<td nowrap bgcolor="#acabac">

												<div align="center">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>Disability Code</b></font></div>

											</td>

											<td nowrap bgcolor="#acabac">

												<div align="center">



													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>SpEd Placement Code</b></font></div>

											</td>

											<td nowrap bgcolor="#acabac">

												<div align="center">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>Placement Code_Time Out</b></font></div>

											</td>

											<td nowrap bgcolor="#acabac">

												<div align="center">



													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>SpEd Exit Code</b></font></div>

											</td>

											<td nowrap bgcolor="#acabac">

												<div align="center">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>IEP by 3rd Code</b></font></div>

											</td>

											<td nowrap bgcolor="#acabac">

												<div align="center">



													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>Eval Within 45 Days Code (45 Days?)</b></font></div>

											</td>

											<td nowrap bgcolor="#acabac">

												<div align="center">

													<font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>Reason for Delay Code</b></font></div>

											</td>

										</tr>

										<tr>



											<td valign="top" nowrap>

												<p><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">01 - Gifted/Talented<br>02 - Cognitive Impairment<br>

														03 - Hearing Impairment<br>

														04 - Speech / Language<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">05 - Visual Impairment<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">06 - Emotional Disturbance<br>



													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">07 - Orthopedic Impairment<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">08 - Other Health Impairment<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">09 Specific Learning Disability<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">10- Deaf-Blindness<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">11- Multiple Disabilities<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">12 - Autism<br>



														13 - Traumatic Brain Injury<br>

													</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">14 - Developmental Delay<br>

														RE - Referral In Process<br>TNP - Tested &amp; Not Placed<br>

													</font></p>

											</td>

											<td valign="top" nowrap><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">01 - Early Childhood Setting<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">02 - Early Childhood SpEd Setting<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">03 - Home<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">04 - Part-time ECE/EC SpEd Setting<br>

													05 - Residential Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">06 - Separate School<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">07 - In Regular Classroom 80% +<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">08 - In Regular Classroom 40 - 79%<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">09 - In Regular Classroom 1 - 39%<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">10 - Separate Class with &lt;50% non-disabled<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">11 - Public Separate School Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">12 - Private Separate School Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">13 - Public Residential Facility<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">14 - Private Residential Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">15 - Homebound/Hospital<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">16 - Correctional Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">17 - </font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">Other<br>

												</font></td>

											<td valign="top" nowrap><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">01 - Early Childhood Setting<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">02 - Early Childhood SpEd Setting<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">03 - Home<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">04 - Part-time EC/EC SpEd Setting<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">05 - Residential Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">06 - Separate School<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">07 - Itinerant Service Outside Home (Opt)<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">08 - Reverse Mainstream Setting (Opt)<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">09 - SpEd Outside RC&lt;21%<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">10 - SpEd Outside RC&lt;21%&lt;60%<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">11 - SpEd Outside RC&gt;60%<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">12 - Public Separate School Facility<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">13 - Private Separate School Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">14 - Public Residential Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">15 - Private Residential Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">16 - Homebound/Hospital<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">17 - Correctional Facility<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">18 - Enroll in Private School<br>



												</font></td>

											<td valign="top" nowrap><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">01 - Graduated with Diploma<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">02 - Graduated with COA<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">03 - Reached Maximum Age<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">04 - Dropped Out<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">51 - Decertified<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">52 - Died<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">53 - Moved, Continuing SpEd<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">54 - Moved, Not Continuing SpEd<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">00 - Other<br>

												</font></td>

											<td valign="top" nowrap><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">0 - IEP in place by 3rd birthday or DNQ determination completed by 3rd birthday<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">1 - Extended illness for child<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">2 - Late referral by ILP<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">3 - No 90 day transition meeting<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">4 - Parent refusal to provide consent caused delayed evaluation or initial services<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">5 - Student moved or withdrawn after referral but before IEP implementation<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">6 - Not able to contact parents<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">7 - Other<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">8 - Parent repeatedly fails or refuses to produce the child for evaluation</font></td>

											<td valign="top" nowrap><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">0 - Eligibility determination completed within 45 school days<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">1 - Eligibility determination completed within 45-50 school days<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">2 - Eligibility determination completed within 51-60 school days<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">3 - Eligibility determination completed within 61-70 school days<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">4 - Eligibility determination took longer than 70 school days<br>

													<br>

												</font></td>

											<td valign="top" nowrap><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">0 - Determination completed within 45 school days<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">1 - Extended illness for child<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">2 - Student moved or withdrawn after referral, but before eligibility determination<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">3 - Evaluator unable to test due to weather<br>



												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">4 - Consent withdrawn by parent<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">5 - Other<br>

												</font><font size="2" face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular">6 - Parent repeatedly fails or refuses to produce the child for evaluation<br>

												</font></td>

										</tr>

										<tr>

											<td></td>



											<td></td>

											<td></td>

											<td></td>

											<td></td>

											<td></td>

											<td></td>

										</tr>

									</table>
</form>
									<p></p>



								</div>

							</td>

						</tr>

					</tbody>

				</table>

			</div>

		</td>

	</tr>

</table>

END;
function createHeader($title) {

	$str = <<<END
	<th nowrap><font size=1 face="Arial, Helvetica, Geneva, Swiss, SunSans-Regular"><b>$title</b></font></th>
END;
	return($str);
}
function createValue($value, $color='') {
	$str = <<<END
	<td nowrap=nowrap bgcolor='$color'>
		<div align=center>
			<font face=\"Arial, Helvetica, Geneva, Swiss, SunSans-Regular\" size=2 color=#006633>$value</font>
		</div>
	</td>
END;
//	$str = "<td>$value</td>";
	return($str);
}

function colorCodeValue($value) {

	if(($value >= 6) and ($value <= 8)) $color = 'yellow';
	else if ($value > 8) $color = 'red';
		
	$str = <<<END
	<td nowrap=nowrap bgcolor='$color'>
		<div align=center>
			<font face=\"Arial, Helvetica, Geneva, Swiss, SunSans-Regular\" size=2 color=#006633>$value</font>
		</div>
	</td>
END;
//	$str = "<td>$value</td>";
	return($str);
}
                                                                        
function spedListTemplate() {
	global $db, $ghead,$bhead,$shead;
	
	$j=0;
	$params = "&cmd=$p&page=$page&num=$num&site=$site";
        $params2="index.php?cmd=spedlist&module=sped&listid=$listid&spedstatus=$headerspedstatus&startdate=$headerstartdate&startOutput=&enddate=$headerenddate&schoolyear=$headerschoolyear";
	
	$values['name'][$j] = createHeader('');
	$values['fill'][$j++]= createValue("<input name=studentID[] value='{\$stu['studentid']}' class=studentselect type=checkbox>");
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=sped&sortdir=ASC>SpEd</a></th>";//;createHeader('SpEd');
	$values['fill'][$j++] = createValue('{$spedlink}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=status&sortdir=ASC>DART Status</a></th>";//createHeader('DART Status');
	$values['fill'][$j++] = createValue('{$stu[\'status\']}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=sped&sortdir=ASC>SpEd Status</a></th>";//createHeader('SpEd Status');
	$values['fill'][$j++] = createValue('{$stu[\'sped\']}');//createValue('<a href=$editspedurl>$spedstatusdisplay</a>');

	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=site&sortdir=ASC>Site</a></th>";//createHeader('Site');
	$values['fill'][$j++] = createValue('{$stu[\'site\']}');

	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=alaskaid&sortdir=ASC>Student ID</a></th>";//createHeader('AK ID');
	$values['fill'][$j++] = createValue('{$stu[\'alaskaid\']}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=GoalViewID&sortdir=ASC>GoalView ID</a></th>";//createHeader('GoalView ID');
	$values['fill'][$j++] = createValue('{$stu[\'GoalViewID\']}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=lname&sortdir=ASC>Last Name</a></th>";//createHeader('Last Name');
	$values['fill'][$j++] = createValue('<a href=$editstudenturl>{$stu[\'lname\']}</a>');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=fname&sortdir=ASC>First Name</a></th>";//createHeader('First Name');
	$values['fill'][$j++] = createValue('{$stu[\'fname\']}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=mname&sortdir=ASC>Middle Name</a></th>";//createHeader('Middle Name');
	$values['fill'][$j++] = createValue('{$stu[\'mname\']}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=gender&sortdir=ASC>Gender</a></th>";//createHeader('Gender');
	$values['fill'][$j++] = createValue('{$stu[\'gender\']}');
	
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=age&sortdir=DESC>Birthday</a></th>";
	$values['fill'][$j++] = createValue('{$stu[\'bday\']}');
	
	$bhead = $j;
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=age&sortdir=ASC>Age</a></th>";//createHeader('Age');
	$values['fill'][$j++] = createValue('$age');
	
	$ghead = $j;
	$values['name'][$j] = "<th nowrap><a href=$params2&sortval=grade&sortdir=ASC>Grade Level</a></th>";//createHeader('GR');
	$values['fill'][$j++] = createValue('{$stu[\'grade\']}');
	
	$values['name'][$j] = createHeader('D-Code');
	$values['fill'][$j++] = createValue('{$stu[\'dc\']}');
	
	$values['name'][$j] = createHeader('Env-Code');
	$values['fill'][$j++] = createValue('{$stu[\'pcode\']}');
	
	$values['name'][$j] = createHeader('% In Reg Ed');
	$values['fill'][$j++] = createValue('{$stu[\'percent\']} <b>%</b>');
	
	$values['name'][$j] = createHeader('Referral SpEd');
	$values['fill'][$j++] = createValue('{$stu[\'referral\']}');
	
	$values['name'][$j] = createHeader('Entry SpEd');
	$values['fill'][$j++] = createValue('{$stu[\'entrysped\']}');
	
	$values['name'][$j] = createHeader('IEP Start');
	$values['fill'][$j++] = createValue('{$stu[\'iepstart\']}');
	
	$values['name'][$j] = createHeader('IEP End');
	$values['fill'][$j++] = createValue('{$stu[\'iepend\']}', '{$IEPcolor}');
// *************	
	$values['name'][$j] = createHeader('Current ESER');
	$values['fill'][$j++] = createValue('{$stu[\'Current_ESER\']}');
	
	$values['name'][$j] = createHeader('ESER +3 yrs');
	$values['fill'][$j++] = createValue('{$stu[\'ESER_plus3\']}','{$ESERcolor}');
	
	$shead = $j;
	$values['name'][$j] = createHeader('SpEd Exit');
	$values['fill'][$j++] = createValue('{$stu[\'exitdate\']}');
	
	$values['name'][$j] = createHeader('SpEd Exit Code');
	$values['fill'][$j++] = createValue('{$stu[\'SpEd_Exit_Code\']}');
	
	$values['name'][$j] = createHeader('Latest Consent');
	$values['fill'][$j++] = createValue('{$stu[\'Latest_Consent\']}');
	
	$values['name'][$j] = createHeader('Initial Consent');
	$values['fill'][$j++] = createValue('{$stu[\'IEPLessAge3\']}');
	
	$values['name'][$j] = createHeader('Last Psy Eval');
	$values['fill'][$j++] = createValue('{$stu[\'psyreeval\']}');
	
	$values['name'][$j] = createHeader('Last SpL Eval');
	$values['fill'][$j++] = createValue('{$stu[\'splangreeval\']}');
	
	$values['name'][$j] = createHeader('Last OT Eval');
	$values['fill'][$j++] = createValue('{$stu[\'Last_OT_Eval\']}');
	
	$values['name'][$j] = createHeader('Last PT Eval');
	$values['fill'][$j++] = createValue('{$stu[\'Last_PT_Eval\']}');
	
	$values['name'][$j] = createHeader('Other Eval Date');
	$values['fill'][$j++] = createValue('{$stu[\'Other_Eval_Date\']}');
	
	$values['name'][$j] = createHeader('ISS');
	$values['fill'][$j++] = "\".colorCodeValue (\$iss).\"";
//	$values['fill'][$j++] = createValue('{$iss}');
	
	$values['name'][$j] = createHeader('OSS');
	$values['fill'][$j++] = "\".colorCodeValue (\$oss).\"";
//	$values['fill'][$j++] = createValue('{$oss}');
	
	$values['name'][$j] = createHeader('MD Held?');
	$values['fill'][$j++] = createValue('{$stu[\'MD_Held\']}');
	
	$values['name'][$j] = createHeader('Test AC');
	$values['fill'][$j++] = createValue('{$stu[\'testac\']}');
	
	$values['name'][$j] = createHeader('Test AC Reading');
	$values['fill'][$j++] = createValue('{$stu[\'testacreading\']}');
	
	$values['name'][$j] = createHeader('Test AC Writing');
	$values['fill'][$j++] = createValue('{$stu[\'testacwriting\']}');
	
	$values['name'][$j] = createHeader('Test AC Math');
	$values['fill'][$j++] = createValue('{$stu[\'testacmath\']}');
	
	$values['name'][$j] = createHeader('Test AC science');
	$values['fill'][$j++] = createValue('{$stu[\'testacscience\']}');
		
	$values['name'][$j] = createHeader('Mod HSGQE');
	$values['fill'][$j++] = createValue('{$stu[\'Mod_HSGQE\']}');
	
	$values['name'][$j] = createHeader('Alt Assmt');
	$values['fill'][$j++] = createValue('{$stu[\'Alt_Assmt\']}');
	
	$values['name'][$j] = createHeader('Int Needs');
	$values['fill'][$j++] = createValue('{$stu[\'Int_Needs\']}');
	
	$values['name'][$j] = createHeader('RS Sp');
	$values['fill'][$j++] = createValue('{$stu[\'RS_Sp\']}');
	
	$values['name'][$j] = createHeader('RS FM');
	$values['fill'][$j++] = createValue('{$stu[\'RS_FM\']}');
	
	$values['name'][$j] = createHeader('RS GM');
	$values['fill'][$j++] = createValue('{$stu[\'RS_GM\']}');
	
	$values['name'][$j] = createHeader('RS Coun');
	$values['fill'][$j++] = createValue('{$stu[\'RS_Coun\']}');
	
	$values['name'][$j] = createHeader('H Aid');
	$values['fill'][$j++] = createValue('{$stu[\'H_Aid\']}');
	
	$values['name'][$j] = createHeader('RS Tran');
	$values['fill'][$j++] = createValue('{$stu[\'RS_Tran\']}');
	
	$values['name'][$j] = createHeader('Other');
	$values['fill'][$j++] = createValue('{$stu[\'RS_Other\']}');
	
	$values['name'][$j] = createHeader('Last Name');
	$values['fill'][$j++] = createValue('<a href=$editstudenturl>{$stu[\'lname\']}</a>');
	
	$values['name'][$j] = createHeader('First Name');
	$values['fill'][$j++] = createValue('{$stu[\'fname\']}');
	
	$values['name'][$j] = createHeader('Views');
	$values['fill'][$j++] = createValue('<a href=https://dart.bssd.org/index.php?cmd=spededit&amp;module=sped&amp;id=620100>History</a> | $editstudent | $editsped ');

	for($j = 0; $j< count($values['name']); $j++) {
		$v1 .= $values['name'][$j] ;
		$v2 .= $values['fill'][$j] ;
	}
	
	$val[0] = $v1."\n";
	$val[1] = $v2."\n";
	return($val);

}

include ("template.inc");



?>

