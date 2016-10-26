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
         echo form_open('setting/update', $att);
         ?>

           <div class="box-header with-border">
             <h3 class="box-title">Seting WebSite</h3>
           </div>
           <div class="box-body">

            <!-- Insert Here!-->

             <div class="form-group">
               <label for="" class="col-sm-2 control-label">Site Url *</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="siteurl" name="siteurl" value="">
               </div>
             </div>


           </div>

           <div class="box-footer">
             <button type="submit" class="btn btn-info pull-right">Submit</button>
           </div>
           <!-- /.box-footer -->
         <?php echo form_close();?>

         </form>
       </div>

  </section>

</div>
