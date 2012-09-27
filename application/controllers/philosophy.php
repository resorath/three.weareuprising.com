<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Philosophy extends MY_Controller {

	public function index()
	{
		// set variables
		$data['title'] = "Our Philosophy";
                $data['nav'] = "philosophy";
		
		$this->loadview('philosophy', $data);
		
		
	}
}