<!DOCTYPE html>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/owl.carousel.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/bootstrap-select.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/owl.theme.default.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.teal.flat.css">

  </head>

  <body>

    <!-- Top Header -->
     <div class="top-header">
       <div class="container">
         <div class="row">
           <div class="col-xs-12">
             <ul class="list-inline pull-left">
               <li class="hidden-xs"><a href="#"><i class="fa fa-phone"></i> +123-456-789</a></li>
               <li class="hidden-xs"><a href="mailto:cs@domain.tld"><i class="fa fa-envelope"></i> cs@domain.tld</a></li>
             </ul>
             <ul class="list-inline pull-right">
               <li class="hidden-xs"><a href="wishlist.html"><i class="fa fa-heart"></i> Wishlist (3)</a></li>
               <li class="hidden-xs"><a href="compare.html"><i class="fa fa-align-left"></i> Compare (4)</a></li>
               <li>
                 <div class="dropdown">
                   <button class="btn dropdown-toggle" type="button" id="dropdownLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     Login <span class="caret"></span>
                   </button>
                   <div class="dropdown-menu dropdown-menu-right dropdown-menu-login" aria-labelledby="dropdownLogin" data-dropdown-in="zoomIn" data-dropdown-out="fadeOut">
                     <form>
                       <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" class="form-control" id="username" placeholder="Username">
                       </div>
                       <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" id="password" placeholder="Password">
                       </div>
                       <div class="checkbox">
                         <label>
                           <input type="checkbox"><span> Remember me</span>
                         </label>
                       </div>
                       <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-long-arrow-right"></i> Login</button>
                       <a class="btn btn-default btn-sm pull-right" href="register.html" role="button">I Want to Register</a>
                     </form>
                   </div>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <!-- End Top Header -->

     <!-- Middle Header -->
    <div class="middle-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3 logo">
            <a href="index.html"><img alt="Logo" src="<?php echo base_url();?>assets/home/images/logo-bid.png" class="img-responsive" /></a>
          </div>
          <div class="col-sm-8 col-md-6 search-box m-t-2">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Search here..." placeholder="Search here...">
               <div class="input-group-btn">
                <button type="button" class="btn btn-default btn-search"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Middle Header -->

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default shadow-navbar" role="navigation">
      <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
          <div class="collapse navbar-collapse" id="navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- End Navigation Bar -->

    <!-- Full Slider -->
   <div class="container-fluid">
     <div class="row">
       <div class="slider home-slider">
         <div class="item">
           <a href="products.html"><img src="http://www.grehon.com/mimity/v2.1/images/demo/slide-3-full.jpg" alt="Slider"></a>
         </div>
       </div>
     </div>
   </div>

        <!-- Main Content -->
    <div class="container m-t-2">
      <div class="row">

        <div class ="col-sm-6">
            <a href="">
              <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/banner-howtobid-th-01.png">
            </a>
        </div>

        <div class ="col-sm-6">
          <a href="">
            <img class="img-responsive" src="<?php echo base_url();?>assets/home/images/banner-winners-th-01.png">
          </a>
        </div>

      <div class="col-md-12">
        <div class="title"><span>Product Auction</span></div>
          <!-- Loop Product !-->
          <div class="col-sm-4 col-md-3 box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">

                <a href="#">
                  <img alt="Product" src="http://www.grehon.com/mimity/v2.1/images/demo/polo1.jpg">
                </a>

                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>

              </div>

              <h4><a href="detail.html">IncultGeo Print Polo T-Shirt</a></h4>

              <div class="price">
               <div>$15.00</div>
             </div>

            </div>

          </div>

          <div class="col-sm-4 col-md-3 box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">

                <a href="#">
                  <img alt="Product" src="http://www.grehon.com/mimity/v2.1/images/demo/polo1.jpg">
                </a>

                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>

              </div>

              <h4><a href="detail.html">IncultGeo Print Polo T-Shirt</a></h4>

              <div class="price">
               <div>$15.00</div>
             </div>
            </div>
          </div>

          <div class="col-sm-4 col-md-3 box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">

                <a href="#">
                  <img alt="Product" src="http://www.grehon.com/mimity/v2.1/images/demo/polo1.jpg">
                </a>

                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>

              </div>

              <h4><a href="detail.html">IncultGeo Print Polo T-Shirt</a></h4>

              <div class="price">
               <div>$15.00</div>
             </div>
            </div>
          </div>

          <div class="col-sm-4 col-md-3 box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">

                <a href="#">
                  <img alt="Product" src="http://www.grehon.com/mimity/v2.1/images/demo/polo1.jpg">
                </a>

                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>

              </div>

              <h4><a href="detail.html">IncultGeo Print Polo T-Shirt</a></h4>

              <div class="price">
               <div>$15.00</div>
             </div>
            </div>
          </div>
          <!-- End Loop Product !-->
      </div>

        <div class="block col-md-2 col-md-offset-1">
            <img alt="Product" src="<?php echo base_url();?>assets/home/images/banner-register-th-04.png">
        </div>
    </div>

    <div class ="clear"></div>
      <!-- Brand & Clients -->
           <div class="col-sm-10">
             <div class="brand-slider">
                <div class="brand">
                  <img src="http://www.grehon.com/mimity/v2.1/images/demo/brand1.png" alt="">
                </div>
              </div>
            </div>
          </div>


    <!-- Brand !-->


  <!-- Footer -->
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>About Us</span></div>
              <ul>
                <li>
                  Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremmagna aliqua. Ut enim ad minim... <a href="#">Read More</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>Information</span></div>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> FAQ</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Policy Privacy</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Terms and Conditions</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Shipping Methods</a></li>
              </ul>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>Categories</span></div>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Cras justo odio</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Dapibus ac facilisis in</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Morbi leo risus</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Porta ac consectetur ac</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>Newsletter</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Email Address">
                <span class="input-group-btn">
                  <button class="btn btn-default subscribe-button" type="button">Subscribe</button>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>Our Store</span></div>
              <ul class="footer-icon">
                <li><span><i class="fa fa-map-marker"></i></span> 212 Lorem Ipsum. Dolor Sit, Amet</li>
                <li><span><i class="fa fa-phone"></i></span> +123-456-789</li>
                <li><span><i class="fa fa-envelope"></i></span> <a href="mailto:cs@domain.tld">cs@domain.tld</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>Follow Us</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum</p>
              <ul class="follow-us">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>Payment Method</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
              <img src="images/payment-1.png" alt="Payment-1">
              <img src="images/payment-2.png" alt="Payment-2">
              <img src="images/payment-3.png" alt="Payment-3">
              <img src="images/payment-4.png" alt="Payment-4">
              <img src="images/payment-5.png" alt="Payment-5">
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="title-footer"><span>My Account</span></div>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Orders</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Vouchers</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Points</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center copyright">
          Copyright &copy; 2016 Mimity All right reserved
        </div>
      </div>
      <!-- End Footer -->




  <script src="<?php echo base_url();?>assets/home/js/jquery-1.11.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/home/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/home/js/owl.carousel.js"></script>
  <script src="<?php echo base_url();?>assets/home/js/bootstrap-select.js"></script>


</body>
</html>
