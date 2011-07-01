<?php

class Adopt extends CI_Controller {
	
	public function index() {
		$this->load->model('Pages_model');
		
		$data['name'] = "Adopt";
		$data['content'] = $this->load->view('adopt_view', '', true);
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data);
	}
	
	public function view($id, $format = "html") {
		$this->load->model('Adopt_model');
		
		$this->Adopt_model->get_info($id);
	}
	
}