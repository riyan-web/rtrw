<?php

class Menu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->helper('url');
	}

public function index()
	{
		$data['tab2'] = true;
        $data['judul'] = "Daftar Menu Cafe Turkey";
        $data['menu'] = $this->m_menu->tampil_data()->result(); 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/menu_cafe', $data);
		$this->load->view('admin/footer');
    }

    function tambah(){
        $data['tab2'] = true;
        $data['judul'] = "Daftar Menu Cafe Turkey"; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/tambah_menu');
		$this->load->view('admin/footer');
    }
    
    function tambah_aksi(){
		$nama_brg = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
        $kd_kategori = $this->input->post('kd_kategori');
        $deskripsi = $this->input->post('deskripsi');
        $foto = $this->input->post('foto');
 
		$data = array(
			'nama_barang' => $nama_brg,
			'harga' => $harga,
            'kd_kategori' => $kd_kategori,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
			);
		$this->m_menu->input_data($data,'tb_barang');
		redirect('adminlte/menu/index');
	}
	function hapus($kd_barang){
		$where = array('kd_barang' => $kd_barang);
		$this->m_menu->hapus_data($where,'tb_barang');
		redirect('adminlte/menu/index');
	}
 
	function edit($kd_barang){
		$data['tab2'] = true;
        $data['judul'] = "Daftar Menu Cafe Turkey"; 
		$where = array('kd_barang' => $kd_barang);
		$data['tb_barang'] = $this->m_menu->edit_data($where,'tb_barang')->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/edit_menu',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$kd_barang = $this->input->post('kd_barang');
		$nama_brg = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
        $kd_kategori = $this->input->post('kd_kategori');
        $deskripsi = $this->input->post('deskripsi');
        $foto = $this->input->post('foto');
 
		$data = array(
			'kd_barang' => $kd_barang,
			'nama_barang' => $nama_brg,
			'harga' => $harga,
            'kd_kategori' => $kd_kategori,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
			);
	
		$where = array(
			'kd_barang' => $kd_barang
		);
	
		$this->m_menu->update_data($where,$data,'tb_barang');
		redirect('adminlte/menu/index');
	}
    
}