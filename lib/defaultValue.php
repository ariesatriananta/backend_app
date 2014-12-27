<?php
if(isset($_SESSION['user_id'])){$user_id=$_SESSION['user_id'];}else{$user_id=null;}
$dataLogin=query("SELECT * FROM user JOIN usertype WHERE user_id='$user_id'");
define('infoLogin_userNamaLengkap', $dataLogin['user_namalengkap']);
define('infoLogin_userTypeNama', $dataLogin['usertype_nama']);
define('superAdmin_id', 2);

