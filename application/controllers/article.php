<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index(){
		$this->load->view('create_article');
	}

	public function publish(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('author', '', 'required');
		$this->form_validation->set_rules('title', '', 'required');
		$this->form_validation->set_rules('content', '', 'required');

		if($this->form_validation->run() == FALSE) {
			redirect('article');
		}
		else
		{
			$data = array(
				'author' => $this->input->post('author'),
				'title' => $this->input->post('title'),
				'subtitle' => $this->input->post('subtitle'),
				'content' => $this->input->post('content'),
				'date_published' => date("Y/m/d")
				);


			$this->load->model('article_model');
			$p = $this->article_model->new_article($data);
			if($p)
		   		echo "success";
		   	else
		   		echo "failure";
		}

		
	}
}