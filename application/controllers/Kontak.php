<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	///Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('profil_model');

	}
	///Home Page
	public function index()
	{
		$profil = $this ->profil_model->listing();
		$valid = $this->form_validation;
		$profil1 = $this ->profil_model->listing();
		$profilfooter = $this ->profil_model->listing();
		$profilnav = $this ->profil_model->listing();
		$posisi = 'about';
		$valid->set_rules('btn_pesan','Nama','required',
		array(	'required'	=>	'%s harus diisi'));

		if($valid->run()==TRUE){
			$id = $this->pesan_model->notis();
			$nama = $this->input->post('name');
			$email = $this->input->post('email');
			$nomor = $this->input->post('phone');
			$pesan = $this->input->post('message');
			if($nama != null && $email != null && $nomor != null && $pesan != null){
			$data = array(	'pesan_id'		=>	$id,
							'pesan_nama'	=>	$nama,
							'pesan_email'	=>	$email,
							'pesan_nophone'	=>	$nomor,
							'pesan_isi'		=>	$pesan,
							'status_pesan' => 'publish');
			$simpan = $this->pesan_model->tambah($data);
				if($simpan){
					$this->session->set_flashdata('success', 'Pesan Berhasil Terkirim');
	                $id = "";
	                $nama = "";
	                $email = "";
	                $nomor = "";
	                $pesan = "";
				}else{
					$this->session->set_flashdata('failed', 
	                '');
				}
			}else{
				$this->session->set_flashdata('failed', '');
			}
			redirect(base_url('kontak'),'refresh');
		}else{
		
		$data = array(	'title'	=>	'Kontak - Peternakan Telur Ayam Berbasis IOT',
						'profil'=>	$profil,
						'posisi' => $posisi,
						'profil1'=>	$profil1,
						'profilfooter'=>	$profilfooter,
						'profilnav'=>	$profilnav,
						'isi'	=>	'kontak/content');
		$this->load->view('layout/wrapper', $data, FALSE);	
		$this->session->set_flashdata('success','');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */
