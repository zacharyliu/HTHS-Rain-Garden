<?php

class Adopt_model extends CI_Model {
	
	public function get_all() {
		
	}
	
	public function get_info($id) {
		$this->load->database();
		
		$this->db->where('id', $id);
		$this->db->from('garden');
		$query = $this->db->get();
		if ($query->num_rows() < 1) {
			return false;
		} else {
			return $query->row();
		}
	}
	
}