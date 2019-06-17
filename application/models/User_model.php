<?php

class User_model extends CI_Model {

	// method untuk membaca data profile user berdasar username
	public function getUserProfile($username){
		$query = $this->db->get_where('users', array('username' => $username));
		return $query->row_array();
	}
}

?>