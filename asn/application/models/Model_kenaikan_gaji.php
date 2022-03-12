<?php
class Model_kenaikan_gaji extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function getList()
	{
        $this->db->select('data_jadwal_gaji_berkala.*,data_pegawai.*,data_golongan.*,data_pangkat.*');
		$this->db->from('data_jadwal_gaji_berkala');
		$this->db->join('data_pegawai', 'data_jadwal_gaji_berkala.nip= data_pegawai.nip');
        $this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		
		return $this->db->get()->result();
	}
    function getList2($kode_kgb)
	{
        $this->db->select('data_jadwal_gaji_berkala.*,data_pegawai.*,data_golongan.*,data_pangkat.*');
		$this->db->from('data_jadwal_gaji_berkala');
		$this->db->join('data_pegawai', 'data_jadwal_gaji_berkala.nip= data_pegawai.nip');
        $this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
    
		return $this->db->where('kode_kgb',$kode_kgb)->get()->result();
	}
    function get_kode_kgb(){
        $q = $this->db->query("SELECT MAX(RIGHT(kode_kgb,3)) AS kd_max FROM data_jadwal_gaji_berkala WHERE DATE(tgl_penjadwalan)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }
	function detail_jadwalkgb($kode_kgb){
		$this->db->select('data_jadwal_gaji_berkala.*,data_pegawai.*,data_golongan.*,data_pangkat.*');
		$this->db->from('data_jadwal_gaji_berkala');
		$this->db->join('data_pegawai', 'data_jadwal_gaji_berkala.nip= data_pegawai.nip');
        $this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		return $this->db->where('kode_kgb',$kode_kgb)->get()->row();
	}
	public function getDetail1($email){
		$this->db->select('data_jadwal_gaji_berkala.*,data_pegawai.*,data_golongan.*,data_pangkat.*');
		$this->db->from('data_jadwal_gaji_berkala');
		$this->db->join('data_pegawai', 'data_jadwal_gaji_berkala.nip= data_pegawai.nip');
        $this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		return $this->db->where('email',$email)->get()->row_array();
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
	}
   
}