<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public $table = 'user';
	public $id = 'user.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->from($this->table);
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
	public function getPoin()
	{
		$this->db->select('poin');
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function updatePoints() {
        // Hitung tanggal 1 tahun yang lalu 'year' 'minutes'
        $oneYearAgo = date('Y-m-d H:i:s', strtotime('-5 minutes'));

        // Query untuk memperbarui poin
        $this->db->where('date_created <', $oneYearAgo);
        $this->db->update($this->table, array('poin' => 0));

		// Jika berhasil memperbarui poin, update juga tanggal date_created
		if ($this->db->affected_rows() > 0) {
			$newDateCreated = date('Y-m-d H:i:s'); // Set tanggal baru
			$this->db->where('date_created <', $oneYearAgo);
			$this->db->update($this->table, array('date_created' => $newDateCreated));
		}

        return $this->db->affected_rows();
    }
	public function getBy()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	// public function update($where, $data)
	// {
	// 	$this->db->where('id', $where);
	// 	$this->db->update($this->table, $data);
	// 	return $this->db->affected_rows();
	// }
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
	public function tuser()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
}
