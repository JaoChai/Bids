<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

  function __construct() {
       parent::__construct();
   }

	public function index()
	{

		$this->load->view('dashboard/dashboard_adminlogin');
	}

  public function maindashboard()
  {

    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/dashboard');
    $this->load->view('layout_dashboard/footer');
  }

  public function setting()
  {

    $this->load->model("setting_model", "setting");
    $data['result'] = $this->setting->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/setting', $data);
    $this->load->view('layout_dashboard/footer');

  }

  public function slider()
  {
    $this->load->model("slide_model", "slide");
    $data['result'] = $this->slide->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    //$this->load->vars($data);
    $this->load->view('dashboard/slider', $data);
    $this->load->view('layout_dashboard/footer');

  }

  public function admin(){
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/admin');
    $this->load->view('layout_dashboard/footer');

  }

  public function menu(){
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/menu');
    $this->load->view('layout_dashboard/footer');

  }

  public function category(){
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/category');
    $this->load->view('layout_dashboard/footer');

  }

  public function bidpackage(){
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/bidpackage');
    $this->load->view('layout_dashboard/footer');

  }


}
