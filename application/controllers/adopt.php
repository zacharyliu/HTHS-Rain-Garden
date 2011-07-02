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
			echo anchor(array('adopt', 'add', $id), "That plant is not in the database yet. Would you like to enter it in now?");
		} else {
			foreach ($data as $item) {
				echo $item;
			}
		}
	}
	
	public function add($id) {
		if ($id == "submit") {
			$this->load->library('input');
			$this->load->database();
			
			$data = array(
				'id' => $this->input->post('id'),
				'plant_type_id' => $this->input->post('plant_type_id'),
			);
			$this->db->insert('garden', $data);
		} else {
			$form_data['id'] = $id;
			$data['content'] = $this->load->view('adopt_add_view', $form_data, true);
			$data['name'] = "Add Garden Plant";
			
			$this->load->model('Pages_model');
			$data['list'] = $this->Pages_model->get_list();
			
			$this->load->view('template', $data);
		}
	}
}