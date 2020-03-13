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
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$cek = $this->db->get("users")->row_array();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/Overview"));
		}else{
			echo "<script>alert('Username atau Password Salah!');history.go(-1);</script>";
		}
	}

	function logout(){
		$this->session->unse_userdata(array('nama' => ''));
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}