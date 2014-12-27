<?php
session_start();
$pageName='index';
if(!isset($_SESSION['user_id'])){ ?>
	<script language="javascript">
	document.location='login.php';
	</script>
    <?php }else{ ?>
	<script language="javascript">
	document.location='home.php';
	</script>
    <?php } ?>