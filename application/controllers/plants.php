<?php

class Plants extends CI_Controller {
	
	public function index() {
		$this->load->model('Pages_model');
		
		$data['name'] = 'Plants';
		$data['list'] = $this->Pages_model->get_list();
		
		$this->load->model('Plants_model');
		$plant_data['data'] = $this->Plants_model->get_all();
		$data['content'] = $this->load->view('plants_view', $plant_data, true);
		
		$this->load->view('template', $data);
	}
	
	public function edit($id) {
		if ($id == "submit") {
			$this->load->library('input');
			
			$data = array();
			
			$data['title'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');
			$data['links'] = $this->input->post('links');
			$data['image'] = $this->input->post('image');
			
			if ($this->input->post('id') == "") {
				$this->db->insert('plants', $data);
			} else {
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('plants', $data);
			}
			
			$this->load->helper('url');
			redirect('plants');
			return;
		}
		
		$this->load->model('Plants_model');
		if ($id == "new") {
			$data['id'] = '';
			$data['title'] = '';
			$data['content'] = '';
			$data['links'] = '';
			$data['image'] = '';
		} else {
			$info = $this->Plants_model->get($id);
			$data['id'] = $id;
			$data['title'] = $info->title;
			$data['content'] = $info->content;
			$data['links'] = $info->links;
			$data['image'] = $info->image;
		}
		
		$data2['content'] = $this->load->view('plant_edit_view', $data, true);
		$data2['name'] = 'Add/Edit Plant Type';
		$this->load->model('Pages_model');
		$data2['list'] = $this->Pages_model->get_list();
		
		$this->load->view('template', $data2);
	}
}