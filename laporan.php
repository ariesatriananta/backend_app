<?php 
//error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include ("lib/lib_html.php");
	include ("lib/lib_php.php");
	$user = $_SESSION['user'];
?>

<title><?php title('Laporan'); ?></title>
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php head(); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?php sidebar('laporan'); ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="body">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
           <?php page_header('Laporan Data Siswa','Laporan','','','',''); ?> 
           
			<!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget box blue">
                        <div class="widget-body">
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>No Induk Siswa</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Umur</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                 </tr>
                              </thead>
                              <tbody>
                             
                              <?php
							  	$sql1=mysql_query("SELECT * FROM pendaftaran JOIN jk USING(kode_jk) JOIN agama USING(kode_agama) ORDER BY nis");
							  	while($data1 = mysql_fetch_array($sql1)){ 
							  ?>
                                 <tr class="">
                                    <td><?php echo $data1['nis']; ?></td>
                                    <td><?php echo $data1['tgl']; ?></td>
                                    <td><?php echo $data1['umur']; ?></td>
                                    <td><?php echo $data1['nama']; ?></td>
                                    <td><?php echo $data1['jk']; ?></td>
                                    <td><?php echo $data1['agama']; ?></td>
                                    <!-- <a href="#myModal1"  data-toggle="modal">Modal Dialog</div> -->
                                 </tr>
                          		<?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                  </div>
               </div>
            </div>
            </div>
                                
                                
                                
                                
                                
                
			</div>
			<!-- END PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php footer(); ?>
	<!-- END FOOTER -->
	