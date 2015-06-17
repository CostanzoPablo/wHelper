<?php

class Error_model extends CI_Model {

	public function new_error($error){
		$this->db->insert('error', array('error' => $error)); 
	}
}
