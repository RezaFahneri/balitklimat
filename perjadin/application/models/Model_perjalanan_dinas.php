<?php
class Model_perjalanan_dinas extends CI_model
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
		$this->db->select('data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,data_jenis_keg.*,data_kota.*,data_sbuh.*,pumk.nama_pegawai as nama_pumk, tujuan.kota as kota_tujuan, sbuh_tujuan.nama_provinsi as provinsi_tujuan');
		$this->db->from('data_perjalanan_dinas');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		$this->db->join('data_jenis_keg', 'data_jenis_keg.id_jenis_keg = data_kegiatan.id_jenis_keg');
		$this->db->join('data_pegawai as pumk', 'pumk.nip = data_perjalanan_dinas.nip_pumk');
		$this->db->join('data_kota', 'data_kota.id_kota = data_perjalanan_dinas.id_kota_asal');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
		//$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		return $this->db->get()->result();
	}
	public function getList2($id_perjalanan_dinas)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,data_jenis_keg.*,data_kota.*,data_sbuh.*,
		pumk.nama_pegawai as nama_pumk, tujuan.kota as kota_tujuan, 
		sbuh_tujuan.nama_provinsi as provinsi_tujuan, sbuh_tujuan.luar_kota as luar_kota_tujuan, 
		sbuh_tujuan.dalam_kota as dalam_kota_tujuan,verifikator.nama_pegawai as nama_verifikator,
		,kpa.nama_pegawai as nama_kpa, ppk.nama_pegawai as nama_ppk, bendahara.nama_pegawai as nama_bendahara');
		$this->db->from('data_perjalanan_dinas');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		$this->db->join('data_jenis_keg', 'data_jenis_keg.id_jenis_keg = data_kegiatan.id_jenis_keg');
		$this->db->join('data_pegawai as pumk', 'pumk.nip = data_perjalanan_dinas.nip_pumk');
		$this->db->join('data_kota', 'data_kota.id_kota = data_perjalanan_dinas.id_kota_asal');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
		$this->db->join('data_pegawai', 'data_pegawai.nip = data_kegiatan.nip_pj_kegiatan');
        $this->db->join('data_pegawai as rrr', 'rrr.nip = data_kegiatan.nip_pj_rrr');
		$this->db->join('data_pegawai as verifikator', 'verifikator.nip = data_perjalanan_dinas.nip_verifikator');
		$this->db->join('data_pegawai as kpa', 'kpa.nip = data_perjalanan_dinas.nip_kpa');
		$this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
		$this->db->join('data_pegawai as bendahara', 'bendahara.nip = data_perjalanan_dinas.nip_bendahara');
		return $this->db->where('id_perjalanan_dinas',$id_perjalanan_dinas)->get()->result();
	}
	public function detail_data($id_perjalanan_dinas)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,data_jenis_keg.*,data_kota.*,data_sbuh.*,
		pumk.nama_pegawai as nama_pumk, tujuan.kota as kota_tujuan, 
		sbuh_tujuan.nama_provinsi as provinsi_tujuan, sbuh_tujuan.luar_kota as luar_kota_tujuan, 
		sbuh_tujuan.dalam_kota as dalam_kota_tujuan,verifikator.nama_pegawai as nama_verifikator,
		,kpa.nama_pegawai as nama_kpa, ppk.nama_pegawai as nama_ppk, bendahara.nama_pegawai as nama_bendahara');
		$this->db->from('data_perjalanan_dinas');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		$this->db->join('data_jenis_keg', 'data_jenis_keg.id_jenis_keg = data_kegiatan.id_jenis_keg');
		$this->db->join('data_pegawai as pumk', 'pumk.nip = data_perjalanan_dinas.nip_pumk');
		$this->db->join('data_kota', 'data_kota.id_kota = data_perjalanan_dinas.id_kota_asal');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
		$this->db->join('data_pegawai', 'data_pegawai.nip = data_kegiatan.nip_pj_kegiatan');
        $this->db->join('data_pegawai as rrr', 'rrr.nip = data_kegiatan.nip_pj_rrr');
		$this->db->join('data_pegawai as verifikator', 'verifikator.nip = data_perjalanan_dinas.nip_verifikator');
		$this->db->join('data_pegawai as kpa', 'kpa.nip = data_perjalanan_dinas.nip_kpa');
		$this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
		$this->db->join('data_pegawai as bendahara', 'bendahara.nip = data_perjalanan_dinas.nip_bendahara');
		return $this->db->where('id_perjalanan_dinas',$id_perjalanan_dinas)->get()->row();
	}
	public function getDetail($kode_kegiatan)
	{
		return $this->db->where('kode_kegiatan', $kode_kegiatan)->get('data_kegiatan')->row();
	}
}