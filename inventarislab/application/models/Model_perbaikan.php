<?php
class Model_perbaikan extends CI_model
{
	function tampil_data($table)
	{
		// $this->db->select('*');
		// $this->db->join('stok_barang', 'stok_barang.id_barang = pinjam_barang.id_barang');
		// if ($id_barang != null) {
		// 	$this->db->where('id_barang', $id_barang);
		// }
		return $this->db->get($table);
	}

	public function getList()
	{
		//return $query = $this->db->order_by('id_proyek', 'ASC')->get('proyek')->result();
		$this->db->select('*');
		$this->db->from('perbaikan_alat');
		$this->db->join('stok_alat', 'stok_alat.idalat = perbaikan_alat.idalat');
		return $this->db->get()->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


		
}
