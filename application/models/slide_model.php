<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slide_model extends CI_Model {

  function __construct() {
       parent::__construct();
   }

   public function getall()
   {
     $this->db->select("img_name, img_id, img_path");
		$this->db->from("img_slider");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
      }
   }

   public function insert($img_data = array())
   {
     $data = array(
       'img_name' => $img_data['file_name'],
       'img_path' => $img_data['full_path']
     );
     $this->db->insert('img_slider', $data);
   }

   public function delete($id, $path)
   {
     $this->db->where("img_id", $id)->delete("img_slider");
   if($this->db->affected_rows() >= 1){
       if(unlink($path))
       return TRUE;
   } else {
       return FALSE;
   }
   }
}
