<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_menu'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$stok_barang = $this->input->post('stok_barang');
		$harga = $this->input->post('harga');
 
		$data = array(
			'id_barang' => $id_barang,
			'nama_barang' => $nama_barang,
			'stok_barang' => $stok_barang,
			'harga' => $harga
			);
		$this->m_data->input_data($data,'tb_menu');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id_barang' => $id);
		$this->m_data->hapus_data($where,'tb_menu');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id_barang' => $id);
		$data['user'] = $this->m_data->edit_data($where,'tb_menu')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id_barang');
	$nama = $this->input->post('nama_barang');
	$stok = $this->input->post('stok_barang');
	$harga = $this->input->post('harga');
 
	$data = array(
		'nama_barang' => $nama,
		'stok_barang' => $stok,
		'harga' => $harga
	);
 
	$where = array(
		'id_barang' => $id
	);
 
	$this->m_data->ubah_data($where,$data,'tb_menu');
	redirect('crud/index');
}
}