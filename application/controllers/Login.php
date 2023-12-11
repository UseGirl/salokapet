<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
       
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login() {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $user = $this->login_model->get_user_by_nama($nama);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Set session data if login is successful
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('nama', $user['nama']);

               
            } else {
                $this->session->set_flashdata('error', 'Incorrect password');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('error', 'User not found');
            redirect('auth');
        }
    }
}
