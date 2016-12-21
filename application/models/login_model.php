<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public function __construct() {
			 parent::__construct();

     }

  public function login($email, $password)
  {
    //$condition = "mem_email =" . "'" . $data['email'] . "' AND " . "mem_pass =" . "'" . $data['password'] . "' AND " . "mem_verify = 1";
    $this->db->select('*');
    $this->db->from('members');
    $this->db->where("(mem_email = '$email' OR mem_username = '$email')");
		$this->db->where('mem_pass', $password);
		$this->db->where('mem_verify', 1);
    $this->db->limit(1);
    $query = $this->db->get();

    if($query->num_rows() == 1){
      return TRUE;
    }else{
      return FALSE;
    }
  }

	public function login_admin($data)
	{
		$condition = "admin_email =" . "'" . $data['email'] . "' AND " . "admin_password =" . "'" . $data['password'] . "'";
    $this->db->select('*');
    $this->db->from('admin');
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
    //$condition = "mem_email =" . "'" . $email . "'";
    $this->db->select('*');
    $this->db->from('members');
    $this->db->where("(mem_email = '$email' OR mem_username = '$email')");
    $this->db->limit(1);
    $query = $this->db->get();

    if($query->num_rows() == 1){
      return $query->result();
    }else{
      return FALSE;
    }
  }

	public function get_dataadmin($email)
	{
		$condition = "admin_email =" . "'" . $email . "'";
    $this->db->select('*');
    $this->db->from('admin');
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
