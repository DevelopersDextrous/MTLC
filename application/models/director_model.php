<?php 
class Director_model extends CI_Model {

	public function entry_new_director(){
		$new_director_data = array(
			'name' => $this->input->post('name'),
			'branch' => $this->input->post('branch'),
			'designation' => $this->input->post('designation'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('desc')
			);

		$new = $this->db->insert('directors', $new_director_data);

		if($new)
			return true;
		else
			return false;
	}
}