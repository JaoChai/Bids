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

   public function getone($id)
   {
     $this->db->select('*');
     $this->db->from('auction');
     $this->db->where('auc_id', $id);
     $query = $this->db->get();

     if($query->num_rows() > 0){
       return $query->row();
     }
   }

   public function insert($ar = array())
   {
     $this->db->insert("auction", $ar);
   }

   public function update($id, $data = array())
   {
     $this->db->where('auc_id', $id)->update('auction', $data);
   }

   public function updatetext($id, $data = array())
   {
     $this->db->where('auc_id', $id)->update('auction', $data);
   }

   public function delete($id, $path)
   {
     $this->db->where("auc_id", $id)->delete("auction");
   if($this->db->affected_rows() >= 1){
       if(unlink($path))
       return TRUE;
     } else {
       return FALSE;
     }
   }

}
