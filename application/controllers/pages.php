<?php

class Pages extends CI_Controller {
	
	public function _remap($page, $params = array()) {
		$this->load->model('Pages_model');
		
		$data['name'] = $page;
		$data['list'] = $this->Pages_model->get_list();
		
		if ($page == 'index') {
			$page = "Home";
		}
		
		$data['content'] = $this->Pages_model->get_content($page);
		
		$this->load->view('template', $data);
	}
	
}