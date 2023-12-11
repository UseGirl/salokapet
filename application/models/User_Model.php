<!-- Admin Panel -->
<?php

class User_Model extends CI_Model{

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahuser()
    {
        $data = [
             "nama" => $this->input->post('nama', true),
             "email" => $this->input->post('email', true),
             "no_telp" => $this->input->post('phone', true),
             "password" => $this->input->post('password', true),

        ];
        $this->db->insert('user', $data);

    }

    public function editUser()
    {
        $data = [
             "nama" => $this->input->post('nama', true),
             "email" => $this->input->post('email', true),
             "no_telp" => $this->input->post('phone', true),
             "password" => $this->input->post('password', true),

        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);

    }

    public function hapusUser($id_user)
    {
        // $this->db->where('id_user', $id_user);
        $this->db->delete('user', ['id_user' => $id_user]);
    }

    public function getUserbyID($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
       
    }

    public function searchUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('user')->result_array();

       
    }

}
?>
