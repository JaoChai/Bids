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
                <th>User Name</th>
                <th>Email</th>
                <th>Date Join</th>
                <th>Bid</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $num = 1;
              foreach($result as $res): ?>
              <tr>
                <td><?php echo $num++;?></td>
                <td><?php echo $res->mem_username;?></td>
                <td><?php echo $res->mem_email;?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($res->mem_date));?></td>
                <td><?php echo $res->mem_bid;?></td>
                <td>
                  <a class="btn btn-warning" href="<?php echo site_url("members/addbid/" .$res->mem_id); ?>">Add Bid</a>
                  <a class="btn btn-danger" href="<?php echo site_url("auction/delete/" .$res->mem_id); ?>">Delete</a>
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
