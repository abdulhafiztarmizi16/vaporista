<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    //memanggil model
    // public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// 	$this->load->model('Kue_model');
	// 	$this->load->model('Kategori_model');
	// 	$this->load->model('Toko_model');
	// }
    //memamnggil view
	public function index()
	{
		$this->load->view('landingPage/vw_home');
	}
	public function produk()
	{
		$this->load->view('landingPage/vw_produk');
	}

}
