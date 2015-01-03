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
           <?php page_header('Pengaturan Sistem','Pengaturan Sistem','','','',''); ?> 
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
            <div class="row-fluid profile">
            <div class="span12">
                
            <?php widgetBegin(null,'Profil Sistem','ubah'); ?>
                <div class="tab-pane profile-classic row-fluid">
                <div class="span2"><img src="<?php echo baseUrl().'pic/'.$dataProfile['profile_logo']; ?>" alt="" /></div>
                   <ul class="unstyled span10">
                      <li><span>Nama :</span> <?php echo $dataProfile['profile_nama']; ?></li>
                      <li><span>Deskripsi :</span> <?php echo $dataProfile['profile_deskripsi']; ?></li>
                      <li><span>Url :</span> <?php echo $dataProfile['profile_baseurl']; ?></li>
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
        <!-- ## BEGIN MODAL EDIT ## -->
        <div id="ubah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header"><h3>Profil Sistem</h3></div><br>
            <form id="update" action="act/update.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <div class="alert alert-error hide">
                       <button class="close" data-dismiss="alert">×</button>
                       Beberapa data tidak terisi dengan benar. Mohon cek kembali!
                    </div>
                    <div class="alert alert-success hide">
                       <button class="close" data-dismiss="alert">×</button>
                       Data sudah benar.
                    </div>
                    <input type="hidden" name="table" value="profile">
                    <input type="hidden" name="update[profile_id]" value="<?php echo $dataProfile['profile_id']; ?>">
                    <div class="control-group">
                       <label class="control-label">Nama<span class="required">*</span></label>
                       <div class="controls">
                           <input type="text" name="update[profile_nama]" data-required="1" class="span8 " value="<?php echo $dataProfile['profile_nama']; ?>" />
                       </div>
                    </div>
                     <div class="control-group">
                          <label class="control-label">Deskripsi</label>
                          <div class="controls">
                             <textarea class="span8 m-wrap" name="update[profile_deskripsi]" rows="3"><?php echo $dataProfile['profile_deskripsi']; ?></textarea>
                          </div>
                     </div>
                    <div class="control-group">
                       <label class="control-label">URL<span class="required">*</span></label>
                       <div class="controls">
                          <input name="update[profile_baseurl]" type="text" class="span8 " value="<?php echo $dataProfile['profile_baseurl']; ?>"/>
                          <span class="help-block"><i>contoh = http://www.demo.com or http://demo.com</i></span>
                       </div>
                    </div>
                     <div class="control-group">
                         <label class="control-label">Logo</label>
                         <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                               <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="<?php echo baseUrl().'pic/'.$dataProfile['profile_logo']; ?>" alt="" />
                               </div>
                               <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                               <div>
                                  <span class="btn btn-file"><span class="fileupload-new">Ganti Gambar</span>
                                  <span class="fileupload-exists">Ganti</span>
                                  <input type="file" name="update[profile_logo]" class="default" /></span>
                                  <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Hapus</a>
                               </div>   
                            </div>
                         </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form>
        </div>
        <!-- ## END MODAL EDIT ## -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php footer(); ?>
    <!-- END FOOTER -->
	