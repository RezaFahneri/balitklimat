<?php
class Model_buku_tamu extends CI_model
{
    public function get_data($table, $field = NULL, $urutan = NULL)
    {
        if ($field = NULL and $urutan = NULL) {
            return $this->db->get($table)->result();
        } else {
            $this->db->order_by($field, $urutan);
            return $this->db->get($table)->result();
        }
    }
    public function get_data_not()
    {
        $this->db->where('id_divisi !=', '1');
        $this->db->get('data_divisi')->result();
    }

    function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function join2nowhere($table, $table2, $ktabel21)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        // $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->result();
    }
    public function join3($table, $table2, $ktabel21, $table3, $ktabel31, $ket, $param)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->join($table3, $ktabel31, 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->result();
    }
    public function join3a($table, $table2, $ktabel21, $table3, $ktabel31, $ket, $param)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->join($table3, $ktabel31, 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }
    public function join2where($table, $table2, $ktabel21, $ket, $param, $jns, $field = null, $urutan = null)
    {
        if ($field = null and $urutan = null) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->where($ket, $param);
            // $this->db->order_by($field, $urutan);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->where($ket, $param);
            $this->db->order_by($field, $urutan);
            $query = $this->db->get();
            return $query;
        }
    }

    public function idbt()
    {
        $sql = "SELECT MAX(MID(id_buku_tamu,9,3)) AS nourut FROM buku_tamu
                WHERE MID(id_buku_tamu,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.03d", $nom);
        } else {
            $no = "001";
        }
        $id_buku_tamu = "BT" . date('ymd') . $no;
        return $id_buku_tamu;
    }

    public function idkep()
    {
        $sql = "SELECT MAX(MID(id_keperluan,4,2)) AS nourut FROM bt_keperluan";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.02d", $nom);
        } else {
            $no = "01";
        }
        $id_keperluan = "KEP" . $no;
        return $id_keperluan;
    }

    public function idal()
    {
        $sql = "SELECT MAX(MID(id_alasan,4,2)) AS nourut FROM bt_alasan";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.02d", $nom);
        } else {
            $no = "01";
        }
        $id_alasan = "ALS" . $no;
        return $id_alasan;
    }

    public function getem($email, $table, $ket)
    {
        $query = $this->db->get_where($table, [$ket => $email])->row_array();
        return $query;
    }

    public function getuser()
    {
        $query = $this->db->get_where('data_pegawai', ['email' => $this->session->userdata('email')])->row_array();
        return $query;
    }

    public function getdet($table, $ket, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL and $urtn == NULL) {
            $this->db->where($ket);
            $query = $this->db->get($table);
        } else {
            $this->db->where($ket);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get($table);
        }
        return $query;
    }

    //untuk ambil seluruh data yang sama dengan $ket (lebih dari 1 baris)
    public function getspecdata($table, $ket)
    {
        $query = $this->db->get_where($table, $ket)->result();
        return $query;
    }
    public function getspecdataa($table)
    {
        $this->db->where('divisi !=', 'Tidak Ada');
        $query = $this->db->get($table)->result();
        return $query;
    }

    //ambil data dari suatu baris sesuai $ket
    public function getdetail($table, $ket)
    {
        $query = $this->db->get_where($table, $ket)->row();
        return $query;
    }


    public function updata($table, $data, $ket)
    {
        $this->db->where($ket);
        $this->db->update($table, $data);
    }

    public function hapus($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function joinpegdiv($table, $table2, $ktabel21, $jns, $field, $urtn)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, $jns);
        $this->db->order_by('divisi', 'ASC');
        $this->db->order_by($field, $urtn);
        $query = $this->db->get();
        return $query;
    }

    function fetch_pegawai($id_divisi)
    {
        $this->db->where('id_divisi', $id_divisi);
        // $this->db->order_by('state_name', 'ASC');
        $query = $this->db->get('data_pegawai');
        $output = '<option value="">-- Pilih Pegawai --</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->nip . '">' . $row->nama_pegawai . '</option>';
        }
        return $output;
    }

    public function ajoin3($table, $table2, $table3, $ktabel21, $ktable31, $ket, $param, $jns, $jns2, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL or $urtn == NULL) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            $this->db->where($ket, $param);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            $this->db->where($ket, $param);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get();
            return $query;
        }
    }
    public function ajoin32($table, $table2, $table3, $ktabel21, $ktable31, $ket, $param, $ket2, $param2, $jns, $jns2, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL or $urtn == NULL) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            $this->db->where($ket, $param);
            $this->db->where($ket2, $param2);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            $this->db->where($ket, $param);
            $this->db->where($ket2, $param2);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get();
            return $query;
        }
    }
    public function ajoin33($table, $table2, $table3, $ktabel21, $ktable31, $ket, $param, $jns, $jns2, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL or $urtn == NULL) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            $this->db->where($ket, $param);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            $this->db->where($ket, $param);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get();
            return $query;
        }
    }

    public function bjoin3($table, $table2, $table3, $ktabel21, $ktable31, $jns, $jns2, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL or $urtn == NULL) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            // $this->db->where($ket, $param);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->join($table3, $ktable31, $jns2);
            // $this->db->where($ket, $param);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get();
            return $query;
        }
    }
}
