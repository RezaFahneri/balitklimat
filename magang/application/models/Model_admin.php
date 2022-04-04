<?php
class Model_admin extends CI_model
{
    public function idp()
    {
        $sql = "SELECT MAX(MID(id_tugas,7,2)) AS nourut FROM tugas
                WHERE MID(id_tugas,3,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.02d", $nom);
        } else {
            $no = "01";
        }
        $id_tugas = "PN" . date('ym') . $no;
        return $id_tugas;
    }

    public function idnp()
    {
        $sql = "SELECT MAX(MID(id_np,7,3)) AS nourut FROM notif_peserta
                WHERE MID(id_np,3,4) = DATE_FORMAT(CURDATE(), '%y%m')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.03d", $nom);
        } else {
            $no = "001";
        }
        $id_np = "NP" . date('ym') . $no;
        return $id_np;
    }

    //insert
    public function insert($table, $data)
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

    //penugasan
    public function hapusnotif($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like('id_aksi', $where, 'both');
        $query = $this->db->delete($table);
        return $query;
    }

    //get
    public function getuser()
    {
        $query = $this->db->get_where('data_pegawai', ['email' => $this->session->userdata('email')])->row_array();
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

    public function get_peg_pdf()
    {

        $this->db->select('nip, nama_pegawai');
        $this->db->from('peserta_magang');
        $this->db->join('data_pegawai', 'data_pegawai.nip = peserta_magang.pembimbing_balai', 'inner');
        $this->db->group_by('nip');
        $this->db->order_by('nama_pegawai', 'ASC');
        // $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->result();
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

    public function bjoin2($table, $table2, $ktabel21, $jns, $field = NULL, $urtn = NULL)
    {
        if ($field == NULL or $urtn == NULL) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            // $this->db->where($ket, $param);
            $query = $this->db->get();
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->join($table2, $ktabel21, $jns);
            // $this->db->where($ket, $param);
            $this->db->order_by($field, $urtn);
            $query = $this->db->get();
        }
        return $query;
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

    public function tgl($tglawal, $tglakhir)
    {
        $this->db->select('*');
        $this->db->from('peserta_magang');
        $this->db->where("tgl_mli_pm BETWEEN '$tglawal' AND '$tglakhir'");
        $this->db->join('data_pegawai', 'data_pegawai.nip = peserta_magang.pembimbing_balai');
        $this->db->order_by('tgl_mli_pm', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function mhs_nip($ket)
    {
        $this->db->select('*');
        $this->db->from('peserta_magang');
        $this->db->join('data_pegawai', 'data_pegawai.nip = peserta_magang.pembimbing_balai');
        $this->db->where($ket);
        $this->db->order_by('tgl_mli_pm', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function tgl_mhs_nip($tglawal, $tglakhir, $ket)
    {
        $this->db->select('*');
        $this->db->from('peserta_magang');
        $this->db->join('data_pegawai', 'data_pegawai.nip = peserta_magang.pembimbing_balai');
        $this->db->where("tgl_mli_pm BETWEEN '$tglawal' AND '$tglakhir'");
        $this->db->order_by('tgl_mli_pm', 'ASC');
        $this->db->where($ket);
        $query = $this->db->get();
        return $query->result();
    }
}
