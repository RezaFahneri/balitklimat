<?php
class Model_kenaikan_pangkat extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function get_kode_kp(){
        $q = $this->db->query("SELECT MAX(RIGHT(kode_kp,3)) AS kd_max FROM data_jadwal_naik_pangkat WHERE DATE(tgl_penjadwalan)=CURDATE()");
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
    function search_pegawai($nama_pegawai){
        $this->db->like('nama_pegawai', $nama_pegawai, 'both');
        $this->db->order_by('nama_pegawai', 'ASC');
        $this->db->limit(10);
        return $this->db->get('data_pegawai')->result();
    }
    // function simpan_kp($kode_kp){
    //     $hasil=$this->db->query("INSERT INTO data_jadwal_naik_pangkat (kode_kp) VALUES ('$kode_kp')");
    //     return $hasil;
    // }
	// function edit_data($where,$table){
	// 	return $this->db->get_where($table,$where);
	// }
	// function update_data($where,$data,$table){
	// 	$this->db->where($where);
	// 	$this->db->update($table,$data);
	// }
	// function hapus_data($where,$table){
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }
}