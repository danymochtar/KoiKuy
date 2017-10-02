<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanya_koi extends CI_Controller {

	
	public function index()
	{
		$this->load->view('jibs_cape');
	}
	
	public function Login()
	{
		$this->load->view('view_login');
	}
	

	
}
