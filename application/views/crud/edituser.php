<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Setting Admin
    </h1>
  </section>
   <section class="content">
     <div class="col-md-12">
         <!-- Horizontal Form -->
         <div class="box box-info">
           <?php $att = array('class' => 'form-horizontal');
           echo form_open_multipart('admin/do_update', $att);
           ?>
           <div class="box-header with-border">
             <h3 class="box-title">Setting WebSite</h3>
           </div>
           <div class="box-body">
             <input type="hidden" name="id" value="<?php echo $data->admin_id;?>">
             <input type="hidden" name="img" value="<?php echo $data->admin_newpic;?>">
             <div class="form-group">
               <div class="col-sm-10 col-sm-offset-2">
                 <img alt="Your uploaded image" src="<?php echo base_url('uploads/'. $data->admin_newpic); ?>" width="80" height="80">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Image Upload :</label>
               <div class="col-sm-10">
                 <input type="file" class="form-control" id="pic" name="userfile">
               </div>
             </div>


             <div class="form-group">
               <label for="" class="col-sm-2 control-label">First Name *</label>
               <div class="col-sm-10">
                 <input type="text" name="fname" class="form-control" value="<?php echo $data->admin_fname;?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Last Name *</label>
               <div class="col-sm-10">
                 <input type="text" name="lname" class="form-control" value="<?php echo $data->admin_lname;?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Email *</label>
               <div class="col-sm-10">
                 <input type="email" name="email" class="form-control" value="<?php echo $data->admin_email;?>">
               </div>
             </div>




           </div>


      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Submit</button>
      </div>

<?php echo form_close();?>
      </div>

  </section>
</div>
</div>
