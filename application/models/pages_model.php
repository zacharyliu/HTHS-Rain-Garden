<?php

class Pages_model extends CI_Model {
	
	public function get_list() {
		$this->load->database();
		$this->db->select('name');
		$this->db->from('pages');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_content($name) {
		$this->load->database();
		$this->db->where('name', $name);
		$this->db->select('content');
		$this->db->from('pages');
		$query = $this->db->get();
		$result = $query->result();
	}
	
	public function edit($name, $content) {
		
	}
	
}