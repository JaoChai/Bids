<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class members extends CI_Controller {

	public function __construct() {
			 parent::__construct();
       $this->load->model('members_model', 'members');
     }

     public function index(){
       $data['result'] = $this->members->getall();
       $this->load->view('layout_dashboard/header');
       $this->load->view('layout_dashboard/navbar');
       $this->load->view('layout_dashboard/sitebar');
       $this->load->view('dashboard/user_list', $data);
       $this->load->view('layout_dashboard/footer');
     }

     public function addbid($id){
       $data['bid'] = $id;
       $this->load->view('layout_dashboard/header');
       $this->load->view('layout_dashboard/navbar');
       $this->load->view('layout_dashboard/sitebar');
       $this->load->view('dashboard/addbid', $data);
       $this->load->view('layout_dashboard/footer');
     }

     public function updatebid(){
       $id = $this->input->post('id');
       $bid = $this->input->post('bid');
       $data = $this->members->getbid($id);
       $oldbid = $data->mem_bid;
       $total = $bid + $oldbid;
       $data = array(
         'mem_bid' => $total
       );
       $this->members->updatebid($id, $data);
       redirect('members/index');
     }
   }
