<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index(){
		$this->load->view('create_article');
	}

	public function publish(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('author', 'Author Name' , 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');

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
			{
				$this->article_list();
			}		   		
		   	else
		   		echo "failure";
		}

		
	}

	public function article_list(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/article/article_list';
		$config['total_rows'] = $this->db->get('article')->num_rows();
		$config['per_page'] = 4;
		$config['num_links'] = 5;

		$this->pagination->initialize($config);
		$this->db->order_by("id", "desc"); 
		$data['records'] = $this->db->get('article',4, $this->uri->segment(3) );
		
		$this->load->view('show_article_list', $data);

	}

	public function article_list_delete(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/article/article_list_delete';
		$config['total_rows'] = $this->db->get('article')->num_rows();
		$config['per_page'] = 4;
		$config['num_links'] = 5;

		$this->pagination->initialize($config);

		$data['records'] = $this->db->get('article',4, $this->uri->segment(3) );
		
		$this->load->view('show_article_list_for_delete', $data);

	}

	public function show_article(){
		$aid = $_GET['id'];
		$this->load->model('article_model');
		$data['records'] = $this->article_model->get_article($aid);
		$this->load->view('show_article', $data);

	}

	public function delete_article(){
		$aid = $_GET['id'];
		$this->load->model('article_model');
		$this->article_model->delete_article($aid);
		$this->article_list_delete();

	}


	public function check_author_name($author){
		if ($author == "")
		{
			$this->form_validation->set_message('check_author_name', 'This field is requird');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}