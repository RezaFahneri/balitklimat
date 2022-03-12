<?php
class Model_dashboard extends CI_model
{
    public function getListAnggota()
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,data_mak.*,data_kegiatan.*,
        tujuan.*,sbuh_tujuan.*,anggota.nama_pegawai as nama_anggota_perjadin');
        $this->db->from('data_anggota_perjadin');
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
        $this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
        $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
        $this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
        $this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
        $this->db->where('status_perjalanan_dinas=','Sedang Berlangsung');
        return $this->db->get()->result();
    }
    public function getListMak()
	{
		return $query = $this->db->order_by('kode_mak', 'ASC')->get('data_mak')->result();
	}
    public function getListKegiatan()
	{
		//return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
		$this->db->select('*');
		$this->db->from('data_kegiatan');
        $this->db->where('biaya_pengeluaran!=',0);
		return $this->db->get()->result();
	}
}
