<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auction extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->model("auction_model", "auction");
       $this->load->library("form_validation");
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
    //$start_date = new Date();
    date_default_timezone_set('Asia/Bangkok');
    $end_date = $this->input->post('end_date');

    $config = array(
     array(
       "field" => "cate",
       "label" => "Category",
       "rules" =>"required",
     ),
     array(
       "field" => "item_title",
       "label" => "Item Title",
       "rules" =>"required",
     ),
     array(
       "field" => "item_des",
       "label" => "Description",
       "rules" =>"required",
     ),
     array(
       "field" => "price",
       "label" => "Price",
       "rules" =>"required",
     ),
     array(
       "field" => "auc_start",
       "label" => "Auction Start",
       "rules" =>"required",
     ),
     array(
       "field" => "bids_inc",
       "label" => "Bids Increment",
       "rules" =>"required",
     ),
     array(
       "field" => "end_date",
       "label" => "End Date",
       "rules" =>"required",
     )
   );
   $this->form_validation->set_message('required', 'กรุณากรอก %s');
   $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
   $this->form_validation->set_rules($config);
   if($this->form_validation->run() == FALSE)
   {

      $data['result'] = $this->auction->getall();
      $data['getcate'] = $this->auction->getcate();
      $this->load->view('layout_dashboard/header');
      $this->load->view('layout_dashboard/navbar');
      $this->load->view('layout_dashboard/sitebar');
      $this->load->view('dashboard/openpenny', $data);
      $this->load->view('layout_dashboard/footer');

   }else {
     if(!$this->upload->do_upload()){
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('dashboard/openpenny', $error);
     }else{
       $dataimg = $this->upload->data();

       //print_r($_FILES);
       $data = array(
           "auc_cate_id" => $this->input->post('cate'),
           "auc_item_title" => $this->input->post('item_title'),
           "auc_item_des" => $this->input->post('item_des'),
           "auc_price" => $this->input->post('price'),
           "auc_newpic" => $dataimg['file_name'],
           "auc_pic" => $_FILES['userfile']['name'],
           "auc_path" => $dataimg['full_path'],
           "auc_start" => $this->input->post('auc_start'),
           "auc_bids_inc" => $this->input->post('bids_inc'),
           "auc_start_date" => date('Y-m-d H:i:s'),
           "auc_end_date" => date('Y-m-d H:i:s', strtotime($end_date))
         );

         $this->auction->insert($data);

       }
         redirect('dashboard/openpenny');
       }
   }

   public function update($id)
   {
     $result['data'] = $this->auction->getone($id);
     $result['getcate'] = $this->auction->getcate();
     $this->load->view('layout_dashboard/header');
     $this->load->view('layout_dashboard/navbar');
     $this->load->view('layout_dashboard/sitebar');
     $this->load->view('crud/editauction', $result);
     $this->load->view('layout_dashboard/footer');
   }

   public function do_update()
   {
     date_default_timezone_set('Asia/Bangkok');
     $end_date = $this->input->post('start_date');
     $id = $this->input->post('id');
     $img = $this->input->post('img');
     $config = array(
      array(
        "field" => "cate",
        "label" => "Category",
        "rules" =>"required",
      ),
      array(
        "field" => "item_title",
        "label" => "Item Title",
        "rules" =>"required",
      ),
      array(
        "field" => "item_des",
        "label" => "Description",
        "rules" =>"required",
      ),
      array(
        "field" => "price",
        "label" => "Price",
        "rules" =>"required",
      ),
      array(
        "field" => "auc_start",
        "label" => "Auction Start",
        "rules" =>"required",
      ),
      array(
        "field" => "bids_inc",
        "label" => "Bids Increment",
        "rules" =>"required",
      ),
      array(
        "field" => "start_date",
        "label" => "Start Date",
        "rules" =>"required",
      )
    );
        $this->form_validation->set_message('required', 'กรุณากรอก %s');
        $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE){
          $result['data'] = $this->auction->getone($id);
          $result['getcate'] = $this->auction->getcate();
          $this->load->view('layout_dashboard/header');
          $this->load->view('layout_dashboard/navbar');
          $this->load->view('layout_dashboard/sitebar');
          $this->load->view('crud/editauction', $result);
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
                 $this->load->view('crud/editauction', $data);
               }else{
                 $dataimg = $this->upload->data();
                 $data = array(
                   "auc_cate_id" => $this->input->post('cate'),
                   "auc_item_title" => $this->input->post('item_title'),
                   "auc_item_des" => $this->input->post('item_des'),
                   "auc_price" => $this->input->post('price'),
                   "auc_newpic" => $dataimg['file_name'],
                   "auc_pic" => $_FILES['userfile']['name'],
                   "auc_path" => $dataimg['full_path'],
                   "auc_start" => $this->input->post('auc_start'),
                   "auc_bids_inc" => $this->input->post('bids_inc'),
                   "auc_end_date" => date('Y-m-d H:i:s', strtotime($end_date))
                 );
                 $this->auction->update($id, $data);
                 redirect('dashboard/auction_list');
               }
            }
        }else{
          $data = array(
            "auc_cate_id" => $this->input->post('cate'),
            "auc_item_title" => $this->input->post('item_title'),
            "auc_item_des" => $this->input->post('item_des'),
            "auc_price" => $this->input->post('price'),
            "auc_start" => $this->input->post('auc_start'),
            "auc_bids_inc" => $this->input->post('bids_inc'),
            "auc_end_date" => date('Y-m-d H:i:s', strtotime($end_date))
          );
          $this->auction->updatetext($id, $data);
          //print_r($_FILES['userfile']['name']);
         redirect('dashboard/auction_list');
       }

       }


   }

   public function delete($id)
   {
    $id = $this->input->post("id");
 		$path = $this->input->post("path");

 		$this->auction->delete($id, $path);
 		redirect("dashboard/auction_list");
   }
}
