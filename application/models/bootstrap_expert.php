<?php
    Class Bootstrap_expert extends CI_Model{
        
        function __construct()
        {
            parent::__construct();
        }
        
        function get_modules($sitename)
        {
            //$query = @$this->db->get_where('modules', array('name'=>$sitename), 1);
            //return @$query->row_array();
            
        }
        
    }

?>