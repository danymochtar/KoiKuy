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
	
	public function cek_Login()
	{	
		$this->load->helper('url');
		$username = $this->input->post('username',true);
        $password = $this->input->post('psw',true);
        
			
		 $this->load->model('model_daftar');
		 if ($this->model_daftar->cek_login_data($username,$password)) {
			 redirect('/akun');
				
		 } else {
			 echo 'salah password';
		 }
	}
	
}
