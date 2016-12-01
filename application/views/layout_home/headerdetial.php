<div id="loader-wrapper">
  <div class="cube-wrapper">
    <div class="cube-folding">
      <span class="leaf1"></span>
      <span class="leaf2"></span>
      <span class="leaf3"></span>
      <span class="leaf4"></span>
    </div>
  </div>
</div>
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
            <div class="header-link dropdown-link header-account">

              <a><i class="icon icon-user"></i></a>
              <div class="dropdown-container right">
                <form method="post" action="https://seikostore-default.myshopify.com/account/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type" /><input type="hidden" name="utf8" value="✓" />
                  <div class="title">Registered</div>
                  <div class="top-text">If you have an account with us, please log in.</div>
                  <!-- form -->
                  <input type="email" class="form-control" name="customer[email]" placeholder="Email*">
                  <input type="password" class="form-control" name="customer[password]" placeholder="Password*">
                  <button type="submit" class="btn">Sign In</button>
                  <!-- /form -->
                  <div class="title">OR</div>
                  <div class="bottom-text"><a href="#" id="customer_register_link">Create account</a></div>
                </form>
              </div>
            </div>
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
            <img alt="BidCups" src="<?php echo base_url('uploads/icon/'. $result->general_logo); ?>">
          </div>


            <!-- /Logo -->
            <?php $this->load->view('layout_home/mobilemenu'); ?>

            <?php $this->load->view('layout_home/listmenu'); ?>

          </div>
        </div>
      </header>

      <main class="page-main">
