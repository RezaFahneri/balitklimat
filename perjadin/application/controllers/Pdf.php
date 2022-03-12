<?php
class Pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kegiatan');
        $this->load->Model('Model_pdf');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_jenis_keg');
        $this->load->Model('Model_perjalanan_dinas');
        $this->load->Model('Model_anggota_perjadin');
        $this->load->Model('Model_kota');
        $this->load->Model('Model_mak');
        // $this->load->helper('url');
    }
    function surat_tugas($id_perjalanan_dinas)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['data_anggota_perjadin'] = $this->Model_pdf->getListSt1($id_perjalanan_dinas);
        $data['isi_surat'] = $this->Model_pdf->getListTableSt1($id_perjalanan_dinas);
        $this->load->view('Pdf/v_surat_tugas', $data);
        // $html = $this->load->view('table_report', $data, true);
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf_gen');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("surat_tugas_kep_balai.pdf", array("Attachment"=>0));
    }
    function surat_tugas_plt($id_perjalanan_dinas)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['data_anggota_perjadin'] = $this->Model_pdf->getListSt2($id_perjalanan_dinas);
        $data['isi_surat'] = $this->Model_pdf->getListTableSt2($id_perjalanan_dinas);
        $this->load->view('Pdf/v_surat_tugas_plt', $data);

        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf_gen');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("surat_tugas_plh_kep_balai.pdf", array("Attachment"=>0));
    }
    function pernyataan($id_anggota_perjadin)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['isi_surat'] = $this->Model_pdf->getListPernyataan($id_anggota_perjadin);
        $this->load->view('Pdf/v_pernyataan', $data);
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf_gen');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("surat_pernyataan.pdf", array("Attachment"=>0));
    }
    function capsah_1($id_anggota_perjadin)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['isi_surat'] = $this->Model_pdf->getListCapsah($id_anggota_perjadin);
        $this->load->view('Pdf/v_capsah_1', $data);
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf_gen');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("capsah_halaman_1.pdf", array("Attachment"=>0));
    }
    function capsah_2($id_anggota_perjadin)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['isi_surat'] = $this->Model_pdf->getListCapsah($id_anggota_perjadin);
        $this->load->view('Pdf/v_capsah_2', $data);

        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf_gen');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("capsah_halaman_2.pdf", array("Attachment"=>0));
    }
    function kuitansi($id_anggota_perjadin)
    {
        $data['header'] = $this->Model_pdf->getHeader();
        $data['isi_surat'] = $this->Model_pdf->getListKuitansi($id_anggota_perjadin);
        $this->load->view('Pdf/v_kuitansi', $data);
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf_gen');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("surat_pernyataan.pdf", array("Attachment"=>0));
    }
}
// tes perubahan 3