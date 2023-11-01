<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    //memanggil model
    public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->load->model('Kue_model');
		$this->load->model('Kategori_model');
		$this->load->model('Keranjang_model');
		$this->load->model('Toko_model');
		$this->load->model('User_model');
		$this->load->model('Poin_model');
		$this->load->model('User_model', 'userrole');

	}
    //memamnggil view
	public function index()
	{
		$data['kue'] = $this->Kue_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['kategori'] = $this->Kategori_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/user_header", $data);
		$this->load->view('landingPage/vw_home', $data);
		$this->load->view('layout/user_footer', $data);

	}
	public function produk()
	{
		$data['kue'] = $this->Kue_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['kategori'] = $this->Kategori_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/user_header", $data);
		$this->load->view('landingPage/vw_produk');
		$this->load->view('layout/user_footer', $data);

	}
	public function tukar_poin()
	{
		$data['user'] = $this->User_model->getBy();
		$data['poin'] = $this->Poin_model->get();
		$data['kue'] = $this->Kue_model->get();
		$data['kategori'] = $this->Kategori_model->get();
		// var_dump($data["poin"]);die();
		$data['toko'] = $this->Toko_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view("layout/user_header", $data);
		$this->load->view('landingPage/vw_tukarpoin');
		$this->load->view('layout/user_footer', $data);

	}

}
