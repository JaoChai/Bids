<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model("category_model", "cate");
    $this->load->library("form_validation");
  }

  public function insert()
  {
    $config = array(
      array(
        "field" => "namecate",
        "label" => "Name Menu",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cate_title",
        "label" => "Page Site Title",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cate_meta_des",
        "label" => "Page Meta Tag(Description)",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cate_meta_key",
        "label" => "Page Meta Tag(Keyword)",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cke_editor1",
        "label" => "Description & Content",
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
      $data['result'] = $this->cate->getall();
      $this->load->view('layout_dashboard/header');
      $this->load->view('layout_dashboard/navbar');
      $this->load->view('layout_dashboard/sitebar');
      $this->load->view('dashboard/menu', $data);
      $this->load->view('layout_dashboard/footer');
    }else {
      $data = array(
        'cate_name' => $this->input->post('namecate'),
        'cate_title' => $this->input->post('cate_title'),
        'cate_meta_des' => $this->input->post('cate_meta_des'),
        'cate_meta_key' => $this->input->post('cate_meta_key'),
        'cate_description' => $this->input->post('cke_editor1')
      );

      $this->cate->insert($data);
      redirect('dashboard/category');
    }
  }

  public function update($id)
  {
    $config = array(
      array(
        "field" => "namecate",
        "label" => "Name Menu",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cate_title",
        "label" => "Page Site Title",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cate_meta_des",
        "label" => "Page Meta Tag(Description)",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cate_meta_key",
        "label" => "Page Meta Tag(Keyword)",
        "rules" =>"required",
        'errors' => array(
          'required' => 'กรุณากรอก %s.',
        )
      ),
      array(
        "field" => "cke_editor1",
        "label" => "Description & Content",
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
      $data['res'] = $this->cate->getcate($id);
      $this->load->view('layout_dashboard/header');
      $this->load->view('layout_dashboard/navbar');
      $this->load->view('layout_dashboard/sitebar');
      $this->load->view('crud/editcate', $data);
      $this->load->view('layout_dashboard/footer');
    }else {
      $id = $this->input->post("id");
      $data = array(
        'cate_name' => $this->input->post('namecate'),
        'cate_title' => $this->input->post('cate_title'),
        'cate_meta_des' => $this->input->post('cate_meta_des'),
        'cate_meta_key' => $this->input->post('cate_meta_key'),
        'cate_description' => $this->input->post('cke_editor1')
      );

      $this->cate->update($id, $data);
      redirect($this->input->post('redirect'));
    }
  }

  public function delete($id)
  {
    $this->db->where("cate_id", $id)->delete("categories");
    redirect("dashboard/category");
  }
}
