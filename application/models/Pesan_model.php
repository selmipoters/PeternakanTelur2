<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model {

	/// Load Koneksi Database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/// Tambah Data User
	public function tambah($data)
	{
		$this->db->insert('tbl_pesan', $data);
		return $this->db->affected_rows();
	}
public function edit($data,$object)
	{
		$this->db->where('pesan_id', $data);
		$this->db->update('tbl_pesan', $object);
		return $this->db->affected_rows();
	}

	/// Hapus Data User
	public function delete($data)
	{
		$this->db->where('pesan_id', $data);
		$this->db->delete('tbl_pesan');
		return $this->db->affected_rows();
	}

	/// Listing Data User
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tbl_pesan');
		$this->db->order_by('pesan_id', 'desc');
		$this->db->where('status_pesan', "publish");
		$query = $this->db->get();
		return $query->result();
	}
public function listing2()
	{
		$this->db->select('*');
		$this->db->from('tbl_pesan');
		$this->db->order_by('pesan_id', 'desc');
		$this->db->where('status_pesan', "archive");
		$query = $this->db->get();
		return $query->result();
	}	
	// ID Otomatis
	public function notis()
	{
		$this->db->select_max('pesan_id');
		$this->db->from('tbl_pesan');
		$kode = $this->db->get()->row()->pesan_id;
		$noUrut = (int) substr($kode, 1, 4);
        $noUrut++;
        $char = "P";
        $newID = $char . sprintf("%04s", $noUrut);
        return $newID;
	}

}

/* End of file Pesan_model.php */
/* Location: ./application/models/Pesan_model.php */