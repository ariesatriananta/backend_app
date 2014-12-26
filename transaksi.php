<?php 
//error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include ("lib/lib_html.php");
	include ("lib/lib_php.php");
	$user = $_SESSION['user'];
?>

<title><?php title('Pendaftaran'); ?></title>
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php head(); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->   
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?php sidebar('transaksi'); ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="body">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
           <?php page_header('Pendaftaran Siswa','Transaksi','','','',''); ?> 
           
			<!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget box blue">
                        <div class="widget-body">
                           <div class="clearfix margin-bottom-10">
                              <div class="btn-group pull-right">
                                 <a data-target="#tambah-ps" class="btn btn-success" data-toggle='modal'><i class="icon-plus"></i> Siswa Baru</a>
                              </div>
                           </div>
                           <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                              <thead>
                                 <tr>
                                    <th>No Induk Siswa</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Umur</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Aksi</th>
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
                                    <td><a href="#edit-ps-<?php echo $data1['nis']; ?>" class="btn btn-mini btn-primary" data-toggle="modal"><i class="icon-edit"></i></a>
                                    	<a href="#del-ps-<?php echo $data1['nis']; ?>" class="btn btn-mini btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>
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
            </div>
            
            						<!-- ## MODAL TAMBAH USER ## -->
				 					<div id="tambah-ps" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Form Pendaftaran Siswa</h3>
										</div><br>
                                        <form action="" id="form_tambahps" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                      <label class="control-label">No Induk Siswa</label>
                                                      <div class="controls">
                                                         <input type="text" name="nis" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Umur</label>
                                                      <div class="controls">
                                                         <input type="text" name="umur" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Nama Siswa</label>
                                                      <div class="controls">
                                                         <input type="text" name="nama" data-required="1" class="input-large "/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Jenis Kelamin</label>
                                                     <div class="controls">
                                                            <select class="input small chosen" name="jk" tabindex="1" >
                                                                <option value=""></option>
                                                                <?php
																$sql2=mysql_query("SELECT * FROM jk");
                                                                 while ($data2=mysql_fetch_array($sql2)){ ?>
                                                                <option value="<?php echo $data2['kode_jk']; ?>"><?php echo $data2['jk']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                         </div>
                                                   </div> 
                                                   <div class="control-group">
                                                      <label class="control-label">Agama</label>
                                                     <div class="controls">
                                                            <select class="input small chosen" name="agama" tabindex="1" >
                                                                <option value=""></option>
                                                                <?php
																$sql4=mysql_query("SELECT * FROM agama");
                                                                 while ($data4=mysql_fetch_array($sql4)){ ?>
                                                                <option value="<?php echo $data4['kode_agama']; ?>"><?php echo $data4['agama']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                         </div>
                                                   </div> 
                                                   <br><br><br>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        <div class="progress progress-striped progress-success"><div style="width: 0%;" class="bar" id="tambah_ps"></div></div>
                                        </form>
									</div>
                 				<!-- END MODAL TAMBAH USER -->
                                
                                <?php
								$sql3=mysql_query("SELECT * FROM pendaftaran JOIN jk USING(kode_jk) JOIN agama USING(kode_agama) ORDER BY nis");
								while($data3=mysql_fetch_array($sql3)){
								?>
                                <!-- ## MODAL HAPUS USER ## -->
                                 <div id="del-ps-<?php echo $data3['nis']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Menghapus <?php echo $data3['nis']; ?> ?</h3>
										</div>
                                        <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal">Batal</button>
                                            <a href="act/ps_act.php?aksi=delete&nis=<?php echo $data3['nis']; ?>"><div class="btn btn-danger"> Hapus </div></a>
                                        </div>
                                  </div>
                                 <!-- END MODAL HAPUS USER -->
                                <!-- ## MODAL EDIT USER ## -->
				 					<div id="edit-ps-<?php echo $data3['nis']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<h3>Edit Data User</h3>
										</div><br>
                                        <form action="act/ps_act.php" id="" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                                                   
                                                   <div class="control-group">
                                                      <label class="control-label">No Induk Siswa</label>
                                                      <div class="controls">
                                                         <input type="text" name="nis" data-required="1" class="input-large " value="<?php echo $data3['nis'] ?>" readonly/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Tanggal</label>
                                                      <div class="controls">
                                                         <input type="text" name="tgl" data-required="1" class="input-large " value="<?php echo $data3['tgl'] ?>"/>
                                                      </div>
                                                   </div>

                                                   <div class="control-group">
                                                      <label class="control-label">Umur</label>
                                                      <div class="controls">
                                                         <input type="text" name="umur" data-required="1" class="input-large " value="<?php echo $data3['umur'] ?>"/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Nama Siswa</label>
                                                      <div class="controls">
                                                         <input type="text" name="nama" data-required="1" class="input-large " value="<?php echo $data3['nama'] ?>"/>
                                                      </div>
                                                   </div>
                                                   <div class="control-group">
                                                      <label class="control-label">Jenis Kelamin</label>
                                                     <div class="controls">
                                                            <select class="input small chosen" name="jk" tabindex="1" >
                                                                <option value="<?php echo $data3['kode_jk']; ?>"><?php echo $data3['jk']; ?></option>
                                                                <?php
																$a = $data3['kode_jk'];
																$sql5=mysql_query("SELECT * FROM jk WHERE kode_jk != '$a'");
                                                                 while ($data5=mysql_fetch_array($sql5)){ ?>
                                                                <option value="<?php echo $data5['kode_jk']; ?>"><?php echo $data5['jk']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                         </div>
                                                   </div> 
                                                   <div class="control-group">
                                                      <label class="control-label">Agama</label>
                                                     <div class="controls">
                                                            <select class="input small chosen" name="agama" tabindex="1" >
                                                                <option value="<?php echo $data3['kode_agama']; ?>"><?php echo $data3['agama']; ?></option>
                                                                <?php
																$a = $data3['kode_agama'];
																$sql6=mysql_query("SELECT * FROM agama WHERE kode_agama != '$a'");
                                                                 while ($data6=mysql_fetch_array($sql6)){ ?>
                                                                <option value="<?php echo $data6['kode_agama']; ?>"><?php echo $data6['agama']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                         </div>
                                                   </div> 
                                                   <br><br><br>
                                        </div>
										<div class="modal-footer">
											<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
											<button class="btn btn-success" type="submit">Simpan</button>
										</div>
                                        </form>
									</div>
                 				<!-- END MODAL EDIT USER -->
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
	