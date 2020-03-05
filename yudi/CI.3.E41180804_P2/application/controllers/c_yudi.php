<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_yudi extends CI_Controller {
	
	function index(){
		$this->load->library('yudi');
		$this->yudi->nama_saya();
                echo br(3);
                $this->yudi->nama_kamu("Andi");
	}

}