<div class="content-wrapper">
  <section class="content-header">
    <h1>
      List Acution
    </h1>
  </section>

   <section class="content">

   <div class="col-md-12">

     <div class="box">
       <div class="box-header">
         <h3 class="box-title">List Menu</h3>
       </div>

       <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Item Name</th>
              <th>Description</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $num = 1;
          foreach($result as $res): ?>
          <tr>
            <td><?php echo $num++;?></td>
            <td><?php echo $res->auc_item_title;?></td>
            <td><?php echo $res->auc_item_des;?></td>
            <td><?php echo date('d-m-Y H:i:s', strtotime($res->auc_start_date));?></td>
            <td><?php echo date('d-m-Y H:i:s', strtotime($res->auc_end_date));?></td>
            <td><img alt="Your uploaded image" src="<?php echo base_url('uploads/'. $res->auc_pic); ?>" width="150" height="100"></td>
            <td>
              <a class="btn btn-warning" href="<?php echo site_url("auction/update/" .$res->auc_id); ?>">Edit</a>
              <?php echo form_open("auction/delete");?>
                      <input type="hidden" name="id" value="<?php echo $res->auc_id;?>">
                      <input type="hidden" name="path" value="<?php echo $res->auc_path;?>">
                      <input type="submit" class="btn btn-danger" value="Delete">
                      <?php echo form_close();?>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
      </div>
     </div>
    </div>


  </section>
  </div>
