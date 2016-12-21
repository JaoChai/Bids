<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_model extends CI_Model {

	public function __construct() {
			 parent::__construct();
     }

    public function insert($data = array())
    {
      return $this->db->insert('members', $data);
    }

		public function getmembers($id)
		{
			$this->db->select('*');
			$this->db->from('members');
			$this->db->where("mem_id", $id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function getaddress($id)
		{
			$this->db->select('mem_tel, mem_address, mem_district, mem_postcode');
			$this->db->from('members');
			$this->db->where('mem_id', $id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function update($id, $data = array())
		{
			$this->db->where("mem_id", $id)->update("members", $data);
		}

		public function update_address($id, $data = array())
		{
			$this->db->where('mem_id', $id)->update("members", $data);
		}

		public function change_password()
		{
			$session_data = $this->session->userdata('logged_in');
			$this->db->select('mem_id');
			$this->db->where('mem_username', $session_data['username']);
			$this->db->where('mem_pass', md5($this->input->post('oldpassword')));
			$query = $this->db->get('members');

			if($query->num_rows() > 0){
				$row = $query->row();
				if($row->mem_id === $session_data['id']){
					$data = array(
						'mem_pass' => md5($this->input->post('password'))
					);
					$this->db->where('mem_username', $session_data['username']);
					$this->db->where('mem_pass', md5($this->input->post('oldpassword')));
					if($this->db->update('members', $data)){
						return "Password Changed Successfully";
					}else{
						return "เกิดข้อผิดพลาด ไม่สามารถเปลี่ยนรหัสได้";
					}
				}else{
					return "เกิดข้อผิดพลาด ไม่สามารถเปลี่ยนรหัสได้";
				}
			}else{
				return "รหัสผ่านเก่าไม่ถูกต้อง";
			}
		}

		public function findusername($username)
		{
			$query = $this->db->where('mem_username', $username)->count_all_results('members');
			if($query == 0){
				return TRUE;
			}
			return FALSE;
		}

		public function findemail($email)
		{
			$query = $this->db->where('mem_email', $email)->count_all_results('members');
			if($query == 0){
				return TRUE;
			}
			return FALSE;
		}

		public function sendEmail($to_email, $username)
		{
			$from_email = 'webmaster@bidcups.com';
			$subject = 'Verify Your Email Address';
			$message = 'Dear '. $username .',<br /><br />Please click on the below activation link to verify your
			email address.<br /><br /> '.base_url().'home/verify/' . md5($to_email) . '<br /><br /><br />
			Thanks<br />Bidcups Team';

		$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'mail.bidcups.com',
		'smtp_port' => 25,
    'smtp_user' => $from_email,
    'smtp_pass' => '8uqT1S940',
    'mailtype'  => 'html',
    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
				//send mail
        $this->email->from($from_email, 'Bidcups');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
		}

		public function verifyEmail($key)
		{
			$data = array('mem_verify' => 1);
			$this->db->where('md5(mem_email)', $key);
			return $this->db->update('members', $data);
		}
}
