<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peternakan_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/// Listing Data User
	public function listing() 
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->order_by('kd_telur', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	function cetakkategori($params) {
        $sql = "SELECT * FROM p_telur WHERE kualitas_telur  = '$params'";
        $query = $this->db->query($sql);
        return $query->result();
	}
	function cetakperiodekategori($tglawal,$tglakhir,$kualitas) {
        $sql = "SELECT * FROM p_telur
		WHERE tanggal_masuk BETWEEN '$tglawal' and '$tglakhir' and kualitas_telur= '$kualitas'";
        $query = $this->db->query($sql);
        return $query->result();
	}	
	function cetakperiode($tglawal,$tglakhir) {
        $sql = "SELECT * FROM p_telur
		WHERE tanggal_masuk BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->result();
	}	
	function cetakperiodebaik($tglawal,$tglakhir) {
        $sql = "SELECT * FROM p_telur
		WHERE tanggal_masuk BETWEEN '$tglawal' and '$tglakhir' and kualitas_telur ='Kualitas Telur Baik'";
        $query = $this->db->query($sql);
        return $query->result();
	}	
	function cetakperiodebusuk($tglawal,$tglakhir) {
        $sql = "SELECT * FROM p_telur
		WHERE tanggal_masuk BETWEEN '$tglawal' and '$tglakhir' and kualitas_telur ='Kualitas Telur Busuk'";
        $query = $this->db->query($sql);
        return $query->result();
	}	
	public function listing_telurbaik()
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->where('kualitas_telur', "Kualitas Telur Baik");
		$query = $this->db->get();
		return $query->result();
	}
	public function listing_telurbusuk()
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->where('kualitas_telur', "Kualitas Telur Busuk");
		$query = $this->db->get();
		return $query->result();
	}
public function listing_by_id($kd_telur)
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->where('kd_telur', $kd_telur);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->where('kd_telur', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function notis()
	{
		$this->db->select_max('kd_telur');
		$this->db->from('p_telur');
		$kode = $this->db->get()->row()->kd_telur;
		$noUrut = (int) substr($kode, 2, 4);
        $noUrut++;
        $char = "TL";
        $newID = $char . sprintf("%04s", $noUrut);
        return $newID;
	}
	/// Tambah Data
	public function tambah($data) 
	{
		$this->db->insert('p_telur', $data);
		return $this->db->affected_rows();
	}
	/// Ubah Data
	public function edit($data,$object)
	{
		$this->db->where('kd_telur', $data);
		$this->db->update('p_telur', $object);
		return $this->db->affected_rows();
	}

	/// Hapus Data
	public function delete($data)
	{
		$this->db->where('kd_telur', $data);
		$this->db->delete('p_telur');
		return $this->db->affected_rows();
	}
public function get_header1($kode)
	{
		$this->db->select('kualitas_telur');
		$this->db->from('p_telur');
		$this->db->where('kd_telur', $kode);
		$data = $this->db->get()->row()->kualitas_telur;
		return $data;
	}	
	public function get_peternakan_by_id($kode)
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->where('kd_telur', $kode);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function chart($id)
	{
		$this->db->select('*');
		$this->db->from('p_telur');
		$this->db->where('kualitas_telur', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function chart_pie(){
		$this->db->select('kualitas_telur,warna_chart,COUNT(*) as jumlah');
		$this->db->from('p_telur');
		$this->db->group_by('kualitas_telur');
		$query = $this->db->get();
		return $query->result();
	}
	public function chart_bar(){
		$this->db->select('kualitas_telur,tanggal_masuk,COUNT(*) as jumlah');
		$this->db->from('p_telur');
		// $kode = $this->db->get()->row()->tanggal_masuk;
		// $tanggal = (int) substr($kode, 1, 10);		
		$this->db->group_by('kualitas_telur');
		$query = $this->db->get();
		return $query->result();
	}	
	
		// ID Otomatis
	

}

/* End of file peternakan_model.php */
/* Location: ./application/models/peternakan_model.php */
