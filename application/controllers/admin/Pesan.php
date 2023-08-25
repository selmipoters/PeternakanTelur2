<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
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
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);

		$data = array(	'title'			=>	'Data Pesan ('.$data_pesan.')',
						'pesan'			=>	$pesan,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'isi'			=>	'admin/pesan/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
public function archive()
	{
		$pesan = $this ->pesan_model->listing2();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);

		$data = array(	'title'			=>	'Data Pesan ('.$data_pesan.')',
						'pesan'			=>	$pesan,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'isi'			=>	'admin/pesan/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}	
public function hapus()
	{
		$kode=$this->uri->segment(4);
		$hapus = $this->pesan_model->delete($kode);
		if($hapus){
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menghapus Data Pesan Csutomers.</p>
                </div>');	
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menghapus Data Pesan Customers.</p>
                </div>');
		}
		redirect(base_url('admin/pesan'),'refresh');
	}
public function simpan_edit(){ 
				$id=$this->uri->segment(4);
				$data = array(	'status_pesan'		=>	'archive');

				$simpan = $this->pesan_model->edit($id,$data);
				if($simpan){
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil MengArchive Data Pesan Customer.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal MengArchive Data Pesan Customer.</p>
                </div>'); 	
				}
            redirect(base_url('admin/pesan'),'refresh');
	}		

}

/* End of file Pesan.php */
/* Location: ./application/controllers/admin/Pesan.php */