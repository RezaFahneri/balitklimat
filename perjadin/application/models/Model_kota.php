<?php
class Model_Kota extends CI_model
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
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function getList()
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_kota.*,data_sbuh.*');
		$this->db->from('data_kota');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		return $this->db->get()->result();
	}
	public function getList2($id_kota)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_kota.*,data_sbuh.*');
		$this->db->from('data_kota');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		return $this->db->where('id_kota',$id_kota)->get()->result();
	}
}