<?php
class Model_pegawai extends CI_model
{
	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function getList(){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
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
	public function getListPUMK()
	{
		return $query = $this->db->where('pumk', 'Iya')->order_by('nip', 'ASC')->get('data_pegawai')->result();
	}
	public function getListPPK()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		return $this->db->where('jabatan','Pejabat Pembuat Komitmen')->get()->result();
	}
	public function getListPj()
	{
		$this->db->select('*');
		$this->db->from('detail_tugas');
		$this->db->join('data_pegawai', 'data_pegawai.nip=detail_tugas.nip');
		$this->db->join('data_tugas', 'data_tugas.id_tugas=detail_tugas.id_tugas');
		$this->db->where('penugasan','PJ RPTP');
		$this->db->or_where('penugasan','PJ RDHP');
		return $this->db->or_where('penugasan','PJ RKTM')->get()->result();
	}
	public function getListBendahara()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->where('jabatan','Bendahara Pengeluaran');
		return $this->db->or_where('jabatan','Bendahara Penerimaan')->get()->result();
	}
	public function getListKPA()
	{
		$this->db->select('*');
		$this->db->from('detail_tugas');
		$this->db->join('data_pegawai', 'data_pegawai.nip=detail_tugas.nip');
		$this->db->join('data_tugas', 'data_tugas.id_tugas=detail_tugas.id_tugas');
		return $this->db->where('penugasan','Kuasa Pengguna Anggaran')->get()->result();
	}
	public function getListPltBalai()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		return $this->db->where('jabatan','Plh. Kepala Balai')->get()->result();
	}
	public function getListKepalaBalai()
	{
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		return $this->db->where('jabatan','Kepala Balai')->get()->result();
	}

	function get_data_barang_bykode($nip_pj_keg){
		$hsl=$this->db->query("SELECT * FROM data_pegawai WHERE nip='$nip_pj_keg'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nip_pj_keg' => $data->nip,
					'nama_pj_keg' => $data->nama_pegawai
					);
			}
		}
		return $hasil;
	}
	 public function getDetail($email){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->join('data_golongan', 'data_pegawai.id_golongan= data_golongan.id_golongan');
		$this->db->join('status_kepegawaian', 'data_pegawai.id_status_peg= status_kepegawaian.id_status_peg');
		$this->db->join('data_pangkat', 'data_pegawai.id_pangkat= data_pangkat.id_pangkat');
		$this->db->join('data_jabatan', 'data_pegawai.id_jabatan=data_jabatan.id_jabatan');
		$this->db->join('data_divisi', 'data_pegawai.id_divisi=data_divisi.id_divisi');
		return $this->db->where('email',$email)->get()->row_array();
	}
}
