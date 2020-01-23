<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Peserta extends CI_Controller {
    public function index(){
    redirect('dashboard','refresh');
    }   
    public function viewpeserta(){
        $data['peserta']=$this->m_peserta->get_peserta();
        $data['isi']='qrcode/datapeserta.php';
        $this->load->view('qrcode/v_utama', $data);
    }

 //    public function hitungpeserta(){
	// $data['peserta']=$this->m_peserta->get_peserta();
	// $this->load->view('qrcode/index', $data);

	// }
    public function simpan_peserta(){
		$data= array("id_peserta" => $this->input->post("T0"),
				"nama" => $this->input->post("T1"),
				"asal_sekolah" => $this -> input -> post("T2"),
				"alamat" => $this -> input -> post("T3"),
				"no_hp" => $this -> input -> post("C1"),
				"kelompok" =>$this -> input -> post("T4"),
				"reguler" =>$this -> input -> post("T5")
			);
		//menyimpann nilai/value dari variabel $data ke class mode
		$this->m_peserta->tambah_peserta($data);
		//menampilkan alert ketika data berhasil di simpan
		echo "<script type = 'text/javascript'>
		alert('data berhasil di tambah');</script>";

		// echo "onclick='demo.showSwal('success-message')";
		//$data['mahasiswa']=$this->m_latihan9->get_mahasiswa();
		//$this->load->view('v_latihan9/v_tampil_mahasiswa',$data);
		redirect('peserta/viewpeserta','refresh');
		
	}
	public function update_peserta(){
		$id = $this -> input -> post("T0");
		$data= array("id_peserta" => $this->input->post("T0"),
				"nama" => $this->input->post("T1"),
				"asal_sekolah" => $this -> input -> post("T2"),
				"alamat" => $this -> input -> post("T3"),
				"no_hp" => $this -> input -> post("C1"),
				"kelompok" =>$this -> input -> post("T4"),
				"reguler" =>$this -> input -> post("T5")
			);
		//menyimpann nilai/value dari variabel $data ke class mode
		$this->m_peserta->update_peserta($data, $id);
		//menampilkan alert ketika data berhasil di simpan
		echo "<script type = 'text/javascript'>
		alert('data berhasil di Ubah');</script>";
		//$data['mahasiswa']=$this->m_latihan9->get_mahasiswa();
		//$this->load->view('v_latihan9/v_tampil_mahasiswa',$data);
		redirect('peserta/viewpeserta','refresh');
		}
	public function hapus_peserta($id)
	{
		$this -> m_peserta -> hapus_peserta($id);
		echo "<script type = 'text/javascript'>
		alert('data berhasil di hapus');</script>";
redirect('peserta/viewpeserta','refresh');
	}
}