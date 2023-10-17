<?php

use Dompdf\Dompdf;

class Penjualan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kue_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
        $this->load->model('Toko_model');

    }

    function index()
    {
        $data['judul'] = "Halaman Penjualan";
        $data['penjualan'] = $this->Penjualan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("penjualan/vw_penjualan", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Penjualan";
        $data['detail'] = $this->Detail_model->getById($id);
        $data['penjualan'] = $this->Penjualan_model->getByIdP($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib Diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("penjualan/vw_detail_penjualan", $data);
            $this->load->view("layout/footer");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
            redirect('Penjualan');
        }
    }
    public function submitApproval($id)
    {
        $penjualan = $this->Penjualan_model->getById($id);
        if ($penjualan['konfirm'] == 0) {
            // for ($i = 0; $i < count($id); $i++) {
			// 	//$this->Penjualan_model->tambahTransaksi($id_us, $point_fix[$i]); //panggil transaksi
			// }
            $this->Penjualan_model->updateKonfirm($id, 1);
            $this->Penjualan_model->updateStatuss($id, "Transaksi Berhasil");
            $user=$this->User_model->getById($penjualan['id_user']);
                $poin= $user['poin'] + $penjualan['poin'];
            $this->Penjualan_model->tambahTransaksi($penjualan['id_user'], $poin);
        }else{}
        redirect('Penjualan');
    }
    public function ditolak($id)
    {
        $penjualan = $this->Penjualan_model->getById($id);
        if ($penjualan['konfirm'] == 0) {
            $this->Penjualan_model->updateKonfirm($id, 2);
            $this->Penjualan_model->updateStatuss($id, "Transaksi Gagal");
        }else{}
        redirect('Penjualan');
    }
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Penjualan_model->get();
        $this->data['title'] = 'Laporan Data Penjualan';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('penjualan/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
