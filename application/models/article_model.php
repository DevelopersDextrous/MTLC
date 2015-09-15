<?php 
class Article_model extends CI_Model {
	
	public function new_article($data){
		$new = $this->db->insert('article', $data);

		if($new)
			return true;
		else
			return false;

	}
}
 ?>