<?php
class Model_pdf extends CI_model
{
    private $id_header_surat = "h01";
    public function getListDataSurat($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_perjalanan_dinas.*,tujuan.*,sbuh_tujuan.*, kb.nama_pegawai as nama_kb, 
        kb.nip as nip_kb, plt.nama_pegawai as nama_plt, 
        plt.nip as nip_plt, data_kegiatan.*');
        $this->db->from('data_perjalanan_dinas');
        $this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
        $this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
        $this->db->join('data_pegawai as kb', 'kb.nip = data_perjalanan_dinas.nip_kepala_balai');
        $this->db->join('data_pegawai as plt', 'plt.nip = data_perjalanan_dinas.nip_plt_kb');
        return $this->db->where('data_perjalanan_dinas.id_perjalanan_dinas', $id_perjalanan_dinas)->get()->result();
    }
    public function getListTableSt1($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota_golongan.golongan 
        as golongan');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_perjalanan_dinas', $id_perjalanan_dinas);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
	    $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
        return $this->db->get()->result();
    }

    public function getListTableSt2($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota_golongan.golongan 
        as golongan');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_perjalanan_dinas', $id_perjalanan_dinas);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
        $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
        return $this->db->get()->result();
    }
    public function getListPernyataan($id_anggota_perjadin)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,jabatan_anggota.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota.nip as nip,anggota_golongan.golongan 
        as golongan, ppk.nama_pegawai as nama_ppk, ppk.nip as nip_ppk,');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_anggota_perjadin', $id_anggota_perjadin);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
	    $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
	    $this->db->join('data_jabatan as jabatan_anggota', 'jabatan_anggota.id_jabatan = anggota.id_jabatan');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
        return $this->db->get()->row();
    }
    public function getListSppd($id_anggota_perjadin)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,jabatan_anggota.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai, anggota.nip as nip, anggota_golongan.golongan 
        as golongan, ppk.nama_pegawai as nama_ppk, ppk.nip as nip_ppk, kasub.nama_pegawai as nama_kasub, kasub.nip as nip_kasub, data_kota.*, data_sbuh.*,
        tujuan.kota as kota_tujuan, sbuh_tujuan.nama_provinsi as provinsi_tujuan');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_anggota_perjadin', $id_anggota_perjadin);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
	    $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
	    $this->db->join('data_jabatan as jabatan_anggota', 'jabatan_anggota.id_jabatan = anggota.id_jabatan');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
        $this->db->join('data_kota', 'data_kota.id_kota = data_perjalanan_dinas.id_kota_asal');
		$this->db->join('data_sbuh', 'data_sbuh.id_sbuh = data_kota.id_sbuh');
		$this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
		$this->db->join('data_pegawai as kasub', 'kasub.nip = data_perjalanan_dinas.nip_kasub_bag_tu');
        return $this->db->get()->row();
    }
    public function getListKuitansi($id_anggota_perjadin)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,jabatan_anggota.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota.nip as nip,anggota_golongan.golongan 
        as golongan, ppk.nama_pegawai as nama_ppk, ppk.nip as nip_ppk, data_mak.*, bendahara.nama_pegawai as nama_bendahara,
        bendahara.nip as nip_bendahara ');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_anggota_perjadin', $id_anggota_perjadin);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
	    $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
	    $this->db->join('data_jabatan as jabatan_anggota', 'jabatan_anggota.id_jabatan = anggota.id_jabatan');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_pegawai as bendahara', 'bendahara.nip = data_perjalanan_dinas.nip_bendahara');
        
        return $this->db->get()->row();
    }
    public function getListPengajuan($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_anggota_perjadin.*,jabatan_anggota.*,data_perjalanan_dinas.*,anggota.nama_pegawai as nama_pegawai,anggota.nip as nip,anggota_golongan.golongan 
        as golongan, ppk.nama_pegawai as nama_ppk, ppk.nip as nip_ppk, data_mak.*, bendahara.nama_pegawai as nama_bendahara,
        bendahara.nip as nip_bendahara, tujuan.kota as kota_tujuan, sbuh_tujuan.nama_provinsi as provinsi_tujuan');
        $this->db->from('data_anggota_perjadin');
        $this->db->where('data_anggota_perjadin.id_perjalanan_dinas', $id_perjalanan_dinas);
        $this->db->join('data_perjalanan_dinas', 'data_anggota_perjadin.id_perjalanan_dinas = data_perjalanan_dinas.id_perjalanan_dinas');
	    $this->db->join('data_pegawai as anggota', 'anggota.nip = data_anggota_perjadin.nip_anggota_perjadin');
		$this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
	    $this->db->join('data_jabatan as jabatan_anggota', 'jabatan_anggota.id_jabatan = anggota.id_jabatan');
		$this->db->join('data_golongan as anggota_golongan', 'anggota_golongan.id_golongan = anggota.id_golongan');
		$this->db->join('data_mak', 'data_mak.kode_mak = data_perjalanan_dinas.kode_mak');
		$this->db->join('data_pegawai as bendahara', 'bendahara.nip = data_perjalanan_dinas.nip_bendahara');
        $this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
        return $this->db->get()->result();
    }
    public function getListDataSuratPengajuan($id_perjalanan_dinas)
    {
        //return $query = $this->db->order_by('id_data_kegiatan', 'ASC')->get('data_kegiatan')->result();
        $this->db->select('data_perjalanan_dinas.*, data_kegiatan.*, rrr.nama_pegawai as nama_rrr, 
        kkk.nama_pegawai as nama_kkk, verif.nama_pegawai as nama_verif, ppk.nama_pegawai as nama_ppk, kpa.nama_pegawai as nama_kpa
        , kb.nama_pegawai as nama_kb, 
        kb.nip as nip_kb, plt.nip as nip_plt, plt.nama_pegawai as nama_plt');
        $this->db->from('data_perjalanan_dinas');
        $this->db->join('data_kegiatan', 'data_kegiatan.kode_kegiatan = data_perjalanan_dinas.kode_kegiatan');
        $this->db->join('data_pegawai as rrr', 'rrr.nip = data_kegiatan.nip_pj_rrr');
        $this->db->join('data_pegawai as kkk', 'kkk.nip = data_kegiatan.nip_pj_kegiatan');
        $this->db->join('data_pegawai as verif', 'verif.nip = data_perjalanan_dinas.nip_verifikator');
        $this->db->join('data_pegawai as ppk', 'ppk.nip = data_perjalanan_dinas.nip_ppk');
        $this->db->join('data_pegawai as kpa', 'kpa.nip = data_perjalanan_dinas.nip_kpa');
        $this->db->join('data_pegawai as kb', 'kb.nip = data_perjalanan_dinas.nip_kepala_balai');
        $this->db->join('data_pegawai as plt', 'plt.nip = data_perjalanan_dinas.nip_plt_kb');
        $this->db->join('data_kota as tujuan', 'tujuan.id_kota = data_perjalanan_dinas.id_kota_tujuan');
		$this->db->join('data_sbuh as sbuh_tujuan', 'sbuh_tujuan.id_sbuh = tujuan.id_sbuh');
        return $this->db->where('data_perjalanan_dinas.id_perjalanan_dinas', $id_perjalanan_dinas)->get()->result();
    }
    public function getHeader()
    {
        return $this->db->where('id_header_surat', $this->id_header_surat)->get('data_header_surat')->row();
    }
}
