
<?php

class Produk_Model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->model('Produk_Model');
    }

    
    public function getAllProduk()
    {
        return $this->db->get('produk')->result_array();
    }   
     
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }   

    public function tambahproduk()
{
    // Query to get the maximum id_produk value
    $maxIdProdukQuery = $this->db->query('SELECT MAX(id_produk) AS max_id FROM `produk`');
    $maxIdProduk = $maxIdProdukQuery->row()->max_id;

    // Calculate the next id_produk value
    $nextIdProduk = $maxIdProduk + 1;

    // Prepare data for insertion
    $data = [
        "id_produk" => $nextIdProduk,
        "nama_produk" => $this->input->post('nama', true),
        "id_kategori" => $this->input->post('id_kategori', true),
        "harga" => $this->input->post('harga', true),
        "jumlah_stok" => $this->input->post('jumlah_stok', true),
        "ukuran" => $this->input->post('ukuran', true),
        "deskripsi" => $this->input->post('deskripsi', true),
        "gambar" => $this->input->post('gambar', true),
    ];

    // Insert data into the 'produk' table
    $this->db->insert('produk', $data);
}


public function editProduk()
{
    $data = [
        "nama_produk" => $this->input->post('nama_produk', true),
        "harga" => $this->input->post('harga', true),
        "jumlah_stok" => $this->input->post('jumlah_stok', true),
        "ukuran" => $this->input->post('ukuran', true),
        "gambar" => $this->input->post('gambar', true) ?: $this->input->post('gambar2', true),
        "deskripsi" => $this->input->post('deskripsi', true),
    ];

    $this->db->where('id_produk', $this->input->post('id_produk'));
    $this->db->update('produk', $data);
}



    public function hapusProduk($id_produk)
    {
       
        $this->db->delete('produk', ['id_produk' => $id_produk]);
    }

    public function getProdukbyID($id_produk)
    {
        return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
       
    }

    
    public function searchProduk()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get('produk')->result_array();

       
    }

}
?>
