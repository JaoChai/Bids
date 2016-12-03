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
        <h2>Auccount Detail</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tbody>

              <tr>
                <td><strong>Username</strong></td>
                <td><strong><?php echo $mem_detail->mem_username;?><strong></td>
                </tr>

                <tr>
                  <?php $gender = $mem_detail->mem_gender;
                  switch ($gender) {
                    case 'Male':
                    $gender = "ชาย";
                    break;
                    case 'Female':
                    $gender = "หญิง";
                    break;
                  }
                  ?>
                  <td><strong>Gender</strong></td>
                  <td><strong><?php echo $gender;?><strong></td>
                  </tr>

                  <tr>
                    <td><strong>Name</strong></td>
                    <td><strong><?php echo $mem_detail->mem_fname;?><strong></td>
                    </tr>


                    <tr>
                      <td><strong>Lname</strong></td>
                      <td><strong><?php echo $mem_detail->mem_lname;?><strong></td>
                      </tr>

                      <tr>
                        <td><strong>Birthday</strong></td>
                        <td><strong><?php echo $mem_detail->mem_birth_day. "/" . $mem_detail->mem_birth_month. "/" .$mem_detail->mem_birth_year;?><strong></td>
                        </tr>

                        <tr>
                          <td><strong>E-Mail</strong></td>
                          <td><strong><?php echo $mem_detail->mem_email;?><strong></td>
                          </tr>

                          <tr>
                            <td><strong>Phone</strong></td>
                            <td><strong><?php echo $mem_detail->mem_tel;?><strong></td>
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
