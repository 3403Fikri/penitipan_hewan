<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index() {
        $this->load->view('login');
    }

    public function doLogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'Username', 'required', 
            array('required' => '%s tidak boleh kosong.'));
        $this->form_validation->set_rules('password', 'Password', 'required',
            array('required' => '%s tidak boleh kosong.')
        );
        $db = $this->users->getUserByUsernamePassword($username, $password);
        if ($db->count_rows() == 0) {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect(site_url('login'));
        } 
        $result = $db->row();
        $this->session->set_userdata('user_id', $result->user_id);
        redirect(site_url('dashboard'));
    }

    

}