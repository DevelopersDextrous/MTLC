<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Director extends CI_Controller {

	public function director_list(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/director/director_list';
		$config['total_rows'] = $this->db->get('directors')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 3;

		$this->pagination->initialize($config);
		 
		$data['records'] = $this->db->get('directors',5, $this->uri->segment(3) );
		
		$this->load->view('directors_list', $data);
	}



}
