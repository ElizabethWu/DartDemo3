<?php

global $db;

set_time_limit(0);

$body =<<<END

<a href='/demo2/index.php?cmd=editgs'>Edit Grades</a><br><br>

<a href='/demo2/index.php?cmd=pathwayEdit'>Edit Pathways</a><br><br>

<a href='/demo2/index.php?cmd=pathwayEditElectives'>Edit Pathway Electives</a><br><br>

<a href='/demo2/index.php?cmd=gpaEdit'>Edit GPA</a><br><br>

<a href='/demo2/index.php?cmd=editTable'>Edit Table (For Robert)</a><br><br>

<a href='/demo2/index.php?cmd=editStandards'>Edit Standards</a><br><br>

<a href='/demo2/index.php?cmd=groupEdit'>Group Edit</a><br><br>
<!--
<a href='https://dartdemo.bssd.org/index.php?cmd=graduation_report&student_id=1045'>Test Site (Ernest Jaffe)</a>
-->
END;

include_once("template.inc");
?>
