<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Toko extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Toko_model');
	}
	function index()
	{
		$data['judul'] = "Halaman Toko";
		$data['toko'] = $this->Toko_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("toko/vw_toko", $data);
		$this->load->view("layout/footer");
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Toko";
		$data['toko'] = $this->Toko_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('nama', 'Nama Toko', 'required', [
			'required' => 'Nama Toko wajib di isi'
		]);
		
		$this->form_validation->set_rules('tentang', 'Tentang', 'required', [
			'required' => 'Tentang Wajib di isi'
		]);
		
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);

		$this->form_validation->set_rules('no_hp', 'No Hp', 'required', [
			'required' => 'Gambar Wajib di isi'
		]);

		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);

		$this->form_validation->set_rules('buka-toko', 'Buku Toko', 'required', [
			'required' => 'Buku Toko Wajib di isi'
		]);

		$this->form_validation->set_rules('tutup-toko', 'Tutup Toko', 'required', [
			'required' => 'Tutup Toko Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("toko/vw_ubah_toko", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'tentang' => $this->input->post('tentang'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'status' => $this->input->post('status'),
				'buka-toko' => $this->input->post('buka-toko'),
				'tutup-toko' => $this->input->post('tutup-toko'),
			];
			$id = $this->input->post('id');
			$this->Toko_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Toko Berhasil Diubah!</div>');
			redirect('Toko');
		}
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Toko";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Toko', 'required', [
			'required' => 'Nama Toko wajib di isi'
		]);
		
		$this->form_validation->set_rules('tentang', 'Tentang', 'required', [
			'required' => 'Tentang Wajib di isi'
		]);
		
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);

		$this->form_validation->set_rules('no_hp', 'No Hp', 'required', [
			'required' => 'Gambar Wajib di isi'
		]);

		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);

		$this->form_validation->set_rules('buka-toko', 'Buka Toko', 'required', [
			'required' => 'Buka Toko Wajib di isi'
		]);

		$this->form_validation->set_rules('tutup-toko', 'Tutup Toko', 'required', [
			'required' => 'Tutup Toko Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("toko/vw_tambah_toko", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'tentang' => $this->input->post('tentang'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'status' => $this->input->post('status'),
				'buka-toko' => $this->input->post('buka-toko'),
				'tutup-toko' => $this->input->post('tutup-toko'),
			];
			$this->Toko_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
			redirect('Toko');
		}
	}
	public function hapus($id)
	{
		$this->Toko_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
		}
		redirect('Toko');
	}
}
