<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
    	$data['peserta']=$this->m_peserta->get_peserta();
    	$data['absenmasuk']=$this->m_absen->get_absen();
    	$data['isi']='qrcode/index.php';
        $this->load->view('qrcode/v_utama',$data);
    }



}
