<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->model("setting_model", "setting");
       $this->load->library("form_validation");
   }

   public function update()
   {
     $img = $this->input->post('img');
     $config = array(
        array(
          "field" => "site_title",
          "label" => "Site Title",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "meta_des",
          "label" => "Meta (Description)",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "meta_key",
          "label" => "Meta (Key Word)",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "footer",
          "label" => "Footer",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "address",
          "label" => "Address",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "email",
          "label" => "Email",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "line",
          "label" => "Line",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "tel",
          "label" => "Telephone",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "facebook",
          "label" => "Facebook",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "youtube",
          "label" => "Youtube",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "twitter",
          "label" => "Twtitter",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        ),
        array(
          "field" => "google",
          "label" => "Google",
          "rules" =>"required",
          'errors' => array(
                        'required' => 'กรุณากรอก %s.',
                )
        )
    );
      $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
      $this->form_validation->set_rules($config);

      if($this->form_validation->run() == FALSE){
        $data['result'] = $this->setting->getall();
        //$this->session->set_flashdata('alert', '<div class="alert">' . validation_errors() . '</div>');
        $this->load->view('layout_dashboard/header');
        $this->load->view('layout_dashboard/navbar');
        $this->load->view('layout_dashboard/sitebar');
        $this->load->view('dashboard/setting', $data);
        $this->load->view('layout_dashboard/footer');
      }else{
        if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
          if(unlink('uploads/icon/'.$img)){
            $conf['upload_path'] = "./uploads/icon/";
            $conf['allowed_types'] = 'gif|jpg|png';
            $conf['max_size'] = '2048000';
            $conf['max_width'] = '';
            $conf['max_height'] = '';
            $conf['overwrite'] = 'TRUE';
            $conf['remove_spaces'] = 'TRUE';

             $this->load->library('upload', $conf);
           if(!$this->upload->do_upload()){

             $data['error'] = $this->upload->display_errors();
             $data['result'] = $this->setting->getall();
             $this->load->view('layout_dashboard/header');
             $this->load->view('layout_dashboard/navbar');
             $this->load->view('layout_dashboard/sitebar');
             $this->load->view('dashboard/setting', $data);
             $this->load->view('layout_dashboard/footer');

           }else{
          //print_r($_FILES);
        $data = array(
          "general_logo" => $_FILES['userfile']['name'],
          "general_site_title" => $this->input->post("site_title"),
          "general_meta_des" => $this->input->post("meta_des"),
          "general_meta_key" => $this->input->post("meta_key"),
          "general_footer" => $this->input->post("footer"),
          "general_address" => $this->input->post("address"),
          "general_email" => $this->input->post("email"),
          "general_line" => $this->input->post("line"),
          "general_tel" => $this->input->post("tel"),
          "general_facebook" => $this->input->post("facebook"),
          "general_youtube" => $this->input->post("youtube"),
          "general_twitter" => $this->input->post("twitter"),
          "general_google" => $this->input->post("google")
        );

        $this->setting->update($data);
        redirect("dashboard/setting");
          }
        }
        }else{
          $data = array(
            "general_site_title" => $this->input->post("site_title"),
            "general_meta_des" => $this->input->post("meta_des"),
            "general_meta_key" => $this->input->post("meta_key"),
            "general_footer" => $this->input->post("footer"),
            "general_address" => $this->input->post("address"),
            "general_email" => $this->input->post("email"),
            "general_line" => $this->input->post("line"),
            "general_tel" => $this->input->post("tel"),
            "general_facebook" => $this->input->post("facebook"),
            "general_youtube" => $this->input->post("youtube"),
            "general_twitter" => $this->input->post("twitter"),
            "general_google" => $this->input->post("google")
          );

          $this->setting->updatetext($data);
          redirect("dashboard/setting");
        }

    }
   }
  }
