<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

public function peternakan()
	{
		$peternakan = $this->peternakan_model->listing();
		$banyaktelur = count($peternakan);
		$banyaktelurbaik = $this->peternakan_model->listing_telurbaik();
		$banyakbaik = count($banyaktelurbaik);
		$banyaktelurbusuk = $this->peternakan_model->listing_telurbusuk();
		$banyakbusuk = count($banyaktelurbusuk);
		$data = array(
					'peternakan' 	=> $peternakan,
					'banyakbaik' 	=> $banyakbaik,
					'banyakbusuk' 	=> $banyakbusuk,
					'banyaktelur' 	=> $banyaktelur
				);
		// print_r($data);die;
	    $html = $this->load->view('admin/laporan/peternakan', $data, true);
	    $filename = 'CETAK_Peternakan_DATA_'.date('d_M_y');
	    $this->pdfgenarator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function cetakkategori() {
		if ($this->input->post('ceklis')=='ceklis'){
			$params = $this->input->post('cetakkategori');
			$tglawal = date('Y-m-d',strtotime($this->input->post('start')));
			$tglakhir = date('Y-m-d',strtotime($this->input->post('end')));
			$peternakan1 = $this->peternakan_model->cetakperiodekategori($tglawal,$tglakhir,$params);
			$banyaktelur1 = count($peternakan1);
			
			$data = array(
				'peternakan1' 	=> $peternakan1,
				'banyaktelur1' 	=> $banyaktelur1,
				'tglawal' => $tglawal,
				'tglakhir' => $tglakhir
			);
			// print_r($data);die;
			$html = $this->load->view('admin/laporan/peternakanperiodekategori', $data, true);
			$filename = 'CETAK_Peternakan_DATA_'.date('d_M_y');
			$this->pdfgenarator->generate($html, $filename, true, 'A4', 'portrait');
		}
		else{
			$params = $this->input->post('cetakkategori');
			$peternakan1 = $this->peternakan_model->cetakkategori($params);
			$banyaktelur1 = count($peternakan1);
			$data = array(
				'peternakan1' 	=> $peternakan1,
				'banyaktelur1' 	=> $banyaktelur1
			);
	
			// print_r($data);die;
			$html = $this->load->view('admin/laporan/peternakankategori', $data, true);
			$filename = 'CETAK_Peternakan_DATA_'.date('d_M_y');
			$this->pdfgenarator->generate($html, $filename, true, 'A4', 'portrait');
		}
		
	}
	public function cetakperiode() {
		// $params = $this->input->post('valId');
		// $arr = explode( ',', $params );
		$tglawal = date('Y-m-d',strtotime($this->input->post('start')));
		$tglakhir = date('Y-m-d',strtotime($this->input->post('end')));
		$peternakan1 = $this->peternakan_model->cetakperiode($tglawal,$tglakhir);
		$periodebaik = $this->peternakan_model->cetakperiodebaik($tglawal,$tglakhir);
		$periodebusuk = $this->peternakan_model->cetakperiodebusuk($tglawal,$tglakhir);
		$banyaktelur1 = count($peternakan1);
		$banyakbaik = count($periodebaik);
		$banyakbusuk = count($periodebusuk);
		$data = array(
			'peternakan1' 	=> $peternakan1,
			'banyakbaik' 	=> $banyakbaik,
			'banyakbusuk' 	=> $banyakbusuk,
			'banyaktelur1' 	=> $banyaktelur1,
			'tglawal' => $tglawal,
			'tglakhir' => $tglakhir
		);
		// print_r($data);die;
		$html = $this->load->view('admin/laporan/peternakanperiode', $data, true);
	    $filename = 'CETAK_Peternakan_DATA_'.date('d_M_y');
	    $this->pdfgenarator->generate($html, $filename, true, 'A4', 'portrait');
	}

	

	
}
