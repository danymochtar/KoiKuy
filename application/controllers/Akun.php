<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	
	function akun_buat_vanilla () {

		return true;
	}

	function sudah_login () {
		
		
		
		return true;
	}
	
	function konfirmasi_artikel ($id_artikelnya) {

		return true;
	}

	public function index()
	{
		$this->load->view('view_akun');
	}
	

	public function Admin()
	{
		echo 'Admin--';
	}
	
	public function User_edit_artikel ()
	
	{
	parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

	$idnya = $_GET['id']; 	
	$data['id'] = $idnya;
	$this->load->model('model_akun');
	$ambil = $this->model_akun->ambil_data_artikel_spes($idnya);
	$data['artikel'] = $ambil;
	$this->load->view('view_edit_artikel',$data);
	
	
	}
	
	public function User_edit_artikel_post ()
	
	{
	parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

	$idnya = $_GET['id']; 	
	$data['id'] = $idnya;
	//nah berarti dia update kontennya..
	//cek dulu..
	$this->load->model('model_akun');
	$nama_artikel = $this->input->post('nama_artikel',true);
	$isi_artikel = $this->input->post('isi_artikel',true);
	$cek = $this->model_akun->update_artikel($idnya,$nama_artikel,$isi_artikel);
	if ($cek) {
		redirect("/akun/user");
	} else {
		echo '-';
	}
	
	
	
	
	
	}
	
	public function User()
	{
		$this->load->model('model_akun');
		  $hasil = $this->model_akun->ambil_data_artikel('1');
		$data['hasil'] = $hasil;
		$this->load->view('view_user',$data);
	}
	
	public function User_buat_artikel ()
	{
		$this->load->view('view_artikel');
	}
	
	public function User_buat_artikel_post()
	{
		date_default_timezone_set("Asia/Jakarta");
		$this->load->helper('url');
		$nama_artikel = $this->input->post('nama_artikel',true);
		$isi_artikel = $this->input->post('isi_artikel',true);
        $tanggal_artikel = date('d-M-Y|H:i:s');
        
		$this->load->model('model_akun');
		$sql= "INSERT INTO `Web_Informasi` (`nama_artikel`, `isi_artikel`, `tgl_artikel`, `id_user`, `rating`) VALUES (?, ?, ?, ?, ?)";
        
        if ($this->db->query($sql, array(
			$nama_artikel,
             $isi_artikel,
             $tanggal_artikel,
            '1',
             '0'
        ) )) {
        
		 
			 redirect('/akun/user');
				
		 } else {
			 echo 'kesalahan terjadi!';
		 }
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




	
