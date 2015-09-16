<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Director extends CI_Controller {

	public function index(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/director';
		$config['total_rows'] = $this->db->get('directors')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 2;

		$this->pagination->initialize($config);
		 
		$data['records'] = $this->db->get('directors',10, $this->uri->segment(2) );
		
		$this->load->view('directors_list', $data);
	}

	public function create_new() {
		$data['errors'] = array();

		if($this->session->userdata('is_logged_in') == true){
			$this->load->view('create_new_director', $data);
		}
		else{
			$this->load->view('404');
		}
	}

}