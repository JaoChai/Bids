<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_model extends CI_Model {

	public function __construct() {
			 parent::__construct();
     }

    public function insert($data = array())
    {
      $this->db->insert('members', $data);
    }
}
