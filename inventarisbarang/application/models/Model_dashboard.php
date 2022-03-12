<?php
class Model_Dashboard extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function sum($table, $field)
    {
        $this->db->select_sum($field);
        return $this->db->get($table)->row_array()[$field];
    }
}