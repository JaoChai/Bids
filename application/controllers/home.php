<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class home extends CI_Controller {

	public function __construct() {
			 parent::__construct();
			 $this->load->model('setting_model', 'setting');
			 $this->load->model('menu_model', 'menu');
			 $this->load->model('bidpackage_model', 'package');
			 $this->load->model('slide_model', 'slide');
}

	public function index()
	{
		$data['result'] = $this->setting->getall();
		$datamenu['menu'] = $this->menu->getall();
		$datapackage['package'] = $this->package->getall();
		$dataslide['slide'] = $this->slide->getall();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar', $datamenu);
		$this->load->view('layout_home/headerdetial', $dataslide);
		$this->load->view('home/index', $datapackage);
		$this->load->view('layout_home/footer', $data);
	}

	public function regis(){
		$contents['recaptcha_html'] = $this->recaptcha->render();
		$data['result'] = $this->setting->getall();
		$datamenu['menu'] = $this->menu->getall();
		$this->load->view('layout_home/header',$data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar', $datamenu);
		$this->load->view('home/register',$contents);
	  $this->load->view('layout_home/footer', $data);
	}

	public function updatebid()
	{
		$this->load->helper('date');
		$this->load->model("bidding_model", "bidding");
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$start = $this->input->post('start');
		$bid_inc = $this->input->post('bid_inc');
		$total = $start + $bid_inc;
		$mem_id = $this->input->post('mem_id');
		date_default_timezone_set('Asia/Bangkok');

		$data = array(
			'auc_id' => $id,
			'auc_end_date' => $date,
			'auc_start' => $total,
			'auc_status' => 1,
			'mem_id' => $mem_id
		);

		$data_his = array(
			'mem_id' => $mem_id,
			'auc_id' => $id,
			'his_date' => Date('Y-m-d H:i:s'),
			'his_price' => $total
		);

		$this->bidding->updatebid($id, $data);
		$this->bidding->insert_his($data_his);
		//$this->bidding->updatestatus($id);
	}

	public function getResponse($str){

	$response = $this->recaptcha->verifyResponse($str);
	if ($response['success'])
	{
		return true;
			}
			else
			{
		$this->form_validation->set_message('getResponse', '%s '. var_dump($response) );

		return false;
			}
	}

	public function register()
	{
		$this->load->model("register_model", "regis");

	if($this->input->post()){
	$this->form_validation->set_rules('fname', '<b>ชื่อ</b>', 'required');
	$this->form_validation->set_rules('lname', '<b>นามสกุล</b>', 'required');
	$this->form_validation->set_rules('day', '<b>วัน</b>', 'required');
	$this->form_validation->set_rules('month', '<b>เดือน</b>', 'required');
	$this->form_validation->set_rules('year', '<b>ปี</b>', 'required');
	$this->form_validation->set_rules('tel', '<b>เบอร์โทร</b>', 'required');
	$this->form_validation->set_rules('username', '<b>Username</b>', 'required|min_length[6]');
	$this->form_validation->set_rules('password', '<b>รหัสผ่าน</b>', 'required|min_length[6]');
	$this->form_validation->set_rules('cnfpassword', '<b>ยืนยันรหัสผ่าน</b>', 'required|matches[password]|min_length[6]');
	$this->form_validation->set_rules('email', '<b>อีเมล</b>', 'required');
	$this->form_validation->set_rules('g-recaptcha-response', '<b>กรุณายืนยันตัวตน</b>', 'callback_getResponse');
	$this->form_validation->set_message('required', 'กรุณากรอก %s');
	$this->form_validation->set_message('matches', '%s ไม่ตรงกับรหัสผ่าน');
	$this->form_validation->set_message('min_length', 'กรุณากรอก %s อย่างน้อย 6 ตัว');

	 if($this->form_validation->run() == FALSE){
		//$contents['recaptcha_html'] = $this->recaptcha->render();
		$this->session->set_flashdata('alert', '<div class="alert alert-danger">' . validation_errors() . '</div>');
		redirect('home/regis');

	 }else{
		 $data = array(
			 'mem_fname' => $this->input->post('fname'),
			 'mem_lname' => $this->input->post('lname'),
			 'mem_birth_day' => $this->input->post('day'),
			 'mem_birth_month' => $this->input->post('month'),
			 'mem_birth_year' => $this->input->post('year'),
			 'mem_tel' => $this->input->post('tel'),
			 'mem_username' => $this->input->post('username'),
			 'mem_pass' => md5($this->input->post('password')),
			 'mem_email' => $this->input->post('email')
		 );

		 $this->regis->insert($data);
		 redirect('home/index');
	 }
 }else{
	 redirect('home/index');
 }
	}

	public function login()
	{
		$this->load->model("login_model", "login_db");

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if($this->form_validation->run() == FALSE){
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('home/index');
			}else{
				$this->load->view('home/index');
			}
		}else{
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);

			$result = $this->login_db->login($data);
			//login Successfully
			if($result == TRUE){
				$email = $this->input->post('email');
				$result = $this->login_db->get_data($email);
				if($result != FALSE){
					$session_data = array(
						'id' => $result[0]->mem_id,
						'username' => $result[0]->mem_username,
						'email' => $result[0]->mem_email
					);
					//Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					redirect('home/index');
				}
			}else{
				$data = array(
					'error_mess' => 'Invalid Email or Password'
				);
				$this->load->view('home/index', $data);
			}
		}
	}

	public function viewlogin(){
		$data['result'] = $this->setting->getall();
		$datamenu['menu'] = $this->menu->getall();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar', $datamenu);
		$this->load->view('home/login');
		$this->load->view('layout_home/footer', $data);
	}

	public function logout()
	{
		//Removing session data
		$sess_array = array(
			'email' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['result'] = $this->setting->getall();
		$datamenu['menu'] = $this->menu->getall();
		$datapackage['package'] = $this->package->getall();
		$dataslide['slide'] = $this->slide->getall();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar', $datamenu);
		$this->load->view('layout_home/headerdetial', $dataslide);
		$this->load->view('home/index', $datapackage);
		$this->load->view('layout_home/footer', $data);
	}
	public function viewproduct(){
		$data['result'] = $this->setting->getall();
		$datamenu['menu'] = $this->menu->getall();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar', $datamenu);
		$this->load->view('home/productdetail');
		$this->load->view('layout_home/footer', $data);
	}

}
