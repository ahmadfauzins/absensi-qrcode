<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	public function index(){
		redirect('dashboard','refresh');
	}

	public function viewuser(){
        // $data['kode']=$this->m_user->kode();
		$data['pengguna']=$this->m_user->get_pengguna();
        $data['isi']='qrcode/user.php';
        $this->load->view('qrcode/v_utama', $data);

    }
 //    public function c_simpan_pengguna(){
	// 	$data = array (
	// 		"id_pengguna" => $this->input->post("T1"),
	// 		"nama_lengkap" => $this->input->post("T2"),
	// 		"username" => $this->input->post("T3"),
	// 		"password" => $this->input->post("T4"),
	// 		"level" => $this->input->post("C1"),
	// 		"blokir" => $this->input->post("C2"),
	// 		"tglupdate" => date("Y-m-d",strtotime($this->input->post("T5")))
	// 		);


	// 	$this->m_latihan12->tambah_pengguna($data);
	// 	echo "<script type='text/javascript'>
	// 	alert('Data Berhasil Ditambah ... Terima Kasih'); </script>";
	// 	redirect('c_latihan12/c_pengguna','refresh');
 //    }

 //     public function c_update_pengguna(){
 //     	$id = $this ->input->post("T1");
	// 	$data = array ("id_pengguna" => $this->input->post("T1"),
	// 		"nama_lengkap" => $this->input->post("T2"),
	// 		"username" => $this->input->post("T3"),
	// 		"password" => $this->input->post("T4"),
	// 		"level" => $this->input->post("C1"),
	// 		"blokir" => $this->input->post("C2"),
	// 		"tglupdate" => date("Y-m-d",strtotime($this->input->post("T5")))
	// 		);
	// 	$this->m_latihan12->update_pengguna($data, $id);
	// 	echo "<script type='text/javascript'>
	// 	alert('Data Berhasil Ditambah ... Terima Kasih'); </script>";
	// 	redirect('c_latihan12/c_pengguna','refresh');
 //    }



    public function hapus_pengguna($id){
		$this->m_user->hapus_pengguna($id);
		echo "<script type='text/javascript'>
		alert('Data Berhasil Dihapus ... Terima Kasih');</script>";
		redirect('user/viewuser','refresh');
	}	
}

    ?>