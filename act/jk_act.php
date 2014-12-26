<?php
include("../lib/koneksi.php");


if (isset($_POST['aksi'])){
	$aksi	= $_POST['aksi'];
}else{
	$aksi	= $_GET['aksi'];
}

$jk	= $_POST['jk'];
	
if (isset($_POST['kode'])){
	$kode	= $_POST['kode'];
}else{
	$kode	= $_GET['kode'];
}



switch($aksi){
	case "update";
		$sql = mysql_query("UPDATE jk SET jk = '$jk' WHERE kode_jk = '$kode'");
		if($sql){ header('location:../master.php'); }else{ ?><script language="">alert("gagal update");document.location='../master.php'</script><?php }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM jk WHERE kode_jk = '$kode'");
		if($sql){ header('location:../master.php'); }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO jk VALUES(NULL,'$jk')");
		if($sql){ header('location:../master.php'); }
	break;
}

