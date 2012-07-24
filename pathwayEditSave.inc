<?php

$sep = ($_GET['sep'] == '') ? "_": $_GET['sep'];
$params = explode("$sep", $_GET['id']);
$value = $_GET['val'];

$table = $params[0];
$field = $params[1];
$key = $params[2];
$id = $params[3];

$sql = "UPDATE $table SET $field = '$value' WHERE $key = '$id' ";
//$sql = "INSERT INTO $table SET $field = '$value' WHERE $key = '$id' DUPLICATE KEY UPDATE $field = '$value'";
//$newid = mysql_insert_id();
echo "SEP: $sep SQL: $sql : $newid";
$db->get_results($sql);


?>