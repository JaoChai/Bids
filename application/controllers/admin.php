<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

  function __construct() {
       parent::__construct();

       $this->load->model("admin_model", "admin");
   }

     public function insert()
     {
       $conf['upload_path'] = "./uploads/";
   		$conf['allowed_types'] = 'gif|jpg|png';
       $conf['max_size'] = '2048000';
       $conf['max_width'] = '';
       $conf['max_height'] = '';
       $conf['overwrite'] = 'TRUE';
       $conf['remove_spaces'] = 'TRUE';
       $conf['encrypt_name'] = 'TRUE';
       $new_name = time().$_FILES["userfile"]['name'];
       $conf['file_name'] = $new_name;

       $this->load->library('upload', $conf);

       $config = array(
        array(
          "field" => "fname",
          "label" => "First Name",
          "rules" =>"required",
        ),
        array(
          "field" => "lname",
          "label" => "Last Name",
          "rules" =>"required",
        ),
        array(
          "field" => "email",
          "label" => "Email",
          "rules" =>"required",
        ),
        array(
          "field" => "password",
          "label" => "Password",
          "rules" =>"required",
        ),
        array(
          "field" => "confpass",
          "label" => "Confirm Password",
          "rules" =>"required",
        )
      );
      $this->form_validation->set_message('required', 'กรุณากรอก %s');
      $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
      $this->form_validation->set_rules($config);
      if($this->form_validation->run() == FALSE)
      {

         $data['result'] = $this->admin->getall();
         $this->load->view('layout_dashboard/header');
         $this->load->view('layout_dashboard/navbar');
         $this->load->view('layout_dashboard/sitebar');
         $this->load->view('dashboard/admin', $data);
         $this->load->view('layout_dashboard/footer');

      }else {
        print_r($_FILES);
        if(!$this->upload->do_upload()){
          $data = array('error' => $this->upload->display_errors());
          $data['result'] = $this->admin->getall();
          $this->load->view('layout_dashboard/header');
          $this->load->view('layout_dashboard/navbar');
          $this->load->view('layout_dashboard/sitebar');
          $this->load->view('dashboard/admin', $data);
          $this->load->view('layout_dashboard/footer');
        }else{
          $dataimg = $this->upload->data();

          $data = array(
              "admin_email" => $this->input->post('email'),
              "admin_password" => md5($this->input->post('password')),
              "admin_fname" => $this->input->post('fname'),
              "admin_lname" => $this->input->post('lname'),
              "admin_newpic" => $dataimg['file_name'],
              "admin_pic" => $_FILES['userfile']['name'],
              "admin_picpath" => $dataimg['full_path']
            );

            $this->admin->insert($data);

          }
            redirect('dashboard/admin_index');
          }
     }

     public function delete()
     {
      $id = $this->input->post("id");
   		$path = $this->input->post("path");
      $this->admin->delete_admin($id, $path);
   		redirect("dashboard/admin_index", 'refresh');
     }


 public function edit_user($id)
	{
    $result['data'] = $this->admin->getone($id);
    $this->load->view('layout_dashboard/header');
    $this->load->view('layout_dashboard/navbar');
    $this->load->view('layout_dashboard/sitebar');
    $this->load->view('crud/edituser', $result);
    $this->load->view('layout_dashboard/footer');
  }

  public function do_update()
  {

    $id = $this->input->post('id');
    $img = $this->input->post('img');
    $config = array(
     array(
       "field" => "fname",
       "label" => "First Name",
       "rules" =>"required",
     ),
     array(
       "field" => "lname",
       "label" => "Last Name",
       "rules" =>"required",
     ),
     array(
       "field" => "email",
       "label" => "Email",
       "rules" =>"required",
     )
   );
       $this->form_validation->set_message('required', 'กรุณากรอก %s');
       $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
       $this->form_validation->set_rules($config);
       if($this->form_validation->run() == FALSE){
         $result['data'] = $this->admin->getone($id);
         $this->load->view('layout_dashboard/header');
         $this->load->view('layout_dashboard/navbar');
         $this->load->view('layout_dashboard/sitebar');
         $this->load->view('dashboard/editauction', $result);
         $this->load->view('layout_dashboard/footer');

       }else{
         if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
           if(unlink('uploads/'.$img)){
             $conf['upload_path'] = "./uploads/";
             $conf['allowed_types'] = 'gif|jpg|png';
             $conf['max_size'] = '2048000';
             $conf['max_width'] = '';
             $conf['max_height'] = '';
             $conf['overwrite'] = 'TRUE';
             $conf['remove_spaces'] = 'TRUE';
             $conf['encrypt_name'] = 'TRUE';
             $new_name = time().$_FILES["userfile"]['name'];
             $conf['file_name'] = $new_name;

              $this->load->library('upload', $conf);
              if(!$this->upload->do_upload()){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('crud/edituser', $data);
              }else{
                $dataimg = $this->upload->data();
                $data = array(
                  "admin_fname" => $this->input->post('fname'),
                  "admin_lname" => $this->input->post('lname'),
                  "admin_email" => $this->input->post('email'),
                  "admin_newpic" => $dataimg['file_name'],
                  "admin_pic" => $_FILES['userfile']['name'],
                  "admin_picpath" => $dataimg['full_path']
                );
                $this->admin->update($id, $data);
                redirect('dashboard/admin_index');
              }
           }
       }else{
         $data = array(
           "admin_fname" => $this->input->post('fname'),
           "admin_lname" => $this->input->post('lname'),
           "admin_email" => $this->input->post('email')
         );
         $this->admin->updatetext($id, $data);
         //print_r($_FILES['userfile']['name']);
        redirect('dashboard/admin_index');
      }

      }


  }

}
