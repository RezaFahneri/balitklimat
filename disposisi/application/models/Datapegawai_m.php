<?php
class Datapegawai_m extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}
	function detail_data($nip){
		$query = $this->db->get_where('data_pegawai', array('nip' => $nip)) ->row();
		return $query;
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function get_golongan(){
        $query = $this->db->get('data_golongan')->result();
		// $query = $this->db->query('SELECT * FROM `data_golongan` ORDER BY `golongan` DESC')->result();
        // $this->db->order_by('golongan', 'DESC');
		return $query;  
    }
	function get_statuspeg(){
        $query = $this->db->get('status_kepegawaian')->result();
        return $query;  
    }
	function get_pangkat(){
        $query = $this->db->get('data_pangkat')->result();
        return $query;  
    }
	function get_jabatan(){
        $query = $this->db->get('data_jabatan')->result();
        return $query;  
    }
	// function get_role(){
    //     $query = $this->db->get('data_role')->result();
    //     return $query;  
    // }
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