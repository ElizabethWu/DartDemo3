<?php

/*
 * Modified by Elizabeth Wu
 * Change four methods: ttScore, getListSped, saveTestScore, function createAllDewisEvents
 */
$color1 = '#FDD017';
$color2 = '#F778A1';

function uploadTest($values) {
	global $exportDIR;
	$target =  $exportDIR . "test.csv";
	if(move_uploaded_file($_FILES["media"]["tmp_name"], $target)) {
		importTestFile($target, $values['test'], $values['year'],$values['benchmark']);
//echo $target;
    	echo "The file has been uploaded to /uploads directory as $newfilename";
	} else{
	//echo $target;
	
		echo "There was an error uploading the file, please try again!";
	}
}

function importTestFile($fn,$testname,$year,$benchmark) {
	global $db;
	
	if($testname == 'M-COMP' or $testname == 'M-CAP') $test = 'math';
	else $test = 'reading';
	$time = time();
	
	$sql = "TRUNCATE TABLE tmpimport";
	$db->get_results($sql);
	
	$sql =<<<END
		LOAD DATA LOCAL INFILE '$fn' INTO TABLE `tmpimport` 
				FIELDS TERMINATED BY ',' 
				ENCLOSED BY '"' 
				LINES TERMINATED BY '\\r';
END;
	$db->get_results($sql);
	
//	$sql = "TRUNCATE TABLE dewis_test";
//	$db->get_results($sql);

	$sql = "INSERT INTO dewis_test (alaskaid,score,testname,test,year,benchmark, grade, importgrp) 
			SELECT distinct p0, p1,'$testname','$test','$year','$benchmark', grade, '$time' FROM tmpimport, student WHERE p0 = alaskaid GROUP BY p0
	";
//	echo $sql;
	$db->get_results($sql);
}

function editScore($test, $year, $tier) {
	global $db, $CurrentYear;

	$test = $test == '' ? 'math' : $test;
	$year = $year == '' ? $CurrentYear : $year;
	$tier = $tier == '' ? '2' : $tier;
	
	$sql = "SELECT * from dewis_cutscore WHERE testname = '$test' and year = '$year' and tier = '$tier' ";
//	echo $sql;
	$results = $db->get_results($sql, ARRAY_A);
	foreach($results as $r) {
		$cutscore[$r['grade']][$r['benchmark']] = $r['cutscore'];
	}
	${$test."_name"} = "selected";
	${"year_".$year} = "selected";
	${"tier".$tier} = "selected";
	$str = "
		<center><font size=2> The current table shows: $test  in  $year</center><br>
		<table align= 'center' >
        <tr><td valign=top> Test Category: 
		</td><td valign=top>
		<form >
			<input type=hidden name=cmd value=dewisTestEdit>
			<input type=hidden name=year value='$year'>
			<input type=hidden name=tier value='$tier'>
			
			<select name=\"testname\" onChange=\"submit()\">
				<option value='math' $math_name>Math</option>
				<option value='reading' $reading_name>Reading</option>
			</select>
		</form>
</td><td valign=top>Tier: 
</td><td valign=top>
		<form >
			<input type=hidden name=cmd value=dewisTestEdit>
			<input type=hidden name=year value='$year'>
			<input type=hidden name=testname value='$test'>
			
			<select name=\"tier\" onChange=\"submit()\">
				<option value='1' $tier1>1</option>
				<option value='2' $tier2>2</option>
			</select>
		</form>
</td><td valign=top>Year: 
</td><td valign=top>
		<form >
			<input type=hidden name=cmd value=dewisTestEdit>
			<input type=hidden name=testname value='$test'>
			<input type=hidden name=tier value='$tier'>
			
			<select name=\"year\" onChange=\"submit()\">
				<option value='2011' $year_2011>2011</option>
				<option value='2012' $year_2012>2012</option>
				<option value='2013' $year_2013>2013</option>
				<option value='2014' $year_2014>2014</option>
				<option value='2015' $year_2015>2015</option>
				<option value='2016' $year_2016>2016</option>
				<option value='2017' $year_2017>2017</option>
			</select>
		</form>
</td></tr></table>
		<form method=post action=?cmd=dewisTestEdit&testname=$test&year=$year&tier=$tier>
			<input type=hidden name=testname value='$test'>
			<input type=hidden name=year value='$year'>
			<input type=hidden name=tier value='$tier'>
			
			<table border=1 align=center ><tr><th>Grade</th><th>Benchmark 1</th><th>Benchmark 2</th><th>Benchmark 3</th></tr>";
	for($i = 1; $i <= 8 ; $i ++) {
		$str .= "<tr>
					<td align=right>$i</td>
					<td align=right><input type=text name=benchmark1[$i] value='{$cutscore[$i][1]}' size=3></td>
					<td align=right><input type=text name=benchmark2[$i] value='{$cutscore[$i][2]}'size=3></td>
					<td align=right><input type=text name=benchmark3[$i] value='{$cutscore[$i][3]}'size=3></td>
				</tr>";
	}	
	$str .= "</table>
		  <br>
		<center><input type=submit name=submit value=save ></center>
	";
	
	return($str);

}

function getMyListSped($userID) {
    
	global $db, $currentMySite;
	
	$query = "select kind, listid as id, listname as name from lists 
				WHERE userid='$userID' or
						type = \"$currentMySite\" or
						(lists.userid = '$userID' and type = 'Private') or
						listid in (select lists.listid as listid from lists, listshare 
									where lists.listid = listshare.listid and 
										listshare.userid = '$userID' and type='Private')
				ORDER BY name
			";
//	echo $query;
	$list = $db->get_results($query, ARRAY_A);
        echo 'the number is ';
        echo count($list);
        echo '===';
	for ($i = 0; $i < count($list); $i++) {
		$addtion = ($list[$i]['kind'] == 'search') ? "*": "";
		$list2[$i]['id'] = $list[$i]['id'] ;
		$list2[$i]['name'] = $list[$i]['name'] . $addtion ;
                
           //     echo $list2[$i]['id'];
	}

        //userID 676, list id 14379 , name MineGroup
	return $list2;
}

function editStudentScore($test, $year, $list) {
	global $db, $CurrentYear, $currentUserID;

	$test = $test == '' ? 'math' : $test;
	$year = $year == '' ? $CurrentYear : $year;
	
        echo 'the hear '.$year, ' anc current is'.$currentYear;
	$mylists = getMyListSped($currentUserID, 'all');

	$listid = ($_GET['listid'] == "") ? $mylists[0]['id'] : $_GET['listid'];
		
	$listInfo = getListInfo($listid);
	
	$listname = $listInfo['listname'];
		
	$listOptions = getOptionList($mylists, $listid);

	$updateList = "<form name=editList action=index.php method=get>
	
			<input type=hidden name=cmd value=dewisStudentEdit>
			<input type=hidden name=year value='$year'>
			<input type=hidden name=testname value='$test'>
				<select name='listid' onChange='submit()'>
					$listOptions
				</select> Select to edit list</form>
					";
					
	$sql = "select dewis_test.*, student.alaskaid as aid from listvalues, dewis_test, student where listvalues.listid='$listid' and student.studentid = listvalues.studentid and dewis_test.alaskaid = student.alaskaid and test = '$test' and year = '$year' ";

//	$sql = "SELECT * from dewis_test WHERE testname = '$test' and year = '$year', alaskaid in ($list) ";
//echo $sql;
	$results = $db->get_results($sql, ARRAY_A);
	foreach($results as $r) {
		$cutscore[$r['aid']][$r['benchmark']] = $r['score'];
		$cutscore[$r['aid']]['grade'] = $r['grade'];
	}
//	print_r($cutscore);
	${$test."_name"} = "selected";
	${"year_".$year} = "selected";
	$str = "
		<center><font size=2> The current table shows:  $listname 's $test in $year  </center><br>
		<table align=center><tr><td>
		<form >
			<input type=hidden name=cmd value=dewisStudentEdit>
			<input type=hidden name=year value='$year'>
			<input type=hidden name=listid value='$listid'>
			
			<select name=\"testname\" onChange=\"submit()\">
				<option value='math' $math_name>Math</option>
				<option value='reading' $reading_name>Reading</option>
			</select>
		</form>
</td><td>
		<form >
			<input type=hidden name=cmd value=dewisStudentEdit>
			<input type=hidden name=testname value='$test'>
			<input type=hidden name=listid value='$listid'>
			
			<select name=\"year\" onChange=\"submit()\">
				<option value='2011' $year_2011>2011</option>
				<option value='2012' $year_2012>2012</option>
				<option value='2013' $year_2013>2013</option>
				<option value='2014' $year_2014>2014</option>
				<option value='2015' $year_2015>2015</option>
				<option value='2016' $year_2016>2016</option>
				<option value='2017' $year_2017>2017</option>
			</select>
		</form>
		</td><td>
		$updateList
</td></tr></table>
		<form method=post action=?cmd=dewisStudentEdit&testname=$test&year=$year&listid=$listid>
			<input type=hidden name=testname value='$test'>
			<input type=hidden name=year value='$year'>
			
			<table border=1 align=center><tr><th>Name</th><th>Grade</th><th>Benchmark1</th><th>Benchmark2</th><th>Benchmark3</th></tr>";
	
	 $query = "select student.* from listvalues, student where listvalues.listid='$listid' and student.studentid = listvalues.studentid order by lname,fname ASC";
	 $students = $db->get_results($query, ARRAY_A);	

	$i = 0;
	foreach($students as $s) {
		$id = $s['alaskaid'];
		$str .= "<tr>
					<td align=right>{$s['fname']} {$s['lname']} ({$s['alaskaid']}) 
						<input type=hidden name=aid[$i] value='{$s['alaskaid']}'>
					</td>
					<td align=right><input type=text name=grade[$i] value='{$cutscore[$id]['grade']}' size=3></td>
					<td align=right><input type=text name=benchmark1[$i] value='{$cutscore[$id][1]}' size=3></td>
					<td align=right><input type=text name=benchmark2[$i] value='{$cutscore[$id][2]}'size=3></td>
					<td align=right><input type=text name=benchmark3[$i] value='{$cutscore[$id][3]}'size=3></td>
				</tr>";
		$i++;
	}	
	$str .= "</table>
            <br>
		<center><input type=submit name=submit value=save ></center>
	";
	
	return($str);

}

function saveStudentTest($values) {
	global $db;
	
	$benchmark1 = $values['benchmark1'];
	$benchmark2 = $values['benchmark2'];
	$benchmark3 = $values['benchmark3'];
	$test = $values['testname'];
	$year = $values['year'];
	$aid = $values['aid'];
	$grade = $values['grade'];
	
	for($i = 0; $i < count($aid) ; $i++) {
		$id = $aid[$i];
//		echo "{$id} {$grade[$i]}<br>";
		$sql = "INSERT INTO dewis_test SET alaskaid='$id', year = '$year', test = '$test', benchmark='1', score='{$benchmark1[$i]}', grade='{$grade[$i]}' ON DUPLICATE KEY UPDATE score='{$benchmark1[$i]}', grade='{$grade[$i]}' ";
		$db->get_results($sql);
		$sql = "INSERT INTO dewis_test SET alaskaid='$id', year = '$year', test = '$test', benchmark='2', score='{$benchmark2[$i]}', grade='{$grade[$i]}' ON DUPLICATE KEY UPDATE score='{$benchmark2[$i]}', grade='{$grade[$i]}' ";
		$db->get_results($sql);
		$sql = "INSERT INTO dewis_test SET alaskaid='$id', year = '$year', test = '$test', benchmark='3', score='{$benchmark3[$i]}', grade='{$grade[$i]}' ON DUPLICATE KEY UPDATE score='{$benchmark3[$i]}', grade='{$grade[$i]}' ";
		$db->get_results($sql);
	}

}

function saveTestCutscores($values) {
	global $db;
	
	$benchmark1 = $values['benchmark1'];
	$benchmark2 = $values['benchmark2'];
	$benchmark3 = $values['benchmark3'];
	$test = $values['testname'];
	$year = $values['year'];
	$tier = $values['tier'];
	
	for($i = 1; $i <= 8 ; $i ++) {
		$sql = "INSERT INTO dewis_cutscore SET grade = '$i', year = '$year', testname = '$test', benchmark='1', cutscore='{$benchmark1[$i]}',tier='{$tier}' ON DUPLICATE KEY UPDATE cutscore='{$benchmark1[$i]}' ";
		$db->get_results($sql);
		$sql = "INSERT INTO dewis_cutscore SET grade = '$i', year = '$year', testname = '$test', benchmark='2', cutscore='{$benchmark2[$i]}',tier='{$tier}' ON DUPLICATE KEY UPDATE cutscore='{$benchmark2[$i]}' ";
		$db->get_results($sql);
		$sql = "INSERT INTO dewis_cutscore SET grade = '$i', year = '$year', testname = '$test', benchmark='3', cutscore='{$benchmark3[$i]}',tier='{$tier}' ON DUPLICATE KEY UPDATE cutscore='{$benchmark3[$i]}' ";
		$db->get_results($sql);
	}

}

function sortHeader($title, $name,$sort, $dir, $params) {
	$display = $dir == 'ASC' ? "^": "v";
	$dir = $dir == 'ASC' ? "DESC": ($dir == '' ? "DESC" : "ASC");
	if($sort == $name) {
		$str = "<td nowrap><a href=?sort=$name&dir=$dir$params>$title $display</a></td>";
	} else {
		$str = "<td nowrap><a href=?sort=$name&old=$sort&dir=$params>$title -</a></td>";	
	}
	return($str);
}

function createAllDewisEvents() {
	global $db, $currentMySite,$currentUserID,$CurrentYear,$currentMySite, $color1, $color2;
	
	$p = 'dewisList';
	
	$page = $_GET['page'] == '' ? '100' : $_GET['page'];
	$start = $_GET['num'] == '' ? '1' : $_GET['num'];
	$sort =  $_GET['sort'];
	$dir =  $_GET['dir'];
	$sped =  $_GET['sped'];
	$kind = $_GET['kind'];
	//$_GET['site'] = getSecLevel('dewislist') == 1 ? $currentMySite : $_GET['site'];
	$_GET['site'] = PrivilegeB(B15) == 'none' ? $currentMySite : $_GET['site'];
	//echo 'current'. $_get['site'];

        
        if($sort == '') {
		$sort = "dewis.startdate";
		$dir = "DESC";
	}
	$site = $_GET['site'];
	$status = $_GET['status'] == '' ? "Current" : $_GET['status'];
	$listid = $_GET['listid'];		
	
//	$where = getSecLevel('disciplineall') == 1 ? "and student.site = '$currentMySite' " : "";
	$where .= $_GET['site'] != '' ? " and student.site = '{$_GET['site']}'" : "";
	$where .= $_GET['kind'] != '' ? " and dewis.kind = '{$_GET['kind']}'" : "";
	$where .= $status != 'all' ? ($status == 'Current' ? " and dewis.enddate = '0000-00-00 00:00:00' " : " and dewis.enddate != '0000-00-00 00:00:00' "): "";
	//echo' ++++++++++++++++++++++';
        //echo $currentUserID +' '+$currentMySite;
//if the listid is assigned
        if($listid != '') {
		$ids = getListStudents($listid);
                //get all the student ID from the belonging groups. 
		$where .= " and student.studentid IN ($ids) ";
	}
        //if the user specify about the special education option, the program should add this
	if($sped == 'Y') {
		$where .=  " and student.studentid IN (SELECT studentid FROM speddata WHERE entrysped > exitdate) ";
	}
	if($sped == 'N') {
		$where .= " and student.studentid NOT IN (SELECT studentid FROM speddata WHERE entrysped > exitdate) ";
	}
	
        //get all the list that the user have access to 
       // select kind, listid as id, listname as name from lists according to UserID
	//$mylists = getMyListSped($currentUserID, 'all');
       $mylists = getMyListSped($currentUserID);
        //"select * from lists 
	$listInfo = getListInfo($listid);	
        
	$listname = $listInfo['listname'];
        
      
        //listid 14379 MineGroup
	$listOptions = getOptionList($mylists, $listid);

        //return all possible sites
	$siteList = getSitesOptions($site);
	
        //hidden is like default message
        
        $sitepulldown = "

        <form >
       
	<input type=hidden name=cmd value=dewisList>
	<input type=hidden name=status value='$status'>
	<input type=hidden name=listid value='$listid'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=sped value='$sped'>
	<input type=hidden name=kind value='$kind'>
	<select name=\"site\" onChange=\"submit()\">
		<option value=''>All Sites</option>
		$siteList
	</select>
	</form>";
        
        //similar to above, the default is dewisList

	${$status."_status"} = "selected";
	$statuspulldown = "
	<form >
	<input type=hidden name=cmd value=dewisList>
	<input type=hidden name=site value='$site'>
	<input type=hidden name=listid value='$listid'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=sped value='$sped'>
	<input type=hidden name=kind value='$kind'>
	<select name=\"status\" onChange=\"submit()\">
		<option value='all' $all_status>All</option>
		<option value='Current' $Current_status>Active</option>
		<option value='Prior' $Prior_status>Inactive</option>
	</select>
	</form>";
	
        
        //keep the rest still, only define the kind option
	${$kind."_kind"} = "selected";
	$kindpulldown = "
	<form >
	<input type=hidden name=cmd value=dewisList>
	<input type=hidden name=site value='$site'>
	<input type=hidden name=listid value='$listid'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=sped value='$sped'>
	<input type=hidden name=status value='$status'>
	<select name=\"kind\" onChange=\"submit()\">
		<option value='' $_kind>All</option>
		<option value='rti' $rti_kind>Rti</option>
		<option value='dewis' $dewis_kind>DEWIS</option>
	</select>
	</form>";
	
	$listpulldown = "
	<form >
	<input type=hidden name=cmd value=dewisList>
	<input type=hidden name=site value='$site'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=status value='$status'>
	<input type=hidden name=sped value='$sped'>
	<input type=hidden name=kind value='$kind'>
	<select name='listid' onChange='submit()'>
		<option value=''>No List</option>
		$listOptions
	</select> </form>
	</select>
	</form>";
	
	${$sped."_sped"} = "selected";
	$spedpulldown = "
	<td> SpEd Filter:</td><td> 
	<form >
	<input type=hidden name=cmd value=dewisList>
	<input type=hidden name=site value='$site'>
	<input type=hidden name=page value='$page'>
	<input type=hidden name=status value='$status'>
	<input type=hidden name=listid value='$listid'>
	<input type=hidden name=kind value='$kind'>
	<select name='sped' onChange='submit()'>
		<option value=''>All Students</option>
		<option value='Y' $Y_sped>SpEd Y</option>
		<option value='N' $N_sped>SpEd N</option>
	</select> </form>
	</select>
	</form>
	</td>";
	
        //after the above four pull down, the four variable should be set up 
        
        //count the number that both in dewis and student, also the user have access to.
        
       // echo 'the where is '.$where;
	$sqlcount = "SELECT count(*) from dewis,student WHERE dewis.sid = student.studentid $where ";
        //$sqlcount = "SELECT count(*) from dewis,student WHERE dewis.sid = student.studentid";
	//echo $sqlcount;
	$ct = $db->get_var($sqlcount);
        //if($ct!='')echo 'after call';
        //$ct is not null, 752
        echo 'same user'.$ct;
        
        
	$pagenum = intval($ct/$page)+1;
        
       // echo 'page number is '.$pagenum; 8
        
        
	if ($sort != '') $order = "ORDER BY $sort $dir";
//	$sql = "SELECT *, DATE_FORMAT(startdate, '%m/%d/%y') as sdate, DATE_FORMAT(enddate, '%m/%d/%y')  as edate from dewis,student WHERE sid = student.studentid $where $order";
	//only view the current year. which means 2010 
        $row = $db->get_row("SELECT q1.start as start, q4.finish as finish
								FROM quarters as q1, quarters as q4
								WHERE q1.year = q4.year and q1.quarter = '1' and q4.quarter = '4' and
									q1.year = '$CurrentYear' ", ARRAY_A);
	$schoolstart = $row['start'];
	//if($schoolstart!='')echo $schoolstart; 2010-07-16  
        
        
        //three table joint. 
        $sql = "SELECT dewis.*,student.*, DATE_FORMAT(dewis.startdate, '%m/%d/%y') as sdate, DATE_FORMAT(dewis.enddate, '%m/%d/%y') as edate, student.site as s, dewis.enddate as dewisenddate, dewis.kind as k, sytd, student.studentid as sid
			FROM dewis,student, dewis_tmp 
			WHERE dewis.sid = student.studentid and dewis.sid = dewis_tmp.sid $where
			$order
			";
// LEFT JOIN discipline ON student.studentid = discipline.studentid and consequence = 'S' and discipline.incidentdate > '$schoolstart'
	echo $sql;
    $results = $db->get_results($sql, ARRAY_A);
    
    
    //echo 'the result is'.count($results);

    
    if($_GET['subcmd'] == 'export') {
		exportSQL($sql);
	}
	$export = "<br><a href=?cmd=$p&subcmd=export>Export</a>";

	$start = min($start, intval($ct/$page)*$page) == 0 ? '1' : min($start, intval($ct/$page)*$page);
	if($ct > $page) {
		for($j=1; $j <= intval($ct/$page)+1; $j++) {
			$color = ($start == $j) ? "lightblue" : "white";
			$links .= "<a href=?cmd=$p&page=$page&num=".$j."&sort=$sort&dir=$dir style='background-color: $color;'>$j</a> ";
		}
		$prev = ($start == 1) ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : "<a href=?cmd=$p&page=$page&num=". ($start - 1) ."&sort=$sort&dir=$dir&listid=$listid&sped=$sped> &lt;&lt;prev </a>";
		$next = ($start == $pagenum) ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : "<a href=?cmd=$p&page=$page&num=". ($start + 1) ."&sort=$sort&dir=$dir&listid=$listid&sped=$sped> next&gt;&gt; </a>";
		$heading = "$start of $pagenum";
	}
	$displaycount = <<<END
	<style>
	.c1 {
		background-color: $color1;
	}
	.c2 {
		background-color: $color2;
	}
	</style>
        
	<table align="center" cellspacing="2" cellpadding="0" border="0">
        
		<tr><td>Select Site: </td><td>$sitepulldown</td><td>Kind: </td><td>$kindpulldown</td><td> Select Status:</td><td> $statuspulldown</td><td> Select List:</td><td> $listpulldown</td> $spedpulldown</tr>
	<br>
  <form>
	<input type=hidden value='$start' name=num>
	<input type=hidden value='dewisList' name=cmd>
	<input type=hidden value='$status' name=status>
	<input type=hidden value='$listid' name=listid>
	<input type=hidden name=sped value='$sped'>
	<input type=hidden name=kind value='$kind'>
	<table align="center" cellspacing="2" cellpadding="0" border="0">
              <tr><td>$prev $links $next</td><td>Number to display (from total - $ct): <input type=text name=page value='$page' size=3><input type=submit value=GO></td></tr>
         </table>
  </form>
END;


	$j=0;
	$params = "&cmd=$p&page=$page&num=$num&site=$site&status=$status&listid=$listid&sped=$sped&kind=$kind";
	$values['name'][$j] = sortHeader("SITE", 'student.site', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap>{\$r['s']}</td>";
	
	$values['name'][$j] = sortHeader("Student", 'lname', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap><a href=?cmd=dewisItem&id={\$r['id']}>{\$r['lname']}, {\$r['fname']}</a> </td>";
	
	$values['name'][$j] = sortHeader("Grade", 'grade', $sort,$dir, $params);
	$values['fill'][$j++] = "<td align=center nowrap>{\$r['grade']}</td>";
	
	$values['name'][$j] = sortHeader("Start Date", 'dewis.startdate', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap>{\$r['sdate']}</td>";
	
	$values['name'][$j] = sortHeader("End Date", 'dewis.enddate', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap>{\$edate}</td>";
	
	$values['name'][$j] = sortHeader("Attendance", 'dewis.dattendance', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap align=center class=c{\$r['flagattendance']}>{\$r['dattendance']}%</td>";
	
	$values['name'][$j] = sortHeader("Suspensions", 'suspensions', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap align=center class=c{\$r['flagsuspensions']}>
								<a href='/index.php?cmd=disciplineListNew&studentid={\$r['sid']}&year=$CurrentYear'>
								{\$r['suspensions']}&nbsp;</a>";
	
	$values['name'][$j] = sortHeader("S-YTD", 'sytd', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap align=center>{\$r['sytd']}&nbsp;</td>";
	
	$values['name'][$j] = sortHeader("Math", 'math', $sort,$dir,$params);
	$values['fill'][$j++] = "<td nowrap class=c{\$r['flagmath']}>{\$r['math']}&nbsp;</td>";
	
	$values['name'][$j] = sortHeader("Reading", 'reading', $sort,$dir,$params);
	$values['fill'][$j++] = "<td nowrap class=c{\$r['flagreading']}>{\$r['reading']}&nbsp;</td>";
	
	$values['name'][$j] = sortHeader("Student Status", 'status', $sort,$dir, $params);
	$values['fill'][$j++] = "<td nowrap>{\$r['status']}&nbsp;</td>";
	
	$values['name'][$j] = sortHeader("DEWIS Status", 'edate', $sort,$dir,$params);
	$values['fill'][$j++] = "<td nowrap>{\$status}&nbsp;</td>";
	
	$values['name'][$j] = sortHeader("Kind", 'dewis.kind', $sort,$dir,$params);
	$values['fill'][$j++] = "<td nowrap>{\$displaykind}&nbsp;</td>";
	
//	$values['name'][$j] = sortHeader("Reason", 'endreason', $sort,$dir, $params);
//	$values['fill'][$j++] = "<td nowrap>{\$r['endreason']}&nbsp;</td>";
	
	$v1 = "<tr>";
	$v2 = "<tr>";
	for($j = 0; $j< count($values['name']); $j++) {
		$v1 .= $values['name'][$j] ;
		$v2 .= $values['fill'][$j] ;
	}
	
	$v1 .= "</tr>";
	$v2 .= "</tr>";
	$str = $displaycount;
        $str.="<br>";
	$str .= "<table align= center cellspacing=2 cellpadding=0 border=1>";
	$str .= $v1;
	for($i = ($start-1)*$page; $i < min($ct, ($start*$page)); $i++) {
			$r = $results[$i];
			$displaykind = displayKind($r['k']);
			$status = $r['dewisenddate'] != '0000-00-00 00:00:00' ? 'Prior' : 'Current';
			$edate =  $r['dewisenddate'] == '0000-00-00 00:00:00' ?  "&nbsp;" : $r['edate'];
	//		print_r($r);
			eval("\$str .= \"$v2\";");
	//		$str .= "$v2";
	}
	$str .= "</table>";

	return($str);
}


function attendancePercentage($date) {
	global $db;
	
	$sql = "SELECT StudentID, CodeID, count(*) FROM `AttendanceEvents` WHERE Date >= '$date' GROUP BY StudentID, CodeID ORDER BY StudentID, CodeID ASC";

	$results = $db->get_results($sql);
	
	foreach($results as $r) {
	
		if($r['StudentID'] == $oldsid) {
			$oldsid = $r['StudentID'];
		}
		
	}
}

function selectionCreate($id, $name, $value, $flag=true) {
	global $db;
	
	$sql = "SELECT * from dewis_pulldown WHERE gid = '$id'";
	
	$results = $db->get_results($sql, ARRAY_A);
//	$str = "<select name='$name'> <option value=''>-- select --</option>";
	$str .= $flag ? "<select name='$name'> <option value=''>-- select --</option>" : "<select name='$name'> ";
	foreach($results as $r) {
		$selected = ($r['value'] == $value) ? 'selected' : '';
		$str .= "<option value='{$r['value']}' $selected>{$r['name']}</option>\n";
	}
	$str .= "</select>";
	
	return($str);
}
function savedewisedit($values) {
	global $db;
	$id=$values['did'];
//	print_r($values);
	$notes = $values['notes'];
	$sql = "UPDATE dewis_notes SET
		notes='$notes',
		category='{$values['category']}',
		target='{$values['target']}',
		status='{$values['status']}'
		WHERE id = '{$values['id']}'
	";
//	echo $sql;
	$db->get_results($sql);
	
	echo <<<END
	<script>
		 window.opener.location.reload(true);
		 window.close(); 
		 function redirect () {
    		setTimeout("go_now()",1);
		}
		function go_now () {
   		 window.location.href = "?cmd=dewisItem&id=$id";
		}
	 </script>
END;

}
function editdewisedit($id, $did) {
	global $db;
	
	$sql = "SELECT *, date_format(timestamp,'%c/%d/%y %h:%i:%s %p') as date from dewis_notes WHERE id = '$id'";
	$results = $db->get_row($sql, ARRAY_A);
	extract($results);
	$selectcat = selectionCreate(1, 'category', $category);
	$selecttarget = selectionCreate(2, 'target', $target);
	$selectstatus = selectionCreate(3, 'status', $status, $false);
	$str =<<<END
	<form method=post action='?cmd=dewisNotesEdit'>
		<input type=hidden name=id value=$id>
		<input type=hidden name=did value='$did'>
		<table border=1>
			<tr>
				<td>Date:</td><td>$date</td>
			</tr>
			<tr>
				<td>Category:</td><td>$selectcat</td>
			<tr>
			<tr>
				<td>Target:</td><td>$selecttarget</td>
			<tr>
				<td>Notes:</td><td><textarea rows=5 cols=50 name=notes>$notes</textarea></td>
			<tr>
				<td>Status:</td><td>$selectstatus</td>
			<tr>
			<tr>
				<td colspan=2><center><input type=submit name=save value=Save> <button onclick=redirect()>Close</button></center></td>
			<tr>
		</table>	
	</form>

	<script>
		 window.opener.location.reload(true);
		 window.close();
                 function redirect () {
    setTimeout("go_now()",1);
}function go_now () {
    window.location.href = "?cmd=dewisItem&id=$did";
}
	 </script>
END;

	return($str);	
}

function editdewis($id) {
	global $db, $color1, $color2;
	
	$sql = "SELECT dewis.*,student.*, dewis_tmp.math as cmath, dewis_tmp.reading as creading,
				concat(dewis_tmp.attendance,'%') as cattendance, dewis_tmp.discipline as cdiscipline,
				mathflag,readingflag,disciplineflag,attendanceflag, dewis.kind as k,
				date_format(dewis.startdate,'%c/%d/%y %h:%i:%s %p') as sdate, 
				date_format(dewis.enddate,'%c/%d/%y %h:%i:%s %p') as edate
			FROM dewis,student, dewis_tmp 
			WHERE dewis.sid = studentid and id = '$id' and dewis_tmp.sid = dewis.sid ";
    $r = $db->get_row($sql, ARRAY_A);
    
//    echo date();
	$r['picture'] = ($r['picture'] == '') ? 'no_photo.jpg' : $r['picture'];
	$flagnum = determineFlag($r['flagmath'],$r['flagreading'],$r['flagattendance'],$r['flagsuspensions']);
    $r['flag'] = "flag_{$flagnum}.gif";
//    echo "TEST".$r['flag'];
    $r['mathcolor'] = $r['flagmath'] == 0 ? 'white' : ${"color".$r['flagmath']};
    $r['readingcolor'] = $r['flagreading'] == 0 ? 'white' : ${"color".$r['flagreading']};
    $r['attendancecolor'] = $r['flagattendance'] == 0 ? 'white' : $color2;
    $r['suspensionscolor'] = $r['flagsuspensions'] == 0 ? 'white' : $color2;
    $r['currentdate'] = date("m/d/Y");

    
    $r['currentmathcolor'] = $r['mathflag'] == 0 ? 'white' : ${"color".$r['mathflag']};
    $r['currentreadingcolor'] = $r['readingflag'] == 0 ? 'white' : ${"color".$r['readingflag']};
    $r['currentattendancecolor'] = $r['attendanceflag'] == 0 ? 'white' : $color2;
    $r['currentsuspensionscolor'] = $r['disciplineflag'] == 0 ? 'white' : $color2;
    $currentflagnum = determineFlag($r['mathflag'],$r['readingflag'],$r['attendanceflag'],$r['disciplineflag']);
    $r['currentflag'] = "flag_{$currentflagnum}.gif";
	$r['currentmath'] = $r['cmath'];
	$r['currentreading'] = $r['creading'];
	$r['currentsuspensions'] = $r['cdiscipline'];
	$r['currentattendance'] =  $r['cattendance'];

	$r['dattendance'] .=  "%";

	$r['age'] = age($r['bday']);

    $r['name'] = $r['fname'] . " " . $r['lname'];
    $r['dewislist'] = dewisList($r['sid']);
    $r['dewisnotes'] = dewisNotes($r['id']);
    $r['text'] = ($r['k'] == 'rti') ? file_get_contents('dewisRtiText.html') : file_get_contents('dewisText.html') ;
    
   $r['createbutton'] = <<<END
<!-- 	<button onclick="popUp2('?cmd=dewisNotesEdit&did={$id}&subcmd=create', 530,280);return false;">New&nbsp;Entry</button>-->
   <a onclick="popUp2(this.href, 530,280);return false;" href="?cmd=dewisNotesEdit&did={$id}&subcmd=create" class="LinkButton" >New Entry</a> 
END;

	if($r['enddate'] == '0000-00-00 00:00:00') {
		$r['endbutton'] = <<<END
            &nbsp;&nbsp;&nbsp;<a onclick="popUp2(this.href, 530,280);return false;" href="?cmd=dewisEndReason&did={$id}">End </a>
    		<!--&nbsp;&nbsp;&nbsp;<button onclick="popUp2('?cmd=dewisEndReason&did={$id}', 530,280);return false;">End</button> -->
END;
	}
//    $values['var'][0] = "[dewislist]";
//   $values['val'][0] = dewisList($r['sid']);
//    $values['array'][0] = $r;
// print_r($r);    
    return($r);

}
function dewisNotes($did) {
	global $db;
	
	$results = $db->get_results("SELECT *,date_format(timestamp,'%c/%d/%y') as date from dewis_notes WHERE did = '$did' ORDER by timestamp", ARRAY_A);

	foreach($results as $r) {
//		print_r($r);
		extract($r);
		$color = ($status == 'Open') ? 'lightgreen' : 'white';
		$str .=<<<END
		<tr>
			<td nowrap >
				<div align="center">
					<font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>
						<a onclick="popUp2(this.href, 530,280);return false;" href="?cmd=dewisNotesEdit&id={$r['id']}">$date</a></b></font></div>
			</td>
			<td nowrap width="81">
				<div align="center">
					<font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>$category</b></font></div>
			</td>
			<td nowrap width="75">
				<div align="center">
					<b>$target</b>
				</div>
			</td>
			<td colspan="6">$notes &nbsp;</td>
			<td nowrap width="50" bgcolor=$color>
				<div align="center">
					<font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>$status</b></font>
					<div align="center">
						<p><font color="black" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2"><b>
						<!-- <a onclick="window.open(this.href, 'PopupWindow', 'width=530,height=280');return false;"
                                   target="popup" href="?cmd=dewisNotesEdit&id={$r['id']}">[Edit]</a>
						-->
						[<a onclick="popUp2(this.href, 530,280);return false;" href="?cmd=dewisNotesEdit&id={$r['id']}">Edit</a>&nbsp;|&nbsp;<a href="?cmd=dewisItem&id=$did&subcmd=delete&noteid={$r['id']}" onclick="return(confirmMsg('Delete note entry?'));">Delete</a>]
						
						</b></font></p>
					</div>
				</div>
			</td>
		</tr>
END;
		
	}

	return($str);
}

function sortDewisHeader($title, $name,$sort, $dir, $p,$page, $num) {
	$str = "<th nowrap align=center class=bord>$title</th>";
	return($str);
}

function dewisList($sid) {
	global $db;
	
	$sql = "SELECT *, date_format(startdate,'%c/%d/%y') as sdate, date_format(enddate,'%c/%d/%y') as edate, dewis.kind as k from dewis,student WHERE sid = studentid and sid = '$sid' order by sdate";

    $results = $db->get_results($sql, ARRAY_A);
//    echo "<pre>";
//print_r($results);	
//echo "</pre>";
	$j=0;
	
	$values['name'][$j] = sortDewisHeader("Student", 'lastname', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap class=bord><a href=?cmd=dewisItem&id={\$r['id']}>{\$r['lname']}, {\$r['fname']}</a> </td>";
	
	$values['name'][$j] = sortDewisHeader("Start Date", 'startdate', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap class=bord>{\$r['sdate']}</td>";
	
	$values['name'][$j] = sortDewisHeader("End Date", 'enddate', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap class=bord>{\$edate}</td>";
	
	$values['name'][$j] = sortDewisHeader("Attendance", 'attendance', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap align=center class=bord>{\$r['dattendance']}%</td>";
	
	$values['name'][$j] = sortDewisHeader("Suspensions", 'suspensions', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap align=center class=bord>{\$r['suspensions']}</td>";
	
	$values['name'][$j] = sortDewisHeader("Math", 'math', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap class=bord>{\$r['math']}</td>";
	
	$values['name'][$j] = sortDewisHeader("Reading", 'reading', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap class=bord>{\$r['reading']}</td>";
	
	$values['name'][$j] = sortDewisHeader("Reason", 'endreason', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap class=bord>{\$r['endreason']}</td>";
	
	$values['name'][$j] = sortDewisHeader("Flag Type", 'dewis.kind', $sort,$dir, $p, $page, $num);
	$values['fill'][$j++] = "<td nowrap>{\$displaykind}&nbsp;</td>";
	
	$v1 = "<tr class=bord>";
	$v2 = "<tr class=bord>";
	for($j = 0; $j< count($values['name']); $j++) {
		$v1 .= $values['name'][$j] ;
		$v2 .= $values['fill'][$j] ;
	}
	
	$v1 .= "</tr>";
	$v2 .= "</tr>";
	$str = $displaycount;
	$j++;
	$str .= <<<END
	<style>
	.bord {
		border: 1px solid black;
		border-collapse:collapse;
	}
	</style>
	<table width="100%" border="0" cellspacing="2" cellpadding="0" class=bord>
	<tr class=bord>
		<td colspan="$j" nowrap bgcolor="#ccffff">
			<div align="right">
				<b><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="2">Prior DEWIS Intervention Periods</font></b></div>
		</td>
	</tr>
END;
	$str .= $v1;
	for($i=0; $i < count($results); $i++) {
			$r = $results[$i];
			$edate =  $r['enddate'] == '0000-00-00 00:00:00' ?  "" : $r['edate'];
			$displaykind = displayKind($r['k']);
	//		print_r($r);
			eval("\$str .= \"$v2\";");
	//		$str .= "$v2";
	}
	$str .= "</table>";

	return($str);
	
}

function displayKind($t) {
	switch($t) {
		case rti: return('Rti');
		case dewis: return('DEWIS');
		default: return('UNKNOWN');
	}
}
function computeDewis() {
	global $db;
	
	computeAttendanceFlag($date);
	computeReadingFlag($date);
	computeDisciplineFlag($date);
}

function determineFlag($num1, $num2, $num3, $num4) {

	$arr[$num1]++;
	$arr[$num2]++;
	$arr[$num3]++;
	$arr[$num4]++;
	return($arr[2]);
}

?>