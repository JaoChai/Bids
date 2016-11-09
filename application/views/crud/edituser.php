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
           <div id="infoMessage"><?php echo $message;?></div>
           <?php $att = array('class' => 'form-horizontal');
           echo form_open_multipart(uri_string(), $att);
           ?>
           <div class="box-header with-border">
             <h3 class="box-title">Setting WebSite</h3>
           </div>
           <div class="box-body">

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">First Name *</label>
               <div class="col-sm-10">
                 <?php echo form_input($first_name);?>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">First Name *</label>
               <div class="col-sm-10">
                 <?php echo form_input($first_name);?>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Last Name *</label>
               <div class="col-sm-10">
                 <?php echo form_input($last_name);?>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Password *</label>
               <div class="col-sm-10">
                 <?php echo form_input($password);?>
                 <p><strong>(if changing password)</strong></p>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Confirm Password *</label>
               <div class="col-sm-10">
                 <?php echo form_input($password_confirm);?>
                 <p><strong>(if changing password)</strong></p>
               </div>
             </div>

           </div>



      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Submit</button>
      </div>

<?php echo form_close();?>
      </div>
    </div>
  </section>
</div>
