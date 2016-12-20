<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class bank extends CI_Controller {

	public function __construct() {
			 parent::__construct();
       $this->load->model('bank_model', 'bank');
     }

     public function index(){
       $data['result'] = $this->bank->getall();
       $this->load->view('layout_dashboard/header');
       $this->load->view('layout_dashboard/navbar');
       $this->load->view('layout_dashboard/sitebar');
       $this->load->view('dashboard/bank', $data);
       $this->load->view('layout_dashboard/footer');
     }

     public function insert(){
       $data = array(
         'bank_name' => $this->input->post('bank'),
         'bank_num' => $this->input->post('num_bank'),
         'bank_members' => $this->input->post('name_bank'),
         'bank_branch' => $this->input->post('branch')
       );

       $this->bank->insert($data);
       redirect('bank/index');

     }

		 public function insert_transferbid()
		 {
		 	$session_data = $this->session->userdata('logged_in');
		 	$data = array(
		 		'tb_bank' => $this->input->post('bank'),
				'tb_amount' => $this->input->post('amount'),
		 		'tb_date' => date('Y-m-d H:i:s', strtotime($this->input->post('transfer_date'))),
		 		'tb_username' => $session_data['username'],
		 		'tb_other' => $this->input->post('other'),
		 		'package_id' => $this->input->post('id')
		 	);
			$this->bank->insert_transferbid($data);
			redirect('home/viewauctionbuy');
		 }
   }
