<div id="panel-overlay"></div>
     <nav class="navbar navbar-static-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle closed">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
         </div>
         <div id="navbar" class="left-panel">
           <button type="button" class="panel-close btn btn-link visible-xs">
             <span class="icon-bar bar-1"></span>
             <span class="icon-bar bar-2"></span>
           </button>
                 <ul class="nav navbar-nav">
             <li><a href="/">ประมูล</a></li>
             <li><a href="/shop">Shop</a></li>
             <li><a href="/winners">ผู้ชนะประมูล</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#">ครั้งแรกที่ BidCups</a></li>
             <li><a href="#">BidCups คืออะไร</a></li>
             <!-- <li><a href="/99percentsavings">Is 99% discount possible?</a></li> -->
             <li><a href="#">ช่วยเหลือ</a></li>
           </ul>
           <ul class="nav navbar-nav visible-xs">
             <li>
               <span>Switch to
                   <button class="btn btn-link" onclick="ChangeLanguage('en');"><img src="<?php echo base_url();?>assets/home/images/icon-uk-sqr.png" alt="Switch to English"> Eng</button>				</span>
             </li>
           </ul>

     </div><!--/.nav-collapse -->
       </div>
     </nav>

     <!-- Button Login !-->
     	<div id="login-panel" class="right-panel">

     			 <button type="button" class="panel-close btn btn-link">
     				 <span class="icon-bar bar-1"></span>
     				 <span class="icon-bar bar-2"></span>
     			 </button>
     			 <h4><i class="fa fa-user"></i> Login</h4>
     			 <div id="social-login">
     				 <a onclick="OnLogin2();" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a> &nbsp;
     		 	 	 <!--<a onclick="gp_login();" class="btn btn-gg"><i class="fa fa-google"></i> Google</a>!-->
     			 </div>
     			<p class="text-center or-separator"><span>or</span></p>

     			<form name="f1" method="post" action="password" accept-charset="UTF-8" class="form" role="form"  id="login-form">
               <div class="form-group">
                  <label class="sr-only" for="username">Email address</label>
                  <input class="form-control" type="text" name="username" id="username1" placeholder="Email" required>
               </div>
               <div class="form-group">
                  <label class="sr-only" for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password1"maxlength="16" id="password" placeholder="Password" required>
               </div>
               <div class="form-group text-center">
                  <button type="submit" class="btn btn-teal btn-block btn-lg">Log in</button>
               </div>
               <div class="help-block text-center"><a href='forgotpassword'>ลืม username หรือ รหัสผ่าน?</a></div>
            </form>

     		<hr>
     		 <div id="new-user">
     			<p class="pull-left">Don't have an account?</p>
     			<a type="submit" href="/register" class="btn btn-yellow btn-block btn-lg pull-right">Sign Up Now</a>
     		 </div>

      	</div>
     <!-- End Button Login !-->
     <br/>
