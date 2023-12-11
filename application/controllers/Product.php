<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('User_Model');
		$this->load->model('Admin_Model');
		$this->load->model('Produk_Model');
		$this->load->model('Order_Model');
	}

	public function index()
	{

		$data['produk'] = $this->Produk_Model->getAllProduk();
		$data['kategori'] = $this->Produk_Model->getAllKategori();
		
	

		if($this->input->post('keyword')){
			$data['produk'] = $this->Produk_Model->searchProduk();
		}

		$this->load->view('home/product', $data);
	}
		
	
}
