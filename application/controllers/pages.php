<?php

class Pages extends CI_Controller {
	
	public function index() {
		$this->page("Home");
	}
	
	public function page($page) {
		$this->load->model('Pages_model');
		
		$data['name'] = $page;
		$data['list'] = $this->Pages_model->get_list();
		
		$data['content'] = $this->Pages_model->get_content($page);
		
		$this->load->view('template', $data);
	}
	
}