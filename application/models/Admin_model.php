<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
		$this->db->from('user');
		$this->db->order_by('id_user', 'asc');
		$this->db->where_not_in('id_user', "PT00");
		$query = $this->db->get();
		return $query->result();
	}
	public function listinglevel()
	{
		$this->db->select('*');
		$this->db->from('level');
		$this->db->order_by('id_level', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_footer()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user', 'asc');
		$this->db->where('id_user', "PT00");
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_level()
	{
		$this->db->select('*');
		$this->db->from('level');
		$this->db->order_by('id_level', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_by_id($id_user)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id_user);
		$this->db->join('level', 'user.id_level = level.id_level', 'inner');
		$this->db->where_not_in('id_user', "PT00");
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_by_idlevel($id_level)
	{
		$this->db->select('*');
		$this->db->from('level');
		$this->db->where('id_level', $id_level);
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_admin_join()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user', 'asc');
		$this->db->join('level', 'user.id_level = level.id_level', 'inner');
		$this->db->where_not_in('id_user', "PT00");
		$query = $this->db->get();
		return $query->result();
	}
	/// Tambah Data User
	public function tambah($data)
	{
		$this->db->insert('user', $data);
		return $this->db->affected_rows();
	}
	public function tambahlevel($data)
	{
		$this->db->insert('level', $data);
		return $this->db->affected_rows();
	}
	/// Ubah Data User
	public function edit($data,$object)
	{
		$this->db->where('id_user', $data);
		$this->db->update('user', $object);
		return $this->db->affected_rows();
	}
	public function editlevel($data,$object)
	{
		$this->db->where('id_level', $data);
		$this->db->update('level', $object);
		return $this->db->affected_rows();
	}
	/// Hapus Data User
	public function delete($data)
	{
		$this->db->where('id_user', $data);
		$this->db->delete('user');
		return $this->db->affected_rows();
	}
	public function deletelevel($data)
	{
		$this->db->where('id_level', $data);
		$this->db->delete('level');
		return $this->db->affected_rows();
	}

	// ID Otomatis
	public function notis()
	{
		$this->db->select_max('id_user');
		$this->db->from('user');
		$kode = $this->db->get()->row()->id_user;
		$noUrut = (int) substr($kode, 2, 2);
        $noUrut++;
        $char = "PT";
        $newID = $char . sprintf("%02s", $noUrut);
        return $newID;
	}
	public function notislevel()
	{
		$this->db->select_max('id_level');
		$this->db->from('level');
		$kode = $this->db->get()->row()->id_level;
		$noUrut = (int) substr($kode, 1, 2);
        $noUrut++;
        $char = "L";
        $newID = $char . sprintf("%02s", $noUrut);
        return $newID;
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
