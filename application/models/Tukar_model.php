<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tukar_model extends CI_Model
{
	public $table = 'tukar_poin';
	public $id = 'tukar_poin.id';
	public function __construct()
	{
		parent::__construct();
	}

	public function tambahTransaksi($id_us, $point)
	{
		// Mengambil informasi barang dari database
		// $this->db->select('poin');
		// $this->db->where('id', $id); // Pastikan $id_barang memiliki nilai yang benar
		// $query = $this->db->get('kue');
		// // Jika data ditemukan, ambil nilai poin dari hasil query
		// $kue = $query->row();
		// $poin_didapat = $kue->poin;
		// var_dump($point);
		// die();
		// Simpan poin ke dalam tabel 'user' berdasarkan ID pengguna
			$this->db->set('poin', $point);
			$this->db->where('id', $id_us); // Pastikan $id_us memiliki nilai yang benar
			$this->db->update('user');
	}

	public function get()
	{
		$this->db->select('p.*, r.nama as nama');
		$this->db->from('tukar_poin p');
		$this->db->join('user r', 'p.id_user = r.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getByIdP($id)
	{
		$this->db->select('p.*, r.nama as nama');
		$this->db->from('tukar_poin p');
		$this->db->join('user r', 'p.id_user = r.id');
		$this->db->where('no_penjualan', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getByUser()
	{
		$id = $this->session->userdata('id');
		$this->db->from($this->table);
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getByUser2($id)
	{
		$idu = $this->session->userdata('id');
		$this->db->from($this->table);
		$this->db->where('id_user', $idu);
		$this->db->where('no_tukar_poin', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

	public function updatestatus($status, $nojual)
	{
		$this->db->set('status', $status);
		$this->db->where('no_penjualan', $nojual);
		$this->db->update($this->table);
		return $this->db->affected_rows;
	}
	public function ttukar_poin()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function updateKonfirm($id, $konfirm)
	{
		$this->db->where('id', $id);
		$this->db->set('konfirm', $konfirm);
		$this->db->update('tukar_poin');
	}
	public function updateStatuss($id, $status)
	{
		$this->db->where('id', $id);
		$this->db->set('status', $status);
		$this->db->update('tukar_poin');
	}
}
