<?php
class Model_anggota_perjadin extends CI_model
{
	private $table1 = "data_anggota_perjadin";
	private $id_header_surat = "h01";
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
	function hapus_data($id_anggota_perjadin){
		return $this->db->delete($this->table1, array("id_anggota_perjadin" => $id_anggota_perjadin));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
    public function getList()
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,anggota.nama_pegawai as nama_anggota_perjadin');
		$this->db->from('data_anggota_perjadin');
		$this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
		$this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		return $this->db->get()->result();
	}

	public function getListAnggota()
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,
		data_mak.*,data_kegiatan.*,anggota.nama_pegawai as nama_anggota_perjadin,data_jenis_keg.*,data_kota.*,data_sbuh.*,
		pumk.nama_pegawai as nama_pumk, tujuan.kota as kota_tujuan, 
		sbuh_tujuan.nama_provinsi as provinsi_tujuan, sbuh_tujuan.luar_kota as luar_kota_tujuan, 
		sbuh_tujuan.dalam_kota as dalam_kota_tujuan');
		$this->db->from('data_anggota_perjadin');
		$this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
		$this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		$this->db->join('data_jenis_keg', 'data_jenis_keg.id_jenis_keg = data_kegiatan.id_jenis_keg');
		$this->db->join('data_pegawai as pumk', 'pumk.nip = data_perjalanan_dinas.nip_pumk');
		$this->db->join('data_kota', 'data_kota.id_kota = data_perjalanan_dinas.id_kota_asal');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
		return $this->db->get()->result();
	}
	public function getListStatistik()
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->distinct();
		$this->db->select('anggota.nama_pegawai as nama_anggota_perjadin,anggota.nip as nip_anggota_perjadin,
		anggota_pangkat.pangkat as pangkat_anggota,anggota_golongan.golongan as golongan_anggota');
		$this->db->from('data_anggota_perjadin');
		$this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
		$this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_pangkat as anggota_pangkat', 'anggota_pangkat.id_pangkat = anggota.id_pangkat');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		return $this->db->get()->result();
	}
	public function jumlahHari()
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		//$this->db->where('nip_anggota_perjadin =', $nip_anggota_perjadin);
		$this->db->select('data_anggota_perjadin.*');
		$this->db->from('data_anggota_perjadin');
		return $this->db->get()->result();
	}
	public function getList2($id_anggota_perjadin)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,data_kota.*,data_sbuh.*, 
		tujuan.kota as kota_tujuan, sbuh_tujuan.nama_provinsi as provinsi_tujuan, sbuh_tujuan.luar_kota as luar_kota_tujuan, 
		sbuh_tujuan.dalam_kota as dalam_kota_tujuan, anggota.nama_pegawai as nama_anggota_perjadin');
		$this->db->from('data_anggota_perjadin');
		$this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
		$this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
		$this->db->join('data_kota', 'data_kota.id_kota = data_perjalanan_dinas.id_kota_asal');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
		return $this->db->where('data_anggota_perjadin.id_anggota_perjadin',$id_anggota_perjadin)->get()->result();
	}
	public function getDetail($kode_kegiatan)
	{
		return $this->db->where('kode_kegiatan', $kode_kegiatan)->get('data_kegiatan')->row();
	}
	

	public function getListCopy($id_perjalanan_dinas)
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,data_jenis_keg.*,data_kota.*,data_sbuh.*,
		pumk.nama_pegawai as nama_pumk, tujuan.kota as kota_tujuan, 
		sbuh_tujuan.nama_provinsi as provinsi_tujuan, sbuh_tujuan.luar_kota as luar_kota_tujuan, 
		sbuh_tujuan.dalam_kota as dalam_kota_tujuan,verifikator.nama_pegawai as nama_verifikator,
		,kpa.nama_pegawai as nama_kpa, ppk.nama_pegawai as nama_ppk, bendahara.nama_pegawai as nama_bendahara
		, anggota.nama_pegawai as nama_anggota_perjadin');
		$this->db->from('data_anggota_perjadin');
		$this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
		$this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
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
		return $this->db->where('data_anggota_perjadin.id_perjalanan_dinas',$id_perjalanan_dinas)->get()->row();
	}
	public function anggotaCheck($nip_anggota_perjadin){
		$hue = $this->db->where('nip_anggota_perjadin', $nip_anggota_perjadin)
		->where('status_perjalanan_dinas!=', 'Selesai' )
		->get('data_anggota_perjadin');
		if($hue->num_rows() == 0){
			return true;
		}else{
			return false;
		}
	}
}