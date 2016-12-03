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
        <div class="table-responsive">
          <table class="table table-bordered">
            <tbody>
              <?php $num = 1; ?>
              <?php foreach($package as $row): ?>
              <tr>
                <td><strong><?php echo $num++;?></strong></td>
                <td><strong><?php echo $row->package_bid;?></strong></td>
                <td><strong><?php echo $row->package_cost;?></strong></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>


</main>
