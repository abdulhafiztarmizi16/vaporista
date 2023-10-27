<?php

use Dompdf\Dompdf;

class Tukar_poin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kue_model');
        $this->load->model('tukar_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
        $this->load->model('Detail_tukar_model');
        $this->load->model('Toko_model');

    }

    function index()
    {
        $data['judul'] = "Halaman tukar_poin";
        $data['penjualan'] = $this->tukar_model->get();
        // var_dump($this->tukar_model->get());die();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("tukar/vw_tukar", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail tukar";
        $data['detail'] = $this->Detail_tukar_model->getById($id);
        $data['penjualan'] = $this->tukar_model->getByIdP($id);
        // var_dump($data['penjualan']);die();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib Diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("tukar/vw_detail_tukar", $data);
            $this->load->view("layout/footer");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_tukar');
            $this->tukar_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
            redirect('tukar_poin');
        }
    }
    public function submitApproval($id)
    {
        $tukar = $this->tukar_model->getById($id);
        if ($tukar['konfirm'] == 0) {
            // for ($i = 0; $i < count($id); $i++) {
			// 	//$this->tukar_model->tambahTransaksi($id_us, $point_fix[$i]); //panggil transaksi
			// }
            $this->tukar_model->updateKonfirm($id, 1);
            $this->tukar_model->updateStatuss($id, "Transaksi Berhasil");
            $user=$this->User_model->getById($tukar['id_user']);
                $poin= $user['poin'] + $tukar['poin'];
            $this->tukar_model->tambahTransaksi($tukar['id_user'], $poin);
        }else{}
        redirect('tukar_poin');
    }
    public function ditolak($id)
    {   
        
        $tukar = $this->tukar_model->getById($id);
        $user = $this->User_model->getpoin();
        $poin = [
            'poin' => intval($user['poin']) + intval($tukar['total_poin']),
        ];
        if ($tukar['konfirm'] == 0) {
            // var_dump($this->tukar_model->updateStatuss($id, "Transaksi Gagal"));die();
            $this->tukar_model->updateKonfirm($id, 2);
            $this->tukar_model->updateStatuss($id, "Transaksi Gagal");
            $this->User_model->update($tukar['íd_user'], $poin);
        }else{}
        redirect('tukar_poin');
    }
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->tukar_model->get();
        $this->data['title'] = 'Laporan Data tukar';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('tukar/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data tukar Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
