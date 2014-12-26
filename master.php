<?php 
//error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include ("lib/lib_html.php");
	include ("lib/lib_php.php");
	$user = $_SESSION['user'];
?>

<title><?php title('Master'); ?></title>
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php head(); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?php sidebar('master'); ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="body">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
           <?php page_header('Data Master','Master','','','',''); ?> 
           
			<!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span6">
                  <center><h4>Jenis Kelamin</h4></center>
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget box blue">
                        <div class="widget-body">
                           <div class="clearfix margin-bottom-10">
                              <div class="btn-group pull-right">
                                 <a data-target="#tambah-jk" class="btn btn-success" data-toggle='modal'><i class="icon-plus"></i> JK Baru</a>
                              </div>
                           </div>
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                             
                              <?php
							  	$sql1=mysql_query("SELECT * FROM jk ORDER BY kode_jk");
							  	while($data1 = mysql_fetch_array($sql1)){ 
							  ?>
                                 <tr class="">
                                    <td><?php echo $data1['jk']; ?></td>
                                    <td><a href="#edit-jk-<?php echo $data1['kode_jk']; ?>" class="btn btn-mini btn-primary" data-toggle="modal"><i class="icon-edit"></i></a>
                                    	<a href="#del-jk-<?php echo $data1['kode_jk']; ?>" class="btn btn-mini btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>
                                    </td>
                                    <!-- <a href="#myModal1"  data-toggle="modal">Modal Dialog</div> -->
                                 </tr>
                          		<?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                  </div>
          
                  <div class="span6">
                  <center><h4>Agama</h4></center>
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget box blue">
                        <div class="widget-body">
                           <div class="clearfix margin-bottom-10">
                              <div class="btn-group pull-right">
                                 <a data-target="#tambah-agm" class="btn btn-success" data-toggle='modal'><i class="icon-plus"></i> Agama Baru</a>
                              </div>
                           </div>
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Nama Agama</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                             
                              <?php
							  	$sql5=mysql_query("SELECT * FROM agama ORDER BY kode_agama");
							  	while($data5 = mysql_fetch_array($sql5)){ 
							  ?>
                              
                                 <tr class="">
                                    <td><?php echo $data5['agama']; ?></td>
                                    <td><a href="#edit-agm-<?php echo $data5['kode_agama']; ?>" class="btn btn-mini btn-primary" data-toggle="modal"><i class="icon-edit"></i></a>
                                    	<a href="#del-agm-<?php echo $data5['kode_agama']; ?>" class="btn btn-mini btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>
                                    </td>
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
            
            						<!-- ## MODAL TAMBAH USER ## -->
				 					<div id="tambah-jk" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menambahkan Jenis Kelamin Baru</h3>
										</div><br>
                                        <form action="" id="form_tambahjk" class="form-horizontal" method="post" enctype="multipart/form-data">
										<div class="modal-body">
                                        			
                                                   <div class="alert alert-error hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukan tidak sesuai.
                                                   </div>
                                                   <div class="alert alert-success hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukkan Benar!
                                                   </div>
                                                   <input type="hidden" name="aksi" value="insert">
                                                   <div class="control-group">
                                                      <label class="control-label">Jenis Kelamin</label>
                                                      <div class="controls">
                                                         <input type="text" name="jk" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        <div class="progress progress-striped progress-success"><div style="width: 0%;" class="bar" id="tambah_jk"></div></div>
                                        </form>
									</div>
                 				<!-- END MODAL TAMBAH USER -->
                                
                                <?php
								$sql3=mysql_query("SELECT * FROM jk ORDER BY kode_jk");
								while($data3=mysql_fetch_array($sql3)){
								?>
                                <!-- ## MODAL HAPUS USER ## -->
                                 <div id="del-jk-<?php echo $data3['kode_jk']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menghapus <?php echo $data3['jk']; ?> ?</h3>
										</div>
                                        <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal">Batal</button>
                                            <a href="act/jk_act.php?aksi=delete&kode=<?php echo $data3['kode_jk']; ?>"><div class="btn btn-danger"> Hapus </div></a>
                                        </div>
                                  </div>
                                 <!-- END MODAL HAPUS USER -->
                                <!-- ## MODAL EDIT USER ## -->
				 					<div id="edit-jk-<?php echo $data3['kode_jk']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Edit Data User</h3>
										</div><br>
                                        <form action="act/jk_act.php" id="" class="form-horizontal" method="post" enctype="multipart/form-data">
										<div class="modal-body">
                                        			
                                                   <div class="alert alert-error hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukan tidak sesuai.
                                                   </div>
                                                   <div class="alert alert-success hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukkan Benar!
                                                   </div>
                                                   <input type="hidden" name="aksi" value="update">
                                                   <input type="hidden" name="kode" value="<?php echo $data3['kode_jk']; ?>">
                                                   <div class="control-group">
                                                      <label class="control-label">Jenis Kelamin</label>
                                                      <div class="controls">
                                                         <input type="text" name="jk" data-required="1" class="input-large " value="<?php echo $data3['jk']; ?>"/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        </form>
									</div>
                 				<!-- END MODAL EDIT USER -->
            					<?php } ?>
            					
            					
                                
                                <!-- ## MODAL TAMBAH agm ## -->
				 					<div id="tambah-agm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menambahkan Agama Baru</h3>
										</div><br>
                                        <form action="" id="form_tambahagm" class="form-horizontal" method="post" enctype="multipart/form-data">
										<div class="modal-body">
                                                   <div class="alert alert-error hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukan tidak sesuai.
                                                   </div>
                                                   <div class="alert alert-success hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukkan Benar!
                                                   </div>
                                                   <input type="hidden" name="aksi" value="insert">
                                                   <div class="control-group">
                                                      <label class="control-label">Nama Agama</label>
                                                      <div class="controls">
                                                         <input type="text" name="agama" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        <div class="progress progress-striped progress-success"><div style="width: 0%;" class="bar" id="tambah_agm"></div></div>
                                        </form>
									</div>
                 				<!-- END MODAL TAMBAH agm -->
                                
                                <?php
								$sql6=mysql_query("SELECT * FROM agama ORDER BY kode_agama");
								while($data6=mysql_fetch_array($sql6)){
								?>
                                <!-- ## MODAL HAPUS agm ## -->
                                 <div id="del-agm-<?php echo $data6['kode_agama']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menghapus <?php echo $data6['agama']; ?> ?</h3>
										</div>
                                        <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal">Batal</button>
                                            <a href="act/agama_act.php?aksi=delete&kode=<?php echo $data6['kode_agama']; ?>"><div class="btn btn-danger"> Hapus </div></a>
                                        </div>
                                  </div>
                                 <!-- END MODAL HAPUS agm -->
                                <!-- ## MODAL EDIT agm ## -->
				 					<div id="edit-agm-<?php echo $data6['kode_agama']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Edit Data Kategori User</h3>
										</div><br>
                                        <form action="act/agama_act.php" id="" class="form-horizontal" method="post" enctype="multipart/form-data">
										<div class="modal-body">
                                        			
                                                   <div class="alert alert-error hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukan tidak sesuai.
                                                   </div>
                                                   <div class="alert alert-success hide">
                                                      <button class="close" data-dismiss="alert">×</button>
                                                      Data yang dimasukkan Benar!
                                                   </div>
                                                   <input type="hidden" name="aksi" value="update">
                                                   <input type="hidden" name="kode" value="<?php echo $data6['kode_agama']; ?>">
                                                   <div class="control-group">
                                                      <label class="control-label">Nama Kategori</label>
                                                      <div class="controls">
                                                         <input type="text" name="agama" data-required="1" class="input-large " value="<?php echo $data6['agama']; ?>"/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        </form>
									</div>
                 				<!-- END MODAL EDIT agm -->
            					<?php } ?>
                                
                                
                                
                                
                                
                                
                
			</div>
			<!-- END PAGE CONTAINER-->		
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php footer(); ?>
	<!-- END FOOTER -->
	