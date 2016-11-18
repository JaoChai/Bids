<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public function __construct() {
			 parent::__construct();

     }

  public function login($data)
  {
    $condition = "mem_email =" . "'" . $data['email'] . "' AND " . "mem_pass =" . "'" . $data['password'] . "'";
    $this->db->select('*');
    $this->db->from('members');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if($query->num_rows() == 1){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function get_data($email)
  {
    $condition = "mem_email =" . "'" . $email . "'";
    $this->db->select('*');
    $this->db->from('members');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if($query->num_rows() == 1){
      return $query->result();
    }else{
      return FALSE;
    }
  }
}
