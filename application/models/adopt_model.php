<?php

class Adopt_model extends CI_Model {
	
	public function get_all() {
		
	}
	
	public function get_info($id) {
		$this->load->database();
		
		$this->db->select('content');
		$this->db->where('id', $id);
		$this->db->from('garden');
		$query = $this->db->get();
		
		$result = $query->row();
		
		return $result->content;
	}
	
}