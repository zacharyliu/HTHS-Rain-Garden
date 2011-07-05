<?php

class Plants extends CI_Controller {
	
	public function index() {
		
		$name = 'Plants';
		
		$this->load->model('Plants_model');
		$plant_data['data'] = $this->Plants_model->get_all();
		$content = $this->load->view('plants_view', $plant_data, true);
		
		$this->template->render($name, $content);
	}
	
	public function edit($id) {
		if ($this->session->userdata('logged_in')) {
			if ($id == "submit") {
				$this->load->library('input');
				
				$data = array();
				
				$data['title'] = $this->input->post('title');
				$data['content'] = $this->input->post('content');
				$data['links'] = $this->input->post('links');
				
				$this->load->helper('inflector');
				$filename = underscore($this->input->post('title')) . '.jpg';
				$this->load->library('upload', array(
					'upload_path' => './img/plants',
					'allowed_types' => 'jpg',
					'file_name' => $filename,
					'max_size' => '1000',
					'overwrite' => true,
				));
				if (!$this->upload->do_upload('image')) {
					if ($this->upload->display_errors() != "You did not select a file to upload.") {
						echo $this->upload->display_errors();
					}
				} else {
					$this->load->library('image_lib', array(
						'source_image' => './img/plants/' . $filename,
						'maintain_ratio' => true,
						'width' => '300',
						'height' => '300',
					));
					$this->image_lib->resize();
					$data['image'] = $filename;
				}
				
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
			
			$content = $this->load->view('plant_edit_view', $data, true);
			$name = 'Add/Edit Plant Type';
			
			$this->template->render($name, $content);
		}
	}
}