<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function verify_password($nama, $password) {
        $user = $this->db->get_where('user', ['nama' => $nama])->row_array();

        if ($user) {
            // Compare the entered password with the stored password
            if ($password === $user['password']) {
                redirect('user');
                
            }
        }else{
            $admin = $this->db->get_where('admin', ['nama' => $nama])->row_array();

            if ($password === $admin['password']) {
                redirect('adminpanel/dashboard');
                
            }
        }

        return false;
    }
}
