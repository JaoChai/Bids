<div id="header-placeholder">
	      <div id="header" class="">
	          <div class="container">
	            <div class="row">
	              <div class="col-sm-12">
	                <div id="logo" class="pull-left"><a href="/"><img src="<?php echo base_url();?>assets/home/images/logo_whitetest.png" border="0" alt=""></a></div>
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
	                    <input type="text" id="newsearchtxtdata" name="search" class="form-control" placeholder="ค้นหาสินค้า">
	                    <span class="input-group-btn">
	                      <button class="btn btn-orange" onClick="return SearchShop();"  type="button"><i class="fa fa-search fa-lg"></i></button>
	                    </span>
	                  </div>
	                  <div class="clearfix"></div>
	                </form>

						<div id="loginarea2" class="pull-right hidden-xs">
								<a href="<?php echo site_url('home/regis');?>" class="btn btn-orange btn-lg">สมัครเลย!</a>
						</div>

						<div id="loginarea" class="pull-right hidden-xs">
								<a class="login-toggle btn btn-link btn-lg"><i class="fa fa-user"></i> <span class="">Login</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
