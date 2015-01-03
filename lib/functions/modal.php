<?php
function modalUpdate($id,$modalheader){ ?>
    <div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel1"><?php echo $modalheader; ?></h3>
            </div>
            <div class="modal-body">
                    <p>Body goes here...</p>
            </div>
            <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save</button>
            </div>
    </div>

<?php }?>