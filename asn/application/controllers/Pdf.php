<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{
    public function surat_pangkat()
    {
        $this->load->library('dompdf_gen');
        $this->load->view('Pdf/v_surat_pangkat');
        $paper_size ='A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('surat_keterangan_naik_pangkat.pdf', array("Attachment"=>0));
	}
    public function surat_gaji()
    {
        $this->load->library('dompdf_gen');
        $this->load->view('Pdf/v_surat_gaji');
        $paper_size ='A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('surat_keterangan_naik_gaji.pdf', array("Attachment"=>0));
	}
    
}
?>