<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function login()
	{
        // load view login.php
		$this->load->view("admin/login");
	}

	public function index()
	{
		// load view overview.php atau indexnya
		$this->load->view("admin/overview");
	}
}