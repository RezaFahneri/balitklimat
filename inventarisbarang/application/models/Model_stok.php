<?php
class Model_stok extends CI_model
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	function tampil_datapinjam($batas = 0)
	{
		return $query = $this->db->get_where('stok_barang', array('jumlah_barang >' => $batas))->result();
	}

	function tampil_dataperbaikan($batas = 0)
	{
		return $query = $this->db->get_where('stok_barang', array('jumlah_barang >' => $batas))->result();
	}
	// public function getListPPK()
	// {
	// 	return $query = $this->db->where('pumk', 'Iya')->order_by('nip', 'ASC')->get('data_pegawai')->result();
	// }

	function detail_data($id=NULL){
		$query = $this->db->get_where('stok_barang', array('id_barang' => $id)) ->row();
		return $query;
	}

	function input_data($dokumen)
	{
		$data = array(
			'kode'               => $this->input->post('kode'),
			'gambar'                  => $dokumen['file_name'],
			'nama_barang'               => $this->input->post('nama_barang'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'satuan_barang' => $this->input->post('satuan_barang'),
			'jumlah_barang'                             => $this->input->post('jumlah_barang'),
			'kondisi_barang'                             => $this->input->post('kondisi_barang'),
			'keterangan'    => $this->input->post('keterangan'),
		);

		$this->db->insert('stok_barang', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function get_jenis()
	{
		// $query = $this->db->get('data_golongan')->result();
		$query = $this->db->query('SELECT * FROM jenis_barang')->result();
		return $query;
	}

	function get_satuan()
	{
		$query = $this->db->get('satuan_barang')->result();
		return $query;
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($id, $dokumen)
	{
		$data = array(
			'kode'               => $this->input->post('kode'),
			'gambar'                  => $dokumen['file_name'],
			'nama_barang'               => $this->input->post('nama_barang'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'satuan_barang' => $this->input->post('satuan_barang'),
			'jumlah_barang'                             => $this->input->post('jumlah_barang'),
			'kondisi_barang'                             => $this->input->post('kondisi_barang'),
			'keterangan'    => $this->input->post('keterangan'),
		);

		$this->db->where('id_barang', $id)->update('stok_barang', $data);

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
		return $this->db->where('id_barang', $id)->get('stok_barang')->row();
		// return $this->db->query("SELECT * FROM stok_barang WHERE id_barang='$id'")->result();
	}

	function hapus_data($id)
	{
		$this->db->delete('stok_barang', array("id_barang" => $id));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function checkAvailability($id)
	{
		$query = $this->db->where('id_barang', $id)->get('stok_barang');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
