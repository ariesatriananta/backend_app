<?php

include("../lib/koneksi.php");
$table= $_POST['table'];
$data = $_POST['insert'];

$sql = "INSERT INTO $table ";
$sql .= "(".implode(',', array_keys($data)).")";
$sql .= " VALUES ('".implode("','", $data)."')";
$result = mysql_query($sql) or die(mysql_error());


