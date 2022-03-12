<?php

Class Fungsi {
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    public function count_pns(){
        $this->ci->load->model('Model_pegawai');
        return $this->ci->Model_pegawai->getList()->num_rows();
    }
}

?>