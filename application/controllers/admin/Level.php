<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('peternakan_model');
		$this->load->model('pesan_model');
	}  
	public function index()
	{
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$level = $this ->admin_model->listinglevel();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$data = array(	'title'			=>	'Level Hak Akses Peternakan Berbasis IOT',
						'level'		=>	$level,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'isi'			=>	'admin/level/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg_list','');
	}
	public function tambah()
	{
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$notis = $this->admin_model->notislevel();
		$data = array(	'title'			=>	'Tambah Level Hak Akses Peternakan Berbasis IOT',
						'notis'			=>	$notis,
						'peternakan'		=>	$peternakan,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'isi'			=>	'admin/level/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg','');
	}
	
	public function hapus()
	{
		$kode=$this->uri->segment(4);
		$hapus = $this->admin_model->deletelevel($kode);
		if($hapus){
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menghapus Data Level Hak Akses.</p>
                </div>');	
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menghapus Data Level Hak Akses.</p>
                </div>');
		}
		redirect(base_url('admin/level'),'refresh');
	}
	public function edit()
	{
		$kode=$this->uri->segment(4);
		$tampil = $this->admin_model->listing_by_idlevel($kode);
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$data = array(	'title'			=>	'Ubah Data Level Hak Akses',
						'data_admin'	=>	$data_admin,
						'data_pesan'	=>	$data_pesan,
						'data_peternakan'	=>	$data_peternakan,
						'tampil'		=>	$tampil,

						'isi'			=>	'admin/level/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function simpan_data()
	{ 
		$notis = $this->admin_model->notislevel();
	            $id_level = $notis;
				$nama_level = $this->input->post('nama_level');
				$data = array(	'id_level'		=>	$id_level,
								'nama_level'		=>	$nama_level);
				$simpan = $this->admin_model->tambahlevel($data);
				if($simpan){
					$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menambah Data Level Hak Akses.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Level Hak Akses.</p>
                </div>'); 	
				}
            redirect(base_url('admin/level/tambah'),'refresh');
	}

	public function simpan_edit(){ 
	           $id_level = $this->input->post('id_level');
			   $nama_level = $this->input->post('nama_level');
				$data = array(	'nama_level'		=>	$nama_level);

				$simpan = $this->admin_model->editlevel($id_level,$data);
				if($simpan){
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Level Hak Akses.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Anda Berhasil Mengubah Data Level Hak Akses.</p>
                </div>'); 	
				}
            redirect(base_url('admin/level'),'refresh');
	}
	
}

/* End of file Karya.php */
/* Location: ./application/controllers/admin/peternakan.php */
