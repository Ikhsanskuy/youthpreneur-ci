<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Regist_model');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Admin';
        $data['sm'] = $this->Regist_model->getAllData();
        $this->load->view('admin/index', $data);
        $this->load->database();
    }

    // public function getData()
    // {
    //     $data['judul'] = 'Detail Data Mahasiswa';
    //     // $this->load->view('templates/header', $data);
    //     $this->load->view('admin/index', $data);
    //     // $this->load->view('templates/footer');
    // }

    public function ubah($id)
    {
        $data['sm'] = $this->Regist_model->getAllData($id);

        $this->load->view('admin/ubah');

        $this->Regist_model->ubahData($id);
        // redirect('admin/index');
    }

    public function hapus($id)
    {
        $this->Regist_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/index');
    }
}
