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

    $this->load->library('upload', $conf);
    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');

    $config = array(
     array(
       "field" => "cate",
       "label" => "Category",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "item_title",
       "label" => "Item Title",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "item_des",
       "label" => "Description",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "price",
       "label" => "Price",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "auc_start",
       "label" => "Auction Start",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "bids_inc",
       "label" => "Bids Increment",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "start_date",
       "label" => "Start Date",
       "rules" =>"required",
       'errors' => array(
                     'required' => 'กรุณากรอก %s.',
             )
     ),
     array(
       "field" => "end_date",
       "label" => "End Date",
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
     $data = array(
           "auc_cate_id" => $this->input->post('cate'),
           "auc_item_title" => $this->input->post('item_title'),
           "auc_item_des" => $this->input->post('item_des'),
           "auc_price" => $this->input->post('price'),
           "auc_pic" => $_FILES['userfile']['name'],
           "auc_start" => $this->input->post('auc_start'),
           "auc_bids_inc" => $this->input->post('bids_inc'),
           "auc_start_date" => date('Y-m-d H:i:s', strtotime($start_date)),
           "auc_end_date" => date('Y-m-d H:i:s', strtotime($end_date))
         );

         $this->auction->insert($data);
         $max_aucid = $this->auction->getidauc();
         $data2 = array(
           'auc_id' => $max_aucid,
           'final_time' => date('Y-m-d H:i:s', strtotime($start_date))
         );
         $this->auction->insert_final($data2);

       }
         redirect('dashboard/openpenny');
       }
   }

   public function delete($id)
   {
     $this->db->where("auc_id", $id)->delete("auction");
     redirect('dashboard/auction_list');
   }
}
