<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct() {
			 parent::__construct();
			 $this->load->model("menu_model", "menu");
}

	public function index()
	{

		$this->load->view('layout_home/header');
		$this->load->view('layout_home/search');
		$this->load->view('layout_home/navbar');
		$this->load->view('layout_home/headerdetial');
		$this->load->view('home');
		$this->load->view('layout_home/footer');
	}
}
