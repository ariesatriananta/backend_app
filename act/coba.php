<?php

if (isset($_POST['aksi'])){
	$aksi	= $_POST['aksi'];
	echo $aksi;
}else{
	$aksi	= $_GET['aksi'];
	echo $aksi;
}?><br /><?php
if (isset($_POST['kode_kat'])){
	$kode	= $_POST['kode_kat'];
	echo $kode;
}else{
	$kode	= $_GET['kode_kat'];
	echo $kode;
}
$nama	= $_POST['nama'];
echo $nama;