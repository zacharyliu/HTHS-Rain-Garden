<?php

class Template {
    
    public function render($name, $content) {
        $CI =& get_instance();
        
        $data['name'] = $name;
        $data['content'] = $content;
        
        $CI->load->model('Pages_model');
        $data['list'] = $CI->Pages_model->get_list();
        
        $CI->load->view('template', $data);
    }
    
}