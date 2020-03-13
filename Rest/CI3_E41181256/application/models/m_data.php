<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('users');
    }
    
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}