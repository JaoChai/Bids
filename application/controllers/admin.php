<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

  function __construct() {
       parent::__construct();
       $this->load->library(array('ion_auth','form_validation'));
 			$this->load->helper(array('url','language'));

       $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
       $this->lang->load('auth');
     }

     public function create_user()
     {

       $this->data['title'] = $this->lang->line('create_user_heading');

       if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
       {
           redirect('dashboard/index', 'refresh');
       }

       $tables = $this->config->item('tables','ion_auth');
       $identity_column = $this->config->item('identity','ion_auth');
       $this->data['identity_column'] = $identity_column;

       // validate form input
       $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
       $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
       if($identity_column!=='email')
       {
           $this->form_validation->set_rules('identity',$this->lang->line('create_user_validation_identity_label'),'required|is_unique['.$tables['users'].'.'.$identity_column.']');
           $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
       }
       else
       {
           $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
       }
       $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
       $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

       if ($this->form_validation->run() == true)
       {
         $conf['upload_path'] = "./uploads/";
         $conf['allowed_types'] = 'gif|jpg|png';
         $conf['max_size'] = '2048000';
         $conf['max_width'] = '';
         $conf['max_height'] = '';
         $conf['overwrite'] = 'TRUE';
         $conf['remove_spaces'] = 'TRUE';

         $this->load->library('upload', $conf);
         if(!$this->upload->do_upload()){
           $this->data['error'] = $this->upload->display_errors();
           $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
           $this->data['first_name'] = array(
               'name'  => 'first_name',
               'id'    => 'first_name',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('first_name'),
           );
           $this->data['last_name'] = array(
               'name'  => 'last_name',
               'id'    => 'last_name',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('last_name'),
           );
           $this->data['identity'] = array(
               'name'  => 'identity',
               'id'    => 'identity',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('identity'),
           );
           $this->data['email'] = array(
               'name'  => 'email',
               'id'    => 'email',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('email'),
           );
           $this->data['password'] = array(
               'name'  => 'password',
               'id'    => 'password',
               'type'  => 'password',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('password'),
           );
           $this->data['password_confirm'] = array(
               'name'  => 'password_confirm',
               'id'    => 'password_confirm',
               'type'  => 'password',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('password_confirm'),
           );

           $this->data['user'] = $this->ion_auth->users()->result();
              $this->load->view('layout_dashboard/header');
              $this->_render_page('layout_dashboard/navbar');
              $this->_render_page('layout_dashboard/sitebar');
              $this->_render_page('dashboard/admin', $this->data);
              $this->_render_page('layout_dashboard/footer');

         }else{
           $email    = strtolower($this->input->post('email'));
           $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
           $password = $this->input->post('password');
           $dataimg = $this->upload->data();

              $additional_data = array(
                  'first_name' => $this->input->post('first_name'),
                  'last_name'  => $this->input->post('last_name'),
                  'img'        => $dataimg['file_name'],
                  'img_path'   => $dataimg['full_path'],
              );
              $this->ion_auth->register($identity, $password, $email, $additional_data);
              redirect("admin/create_user", 'refresh');
            }

       }
      //  if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data))
      //  {
      //      // check to see if we are creating the user
      //      // redirect them back to the admin page
      //      $this->session->set_flashdata('message', $this->ion_auth->messages());
      //      redirect("dashboard/index", 'refresh');
      //  }
       else
       {
           // display the create user form
           // set the flash data error message if there is one
           $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
           $this->data['first_name'] = array(
               'name'  => 'first_name',
               'id'    => 'first_name',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('first_name'),
           );
           $this->data['last_name'] = array(
               'name'  => 'last_name',
               'id'    => 'last_name',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('last_name'),
           );
           $this->data['identity'] = array(
               'name'  => 'identity',
               'id'    => 'identity',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('identity'),
           );
           $this->data['email'] = array(
               'name'  => 'email',
               'id'    => 'email',
               'type'  => 'text',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('email'),
           );

           $this->data['password'] = array(
               'name'  => 'password',
               'id'    => 'password',
               'type'  => 'password',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('password'),
           );
           $this->data['password_confirm'] = array(
               'name'  => 'password_confirm',
               'id'    => 'password_confirm',
               'type'  => 'password',
               'class' => 'form-control',
               'value' => $this->form_validation->set_value('password_confirm'),
           );

           $this->data['users'] = $this->ion_auth->users()->result();
           foreach ($this->data['users'] as $k => $user)
			        {
				        $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			        }

              $this->load->view('layout_dashboard/header');
              $this->_render_page('layout_dashboard/navbar');
              $this->_render_page('layout_dashboard/sitebar');
              $this->_render_page('dashboard/admin', $this->data);
              $this->_render_page('layout_dashboard/footer');


            }
     }

     public function delete()
     {
      $this->load->model("setting_model", "setting");
      $id = $this->input->post("id");
   		$path = $this->input->post("path");
      $this->setting->delete_admin($id, $path);
   		redirect("admin/create_user", 'refresh');
     }


 public function edit_user($id)
	{
		$this->data['title'] = $this->lang->line('edit_user_heading');

		if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id)))
		{
			redirect('dashboard/index', 'refresh');
		}

		$user = $this->ion_auth->user($id)->row();
		$groups=$this->ion_auth->groups()->result_array();
		$currentGroups = $this->ion_auth->get_users_groups($id)->result();

		// validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required');
		$this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required');

		if (isset($_POST) && !empty($_POST))
		{
			// do we have a valid request?
			if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
			{
				show_error($this->lang->line('error_csrf'));
			}

			// update the password if it was posted
			if ($this->input->post('password'))
			{
				$this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
				$this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
			}

			if ($this->form_validation->run() === TRUE)
			{
				$data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name'  => $this->input->post('last_name'),

				);

				// update the password if it was posted
				if ($this->input->post('password'))
				{
					$data['password'] = $this->input->post('password');
				}

			// check to see if we are updating the user
			   if($this->ion_auth->update($user->id, $data))
			    {
			    	// redirect them back to the admin page if admin, or to the base url if non admin
				    $this->session->set_flashdata('message', $this->ion_auth->messages() );
				    if ($this->ion_auth->is_admin())
					{
						redirect('admin/create_user', 'refresh');
					}
					else
					{
						redirect('dashboard/login', 'refresh');
					}

			    }
			    else
			    {
			    	// redirect them back to the admin page if admin, or to the base url if non admin
				    $this->session->set_flashdata('message', $this->ion_auth->errors() );
				    if ($this->ion_auth->is_admin())
					{
						redirect('dashboard', 'refresh');
					}
					else
					{
						redirect('dashboard/index', 'refresh');
					}

			    }

			}
		}

		// display the edit user form
		$this->data['csrf'] = $this->_get_csrf_nonce();

		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		// pass the user to the view
		$this->data['user'] = $user;
		$this->data['groups'] = $groups;
		$this->data['currentGroups'] = $currentGroups;

		$this->data['first_name'] = array(
			'name'  => 'first_name',
			'id'    => 'first_name',
			'type'  => 'text',
      'class' => 'form-control',
			'value' => $this->form_validation->set_value('first_name', $user->first_name),
		);
		$this->data['last_name'] = array(
			'name'  => 'last_name',
			'id'    => 'last_name',
			'type'  => 'text',
      'class' => 'form-control',
			'value' => $this->form_validation->set_value('last_name', $user->last_name),
		);
		$this->data['password'] = array(
			'name' => 'password',
			'id'   => 'password',
			'type' => 'password',
      'class' => 'form-control'
		);
		$this->data['password_confirm'] = array(
			'name' => 'password_confirm',
			'id'   => 'password_confirm',
			'type' => 'password',
      'class' => 'form-control'
		);
    $this->load->view('layout_dashboard/header');
    $this->_render_page('layout_dashboard/navbar');
    $this->_render_page('layout_dashboard/sitebar');
		$this->_render_page('crud/edituser', $this->data);
    $this->_render_page('layout_dashboard/footer');
	}

     public function _get_csrf_nonce()
 {
   $this->load->helper('string');
   $key   = random_string('alnum', 8);
   $value = random_string('alnum', 20);
   $this->session->set_flashdata('csrfkey', $key);
   $this->session->set_flashdata('csrfvalue', $value);

   return array($key => $value);
 }

 public function _valid_csrf_nonce()
 {
   if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
     $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
   {
     return TRUE;
   }
   else
   {
     return FALSE;
   }
 }

     public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
     {
       $this->viewdata = (empty($data)) ? $this->data: $data;

        $view_html = $this->load->view($view, $this->viewdata, $returnhtml);

        if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
     }
  }
