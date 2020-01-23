<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_mentor extends CI_Model{
//Fungsi untuk menampilkan isi tabel mentor
    function get_mentor(){
        return $this->db->get('tb_mentor');
    }
  
    
    
    //Fungsi untuk menyimpan nilai dari form ke tabel mentor
    function tambah_mentor($data){
        $this->db->insert('tb_mentor', $data);
    }

    function get_datamentor()
    {
        $this->db->select('*')->from('tb_mentor');
        $this->db->join('tb_mentor', 'tb_mentor.id_mentor = tb_absen.id_absen', 'left');
        // $this->db->join('tb_absen', 'tb_absen.id_dosen = dosen.id_dosen', 'left');
        return $this->db->get();
    }
    
    
    //Fungsi untuk Kode Otomatis
    // function kode(){
    //     $this->db->select('RIGHT(tb_mentor.id_mentor,2) 
    //     as id_mentor', FALSE);
    //     $this->db->order_by('id_mentor','DESC');    
    //     $this->db->limit(1);    
    //     $query = $this->db->get('tb_mentor');  
    //     //cek dulu apakah ada sudah ada kode di tabel.    
    //     if($query->num_rows() <> 0){      
    //     //cek kode jika telah tersedia    
    //         $data = $query->row();      
    //         $kode = intval($data->id_mentor) + 1; 
    //       }
    //     else{      
    //         $kode = 1;  //cek jika kode belum terdapat pada table
    //       }
            
    //         $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
    //         $kodetampil = "T".$batas;  //format kode
    //         return $kodetampil;  
    // }

     public function gambar($id){
     $this->db->where('id_mentor', $id);
     return $this->db->get('tb_mentor')->row();
    }

    //Fungsi untuk mengambil nilai dari tabel mentor
    function getEdit_mentor($id){
        return $this->db->get_where('tb_mentor', 
        array('id_mentor' => $id));      
    }
    
    //Fungsi untuk mengupdate nilai dari tabel mentor
    function update_mentor($data, $id){
        $this->db->update('tb_mentor', $data, 
        array('id_mentor' => $id));
    }   
    
    //Fungsi untuk menghapus isi dari tabel mentor dengan kriteria $id
    function hapus_mentor($id){
        $this->db->where('id_mentor', $id);
        $this->db->delete('tb_mentor'); 
    }
}   
?>
