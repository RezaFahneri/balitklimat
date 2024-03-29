<?php
class Model_satuan extends CI_model
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
		$this->db->delete('satuan_barang', array("id_satuan" => $id));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function getList(){
		return $query = $this->db->order_by('id_satuan', 'ASC')->get('satuan_barang')->result();
	}
	function tampil_datasatuan()
	{
		return $query = $this->db->get_where('satuan_barang', array('satuan_barang'))->result();
	}
	
}