<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class review extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->model("review_model", "review");
       $this->load->library("form_validation");
   }

   public function insert()
   {
     $conf['upload_path'] = "./uploads/review/";
     $conf['allowed_types'] = 'gif|jpg|png';
     $conf['max_size'] = '2048000';
     $conf['max_width'] = '';
     $conf['max_height'] = '';
     $conf['overwrite'] = 'TRUE';
     $conf['remove_spaces'] = 'TRUE';

      $this->load->library('upload', $conf);
      $config = array(
         array(
           "field" => "review_title",
           "label" => "Review Title",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         ),
         array(
           "field" => "review_name",
           "label" => "Review Name",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         ),
         array(
           "field" => "review_pbid",
           "label" => "Pbid",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         ),
         array(
           "field" => "des",
           "label" => "Description",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         )
     );
       $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
       $this->form_validation->set_rules($config);
       if($this->form_validation->run() == FALSE){

         $data['result'] = $this->review->getall();
         $this->load->view('layout_dashboard/header');
         $this->load->view('layout_dashboard/navbar');
         $this->load->view('layout_dashboard/sitebar');
         $this->load->view('dashboard/review', $data);
         $this->load->view('layout_dashboard/footer');
       }else{
         if(!$this->upload->do_upload()){
           $data['error'] = $this->upload->display_errors();
           $this->load->view('layout_dashboard/header');
           $this->load->view('layout_dashboard/navbar');
           $this->load->view('layout_dashboard/sitebar');
           $this->load->view('dashboard/review', $data);
           $this->load->view('layout_dashboard/footer');
         }else{
           $dataimg = $this->upload->data();
           $data = array(
             "review_title" => $this->input->post('review_title'),
             "review_img" => $dataimg['file_name'],
             "review_imgpath" => $dataimg['full_path'],
             "review_name" => $this->input->post('review_name'),
             "review_pbid" => $this->input->post('review_pbid'),
             "review_description" => $this->input->post('des')
           );
           //print_r($dataimg['full_path']);
           $this->review->insert($data);
         }
         redirect('dashboard/review');
       }
   }

   public function update($id)
   {
        $data['res'] = $this->review->getone($id);
        $this->load->view('layout_dashboard/header');
        $this->load->view('layout_dashboard/navbar');
        $this->load->view('layout_dashboard/sitebar');
        $this->load->view('crud/editreview', $data);
        $this->load->view('layout_dashboard/footer');

   }

   public function do_update()
   {
     $id = $this->input->post('id');
     $img = $this->input->post('img');
      $config = array(
         array(
           "field" => "review_title",
           "label" => "Review Title",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         ),
         array(
           "field" => "review_name",
           "label" => "Review Name",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         ),
         array(
           "field" => "review_pbid",
           "label" => "Pbid",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         ),
         array(
           "field" => "des",
           "label" => "Description",
           "rules" =>"required",
           'errors' => array(
                         'required' => 'กรุณากรอก %s.',
                 )
         )
     );
       $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
       $this->form_validation->set_rules($config);
       if($this->form_validation->run() == FALSE){
         $data['result'] = $this->review->getall();
         $this->load->view('layout_dashboard/header');
         $this->load->view('layout_dashboard/navbar');
         $this->load->view('layout_dashboard/sitebar');
         $this->load->view('dashboard/review', $data);
         $this->load->view('layout_dashboard/footer');

       }else{
         if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
           if(unlink('uploads/review/'.$img)){
             $conf['upload_path'] = "./uploads/review/";
             $conf['allowed_types'] = 'gif|jpg|png';
             $conf['max_size'] = '2048000';
             $conf['max_width'] = '';
             $conf['max_height'] = '';
             $conf['overwrite'] = 'TRUE';
             $conf['remove_spaces'] = 'TRUE';

              $this->load->library('upload', $conf);
              if(!$this->upload->do_upload()){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('crud/editreview', $data);
              }else{
                $dataimg = $this->upload->data();
                $data = array(
                  "review_title" => $this->input->post('review_title'),
                  "review_img" => $_FILES['userfile']['name'],
                  "review_imgpath" => $dataimg['full_path'],
                  "review_name" => $this->input->post('review_name'),
                  "review_pbid" => $this->input->post('review_pbid'),
                  "review_description" => $this->input->post('des')
                );
                $this->review->update($id, $data);
                redirect('dashboard/review');
              }
           }
       }else{
         redirect('dashboard/review');
       }

      }

   }

   public function delete()
   {
    $id = $this->input->post("id");
		$path = $this->input->post("path");

		$this->review->delete($id, $path);
		redirect("dashboard/review");
   }
 }
