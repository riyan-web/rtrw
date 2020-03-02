<?php

class Overview extends CI_Controller {
	public function index()
	{
		$this->load->view("index");
		$this->load->view("404");
		$this->load->view("401");
		$this->load->view("500");
		$this->load->view("charts");
		$this->load->view("layout-sidenav-light");
		$this->load->view("layout-static");
		$this->load->view("login");
		$this->load->view("password");
		$this->load->view("register");
		$this->load->view("tables");
	}
}