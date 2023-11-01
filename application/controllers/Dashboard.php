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
        // $data['totalb'] = $this->Detail_model->charts();
        $data['us'] = $this->User_model->tuser();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("auth/dashboard", $data);
        $this->load->view("layout/footer");
    }
}
