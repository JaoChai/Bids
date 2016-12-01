<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Admin BidCups</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.min.css">

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <b>Admin</b>BidCups
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Admin Please Login</p>
      <?php echo form_open('dashboard/ck_login');?>
        <div class="form-group has-feedback">
          <input type="username" class="form-control" placeholder="Email" name="email" id="identity">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <?php echo $this->session->flashdata('message');?>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close();?>

    </div>
    <!-- /.login-box-body -->
  </div>


</body>
</html>
