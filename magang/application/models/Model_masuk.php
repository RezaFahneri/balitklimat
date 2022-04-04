<?php
class Model_masuk extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table)->result();
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getem($email, $table, $ket)
    {
        $query = $this->db->get_where($table, [$ket => $email])->row_array();
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

    public function hapus($table, $where)
    {
        $this->db->where($where);
        $query = $this->db->delete($table);
        return $query;
    }
}
