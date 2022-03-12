<?php

class Jadwal_KP extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kenaikan_pangkat');
        $this->load->helper('url');
    }
    function index()
    {
        $data['jadwal_kp'] = $this->Model_kenaikan_pangkat->tampil_data('data_jadwal_naik_pangkat')->result();
        $data['title'] = "ASN BALITKLIMAT | Jadwal Kenaikan Pangkat";
        $this->load->view('templates/v_template',$data);
		$this->load->view('Jadwal_Pangkat/v_jadwal_pangkat',$data);
        $this->load->view('templates/footer',$data);
    }
    function tambah()
	{
		$data['title'] = 'ASN BALITKLIMAT | Tambah Jadwal Kenaikan Pangkat';
        $data['jadwal_kp']=$this->Model_kenaikan_pangkat->get_kode_kp($data);
        $this->load->view('templates/v_template',$data);
		$this->load->view('Jadwal_Pangkat/v_tambah_jadwal_pangkat', $data);
        $this->load->view('templates/footer',$data);
	}
    // function simpan_kp(){
    //     $kode_kp=$this->input->post('kode_kp');
    //     $this->Model_kenaikan_pangkat->simpan_kp($kode_kp);
    //     redirect('jadwal_kp');
    // }
    function get_autocomplete(){
        if (isset($_GET['term'])){
            $result = $this->Model_pegawai->search_pegawai($_GET['term']);
            if (count($result) > 0){
                foreach ($result as $row)
                $arr_result[] = array(
                    'nama_pegawai' => $row->nama_pegawai,
                    'nip' => $row->row,
                );
                echo json_encode($arr_result);
            }
        }
    }
    function tambah_aksi()
    {
        $kode_kp = $this->input->post('kode_kp');
        $tgl_penjadwalan = $this->input->post('tgl_penjadwalan');

        $data = array(
            'kode_kp' => $kode_kp,
        );
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nip = $this->input->post('nip');
        $this->Model_pegawai->input_data($data, 'data_jadwal_naik_pangkat');
        redirect('jadwal_kp');
    }
}
?>