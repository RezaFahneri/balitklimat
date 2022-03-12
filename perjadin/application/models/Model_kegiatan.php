<?php
class Model_kegiatan extends CI_model
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
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_kegiatan.*,data_pegawai.nama_pegawai as nama_pj_keg, rrr.nama_pegawai as nama_pj_rrr, data_jenis_keg.jenis_keg');
		$this->db->from('data_kegiatan');
		$this->db->join('data_jenis_keg', 'data_jenis_keg.id_jenis_keg = data_kegiatan.id_jenis_keg');
		$this->db->join('data_pegawai', 'data_pegawai.nip = data_kegiatan.nip_pj_kegiatan');
        $this->db->join('data_pegawai as rrr', 'rrr.nip = data_kegiatan.nip_pj_rrr');
		return $this->db->get()->result();
	}
	public function getList2($kode_keg)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_kegiatan.*,data_pegawai.nama_pegawai as nama_pj_keg, rrr.nama_pegawai as nama_pj_rrr, data_jenis_keg.jenis_keg');
		$this->db->from('data_kegiatan');
		$this->db->join('data_jenis_keg', 'data_jenis_keg.id_jenis_keg = data_kegiatan.id_jenis_keg');
		$this->db->join('data_pegawai', 'data_pegawai.nip = data_kegiatan.nip_pj_kegiatan');
        $this->db->join('data_pegawai as rrr', 'rrr.nip = data_kegiatan.nip_pj_rrr');
		return $this->db->where('kode_kegiatan',$kode_keg)->get()->result();
	}
	public function getDetail($kode_kegiatan)
	{
		return $this->db->where('kode_kegiatan', $kode_kegiatan)->get('data_kegiatan')->row();
	}
	public function kodeKegiatanCheck($kode_kegiatan){
		$hue = $this->db->where('kode_kegiatan', $kode_kegiatan)
		->get('data_kegiatan');
		if($hue->num_rows() == 0){
			return true;
		}else{
			return false;
		}
	}
}