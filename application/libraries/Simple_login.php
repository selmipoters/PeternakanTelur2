<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');
class Simple_login {
 // SET SUPER GLOBAL
 var $CI = NULL;
 public function __construct() {
 $this->CI =& get_instance();
 }
 // Fungsi login
 public function login($username, $password) {
 $query = $this->CI->db->get_where('user',array('username'=>$username,'password' => sha1($password)));

 if($query->num_rows() == 1) {
 $data = array(	'username'		=>	$username);
 $this->CI->db->insert('user_history', $data);
 $row = $this->CI->db->query('SELECT * FROM user,level where username = "'.$username.'" and user.id_level=level.id_level');
 $admin = $row->row();
 $id = $admin->id_user;
 $nama = $admin->nama_user;
 $foto = $admin->foto;
 $akses = $admin->nama_level;
 $this->CI->session->set_userdata('username', uniqid(rand()));
 $this->CI->session->set_userdata('nama', $nama);
 $this->CI->session->set_userdata('id_user', $id);
 $this->CI->session->set_userdata('foto', $foto);
 $this->CI->session->set_userdata('akses', $akses);
 redirect(base_url('admin/dasbor'));
 }else{
 $this->CI->session->set_flashdata('gagal','Username/password salah');
 redirect(base_url('admin/login'));
 }
 return false;
 }
 // Proteksi halaman
 public function cek_login() {
 if($this->CI->session->userdata('username') == '') {
 $this->CI->session->set_flashdata('validasigagal','Anda belum login');
 redirect(base_url('admin/login'));
 }
 }
 // Fungsi logout
 public function logout() {
 	$this->CI->session->unset_userdata('username');
 	$this->CI->session->unset_userdata('nama');
 	$this->CI->session->unset_userdata('foto');
 	$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
 	redirect(base_url('admin/login'));
 }
 public function re_login(){
 	$this->CI->session->unset_userdata('username');
 	$this->CI->session->unset_userdata('nama');
 	$this->CI->session->unset_userdata('foto');
 		
 }
}
