<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct() {
			 parent::__construct();
			 $this->load->model("menu_model", "menu");
}

	public function index()
	{
		$data['menu'] = $this->menu->getmenufont();
		$this->load->view('home', $data);
	}
}
