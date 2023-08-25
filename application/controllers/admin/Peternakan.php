<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peternakan extends CI_Controller {
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
		$data = array(	'title'			=>	'Data Produksi Peternakan Telur ('.$data_peternakan.')',
						'peternakan'		=>	$peternakan,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'isi'			=>	'admin/peternakan/list');
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
		$notis = $this->peternakan_model->notis();
		$data = array(	'title'			=>	'Tambah Data Produksi Telur',
						'notis'			=>	$notis,
						'peternakan'		=>	$peternakan,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'isi'			=>	'admin/peternakan/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg','');
	}
	
	public function hapus()
	{
		$kode=$this->uri->segment(4);
		$hapus = $this->peternakan_model->delete($kode);
		if($hapus){
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menghapus Data Peternakan.</p>
                </div>');	
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menghapus Data Peternakan.</p>
                </div>');
		}
		redirect(base_url('admin/peternakan'),'refresh');
	}
	public function edit()
	{
		$kode=$this->uri->segment(4);
		$tampil = $this->peternakan_model->listing_by_id($kode);
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$data = array(	'title'			=>	'Ubah Data Peternakan',
						'data_admin'	=>	$data_admin,
						'data_pesan'	=>	$data_pesan,
						'data_peternakan'	=>	$data_peternakan,
						'tampil'		=>	$tampil,

						'isi'			=>	'admin/peternakan/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	public function simpan_data()
	{ 
		$notis = $this->peternakan_model->notis(); 
	            $kd_telur = $notis;
				$kualitas_telur = $this->input->post('kualitas_telur');
				if ($kualitas_telur == 'Kualitas Telur Baik'){
					$warna = '#00c0ef';
				}
				else{
					$warna = '#f2e713';
				}
				date_default_timezone_set('Asia/Jakarta');
				$date 		= date("Y-m-d" ,strtotime('now'));
				$berat_telur = $this->input->post('berat_telur');
				$data = array(	'kd_telur'		=>	$kd_telur,
								'kualitas_telur'		=>	$kualitas_telur,
								'tanggal_masuk'		=>  $date,
								'warna_chart'  => $warna);
				// print_r($data);die;
				$simpan = $this->peternakan_model->tambah($data);
				if($simpan){
					$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menambah Data Peternakan Telur.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Peternakan Telur.</p>
                </div>'); 	
				}
            redirect(base_url('admin/peternakan/tambah'),'refresh');
	}

	public function simpan_edit(){ 
	           $kd_telur = $this->input->post('kd_telur');
				$kualitas_telur = $this->input->post('kualitas_telur');
				if ($kualitas_telur == 'Kualitas Telur Baik'){
					$warna = '#00c0ef';
				}
				else{
					$warna = '#f2e713';
				}				
				$berat_telur = $this->input->post('berat_telur');
				date_default_timezone_set('Asia/Jakarta');
				$date 		= date("Y-m-d" ,strtotime('now'));
				$data = array(	'kualitas_telur'		=>	$kualitas_telur,
								'tanggal_masuk'		=>  $date,
								'warna_chart'		=> $warna);

				$simpan = $this->peternakan_model->edit($kd_telur,$data);
				if($simpan){
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Peternakan Telur.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Peternakan Telur.</p>
                </div>'); 	
				}
            redirect(base_url('admin/peternakan'),'refresh');
	}
	public function print(){
		$peternakan = $this->peternakan_model->listing();
		$data = array(	'title'			=>	'Print Data Peternakan',
						'peternakan'	=>	$peternakan,

						'isi'			=>	'admin/peternakan/print_peternakan');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
	}
	public function pdf(){
		$cetak = $this ->peternakan_model->listing();
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Laporan Hasil Produksi Peternakan Telur Ayam Berbasis IOT',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Jatimulya, Tambun Selatan, Bekasi Timur',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        
            
            $pdf->Cell(10,7,'',0,1);
            $pdf->Cell(10,7,'',0,1);
            $pdf->SetFont('Arial','B',10);
            $pdf->setXY(45,30);$pdf->Cell(10,6,'No',1,0,'C');
            $pdf->Cell(20,6,'Kode Telur',1,0,'C');
            $pdf->Cell(50,6,'Kualitas Telur',1,0,'C');
            $pdf->Cell(20,6,'Berat Telur',1,0,'C');
            $pdf->Cell(40,6,'Tanggal Masuk',1,1,'C');
            $pdf->SetFont('Arial','',10);
			foreach ($cetak as $cetak) $i=1;{
            $pdf->setXY(45,36);$pdf->Cell(10,6,$i++,1,0,'C');
            $pdf->Cell(20,6,$cetak->kd_telur,1,0,'C');
            $pdf->Cell(50,6,$cetak->kualitas_telur,1,0,'C');
            $pdf->Cell(20,6,$cetak->berat_telur.' gram',1,0,'C');
            $pdf->Cell(40,6,$cetak->tanggal_masuk,1,1,'C'); 
            $pdf->Cell(10,7,'',0,1);
		}
            $pdf->SetFont('Arial','',8);
            $pdf->Cell(10,7,'',0,1);
            $pdf->Cell(10,7,'',0,1);
            $pdf->Cell(190,7,'"Data ini Data penting jika menemuka dijalan harap dikembalikan :), Terima Kasih"',0,1,'C');


        $pdf->Output();

		
	}
}

/* End of file Karya.php */
/* Location: ./application/controllers/admin/peternakan.php */
