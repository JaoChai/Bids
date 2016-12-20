<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('product_model', 'product');
  }

  public function bid_process()
  {
    $id = $this->input->post('auc_id');
    $mem_id = $this->input->post('mem_id');
    $user = $this->input->post('user');
    $bid = $this->product->getbid($mem_id);
    $item = $this->product->getitem($id);
    $membid = $this->product->getmembid($mem_id);
    date_default_timezone_set('Asia/Bangkok');
    $currentdate = date("Y-m-d H:i:s");
    if($item->auc_user == $user){
      $return['error'] = 1;
    }else if($membid->mem_bid < 1){
      $return['error'] = 2;
    }else{
      $totalbid = $bid->mem_bid - 1;
      $price = $item->auc_start;
      $bid_inc = $item->auc_bids_inc;
      $total = $price + $bid_inc;
      $data = array(
        'auc_start' => $total,
        'mem_id' => $mem_id,
        'auc_user' => $user
      );
      $data_history = array(
        'mem_id' => $mem_id,
        'auc_id' => $id,
        'mem_name' => $user,
        'auc_title' => $item->auc_item_title,
        'his_date' => $currentdate,
        'his_price' => $total
      );
      $data_bid = array(
        'mem_bid' => $totalbid
      );
      $this->product->insert_his($data_history);
      $this->product->update($id, $data);
      $this->product->updatebid($mem_id, $data_bid);
      //$item = $this->product->getitem($id);

      //$return['price'] = $total;
      //$return['user'] = $user;
      $return['id'] = $id;
    }
    echo json_encode($return);
  }

  public function update_time()
  {
    $id = $this->input->post('auc_id');
    $mem_id = $this->input->post('mem_id');
    $user = $this->input->post('user');
    $bid = $this->product->getbid($mem_id);
    $item = $this->product->getitem($id);
    $membid = $this->product->getmembid($mem_id);
    date_default_timezone_set('Asia/Bangkok');
    $currentdate = date("Y-m-d H:i:s");
    if($item->auc_user == $user){
      $return['error'] = 1;
    }else if($membid->mem_bid < 1){
      $return['error'] = 2;
    }else{
      $totalbid = $bid->mem_bid - 1;
      $price = $item->auc_start;
      $bid_inc = $item->auc_bids_inc;
      $total = $price + $bid_inc;
      $end_date = $item->auc_end_date;
      $end_date = strtotime($end_date);
      //$end_date = strtotime("+10 seconds", $end_date);
      $end_date = date("Y-m-d H:i:s", strtotime("+10 seconds", $end_date));
      $data = array(
        'auc_start' => $total,
        'auc_end_date' => $end_date,
        'mem_id' => $mem_id,
        'auc_user' => $user
      );
      $data_history = array(
        'mem_id' => $mem_id,
        'auc_id' => $id,
        'mem_name' => $user,
        'auc_title' => $item->auc_item_title,
        'his_date' => $currentdate,
        'his_price' => $total
      );
      $data_bid = array(
        'mem_bid' => $totalbid
      );
      $this->product->insert_his($data_history);
      $this->product->update($id, $data);
      $this->product->updatebid($mem_id, $data_bid);
      $return['end_date'] = $end_date;
  }
    echo json_encode($return);
}

  public function bid_winner()
  {
    date_default_timezone_set('Asia/Bangkok');
    $auc_id = $this->input->post('auc_id');
    $mem_id = $this->input->post('mem_id');
    $data = array(
      'win_date' => date("Y-m-d H:i:s"),
      'auc_id' => $auc_id,
      'mem_id' => $mem_id
    );
    $this->product->update_status_win($auc_id);
    $this->product->insert_win($data);
    $return['success'] = "success";
    echo json_encode($return);
  }

  public function bid_update()
  {
    $id = $_REQUEST['auc_id'];
    //$mem_id = $this->input->post('mem_id');
    $item = $this->product->getitem($id);
    $username = $item->auc_user;
    $price = $item->auc_start;

    $return['end_date'] = $item->auc_end_date;
    $return['user'] = $username;
    $return['price'] = $price;
    echo json_encode($return);
  }

  public function bid_history()
  {
    $id = $this->input->post('auc_id');
    $data['history'] = $this->product->gethistory($id);
    $this->load->library('table');
    $template = array(
      'table_open'            => '<table class="table table-bordered">',

      'thead_open'            => '<thead>',
      'thead_close'           => '</thead>',

      'heading_row_start'     => '<tr>',
      'heading_row_end'       => '</tr>',
      'heading_cell_start'    => '<th><h3>',
      'heading_cell_end'      => '</h3></th>',

      'tbody_open'            => '<tbody>',
      'tbody_close'           => '</tbody>',

      'row_start'             => '<tr>',
      'row_end'               => '</tr>',
      'cell_start'            => '<td><h4>',
      'cell_end'              => '</h4></td>',

      'row_alt_start'         => '<tr>',
      'row_alt_end'           => '</tr>',
      'cell_alt_start'        => '<td><h4>',
      'cell_alt_end'          => '</h4></td>',

      'table_close'           => '</table>'
    );
    $this->table->set_template($template);
    $this->table->set_heading(array('PRICE', 'USER', 'TIME'));
    if($data['history'] == ""){
      $this->table->add_row(array("", "No Data", ""));

    }else{
      foreach($data['history'] as $row){
        $this->table->add_row(array($row->his_price, $row->mem_name, date('H:i:s', strtotime($row->his_date))));
      }
    }

    echo $this->table->generate();
  }

  public function liftbid()
  {
    $id = $this->input->post('mem_id');
    $bid = $this->product->getbid($id);
    echo $bid->mem_bid;
  }
}
