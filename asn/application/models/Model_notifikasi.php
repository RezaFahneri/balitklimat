<?php
class Model_notifikasi extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function getList()
	{
		$this->db->select('*');
		$this->db->from('data_notifikasi');
		return $this->db->get()->result();
	}

}