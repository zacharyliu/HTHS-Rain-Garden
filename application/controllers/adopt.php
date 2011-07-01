<?php

class Adopt extends CI_Controller {
	
	public function index() {
		$this->load->model('Adopt_model');
		$this->load->model('Pages_model');
		
		$data['name'] = "Adopt";
		$data['content'] = "testing";
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data);
	}
	
	public function view($format = "html") {
		
	}
	
}