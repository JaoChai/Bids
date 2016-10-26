<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bidpackage_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }

   public function getall()
   {
     $this->db->select('*');
     $this->db->from('bidpackage');
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->result();
     }
   }

   public function getpackage($id)
   {
     $this->db->select('*');
     $this->db->from('bidpackage');
     $this->db->where("package_id", $id);
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->row();
     }
   }

   public function insert($ar = array())
   {
     $this->db->insert('bidpackage', $ar);
   }

   public function update($id, $ar = array())
   {
     $this->db->where("package_id", $id)->update("bidpackage", $ar);
   }
}
