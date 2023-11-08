<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kue_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Dashboard";
        $data['penjualan'] = $this->Penjualan_model->tpenjualan();
        $data['kue'] = $this->Kue_model->tkue();
        $data['us'] = $this->User_model->tuser();
        $this->User_model->updatePoints();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("auth/dashboard", $data);
        $this->load->view("layout/footer", $data);
    }
    function set_user()
    {
        $data['judul'] = "Halaman Pengaturan User";
        $data['us'] = $this->User_model->tuser();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['getUser'] = $this->User_model->get();

        $this->User_model->updatePoints();

        $this->load->view("layout/header", $data);
        $this->load->view("auth/user", $data);
        $this->load->view("layout/footer", $data);
    }
    function edit($id)
	{
		$data['judul'] = "Halaman Edit User";
        $data['getUserId'] = $this->User_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('role', 'role', 'required', [
			'required' => 'Role Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("auth/vw_ubah_user", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'role' => $this->input->post('role'),
            ];
			
			$id = $this->input->post('id');
			$this->User_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Diubah!</div>');
			redirect('settings');
		}
	}
	function tambah()
	{
        $data['judul'] = "Halaman Tambah User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['getUser'] = $this->User_model->get();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email ini sudah terdaftar!',
			'valid_email' => 'Email Harus Valid',
			'required' => 'Email Wajib di isi'
		]);

        $this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[5]|matches[password2]',
			[
				'matches' => 'Password Tidak Sama',
				'min_length' => 'Password Terlalu Pendek',
				'required' => 'Password harus diisi'
			]
		);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("auth/vw_tambah_user", $data);
			$this->load->view("layout/footer",$data);
		} else {

			$data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'gambar' => 'default.jpg',
				'role' => $this->input->post('role'),
				'date_created' => date('Y-m-d H:i:s'),
			];

			$this->User_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Ditambah!</div>');
			redirect('settings');
		}
	}
	public function hapus($id)
	{
		$this->User_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data user tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data user Berhasil Dihapus!</div>');
		}
		redirect('settings');
	}
}
