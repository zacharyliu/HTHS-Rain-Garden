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
		
		$data = $this->Adopt_model->get_info($id);
		
		if ($data == false) {
			$this->load->helper('url');
			echo 'That plant is not in the database yet. ';
			if ($this->session->userdata('logged_in')) {
				echo anchor(array('adopt', 'add', $id), "Would you like to enter it in now?");
			}
		} else {
			$this->load->model('Plants_model');
			$id = $data->plant_type_id;
			$info = $this->Plants_model->get($id);
			echo $info->title;
		}
	}
	
	public function add($id) {
		if ($this->session->userdata('logged_in')) {
			if ($id == "submit") {
				$this->load->library('input');
				$this->load->database();
				
				$data = array(
					'id' => $this->input->post('id'),
					'plant_type_id' => $this->input->post('plant_type_id'),
				);
				$this->db->insert('garden', $data);
				
				$this->load->helper('url');
				redirect('/adopt');
			} else {
				$form_data['id'] = $id;
				
				$this->load->model('Plants_model');
				$form_data['plants'] = $this->Plants_model->get_all();
				
				$data['content'] = $this->load->view('adopt_add_view', $form_data, true);
				$data['name'] = "Add Garden Plant";
				
				$this->load->model('Pages_model');
				$data['list'] = $this->Pages_model->get_list();
				
				$this->load->view('template', $data);
			}
		} else {
			$this->load->helper('url');
			redirect('adopt');
		}
	}
}