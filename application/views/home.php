
<div class="content_container">
    <div class="category-tab-main">
       <div class="category-tab-fix">

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
>>>>>>> origin/master

       </div>
    </div>

   <div class="bidnow_row">
     <div class="content_middlebg">
         <div class="leftside">
           <div class="index_bidnow_header_box">
              <div class="bidnow_middlebg">

                <div class="image"><img src="<?php echo base_url();?>assets/home/images/time-1.png" align="absmiddle" /> สินค้าพวกนี้กำลังจะสิ้นสุด Bid เลย</div>
                <!--<div class="image" style="float:right;"><span class="bidnow_more"><a class="orgbtn" href="buybids">เพิ่ม Bid</a></span></div>!-->
              </div>
           </div>

           <div class="clear"></div>

           <div style="margin-top: 10px; text-align: left;border: 1px solid #e00;border-radius: 4px; width: 94%;padding: 0 3%; background: #F9F9F9;">
           <!-- <p style="font-size: 18px;margin-top:10px;">ประกาศศศศ! แจ้งยุติหน้าการประมูลครับ</p>
           <p style="font-size: 18px;">ตั้งแต่วันที่ 20 ตุลาคม 2559 เป็นต้นไป Dinoza.com จะขอระงับการประมูลทุกสินค้า</p>
           <p style="color:orange;"><span class="end_popup">คลิกอ่านรายละเอียดเพิ่มเติม</span></p> -->
          </div>

        </div><!-- Endleftside !-->

         <div class="bidnow_content" id="content_container">
           <div class="bidnow_content_top_image"></div>
           <div class="bidnow_content_middle_image" id="content_container">
             <span class='pageloadermain'></span>
             <span class='pageloaderinner'><span class='pageloader'></span></span>


              <?php $this->load->view('layout_home/bidding'); ?>

             </div>

           </div>

           <div class="clear"></div>

           <div class="block"><a href="#"><img src="<?php echo base_url();?>assets/home/images/coupon.png" class="img-responsive"/></a></div>

           <div class="clear">&nbsp;</div>

        </div>

        <div class="rightside">
          <!-- Bidpack Start -->
          <div class="bidpack_main_box">
                   <div class="bidpack_detail_middlebg">
                     <div class="bidpack_header">
                       <div class="bidpack_header_middlebg">Bid Package</div>
                     </div>
                     <div class="bidpack_detail_box">
                       <div class="bidpack_detail_leftbg">&nbsp;</div>
                       <div class="bidpack_titlerow">
                         <div class="title_bidpack">Bidpack</div>
                         <div class="title_bidpackprice">ราคา</div>
                         <div class="title_bidpacksavings">ประหยัด</div>
                       </div>

     				            <div class="bidpack_detail_row_odd">
                         <!--<div class="bidpack_detail_arrow"></div>-->
                         <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=9">100&nbsp;Bids</a></div>
                         <div class="bidpack_detail_price_odd">500฿</div>
                         <div class="bidpack_detail_price_buy"><a href="buybids?pkg=9">Buy&raquo;</a></div>
                       </div>

     				              <div class="bidpack_detail_row_even">
                         <!--<div class="bidpack_detail_arrow"></div>-->
                         <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=10">200&nbsp;Bids</a></div>
                         <div class="bidpack_detail_price_odd">1000฿</div>
                         <div class="bidpack_detail_price_buy"><a href="buybids?pkg=10">Buy&raquo;</a></div>
                       </div>


     				                     <div class="bidpack_detail_row_odd">
                         <!--<div class="bidpack_detail_arrow"></div>-->
                         <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=11">500&nbsp;Bids</a></div>
                         <div class="bidpack_detail_price_odd">2500฿</div>
                         <div class="bidpack_detail_price_buy"><a href="buybids?pkg=11">Buy&raquo;</a></div>
                       </div>


     				                     <div class="bidpack_detail_row_even">
                         <!--<div class="bidpack_detail_arrow"></div>-->
                         <div class="bidpack_detail_bids_odd"><a href="buybids?pkg=12">1000&nbsp;Bids</a></div>
                         <div class="bidpack_detail_price_odd">5000฿</div>
                         <div class="bidpack_detail_price_buy"><a href="buybids?pkg=12">Buy&raquo;</a></div>
                       </div>

     				           <div class="bidpack_detail_rightbg">&nbsp;</div>
                     </div>
                   </div>
                   <!--<div class="bidpack_detail_bottombg">&nbsp;</div>-->
                 </div>

                 <div class="latestwin_detail_middlebg" style="margin-top:30px; border:none;"><a href="invite">
                  <img style="border: 1px solid;border-color: #e9eaed #dfe0e4 #d0d1d5;border-radius: 4px;" src="<?php echo base_url();?>assets/home/images/refer_friends-02.png" /></a>
                </div>

                <div class="auctiontype_main_box">
                  <div class="auctiontype_header">
                     <div class="auctiontype_header_middlebg">Auction Types</div>
                  </div>
                    <div class="auctiontype_detail_box" style="min-height: 255px;">
                      <div class="auctiontype_detail_row" >
                              <div class="auctiontype_detail_icon"><img src="<?php echo base_url();?>assets/home/images/buynow_2.png" title="สามารถซื้อสินค้าได้" /></div>
                              <div class="auctiontype_detail_title">สามารถซื้อสินค้าได้</div>
                            </div>

                            <div class="auctiontype_detail_row" >
                              <div class="auctiontype_detail_icon"><img src="<?php echo base_url();?>assets/home/images/beginner_2.png" title="Beginner Only" /></div>
                              <div class="auctiontype_detail_title">Beginner Only</div>
                            </div>

                            <div class="auctiontype_detail_row" >
                              <div class="auctiontype_detail_icon"><img src="<?php echo base_url();?>assets/home/images/icon-clickbattle-sml.png" title="Click Battle" /></div>
                              <div class="auctiontype_detail_title">Click Battle</div>
                            </div>

  						             <div class="auctiontype_detail_row" >
                              <div class="auctiontype_detail_icon"><img src="<?php echo base_url();?>assets/home/images/night_2.png" title="ประมูล 24 ชั่วโมง" /></div>
                              <div class="auctiontype_detail_title">ประมูล 24 ชั่วโมง</div>
                            </div>

                        <div class="auctiontype_detail_row" >
                              <div class="auctiontype_detail_icon">&nbsp;</div>
                              <div class="auctiontype_detail_title"><span class="more_popup">ดูรายละเอียด<span></div>
                         </div>

                         <div class="bidpack_detail_rightbg">&nbsp;</div>
                    </div>
                        <div class="bidpack_detail_bottombg">&nbsp;</div>
                </div>

          </div>


          <div class="banner-bottom-main">
            <div class="featurebadge">

              <img src="<?php echo base_url();?>assets/home/images/icon-delivery-02.png"  class="img-responsive" border="0" title="https://www.bidcups.com">
              <p>เราแพ็คด้วยใจ จัดส่งถึงมือ </p> ภายใน 3 วันทำการ

            </div>

            <div class="featurebadge">

              <img src="<?php echo base_url();?>assets/home/images/icon-secure-02.png"  class="img-responsive" border="0">

              <p>ชำระเงินผ่านระบบที่มีความปลอดภัยมาตรฐาน SSL (มาตรฐานเดียวกับสถาบันทางการเงิน) </p>

            </div>

           <div class="featurebadge">

             <img src="<?php echo base_url();?>assets/home/images/icon-warranty-02.png"  class="img-responsive" border="0">

             <p>รับประกันสินค้าทุกชิ้น มีปัญหาเปลี่ยนได้ทันทีภายใน 7 วัน</p>

          </div>

          <div class="featurebadge">

            <img src="<?php echo base_url();?>assets/home/images/icon-support-02.png"  class="img-responsive" border="0">
            <p>มีทีมงานดูแลตลอด 7 วัน หากมีปัญหา ติดต่อเราทันที</p>

          </div>

          </div>
          <!-- End Service !-->
        </div>

        <div id="banner-sub" class="banner_main_box" style="margin-top: 15px; margin-bottom: 15px; min-height: 0;">
      	<div class="banner" style="min-height: 0;">
  		      <a href='dpoints?ref=homebnr'><img src="<?php echo base_url();?>assets/home/images/5-D-points-1040x218-3.jpg" style="width: 100%;" /></a>
  	    </div>
  	   </div>

      <div class="clearfix"></div>
      <aside id="paymentmethods">
        <div class="container">
          <div class="row">
         <div class="col-md-12">
             <ul>
                 <li>
                     <img src="<?php echo base_url();?>assets/home/images/01.png"  class="img-responsive">
                 </li>
                 <li>
            </div>
          </div>
        </div>

     </div>
