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
        <form>
          <div class="form-group">
            <label for="password1">Please enter your old password.</label>
              <input type="text" class="form-control" id="password1">
          </div>


          <div class="form-group">
            <label for="password2">Please enter your new password</label>
            <input type="text" class="form-control" id="password2">
          </div>

          <div class="form-group">
            <label for="password2">Please enter your new password again.</label>
            <input type="text" class="form-control" id="password2">
          </div>

          <button type="submit" class="btn">Save</button>
        </form>

      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>


</main>
