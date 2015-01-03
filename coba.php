<?php
$pageName='coba';
include('lib/libApp.php');
?>
<form action="act/coba.php" method="post" >
    <input type="hidden" name="table" value="coba">
<!--    <input type="hidden" name="insert[coba_status]" value="1">
    <input type="hidden" name="insert[coba_id]">-->
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="insert[coba_nama]"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="insert[coba_alamat]"></td>
    </tr>
</table>
    <input type="reset">
    <input type="submit">
</form>