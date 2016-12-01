<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {

  function __construct() {
       parent::__construct();

     }

     public function getall()
     {
       $this->db->select('*');
       $this->db->from('admin');
       $query = $this->db->get();
       if($query->num_rows() > 0){
         return $query->result();
       }
     }

     public function getone($id)
     {
       $this->db->select('*');
       $this->db->from('admin');
       $this->db->where('admin_id', $id);
       $query = $this->db->get();
       if($query->num_rows() > 0){
         return $query->row();
       }
     }

     public function insert($data = array())
     {
       $this->db->insert('admin', $data);
     }

     public function update($id, $data = array())
     {
       $this->db->where('admin_id', $id)->update('admin', $data);
     }

     public function updatetext($id, $data = array())
     {
       $this->db->where('admin_id', $id)->update('admin', $data);
     }

     public function delete_admin($id, $path)
     {
       $this->db->where("admin_id", $id)->delete("admin");
     if($this->db->affected_rows() >= 1){
         if(unlink($path))
         return TRUE;
       } else {
         return FALSE;
       }
     }
  }
