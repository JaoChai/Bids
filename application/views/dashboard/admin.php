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
      echo form_open_multipart('admin/create_user', $att);
      ?>

        <div class="box-header with-border">
          <h3 class="box-title">Setting WebSite</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Image Upload *</label>
            <div class="col-sm-10">
              <input type="file" name="userfile" class="form-control">
              <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
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

          <?php
          if($identity_column!=='email') {
              echo '<p>';
              echo lang('create_user_identity_label', 'identity');
              echo '<br />';
              echo form_error('identity');
              echo form_input($identity);
              echo '</p>';
          }
          ?>


           <div class="form-group">
               <label for="" class="col-sm-2 control-label">Email *</label>
              <div class="col-sm-10">
                <?php echo form_input($email);?>
              </div>
            </div>

             <div class="form-group">
                 <label for="" class="col-sm-2 control-label">Password *</label>
                <div class="col-sm-10">
                  <?php echo form_input($password);?>
                </div>
              </div>

              <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Confirm Password *</label>
                 <div class="col-sm-10">
                   <?php echo form_input($password_confirm);?>
                 </div>
               </div>

     </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->
      <?php echo form_close();?>

    </div>

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
               <th>User Name</th>
               <th>Name</th>
               <th>Email</th>
               <th>Action</th>
             </tr>
         </thead>
         <tbody>
           <?php $num = 1;
           foreach($users as $res): ?>
           <tr>
             <td><?php echo $num++;?></td>
             <td><?php echo $res->username;?></td>
             <td><?php echo $res->first_name ." ". $res->last_name;?></td>
             <td><?php echo $res->email;?></td>
             <td>
               <a class="btn btn-warning" href="<?php echo site_url("admin/edit_user/" .$res->id); ?>">Edit</a>
               <?php echo form_open("admin/delete");?>
                       <input type="hidden" name="id" value="<?php echo $res->id;?>">
                       <input type="hidden" name="path" value="<?php echo $res->img_path;?>">
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
    </div>
  </section>
</div>
