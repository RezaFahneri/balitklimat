<?php
class Model_detail_tugas extends CI_model
{
	private $tb_detail_tugas = "detail_tugas";
    function insert($table,$data){
		$this->db->insert($table,$data);
	}
	function tampil_detail($table){
		return $this->db->get($table);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_batch($where,$data,$table){
		$this->db->where($where);
		$this->db->update_batch($table,$data);
	}
	function hapus_data($id_detail_tugas){
		return $this->db->delete($this->tb_detail_tugas , array("id_detail_tugas" => $id_detail_tugas));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function hapus_data2($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
    // function detail_data($id_detail_tugas){
	// 	$this->db->select('*');
	// 	$this->db->from('detail_tugas');
	// 	$this->db->join('detail_tugas', 'data_tugas.id_tugas=detail_tugas.id_tugas');
	// 	return $this->db->where($nip = $id_detail_tugas)->get()->row();
	// }
	function getList()
	{
        $this->db->select('detail_tugas.*,data_pegawai.*,data_golongan.*,data_pangkat.*');
		$this->db->from('detail_tugas');
		$this->db->join('data_pegawai', 'detail_tugas.nip= data_pegawai.nip');
        $this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		return $this->db->get()->result();
	}

	function getList2($nip){
		// $data['detail_tugas'] = $this->db->query("SELECT * FROM detail_tugas LEFT JOIN data_pegawai ON detail_tugas.nim = data_pegawai.nim")->result();
		$data['data_pegawai'] = $this->db->query("SELECT * FROM data_pegawai LEFT JOIN detail_tugas ON data_pegawai.nim = detail_tugas.nim")->result();

		// $this->db->select('*');
		// $this->db->from('detail_tugas');
		// $this->db->join('detail_tugas', 'data_tugas.id_tugas=detail_tugas.id_tugas','LEFT');
		return $this->db->where('nip',$nip)->get()->result();
	}

}