<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_data');
                $this->load->helper('url');

	}
	
	public function index()
	{
		// load view overview.php atau indexnya
		$this->load->view("admin/overview");
	}

	public function static()
	{
		// load view layout-static.php
		$this->load->view("admin/layout-static");
	}

	public function sidenav()
	{
		// load view layout-sidenav.php
		$this->load->view("admin/layout-sidenav");
	}

	public function register()
	{
		// load view register.php
		$this->load->view("admin/register");
	}

	public function login()
	{
		$this->load->view("admin/login");
	}

	public function password()
	{
		// load view password.php
		$this->load->view("admin/password");
	}

	public function charts()
	{
		// load view charts.php
		$this->load->view("admin/charts");
	}

	public function input()
	{
		$this->load->view("admin/input");
	}

	public function tables()
	{
		// load view tables.php
		$data['users'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/tables',$data);
	}

	function hapus($id){
		$where = array('user_id' => $id);
		$this->m_data->hapus_data($where,'users');
		redirect('Overview/tables');
	}

	function tambah_aksi(){
		$nama = $this->input->post('inputFullname');
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');
		$username = $this->input->post('inputUsername');
		$role = $this->input->post('inputRole');
		$phone = $this->input->post('inputPhone');
 
		$data = array(
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'full_name' => $nama,
			'phone' => $phone,
			'role' => $role
			);
		$this->m_data->input_data($data,'users');
		redirect('Overview/tables');
	}
}
function edit($id) {
	$where = array('user_id' => $id);
	$data['users'] = $this->m_data->edit_data($where,'users')->result();
	$this->load->view('admin/edit',$data);
}
function update(){
	$id = $this->input->post('inputId');
	$nama = $this->input->post('inputFullname');
	$email = $this->input->post('inputEmail');
	$password = $this->input->post('inputPassword');
	$username = $this->input->post('inputUsername');
	$role = $this->input->post('inputRole');
	$phone = $this->input->post('inputPhone');
 
	$data = array(
		'username' => $username,
		'password' => $password,
		'email' => $email,
		'full_name' => $nama,
		'phone' => $phone,
		'role' => $role
	);
 
	$where = array(
		'user_id' => $id
	);
 
	$this->m_data->update_data($where,$data,'users');
	redirect('Overview/tables');
}