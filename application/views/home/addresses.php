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
        <h2>My Address</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tbody>

              <tr>
                <td><strong>Address</strong></td>
                <td><strong><?php echo $mem_address->mem_address;?><strong></td>
                </tr>

                <tr>
                  <td><strong>Province</strong></td>
                  <td><strong><?php echo $mem_address->mem_province;?><strong></td>
                </tr>

                <tr>
                  <td><strong>Zip</strong></td>
                  <td><strong><?php echo $mem_address->mem_postcode;?><strong></td>
                </tr>


                </tbody>
              </table>

              <div>
                <a href="#" class="btn btn-lg" style="width:200px;"></i>
                  <span>Edit</span></a>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</main>
