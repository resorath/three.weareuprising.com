<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    private $_controller;
    private $_modules;

    function __construct()
    {
        parent::__construct();
        
        // Get a list of modules that this page needs to load
        $this->_modules = $this->get_module_list();
    }
    

        
    public function loadview($content_view, $data = Array())
    {

        // Set default variables neccesary for headers/footers if not set
        
        // Title
        if(key_exists('title', $data))
            $data['title'] .= " - ";
        @$data['title'] .= "Uprising Guild of Doomhammer";
        
        // Navigation
        if(!key_exists('nav', $data))
            $data['nav'] = "none";
        
        $data['content'] = $this->load->view($content_view, $data, true);
        $this->load->view('templates/master', $data);
        
    }
    
    private function get_module_list()
    {
        return $this->Bootstrap_expert->get_modules($this->uri->segment(1));
    }
    
}