<?php
function widgetBegin($widgetTitleIcon=null,$widgetTitle=null,$idmodalconfig=null){ 
    ?>
    <div class="widget">
    <div class="widget-title">
        <h4><i class="<?php echo $widgetTitleIcon; ?>"></i> <?php echo $widgetTitle; ?></h4>
        <span class="tools">
        <a href="javascript:;" class="icon-chevron-down"></a>
        <a href="#<?php echo $idmodalconfig; ?>" data-toggle="modal" class="icon-wrench" title="Konfigurasi"></a>
        <a href="javascript:;" class="icon-refresh"></a>      
        <a href="javascript:;" class="icon-remove"></a>
        </span>
     </div>
    <div class="widget-body">
     <?php
}

function widgetEnd($widgetTitle=null){ 
    ?>
        </div></div>
    <?php
}

