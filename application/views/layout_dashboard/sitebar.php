<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <?php $session_data = $this->session->userdata('logged_admin'); ?>
        <div class="pull-left image">
          <img src="<?php echo base_url('uploads/'. $session_data['sess_img']); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $session_data['sess_fname'] . " " . $session_data['sess_lname'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url("dashboard/maindashboard"); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        <li>
          <a href="#">
            <i class="fa fa-cogs"></i> <span>General Seting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("dashboard/setting"); ?>"><i class="fa fa-circle-o"></i>Setting WebSite</a></li>
            <li class="active"><i class="fa fa-circle-o"></i></a></li>
            <li><a href="<?php echo site_url("dashboard/slider"); ?>"><i class="fa fa-circle-o"></i>Setting Silder</a></li>
            <li class="active"><i class="fa fa-circle-o"></i></a></li>
            <li><a href="<?php echo site_url("admin/create_user"); ?>"><i class="fa fa-circle-o"></i>Setting Admin</a></li>
            <li class="active"><i class="fa fa-circle-o"></i></a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Setting Bank</a></li>
            <li class="active"><i class="fa fa-circle-o"></i></a></li>
          </ul>
        </li>


        <li>
          <a href="#">
            <i class="fa fa-th-list"></i> <span>Menu Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("dashboard/menu"); ?>"><i class="fa fa-circle-o"></i>Add Menu</a></li>

            <?php $sql = "SELECT * FROM menu";
              $query = $this->db->query($sql);
              if($query->num_rows() > 0){
              foreach($query->result() as $row){ ?>
              <li><a href="<?php echo site_url("menu/getmenu/".$row->menu_id);?>"><?php echo $row->menu_name;?></a></li>
              <?php }
              }?>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bars"></i> <span>Category Manager </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("dashboard/category"); ?>"><i class="fa fa-circle-o"></i>Add Category</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-user"></i> <span>User Manage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>


        <li>
          <a href="#">
            <i class="fa fa-btc"></i> <span>Bid Package</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("dashboard/bidpackage"); ?>"><i class="fa fa-circle-o"></i>Add Package</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-legal"></i> <span>Penny Auction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("dashboard/openpenny"); ?>"><i class="fa fa-circle-o"></i>Open Auction</a></li>
            <li><a href="<?php echo site_url("dashboard/auction_list"); ?>"><i class="fa fa-circle-o"></i>List Auction</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Contact List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>


        <li>
          <a href="#">
            <i class="fa fa-thumbs-o-up"></i> <span>Review</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("dashboard/review");?>"><i class="fa fa-circle-o"></i>Add Review</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-line-chart"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>



        <li class="header">Manage Shop</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Cooming Soon</span></a></li>
      </ul>



    </section>
  </aside>
