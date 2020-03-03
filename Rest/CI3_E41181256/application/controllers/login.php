<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('admin/login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'pass' => $password
			);
		$cek = $this->m_login->cek_login("tb_login",$where)->num_rows();
		if($cek != FALSE){

			redirect(base_url("index.php/Overview"));

		}else{
			echo "<script>alert('Username atau Password Salah!');history.go(-1);</script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}