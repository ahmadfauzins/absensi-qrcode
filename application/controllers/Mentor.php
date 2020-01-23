<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mentor extends CI_Controller {	
    public function index(){
    redirect('dashboard','refresh');
    }   
    public function viewmentor(){
        $data['mentor']= $this->m_mentor->get_mentor();
        $data['isi']='qrcode/datamentor.php';
        $this->load->view('qrcode/v_utama', $data);
    }

    public function simpan_mentor(){
		$config['upload_path'] = './assets/mentor'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$this->upload->initialize($config);

        if(!empty($_FILES['F1']['name'])){
			if ($this->upload->do_upload('F1')){
				$gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/mentor'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/mentor'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

				$data = array ("id_mentor" => $this->input->post("T0"),
						"nama" => $this->input->post("T1"),
						"kelompok" => $this->input->post("T4"),
						"foto" => $gbr['file_name']);

				$this->m_mentor->tambah_mentor($data);

				echo "<script type='text/javascript'>
				alert('Data Berhasil Ditambah ... Terima Kasih'); </script>";
				redirect('mentor/viewmentor','refresh');

			}else{
				echo "Image yang diupload kosong";
			}
		}
	}
	public function update_mentor(){
		$id = $this ->input->post("T0");

		if(empty($_FILES['F1']['name'])){
			$id = $this ->input->post("T0");
			$photo_lama = $this ->input->post("H1");
			$data = array (
						"nama" => $this->input->post("T1"),
						"kelompok" => $this->input->post("T4"),
						"foto" => $photo_lama,
						);
			$this->m_mentor->update_mentor($data, $id);
			echo "<script type='text/javascript'>
			alert('Data Berhasil Diubah ... Terima Kasih'); </script>";
			redirect('m_mentor/viewmentor','refresh');
		}else{
			$config['upload_path'] = './assets/mentor'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')){
				$gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/mentor'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/mentor'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                
				$id = $this ->input->post("T0");
				$data = array (
						"nama" => $this->input->post("T1"),
						"kelompok" => $this->input->post("T4"),
						"foto" => $gbr['file_name'],
						);
				$gambar = $this->m_mentor->gambar($id);
				unlink('assets/mentor/'.$gambar->foto); //menghapus gambar yang lama
				$this->m_mentor->update_mentor($data, $id);
				echo "<script type='text/javascript'>
					alert('Data Berhasil Diubah ... Terima Kasih');</script>";
				// redirect('mentor/viewmentor','refresh');
			}	
		}
	}



	public function hapus_mentor($id){
		$gambar = $this->m_mentor->gambar($id);
		unlink('assets/mentor/'.$gambar->foto);
		$this->m_mentor->hapus_mentor($id);
		echo "<script type = 'text/javascript'>
		alert('data berhasil di hapus');</script>";
		redirect('mentor/viewmentor','refresh');
	}
}