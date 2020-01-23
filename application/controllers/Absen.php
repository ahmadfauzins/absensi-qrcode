<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Absen extends CI_Controller {
    public function index(){
    redirect('dashboard','refresh');
    }

     public function absensi(){
        $data['absensi']=$this->m_absen->get_absen();
        $data['isi']='qrcode/dataabsensi.php';
        $this->load->view('qrcode/v_utama', $data);
    } 


    public function absen_masuk(){
        $data['absenmasuk']=$this->m_absen->get_absen();
        $data['isi']='qrcode/dataabsenmasuk.php';
        $this->load->view('qrcode/v_utama', $data);
    }

    public function absen_pulang(){
        $data['absenmasuk']=$this->m_absen->get_absen();
        $data['isi']='qrcode/dataabsenpulang.php';
        $this->load->view('qrcode/v_utama', $data);
    }
 //    public function simpan_absen(){
	// 	$data= array("id_absen" => $this->input->post("T0"),
	// 			"nama" => $this->input->post("T1"),
	// 			"asal_sekolah" => $this -> input -> post("T2"),
	// 			"alamat" => $this -> input -> post("T3"),
	// 			"no_hp" => $this -> input -> post("C1"),
	// 			"kelompok" =>$this -> input -> post("T4"),
	// 			"reguler" =>$this -> input -> post("T5")
	// 		);
	// 	//menyimpann nilai/value dari variabel $data ke class mode
	// 	$this->m_absen->tambah_absen($data);
	// 	//menampilkan alert ketika data berhasil di simpan
	// 	echo "<script type = 'text/javascript'>
	// 	alert('data berhasil di tambah');</script>";
	// 	//$data['mahasiswa']=$this->m_latihan9->get_mahasiswa();
	// 	//$this->load->view('v_latihan9/v_tampil_mahasiswa',$data);
	// 	redirect('absen/viewabsen','refresh');
		
	// }
// 	public function update_absen(){
// 		$id = $this -> input -> post("T0");
// 		$data= array("id_absen" => $this->input->post("T0"),
// 				"nama" => $this->input->post("T1"),
// 				"asal_sekolah" => $this -> input -> post("T2"),
// 				"alamat" => $this -> input -> post("T3"),
// 				"no_hp" => $this -> input -> post("C1"),
// 				"kelompok" =>$this -> input -> post("T4"),
// 				"reguler" =>$this -> input -> post("T5")
// 			);
// 		//menyimpann nilai/value dari variabel $data ke class mode
// 		$this->m_absen->update_absen($data, $id);
// 		//menampilkan alert ketika data berhasil di simpan
// 		echo "<script type = 'text/javascript'>
// 		alert('data berhasil di Ubah');</script>";
// 		//$data['mahasiswa']=$this->m_latihan9->get_mahasiswa();
// 		//$this->load->view('v_latihan9/v_tampil_mahasiswa',$data);
// 		redirect('absen/viewabsen','refresh');
// 		}
// 	public function hapus_absen($id)
// 	{
// 		$this -> m_absen -> hapus_absen($id);
// 		echo "<script type = 'text/javascript'>
// 		alert('data berhasil di hapus');</script>";
// redirect('absen/viewabsen','refresh');
// 	}
}