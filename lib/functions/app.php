<?php
function baseUrl (){
    $sql = mysql_query("SELECT * FROM profile WHERE profile_status=1");
    $data = mysql_fetch_array($sql);
    $baseUrl = $data['profile_baseurl'];
    return $baseUrl;
}

function query($query,$jamak=NULL){
    if($jamak===true){
        $sql = mysql_query($query);
        return $sql;
    }else{
        $sql = mysql_query($query);
        $data = mysql_fetch_array($sql);
        return $data;
    }
    /*
    Contoh Penggunaan Dengan Data TUNGGAL
    $a = query('SELECT * FROM user where user_username="a"');
    echo $a['user_namalengkap'];
    
    Contoh Penggunaan Dengan Data JAMAK
    $a = query('SELECT * FROM user',true);
    while($b = mysql_fetch_array($a)){
        echo $b['user_namalengkap'];
    }
    */
}



?>

