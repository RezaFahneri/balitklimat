<?php
class Model_sbuh extends CI_model
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
		return $query = $this->db->order_by('id_sbuh', 'ASC')->get('data_sbuh')->result();
	}
	public function getList2($id_sbuh)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('*');
		$this->db->from('data_sbuh');
		return $this->db->where('id_sbuh',$id_sbuh)->get()->result();
	}
	function get_data_sbuh($id_sbuh){
		$hsl=$this->db->query("SELECT * FROM data_sbuh WHERE id_sbuh='$id_sbuh'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id_sbuh' => $data->id_sbuh,
					'nama_provinsi' => $data->nama_provinsi,
					'luar_kota' => $data->luar_kota,
					'dalam_kota' => $data->dalam_kota,
					);
			}
		}
		return $hasil;
	}
}