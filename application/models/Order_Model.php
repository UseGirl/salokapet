
    <?php

    class Order_Model extends CI_Model{

        public function __construct() {
            parent::__construct();
            $this->load->model('Order_Model');
        }

        
        public function getAllOrder()
        {
            return $this->db->get('order')->result_array();
        }   
        public function getAllDetailOrder()
        {
            return $this->db->get('detail_order')->result_array();
        }   

        public function getAllKurir()
        {
            return $this->db->get('kurir')->result_array();
        } 

        
        public function tambahOrder()
    {
        // Get other form data as needed
        $id_produk = $this->input->post('id_produk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $jumlah_stok = $this->input->post('jumlah_stok');

        // Start a database transaction
        $this->db->trans_start();

        // Query to get the maximum id_order value
        $maxIdOrderQuery = $this->db->query('SELECT MAX(id_order) AS max_id FROM `order`');
        $maxIdOrder = $maxIdOrderQuery->row()->max_id;

        // Calculate the next id_order value
        $nextIdOrder = $maxIdOrder + 1;

        // Iterate through the arrays
        for ($i = 0; $i < count($id_produk); $i++) {

            // Calculate total and remaining stock
            $total = $harga[$i] * $jumlah[$i];
            $sisastok = $jumlah_stok[$i] - $jumlah[$i];

            // Insert into 'order' table
            $data1 = [
                "id_order" => $nextIdOrder,
                "tanggal_transaksi" => date('Y-m-d H:i:s'),
                "status" => 'Waiting Payment',
                "id_kurir" => '2',
                "id_produk" => $id_produk[$i],
                "harga" => $harga[$i],
                "total" => $total,
            ];

            // Insert into 'detail_order' table
            $data2 = [
                "id_order" => $nextIdOrder,
                "id_produk" => $id_produk[$i],
                "harga" => $harga[$i],
                "jumlah" => $jumlah[$i],
                "total" => $total,
            ];

            // Update stock in 'kategori' table
            $data3 = [
                "jumlah_stok" => $sisastok,
            ];
            
            $this->db->where('id_produk', $id_produk[$i]);
            $this->db->update('produk', $data3);

            $this->db->insert('order', $data1);
            $this->db->insert('detail_order', $data2);

        
        }

        // Complete the database transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            // If any part of the transaction failed, you can roll back changes here
            $this->db->trans_rollback();
        } else {
            // If everything is successful, commit the transaction
            $this->db->trans_commit();
        }
    }

   public function tambahkurir()
{
    // Assuming you have loaded the form helper and database library in your controller
    $this->load->helper('form');
    $this->load->database();

    // Get data from the form
    $nama_kurir = $this->input->post('nama_kurir', true);
    $id_wilayah = $this->input->post('id_wilayah', true);

    // Generate a new id_kurir based on the last value in the table
    $last_id_kurir = $this->db->select_max('id_kurir')->get('kurir')->row()->id_kurir;
    $new_id_kurir = $last_id_kurir + 1;

    // Now, you can insert the record into the kurir table
    $data = [
        "id_kurir"   => $new_id_kurir,
        "nama_kurir" => $nama_kurir,
        "id_wilayah" => $id_wilayah,
    ];

    $this->db->insert('kurir', $data);
}



        public function myorder()
        {
            // Check if the 'id_order' is set in the post data
        
            if ($this->input->post('id_order')) {
                $data = [
                    "status" => 'Waiting Approval'
                ];
        
                $this->db->where('id_order', $this->input->post('id_order'));
                $this->db->update('order', $data);
                redirect('user/myorder');
            } else {
                // Handle the case when 'id_order' is not set
                // You might want to log an error, show a message, or take appropriate action
                // based on your application's requirements.
            }
        }

        

        public function approve($id_order)
        {
            $data = [
                "status" => 'Approved'
            ];
        
            $this->db->where('id_order', $id_order);
            $this->db->update('order', $data);
        }
            
        

        public function hapus($id_order)
        {
            // Get the product ID, current jumlah_stok, and total quantity in the order
            $produk_info_query = $this->db->select('id_produk, jumlah')->from('detail_order')->where('id_order', $id_order)->get();
            $produk_info = $produk_info_query->row();
        
            if (!$produk_info) {
                // Handle the case where the order detail is not found
                redirect('user/myorder');
            }
        
            // Delete the order and detail_order entries
            $this->db->delete('order', ['id_order' => $id_order]);
            $this->db->delete('detail_order', ['id_order' => $id_order]);
        
            // Increment the jumlah_stok in the produk table based on the total quantity in the order
            $new_jumlah_stok = $produk_info->jumlah_stok + $produk_info->jumlah;
        
            $this->db->set('jumlah_stok', $new_jumlah_stok);
            $this->db->where('id_produk', $produk_info->id_produk);
            $this->db->update('produk');
        
            redirect('user/myorder');
        }
        
        public function hapuskurir($id_kurir)
        {
        
            $this->db->delete('kurir', ['id_kurir' => $id_kurir]);
        }


    public function editkurir()
    {
        $data = [
            "nama_kurir" => $this->input->post('nama_kurir', true),
            "id_wilayah" => $this->input->post('id_wilayah', true),
        
        ];

        $this->db->where('id_kurir', $this->input->post('id_kurir'));
        $this->db->update('kurir', $data);
    }

    public function searchkurir()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama_kurir', $keyword);
            $this->db->or_like('id_wilayah', $keyword);
            return $this->db->get('kurir')->result_array();

        
        }


        public function getOrderbyID($id_order)
        {
            return $this->db->get_where('order', ['id_order' => $id_order])->row_array();
        
        }

        public function getKurirbyID($id_kurir)
        {
            return $this->db->get_where('kurir', ['id_kurir' => $id_kurir])->row_array();
        
        }

        public function searchOrder()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama', $keyword);
            $this->db->or_like('email', $keyword);
            return $this->db->get('order')->result_array();

        
        }

        public function getAllWilayahKurir()
        {
            return $this->db->get('kurir')->result_array();
        }

        public function getAllWilayah()
        {
            return $this->db->get('wilayah')->result_array();
        }

    }
    ?>
