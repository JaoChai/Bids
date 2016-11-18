<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auction_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }

   public function getall()
   {
     $this->db->select('*');
     $this->db->from('auction');
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->result();
     }
   }

   public function getcate()
   {
     $this->db->select('*');
     $this->db->from('categories');
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->result();
     }
   }

   public function insert($ar = array())
   {
     $this->db->insert("auction", $ar);
   }

   public function getidauc(){
     $this->db->select_max('auc_id');
		$res1 = $this->db->get("auction");
		if($res1->num_rows()> 0){

			$res2 = $res1->result_array();
			$result = $res2[0]['auc_id'];
		}

		return $result;
   }

   public function insert_final($data = array()){
     $this->db->insert("final", $data);
   }
}
