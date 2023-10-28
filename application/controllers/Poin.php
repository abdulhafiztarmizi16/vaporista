<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Poin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Poin_model');
		$this->load->model('Kategori_model');
		$this->load->model('Toko_model');
	}
	function index()
	{
		$data['judul'] = "Halaman Produk Poin";
		$data['poin'] = $this->Poin_model->get();
		$data['kategori'] = $this->Kategori_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("produk_poin/vw_kue", $data);
		$this->load->view("layout/footer");
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Produk Poin";
		$data['poin'] = $this->Poin_model->getById($id);
		$data['kategori'] = $this->Kategori_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('id_toko', 'Id Toko', 'required', [
			'required' => 'Id Toko Kue Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'NIP', 'required', [
			'required' => 'kategori Wajib di isi'
		]);
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required', [
			'required' => 'Nama Kue Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
			'required' => 'Deskripsi Wajib di isi'
		]);
		$this->form_validation->set_rules('poin', 'Poin', 'required', [
			'required' => 'Rating Wajib di isi'
		]);
		// $this->form_validation->set_rules('harga', 'Harga', 'required', [
		// 	'required' => 'Harga Wajib di isi'
		// ]);

		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
			'required' => 'Tanggal Wajib di isi'
		]);

		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);

		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("produk_poin/vw_ubah_kue", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'id_toko' => $this->input->post('id_toko'),
				'kategori' => $this->input->post('kategori'),
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'deskripsi' => $this->input->post('deskripsi'),
				'status' => $this->input->post('status'),
				'stok' => $this->input->post('stok'),
				// 'harga' => $this->input->post('harga'),
				'poin' => $this->input->post('poin'),
				
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/kue/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
					$query = $this->db->set('gambar', $new_image);
					if ($query) {
						$old_image = $this->db->get_where('kue', ['id' => $id])->row();
						unlink(FCPATH . 'assets/img/kue/' . $old_image->gambar);
					}
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Poin_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diubah!</div>');
			redirect('Poin');
		}
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Produk Poin";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kue'] = $this->Poin_model->get();
		$data['kategori'] = $this->Kategori_model->get();
		$data['toko'] = $this->Toko_model->get();
		$this->form_validation->set_rules('id_toko', 'Id Toko', 'required', [
			'required' => 'Id Toko Kue Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'NIP', 'required', [
			'required' => 'kategori Wajib di isi'
		]);
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required', [
			'required' => 'Nama Kue Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
			'required' => 'Deskripsi Wajib di isi'
		]);
		$this->form_validation->set_rules('poin', 'Poin', 'required', [
			'required' => 'Rating Wajib di isi'
		]);
		// $this->form_validation->set_rules('harga', 'Harga', 'required', [
		// 	'required' => 'Harga Wajib di isi'
		// ]);

		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
			'required' => 'Tanggal Wajib di isi'
		]);

		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);

		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("produk_poin/vw_tambah_kue", $data);
			$this->load->view("layout/footer");
		} else {

			$data = [
				'id_toko' => $this->input->post('id_toko'),
				'kategori' => $this->input->post('kategori'),
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'deskripsi' => $this->input->post('deskripsi'),
				'status' => $this->input->post('status'),
				'stok' => $this->input->post('stok'),
				// 'harga' => $this->input->post('harga'),
				'poin' => $this->input->post('poin'),
				
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/kue/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Poin_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Poin Berhasil Ditambah!</div>');
			redirect('Poin');
		}
	}

	function detail($id)
	{
		$data['judul'] = "Halaman Detail Kue";
		$data['kue'] = $this->Kue_model->getById($id);
		$data['toko'] = $this->Toko_model->get();
		$data['kategori'] = $this->Kategori_model->get();
		$data['toko'] = $this->Toko_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("produk_poin/vw_detail_kue", $data);
		$this->load->view("layout/footer");
	}

	public function hapus($id)
	{
		$this->Poin_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data produk poin tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data produk poin Berhasil Dihapus!</div>');
		}
		redirect('Poin');
	}
}
