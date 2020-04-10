<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{	
		$data['tab1'] = true;
		$data['judul'] = "Daftar Menu - D-jenius Cafe"; 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/overview', $data);
		$this->load->view('admin/footer');
	}
	
} 