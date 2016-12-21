
<div class="block">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="/"  title="Back to the frontpage"><i class="icon icon-home"></i></a></li>
			<li>


				/
				<span>Account</span>



			</li>

		</ul>
	</div>
</div>




<div class="block boxed">
	<div class="container">
		<div class="note form-success" id="ResetSuccess" style="display:none;">
			We&#39;ve sent you an email with a link to update your password.<br /><br />
		</div>
		<div class="row row-eq-height">


			<div class="col-sm-6">
				<div class="form-card">
					<h4>New Customers</h4>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<div><a class="btn btn-lg" style="width:300px;" href="<?php echo site_url('home/regis');?>"><i class="icon icon-user"></i><span>Create account</span></a></div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-card">

					<?php echo form_open('home/login'); ?>
					<h4>Login</h4>
					<p>If you have an account with us, please log in.</p>
					<div class="errors"><ul><li><?php echo $this->session->flashdata('error_mess');?></li></ul></div>
					<?php if($this->session->flashdata('js')=="1"){ ?>
						<script>
						swal({
            title: "แสดงความยินดีด้วย",
            text: "คุณยืนยันอีเมล์สำเร็จแล้ว กรุณาล็อคอิน",
            type: "success"
      			});
						</script>
						<?php }else if($this->session->flashdata('js')=="2"){ ?>
							<script>
							swal({
	            title: "ยืนยังไม่สำเร็จ",
	            text: "กรุณาลองใหม่อีกครั้ง",
	            type: "error"
	      			});
							</script>
						<?php } ?>
					<label>Email<span class="required">*</span></label>
					<input class="form-control input-lg" type="text" name="email" id="CustomerEmail" placeholder="Email/Username" autocorrect="off" autocapitalize="off" autofocus>

					<label>Password<span class="required">*</span></label>

					<input  class="form-control input-lg" type="password" value="" name="password" id="CustomerPassword" placeholder="Password" >
					<button class="btn" type="submit">Sign In</button>

					<!-- <div class="back"><a href="#" onclick="showRecoverPasswordForm();return false;">Forgot your password?</a></div> -->
					<?php echo form_close(); ?>
					<!--
					<div id="RecoverPasswordForm" style="display: none;">

					<h4 class="section-header__title">Reset your password</h4>
					<p>We will send you an email to reset your password.</p>


					<form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" value="recover_customer_password" name="form_type" /><input type="hidden" name="utf8" value="✓" />






					<label>Email</label>
					<input class="form-control input-lg" type="email" value="" name="email" id="RecoverEmail" placeholder="Email" autocorrect="off" autocapitalize="off">

					<p>
					<input type="submit" class="btn btn-lg" value="Submit">
				</p>
				<a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>
			</form>

		</div> -->




	</div>
</div>
</div>
</div>
</div>

<script>
/*
Show/hide the recover password form when requested.
*/
function showRecoverPasswordForm() {
	$('#RecoverPasswordForm').show();
	$('#customer_login_main').hide();
}

function hideRecoverPasswordForm() {
	$('#RecoverPasswordForm').hide();
	$('#customer_login_main').show();
}

// Allow deep linking to the recover password form
if (window.location.hash == '#recover') { showRecoverPasswordForm() }

// reset_success is only true when the reset form is

</script>

</main>
