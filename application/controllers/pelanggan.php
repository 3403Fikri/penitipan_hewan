<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    public function index() 
    {
        $data = $this->customers->getAllCustomers()->result();
        $load['data'] = $data;
        $load['content'] = 'pages/pelanggan/pelanggan';
        $this->load->view('template', $load);
    }

    public function buat() {
        $load['content'] = 'pages/pelanggan/buat';
        $this->load->view('template', $load);
    }
}

?>