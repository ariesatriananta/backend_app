<?php 
if(!isset($_SESSION['user_id'])){
	?><script language="javascript">
	alert("Anda Belum Login");
        document.location="index.php";
    </script>
	<?php
}else{
    if(!isset($user)){
            $user = $_SESSION['user_id'];
    }
}




if(!isset($_SESSION['act'])){
	$_SESSION['act']=-1;}
if (isset($_SESSION['act'])){
	$_SESSION['act']++;
}
?>