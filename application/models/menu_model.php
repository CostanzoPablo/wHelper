<?php

class Menu_model extends CI_Model {

    public function new_menu($title, $parent, $text){ 
    	$this->db->set('title', $title);
		$this->db->set('parent', $parent);
		$this->db->set('text', $text);
		$this->db->insert('menu'); 
    }

    public function get_menu($parent){ 
        $this->db->from('menu');
        $this->db->where('parent', $parent);
        $this->db->order_by('title', 'ASC');
        return $this->db->get()->result_array();
    }

    public function delete_menu($id){ 
        $this->db->where('id', $id);
        $this->db->delete('menu'); 
    }

    public function update_menu($id, $title, $text){ 
        $this->db->where('id', $id);
        $this->db->update('menu', array('title' => $title, 'text' => $text));
    }

    public function delete_childrens($id){ 
        $this->db->where('parent', $id);
        $this->db->delete('menu'); 
    }       
}