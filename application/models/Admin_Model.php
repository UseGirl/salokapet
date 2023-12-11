<!-- Admin Panel -->
<?php

class Admin_Model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
    }

    
    public function getAllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }   

    public function tambahadmin()
    {
        $data = [
             "nama" => $this->input->post('nama', true),
             "email" => $this->input->post('email', true),
             "no_telp" => $this->input->post('phone', true),
             "password" => $this->input->post('password', true),

        ];
        $this->db->insert('admin', $data);

    }

    public function editAdmin()
    {
        $data = [
             "nama" => $this->input->post('nama', true),
             "email" => $this->input->post('email', true),
             "no_telp" => $this->input->post('phone', true),
             "password" => $this->input->post('password', true),

        ];
        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('admin', $data);

    }

    public function hapusAdmin($id_admin)
    {
       
        $this->db->delete('admin', ['id_admin' => $id_admin]);
    }

    public function getAdminbyID($id_admin)
    {
        return $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
       
    }

    public function searchAdmin()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('admin')->result_array();

       
    }

}
?>
