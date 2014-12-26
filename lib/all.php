<?php
	
	
	function page_header($page_title,$bc1,$bc1_link,$bc2,$bc2_link,$bc3) { ?>
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
                        <a href="home.php">Home</a>
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