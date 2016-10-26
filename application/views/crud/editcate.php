<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Seting Category
    </h1>
  </section>

   <section class="content">

    <div class="col-md-12">
      <?php $att = array('class' => 'form-horizontal');
      echo form_open('category/update', $att);
      ?>
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <input type="hidden" name="id" value="<?php echo $res->cate_id; ?>">
             <input name="redirect" type="hidden" value="<?= $this->uri->uri_string() ?>" />
             <label>Name Category:</label>
              <input type="text" class="form-control" id="namecat" name="namecate" value="<?php echo $res->cate_name;?>">
           </div>

           <div class="form-group">
             <label>Page Meta Tag (Description):</label>
                <textarea class="form-control" rows="3" name="cate_meta_des"><?php echo $res->cate_meta_des;?></textarea>
           </div>

         </div>

         <div class="col-md-6">

           <div class="form-group">
             <label>Page Site Title:</label>
              <input type="text" class="form-control" id="namemenu" name="cate_title" value="<?php echo $res->cate_title;?>">
           </div>

           <div class="form-group">
             <label>Page Meta Tag (Keyword):</label>
               <textarea class="form-control" rows="3" name="cate_meta_key"><?php echo $res->cate_meta_key;?></textarea>
           </div>

         </div>

         <!-- Ckeditor !-->

             <textarea id="cke_editor1" name="cke_editor1" rows="10" cols="80">
               <?php echo $res->cate_description;?>
             </textarea>


          <!-- End Ckeditor !-->

       </div>

     </div>

     <div class="box-footer">
         <button type="submit" class="btn btn-info pull-right">Submit</button>
     </div>
     <?php echo form_close(); ?>

    </div>

  </section>
