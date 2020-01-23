<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    // public function __construct()
    // {
    //     parent::__construct();
 
    //     // load Session Library
    //     $this->load->library('session');
         
    //     // load url helper
    //     $this->load->helper('url');
    // }
	public function index(){
		// redirect('c_latihan8','refresh');
		// $data['isi']='content/home_login.php';
		 $this->load->view('qrcode/login');

	}

	// public function c_login(){
 //        // $data['kode']=$this->m_latihan13->kode();
	// 	// $data['pengguna']=$this->m_latihan13->get_pengguna();
 //        $data['isi']='content/v_login.php';
 //        $this->load->view('v_template/v_utama_login', $data);

 //    }
    public function daftar(){
        
        $this->load->view('qrcode/daftar');

    }

    public function daftarsave(){
		$data = array (
			"id_user" => $this->input->post(""),
			"nama_lengkap" => $this->input->post("name"),
			"username" => $this->input->post("username"),
			"password" => md5($this->input->post("password")),
			"level" => '2',
			"blokir" => "T",
			"tglupdate" => date("Y-m-d")
			);
		$this->m_user->tambah_user($data);

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

                $data = array ("
                        id_mentor" => $this->input->post(""),
                        "nama" => $this->input->post("name"),
                        "kelompok" => $this->input->post("gugus"),
                        "foto" => $gbr['file_name']);

                $this->m_mentor->tambah_mentor($data);

                echo "<script type='text/javascript'>
                alert('Data Anda Berhasil Ditambah ... Hubungi Admin Sistem Untuk Aktifasi'); </script>";
                redirect('login','refresh');

            }else{
                echo "Image yang diupload kosong";
            }
        }

}
    function auth () {
    	$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
    	$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        // $username = ($this->input->post('username',TRUE));
        // $password = ($this->input->post('password',TRUE));
    	$cek_pengguna=$this->m_user->auth_pengguna($username,$password);
    	if ($cek_pengguna->num_rows() > 0) { //jika login sebagai pengguna
    			$data=$cek_pengguna->row_array();
    			$this->session->set_userdata('masuk',TRUE);
    			if ($data['level']=='1'){ //Akses Admin
    				$this->session->set_userdata('akses','1');
    				$this->session->set_userdata('ses_id',$data['id_pengguna']);
    				$this->session->set_userdata('ses_nama',$data['nama_lengkap']);
    				redirect('dashboard');
    			}else if ($data['level']=='2'){ //Akses staf
    				$this->session->set_userdata('akses','2');
    				$this->session->set_userdata('ses_id',$data['id_pengguna']);
    				$this->session->set_userdata('ses_nama',$data['nama_lengkap']);
    				redirect('dashboard');
    			}else if ($data['level']=='3'){ //Akses manager
    				$this->session->set_userdata('akses','3');
    				$this->session->set_userdata('ses_id',$data['id_pengguna']);
    				$this->session->set_userdata('ses_nama',$data['nama_lengkap']);
    				redirect('dashboard');
    			}else { //Akses Guest
    				$this->session->set_userdata('akses','4');
    				$this->session->set_userdata('ses_id',$data['id_pengguna']);
    				$this->session->set_userdata('ses_nama',$data['nama_lengkap']);
    				redirect('dashboard');
    			}
    			} else {
    			// jika usetr dan password tidak di temukan atau salah
    			echo "<script type='text/javascript'>
    			alert('Maaf username dan password Salah, ... Mohon Di Ulangi !!!!');</script>";
    			redirect('Login','refresh');
    	}
    }

    function logout(){
        $this->session->unset_userdata('masuk');
    	// $this->session->session_destroy();
    	// $url=base_url('');
    	// redirect($url);
        redirect('Login','refresh');
    }
}
?>