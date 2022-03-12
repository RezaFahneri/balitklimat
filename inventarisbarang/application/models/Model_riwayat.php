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
		$this->db->from('riwayat_peminjaman');
		$this->db->join('stok_barang', 'stok_barang.id_barang = riwayat_peminjaman.id_barang');
		return $this->db->get()->result();
	}

	function detail_data($id=NULL){
		$this->db->join('stok_barang', 'stok_barang.id_barang = riwayat_peminjaman.id_barang');
		$query = $this->db->get_where('riwayat_peminjaman', array('id_riwayat' => $id)) ->row();
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
