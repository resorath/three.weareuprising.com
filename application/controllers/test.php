<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('test/normal');
	}
	
	public function front()
	{
		$this->load->view('test/front');
	}
	
	public function oldnormal()
	{
		$this->load->view('test/oldnormal');
	}
}
