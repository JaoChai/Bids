<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Transaction Bid
    </h1>
  </section>

  <section class="content">

    <div class="col-md-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Transaction Bid</h3>
        </div>

        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>User Name</th>
                <th>Bank</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Package Bid</th>
                <th>Other</th>
              </tr>
            </thead>
            <tbody>
              <?php $num = 1;
              foreach($result as $res): ?>
              <tr>
                <td><?php echo $num++;?></td>
                <td><?php echo $res->tb_username;?></td>
                <td><?php echo $res->tb_bank;?></td>
                <td><?php echo $res->tb_amount;?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($res->tb_date));?></td>
                <td><?php echo $res->package_bid;?></td>
                <td><?php echo $res->tb_other;?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</section>
</div>
