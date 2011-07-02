<?php

class Plants_model extends CI_Model {
	
	public function get_all() {
		$this->load->database();
		$query = $this->db->get('plants');
		return $query->result();
	}
	
	public function get($id) {
		$this->load->database();
		$this->db->where('id', $id);
		$this->db->from('plants');
		$query = $this->db->get();
		return $query->row();
	}
	
}