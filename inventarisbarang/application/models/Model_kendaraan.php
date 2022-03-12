<?php
class Model_kendaraan extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}

	function tampil_datapenggunaan()
	{
		if ($this->db->where('status', '1'))
		return $query = $this->db->get_where('data_kendaraan', array('no_polisi'))->result();
	}

    public function getDetail($id)
	{
		return $this->db->where('id_kendaraan', $id)->get('data_kendaraan')->row();
		// return $this->db->query("SELECT * FROM stok_barang WHERE id_barang='$id'")->result();
	}

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($id){
		$this->db->delete('data_kendaraan', array("id_kendaraan" => $id));
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	// function getList(){
	// 	return $query = $this->db->order_by('id_jenis', 'ASC')->get('jenis_barang')->result();
	// }
}