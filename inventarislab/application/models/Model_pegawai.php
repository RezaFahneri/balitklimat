<?php
class Model_pegawai extends CI_model
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	function getList()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->get()->result();
	}
	function getList2($nip)
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->where('nip', $nip)->get()->result();
	}
	function detail_data($nip)
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->where('nip', $nip)->get()->row();
	}
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function get_data_pegawai_bynip($nip)
	{
		$hsl1 = $this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		return $hsl = $this->db->where('nip', $nip)->get()->row();
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'nip' => $data->nip,
					'golongan' => $data->golongan,
					'pangkat' => $data->pangkat,
					'tmt' => $data->tmt,
				);
			}
		}
		return $hasil;
	}
	public function getDetail()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		return $this->db->get()->result();
	}
	function tampil_datapenggunaan()
	{
		if ($this->db->where('id_jabatan', '5')) {
			return $query = $this->db->get_where('data_pegawai', array('nama_pegawai'))->result();
		}
	}
	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
