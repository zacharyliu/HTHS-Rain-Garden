<?php

class User extends CI_Controller {
	
	public function login($username = null, $password = null) {
		if ($username != null && $password != null) {
			$this->load->library('input');
			$this->load->database();
			
		}
		
		$data['content'] = $this->load->view('login_view', '', true);
		$data['name'] = 'Login';
		
		$this->load->model('Pages_model');
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data);
	}
	
	public function register() {
		$this->load->library('input');
		$this->load->database();
		
		$data['content'] = $this->load->view('register_view', '', true);
		$data['name'] = 'Login';
		
		$this->load->model('Pages_model');
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data);
	}
	
}