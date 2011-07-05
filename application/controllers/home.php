<?php

class Home extends CI_Controller {
    
    public function index() {
        $name = "Home";
        $content = $this->load->view('home', '', true);
        
        $this->template->render($name, $content);
    }
    
}