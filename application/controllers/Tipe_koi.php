<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jibs extends CI_Controller {

	
	public function index()
	{
		$this->load->view('jibs_cape');
	}
}
