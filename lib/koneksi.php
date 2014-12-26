<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "backend_app";
$connection = mysql_connect($host, $username, $password) or die("Kesalahan Koneksi ... !!");
mysql_select_db($databasename, $connection) or die("Databasenya Tidak Ada");	
?>
