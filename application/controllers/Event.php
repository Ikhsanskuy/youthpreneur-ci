<?php

class Event extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Events';
        $this->load->view('templates/headerr');
        $this->load->view('event/index');
        // $this->load->view('templates/footer');
    }
}
