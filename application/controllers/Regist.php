<?php

class Regist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Regist_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Regist';
        // $this->load->view('templates/headerr');
        $this->load->view('event/regist');
    }

    public function regist()
    {
        $this->Regist_model->tambahData();
        redirect('event');
    }

    public function ubah($id)
    {
        $this->Regist_model->ubahData();
        redirect('admin/index');
    }
}
