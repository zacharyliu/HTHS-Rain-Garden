<?php

class Plants extends CI_Controller {
	
	public function index() {
		$this->load->model('Pages_model');
		
		$data['name'] = 'Plants';
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->database();
		$query = $this->db->get('plants');
		$plant_data['data'] = $query->result();
		
		$data['content'] = $this->load->view('plants_view', $plant_data, true);
		
		$this->load->view('template', $data);
	}
	
}