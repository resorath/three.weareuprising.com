<?php
    Class News_expert extends CI_Model{
        
        function __construct()
        {
            parent::__construct();
        }
       
        function get_news($start=0, $count=10)
        {
            $query = $this->db->order_by("id", "desc")->get('news', $count, $start);
            
            return $query->result();
        }
    }
    
?>