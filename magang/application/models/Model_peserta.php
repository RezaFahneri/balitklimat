<?php
class Model_peserta extends CI_model
{
    public function idlap()
    {
        $sql = "SELECT MAX(MID(id_lap_ming,7,2)) AS nourut FROM laporan_mingguan
                WHERE MID(id_lap_ming,3,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.02d", $nom);
        } else {
            $no = "01";
        }
        $id_lap_ming = "LM" . date('ym') . $no;
        return $id_lap_ming;
    }

    public function idlapak()
    {
        $sql = "SELECT MAX(MID(id_lapak,7,2)) AS nourut FROM laporan_akhir
                WHERE MID(id_lapak,3,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.02d", $nom);
        } else {
            $no = "01";
        }
        $id_lapak = "LA" . date('ym') . $no;
        return $id_lapak;
    }
    //insert
    public function insert($data, $table)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    //update
    public function updata($table, $data, $ket)
    {
        $this->db->where($ket);
        $query = $this->db->update($table, $data);
        return $query;
    }

    //hapus
    public function hapus($table, $where)
    {
        $this->db->where($where);
        $query = $this->db->delete($table);
        return $query;
    }

    //get
    public function getuser()
    {
        $query = $this->db->get_where('peserta_magang', ['email_pm' => $this->session->userdata('email')])->row_array();
        return $query;
    }

    public function getall($table, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL and $urtn == NULL) {
            $query = $this->db->get($table);
        } else {
            $this->db->order_by($field, $urtn);
            $query = $this->db->get($table);
        }
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

    public function ajoin2($table, $table2, $ktabel21, $ket, $param, $jns, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL or $urtn == NULL) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->where($ket, $param);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            $this->db->where($ket, $param);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get();
            return $query;
        }
    }

    public function cjoin2($table, $table2, $ktabel21, $ket, $param, $ket2, $param2, $jns)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, $jns);
        $this->db->where($ket, $param);
        $this->db->where($ket2, $param2);
        $query = $this->db->get();
        return $query;
    }
}
