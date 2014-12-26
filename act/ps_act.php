<?php
include("../lib/koneksi.php");


if (isset($_POST['aksi'])){
	$aksi	= $_POST['aksi'];
}else{
	$aksi	= $_GET['aksi'];
}

if (isset($_POST['nis'])){
	$nis	= $_POST['nis'];
}else{
	$nis	= $_GET['nis'];
}

$tgl	= $_POST['tgl'];
$umur	= $_POST['umur'];
$nama	= $_POST['nama'];
$jk		= $_POST['jk'];
$agama	= $_POST['agama'];
	




switch($aksi){
	case "update";
		$sql = mysql_query("UPDATE pendaftaran SET tgl = '$tgl', umur = '$umur', nama='$nama', kode_jk='$jk', kode_agama='$agama' WHERE nis = '$nis'");
		if($sql){ header('location:../transaksi.php'); }else{ ?><script language="javascript">alert("gagal update");document.location='../transaksi.php'</script><?php }
	break;
	case "delete";
		$sql = mysql_query("DELETE FROM pendaftaran WHERE nis = '$nis'");
		if($sql){ header('location:../transaksi.php'); }
	break;
	case "insert";
		$sql = mysql_query("INSERT INTO pendaftaran VALUES('$nis',NULL,'$umur','$nama','$jk','$agama')");
		if($sql){ header('location:../transaksi.php'); }
	break;
}

