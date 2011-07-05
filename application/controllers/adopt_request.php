<?php

class Adopt_request extends CI_Controller {
    
    public function index() {
        $this->load->helper('url');
        redirect('/adopt');
    }
    
    public function add() {
        $this->load->library('input');
        $plant_id = $this->input->post('plant_id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $code = sha1(microtime(true).mt_rand(10000,90000));
        
        $this->load->database();
        
        $data = array(
            'plant_id' => $plant_id,
            'name' => $name,
            'email' => $email,
            'code' => $code,
        );
        if ($this->db->insert('queue', $data)) {
            $this->load->helper('url');
            
            $message = '<body>' . $name . ', <br />You have requested to adopt a plant in the rain garden. Please click the link below to confirm.<br />' . anchor(array('adopt_request', 'confirm', $code));
            
            $this->load->library('email');
            $this->email->initialize(array('mailtype' => 'html'));
            $this->email->from('zachary_liu@hths.mcvsd.org', 'Zachary Liu');
            $this->email->to($email); 
            $this->email->subject('Please confirm your adoption of a rain garden plant');
            $this->email->message($message);
            
            $this->email->send();
            
            $title = 'Confirm your adoption';
            $content = 'Thank you, ' . $name . '. Please check your email to confirm your adoption of this plant.';
            
            $this->template->render($title, $content);
        }
    }
    
    public function confirm($code) {
        $this->load->database();
        
        $this->db->where('code', $code);
        $this->db->from('queue');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->row();
            
            $data = array(
                'adopter_name' => $result->name,
                'adopter_email' => $result->email,
            );
            $this->db->where('id', $result->plant_id);
            $this->db->update('garden', $data);
            
            $title = 'Adoption confirmed';
            $content = 'Thank you, ' . $result->name . '!<br />You have successfully adopted this plant.';
            $this->template->render($title, $content);
        }
    }
    
}