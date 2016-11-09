<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class package extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->model("bidpackage_model", "package");
       $this->load->library("form_validation");
   }

   public function insert()
   {
     $config = array(
      array(
        "field" => "bid_package",
        "label" => "Bid",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      ),
      array(
        "field" => "package_cost",
        "label" => "Cost",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      )
    );
    $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
    $this->form_validation->set_rules($config);
    if($this->form_validation->run() == FALSE)
    {
      $data['result'] = $this->package->getall();
      $this->load->view('layout_dashboard/header');
      $this->load->view('layout_dashboard/navbar');
      $this->load->view('layout_dashboard/sitebar');
      $this->load->view('dashboard/bidpackage', $data);
      $this->load->view('layout_dashboard/footer');
    }else {
      $data = array(
        'package_bid' => $this->input->post('bid_package'),
        'package_cost' => $this->input->post('package_cost')
      );

      $this->package->insert($data);
      redirect('dashboard/bidpackage');
    }
   }

   public function update($id)
   {
     $config = array(
      array(
        "field" => "bid_package",
        "label" => "Bid",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      ),
      array(
        "field" => "package_cost",
        "label" => "Cost",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      )
    );
    $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
    $this->form_validation->set_rules($config);
    if($this->form_validation->run() == FALSE)
    {
      $data['res'] = $this->package->getpackage($id);
      $this->load->view('layout_dashboard/header');
      $this->load->view('layout_dashboard/navbar');
      $this->load->view('layout_dashboard/sitebar');
      $this->load->view('crud/editpackage', $data);
      $this->load->view('layout_dashboard/footer');
    }else {
      $id = $this->input->post("id");
      $data = array(
        'package_bid' => $this->input->post('bid_package'),
        'package_cost' => $this->input->post('package_cost')
      );

      $this->package->update($id, $data);
      redirect('dashboard/bidpackage');
    }
   }

   public function delete($id)
   {
     $this->db->where("package_id", $id)->delete("bidpackage");
			redirect("dashboard/bidpackage");
   }
}
