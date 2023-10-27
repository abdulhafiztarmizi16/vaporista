<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in2();
		$this->load->model('User_model');
		$this->load->model('Kue_model');
		$this->load->model('Poin_model');
		$this->load->model('Keranjang_model');
		$this->load->model('Keranjang_poin_model');
		$this->load->model('Penjualan_model');
		$this->load->model('Detail_model');
		$this->load->model('Toko_model');
		$this->load->model('Tukar_model');
		$this->load->model('Detail_tukar_model');
		$this->load->model('Kategori_model');


	}
	public function index()
	{
		$data['keranjang'] = $this->Keranjang_model->get();
		$data['title'] = "Profil";
		$data['judul'] = "Halaman Profil";
		$data['user'] = $this->User_model->getBy();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		// $data['jlh1'] = $this->Keranjang_poin_model->jumlah();
		// var_dump($data['jlh1']);die();
		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_profil', $data);
		$this->load->view('layout/footer', $data);
	}
	public function kue()
	{
		$data['judul'] = "List Produk";
		$data['user'] = $this->User_model->getBy();
		$data['kue'] = $this->Kue_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_p_user', $data);
		$this->load->view('layout/footer', $data);
	}
	public function tukar_poin()
	{
		$data['judul'] = "Tukarkan Poin";
		$data['user'] = $this->User_model->getBy();
		$data['poin'] = $this->Poin_model->get();
		// var_dump($data["poin"]);die();
		$data['toko'] = $this->Toko_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();

		// var_dump($data['poin']);die();
		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_p_tukar_poin', $data);
		$this->load->view('layout/footer', $data);
	}
	public function keranjang($id)
	{
		$data['keranjang'] = $this->Keranjang_model->get();
		$data['judul'] = "Detail Produk";
		$data['user'] = $this->User_model->getBy();
		$data['kue'] = $this->Kue_model->getById($id);
		$data['kategori'] = $this->Kategori_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
			'required' => 'Jumlah Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('profil/vw_keranjang', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'id_user' => $this->session->userdata('id'),
				'id_kue' => $this->input->post('id'),
				'jumlah' => $this->input->post('jumlah'),
				'tpoin' => $this->input->post('tpoin'),
				'total' => $this->input->post('total'),
				'tanggal' => $this->input->post('tanggal'),
			];
			// var_dump($data);
			// die();
			$this->Keranjang_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Ditambahkan ke keranjang!</div>');
			redirect('Profil/detail');
		}
	}
	public function keranjang_poin($id)
	{
		$data['keranjang'] = $this->Keranjang_poin_model->get();
		// var_dump($this->Keranjang_model->get());die
		$data['judul'] = "Detail Produk";
		$data['user'] = $this->User_model->getBy();
		$data['kue'] = $this->Poin_model->getById($id);
		$data['kategori'] = $this->Kategori_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->form_validation->set_rules('jumlah_poin', 'Jumlah', 'required', [
			'required' => 'Jumlah Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('profil/vw_keranjang_poin', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'id_user' => $this->session->userdata('id'),
				'id_kue' => $this->input->post('id'),
				'jumlah' => $this->input->post('jumlah_poin'),
				// 'tpoin' => $this->input->post('tpoin'),
				'total' => $this->input->post('total'),
				'tanggal' => $this->input->post('tanggal'),
			];
			// var_dump($data);
			// die();
			$this->Keranjang_poin_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Ditambahkan ke keranjang!</div>');
			redirect('Profil/detail_poin');
		}
	}
	public function detail()
	{
		$data['judul'] = "Detail Keranjang";
		$data['user'] = $this->User_model->getBy();
		$data["toko"] = $this->Toko_model->get();
		$data['kue'] = $this->Kue_model->get();
		$data['keranjang'] = $this->Keranjang_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		// echo json_encode($data['keranjang']);
		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_detail_keranjang', $data);
		$this->load->view('layout/footer', $data);
	}
	public function detail_poin()
	{
		$data['judul'] = "Detail Keranjang Poin";
		$data['user'] = $this->User_model->getBy();
		$data["poin"] = $this->User_model->getPoin();
		// var_dump($data["poin"]);die();
		$data["toko"] = $this->Toko_model->get();
		$data['kue'] = $this->Kue_model->get();
		$data['keranjang'] = $this->Keranjang_poin_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		// echo json_encode($data['keranjang']);
		$this->load->view('layout/header', $data);
		$this->load->view('profil/vw_detail_keranjang_poin', $data);
		$this->load->view('layout/footer', $data);
	}
	public function delkeranjang($id)
	{
		$this->Keranjang_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Keranjang Berhasil dihapus!</div>');
		redirect('Profil/detail');
	}
	public function delkeranjangpoin($id)
	{
		$this->Keranjang_poin_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Keranjang Berhasil dihapus!</div>');
		redirect('Profil/detail_poin');
	}
	public function pesanan()
	{
		$jumlah_beli = count($this->input->post('kue'));
		// $data_p = [
		// 	'no_penjualan' => $this->input->post('no_penjualan'),
		// 	'id_user' => $this->session->userdata('id'),
		// 	'tanggal' => $this->input->post('tanggal'),
		// 	'total_bayar' => $this->input->post('bayar'),
		// 	'alamat' => $this->input->post('alamat'),
		// 	'pembayaran' => $this->input->post('pembayaran'),
		// 	'keterangan' => $this->input->post('keterangan'),
					
		// ];
		
		// var_dump($data_p);die();

		// -----------------
		// Even upload bukti pembayaran
		// -----------------
		// $upload_image = $_FILES['gambar']['name'];
		// if ($upload_image) {
		// 	$config['allowed_types'] = 'gif|jpg|png';
		// 	$config['max_size'] = '2048';
		// 	$config['upload_path'] = './assets/img/pembayaran/';
		// 	$this->load->library('upload', $config);
		// 	if ($this->upload->do_upload('gambar')) {
		// 		$new_image = $this->upload->data('file_name');
		// 		$this->db->set('gambar', $new_image);
		// 	} else {
		// 		echo $this->upload->display_errors();
		// 	}
		// }

		// -----------------
		// Even untuk pesanan dari kranjang
		// -----------------
		
		$data_detail = [];
		$id = [];
		$point_fix = [];
		for ($i = 0; $i < $jumlah_beli; $i++) {
			array_push($data_detail, ['id_kue' => $this->input->post('kue')[$i]]);
			$data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
			$data_detail[$i]['id_user'] = $this->session->userdata('id');
			$data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
			$data_detail[$i]['total'] = $this->input->post('total_p')[$i];
			array_push($id,$data_detail[$i]['id_kue']);
		}
		// var_dump($this->input->post('total_tpoin'));
		// exit();
		// -----------------
		// Even untuk mengirim poin ke user
		// -----------------
		array_push($point_fix,$this->input->post("total_tpoin"));
			$id_us = $this->session->userdata('id');
				for($i = 0;$i<count($id);$i++){
					$tampung= $this->input->post("total_tpoin");
					// $this->Penjualan_model->tambahTransaksi($id_us, $point_fix[$i]);
				}
				$tes=array_sum($tampung);
		
		// array_push($point_fix,$this->input->post("total_tpoin"));

// // var_dump(count($id));
// 		die();
		// $id = $this->input->post('id');
		// $page_data = $this->Kue_model->getById($id);
		// echo json_encode($page_data);

		// $jumlah_barang = $this->input->post('jumlah');
		$data_p = [
			'no_penjualan' => $this->input->post('no_penjualan'),
			'id_user' => $this->session->userdata('id'),
			'tanggal' => $this->input->post('tanggal'),
			'total_bayar' => $this->input->post('bayar'),
			'alamat' => $this->input->post('alamat'),
			'pembayaran' => $this->input->post('pembayaran'),
			'keterangan' => $this->input->post('keterangan'),
			'poin' => $tes,	
		];
				// var_dump($data_p);die();
		if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
			
			for ($i = 0; $i < $jumlah_beli; $i++) {
				$this->Kue_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_kue']) or die('gagal min stok');
			}
			// Tambahin Poin ke user
		// 	$data_detail = [];
		// $id = [];
		// $point_fix = [];
		// for ($i = 0; $i < $jumlah_beli; $i++) {
		// 	array_push($data_detail, ['id_kue' => $this->input->post('kue')[$i]]);
		// 	$data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
		// 	$data_detail[$i]['id_user'] = $this->session->userdata('id');
		// 	$data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
		// 	$data_detail[$i]['total'] = $this->input->post('total_p')[$i];
		// 	array_push($id,$data_detail[$i]['id_kue']);
			
		// }
		
		

				
			// }else{
			// 	$this->Penjualan_model->tambahTransaksi($id_us, $id);
			// }
			
			// echo json_encode($data);
			$this->Keranjang_model->delete_all($id_us);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil dibuat!</div>');
			redirect('Profil/kue');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Gagal dibuat!</div>');
			redirect('Profil/kue');
		}
	}
	public function pesanan_poin()
	{
		$jumlah_beli = count($this->input->post('kue'));
		// $data_p = [
		// 	'no_penjualan' => $this->input->post('no_penjualan'),
		// 	'id_user' => $this->session->userdata('id'),
		// 	'tanggal' => $this->input->post('tanggal'),
		// 	'total_poin' => $this->input->post('bayar'),
		// 	'alamat' => $this->input->post('alamat'),
		// 	'pembayaran' => $this->input->post('pembayaran'),
		// 	'keterangan' => $this->input->post('keterangan'),
					
		// ];
		
		// var_dump($data_p);die();

		// -----------------
		// Even upload bukti pembayaran
		// -----------------
		// $upload_image = $_FILES['gambar']['name'];
		// if ($upload_image) {
		// 	$config['allowed_types'] = 'gif|jpg|png';
		// 	$config['max_size'] = '2048';
		// 	$config['upload_path'] = './assets/img/pembayaran/';
		// 	$this->load->library('upload', $config);
		// 	if ($this->upload->do_upload('gambar')) {
		// 		$new_image = $this->upload->data('file_name');
		// 		$this->db->set('gambar', $new_image);
		// 	} else {
		// 		echo $this->upload->display_errors();
		// 	}
		// }

		// -----------------
		// Even untuk pesanan dari kranjang
		// -----------------
		
		$data_detail = [];
		$id = [];
		$point_fix = [];
		for ($i = 0; $i < $jumlah_beli; $i++) {
			array_push($data_detail, ['id_kue' => $this->input->post('kue')[$i]]);
			$data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
			$data_detail[$i]['id_user'] = $this->session->userdata('id');
			$data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
			$data_detail[$i]['total'] = $this->input->post('total_p')[$i];
			array_push($id,$data_detail[$i]['id_kue']);
		}
		// var_dump($data_detail);die();
		// exit();
		// -----------------
		// Even untuk mengirim poin ke user
		// -----------------
		// array_push($point_fix,$this->input->post("total_tpoin"));
		$id_us = $this->session->userdata('id');
		// 		for($i = 0;$i<count($id);$i++){
		// 			$tampung= $this->input->post("total_tpoin");
		// 			// $this->Penjualan_model->tambahTransaksi($id_us, $point_fix[$i]);
		// 		}
		// 		$tes=array_sum($tampung);
		
		// array_push($point_fix,$this->input->post("total_tpoin"));

// 		var_dump($point_fix);
// var_dump($tampung);
		// die();
		// $id = $this->input->post('id');
		// $page_data = $this->Kue_model->getById($id);
		// echo json_encode($page_data);

		// $jumlah_barang = $this->input->post('jumlah');
		$data_p = [
			'no_penjualan' => $this->input->post('no_penjualan'),
			'id_user' => $this->session->userdata('id'),
			'tanggal' => $this->input->post('tanggal'),
			'total_poin' => $this->input->post('bayar'),
			'alamat' => $this->input->post('alamat'),
			'pembayaran' => $this->input->post('pembayaran'),
			'keterangan' => $this->input->post('keterangan'),
			// 'poin' => $tes,	
		];
		
		$totalpoin = $this->input->post('p');
		$totaltukarpoin = $this->input->post('t');
		$hasilpoin = $totalpoin - $totaltukarpoin ;
		$data_user = [
			'poin' => $hasilpoin,
		];
		// var_dump($this->Keranjang_poin_model->delete_all($id_us));die();
		if($totalpoin<$totaltukarpoin){
			$this->session->set_flashdata('danger', '<div class="alert alert-danger" role="alert">Poin Tidak Cukup!, Silahkan Cek Kembali Poin Anda!</div>');
				redirect('Profil/detail_poin');
		}else{
			if ($this->Tukar_model->insert($data_p, $upload_image) && $this->Detail_tukar_model->insert($data_detail)) {
				
				for ($i = 0; $i < $jumlah_beli; $i++) {
					$this->Poin_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_kue']) or die('gagal min stok');
				}
				// Tambahin Poin ke user
			// 	$data_detail = [];
			// $id = [];
			// $point_fix = [];
			// for ($i = 0; $i < $jumlah_beli; $i++) {
			// 	array_push($data_detail, ['id_kue' => $this->input->post('kue')[$i]]);
			// 	$data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
			// 	$data_detail[$i]['id_user'] = $this->session->userdata('id');
			// 	$data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
			// 	$data_detail[$i]['total'] = $this->input->post('total_p')[$i];
			// 	array_push($id,$data_detail[$i]['id_kue']);
				
			// }
			
			

					
				// }else{
				// 	$this->Penjualan_model->tambahTransaksi($id_us, $id);
				// }
				
				// echo json_encode($data);
				$this->Keranjang_poin_model->delete_all($id_us);
				$this->User_model->update($id_us,$data_user);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil dibuat!</div>');
				redirect('Profil/tukar_poin');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pesanan Gagal dibuat!</div>');
				redirect('Profil/tukar_poin');
			}
		}
	}
	public function pembelian()
	{
		$data['judul'] = "Data Pembelian";
		$data['user'] = $this->User_model->getBy();
		$data['pembelian'] = $this->Penjualan_model->getByUser();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view('layout/header', $data);
		$this->load->view('profil/pembelian_user', $data);
		$this->load->view('layout/footer', $data);
	}
	public function statusbeli($id)
	{
		$data['judul'] = "Detail Data Pembelian";
		$data['user'] = $this->User_model->getBy();
		$data['pembelian'] = $this->Penjualan_model->getByUser2($id);
		$data['detailbeli'] = $this->Detail_model->getByUser($id);
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib Diisi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("profil/detail_beli", $data);
			$this->load->view("layout/footer");
		} else {
			$status = $this->input->post('status');
			$idp = $this->input->post('no_penjualan');
			$this->Penjualan_model->updatestatus($status, $idp);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
			redirect('Profil/pembelian');
		}
	}
	public function pertukaran()
	{
		$data['judul'] = "Data Tukar Poin";
		$data['user'] = $this->User_model->getBy();
		$data['pembelian'] = $this->Tukar_model->getByUser();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view('layout/header', $data);
		$this->load->view('profil/pertukaran_user', $data);
		$this->load->view('layout/footer', $data);
	}
}
