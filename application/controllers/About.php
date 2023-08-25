<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('profil_model');
        $this->load->model('peternakan_model');
	}
	
	public function index()
	{
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$profil = $this ->profil_model->listing();
		$profil1 = $this ->profil_model->listing();
		$profilfooter = $this ->profil_model->listing();
		$profilnav = $this ->profil_model->listing();
		$posisi = 'about';
		$data = array(	'title'		=>	'Halaman Tentang Peternakan Telur Otomatis',
						'profil'=>	$profil,
						'posisi' => $posisi,
						'profil1'=>	$profil1,
						'profilfooter'=>	$profilfooter,
						'profilnav'=>	$profilnav,
						'data_peternakan'	=>	$data_peternakan,
						'isi'		=>	'about/content');
						
		$this->load->view('layout/wrapper', $data, FALSE);		
	}
}	

/* End of file kendaraan.php */
/* Location: ./application/controllers/kendaraan.php */
