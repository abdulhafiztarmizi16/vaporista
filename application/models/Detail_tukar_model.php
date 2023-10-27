<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detail_tukar_model extends CI_Model
{
	public $table = 'detail_tukar';
	public $id = 'detail_tukar.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->select('k.*,p.nama as nama, p.harga as harga');
		$this->db->from('keranjang k');
		$this->db->join('kue p', 'k.id_kue = p.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getPoinId()
	{
		$this->db->select('detail_tukar.*, kue.*');
		$this->db->from('detail_tukar');
		$this->db->join('kue', 'kue.id = detail_tukar.id_kue');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->select('d.*,r.nama as nama, b.nama as kue');
		$this->db->from('detail_tukar d');
		$this->db->join('user r', 'd.id_user = r.id');
		$this->db->join('kue b', 'd.id_kue = b.id');
		$this->db->where('d.no_penjualan', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getByUser($id)
	{
		$idu = $this->session->userdata('id');
		$this->db->select('d.*,b.nama as nama_kue');
		$this->db->from('detail_tukar d');
		$this->db->join('kue b', 'd.id_kue = b.id');
		$this->db->where('d.no_penjualan', $id, 'AND d.id_user=' . $idu);
		$this->db->where('d.id_user=' . $idu);
		$query = $this->db->get();
		return $query->result_array();
	}

	// function charts()
	// {
	// 	$this->db->select('d.*, b.nama as kue, sum(d.jumlah) as jum');
	// 	$this->db->from('detail_tukar d');
	// 	$this->db->join('kue b', 'd.id_kue = b.id');
	// 	$this->db->group_by('d.id_kue');
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }

	public function insert($data)
	{
		return $this->db->insert_batch($this->table, $data);
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
}
