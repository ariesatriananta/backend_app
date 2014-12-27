<?php 
$pageName='Pengaturan Sistem';
include("lib/libApp.php");
include("lib/libHtml.php");
?>
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
           <?php page_header('Selamat Datang, '.infoLogin_userNamaLengkap.' !','Pengaturan Sistem','','','',''); ?> 
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
            <div class="row-fluid profile">
            <div class="span12">
            <?php widgetBegin(null,'Pengaturan Sistem'); ?>
                <div class="tab-pane profile-classic row-fluid">
                <div class="span2"><img src="<?php echo baseUrl().'pic/sistem/'.$dataProfile['profile_logo']; ?>" alt="" /> <a href="#" class="profile-edit">edit</a></div>
                   <ul class="unstyled span10">
                      <li><span>Nama :</span> <?php echo $dataProfile['profile_nama']; ?></li>
                      <li><span>Deskripsi:</span> <?php echo $dataProfile['profile_deskripsi']; ?></li>
                   </ul>
                </div>
            <?php widgetEnd(); ?>
            </div>
            </div>
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
	