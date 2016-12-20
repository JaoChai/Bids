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
        <h2>Change Password</h2>
        <?php echo form_open('home/changepassword');?>
          <div class="form-group">
            <label for="password1">Please enter your old password.</label>
              <input type="password" class="form-control" id="password1" name="oldpassword">
          </div>


          <div class="form-group">
            <label for="password2">Please enter your new password</label>
            <input type="password" class="form-control" id="password2" name="password">
          </div>

          <div class="form-group">
            <label for="password2">Please enter your new password again.</label>
            <input type="password" class="form-control" id="password2" name="password2">
          </div>
          <?php echo $this->session->flashdata('alert');?>
          <button type="submit" class="btn">Save</button>
        <?php echo form_close();?>

      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>


</main>
