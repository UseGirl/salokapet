<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Produk_Model');
		$this->load->model('Order_Model');
		
	}
	
	public function index()
	{
		$this->load->view('user/index');
	}

    public function product()
	{

		$data['produk'] = $this->Produk_Model->getAllProduk();
		$data['kategori'] = $this->Produk_Model->getAllKategori();
		
	
		
		if($this->input->post('keyword')){
			$data['produk'] = $this->Produk_Model->searchProduk();
		}

		
		$this->load->view('user/product', $data);
		
		

	}

	public function order()
	{
	
		$this->Order_Model->tambahOrder();
		redirect('user/myorder');

		
	}
	
    public function contact()
	{
		$this->load->view('user/contact');
	}

	public function myorder()
{
    // Check if the form is submitted
    if ($this->input->post('id_order')) {
        // Get the ID from the form
        $id_order = $this->input->post('id_order');

        // Update order status
        $data = [
            "status" => 'Waiting Approval'
        ];

        $this->Order_Model->myorder($id_order, $data);
        
        // Redirect back to the myorder page
        redirect('user/myorder');
    }

    // If the form is not submitted, load the data for the view
    $data['order'] = $this->Order_Model->getAllOrder();
    $data['detail_order'] = $this->Order_Model->getAllDetailOrder();
    $data['produk'] = $this->Produk_Model->getAllProduk();

    // Load the view
    $this->load->view('user/myorder', $data);
}


	
	

	public function hapus($id_order)
	{
		$this->Order_Model->hapus($id_order);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('user/myorder');
	}
	
	
		
	
}
