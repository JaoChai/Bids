<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class dashboard extends CI_Controller {

  function __construct() {
       parent::__construct();
       if ( ! $this->session->userdata('logged_admin'))
     {
         // Allow some methods?
         $allowed = array(
             'index',
             'maindashboard',
             'setting',
             'admin_index',
             'slider',
             'menu',
             'category',
             'bidpackage',
             'openpenny',
             'auction_list',
             'review',
         );
         if ( in_array($this->router->fetch_method(), $allowed))
         {
             redirect('dashboard/login');
         }
     }
      // $this->load->library(array('ion_auth','form_validation'));
			// $this->load->helper(array('url','language'));
      //
      // $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
      // $this->lang->load('auth');
   }

	public function index()
	{
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/dashboard');
    $this->load->view('layout_dashboard/footer');
	}

  public function login()
  {
    $this->load->view('dashboard/dashboard_adminlogin');
	}

  public function ck_login()
  {
    $this->load->model("login_model", "login_db");

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
    //$this->form_validation->set_message('required', '%s Is required');
		if($this->form_validation->run() == FALSE){
			if(isset($this->session->userdata['logged_in'])){
				redirect('dashboard/index');
			}else{
        $this->session->set_flashdata('message', '<p class="text-danger"> Email or Password is required </p>');
				redirect('dashboard/login');
			}
		}else{
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);

			$result = $this->login_db->login_admin($data);
			//login Successfully
			if($result == TRUE){
				$email = $this->input->post('email');
				$result = $this->login_db->get_dataadmin($email);
				if($result != FALSE){
					$session_data = array(
						'id' => $result[0]->admin_id,
						'email' => $result[0]->admin_email,
            'fname' => $result[0]->admin_fname,
            'lname' => $result[0]->admin_lname,
            'img' => $result[0]->admin_newpic
					);
					//Add user data in session
					$this->session->set_userdata('logged_admin', $session_data);
					redirect('dashboard/index');
				}
			}else{
				$this->session->set_flashdata('message', '<p class="text-danger"> Invalid Email or Password. </p>');
				$data = array(
					'error_mess' => 'Invalid Email or Password'
				);
				// $data['result'] = $this->setting->getall();
				// $datamenu['menu'] = $this->menu->getall();
				// $this->load->view('layout_home/header', $data);
				// $this->load->view('layout_home/search');
				// $this->load->view('layout_home/navbar', $datamenu);
				// $this->load->view('home/login', $data);
				// $this->load->view('layout_home/footer', $data);
				redirect('dashboard/login');
			}
		}
  }

  public function logout(){
	// log the user out
  $sess_array = array(
    'id' => '',
    'fname' => '',
    'lname' => '',
    'img' => ''
  );
  $this->session->set_flashdata('message', "Logout Successfully");
  $this->session->unset_userdata('logged_admin', $sess_array);
	// redirect them to the login page

	redirect('dashboard/login', 'refresh');
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

  public function admin_index()
  {
    $this->load->model("admin_model", "admin");
   $data['result'] = $this->admin->getall();
   $this->load->view('layout_dashboard/header');
   $this->load->view('layout_dashboard/navbar');
   $this->load->view('layout_dashboard/sitebar');
   $this->load->view('dashboard/admin', $data);
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

  // public function admin(){
  //   $this->load->view('layout_dashboard/header');
  //   $this->load->view('layout_dashboard/navbar');
  //   $this->load->view('layout_dashboard/sitebar');
  //   $this->load->view('dashboard/admin');
  //   $this->load->view('layout_dashboard/footer');
  //
  // }

  public function menu()
  {
    $this->load->model("menu_model", "menu");
    $data['result'] = $this->menu->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/menu', $data);
    $this->load->view('layout_dashboard/footer');

  }

  public function category()
  {
    $this->load->model("category_model", "cate");
    $data['result'] = $this->cate->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/category', $data);
    $this->load->view('layout_dashboard/footer');

  }

  public function bidpackage()
  {
    $this->load->model("bidpackage_model", "package");
    $data['result'] = $this->package->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/bidpackage', $data);
    $this->load->view('layout_dashboard/footer');
  }

  public function openpenny()
  {
    $this->load->model("auction_model", "auction");
    $data['getcate'] = $this->auction->getcate();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/openpenny', $data);
    $this->load->view('layout_dashboard/footer');
  }

  public function auction_list()
  {
    $this->load->model("auction_model", "auction");
    $data['result'] = $this->auction->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/auction_list', $data);
    $this->load->view('layout_dashboard/footer');
  }

  public function review()
  {
    $this->load->model("review_model", "review");
    $data['result'] = $this->review->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/review', $data);
    $this->load->view('layout_dashboard/footer');
  }

  public function _get_csrf_nonce()
{
  $this->load->helper('string');
  $key   = random_string('alnum', 8);
  $value = random_string('alnum', 20);
  $this->session->set_flashdata('csrfkey', $key);
  $this->session->set_flashdata('csrfvalue', $value);

  return array($key => $value);
}

public function _valid_csrf_nonce()
{
  if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
    $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
  {
    return TRUE;
  }
  else
  {
    return FALSE;
  }
}

  public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
  {
	   $this->viewdata = (empty($data)) ? $this->data: $data;

	    $view_html = $this->load->view($view, $this->viewdata, $returnhtml);

	    if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
  }

}
