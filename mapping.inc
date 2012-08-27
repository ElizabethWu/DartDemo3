<?php


function createMappingEvents() {

//direct the path for the desired file
$PowerSchoolFileName="./powerschool/sampledemo.txt";
//appoint an operation on the file. The second arg is the authorization-read only. 
$fd = fopen ($PowerSchoolFileName, 'r');
//declare a variable to keep the reading results.
$contents = fread($fd,filesize($PowerSchoolFileName));

//put every row into an array
$numberofRows=explode("\n",$contents);
$resultsheader=$numberofRows[0];
$headerLength=substr_count($numberofRows[0],"\t")+1;
echo $resultsheader."END OF HEADERS".$headerLength;

//close the pipe.
fclose ($fd);

//specify what delimiters the file is using
$delimiter = "\t";
//explore the content
$splitcontents = explode($delimiter, $resultsheader);
$counter = "";

$item=array();
$itemList;
$itemList.= "<option value =\"\">Import Columns</option>\n";
foreach ( $splitcontents as $color )
{
if($counter<26){
$counter = $counter+1;
//echo "<b>Split $counter: </b> $color<br>";
$item[$counter]=$color;
$itemList.= "<option value =\"$color\">$color</option>\n";
}
}
//it in fact is 27 rather than 26 as shown
//echo $counter;

	$displaycount = <<<END
   


    <form name=mapping action=SavePowerSchool.php method=GET>   
   <font size=3>Columns Mapping</font>
<br>
  <table border=1>

<tr> 
        <td><font size=2><B>Target Columns in Database</B> </font></td>
        <td><font size=2><B>Source Columns in Sample Files</B></font></td>
    </tr>  

    <tr> 
        <td><font size=2> School Name </font></td>
        <td><select name=studentsite> $itemList </select></td>
    </tr>     
    <tr> 
        <td><font size=2> Last Name </font> </td>
        <td><select name=studentlname> $itemList </select><br></td>
    </tr>  
     <tr> 
        <td><font size=2> Middle Name </font></td>
        <td><select name=studentmname> $itemList </select><br></td>
    </tr>
    <tr> 
        <td><font size=2> First Name </font></td>
        <td><select name=studentfname> $itemList </select><br></td>
    </tr>
    <tr> 
        <td><font size=2> Race </font></td>
        <td><select name=studentethnicity>  $itemList </select><br></td>
    </tr>
<tr> 
        <td><font size=2> Gender </font></td>
        <td><select name=studentgender>  $itemList </select><br></td>
    </tr>
<tr> 
        <td><font size=2> Student Number </font></td>
        <td><select name=studentstudentid>  $itemList </select><br></td>
    </tr>
<tr> 
        <td><font size=2> State Student Number </font></td>
        <td><select name=studentalaskaid>  $itemList </select><br></td>
    </tr>

<tr> 
        <td><font size=2>Grade Level </font></td>
        <td><select name=studentgrade>  $itemList </select><br></td>
    </tr>

<tr> 
        <td><font size=2> SpEd Status </font></td>
        <td><select name=studentsped>  $itemList </select><br></td>
    </tr>
<tr> 
        <td><font size=2> Attendance </font></td>
        <td><select name=dewisdattendance>  $itemList </select><br></td>
    </tr>
<tr> 
        <td><font size=2> Entry Date</font></td>
        <td><select name=dewisstartdate>  $itemList </select><br></td>
    </tr>
<tr> 
        <td><font size=2> Exit Date</font></td>
        <td><select name=dewisenddate>  $itemList </select><br></td>
    </tr>
   

</table>　
          <button type=submit name=submit> Submit </button>
</form>   

END;
	$str = $displaycount;
  
	return($str);  
        
        }
?>
