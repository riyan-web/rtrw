<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		// load view admin/overview.php
		// $this->load->view('admin/sidebar');
		// $this->load->view('admin/header');
		$this->load->view('admin/overview');
		// $this->load->view('admin/footer');
	}
}