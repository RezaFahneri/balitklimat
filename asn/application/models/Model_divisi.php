<?php
class Model_divisi extends CI_model
{
	function tampil_data(){
		$data = $this->db->query("SELECT * FROM data_divisi WHERE id_divisi > 1");
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
		return $query = $this->db->order_by('id_divisi', 'ASC')->where('id_divisi > 1')->get('data_divisi')->result();
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