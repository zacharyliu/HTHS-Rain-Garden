<?php

class Pages extends CI_Controller {
	
	public function _remap($page = "Home", $params = array()) {
		$this->load->model('Pages_model');
		
		$data['name'] = $page;
		$data['list'] = $this->Pages_model->get_list();
		
		if ($page == "adopt") {
			$data['content'] = "adopt page content";
		} else {
			$data['content'] = $this->Pages_model->get_content($page);
		}
		
		$this->load->view('template', $data);
	}
	
}