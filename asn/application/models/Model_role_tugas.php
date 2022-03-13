<?php
class  Model_role_tugas extends CI_model
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
	function getList2()
	{
        $this->db->select('data_tugas.*,data_pegawai.*');
		$this->db->from('data_tugas');
		$this->db->join('data_pegawai', 'data_tugas.nip= data_pegawai.nip');
		
		return $this->db->get()->result();
	}
	public function getList()
	{
		return $query = $this->db->order_by('id_role', 'ASC')->get('data_role')->result();
	}
	public function getList_tugas()
	{
		return $query = $this->db->order_by('id_tugas', 'ASC')->get('data_tugas')->result();
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
	function tambah_tim($where,$table){
		return $this->db->get_where($table,$where);
	}
	function tambah_tim_role($where,$table){
		return $this->db->get_where($table,$where);
	}
	
}