<?php
$PowerSchoolFileName="./demographic.txt";
//appoint an operation on the file. The second arg is the authorization-read only. 
$fd = fopen ($PowerSchoolFileName, 'r');
//declare a variable to keep the reading results.
$contents = fread($fd,100000);
$header=strpos($contents,"\n");

//put every row into an array
$numberofRows=explode("\r",$contents);

//zero is the header
//echo $numberofRows[0];
$headerLength=substr_count($numberofRows[0],"\t")+1;
echo "the humber of header is".$headerLength;

$newarray = array();
foreach($numberofRows as $a){
	$b = explode("\t",$a);
	array_push($newarray, $b);
}
//newarray is a new two dimensions array. like this [1] => Array ( [0] => CUR [1] => 12/12/2011 
//print_r($newarray); 

fclose ($fd);

$fromGUI=array("Consequence","Discipline Actiontaken","Discipline Moneylossvalue");
print_r($fromGUI);
PRINT_R($newarray[0]);
//return the joint objects
$intersect=array_intersect($newarray[0],$fromGUI);
//return the index of the array
print_r(array_keys($intersect));
?>
