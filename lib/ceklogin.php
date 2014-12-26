<?php
$pageName='ceklogin';
include("libApp.php");
$user = $_POST['user'];
$pass = $_POST['pass'];


if(empty($user)or empty($pass)){ ?>
	<script language="JavaScript">
		alert("Tidak Boleh Kosong");
		document.location="<?php echo baseUrl(); ?>index.php";
	</script>
	<?php
	}else{
		$sql = mysql_query("select * from user where user_username='$user' and user_password='$pass'");
		$data = mysql_fetch_array($sql);
		if (($user == $data['user_username']) and ($pass == $data['user_password'])) {
			$_SESSION['user_id']= $data['user_id'];
			?>
			<script language="JavaScript">
				document.location="<?php echo baseUrl(); ?>home.php";
			</script>
			<?php
		}else{
				?>
			<script language="JavaScript">
				alert("Tidak terdaftar");
				document.location="<?php echo baseUrl(); ?>index.php";
			</script>
			<?php
		}
}
?>