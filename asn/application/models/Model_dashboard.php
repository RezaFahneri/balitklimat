<?php
class Model_dashboard extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}

	public function checkUser($uname){
		$query = $this->db->where('email', $uname)->get('data_pegawai');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
  
    function getListindex($nip)
	{
        $this->db->select('*');
		$this->db->from('data_jadwal_naik_pangkat');
		$this->db->where('nip', $nip);
		$this->db->join('data_pegawai', 'data_jadwal_naik_pangkat.nip= data_pegawai.nip');
		
		return $this->db->get()->result();
	}
	function hapus_data($id_notifikasi){
		return $this->db->delete($this->data_notifikasi , array("id_notifikasi" => $id_notifikasi));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}