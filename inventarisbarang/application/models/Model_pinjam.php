<?php
class Model_pinjam extends CI_model
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function getList()
	{
		$this->db->select('*');
		$this->db->from('pinjam_barang');
		$this->db->join('stok_barang', 'stok_barang.id_barang = pinjam_barang.id_barang');
		return $this->db->get()->result();
	}

	function detail_data($id=NULL){
		$this->db->join('stok_barang', 'stok_barang.id_barang = pinjam_barang.id_barang');
		$query = $this->db->get_where('pinjam_barang', array('id_pinjam' => $id)) ->row();
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
