<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{

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
		$this->load->view('adminpanel/login');
	}

	public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('adminpanel/dashboard');
		$this->load->view('templates/footer');
	}
	

	//Start of controller Adminpanel/User
	public function user()
	{

		$data['user'] = $this->User_Model->getAllUser();

		if($this->input->post('keyword')){
			$data['user'] = $this->User_Model->searchUser();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('adminpanel/user/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/user/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->User_Model->tambahuser();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('adminpanel/user');
		}
	}

	public function edit($id_user)
	{
		$data['user'] = $this->User_Model->getUserbyID($id_user);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/user/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->User_Model->editUser();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('adminpanel/user');
		}
	}

	
    public function hapus($id_user)
    {
        $this->db->delete('user', ['id_user' => $id_user]);
		redirect('adminpanel/user');

		$this->User_Model->hapus($id_user);
		$this->session->set_flashdata('flash', 'Dihapus');

		redirect('adminpanel/user');
    }


	public function info($id_user)
	{
		$data['user'] = $this->User_Model->getUserbyID($id_user);
		$this->load->view('templates/header');
		$this->load->view('adminpanel/user/info', $data);
		$this->load->view('templates/footer');
	}

	// End Of Controller Adminpanel/User



	//Start of controller Adminpanel/admin
	public function admin()
	{

		$data['admin'] = $this->Admin_Model->getAllAdmin();

		if($this->input->post('keyword')){
			$data['admin'] = $this->Admin_Model->searchAdmin();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('adminpanel/admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambahAdmin()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/admin/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Admin_Model->tambahAdmin();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('adminpanel/admin');
		}
	}

	public function editAdmin($id_admin)
	{
		$data['admin'] = $this->Admin_Model->getAdminbyID($id_admin);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/admin/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Admin_Model->editAdmin();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('adminpanel/admin');
		}
	}

	public function hapusAdmin($id_admin)
	{
		$this->Admin_Model->hapusAdmin($id_admin);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('adminpanel/admin');
	}

	public function infoAdmin($id_admin)
	{
		$data['admin'] = $this->Admin_Model->getAdminbyID($id_admin);
		$this->load->view('templates/header');
		$this->load->view('adminpanel/admin/info', $data);
		$this->load->view('templates/footer');
	}

	// End Of Controller Adminpanel/admin


	//Start of controller Adminpanel/product
	public function produk()
	{

		$data['produk'] = $this->Produk_Model->getAllProduk();

		if($this->input->post('keyword')){
			$data['produk'] = $this->Produk_Model->searchProduk();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('adminpanel/produk/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambahProduk()
	{
		$this->form_validation->set_rules('nama', 'Produk', 'required');
		
		$data['kategori'] = $this->Produk_Model->getAllKategori();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/produk/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Produk_Model->tambahProduk();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('adminpanel/produk');
		}
	}
	public function editProduk($id_produk)
	{
		$data['produk'] = $this->Produk_Model->getProdukbyID($id_produk);
	
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$this->Produk_Model->editProduk();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('adminpanel/produk');
		} else {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/produk/edit', $data);
			$this->load->view('templates/footer');
		}
	}
	


	public function hapusProduk($id_produk)
	{
		$this->Produk_Model->hapusProduk($id_produk);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('adminpanel/produk');
	}

	public function infoProduk($id_produk)
	{
		$data['produk'] = $this->Produk_Model->getProdukbyID($id_produk);
		$this->load->view('templates/header');
		$this->load->view('adminpanel/produk/info', $data);
		$this->load->view('templates/footer');
	}

	// End Of Controller Adminpanel/product

	//Start of controller Adminpanel/laporan
	public function order()
	{

		$data['order'] = $this->Order_Model->getAllOrder();
		$data['produk'] = $this->Produk_Model->getAllProduk();

		if($this->input->post('keyword')){
			$data['order'] = $this->Order_Model->searchLaporan();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('adminpanel/laporan/index', $data);
		$this->load->view('templates/footer');
	}

	public function detailorder()
	{

		$data['detail_order'] = $this->Order_Model->getAllDetailOrder();
		

		if($this->input->post('keyword')){
			$data['detail_order'] = $this->Order_Model->searchLaporan();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('adminpanel/laporan/detailorder', $data);
		$this->load->view('templates/footer');
	}

	public function approve($id_order)
{
    $this->Order_Model->approve($id_order);
    redirect('adminpanel/order');
}


	// End Of Controller Adminpanel/product


	//Start of controller Adminpanel/kurir
	public function kurir()
	{

		$data['kurir'] = $this->Order_Model->getAllKurir();
	

		if($this->input->post('keyword')){
			$data['kurir'] = $this->Order_Model->searchKurir();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('adminpanel/kurir/index', $data);
		$this->load->view('templates/footer');
	}

	public function hapuskurir($id_kurir)
	{
		$this->Order_Model->hapuskurir($id_kurir);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('adminpanel/kurir');
	}

	public function infokurir($id_kurir)
	{
		$data['kurir'] = $this->Order_Model->getKurirbyID($id_kurir);
		$this->load->view('templates/header');
		$this->load->view('adminpanel/kurir/info', $data);
		$this->load->view('templates/footer');
	}

	public function editkurir($id_kurir)
	{
		$data['kurir'] = $this->Order_Model->getKurirbyID($id_kurir);
		
		$this->form_validation->set_rules('nama_kurir', 'Nama Kurir', 'required');
      

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/kurir/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Order_Model->editkurir();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('adminpanel/kurir');
		}
	}

	public function tambahkurir()
	{
		$this->form_validation->set_rules('id_wilayah', 'id_wilayah', 'required');
		
		
		$data['wilayah'] = $this->Order_Model->getAllWilayah();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('adminpanel/kurir/tambah', $data);
			$this->load->view('templates/footer');
			
		} else {
			$this->Order_Model->tambahkurir();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('adminpanel/kurir');
		}
	}
	// End Of Controller Adminpanel/product

	public function login()
	{
		$this->load->model('Madmin');
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Madmin->cek_login($u, $p)->num_rows();

		if ($cek == 1) {
			$data_session = array(
				'userName' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			redirect('adminpanel');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('adminpanel');
	}
}
