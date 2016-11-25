<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slideImg extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->model("slide_model", "slide");
   }

   public function do_upload()
   {
    $config['upload_path'] =  "./uploads/";
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2048000';
    $config['max_width'] = '';
    $config['max_height'] = '';
    $config['overwrite'] = 'TRUE';
    $config['remove_spaces'] = 'TRUE';
    $config['encrypt_name'] = 'TRUE';
    $new_name = time().$_FILES["userfile"]['name'];
    $config['file_name'] = $new_name;

    $this->load->library('upload', $config);

    if($this->upload->do_upload())
    {
      $img = $_FILES['userfile']['name'];
      $this->slide->insert($this->upload->data(), $img);
      redirect('dashboard/slider');
    }else
    {
      $error = array('error' => $this->upload->display_errors());
			$data['result'] = $this->slide->getall();
			$this->load->vars($data);

      $this->load->view('layout_dashboard/header');
      $this->load->view('layout_dashboard/navbar');
      $this->load->view('layout_dashboard/sitebar');
			$this->load->view('dashboard/slider', $error);
      $this->load->view('layout_dashboard/footer');
    }
   }

   public function delete()
   {
     $id = $this->input->post("id");
		$path = $this->input->post("path");
		$this->slide->delete($id, $path);
    redirect('dashboard/slider');
   }
}
