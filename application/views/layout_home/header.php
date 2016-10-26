<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta property="og:keywords" content="">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700,800,400' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/main.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/screen.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/index.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/bs-style.css">

  </head>

  <body id="page-home" class="th loggedout">

    <img src="<?php echo base_url();?>assets/home/images/black_ribbon_bottom_left.png" class="black-ribbon stick-bottom stick-left"/>


    <div class="outer">
    <div class="wraper">
    <div class="header">
    <div id="preheader-new" class="hidden-xs">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
    <div class="pull-left">
      <div class="hdrbadge-new"><img src="<?php echo base_url();?>assets/home/images/icon-fair-sml.png">100% Fair Auctions</div>
      <div class="hdrbadge-new hidden-sm"><img src="<?php echo base_url();?>assets/home/images/icon-delivery-sml.png">3 Days Delivery*</div>
      <div class="hdrbadge-new"><img src="<?php echo base_url();?>assets/home/images/icon-warranty-sml.png">Product Warranty</div>
      <div class="hdrbadge-new hidden-sm"><img src="<?php echo base_url();?>assets/home/images/icon-support-sml.png">7 Days Customer Support</div>
    </div>
    </div>
    </div>
  </div>
<!-- End Header !-->

<div id="header-placeholder">
	      <div id="header" class="">
	          <div class="container">
	            <div class="row">
                <div class="col-sm-12">

                  <div id="logo" class="pull-left"><a href="/"><img src="<?php echo base_url();?>assets/home/images/logo.png" border="0" alt=""></a></div>
                  <div id="mobile-toggles" class="pull-right hidden-sm hidden-md hidden-lg text-right">
                   <span id="search-toggle"><i class="fa fa-search"></i></span>
                 </div>

                <div id="mobile-toggles" class="pull-right hidden-sm hidden-md hidden-lg text-right">
											<span class="livechat-toggle livechat-online" style="display: none;" onClick="Tawk_API.popup();"><i class="fa fa-comments-o"></i></span>
											<span class="livechat-toggle livechat-offline" onClick="location.href='/contact?src=offlinechat';"><i class="fa fa-comments-o"></i></span>
											<span class="login-toggle"><i class="fa fa-user"></i></span>
					  	    </div>

									<form class="form pull-left" role="form" action="shopcategory" method="get" onsubmit="return SearchShop();" accept-charset="UTF-8" id="search-form">
	                  <button type="button" class="panel-close btn btn-link visible-xs"><i class="fa fa-arrow-left"></i></button>
	                  <div class="input-group input-group-lg" id="searchbox">
	                    <input type="text" id="newsearchtxtdata" name="search" class="form-control" placeholder="ค้นหาสินค้าที่ต้องการ">
	                    <span class="input-group-btn">
	                      <button class="btn btn-orange" onClick="return SearchShop();"  type="button"><i class="fa fa-search fa-lg"></i></button>
	                    </span>
	                  </div>
	                  <div class="clearfix"></div>
	                </form>

                  <div id="loginarea2" class="pull-right hidden-xs">
								      <a href="/register" class="btn btn-orange btn-lg">สมัครเลย!</a>
						      </div>

                  <div id="loginarea" class="pull-right hidden-xs">
								          <a class="login-toggle btn btn-link btn-lg"><i class="fa fa-user"></i> <span class="">Login</span></a>
						      </div>

              </div>
            </div>
          </div>
</div>

      <div class="clearfix"></div>
