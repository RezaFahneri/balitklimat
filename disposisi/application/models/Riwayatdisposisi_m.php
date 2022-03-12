<?php
class Riwayatdisposisi_m extends CI_model
{
	public function tampil_data($table){
		return $this->db->get($table);
	}

    public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function update($table, $data, $ket)
    {
        $this->db->where($ket);
        $this->db->update($table, $data);
    }

    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function getDetail($id)
	{
		return $this->db->where('id_riwayat', $id)->get('riwayat_disposisi')->row();
	}

    public function getuser()
    {
        $query = $this->db->get_where('data_pegawai', ['email' => $this->session->userdata('email')])->row_array();
        return $query;
    }

    public function detail_data($suratmasuk_id)
    {
        $this->db->select('*');
        $this->db->from('riwayat_disposisi');
        $this->db->join('surat_masuk', 'surat_masuk.id_suratmasuk = riwayat_disposisi.suratmasuk_id', 'left');
        $this->db->join('data_pegawai', 'data_pegawai.nip = riwayat_disposisi.nip', 'left');
        $this->db->where('riwayat_disposisi.id_riwayat', $suratmasuk_id);
        $query = $this->db->get();
        return $query->row();
	}

    public function detailupdate($table, $ket){
        $query = $this->db->get_where($table, $ket)->row();
        return $query;
    }

    function join2($table, $table2, $ktabel21, $ket, $param)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

    function join2innerdetail($ket, $param)
    {
        $this->db->select('*');
        $this->db->from('riwayat_disposisi');
        $this->db->join('surat_masuk', 'surat_masuk.id_suratmasuk = riwayat_disposisi.suratmasuk_id', 'inner');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

    function join3($table, $table2, $table3, $ktabel21, $ktable31, $ket)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->join($table3, $ktable31, 'left');
        $this->db->where($ket);
        $query = $this->db->get();
        return $query->result();
    }

    public function join3inner()
    {
        $this->db->select('*');
        $this->db->from('riwayat_disposisi');
        $this->db->join('surat_masuk', 'surat_masuk.id_suratmasuk = riwayat_disposisi.suratmasuk_id', 'inner');
        $this->db->join('data_pegawai', 'data_pegawai.nip = riwayat_disposisi.nip', 'inner');
        $this->db->order_by('id_riwayat', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

}