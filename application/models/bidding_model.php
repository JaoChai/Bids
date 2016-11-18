<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bidding_model extends CI_Model {

	public function __construct() {
			 parent::__construct();

     }

  public function updatebid($id, $data = array()){
      $this->db->where("auc_id", $id)->update("auction", $data);
  }

  public function updatestatus($id){
    $data = array(
      'auc_status' => 1
    );
    $this->db->where("auc_id", $id)->update("auction", $data);
  }
}
