<?php
$dataProfile = query("SELECT * FROM profile WHERE profile_status=1");
echo '<title>'.$dataProfile['profile_nama'].' - '.$pageName.'</title>';
function head() { ?>
<?php $profile = query("SELECT * FROM profile WHERE profile_status=1"); ?>
    <!-- BEGIN HEADER -->
       <div id="header" class="navbar navbar-inverse navbar-fixed-top">
          <!-- BEGIN TOP NAVIGATION BAR -->
          <div class="navbar-inner">
             <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="<?php echo baseUrl(); ?>home.php">
                    <img src="<?php echo baseUrl().'pic/sistem/'.$profile['profile_logo']; ?>" alt="Conquer"/>
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
                </a>          
                <!-- END RESPONSIVE MENU TOGGLER --> 
                <div class="top-nav">

                   <!-- BEGIN TOP NAVIGATION MENU -->   
                   
                   <ul class="nav pull-right" id="top_menu">
                      <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-wrench"></i>
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                    <li><a href="<?php echo baseUrl(); ?>systemProfile.php"><i class="icon-cogs"></i> Pengaturan Sistem</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user"></i>  
                                <?php 
                                echo infoLogin_userNamaLengkap; ?>
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                    <li><a href="<?php echo baseUrl(); ?>"><i class="icon-user"></i> Profil</a></li>
                                    <li><a href="<?php echo baseUrl(); ?>logout.php"><i class="icon-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                      <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU --> 
                </div>
             </div>
          </div>
          <!-- END TOP NAVIGATION BAR -->
       </div>
       <!-- END HEADER -->
    
<?php } ?>

<?php function page_header($page_title,$bc1,$bc1_link,$bc2,$bc2_link,$bc3) { ?>
		<!-- BEGIN PAGE HEADER-->            
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER-->
                  <div id="styler" class="hidden-phone">
                     <i class="icon-cog"></i>
                     <span class="settings">
                     <span class="text">Style:</span>
                     <span class="colors">
                     <span class="color-default" data-style="default">
                     </span>
                     <span class="color-grey" data-style="grey">
                     </span>
                     <span class="color-navygrey" data-style="navygrey">
                     </span>                                
                     <span class="color-red" data-style="red">
                     </span>  
                     </span>
                     <span class="layout">
                     <label class="hidden-phone">
                     <input type="checkbox" class="header" checked value="" />Sticky Header
                     </label><br />
                     <label><input type="checkbox" class="metro" value="" />Metro Style</label>
                     </span>
                     </span>
                  </div>
                  <!-- END STYLE CUSTOMIZER-->        
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->        
                  <h3 class="page-title">
                     <?php echo $page_title; ?>
                  </h3>
                  <?php if(!empty($bc1)){ ?>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="<?php echo baseUrl(); ?>home.php">Home</a>
                        <i class="icon-angle-right"></i>
                     </li>
                     <li>
                     	<?php if(!empty($bc1_link)){ ?><a href="<?php echo $bc1_link; ?>"><?php } echo $bc1; ?></a>
                        <?php if(!empty($bc2)) { ?> <i class="icon-angle-right"></i> <?php } ?>
                     </li>
                     <li>
                     	<?php if(!empty($bc2_link)){ ?><a href="<?php echo $bc2_link; ?>"><?php } echo $bc2; ?></a>
                        <?php if(!empty($bc3)) { ?> <i class="icon-angle-right"></i> <?php } ?>
                     </li>
                     <li>
                     	<?php if(!empty($bc3)){ echo $bc3; }?>
                     </li>
                     
                  </ul>
                  <?php } ?>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
<?php } ?>       

<?php function sidebar($hal) {
    $user_id = $_SESSION['user_id'];
    $data_user = query("SELECT * FROM user JOIN usertype USING(usertype_id) WHERE user_id='$user_id'");
?>
<div id="sidebar" class="nav-collapse collapse">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="sidebar-toggler hidden-phone"></div>
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
    <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
                    <input type="text" class="search-query" placeholder="Search" />
            </form>
    </div>
    <!-- END RESPONSIVE QUICK SEARCH FORM -->
    <!-- BEGIN SIDEBAR MENU -->   
			
    <?php if($data_user['usertype_id'] == superAdmin_id){ ?>
        <ul>
            <li <?php if($hal=='home') { echo ' class="active start"'; }else{ echo 'class="start"'; }  ?> >
                <a href="<?php echo baseUrl(); ?>home.php">
                    <i class="icon-home"></i> 
                    <span class="title">Home</span>
                    </a>
            </li>
            <li <?php if($hal=='user') { echo ' class="active "'; }else{ echo '';  } ?> >
                <a href="<?php echo baseUrl(); ?>user.php">
                <span class="title">User</span>
                </a>
            </li>
            <li <?php if($hal=='master') { echo ' class="active "'; }else{ echo '';  } ?> >
                <a href="<?php echo baseUrl(); ?>master.php">
                <span class="title">Master</span>
                </a>
            </li>
            <li <?php if($hal=='transaksi') { echo ' class="active "'; }else{ echo '';  } ?> >
                <a href="<?php echo baseUrl(); ?>transaksi.php">
                <span class="title">Transaksi</span>
                </a>
            </li>
        </ul>
            
<!------------------------------------------------------------------------------->            

    <?php }else if($data_user['nama_kat_user'] == 'Operator'){ ?>

    <?php } ?>
            
<!-- END SIDEBAR MENU -->
</div>
<?php } ?>



<?php function footer() { ?>
    <div id="footer">
        <?php
        $nama_profile = query("SELECT * FROM profile WHERE profile_status=1");
        $tahun = getTanggal('Y');
        echo "$nama_profile[profile_nama] - $tahun ";
        ?>
        <div class="span pull-right">
                <span class="go-top"><i class="icon-arrow-up"></i></span>
        </div>
    </div>
<?php } ?>
