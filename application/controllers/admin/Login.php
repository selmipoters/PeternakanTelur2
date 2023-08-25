<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
				// Fungsi Login
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		if($valid->run()) 
		{
		$this->simple_login->login($username,$password, base_url('admin/dasbor'), base_url('login/login'));
		}
		$data = array(	'title'			=>	'Halaman Login Admin Restoran Micell');
		$this->load->view('admin/login/login_view', $data, FALSE);
		$this->simple_login->re_login();
// End fungsi login
	}
	public function logout() {
	$this->simple_login->logout(); 
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */