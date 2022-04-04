<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Bukutamu_b extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Admin | Tamu Tidak Bertemu';
        $data['user'] = $this->Model_buku_tamu->getuser();
        $data['sub'] = 'Buku Tamu - Tidak Bertemu';
        $ket1 = 'data_pegawai.nip = buku_tamu.pegawai_nip';
        $ket2 = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $where = 'buku_tamu.jenis';
        $getdetail = $this->Model_buku_tamu->join3('buku_tamu', 'data_pegawai', $ket1, 'data_divisi', $ket2, $where, 'Tidak Bertemu');
        $data['detail'] = $getdetail;
        $keterangan = ['jenis' => 'Bertemu'];
        $data['b'] = $this->Model_buku_tamu->getdet('buku_tamu', $keterangan)->result();
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/bukutamu', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_buku_tamu)
    {
        $data['title'] = 'Admin | Detail Tamu Tidak Bertamu';
        $data['sub'] = 'Detail Buku Tamu - Tidak Bertemu';
        $ket1 = 'data_pegawai.nip = buku_tamu.pegawai_nip';
        $ket2 = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $where = 'buku_tamu.id_buku_tamu';
        $getdetail = $this->Model_buku_tamu->join3a('buku_tamu', 'data_pegawai', $ket1, 'data_divisi', $ket2, $where, $id_buku_tamu);
        $data['detail'] = $getdetail;
        // var_dump($detail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapusall($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $this->Model_buku_tamu->hapus('buku_tamu', $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('admin/bukutamu_b');
    }

    public function export_excela()
    {
        $data['user'] = $this->Model_buku_tamu->getuser();
        $nip = $data['user']['nip'];
        $ket = ['pegawai_nip' => $data['user']['nip'], 'jenis' => 'Bertemu'];
        $ketb = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $keta = 'data_pegawai.nip = buku_tamu.pegawai_nip';
        $where = 'buku_tamu.jenis';
        $tamu = $this->Model_buku_tamu->ajoin3('buku_tamu', 'data_divisi', 'data_pegawai', $ketb, $keta, $where, 'Tidak Bertemu', 'left', 'left')->result();
        // var_dump($tamu);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', "No");
        $sheet->setCellValue('B1', "ID Tamu");
        $sheet->setCellValue('C1', "Jenis Tamu");
        $sheet->setCellValue('D1', "Tanggal");
        $sheet->setCellValue('E1', "Waktu");
        $sheet->setCellValue('F1', "Nama Lengkap");
        $sheet->setCellValue('G1', "Asal Instansi");
        $sheet->setCellValue('H1', "Email");
        $sheet->setCellValue('I1', "Nomor Whatsapp");
        $sheet->setCellValue('J1', "Divisi");
        $sheet->setCellValue('K1', "Pegawai");
        $sheet->setCellValue('L1', "Keperluan");
        $sheet->setCellValue('M1', "Keterangan");
        $sheet->setCellValue('N1', "Laporan");
        $no = 1;
        $numrow = 2;
        foreach ($tamu as  $pm) {
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow,  $pm->id_buku_tamu);
            $sheet->setCellValue('C' . $numrow,  $pm->jenis);
            $sheet->setCellValue('D' . $numrow,  $pm->tanggal);
            $sheet->setCellValue('E' . $numrow,  $pm->waktu);
            $sheet->setCellValue('F' . $numrow,  $pm->nama_lengkap);
            $sheet->setCellValue('G' . $numrow,  $pm->asal_instansi);
            $sheet->setCellValue('H' . $numrow,  $pm->email);
            $sheet->setCellValue('I' . $numrow,  $pm->no_wa);
            $sheet->setCellValue('J' . $numrow,  $pm->divisi);
            $sheet->setCellValue('K' . $numrow,  $pm->nama_pegawai);
            $sheet->setCellValue('L' . $numrow,  $pm->keperluan);
            $sheet->setCellValue('M' . $numrow,  $pm->keterangan);
            $sheet->setCellValue('N' . $numrow,  $pm->laporan);
            $no++;
            $numrow++;
        }
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Data Tamu Tidak Bertemu");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Tamu Tidak Bertemu.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
    public function export_excel()
    {
        $data['user'] = $this->Model_buku_tamu->getuser();
        $nip = $data['user']['nip'];
        $ketb = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $keta = 'data_pegawai.nip = buku_tamu.pegawai_nip';
        // $where = 'buku_tamu.pegawai_nip';
        $tamu = $this->Model_buku_tamu->bjoin3('buku_tamu', 'data_divisi', 'data_pegawai', $ketb, $keta, 'left', 'left')->result();
        // var_dump($tamu);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', "No");
        $sheet->setCellValue('B1', "ID Tamu");
        $sheet->setCellValue('C1', "Jenis Tamu");
        $sheet->setCellValue('D1', "Tanggal");
        $sheet->setCellValue('E1', "Waktu");
        $sheet->setCellValue('F1', "Nama Lengkap");
        $sheet->setCellValue('G1', "Asal Instansi");
        $sheet->setCellValue('H1', "Email");
        $sheet->setCellValue('I1', "Nomor Whatsapp");
        $sheet->setCellValue('J1', "Divisi");
        $sheet->setCellValue('K1', "Pegawai");
        $sheet->setCellValue('L1', "Keperluan");
        $sheet->setCellValue('M1', "Keterangan");
        $sheet->setCellValue('N1', "Laporan");
        $no = 1;
        $numrow = 2;
        foreach ($tamu as  $pm) {
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow,  $pm->id_buku_tamu);
            $sheet->setCellValue('C' . $numrow,  $pm->jenis);
            $sheet->setCellValue('D' . $numrow,  $pm->tanggal);
            $sheet->setCellValue('E' . $numrow,  $pm->waktu);
            $sheet->setCellValue('F' . $numrow,  $pm->nama_lengkap);
            $sheet->setCellValue('G' . $numrow,  $pm->asal_instansi);
            $sheet->setCellValue('H' . $numrow,  $pm->email);
            $sheet->setCellValue('I' . $numrow,  $pm->no_wa);
            $sheet->setCellValue('J' . $numrow,  $pm->divisi);
            $sheet->setCellValue('K' . $numrow,  $pm->nama_pegawai);
            $sheet->setCellValue('L' . $numrow,  $pm->keperluan);
            $sheet->setCellValue('M' . $numrow,  $pm->keterangan);
            $sheet->setCellValue('N' . $numrow,  $pm->laporan);
            $no++;
            $numrow++;
        }
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Data Tamu Seluruh");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Tamu Seluruh.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
