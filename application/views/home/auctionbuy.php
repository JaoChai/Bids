<div class="block">
  <div class="container">

  </div>
</div>
<br/>
<div class="block">
  <div class="container">
    <div class="title center">
      <h1>My Account</h1>
    </div>
  </div>
</div>


<div class="grid">
  <div class="form-card">
    <?php $this->load->view('home/profilemenu'); ?>
    <div class="col-md-9">
      <div>
        <h2>โปรดเลือก BidPack ที่คุณต้องการซื้อ</h2>
        <?php echo form_open('home/viewbuypackage');?>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Package</th>
                <th>Bid</th>
                <th>Bid Cost</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($package as $row): ?>
              <tr>
                <td><strong><input type="radio" name="package" id="rule" checked value="<?php echo $row->package_id;?>"></strong></td>
                <td><strong><?php echo $row->package_bid;?></strong></td>
                <td><strong>฿<?php echo $row->package_cost;?></strong></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <button type="submit" id="btn_submit" class="btn btn-info">Submit</button>
        </div>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</main>
