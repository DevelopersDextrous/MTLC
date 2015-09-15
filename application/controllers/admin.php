<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$this->load->view('admin_home');
	}

	public function validate() {
		$data['uname'] = $_POST['user_name'];
		$data['pwd'] = $_POST['password'];
		
		$this->load->model('login_model');
		$verify = $this->login_model->validate_credentials($data);

		if($verify){
			foreach ($verify as $key) {
				$newdata = array(
      			'user_id'  => $key->id,
      			'user_name'  => $_POST['user_name'],
      			'is_logged_in'  => TRUE,
    		);
   
   			$this->session->set_userdata($newdata);
   			print_r($newdata);

			}
			//$this->load->view('admin_home');
		}
		else{
			echo "error";
		}
	}

	public function create_new() {
		$this->load->view('create_new_admin');
	}

	public function confirm_new_admin()
	{
		$this->load->library('form_validation');
  
	  	$this->form_validation->set_rules('user_name', 'Username', 'trim|required|min_length[4]');
	  	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	  	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
	  	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');

	  	if($this->form_validation->run() == FALSE)
	  	{
	   		echo "error";
	  	}
	  	else
	  	{
	  		$this->load->model('login_model');
	   		$p = $this->login_model->entry_new_admin();
	   		if($p)
	   			echo "success";
	   		else
	   			echo "failure";
	  	}
	}

	public function load_admin_list()
	{
		$this->load->model('login_model');
		$d['result'] = $this->login_model->get_admin();
		$count = $this->login_model->get_count();

		if($count == 1) {
			$d['stat'] = 1;
		}
		else {
			$d['stat'] = 0;	
		}


		$this->load->view('admin_list', $d);
	}

	public function delete_admin(){
		$id = $_GET['id'];

		$this->load->model('login_model');

		$d = $this->login_model->delete_admin($id);

		if($d) {
			$this->load_admin_list();
		}
	}
}
