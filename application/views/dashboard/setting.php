<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Setting WebSite
    </h1>
  </section>

   <section class="content">

     <div class="col-md-12">
         <!-- Horizontal Form -->
         <div class="box box-info">
           <?php $att = array('class' => 'form-horizontal');
           echo form_open_multipart('setting/update', $att);
           ?>

             <div class="box-header with-border">
               <h3 class="box-title">Setting WebSite</h3>
             </div>
             <div class="box-body">

               <div class="form-group">
                 <label for="" class="col-sm-2 control-label">Logo</label>
                 <div class="col-sm-10">
                  <input type="hidden" name="img" value="<?php echo $result->general_logo;?>">
                  <img src="<?php echo base_url('uploads/icon/'. $result->general_logo); ?>" width="81" height="78">
                  <input type="file" id="logo" name="userfile" value="<?php echo $result->general_logo;?>">
                  <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                 </div>
               </div>

               <div class="form-group">
                 <label for="" class="col-sm-2 control-label">Site Title *</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="site_title" name="site_title" value="<?php echo $result->general_site_title;?>">
                 </div>
               </div>

               <div class="form-group">
                   <label for="" class="col-sm-2 control-label">Meta Description *</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="meta_des"><?php echo $result->general_meta_des;?></textarea>
                  </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Meta Keyword *</label>
                   <div class="col-sm-10">
                     <textarea class="form-control" rows="3" name="meta_key"><?php echo $result->general_meta_key;?></textarea>
                   </div>
                 </div>

                 <div class="form-group">
                     <label for="" class="col-sm-2 control-label">Footer *</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" name="footer"><?php echo $result->general_footer;?></textarea>
                    </div>
                  </div>

            <div class="box-header with-border">
              <h3 class="box-title">Setting Address</h3>
            </div>
                  <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Address *</label>
                        <div class="col-sm-10">
                       <textarea class="form-control" rows="3" name="address"><?php echo $result->general_address;?></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Email *</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $result->general_email;?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Line *</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="line" name="line" value="<?php echo $result->general_line;?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Telephone *</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telephone" name="tel" value="<?php echo $result->general_tel;?>">
                    </div>
                  </div>

            <div class="box-header with-border">
             <h3 class="box-title">Setting Social</h3>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label"><i class="fa fa-facebook"></i></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="facebook" placeholder="Facebook" name="facebook" value="<?php echo $result->general_facebook;?>">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label"><i class="fa fa-twitter"></i></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="twitter" placeholder="Twitter" name="twitter" value="<?php echo $result->general_twitter;?>">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label"><i class="fa fa-youtube"></i></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="youtube" placeholder="Youtube" name="youtube" value="<?php echo $result->general_youtube;?>">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label"><i class="fa fa-google-plus"></i></label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="google" placeholder="Google Plus" name="google" value="<?php echo $result->general_google;?>">
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
