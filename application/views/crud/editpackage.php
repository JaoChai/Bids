<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Setting Bid Package
    </h1>
  </section>

   <section class="content">

     <section class="content">

       <div class="col-md-12">
         <?php $att = array('class' => 'form-horizontal');
         echo form_open('package/update', $att);
         ?>
           <div class="box box-info">
               <div class="box-body">
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="hidden" name="id" value="<?php echo $res->package_id; ?>">
                     <input name="redirect" type="hidden" value="<?= $this->uri->uri_string() ?>" />
                     <label>Bid:</label>
                      <input type="text" class="form-control" id="bid_package" name="bid_package" value="<?php echo $res->package_bid;?>">
                   </div>
                 </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label>Cost:</label>
                          <input type="text" class="form-control" id="package_cost" name="package_cost" value="<?php echo $res->package_cost;?>">
                    </div>

               </div>

               <div class="box-footer">
                 <button type="submit" class="btn btn-info pull-right">Submit</button>
               </div>



  </section>

</div>
