<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class home extends CI_Controller {

	public function __construct() {
			 parent::__construct();
			 if ( ! $this->session->userdata('logged_in'))
    {
        // Allow some methods?
        $allowed = array(
            'viewmydetail',
            'myaccount',
						'viewaddresses',
						'vieweditmydetail',
        );
        if ( in_array($this->router->fetch_method(), $allowed))
        {
            redirect('home/viewlogin');
        }
    }
			 $this->load->model('setting_model', 'setting');
			 $this->load->model('menu_model', 'menu');
			 $this->load->model('bidpackage_model', 'package');
			 $this->load->model('slide_model', 'slide');
			 $this->load->model("register_model", "regis");
			 $this->load->model('bidding_model', 'bid');
}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$datapackage['package'] = $this->package->getall();
		$dataslide['slide'] = $this->slide->getall();
		$data['liftbid'] = $this->bid->getbid($mem_id);
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial', $data);
		$this->load->view('layout_home/mainslide', $dataslide);
		$this->load->view('home/index');
		$this->load->view('layout_home/footer', $data);
	}

	public function regis(){
		$contents['recaptcha_html'] = $this->recaptcha->render();
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$data['result'] = $this->setting->getall();
		$this->load->view('layout_home/header',$data);
		$this->load->view('layout_home/headerdetial', $data);
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
	$this->form_validation->set_rules('fname', '<b>ชื่อ</b>', 'required');
	$this->form_validation->set_rules('lname', '<b>นามสกุล</b>', 'required');
	$this->form_validation->set_rules('day', '<b>วัน</b>', 'required');
	$this->form_validation->set_rules('month', '<b>เดือน</b>', 'required');
	$this->form_validation->set_rules('year', '<b>ปี</b>', 'required');
	$this->form_validation->set_rules('gender', '<b>เพศ</b>', 'required');
	$this->form_validation->set_rules('tel', '<b>เบอร์โทร</b>', 'required');
	$this->form_validation->set_rules('address', '<b>ที่อยู่</b>', 'required');
	$this->form_validation->set_rules('province', '<b>จังหวัด</b>', 'required');
	$this->form_validation->set_rules('postcode', '<b>รหัสไปรษณีย์</b>', 'required');
	$this->form_validation->set_rules('username', '<b>Username</b>', 'required|min_length[6]|callback_check_exists_username');
	$this->form_validation->set_rules('password', '<b>รหัสผ่าน</b>', 'required|min_length[6]');
	$this->form_validation->set_rules('cnfpassword', '<b>ยืนยันรหัสผ่าน</b>', 'required|matches[password]|min_length[6]');
	$this->form_validation->set_rules('email', '<b>อีเมล</b>', 'required|callback_check_exists_email');
	$this->form_validation->set_rules('g-recaptcha-response', '<b>กรุณายืนยันตัวตน</b>', 'callback_getResponse');
	$this->form_validation->set_message('required', 'กรุณากรอก %s');
	$this->form_validation->set_message('matches', '%s ไม่ตรงกับรหัสผ่าน');
	$this->form_validation->set_message('min_length', 'กรุณากรอก %s อย่างน้อย 6 ตัว');

	 if($this->form_validation->run() == FALSE){
		//$contents['recaptcha_html'] = $this->recaptcha->render();
		$this->session->set_flashdata('alert', '<div class="alert alert-danger">' . validation_errors() . '</div>');
		redirect('home/regis');

	 }else{
		 date_default_timezone_set('Asia/Bangkok');
		 $data = array(
			 'mem_fname' => $this->input->post('fname'),
			 'mem_lname' => $this->input->post('lname'),
			 'mem_birth_day' => $this->input->post('day'),
			 'mem_birth_month' => $this->input->post('month'),
			 'mem_birth_year' => $this->input->post('year'),
			 'mem_gender' => $this->input->post('gender'),
			 'mem_tel' => $this->input->post('tel'),
			 'mem_address' => $this->input->post('address'),
			 'mem_province' => $this->input->post('province'),
			 'mem_postcode' => $this->input->post('postcode'),
			 'mem_username' => $this->input->post('username'),
			 'mem_pass' => md5($this->input->post('password')),
			 'mem_email' => $this->input->post('email'),
			 'mem_date' => Date('Y-m-d H:i:s')
		 );

		 if($this->regis->insert($data)){
			 if($this->regis->sendEmail($this->input->post('email'), $this->input->post('username'))){
				 //$this->session->set_flashdata('mess_regis','');
				 //redirect('home/index');
			 }else{

				 $this->session->set_flashdata('alert','<div class="alert alert-danger text-center">Oops! Send Email Error.  Please try again later!!!</div>');
				 redirect('home/regis');
			 }
		 }else{
			 $this->session->set_flashdata('alert','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
			 redirect('home/regis');
		 }

	 }
	}

	public function verify($hash=NULL)
	{
		if($this->regis->verifyEmail($hash)){
			//message modal Verify Success
			$js = "1";
			$this->session->set_flashdata('js', $js);
			redirect('home/viewlogin');
		}else{
			//message modal Verify False
			$js = "2";
			$this->session->set_flashdata('js', $js);
			redirect('home/viewlogin');
		}
	}
	public function login()
	{
		$this->load->model("login_model", "login_db");

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if($this->form_validation->run() == FALSE){
			if(isset($this->session->userdata['logged_in'])){
				redirect('home/index');
			}else{
				$this->session->set_flashdata('error_mess', '<p class="text-danger"> Email or Password is Required. </p>');
				redirect('home/viewlogin');
			}
		}else{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$result = $this->login_db->login($email, $password);
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
				$this->session->set_flashdata('error_mess',  'Invalid login credentials.');
				// $data['result'] = $this->setting->getall();
				// $datamenu['menu'] = $this->menu->getall();
				// $this->load->view('layout_home/header', $data);
				// $this->load->view('layout_home/search');
				// $this->load->view('layout_home/navbar', $datamenu);
				// $this->load->view('home/login', $data);
				// $this->load->view('layout_home/footer', $data);
				redirect('home/viewlogin');
			}
		}
	}

	public function viewlogin(){
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial', $data);
		$this->load->view('home/login');
		$this->load->view('layout_home/footer', $data);
	}

	public function logout()
	{
		//Removing session data
		$sess_array = array(
			'id' => '',
			'username' => '',
			'email' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		redirect('home/index');
	}

	public function viewcontent($title){
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$data['detail_content'] = $this->menu->getcontent($title);
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home/content', $data);
		$this->load->view('layout_home/footer', $data);
	}

	public function viewproduct($id){
		$this->load->model('product_model', 'product');
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$data['item'] = $this->product->getitem($id);
		$data['history'] = $this->product->gethistory($id);
		$data['liftbid'] = $this->bid->getbid($mem_id);
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home/productdetail', $data);
		$this->load->view('layout_home/footer', $data);
	}

	public function viewwinner(){
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar');
		$this->load->view('home/winner');
		$this->load->view('layout_home/footer', $data);
	}

	public function check_exists_username($username)
	{
		$check = $this->regis->findusername($username);
		if($check){
			return TRUE;
		}else{
			$this->form_validation->set_message("check_exists_username", "%s มีผู้อื่นใช้แล้ว");
			return FALSE;
		}
	}

	public function check_exists_email($email)
	{
		$check = $this->regis->findemail($email);
		if($check){
			return TRUE;
		}else{
			$this->form_validation->set_message("check_exists_email", "%s มีผู้อื่นใช้แล้ว");
			return FALSE;
		}
	}


  /********** View Account ************/

	public function myaccount(){
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data['liftbid'] = $this->bid->getbid($mem_id);
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home/myaccount');
		$this->load->view('layout_home/footer', $data);
	}

	public function viewauctionbuy(){
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data['liftbid'] = $this->bid->getbid($mem_id);
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$data['package'] = $this->package->getall();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home/auctionbuy', $data);
		$this->load->view('layout_home/footer', $data);
	}

	public function viewaddresses(){
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data['liftbid'] = $this->bid->getbid($mem_id);
		$data_mem['mem_address'] = $this->regis->getmembers($mem_id);
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home/addresses', $data_mem);
		$this->load->view('layout_home/footer', $data);
	}

	public function vieweditaddresses(){
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data_mem['mem_address'] = $this->regis->getmembers($mem_id);
		$data_mem['id'] = $mem_id;
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar');
		$this->load->view('crudhome/editaddresses', $data_mem);
		$this->load->view('layout_home/footer', $data);
	}


	public function viewmydetail(){

	//	if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data['liftbid'] = $this->bid->getbid($mem_id);
		$data_mem['mem_detail'] = $this->regis->getmembers($mem_id);
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home/mydetails', $data_mem);
		$this->load->view('layout_home/footer', $data);
	// 	}else{
	// 		redirect('home/viewlogin');
	// }
	}

	public function vieweditmydetail(){
		$session_data = $this->session->userdata('logged_in');
		$mem_id = $session_data['id'];
		$data_mem['mem_detail'] = $this->regis->getmembers($mem_id);
		$data_mem['id'] = $mem_id;
		$data['result'] = $this->setting->getall();
		$data['about'] = $this->menu->getabout();
		$data['support'] = $this->menu->getsupport();
		$data['bid'] = $this->menu->getmenubid();
		$this->load->view('layout_home/header', $data);
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar');
		$this->load->view('crudhome/editmydetails', $data_mem);
		$this->load->view('layout_home/footer', $data);
	}

	public function updatemembers(){
		$id = $this->input->post('id');

		$this->form_validation->set_rules('fname', '<b>ชื่อ</b>', 'required');
		$this->form_validation->set_rules('lname', '<b>นามสกุล</b>', 'required');
		$this->form_validation->set_rules('day', '<b>วัน</b>', 'required');
		$this->form_validation->set_rules('month', '<b>เดือน</b>', 'required');
		$this->form_validation->set_rules('year', '<b>ปี</b>', 'required');
		$this->form_validation->set_rules('gender', '<b>เพศ</b>', 'required');
		$this->form_validation->set_rules('phone', '<b>เบอร์โทร</b>', 'required|max_length[10]');
		$this->form_validation->set_rules('username', '<b>Username</b>', 'required|min_length[6]');
		$this->form_validation->set_rules('email', '<b>อีเมล</b>', 'required');
		$this->form_validation->set_message('required', 'กรุณากรอก %s');
		$this->form_validation->set_message('max_length', '%s เกิน 10 ตัว');

		if($this->form_validation->run() == FALSE){
		 //$contents['recaptcha_html'] = $this->recaptcha->render();
		 $this->session->set_flashdata('alert', '<div class="alert alert-danger">' . validation_errors() . '</div>');
		 redirect('home/vieweditmydetail');

		}else{
			$data = array(
				'mem_fname' => $this->input->post('fname'),
				'mem_lname' => $this->input->post('lname'),
				'mem_birth_day' => $this->input->post('day'),
				'mem_birth_month' => $this->input->post('month'),
				'mem_birth_year' => $this->input->post('year'),
				'mem_gender' => $this->input->post('gender'),
				'mem_tel' => $this->input->post('phone'),
				'mem_username' => $this->input->post('username'),
				'mem_email' => $this->input->post('email')
			);

			$this->regis->update($id, $data);
			redirect('home/viewmydetail');
		}
	}

	public function updateaddress()
{
	$id = $this->input->post('id');

	$this->form_validation->set_rules('address', '<b>ที่อยู่</b>', 'required');
	$this->form_validation->set_rules('district', '<b>จังหวัด</b>', 'required');
	$this->form_validation->set_rules('postcode', '<b>รหัสไปรษณีย์</b>', 'required');
	$this->form_validation->set_rules('phone', '<b>เบอร์โทร</b>', 'required|max_length[10]');
	$this->form_validation->set_message('required', 'กรุณากรอก %s');
	$this->form_validation->set_message('max_length', '%s เกิน 10 ตัว');

	if($this->form_validation->run() == FALSE){
	 //$contents['recaptcha_html'] = $this->recaptcha->render();
	 $this->session->set_flashdata('alert', '<div class="alert alert-danger">' . validation_errors() . '</div>');
	 redirect('home/vieweditaddresses');

	}else{
		$data = array(
			'mem_address' => $this->input->post('address'),
			'mem_district' => $this->input->post('district'),
			'mem_postcode' => $this->input->post('postcode'),
			'mem_tel' => $this->input->post('phone')
		);

		$this->regis->update_address($id, $data);
		redirect('home/viewaddresses');
	}
}

public function viewdeleteaccount()
{
	$session_data = $this->session->userdata('logged_in');
	$mem_id = $session_data['id'];
	$data_mem['mem_detail'] = $this->regis->getmembers($mem_id);
	$data['result'] = $this->setting->getall();
	$data['about'] = $this->menu->getabout();
	$data['support'] = $this->menu->getsupport();
	$data['bid'] = $this->menu->getmenubid();
	$this->load->view('layout_home/header', $data);
	$this->load->view('layout_home/headerdetial');
	$this->load->view('home/deleteaccount');
	$this->load->view('layout_home/footer', $data);
}

public function viewchangepassword()
{
	$session_data = $this->session->userdata('logged_in');
	$mem_id = $session_data['id'];
	$data['liftbid'] = $this->bid->getbid($mem_id);
	$data_mem['mem_detail'] = $this->regis->getmembers($mem_id);
	$data['result'] = $this->setting->getall();
	$data['about'] = $this->menu->getabout();
	$data['support'] = $this->menu->getsupport();
	$data['bid'] = $this->menu->getmenubid();
	$this->load->view('layout_home/header', $data);
	$this->load->view('layout_home/headerdetial');
	$this->load->view('home/changepassword');
	$this->load->view('layout_home/footer', $data);
}

public function changepassword()
{
	$this->form_validation->set_rules('oldpassword','Old Password','trim|required|min_length[6]|max_length[32]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');
	$this->form_validation->set_rules('password2','Reenter Password','trim|required|min_length[6]|max_length[32]|matches[password]');
	$this->form_validation->set_message('required', 'กรุณากรอก %s');
	$this->form_validation->set_message('min_length', '%s น้อยกว่า 6 ตัว');
	$this->form_validation->set_message('max_length', '%s เกิน 32 ตัว');

	if($this->form_validation->run() == FALSE){
		$this->session->set_flashdata('alert', '<div class="alert alert-danger">' . validation_errors() . '</div>');
		redirect('home/viewchangepassword');
	}else{
		$query = $this->regis->change_password();
		$this->session->set_flashdata('alert', '<div class="alert alert-danger">' . $query . '</div>');
		redirect('home/viewchangepassword');
	}
}

public function viewbuypackage()
{
	$id = $this->input->post('package');
	$data['result'] = $this->setting->getall();
	$data['about'] = $this->menu->getabout();
	$data['support'] = $this->menu->getsupport();
	$data['bid'] = $this->menu->getmenubid();
	$data['package'] = $this->package->getpackage($id);
	$this->load->view('layout_home/header', $data);
	$this->load->view('layout_home/headerdetial');
	$this->load->view('home/buypackage', $data);
	$this->load->view('layout_home/footer', $data);
}

public function viewbanktransfer()
{
	$data['id'] = $this->input->post('id');
	$data['cost'] = $this->input->post('cost');
	$data['bidpackage'] = $this->input->post('bidpackage');
	$data['result'] = $this->setting->getall();
	$data['about'] = $this->menu->getabout();
	$data['support'] = $this->menu->getsupport();
	$data['bid'] = $this->menu->getmenubid();
	$this->load->view('layout_home/header', $data);
	$this->load->view('layout_home/headerdetial');
	$this->load->view('home/banktransfer', $data);
	$this->load->view('layout_home/footer', $data);
}




	  /********** End View Account ************/


}
