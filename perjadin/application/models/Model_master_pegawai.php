<?php
class Model_master_pegawai extends CI_model
{
	public function getListGolongan()
	{
		return $query = $this->db->order_by('id_golongan', 'ASC')->get('data_golongan')->result();
	}
	public function getListSPG()
	{
		return $query = $this->db->order_by('id_status_peg', 'ASC')->get('status_kepegawaian')->result();
	}
	public function getListPangkat()
	{
		return $query = $this->db->order_by('id_pangkat', 'ASC')->get('data_pangkat')->result();
	}
	public function getListJabatan()
	{
		return $query = $this->db->order_by('id_jabatan', 'ASC')->get('data_jabatan')->result();
	}
	public function getListDivisi()
	{
		return $query = $this->db->order_by('id_divisi', 'ASC')->get('data_divisi')->result();
	}
}