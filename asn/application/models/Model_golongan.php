<?php
class Model_golongan extends CI_model
{
	function tampil_data(){
		$data = $this->db->query("SELECT * FROM data_golongan WHERE id_golongan > 1");
        return $data;
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	} 
	public function getList()
	{
		return $query = $this->db->order_by('id_golongan', 'ASC')->where('id_golongan > 1')->get('data_golongan')->result();
	}
	function getListStr()
	{
		$this->db->select('*');
		$this->db->from('data_golongan');
		$this->db->join('data_pegawai', 'data_golongan.id_golongan= data_pegawai.id_golongan');
		$this->db->where('data_golongan.id_golongan !=','data_pegawai.id_golongan');
		// $this->db->where('data_golongan.id_golongan >=','data_pegawai.id_golongan');
		// $this->db->not_like('data_golongan.id_golongan=','data_pegawai.id_golongan');
		// $this->db->order_by('id_golongan', 'ASC'); 
		return $this->db->get()->result();
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
}