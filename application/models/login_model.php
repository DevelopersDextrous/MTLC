<?php

class Login_model extends CI_Model {

	public function validate_credentials($data){
		$d = array(
               'user_name' => $data['uname'],
               'password' => md5($data['pwd'])
            );

		$this->db->select('id');             
		$this->db->from('admin');			
		$this->db->where($d);
		$q = $this->db->get();


		// $uname = $data['uname'];
		// $pwd = md5($data['pwd']);
					 

		// $q = $this->db->query('SELECT id FROM admin WHERE user_name = "$uname" AND password = "$pwd"
		// ');

		// $sql = "SELECT first_name, last_name FROM admin WHERE user_name = ? AND password = ?"; 

		// $q = $this->db->query($sql, array($data['uname'], md5($data['pwd']) ));

		if($q->num_rows() == 1){
			return $q->result();
			
			}
		else {
			echo "nothing";
			//return FALSE;
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