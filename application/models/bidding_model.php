<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bidding_model extends CI_Model {

	public function __construct() {
			 parent::__construct();

     }
		 public function getbid($id){
			 $this->db->select('mem_id, mem_bid');
			 $this->db->from('members');
			 $this->db->where('mem_id', $id);
			 $query = $this->db->get();
			 if($query->num_rows() > 0){
				 return $query->row();
			 }
		 }
}
