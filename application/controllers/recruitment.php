<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruitment extends MY_Controller {


	public function index()
	{
		$this->load->model('Recruitment_expert');
		
		//$data['newsdata'] = $this->News_expert->get_news();
		
		// set variables
		$data['title'] = "Recruitment";
                $data['nav'] = "recruitment";
                
                $session = $this->session->all_userdata();
                
                // Update changes
                if(!key_exists('recruitment_phase', $session))
                    $this->session->set_userdata('recruitment_phase', '1');
                    
                // Reload our local changes
                $session = $this->session->all_userdata();

                switch($session['recruitment_phase'])
                {
                    case 1:
                        $this->loadview('recruitment/home', $data);
                        break;
		    case 2:
                        $this->loadview('recruitment/start', $data);
                        break;
                }
		
	}
	
	// 2
	public function start()
	{
		$this->session->set_userdata('recruitment_phase', 2);
		$this->index();
	}
	
	// 3
	public function login()
	{
		if($this->session->userdata('recruitment_phase') != 2)
		{
			$this->index();
			return;
		}
		
	}
}