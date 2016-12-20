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
        <!-- <div id="infoMessage"><?php echo $message;?></div> -->
        <?php $att = array('class' => 'form-horizontal');
        echo form_open_multipart('admin/insert', $att);
        ?>

        <div class="box-header with-border">
          <h3 class="box-title">Setting Admin</h3>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Image Upload *</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="pic" name="userfile">
              <!-- <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span> -->
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">First Name *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="fname" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Last Name *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="lname" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Email *</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Password *</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Confirm Password *</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="confpass" value="">
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

                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $num = 1;
                foreach($result as $res): ?>
                <tr>
                  <td><?php echo $num++;?></td>
                  <td><?php echo $res->admin_email;?></td>
                  <td><?php echo $res->admin_fname ." ". $res->admin_lname;?></td>

                  <td>
                    <a class="btn btn-warning" href="<?php echo site_url("admin/edit_user/" .$res->admin_id); ?>">Edit</a>
                    <?php echo form_open("admin/delete");?>
                    <input type="hidden" name="id" value="<?php echo $res->admin_id;?>">
                    <input type="hidden" name="path" value="<?php echo $res->admin_picpath;?>">
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
