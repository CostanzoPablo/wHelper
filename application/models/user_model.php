<?php

class User_model extends CI_Model {

    public function login($user, $pass){ 
        $this->db->from('users'); 
		$this->db->where(array('user' => $user, 'pass' => $pass));
        return $this->db->get()->result();
    }

}
