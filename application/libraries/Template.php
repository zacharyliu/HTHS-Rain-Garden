<?php

class Template {
    
    public function __construct() {
        $CI =& get_instance();
    }
    
    public function render($name, $content) {
        $data['name'] = $name;
        $data['content'] = $content;
        
        $CI->load->model('Pages_model');
        $data['list'] = $CI->Pages_model->get_list();
        
        $CI->load->view('template', $data);
    }
    
}