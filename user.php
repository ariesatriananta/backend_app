<?php 
//error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include ("lib/lib_html.php");
	include ("lib/lib_php.php");
	$user = $_SESSION['user'];
?>

<title><?php title('User'); ?></title>
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php head(); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?php sidebar('user'); ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="body">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
           <?php page_header('Data User','User','','','',''); ?> 
           
			<!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span6">
                  <center><h4>User</h4></center>
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget box blue">
                        <div class="widget-body">
                           <div class="clearfix margin-bottom-10">
                              <div class="btn-group pull-right">
                                 <a data-target="#tambah-user" class="btn btn-success" data-toggle='modal'><i class="icon-plus"></i> User Baru</a>
                              </div>
                           </div>
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                             
                              <?php
							  	$sql1=mysql_query("SELECT * FROM user JOIN kategori_user USING(kode_kat_user) ORDER BY user");
							  	while($data1 = mysql_fetch_array($sql1)){ 
							  ?>
                              
                                 <tr class="">
                                    <td><?php echo $data1['user']; ?></td>
                                    <td><?php echo $data1['password']; ?></td>
                                    <td><?php echo $data1['nama_kat_user']; ?></td>
                                    <td><a href="#edit-user-<?php echo $data1['user']; ?>" class="btn btn-mini btn-primary" data-toggle="modal"><i class="icon-edit"></i></a>
                                    	<a href="#del-user-<?php echo $data1['user']; ?>" class="btn btn-mini btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>
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
                  <center><h4>Kategori User</h4></center>
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget box blue">
                        <div class="widget-body">
                           <div class="clearfix margin-bottom-10">
                              <div class="btn-group pull-right">
                                 <a data-target="#tambah-kat" class="btn btn-success" data-toggle='modal'><i class="icon-plus"></i> Kategori Baru</a>
                              </div>
                           </div>
                           <table class="table table-striped table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                             
                              <?php
							  	$sql5=mysql_query("SELECT * FROM kategori_user ORDER BY kode_kat_user");
							  	while($data5 = mysql_fetch_array($sql5)){ 
							  ?>
                              
                                 <tr class="">
                                    <td><?php echo $data5['nama_kat_user']; ?></td>
                                    <td><a href="#edit-kat-<?php echo $data5['kode_kat_user']; ?>" class="btn btn-mini btn-primary" data-toggle="modal"><i class="icon-edit"></i></a>
                                    	<a href="#del-kat-<?php echo $data5['kode_kat_user']; ?>" class="btn btn-mini btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>
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
				 					<div id="tambah-user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menambahkan User Baru</h3>
										</div><br>
                                        <form action="" id="form_tambahuser" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                      <label class="control-label">Kategori User</label>
                                                     <div class="controls">
                                                            <select class="input small chosen" name="kategori" tabindex="1" >
                                                                <option value=""></option>
                                                                <?php
																$sql2=mysql_query("SELECT * FROM kategori_user");
                                                                 while ($data2=mysql_fetch_array($sql2)){ ?>
                                                                <option value="<?php echo $data2['kode_kat_user']; ?>"><?php echo $data2['nama_kat_user']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                         </div>
                                                   </div> 
                                                   <div class="control-group">
                                                      <label class="control-label">Username</label>
                                                      <div class="controls">
                                                         <input type="text" name="username" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Password</label>
                                                      <div class="controls">
                                                         <input type="password" name="password" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        <div class="progress progress-striped progress-success"><div style="width: 0%;" class="bar" id="tambah_user"></div></div>
                                        </form>
									</div>
                 				<!-- END MODAL TAMBAH USER -->
                                
                                <?php
								$sql3=mysql_query("SELECT * FROM user JOIN kategori_user USING(kode_kat_user) ORDER BY user");
								while($data3=mysql_fetch_array($sql3)){
								?>
                                <!-- ## MODAL HAPUS USER ## -->
                                 <div id="del-user-<?php echo $data3['user']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menghapus <?php echo $data3['user']; ?> ?</h3>
										</div>
                                        <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal">Batal</button>
                                            <a href="act/user_act.php?aksi=delete&username=<?php echo $data3['user']; ?>"><div class="btn btn-danger"> Hapus </div></a>
                                        </div>
                                  </div>
                                 <!-- END MODAL HAPUS USER -->
                                <!-- ## MODAL EDIT USER ## -->
				 					<div id="edit-user-<?php echo $data3['user']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Edit Data User</h3>
										</div><br>
                                        <form action="act/user_act.php" id="" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                   <input type="hidden" name="username_lama" value="<?php echo $data3['user']; ?>">
                                                   <div class="control-group">
                                                      <label class="control-label">Kategori User</label>
                                                     <div class="controls">
                                                            <select class="input small chosen" name="kategori" tabindex="1" >
                                                                <option value=""><?php echo $data3['nama_kat_user']; ?></option>
                                                                <?php
																$a = $data3['kode_kat_user'];
																$sql4=mysql_query("SELECT * FROM kategori_user WHERE kode_kat_user != '$a'");
                                                                 while ($data4=mysql_fetch_array($sql4)){ ?>
                                                                <option value="<?php echo $data4['kode_kat_user']; ?>"><?php echo $data4['nama_kat_user']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                         </div>
                                                   </div> 
                                                   <div class="control-group">
                                                      <label class="control-label">Username</label>
                                                      <div class="controls">
                                                         <input type="text" name="username" data-required="1" class="input-large " value="<?php echo $data3['user']; ?>"/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Password</label>
                                                      <div class="controls">
                                                         <input type="text" name="password" data-required="1" class="input-large " value="<?php echo $data3['password']; ?>" />
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
            					
            					
                                
                                <!-- ## MODAL TAMBAH KAT ## -->
				 					<div id="tambah-kat" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menambahkan Kategori User Baru</h3>
										</div><br>
                                        <form action="" id="form_tambahkat" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                      <label class="control-label">Nama Kategori</label>
                                                      <div class="controls">
                                                         <input type="text" name="nama" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        <div class="progress progress-striped progress-success"><div style="width: 0%;" class="bar" id="tambah_kat"></div></div>
                                        </form>
									</div>
                 				<!-- END MODAL TAMBAH KAT -->
                                
                                <?php
								$sql6=mysql_query("SELECT * FROM kategori_user ORDER BY kode_kat_user");
								while($data6=mysql_fetch_array($sql6)){
								?>
                                <!-- ## MODAL HAPUS KAT ## -->
                                 <div id="del-kat-<?php echo $data6['kode_kat_user']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menghapus <?php echo $data6['nama_kat_user']; ?> ?</h3>
										</div>
                                        <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal">Batal</button>
                                            <a href="act/kat_act.php?aksi=delete&kode_kat=<?php echo $data6['kode_kat_user']; ?>"><div class="btn btn-danger"> Hapus </div></a>
                                        </div>
                                  </div>
                                 <!-- END MODAL HAPUS KAT -->
                                <!-- ## MODAL EDIT KAT ## -->
				 					<div id="edit-kat-<?php echo $data6['kode_kat_user']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Edit Data Kategori User</h3>
										</div><br>
                                        <form action="act/kat_act.php" id="" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                   <input type="hidden" name="kode_kat" value="<?php echo $data6['kode_kat_user']; ?>">
                                                   <div class="control-group">
                                                      <label class="control-label">Nama Kategori</label>
                                                      <div class="controls">
                                                         <input type="text" name="nama" data-required="1" class="input-large " value="<?php echo $data6['nama_kat_user']; ?>"/>
                                                      </div>
                                                   </div>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        </form>
									</div>
                 				<!-- END MODAL EDIT KAT -->
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
	