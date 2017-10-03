<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kenali_koi extends CI_Controller {

	
	public function index()
	{
		$this->load->view('jibs_cape');
	}
	
	public function habitat()
	{
		echo 'habitat~';
	}
	
	public function kesukaannya()
	{
		echo 'suka~';
	}
	
	public function masa_hidup()
	{
		echo 'masa hidup~';
	}
	
	public function jenis_penyakit()
	{
		echo 'penyakitnyo opo~';
	}
	
}
