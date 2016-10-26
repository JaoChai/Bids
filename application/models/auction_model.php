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
}
