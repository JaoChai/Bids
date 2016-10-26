<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }

   public function getall()
   {
     $this->db->select('*');
     $this->db->from('categories');
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->result();
     }
   }

   public function getcate($id)
   {
     $this->db->select('*');
     $this->db->from('categories');
     $this->db->where('cate_id', $id);
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->row();
     }
   }

   public function insert($ar = array())
   {
     $this->db->insert('categories', $ar);
   }

   public function update($id, $ar = array())
   {
     $this->db->where("cate_id", $id)->update("categories", $ar);
   }
 }
