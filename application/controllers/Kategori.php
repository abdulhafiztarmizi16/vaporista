<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Kategori_model');
	}
	function index()
	{
		$data['judul'] = "Halaman Kategori";
		$data['kategori'] = $this->Kategori_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("kategori/vw_kategori", $data);
		$this->load->view("layout/footer");
	}
	function edit($id)
	{
		$data['judul'] = "Halaman Edit Kategori";
		$data['kategori'] = $this->Kategori_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('nama', 'Nama Kue', 'required', [
			'required' => 'Nama Kue Wajib di isi'
		]);

		$this->form_validation->set_rules('kategori', 'Kategori Kue', 'required', [
			'required' => 'Kategori Kue Wajib di isi'
		]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("kategori/vw_ubah_kategori", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'kategori' => $this->input->post('kategori'),
			];
			$id = $this->input->post('id');
			$this->Kategori_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Kue Berhasil Diubah!</div>');
			redirect('Kategori');
		}
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Kategori";
		$data['kategori'] = $this->Kategori_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Kue', 'required', [
			'required' => 'Nama Kue Wajib di isi'
		]);

		$this->form_validation->set_rules('kategori', 'Kategori Kue', 'required', [
			'required' => 'Kategori Kue Wajib di isi'
		]);
		
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("kategori/vw_tambah_kategori", $data);
			$this->load->view("layout/footer");
		} else {

			$data = [
				'nama' => $this->input->post('nama'),
				'kategori' => $this->input->post('kategori'),
			];
			$this->Kategori_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Kue Berhasil Ditambah!</div>');
			redirect('Kategori');
		}
	}

	public function hapus($id)
	{
		$this->Kategori_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Kategori Kue tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Kategori Kue Berhasil Dihapus!</div>');
		}
		redirect('Kategori');
	}
}
