<?php

class User extends CI_Controller {
	
	private function _hash_pw($password) {
		return sha1($password.$this->config->item('encryption_key'));
	}
	
	public function login($action = null) {
		if ($action == "submit") {
			$this->load->library('input');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->simplelogin->login($username, $password);
			
			$this->load->helper('url');
			redirect('');
		}
		
		$data['content'] = $this->load->view('login_view', '', true);
		$data['name'] = 'Login';
		
		$this->load->model('Pages_model');
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data);
	}
	
	public function register($action = null) {
		if ($action == "submit") {
			$this->load->library('input');
			$password = $this->input->post('password');
			$confirmpassword = $this->input->post('confirmpassword');
			
			if ($password == $confirmpassword) {
				$username = $this->input->post('username');
				
				$this->simplelogin->create($username, $password);
				$this->load->helper('url');
				redirect('');
				return;
			}
		}
	
		$this->load->library('input');
		$this->load->database();
		
		$data['content'] = $this->load->view('register_view', '', true);
		$data['name'] = 'Login';
		
		$this->load->model('Pages_model');
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data);
	}
	
	public function logout() {
		$this->simplelogin->logout();
		$this->load->helper('url');
		redirect('');
	}
	
}