<?php
//**************************
//author: Elizabeth Wu (lizzy.cmu@gmail.com)
//2012-8-27
//*************************************
$PowerSchoolFileName="./powerschool/demographic.txt";
$fd = fopen ($PowerSchoolFileName, 'r');
$contents = fread($fd,100000);
$numberofRows=explode("\n",$contents);
////zero is the header
//echo $numberofRows[0];
$resultsheader=$numberofRows[0];
$newarray = array();
foreach($numberofRows as $a){
	$b = explode("\t",$a);
	array_push($newarray, $b);
}


$con = mysql_connect("localhost","dartdem2","mK1G64mdS4Xa");
    if (!$con)
     {
     die('Could not connect: ' . mysql_error());
     echo "con fails";
     }
     mysql_select_db("dartdem2_demo", $con);
     
$result = mysql_query("SELECT * FROM powerschool");
     
  
     $fileCol=array();
     
    while ($row=mysql_fetch_array($result)){ $fileCol[]=$row['fileCol'] ;}
    mysql_free_result($result);
  
//return the joint objects, the chosen one is the sample
    $intersectB=array_intersect($newarray[0],$fileCol);
   //  print_r($intersectB);
     //the keyarrayB contains index from the file
     $keyarrayB=  array_keys($intersectB);
     //print_r($keyarrayB);
     $keyLengthB=count($keyarrayB);
  
     //the key belogs to database columns, it should search based on the intersect array
     $databaseCol=array();
      foreach($intersectB as $value){
          $search="select databaseCol from powerschool where fileCol=\"".$value."\"";
         // print_r($search);
          $dbcol= mysql_fetch_array( mysql_query($search));
        //print_r($dbcol[0]); 
        if($dbcol!=null) 
              array_push($databaseCol, $dbcol[0]);
      }
     // print_r($databaseCol);
   //retrive the database path from the table
    $stringCS="(";
     $stringCD="(sid,";
         for($i=0;$i<count($databaseCol);$i++){
            if(similar_text($databaseCol[$i],"student")==7)
           {
                $stringCS=$stringCS.$databaseCol[$i].",";
            }
             if(similar_text($databaseCol[$i],"dewis")==5)
           {
                $stringCD=$stringCD.$databaseCol[$i].",";
            }
         }
          $stringCS=rtrim($stringCS,",");
          $stringCS=$stringCS.")";
        //  print_r($stringCS);
           $stringCD=rtrim($stringCD,",");
          $stringCD=$stringCD.")";
        //  print_r($stringCD);
          
    for($j=0;$j<count($newarray);$j++){
      if($newarray[$j]) {
        $stringBS="(";
        $stringBD="(";
        //print out one row
       //  print_r($intersectB);
         $databaseColBS=array();
         $databaseColBD=array();
      //retrive real values from the files
      //  for($i=0;$i< count($intersectB);$i++){
         for($i=0;$i<$keyLengthB;$i++)
         { 
             //temp is lastName, keyarrayB[I] return 2
             $temp=$intersectB[$keyarrayB[$i]];
               $search="select databaseCol from powerschool where fileCol=\"".$temp."\"";
                   $dbcol= mysql_fetch_array( mysql_query($search));
               
                $tempitem=$newarray[$j][$keyarrayB[$i]];
                $stateid="";
              if($dbcol!=null&&similar_text($dbcol[0],"student")==7)
                {   if(similar_text($dbcol[0],"alaskaid")==8){$stateid=$tempitem;$stringBD=$stringBD.$stateid;}
                    $stringBS=$stringBS. "\"".$tempitem. "\"".",";
                  } 
              if($dbcol!=null&&similar_text($dbcol[0],"dewis")==5)
                 { 
                   if(similar_text($dbcol[0],"attendance")==10)$tempitem=  intval ($tempitem*100);
                  
                   $stringBD=$stringBD. "\"".$tempitem. "\"".",";
                  }
                  //only print the selected columns
             
           }
        
          $stringBS=rtrim($stringBS,",");
          $stringBS=$stringBS.")";
         // print_r($stringBS);
          $stringBD=rtrim($stringBD,",");
          $stringBD=$stringBD.")";
         // print_r($stringBD);
         
          $insertstudent="insert into student ".$stringCS ." values". $stringBS;
         $insertdewis="insert into dewis ".$stringCD ." values". $stringBD;
      //   print_r($insertstudent);
      //    print_r($insertdewis);
      }//eof
      
     mysql_query($insertstudent);
     mysql_query($insertdewis);
    }
   echo "Import ".$PowerSchoolFileName." succeed! <br>";

echo" <html>
<body>
<form action=\"index.php?cmd=home\" method=\"post\">
   <button type=submit name=submit> Return to Homepage </button>
</form>
</body>
</html>";

mysql_close($con);
?>
