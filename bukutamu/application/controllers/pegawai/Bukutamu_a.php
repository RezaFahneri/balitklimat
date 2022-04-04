<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Bukutamu_a extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Pegawai | Tamu Bertemu';
        $data['user'] = $this->Model_buku_tamu->getuser();
        $data['sub'] = 'Buku Tamu - Bertemu';
        $ket = ['pegawai_nip' => $data['user']['nip'], 'jenis' => 'Bertemu'];
        $data['detail'] = $this->Model_buku_tamu->getdet('buku_tamu', $ket, 'tanggal', 'DESC')->result();
        $keterangan = ['pegawai_nip' => $data['user']['nip'], 'jenis' => 'Tidak Bertemu'];
        $data['b'] = $this->Model_buku_tamu->getdet('buku_tamu', $keterangan)->result();
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/bukutamu', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_buku_tamu)
    {
        $data['title'] = 'Pegawai | Detail Penugasan';
        $ketb = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $where = 'buku_tamu.id_buku_tamu';
        $detail = $this->Model_buku_tamu->join2where('buku_tamu', 'data_divisi', $ketb, $where, $id_buku_tamu, 'left')->row();
        $data['detail'] = $detail;
        // var_dump($detail);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pegawai/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $data = [
            'laporan' => htmlspecialchars($this->input->post('ket'))
        ];
        $this->Model_buku_tamu->updata('buku_tamu', $data, $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:90%">Laporan Berhasil Disimpan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('pegawai/bukutamu_a/detail/' . $id_buku_tamu);
    }
    public function hapus($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $data = [
            'laporan' => null
        ];
        $this->Model_buku_tamu->updata('buku_tamu', $data, $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:90%">Laporan Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('pegawai/bukutamu_a/detail/' . $id_buku_tamu);
    }
    public function hapusall($id_buku_tamu)
    {
        $ket = ['id_buku_tamu' => $id_buku_tamu];
        $this->Model_buku_tamu->hapus('buku_tamu', $ket);
        // var_dump($ket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> </div>');
        redirect('pegawai/bukutamu_a');
    }

    public function export_excela()
    {
        $data['user'] = $this->Model_buku_tamu->getuser();
        $nip = $data['user']['nip'];
        $ket = ['pegawai_nip' => $data['user']['nip'], 'jenis' => 'Bertemu'];
        $ketb = 'data_divisi.id_divisi = buku_tamu.id_divisi';
        $keta = 'data_pegawai.nip = buku_tamu.pegawai_nip';
        $where = 'buku_tamu.jenis';
        $where2 = 'buku_tamu.pegawai_nip';
        $tamu = $this->Model_buku_tamu->ajoin32('buku_tamu', 'data_divisi', 'data_pegawai', $ketb, $keta, $where, 'Bertemu', $where2, $nip, 'left', 'left')->result();
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
        $sheet->setTitle("Data Tamu Bertemu");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Tamu Bertemu.xlsx"');
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
        $where = 'buku_tamu.pegawai_nip';
        $tamu = $this->Model_buku_tamu->ajoin33('buku_tamu', 'data_divisi', 'data_pegawai', $ketb, $keta, $where, $nip, 'left', 'left')->result();
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
