<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

}
