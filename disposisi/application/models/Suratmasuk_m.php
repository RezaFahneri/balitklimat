<?php
class Suratmasuk_m extends CI_model
{
	function tampil_data($table){
        $this->db->order_by('id_suratmasuk', 'DESC');
		return $this->db->get($table);
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

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
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
		return $this->db->where('id_suratmasuk', $id)->get('surat_masuk')->row();
	}

	public function detailupdate($table, $ket){
        $query = $this->db->get_where($table, $ket)->row();
        return $query;
    }

    public function detail_data($sifatsurat_id)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('sifat_surat', 'sifat_surat.id_sifatsurat = surat_masuk.sifatsurat_id', 'left');
        $this->db->where('surat_masuk.id_suratmasuk', $sifatsurat_id);
        $query = $this->db->get();
        return $query->row();
    }

	public function update($table, $data, $ket)
    {
        $this->db->where($ket);
        $this->db->update($table, $data);
    }

	public function idsm()
    {
        $sql = "SELECT MAX(MID(id_suratmasuk,7,2)) AS nosurat FROM surat_masuk
                WHERE MID(id_suratmasuk,3,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nosurat) + 1;
            $no = sprintf("%'.02d", $nom);
        } else {
            $no = "01";
        }
        $id_suratmasuk = "SM" .date('ym') . $no;
        return $id_suratmasuk;
    }

	public function join2left2($ket, $param)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = surat_masuk.status', 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

    public function join2left()
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip= surat_masuk.status', 'left');
        $this->db->order_by('id_suratmasuk', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function join3left($ket, $param)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = surat_masuk.status', 'left');
        $this->db->join('riwayat_disposisi', 'riwayat_disposisi.suratmasuk_id = surat_masuk.id_suratmasuk', 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

}