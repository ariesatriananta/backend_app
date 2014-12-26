<?php
include("../lib/koneksi.php");

if (isset($_POST['aksi'])){
	$aksi	= $_POST['aksi'];
}else{
	$aksi	= $_GET['aksi'];
}

if (isset($_POST['username'])){
	$username	= $_POST['username'];
}else{
	$username   = $_GET['username'];
}

$password	= $_POST['password'];
$kode_kat	= $_POST['kategori'];
$username_lama	= $_POST['username_lama'];



switch($aksi){
	case "update";
		$sql = mysql_query("SELECT * FROM user WHERE user = '$username_lama'");
		$data= mysql_fetch_array($sql);
		if (empty($_POST['kategori'])){ $kode_kat = $data['kode_kat_user']; }else{ $kode_kat	= $_POST['kategori']; }
		$sql = mysql_query("UPDATE user SET user='$username', kode_kat_user='$kode_kat', password='$password' WHERE user = '$username_lama'");
		if($sql){ header('location:../user.php'); }else{ ?><script language="javascript">alert("gagal update");document.location='../user.php'</script><?php }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM user WHERE user = '$username'");
		if($sql){ header('location:../user.php'); }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO user VALUES('$username','$kode_kat','$password')");
	break;
}

