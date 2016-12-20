<!-- <div id="loader-wrapper">
<div class="cube-wrapper">
<div class="cube-folding">
<span class="leaf1"></span>
<span class="leaf2"></span>
<span class="leaf3"></span>
<span class="leaf4"></span>
</div>
</div>
</div> -->
<!-- /Loader -->

<div id="wrapper">

  <div class="page-wrapper">

    <header class="page-header fullboxed variant-1 sticky  always">
      <div class="navbar">
        <div class="container">
          <div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a></div>
          <div class="header-link dropdown-link header-cart variant-2">

          </div>

          <div class="header-links">

            <div class="header-link header-select dropdown-link header-language">
              <!-- <a href="#"><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/usa.png?18321598552377106331" alt /></a> -->
              <ul class="dropdown-container">
                <li><a href="/"><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/usa.png?18321598552377106331" alt />English</a></li>
                <li><a href="/"><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/de.png?18321598552377106331" alt />German</a></li>
                <li><a href="/"><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/fr.png?18321598552377106331" alt />French</a></li>
              </ul>
            </div>


            <!-- /Header Currency -->

            <!-- Header Account -->
            <?php if($this->session->userdata('logged_in')){ ?>
              <div class="header-link dropdown-link header-account">
                <?php $session_data = $this->session->userdata('logged_in');?>
                <a href="<?php echo site_url('home/myaccount');?>"><?php echo $session_data['username'];?></a>
                <div class="dropdown-container right">
                  <a href="<?php echo site_url('home/logout');?>" class="btn">Logout</a>
                </div>
              </div>
              <div class="header-link dropdown-link header-account">

                <a>
                  <i class="fa fa-gavel fa-2x"></i>

                  <span class="badge" id="bid"></span>
                </a>

              </div>
              <?php }else{ ?>
                <div class="header-link dropdown-link header-account">

                  <a><i class="icon icon-user"></i></a>
                  <div class="dropdown-container right">
                    <div class="title">Registered</div>
                    <div class="top-text">If you have an account with us, please log in.</div>
                    <?php echo form_open('home/login'); ?>
                    <input type="email" class="form-control" name="email" placeholder="Email*">
                    <input type="password" class="form-control" name="password" placeholder="Password*">
                    <button type="submit" class="btn">Sign In</button>
                    <?php echo form_close(); ?>
                    <div class="title">OR</div>
                    <div class="bottom-text"><a href="<?php echo site_url('home/regis');?>" id="customer_register_link">Create account</a></div>
                  </div>
                </div>
                <?php } ?>

                <!-- /Header Account -->
              </div>
              <!-- /Header Links -->

              <div class="header-link header-search header-search">
                <div class="exp-search">
                  <form  action="/search">
                    <input name="q" class="exp-search-input " placeholder="Search here ..." type="text" value="">
                    <input class="exp-search-submit" type="submit" value="">
                    <span class="exp-icon-search"><i class="icon icon-magnify"></i></span>
                    <span class="exp-search-close"><i class="icon icon-close"></i></span>
                  </form>
                </div>
              </div>

              <!-- Logo -->

              <div class="header-logo">
                <a href="<?php echo base_url();?>"><img alt="BidCups" src="<?php echo base_url('uploads/icon/'. $result->general_logo); ?>"></a>
              </div>


              <!-- /Logo -->
              <?php $this->load->view('layout_home/mobilemenu'); ?>

              <?php $this->load->view('layout_home/listmenu'); ?>

            </div>
          </div>
        </header>
        <script>
        setInterval(function(){
      		$("#bid").load('<?php echo site_url('product/liftbid');?>', {mem_id: '<?php echo $liftbid->mem_id;?>'} );
      	},500);
        </script>
        <main class="page-main">
