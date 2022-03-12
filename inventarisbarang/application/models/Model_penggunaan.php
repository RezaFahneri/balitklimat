<?php
class Model_penggunaan extends CI_model
{
	function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function getList()
	{
		//return $query = $this->db->order_by('id_proyek', 'ASC')->get('proyek')->result();
		$this->db->select('*');
		$this->db->from('penggunaan_mobil');
		$this->db->join('data_kendaraan', 'data_kendaraan.id_kendaraan = penggunaan_mobil.id_kendaraan');
		$this->db->join('data_pegawai', 'data_pegawai.nip = penggunaan_mobil.nip');
		return $this->db->get()->result();
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function count_sopir1_dalam()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_jan()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','01');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_jan()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','01');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_feb()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','02');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_feb()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','02');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	

	public function count_sopir1_dalam_mar()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','03');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_mar()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','03');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_apr()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','04');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_apr()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','04');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_mei()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','05');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_mei()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','05');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_jun()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','06');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_jun()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','06');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_jul()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','07');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_jul()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','07');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_ags()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','08');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_ags()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','08');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}
	
	public function count_sopir1_dalam_sep()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','09');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_sep()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','09');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_okt()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','10');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_okt()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','10');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_nov()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','11');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_nov()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','11');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_dalam_des()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','12');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir1_luar_des()
	{
		$this->db->where('nip =', 'HNR1232211222');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','12');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_jan()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','01');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_jan()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','01');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_feb()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','02');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_feb()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','02');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_mar()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','03');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_mar()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','03');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_apr()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','04');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_apr()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','04');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_mei()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','05');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_mei()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','05');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_jun()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','06');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_jun()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','06');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_jul()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','07');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_jul()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','07');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_ags()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','08');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_ags()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','08');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}
	
	public function count_sopir2_dalam_sep()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','09');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_sep()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','09');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_okt()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','10');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_okt()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','10');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_nov()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','11');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_nov()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','11');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_dalam_des()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Dalam Kota');
		$this->db->where('MONTH(tgl_pemakaian)','12');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	public function count_sopir2_luar_des()
	{
		$this->db->where('nip =', 'HNR932727');
		$this->db->where('perjalanan =', 'Luar Kota');
		$this->db->where('MONTH(tgl_pemakaian)','12');
		$query = $this->db->get('penggunaan_mobil');
		return $query->num_rows();
	}

	


	// }
}
