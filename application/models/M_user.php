<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
//fungsi untuk menampilkan database mahasiswa
function get_pengguna(){
    return $this->db->get('tb_user');
}
//fungsi untuk menyimpan nilai dari from ke tabel mahasiswa
function tambah_user($data){
$this->db->insert('tb_user', $data);
}
// //fungsi untuk kode otomatis
// function kode(){
//     $this->db->select('RIGHT(tb_user.id_user,2)
//     as id_user', FALSE);
//     //  $this->db->select('RIGHT(mahasiswa.id_mahasiswa,2)
//     // as id_mahasiswa', FALSE);
//     $this->db->order_by('id_user','DESC');
//     $this->db->limit(1);
//     $query = $this->db->get('tb_user');
//     //cek dulu apakah sudah ada kode di table
//     if ($query->num_rows() <> 0) {
//         //cek kode jika telah tersedia
//         $data = $query->row();
//         $kode = intval($data->id_user) + 1;
//            }
//            else{
//             $kode =1;
//                     }

//             $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);    
//             $kodetampil = "5".$batas;  //format kode
//             return $kodetampil;  
            
// }
//     //         else{      
//     //         $kode = 1;  //cek jika kode belum terdapat pada table
//     //       }
//     //         $tgl=date('dmY'); 
//     //         $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);    
//     //         $kodetampil = "T"."I".$tgl.$batas;  //format kode
//     //         return $kodetampil;  
//     // }

// // Fungsi untuk mengambil nilai dari tabel mahasiswa
// 	function getEdit_pengguna($id){
// 		return $this->db->get_where('tb_user', 
// 		array('id_user' => $id));
        	
// 	}
	
// 	//Fungsi untuk mengupdate nilai dari tabel mahasiswa
// 	function update_pengguna($data, $id){
// 		$this->db->update('tb_user', $data, 
// 		array('id_user' => $id));
// 	}	
	
function auth_pengguna($username,$password){
    $T2ACAK=md5($password);
    // $T2ACAK=base64_ecode($password);

    $query=$this->db->query("SELECT * FROM tb_user WHERE 
        username='$username' AND password='$T2ACAK' AND blokir='T' LIMIT 1");
        return $query;
    
    }




// 	//Fungsi untuk menghapus isi dari tabel mahasiswa dengan kriteria $id
	function hapus_pengguna($id){

        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');    

           
       
	}
}
?>