<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
public function __construct()
{
	parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('peternakan_model');
		$this->load->model('pesan_model');
		$this->load->model('profil_model');
}
	public function index()
	{
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$profil = $this->profil_model->listing();
		$data_profil = count($profil);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$data = array(	'title'			=>	'Data Profil ('.$data_profil.')',
						'profil'		=>	$profil,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'data_profil'	=>	$data_profil,
						'isi'			=>	'admin/profil/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg_list','');
	}
	public function tambah()
	{
		if(ucfirst($this->session->userdata('akses'))=="SUPER ADMIN"){ 
		
		$notis = $this->profil_model->notis();
		$profil = $this->profil_model->listing();
		$data_profil = count($profil);
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$data = array(	'title'			=>	'Tambah Profil',
						'notis'			=>	$notis,
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'data_profil'	=>	$data_profil,
						'isi'			=>	'admin/profil/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg','');
		}else{
		$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Hak Akses Tidak Mencukupi</p>
                </div>');
		redirect(base_url('admin/profil'),'refresh');
	}
	}
	public function simpan_data(){ 
		$config['upload_path'] = './assets/images/logos/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //tentang yang terupload nantinya
	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/logos/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '100%';
	            $config['width']= 100;
	            $config['height']= 100;
	            $config['new_image']= './assets/images/logos/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
	            $id = $this->input->post('id_profil');
	            $nama_restoran = $this->input->post('nama_restoran');
				$tentang = $this->input->post('editor1');
				$no_telp = $this->input->post('no_telp');
				$email = $this->input->post('email');
				$alamat = $this->input->post('alamat');
				$g_maps = $this->input->post('g_maps');
				$data = array(	'id_profil'			=>	$id,
								'nama_restoran'		=>	$nama_restoran,
								'tentang'			=>	$tentang,
								'no_telp'			=>	$no_telp,
								'email'				=>	$email,
								'alamat'			=>	$alamat,
								'g_maps'			=>	$g_maps,
								'logo'			=>	$gambar);

				$tambah = $this->profil_model->tambah($data);
				if($tambah){
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menambah Data Profil</p>
                </div>');	
			}else{
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Profil.</p>
                </div>'); 	
			}
				
		}else{
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Profil.</p>
                </div>'); 
	    }
	                
	}else{
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Profil.</p>
                </div>');
		} 
            redirect(base_url('admin/profil/tambah'),'refresh');
	}
	public function hapus()
	{
		if(ucfirst($this->session->userdata('akses'))=="SUPER ADMIN"){ 
		$kode=$this->uri->segment(4);
		$hapus = $this->profil_model->delete($kode);
		if($hapus){
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menghapus Data Profil.</p>
                </div>');	
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menghapus Data Profil.</p>
                </div>');
		}
		redirect(base_url('admin/profil'),'refresh');
		}else{
		$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Hak Akses Tidak Mencukupi</p>
                </div>');
		redirect(base_url('admin/profil'),'refresh');
	}
	}
	public function edit()
	{
		if(ucfirst($this->session->userdata('akses'))=="SUPER ADMIN"){ 
		$kode=$this->uri->segment(4);
		$tampil = $this->profil_model->listing_by_id($kode);
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);
		$profil = $this->profil_model->listing();
		$data_profil = count($profil);
		
		$data = array(	'title'			=>	'Ubah Data Profil',
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'data_profil'	=>	$data_profil,
						'tampil'		=>	$tampil,
						'isi'			=>	'admin/profil/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else{
		$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Hak Akses Tidak Mencukupi</p>
                </div>');
		redirect(base_url('admin/profil'),'refresh');
	}
	}
	public function edit_data(){ 
		$config['upload_path'] = './assets/images/logos/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //tentang yang terupload nantinya
	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/logos/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	           	$config['maintain_ratio']= FALSE;
	            $config['quality']= '100%';
	            $config['width']= 100;
	            $config['height']= 100;
	            $config['new_image']= './assets/images/logos/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
	            $id = $this->input->post('id_profil');
	            $nama_restoran = $this->input->post('nama_restoran');
				$tentang = $this->input->post('editor1');
				$no_telp = $this->input->post('no_telp');
				$email = $this->input->post('email');
				$alamat = $this->input->post('alamat');
				$g_maps = $this->input->post('g_maps');
				$data = array(	'nama_restoran'		=>	$nama_restoran,
								'tentang'			=>	$tentang,
								'no_telp'			=>	$no_telp,
								'email'				=>	$email,
								'alamat'			=>	$alamat,
								'g_maps'			=>	$g_maps,
								'logo'			=>	$gambar);

				$ubah = $this->profil_model->edit($id, $data);
				if($ubah){
				$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Profil.</p>
                </div>');	
			}else{
				$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Profil.</p>
                </div>'); 	
			}
				
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Profil.</p>
                </div>'); 
	    }
	                
	}else{
			$id = $this->input->post('id_profil');
	            $nama_restoran = $this->input->post('nama_restoran');
				$tentang = $this->input->post('editor1');
				$no_telp = $this->input->post('no_telp');
				$email = $this->input->post('email');
				$alamat = $this->input->post('alamat');
				$g_maps = $this->input->post('g_maps');
				$data = array(	'nama_restoran'		=>	$nama_restoran,
								'tentang'			=>	$tentang,
								'no_telp'			=>	$no_telp,
								'email'				=>	$email,
								'alamat'			=>	$alamat,
								'g_maps'			=>	$g_maps);

				$ubah = $this->profil_model->edit($id, $data);
				if($ubah){
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Profil.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Profil.</p>
                </div>'); 
				}

		} 
		redirect(base_url('admin/profil'),'refresh');           
	}

}

/* End of file Genre_karya.php */
/* Location: ./application/controllers/admin/Genre_karya.php */