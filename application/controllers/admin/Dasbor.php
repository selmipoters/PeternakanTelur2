<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('admin_model');
	$this->load->model('profil_model');
	$this->load->model('pesan_model');
	$this->load->model('peternakan_model');

}
	public function index()
	{
		$baik = count($this->peternakan_model->chart('Kualitas Telur Baik'));
		$busuk = count($this->peternakan_model->chart('Kualitas Telur Busuk'));
		$chart = $this->peternakan_model->chart_pie();
		$chart_bar = $this->peternakan_model->chart_bar();
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$profil = $this->profil_model->listing();
		$data_profil = count($profil);
		$data = array(	'title'			=>	'Halaman Dasbor Peternakan Telur Otomatis Berbasis IOT',
						'admin'			=>	$admin,
						'pesan'			=>	$pesan,
						'data_telurbaik' => $baik,
						'data_telurbusuk' => $busuk,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'data_profil'	=>	$data_profil,
						'chart'			=>	$chart,
						'chart_bar'		=>	$chart_bar,
						'isi'			=>	'admin/dasbor/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);		
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */
