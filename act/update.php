<?php

include("../lib/koneksi.php");
$table  = $_POST['table'];
$data   = $_POST['update'];
$dataPic= $_FILES['update'];
$picdir = '../pic/'.$dataPic['name'][''.array_keys($dataPic['name'])[0].''];

if(empty($dataPic['name'][''.array_keys($dataPic['name'])[0].''])){
    
}else{
    if((($dataPic['type'][''.array_keys($dataPic['name'])[0].''])=='image/jpeg') or (($dataPic['type'][''.array_keys($dataPic['name'])[0].''])=='image/png')){
        $data[''.array_keys($dataPic['name'])[0].''] = $dataPic['name'][''.array_keys($dataPic['name'])[0].''];
        move_uploaded_file($dataPic['tmp_name'][''.array_keys($dataPic['name'])[0].''],$picdir);
    }else{
        ?><script language='javascript'>alert('file tidak sesuai!');
        document.location='javascript:history.go(-1)';</script><?php
    }
}


$cariPk =  mysql_query("select COLUMN_NAME from information_schema.KEY_COLUMN_USAGE 
                        where CONSTRAINT_NAME='PRIMARY' AND TABLE_NAME='$table' 
                        AND TABLE_SCHEMA='$databasename'");
$cariPk = mysql_fetch_array($cariPk);
$pk     = $cariPk['COLUMN_NAME'];
$vPk    = $data[''.$pk.''];

foreach ($data as $key => $value){
    $sql = "UPDATE $table SET ".$key."='".$value."' where $pk=$vPk";
//    echo $sql;
    $result = mysql_query($sql) or die(mysql_error());
}
?>
<script language='javascript'>document.location='javascript:history.go(-1)';</script>

