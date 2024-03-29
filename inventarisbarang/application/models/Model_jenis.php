<?php
class Model_jenis extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	// function hapus_data($where,$table){
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }
	function hapus_data($id)
	{
		$this->db->delete('jenis_barang', array("id_jenis" => $id));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function getList(){
		return $query = $this->db->order_by('id_jenis', 'ASC')->get('jenis_barang')->result();
	}
	function tampil_datajenis()
	{
		return $query = $this->db->get_where('jenis_barang', array('jenis_barang'))->result();
	}
}