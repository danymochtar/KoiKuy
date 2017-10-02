<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_daftar extends CI_Model

{	
    function cek_login_data ($usernamed,$passwordnya) {
	
     $this->db->select('
            Pengguna.username,
            Pengguna.password')
          ->from('Pengguna')
          ->where("(Pengguna.username = '$usernamed')")
          ->where('password', $passwordnya);
    $query = $this->db->get();
    if($query->num_rows() === 1){
	return $query->result();
    }else{
	return false;
    }
} 

	

    function tambah_data($data){
        $query = $this->db->insert('Pengguna', $data);
        return;


    }

    function update_users($data){
        // update code...
    }
}
