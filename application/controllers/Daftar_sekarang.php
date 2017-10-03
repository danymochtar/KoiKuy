<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_sekarang extends CI_Controller {

	
	public function index()
	{
		$this->load->view('jibs_cape');
	}
	
	public function  form_daftar() 
	{
			echo 'sip';
	}
	public function  Daftar() 
	{
		$this->load->view('daftar_oke');
	}
	
	public function  Daftar_post() 
	{
		$nama_p = $this->input->post('nama_user',true);
        $username = $this->input->post('username',true);
        $password = $this->input->post('psw',true);
        $email_ = $this->input->post('email',true);


        $data = array(
			'nama_user'=> $nama_p,
            'username' => $username,
            'password' => $password,
            'email' => $email_,
            'rating' => '0',
        );

        $this->load->model('model_daftar');
        $this->model_daftar->tambah_data($data);
        //$this->load->view('home_akun');
        //dredirect('daftar', 'refresh');
	}
	
	
}
