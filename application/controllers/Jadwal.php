<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function index()
    {
    
        $data['isi']='qrcode/jadwal.php';
        $this->load->view('qrcode/v_utama', $data);
    }



}
