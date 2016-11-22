
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Open Auction
    </h1>
  </section>

   <section class="content">

     <div class="col-md-12">
       <div class="box box-info">
         <?php $att = array('class' => 'form-horizontal');
         echo form_open_multipart('auction/do_update', $att);
         ?>

           <div class="box-header with-border">
             <h3 class="box-title">Seting WebSite</h3>
           </div>
           <div class="box-body">

            <!-- Insert Here!-->
            <input type="hidden" name="id" value="<?php echo $data->auc_id;?>">
            <input type="hidden" name="img" value="<?php echo $data->auc_pic;?>">
             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Category :</label>
               <div class="col-sm-10">
                 <select class="form-control" name="cate">
             <option value="option">Choose Category</option>
             <?php foreach($getcate as $rs): ?>
               <?php if($rs->cate_id == $data->auc_cate_id){ ?>
               <option value="<?php echo $rs->cate_id; ?>" selected><?php echo $rs->cate_name; ?></option>
             <?php }else{ ?>
               <option value="<?php echo $rs->cate_id; ?>"><?php echo $rs->cate_name; ?></option>
              <?php } ?>
             <?php endforeach; ?>
           </select>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Item Title :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="item_title" name="item_title" value="<?php echo $data->auc_item_title;?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Description :</label>
               <div class="col-sm-10">
                 <!-- Ckeditor !-->
                     <textarea id="cke_editor1" name="item_des" rows="10" cols="80">
                       <?php echo $data->auc_item_des;?>
                     </textarea>
                  <!-- End Ckeditor !-->
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Price :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="price" name="price" value="<?php echo $data->auc_price;?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Picture Upload :</label>
               <div class="col-sm-10">
                 <input type="file" class="form-control" id="pic" name="userfile">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Auction Start :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="auc_start" name="auc_start" value="<?php echo $data->auc_start;?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Bids Increment :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="bids_inc" name="bids_inc" value="<?php echo $data->auc_bids_inc;?>">
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
</div>
