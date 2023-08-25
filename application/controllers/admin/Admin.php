<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('pesan_model');
		$this->load->model('peternakan_model');
 
	}
	public function index()
	{
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$admin1 = $this ->admin_model->listing_admin_join();
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);		
		$data = array(	'title'			=>	'Data Admin ('.$data_admin.')',
						'admin'			=>	$admin1,
						'data_pesan'	=>	$data_pesan,
						'data_peternakan'	=>	$data_peternakan,
						'data_admin'	=>	$data_admin,
						'isi'			=>	'admin/admin/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		$this->session->set_flashdata('msg_list','');		
	}
	public function tambah()
	{
		if(ucfirst($this->session->userdata('akses'))=="SUPER ADMIN" || ucfirst($this->session->userdata('akses'))=="OWNER"){
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$level = $this->admin_model->listing_level();
		$notis = $this->admin_model->notis();
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);		
		$data = array(	'title'			=>	'Tambah Admin',
						'notis'			=>	$notis,
						'data_pesan'	=>	$data_pesan,
						'data_peternakan'	=>	$data_peternakan,
						'level'			=>	$level,
						'data_admin'	=>	$data_admin,
						'isi'			=>	'admin/admin/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Hak Akses Tidak Mencukupi</p>
                </div>');
		redirect(base_url('admin/admin'),'refresh');
	}	
	}
	public function edit()
	{
		if(ucfirst($this->session->userdata('akses'))=="SUPER ADMIN" || ucfirst($this->session->userdata('akses'))=="OWNER"){
		$kode=$this->uri->segment(4);
		$tampil = $this->admin_model->listing_by_id($kode);
		$pesan = $this ->pesan_model->listing();
		$data_pesan = count($pesan);
		$admin = $this ->admin_model->listing();
		$data_admin = count($admin);
		$level = $this->admin_model->listing_level();
		$peternakan = $this->peternakan_model->listing();
		$data_peternakan = count($peternakan);		
		$data = array(	'title'			=>	'Ubah Admin',
						'data_pesan'	=>	$data_pesan,
						'data_admin'	=>	$data_admin,
						'data_peternakan'	=>	$data_peternakan,
						'level'			=>	$level,
						'tampil'		=>	$tampil,
						'isi'			=>	'admin/admin/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Hak Akses Tidak Mencukupi</p>
                </div>');
		redirect(base_url('admin/admin'),'refresh');
	}
	}
	public function hapus()
	{
		if(ucfirst($this->session->userdata('akses'))=="SUPER ADMIN" || ucfirst($this->session->userdata('akses'))=="OWNER"){
		$kode=$this->uri->segment(4);
		$hapus = $this->admin_model->delete($kode);
		if($hapus){
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menghapus Data Admin.</p>
                </div>');	
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menghapus Data Admin.</p>
                </div>');
		}
		}else{
		$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Gagal</h4>
                    <p>Hak Akses Tidak Mencukupi</p>
                </div>');
	}
		redirect(base_url('admin/admin'),'refresh');
	}
	public function simpan_data(){ 
		$config['upload_path'] = './assets/images/tim/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/tim/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 600;
	            $config['height']= 550;
	            $config['new_image']= './assets/images/tim/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
	            $id = $this->input->post('id_user');
	            $username = $this->input->post('username');
				$password = $this->input->post('password');
				$nama = $this->input->post('nama_user');
				$fb = $this->input->post('fb');
				$twitter = $this->input->post('twitter');
				$ig = $this->input->post('ig');
				$id_level = $this->input->post('id_level');
				$data = array(	'id_user'		=>	$id,
								'username'		=>	$username,
								'password'		=>	sha1($password),
								'nama_user'		=>	$nama,
								'foto'			=>	$gambar,
								'fb'			=>	$fb,
								'twitter'		=>	$twitter,
								'ig'			=>	$ig,
								'id_level'		=>	substr($id_level,0,3));

				$tambah = $this->admin_model->tambah($data);
				if($tambah){
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Menambah Data Admin</p>
                </div>');	
			}else{
				$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Admin.</p>
                </div>'); 	
			}
				
		}else{
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Admin.</p>
                </div>'); 
	    }
	                
	}else{
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Menambah Data Admin.</p>
                </div>');
		} 
            redirect(base_url('admin/admin/tambah'),'refresh');
	}
	public function simpan_edit(){ 
		$config['upload_path'] = './assets/images/tim/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/tim/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 600;
	            $config['height']= 550;
	            $config['new_image']= './assets/images/tim/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
	            $id = $this->input->post('id_user');
	            $username = $this->input->post('username');
				$password = $this->input->post('password');
				$nama = $this->input->post('nama_user');
				$fb = $this->input->post('fb');
				$twitter = $this->input->post('twitter');
				$ig = $this->input->post('ig');
				$id_level = $this->input->post('id_level');
				$data = array(	'username'		=>	$username,
								'password'		=>	sha1($password),
								'nama_user'			=>	$nama,
								'foto'			=>	$gambar,
								'fb'			=>	$fb,
								'twitter'		=>	$twitter,
								'ig'			=>	$ig,
								'id_level'		=>	substr($id_level,0,3));

				$ubah = $this->admin_model->edit($id, $data);
				if($ubah){
				$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Admin.</p>
                </div>');	
			}else{
				$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Admin.</p>
                </div>'); 	
			}
				
		}else{
			$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Admin.</p>
                </div>'); 
	    }
	                
	}else{
			$id = $this->input->post('id_user');
	            $username = $this->input->post('username');
				$password = $this->input->post('password');
				$nama = $this->input->post('nama_user');
				$fb = $this->input->post('fb');
				$twitter = $this->input->post('twitter');
				$ig = $this->input->post('ig');
				$id_level = $this->input->post('id_level');
				$data = array(	'username'		=>	$username,
								'password'		=>	sha1($password),
								'nama_user'			=>	$nama,
								'fb'			=>	$fb,
								'twitter'		=>	$twitter,
								'ig'			=>	$ig,
								'id_level'		=>	substr($id_level,0,3));

				$ubah = $this->admin_model->edit($id, $data);
				if($ubah){
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda Berhasil Mengubah Data Admin.</p>
                </div>');	
				}else{
					$this->session->set_flashdata('msg_list', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Gagal Mengubah Data Admin.</p>
                </div>'); 
				}

		} 
		redirect(base_url('admin/admin'),'refresh');           
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/admin/Admin.php */
