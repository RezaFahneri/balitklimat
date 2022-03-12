<?php
class Model_daftar extends CI_model
{
    public function idpm()
    {
        $sql = "SELECT MAX(MID(id_pm,5,3)) AS nourut FROM peserta_magang 
                WHERE MID(id_pm,3,2) = DATE_FORMAT(CURDATE(), '%y')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nom = ((int)$row->nourut) + 1;
            $no = sprintf("%'.03d", $nom);
        } else {
            $no = "001";
        }
        $id_pm = "PM" . date('y') . $no;
        return $id_pm;
    }

    function insertdata($data, $table)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function join2($table, $table2, $ktabel21, $jns, $field, $urtn)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, $jns);
        $this->db->order_by('divisi', 'ASC');
        $this->db->order_by($field, $urtn);
        $query = $this->db->get();
        return $query;
    }

    public function join3($table, $table2, $table3, $ktabel21, $ktable31, $jns, $field, $urtn)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, $jns);
        $this->db->join($table3, $ktable31, $jns);
        $this->db->order_by($field, $urtn);
        $query = $this->db->get();
        return $query;
    }
}
