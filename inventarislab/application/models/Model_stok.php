<?php
class Model_stok extends CI_model
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	function tampil_datapinjam($batas = 0)
	{
		return $query = $this->db->get_where('stok_alat', array('stock >' => $batas))->result();
	}

	function tampil_dataperbaikan($batas = 0)
	{
		return $query = $this->db->get_where('stok_alat', array('stock >' => $batas))->result();
	}

	function detail_data($id=NULL){
		$query = $this->db->get_where('stok_alat', array('idalat' => $id)) ->row();
		return $query;
	}

	function input_data($dokumen)
	{
		$data = array(
			'image'                  => $dokumen['file_name'],
			'namaalat'               => $this->input->post('namaalat'),
			'deskripsi' => $this->input->post('deskripsi'),
			'stock' => $this->input->post('stock'),
			'kondisi'                             => $this->input->post('kondisi'),
		);

		$this->db->insert('stok_alat', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// function get_jenis()
	// {
	// 	// $query = $this->db->get('data_golongan')->result();
	// 	$query = $this->db->query('SELECT * FROM jenis_barang')->result();
	// 	return $query;
	// }

	// function get_satuan()
	// {
	// 	$query = $this->db->get('satuan_barang')->result();
	// 	return $query;
	// }

	// function edit_data($where, $table)
	// {
	// 	return $this->db->get_where($table, $where);
	// }

	function update_data($id, $dokumen)
	{
		$data = array(
			'image'                  => $dokumen['file_name'],
			'namaalat'               => $this->input->post('namaalat'),
			'deskripsi' => $this->input->post('deskripsi'),
			'stock' => $this->input->post('stock'),
			'kondisi'                             => $this->input->post('kondisi'),
		);

		$this->db->where('idalat', $id)->update('stok_alat', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function update_data_stok($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function getDetail($id)
	{
		return $this->db->where('idalat', $id)->get('stok_alat')->row();
		// return $this->db->query("SELECT * FROM stok_alat WHERE id_barang='$id'")->result();
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
