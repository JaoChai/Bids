<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class review_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }


   public function getall()
   {
      $this->db->select('*');
      $this->db->from('review');
      $query = $this->db->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
   }

   public function getone($id)
   {
     $this->db->select('*');
     $this->db->from('review');
     $this->db->where('review_id', $id);
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->row();
     }
   }

   public function insert($data)
   {
     $this->db->insert('review', $data);
   }

   public function update($id, $data = array())
   {
     $this->db->where('review_id', $id)->update('review', $data);
   }

   public function delete($id, $path)
   {
     $this->db->where("review_id", $id)->delete("review");
   if($this->db->affected_rows() >= 1){
       if(unlink($path))
       return TRUE;
     } else {
       return FALSE;
     }
   }
}
