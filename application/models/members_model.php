<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class members_model extends CI_Model {

  public function __construct() {
    parent::__construct();

  }

  public function getall(){
    $this->db->select('*');
    $this->db->from('members');
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function getbid($id){
    $this->db->select('*');
    $this->db->from('members');
    $this->db->where('mem_id', $id);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->row();
    }
  }

  public function updatebid($id, $data = array()){
    $this->db->where('mem_id', $id)->update('members', $data);
  }
}
