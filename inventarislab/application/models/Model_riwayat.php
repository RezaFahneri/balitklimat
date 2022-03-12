<?php
class Model_riwayat extends CI_model
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function getList()
	{
		//return $query = $this->db->order_by('id_proyek', 'ASC')->get('proyek')->result();
		$this->db->select('*');
		$this->db->from('riwayat_alat');
		$this->db->join('stok_alat', 'stok_alat.idalat = riwayat_alat.idalat');
		return $this->db->get()->result();
	}

	function detail_data($id=NULL){
		$this->db->join('stok_alat', 'stok_alat.idalat = riwayat_alat.idalat');
		$query = $this->db->get_where('riwayat_alat', array('id_riwayat' => $id)) ->row();
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

		
	// }
}
