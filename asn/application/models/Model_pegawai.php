<?php
class Model_pegawai extends CI_model
{
	private $tb_data_pegawai = "data_pegawai";

	function tampil_data($table){
		return $this->db->get($table);
	}

	function getList()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		$this->db->where('jabatan!=','Tidak Ada');
		$this->db->where('status_kepegawaian!=','Tidak Ada');
		$this->db->where('divisi!=','Tidak Ada');
		$this->db->order_by('jabatan', 'DESC');
		
		return $this->db->get()->result();
	}
	function getList2($nip){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->where('nip',$nip)->get()->result();
	}
	function detail_data($nip){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->where('nip',$nip)->get()->row();
	}
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function get_data_pegawai_bynip($nip){
		$hsl1=$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan= data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi= data_divisi.id_divisi');
		return $hsl=$this->db->where('nip',$nip)->get()->row();
		if($hsl->num_rows()>0){
		foreach ($hsl->result() as $data) {
			$hasil=array(
				'nip' => $data->nip,
				'nama_pegawai' => $data->nama_pegawai,
				'golongan' => $data->golongan,
				'foto' => $data->foto,
				'pangkat' => $data->pangkat,
				'status_kepegawaian' => $data->status_kepegawaian,
				'jabatan' => $data->jabatan,
				'divisi' => $data->divisi,
				'email' => $data->email,
				);
			}
		}
		return $hasil;
	}
	public function getDetail(){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		return $this->db->get()->result();
	}
	public function getDetail1($email){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->where('email',$email)->get()->row_array();
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update_data2($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function update_data3($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($nip){
		return $this->db->delete($this->tb_data_pegawai , array("nip" => $nip));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function get_nip($email){
		$query = $this->db->where('email', $email)->get('data_pegawai')->row()->nip;
		return $query;
	}
	// function hapus_data($where,$table){
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }
	function EmailCheck($email){
		$dataEmail = $this->db->where('email', $email)->get('data_pegawai');
		if ($dataEmail ->num_rows() ==0){
			return true;
		} 
		else{
			return false;
		}
	}

}