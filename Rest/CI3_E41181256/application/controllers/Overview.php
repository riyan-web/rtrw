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

	public function tables()
	{
		// load view tables.php
		$data['users'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/tables',$data);
	}
}