<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }

   public function getall()
   {
     $this->db->select('*');
     $this->db->from('general_set');
     $query = $this->db->get();
     if($query->num_rows() > 0)
     {
       return $query->row();
     }
   }

   public function update($ar = array())
   {
     $this->db->where("general_id", 1)->update("general_set", $ar);
   }

   public function updatetext($data = array())
   {
     $this->db->where('general_id', 1)->update('general_set', $data);
   }

   public function delete_admin($id, $path)
   {
     $this->db->where("id", $id)->delete("users");
   if($this->db->affected_rows() >= 1){
       if(unlink($path))
       return TRUE;
     } else {
       return FALSE;
     }
   }
}
