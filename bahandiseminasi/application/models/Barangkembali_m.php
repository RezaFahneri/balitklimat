<?php
class Barangkembali_m extends CI_model
{
	public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function getdata($table, $where)
    {
        $query = $this->db->get_where($table, $where)->row();
        return $query;
    }

    public function getDetail($id)
	{
		return $this->db->where('id_barangkembali', $id)->get('barang_kembali')->row();
	}

    public function get2($table, $ket)
    {
        return $this->db->get_where($table, $ket)->result();
    }

    public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function detail_data($barang_idkeluar)
    {
        $this->db->select('*');
        $this->db->from('barang_kembali');
        $this->db->join('barang_keluar', 'barang_keluar.id_barangkeluar = barang_kembali.barang_idkeluar', 'left');
        $this->db->where('barang_kembali.id_barangkembali', $barang_idkeluar);
        $query = $this->db->get();
        return $query->row();
	}

    public function join3($table, $table2, $table3, $ktabel21, $ktable31, $ket, $param)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->join($table3, $ktable31, 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

    public function getBarang()
    {
        $this->db->join('jenis j', 'b.jenis_id = j.id_jenis');
        $this->db->join('satuan s', 'b.satuan_id = s.id');
        $this->db->order_by('id_barang');
        return $this->db->get('barang b')->result_array(); 
    }

    public function join2($table, $table2, $ktabel21, $ket, $param)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function join2inner()
    {
        $this->db->select('*');
        $this->db->from('barang_kembali');
        $this->db->join('barang_keluar', 'barang_keluar.id_barangkeluar = barang_kembali.barang_idkeluar', 'inner');
        $this->db->order_by('id_barangkembali', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function join2innerdetail($ket, $param)
    {
        $this->db->select('*');
        $this->db->from('barang_kembali');
        $this->db->join('barang_keluar', 'barang_keluar.id_barangkeluar = barang_kembali.barang_idkeluar', 'inner');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($table, $data, $ket)
    {
        $this->db->where($ket);
        $this->db->update($table, $data);
    }   
     
    public function hapus_data($where,$table)
    {
		$this->db->where($where);
		$this->db->delete($table);
	}

    public function detailupdate($table, $ket)
    {
        $query = $this->db->get_where($table, $ket)->row();
        return $query;
    }

    public function update_data_stok($where,$data,$table)
    {
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function sum($table, $field, $param)
    {
        $this->db->select_sum($field);
        $this->db->where('barang_idkeluar', $param);
        return $this->db->get($table)->row_array()[$field];
    }

    public function idbkm()
    {
        $sql = "SELECT MAX(MID(id_barangkembali,8,3)) AS nokembali FROM barang_kembali
                WHERE MID(id_barangkembali,4,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nokembali) + 1;
            $no = sprintf("%'.03d", $nom);
        } else {
            $no = "001";
        }
        $id_barangkembali = "BKM" .date('ym') . $no;
        return $id_barangkembali;
    }

}