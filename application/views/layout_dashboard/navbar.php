<div class="wrapper">

  <header class="main-header">

   <a href="index2.html" class="logo">

     <span class="logo-mini"><b>A</b>BC</span>

     <span class="logo-lg"><b>Admin</b>BidCups</span>
   </a>

   <nav class="navbar navbar-static-top">

     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
       <span class="sr-only">Toggle navigation</span>
     </a>

     <div class="navbar-custom-menu">
       <?php $session_data = $this->session->userdata('logged_admin'); ?>
         <ul class="nav navbar-nav">
         <li class="dropdown user user-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <img src="<?php echo base_url('uploads/'. $session_data['sess_img']); ?>" class="user-image" alt="User Image">
             <span class="hidden-xs"><?php echo $session_data['sess_fname'] . " " . $session_data['sess_lname'];?></span>
           </a>
         <li>
             <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url("dashboard/logout");?>">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
         <li>

          </ul>

      </li>

   </nav>
 </header>
