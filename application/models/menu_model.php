<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }

   public function getall()
   {
     $this->db->select('*');
     $this->db->from('menu');
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->result();
     }
   }

   public function getmenufont()
   {
     $this->db->select('menu_name');
     $this->db->from('menu');
     //$this->db->where('menu_name', 'ผู้ชนะประมูล');
     $this->db->limit(1, 2);
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->result();
     }
   }
   public function getmenu($id)
   {
     $this->db->select("*");
    $this->db->from("menu");
    $this->db->where("menu_id", $id);
    $query = $this->db->get();

    if($query->num_rows() > 0){
      return $query->row();
    }
   }

   public function insert($ar = array())
   {
     $this->db->insert('menu', $ar);
   }

   public function update($id, $ar = array())
   {
     $this->db->where("menu_id", $id)->update("menu", $ar);
   }
}
