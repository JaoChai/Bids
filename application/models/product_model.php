<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_model extends CI_Model {

  public function __construct() {
    parent::__construct();

  }

  public function getitem($id)
    {
      $this->db->select('*');
      $this->db->from('auction');
      $this->db->where('auc_id', $id);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->row();
      }
    }

    public function getbid($id)
    {
      $this->db->select('mem_bid');
      $this->db->from('members');
      $this->db->where('mem_id', $id);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->row();
      }
    }

  public function gethistory($id)
  {
    $this->db->select('*');
    $this->db->from('history');
    $this->db->where('auc_id', $id);
    $this->db->order_by('his_price', 'DESC');
    $this->db->limit(3);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }
  }

  public function getmembid($id)
  {
    $this->db->select('*');
    $this->db->from('members');
    $this->db->where('mem_id', $id);
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->row();
    }
  }

  public function update($id, $data = array())
  {
    $this->db->where('auc_id', $id)->update('auction', $data);
  }

  public function updatebid($id, $data = array())
  {
    $this->db->where('mem_id', $id)->update('members', $data);
  }

  public function insert_win($data = array())
  {
    $this->db->insert('winner', $data);
  }

  public function update_status_win($id)
  {
    $data = array(
      'auc_status' => 1
    );
    $this->db->where('auc_id', $id)->update('auction', $data);
  }

  public function insert_his($data = array())
  {
    $this->db->insert('history', $data);
  }
}
