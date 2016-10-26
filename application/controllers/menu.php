<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->model("menu_model", "menu");
       $this->load->library("form_validation");
   }

   public function insert()
   {
     $config = array(
      array(
        "field" => "namemenu",
        "label" => "Name Menu",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      ),
      array(
        "field" => "site_title",
        "label" => "Page Site Title",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      ),
      array(
        "field" => "meta_des",
        "label" => "Page Meta Tag(Description)",
        "rules" =>"required",
        'errors' => array(
                      'required' => 'กรุณากรอก %s.',
              )
      ),
      array(
        "field" => "meta_key",
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
    $data['result'] = $this->menu->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('dashboard/menu', $data);
    $this->load->view('layout_dashboard/footer');
  } else {
    $data = array(
      'menu_name' => $this->input->post('namemenu'),
      'menu_title' => $this->input->post('site_title'),
      'menu_meta_des' => $this->input->post('meta_des'),
      'menu_meta_key' => $this->input->post('meta_key'),
      'menu_description' => $this->input->post('cke_editor1')
    );

    $this->menu->insert($data);
    redirect('dashboard/menu');
  }

  }

  public function getmenu($id)
  {
    $res['res'] = $this->menu->getmenu($id);
    $data['result'] = $this->menu->getall();
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar', $data);
    $this->load->view('crud/editmenu', $res);
    $this->load->view('layout_dashboard/footer');
  }

  public function update()
  {
    $id = $this->input->post('id');

    $config = array(
     array(
       "field" => "namemenu",
       "label" => "Name Menu",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "site_title",
       "label" => "Page Site Title",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "meta_des",
       "label" => "Page Meta Tag(Description)",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "meta_key",
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
     $res['res'] = $this->menu->getmenu($id);
     $data['result'] = $this->menu->getall();
     $this->load->view('layout_dashboard/header');
     $this->load->view('layout_dashboard/navbar');
     $this->load->view('layout_dashboard/sitebar', $data);
     $this->load->view('crud/editmenu', $res);
     $this->load->view('layout_dashboard/footer');
   } else {
     $data = array(
       'menu_name' => $this->input->post('namemenu'),
       'menu_title' => $this->input->post('site_title'),
       'menu_meta_des' => $this->input->post('meta_des'),
       'menu_meta_key' => $this->input->post('meta_key'),
       'menu_description' => $this->input->post('cke_editor1')
     );
     $this->menu->update($id, $data);
     redirect($this->input->post('redirect'));
   }
  }
}
