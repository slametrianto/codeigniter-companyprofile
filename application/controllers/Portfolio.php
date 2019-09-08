<?php

class Portfolio extends CI_Controller {

    public function index() {
        
        $data['judul'] = 'PT.Payung Anak Bangsa';
        $this->load->view('templates/header', $data);
        $this->load->view('about/portfolio');
        $this->load->view('templates/footer');

    }

}