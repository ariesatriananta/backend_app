<?php 
$pageName='home';
include("lib/libApp.php");
include("lib/libHtml.php");
?>
<title><?php title('Home'); ?></title>
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php head(); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?php sidebar($pageName); ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="body">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
           <?php page_header('Selamat Datang, '.infoLogin_userNamaLengkap.' !','','','','',''); ?> 
            <!-- BEGIN PAGE CONTENT-->
            <div id="page" class="dashboard">

                    <strong><?php echo "Anda telah login sebagai ".infoLogin_userTypeNama; ?></strong>

            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->		
        </div>
        <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php footer(); ?>
    <!-- END FOOTER -->
	