<?php
class Model_profil extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function getDetail($nip=NULL){
		return $this->db->where('nip', $nip)->get('data_pegawai')->row();
	}

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
