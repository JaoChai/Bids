<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Review Menu
    </h1>
  </section>

   <section class="content">

     <div class="col-md-12">
         <!-- Horizontal Form -->
         <div class="box box-info">
           <?php $att = array('class' => 'form-horizontal');
           echo form_open_multipart('review/do_update', $att);
           ?>

             <div class="box-header with-border">
               <h3 class="box-title">Review Menu</h3>
             </div>
             <div class="box-body">

               <input type="hidden" name="id" value="<?php echo $res->review_id;?>">
               <input type="hidden" name="img" value="<?php echo $res->review_newimg;?>">
               <div class="form-group">
                 <label for="" class="col-sm-2 control-label">Review Title *</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="review_title" name="review_title" value="<?php echo $res->review_title;?>">
                 </div>
               </div>

               <div class="form-group">
                   <label for="" class="col-sm-2 control-label">Upload Image *</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="userfile">
                    <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    <img src="<?php echo base_url('uploads/review/'. $res->review_newimg); ?>" width="81" height="78">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Review Name *</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="review_name" name="review_name" value="<?php echo $res->review_name;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Review Pbid *</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="review_pbid" name="review_pbid" value="<?php echo $res->review_pbid;?>">
                  </div>
                </div>

                 <div class="form-group">
                     <label for="" class="col-sm-2 control-label">Description *</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" name="des"><?php echo $res->review_description;?></textarea>
                    </div>
                  </div>


          </div>

             <div class="box-footer">
               <button type="submit" class="btn btn-info pull-right">Submit</button>
             </div>
             <!-- /.box-footer -->
           <?php echo form_close();?>
         </div>


  </section>

</div>
