<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

  function __construct() {
       parent::__construct();
      $this->load->library(array('ion_auth','form_validation'));
			$this->load->helper(array('url','language'));

      $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
      $this->lang->load('auth');
   }

	public function index()
	{

    if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('dashboard/login', 'refresh');
				}
				elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					// redirect them to the home page because they must be an administrator to view this
					return show_error('You must be an administrator to view this page.');
				}
				else
				{
					// set the flash data error message if there is one
					$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
					//list the users
					$this->data['users'] = $this->ion_auth->users()->result();

					foreach ($this->data['users'] as $k => $user)
					{
						//$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();

						$sess_array = array(
							'sess_id' => $user->id,
							'sess_fname' => $user->first_name,
							'sess_lname' => $user->last_name,
							'sess_img' => $user->img
						);
						$this->session->set_userdata('logged_in', $sess_array);
					}
					//print_r($sess_array);
          $this->_render_page('layout_dashboard/header');
          $this->_render_page('layout_dashboard/navbar');
          $this->_render_page('layout_dashboard/sitebar');
					$this->_render_page('dashboard/dashboard', $this->data);
          $this->_render_page('layout_dashboard/footer');
				}
	}

  public function login()
  {
		$this->data['title'] = $this->lang->line('login_heading');

		//validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() == true)
		{
			// check to see if the user is logging in
			// check for "remember me"


			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password')))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('dashboard/index', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('dashboard/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id'    => 'identity',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id'   => 'password',
				'type' => 'password',
			);

			$this->_render_page('dashboard/dashboard_adminlogin', $this->data);
		}
	}

  public function logout(){
		$this->data['title'] = "Logout";

	// log the user out
	$logout = $this->ion_auth->logout();

	// redirect them to the login page
	$this->session->set_flashdata('message', $this->ion_auth->messages());
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

  public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
  {
	   $this->viewdata = (empty($data)) ? $this->data: $data;

	    $view_html = $this->load->view($view, $this->viewdata, $returnhtml);

	    if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
  }

}
