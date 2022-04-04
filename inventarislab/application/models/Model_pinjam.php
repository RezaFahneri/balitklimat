<?php
class Model_pinjam extends CI_model
{
	function tampil_data($table)
	{
		// $this->db->select('*');
		// $this->db->join('stok_alat', 'stok_alat.id_barang = pinjam_barang.id_barang');
		// if ($id_barang != null) {
		// 	$this->db->where('id_barang', $id_barang);
		// }
		return $this->db->get($table);
	}

	public function getList()
	{
		//return $query = $this->db->order_by('id_proyek', 'ASC')->get('proyek')->result();
		$this->db->select('*');
		$this->db->from('pinjam_alat');
		$this->db->join('stok_alat', 'stok_alat.idalat = pinjam_alat.idalat');
		return $this->db->get()->result();
	}

	function detail_data($id=NULL){
		$this->db->join('stok_alat', 'stok_alat.idalat = pinjam_alat.idalat');
		$query = $this->db->get_where('pinjam_alat', array('id_pinjam' => $id)) ->row();
		return $query;
	}
	function detail_datapdf($id){
		$this->db->join('stok_alat', 'stok_alat.idalat = pinjam_alat.idalat');
		$query = $this->db->get_where('pinjam_alat', array('id_pinjam' => $id)) ->row();
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_data_pinjam($id)
	{
		$data = array(
			// 'idalat'    => $this->input->post('idalat'),
			'peminjam'    => $this->input->post('peminjam'),
			'tglpinjam'   => $this->input->post('tglpinjam'),
			'tglselesai'  => $this->input->post('tglselesai'),
			'qty'         => $this->input->post('qty'),
			'kegiatan'    => $this->input->post('kegiatan'),
			'lokasi'      => $this->input->post('lokasi'),
			'keterangan'      => $this->input->post('keterangan'),
		);

		$this->db->where('id_pinjam', $id)->update('pinjam_alat', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

    public function getDetail($id)
	{
		$this->db->join('stok_alat', 'stok_alat.idalat = pinjam_alat.idalat');
		return $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row();
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

		
	// }
}
