<?php
include("../lib/koneksi.php");


if (isset($_POST['aksi'])){
	$aksi	= $_POST['aksi'];
}else{
	$aksi	= $_GET['aksi'];
}

$nama	= $_POST['nama'];
	
if (isset($_POST['kode_kat'])){
	$kode	= $_POST['kode_kat'];
}else{
	$kode	= $_GET['kode_kat'];
}



switch($aksi){
	case "update";
		$sql = mysql_query("UPDATE kategori_user SET nama_kat_user = '$nama' WHERE kode_kat_user = '$kode'");
		if($sql){ header('location:../user.php'); }else{ ?><script language="">alert("gagal update");document.location='../user.php'</script><?php }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM kategori_user WHERE kode_kat_user = '$kode'");
		if($sql){ header('location:../user.php'); }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO kategori_user VALUES(NULL,'$nama')");
		if($sql){ header('location:../user.php'); }
	break;
}

