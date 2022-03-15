<?php
class Model_detail_role extends CI_model
{
	private $tb_detail_role = "detail_role";
	private $tb_sp = "status_perjalanan";

    function insert($table,$data){
		$this->db->insert($table,$data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function tampil_detail($table){
		return $this->db->get($table);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function hapus_data($id_detail_role){
		return $this->db->delete($this->tb_detail_role , array("id_detail_role" => $id_detail_role));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function hapus_data2($nip){
		return $this->db->delete($this->tb_detail_role , array("nip" => $nip));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function hapus_data3($nip){
		return $this->db->delete($this->tb_sp , array("nip" => $nip));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function hapus_data4($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function getList()
	{
        $this->db->select('detail_role.*,data_golongan.*,data_pangkat.*,status_kepegawaian.*,data_jabatan.*,data_divisi.*');
		$this->db->from('detail_role');
		$this->db->join('data_golongan', 'detail_role.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'detail_role.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'detail_role.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'detail_role.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'detail_role.id_divisi=data_divisi.id_divisi');
		return $this->db->get()->result();
	}

	function getList2($nip){
		$data['data_pegawai'] = $this->db->query("SELECT * FROM data_pegawai LEFT JOIN detail_role ON data_pegawai.nim = detail_role.nim")->result();
		return $this->db->where('nip',$nip)->get()->result();
	}
	public function getDetail1($email){
		$this->db->select('*');
		$this->db->from('detail_role');
		$this->db->join('data_golongan', 'detail_role.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'detail_role.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'detail_role.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'detail_role.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'detail_role.id_divisi=data_divisi.id_divisi');
		return $this->db->where('email',$email)->get()->row_array();
	}

}