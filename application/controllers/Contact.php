<?php
class Contact extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'PT. Payung Anak Bangsa';
        $this->load->view('templates/header', $data);
        $this->load->view('about/contact');
        $this->load->view('templates/footer');
    }
}