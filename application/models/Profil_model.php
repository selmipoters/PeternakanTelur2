<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

	/// Load Koneksi Database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/// Listing Data User
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('profil');
		$this->db->order_by('id_profil', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_by_id($id_profil)
	{
		$this->db->select('*');
		$this->db->from('profil');
		$this->db->where('id_profil', $id_profil);
		$query = $this->db->get();
		return $query->result();
	}
	/// Tambah Data User
	public function tambah($data)
	{
		$this->db->insert('profil', $data);
		return $this->db->affected_rows();
	}
	/// Ubah Data User
	public function edit($data,$object)
	{
		$this->db->where('id_profil', $data);
		$this->db->update('profil', $object);
		return $this->db->affected_rows();
	}

	/// Hapus Data User
	public function delete($data)
	{
		$this->db->where('id_profil', $data);
		$this->db->delete('profil');
		return $this->db->affected_rows();
	}

	// ID Otomatis
	public function notis()
	{
		$this->db->select_max('id_profil');
		$this->db->from('profil');
		$kode = $this->db->get()->row()->id_profil;
		$noUrut = (int) substr($kode, 2, 2);
        $noUrut++;
        $char = "PF";
        $newID = $char . sprintf("%02s", $noUrut);
        return $newID;
	}


}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */