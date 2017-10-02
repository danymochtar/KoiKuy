<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_akun extends CI_Model

{	
   
 function tambah_data_artikel($data){
        $query = $this->db->insert('Web_Informasi', $data);
        return;

    

    }
    
    function ambil_data_artikel($idnya) {
        $arry = array();
        $o= 0;
		$sql= "SELECT nama_artikel, isi_artikel, tgl_artikel,id_user, rating,jumlah_viewer FROM Web_Informasi WHERE id_user = ?     ";
        //$arry = array($o,array("nama" => ,"isi" =>$row->isi_artikel,"tgl"=> $row->tgl_artikel));
        $ambil = $this->db->query($sql, array('1'));
        
            foreach ($ambil->result() as $row)
            {
                    $o++;
                    $baris['nama_artikel'] = $row->nama_artikel;
                    $baris['isi_artikel'] = $row->isi_artikel;
                    $baris['tgl_artikel'] =$row->tgl_artikel;
                    $bagian[] = $baris;
                    
            }

		 return $bagian;
			
    }
    
       function ambil_data_artikel_spes($id_artikelnya) {
        $arry = array();
    
		$sql= "SELECT nama_artikel, isi_artikel FROM Web_Informasi WHERE id_user = ? AND id_artikel =?     ";
        //$arry = array($o,array("nama" => ,"isi" =>$row->isi_artikel,"tgl"=> $row->tgl_artikel));
        $ambil = $this->db->query($sql, array('1',$id_artikelnya));
        
        if ($ambil->num_rows() > 0) {
            
            foreach ($ambil->result() as $row)
            {
                 
                    $baris['nama_artikel'] = $row->nama_artikel;
                    $baris['isi_artikel'] = $row->isi_artikel;
                    
                    $bagian2[] = $baris;
                    
            }
        } else {
            
            $bagian2['nama_artikel'] = 'null';
            $bagian2['isi_artikel'] = 'null';
        }

		 return $bagian2;
			
    }
    
     
    function update_artikel($id_artikel,$nama_artikel,$isi_artikel) {
        
        
		$sql= "UPDATE Web_Informasi SET id_artikel=?,nama_artikel=?,isi_artikel=? WHERE id_user=?";
        //$arry = array($o,array("nama" => ,"isi" =>$row->isi_artikel,"tgl"=> $row->tgl_artikel));
        $ambil = $this->db->query($sql, array($id_artikel,$nama_artikel.$isi_artikel,$_SESSION['id_user_active']));
        
            

		 return $ambil;
			
    }

}
