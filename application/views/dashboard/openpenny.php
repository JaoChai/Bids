
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
         echo form_open_multipart('auction/insert', $att);
         ?>

           <div class="box-header with-border">
             <h3 class="box-title">Setting WebSite</h3>
           </div>
           <div class="box-body">

            <!-- Insert Here!-->

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Category :</label>
               <div class="col-sm-10">
                 <select class="form-control" name="cate">
             <option value="option">Choose Category</option>
             <?php foreach($getcate as $rs): ?>
               <option value="<?php echo $rs->cate_id; ?>"><?php echo $rs->cate_name; ?></option>
             <?php endforeach; ?>
           </select>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Item Title :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="item_title" name="item_title" value="<?php echo set_value('item_title');?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Description :</label>
               <div class="col-sm-10">
                 <!-- Ckeditor !-->
                     <textarea id="cke_editor1" name="item_des" rows="10" cols="80">
                       <?php echo set_value('item_des');?>
                     </textarea>
                  <!-- End Ckeditor !-->
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Price :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="price" name="price" value="<?php echo set_value('price');?>">
                 <?php echo form_error('price'); ?>
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
                 <input type="text" class="form-control" id="auc_start" name="auc_start" value="<?php echo set_value('auc_start');?>">
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Bids Increment :</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="bids_inc" name="bids_inc" value="<?php echo set_value('bids_inc');?>">
                 <?php echo form_error('bids_inc'); ?>
               </div>
             </div>

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Start Bid :</label>
               <div class="col-sm-10">
                 <div class='input-group date' id='end_date'>
                    <input type='text' class="form-control" name="end_date" value="<?php echo set_value('end_date');?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
               </div>
             </div>

           </div>

           <div class="box-footer">
             <button type="submit" class="btn btn-info pull-right">Submit</button>
           </div>
           <!-- /.box-footer -->
         <?php echo form_close();?>
         <script type="text/javascript">
        $(function(){

          $("#end_date").datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss'
          });
      });
        </script>
       </div>

  </section>

</div>
</div>
