<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_daftar extends CI_Model

{	
    function cek_login_data ($usernamed,$passwordnya) {
	
     /*$this->db->select('
            Pengguna.username,
            Pengguna.password')
          ->from('Pengguna')
          ->where("(Pengguna.username = '$usernamed')")
          ->where('password', $passwordnya);
    $query = $this->db->get();
    */
    
    $sql= "SELECT username,password,nama_user,level FROM Pengguna WHERE username = ? AND password = ?     ";
        
        $ambil = $this->db->query($sql, array($usernamed,$passwordnya));
        
            foreach ($ambil->result() as $row)
            {
                    $o++;
                    $_SESSION['koi_login'] = true;
                    $_SESSION['koi_username'] = $row->username;
                    $_SESSION['koi_password'] = $row->password;
                    $_SESSION['koi_level'] = =$row->level;
                    $_SESSION['koi_nama_user'] = =$row->nama_user;
                    
                    
            }
     
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
