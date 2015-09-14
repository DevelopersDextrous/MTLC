<?php

class Login_model extends CI_Model {

	public function validate_credentials($data){
		$d = array(
               'user_name' => $data['uname'],
               'password' => md5($data['pwd'])
            );

		$q = $this->db->select('first_name, last_name')             
					-> from('admin')
					->where($d)
					->get();
					 

		// $q = $this->db->query('SELECT first_name, last_name FROM admin WHERE user_name = $data['user_name'] and password = md5($data['password'])
		// ');

		if($q->num_rows() == 1){
			return $q->result();
			echo "blah blah";
			echo $q->first_name;
			echo $q->last_name;
		}
		else {
			return FALSE;
		}
	}

	public function entry_new_admin(){
		$new_admin_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'user_name' => $this->input->post('user_name'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
			);

		$new = $this->db->insert('admin', $new_admin_data);

		if($new)
			return true;
		else
			return false;
	}
}