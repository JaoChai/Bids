<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_model extends CI_Model {

	public function __construct() {
			 parent::__construct();
     }

    public function insert($data = array())
    {
      $this->db->insert('members', $data);
    }

		public function getmembers($id)
		{
			$this->db->select('*');
			$this->db->from('members');
			$this->db->where("mem_id", $id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function getaddress($id)
		{
			$this->db->select('mem_tel, mem_address, mem_district, mem_postcode');
			$this->db->from('members');
			$this->db->where('mem_id', $id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function update($id, $data = array())
		{
			$this->db->where("mem_id", $id)->update("members", $data);
		}

		public function update_address($id, $data = array())
		{
			$this->db->where('mem_id', $id)->update("members", $data);
		}
}
