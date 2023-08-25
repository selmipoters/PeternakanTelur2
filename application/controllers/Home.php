<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


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
		$peternakan1 = $this->peternakan_model->listing_telurbaik();
		$data_baik = count($peternakan1);
		$peternakan2 = $this->peternakan_model->listing_telurbusuk();
		$data_busuk = count($peternakan2);
		$profil = $this ->profil_model->listing();
		$profil1 = $this ->profil_model->listing();
		$profilfooter = $this ->profil_model->listing();
		$profilnav = $this ->profil_model->listing();
        $posisi = 'home';
		$data = array(	'title'		=>	'Peternakan Telur Otomatis',
						'profil'=>	$profil,
						'profil1'=>	$profil1,
						'profilfooter'=>	$profilfooter,
						'profilnav'=>	$profilnav,
						'posisi' => $posisi,
						'data_peternakan'	=>	$data_peternakan,
						'data_baik'	=>	$data_baik,
						'data_busuk'	=>	$data_busuk,
						'isi'		=>	'home/content');
						
		$this->load->view('layout/wrapper', $data, FALSE);		
	}


}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */
