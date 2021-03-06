<?php

class Adopt extends CI_Controller {
	
	public function index() {
		$name = "Adopt";
		$content = $this->load->view('adopt_view', '', true);
		
		$this->template->render($name, $content);
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
			$data2['info'] = array();
			foreach ($info as $key=>$value) {
				$data2['info'][$key] = $value;
			}
			
			if ($data->adopter_name == "") {
				$data2['adopt_box'] = $this->load->view('adopt/none', array('id' => $data->id), true);
			} else {
				$data2['adopt_box'] = $this->load->view('adopt/adopted', array('adopter' => $data->adopter_name), true);
			}
			
			$this->load->view('adopt_info_view', $data2);
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
				
				$content = $this->load->view('adopt_add_view', $form_data, true);
				$name = "Add Garden Plant";
				
				$this->template->render($name, $content);
			}
		} else {
			$this->load->helper('url');
			redirect('adopt');
		}
	}
	
	public function adopted() {
		$this->load->model('Adopt_model');
		$plants = $this->Adopt_model->get_all();
		$adopted = array();
		foreach ($plants as $item) {
			if ($item->adopter_name != "") {
				$adopted[] = array('id' => $item->id, 'adopter_name' => $item->adopter_name, 'adopter_email' => $item->adopter_email);
			}
		}
		$this->load->view('json', array('data' => $adopted));
	}
}