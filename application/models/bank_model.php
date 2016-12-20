<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bank_model extends CI_Model {

  public function __construct() {
    parent::__construct();

  }

  public function getall(){
    $this->db->select('*');
    $this->db->from('bank');
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function gettransfer(){
    $this->db->select('*');
    $this->db->from('transfer_bid');
    $this->db->join('bidpackage', 'transfer_bid.package_id = bidpackage.package_id');
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function insert($data = array()){
    $this->db->insert('bank', $data);
  }

  public function insert_transferbid($data = array()){
    $this->db->insert('transfer_bid', $data);
  }
}
