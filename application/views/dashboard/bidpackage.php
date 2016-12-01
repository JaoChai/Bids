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
        echo form_open('package/insert', $att);
        ?>
        <div class="box box-info">
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label>Bid:</label>
                <input type="text" class="form-control" id="bid_package" name="bid_package">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Cost:</label>
                <input type="text" class="form-control" id="package_cost" name="package_cost">
              </div>

            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>

            <br/>

            <div class="col-md-12">

              <div class="box">

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Bid</th>
                        <th>Cost</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $num = 1;
                      foreach($result as $res): ?>
                      <tr>
                        <td><?php echo $num++;?></td>
                        <td><?php echo $res->package_bid;?></td>
                        <td><?php echo $res->package_cost;?></td>
                        <td>
                          <a class="btn btn-warning" href="<?php echo site_url("package/update/" .$res->package_id); ?>">Edit</a>
                          <a class="btn btn-danger" href="<?php echo site_url("package/delete/" .$res->package_id); ?>">Delete</a>
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
