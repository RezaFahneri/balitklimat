<?php

class Riwayat_peminjaman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_riwayat');
        $this->load->Model('Model_stok');
        $this->load->helper('url', 'array', 'fungsi');
        $this->load->library('form_validation', 'upload');
        $this->load->library('session');
        // if ($this->session->userdata('logged_in') == false) {
		// 	redirect('login');
		// }
    }

    function index()
    {
        $data['data_riwayat'] = $this->Model_riwayat->getList();
        $data['title'] = "Riwayat Peminjaman Alat | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_riwayat_peminjaman', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Detail Riwayat Peminjaman | Balitklimat";
        $data['detail'] = $this->Model_riwayat->detail_data($id);
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_detail_riwayat', $data);
        $this->load->view('template/footer');
    }

    public function pdf($id)
    {

        // Ambil Data
        $data['detail'] = $this->Model_riwayat->detail_data($id);
        $this->load->view('Pdf/v_buktipengembalian', $data);

        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Bukti Pengembalian Alat';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'bukti_pengembalian_alat';

        // setting paper
        $paper = 'A4';

        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		// $html=$this->load->view('pdf/v_buktipinjam', $this->data, true);	   
        $html = $this->output->get_output(); 
        
        // run dompdf
        $this->pdf->generate($html, $file_pdf,$paper,$orientation);
    }
}
