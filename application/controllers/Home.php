<?php

class Home extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header');
        $this->load->view('home/index');
        // $this->load->view('templates/footer');
    }
}
