<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Test extends CI_Controller
{

    public function index()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', "No");
        $sheet->setCellValue('B1', "ID Peserta");
        $sheet->setCellValue('C1', "Nama Lengkap");
        $sheet->setCellValue('D1', "Email");
        $sheet->setCellValue('E1', "No Whatsapp");
        $sheet->setCellValue('F1', "Jenis Magang");
        $sheet->setCellValue('G1', "Asal Instansi");
        $sheet->setCellValue('H1', "Jurusan Instansi");
        $sheet->setCellValue('I1', "Pembimbing Instansi");
        $sheet->setCellValue('J1', "No WA Pembimbing Instansi");
        $sheet->setCellValue('K1', "Pembimbing Balai");
        $sheet->setCellValue('L1', "Tanggal Mulai");
        $sheet->setCellValue('M1', "Tanggal Selesai");
        $peserta = $this->Model_admin->getall('peserta_magang')->result();
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($peserta as  $pm) { // Lakukan looping pada variabel siswa
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow,  $pm->id_pm);
            $sheet->setCellValue('C' . $numrow,  $pm->nama_pm);
            $sheet->setCellValue('D' . $numrow,  $pm->email_pm);
            $sheet->setCellValue('E' . $numrow,  $pm->no_wa_pm);
            $sheet->setCellValue('F' . $numrow,  $pm->jns_magang);
            $sheet->setCellValue('G' . $numrow,  $pm->asal_instansi_pm);
            $sheet->setCellValue('H' . $numrow,  $pm->jurusan_pm);
            $sheet->setCellValue('I' . $numrow,  $pm->pi_pm);
            $sheet->setCellValue('J' . $numrow,  $pm->no_wa_pi_pm);
            $sheet->setCellValue('K' . $numrow,  $pm->pembimbing_balai);
            $sheet->setCellValue('L' . $numrow,  $pm->tgl_mli_pm);
            $sheet->setCellValue('M' . $numrow,  $pm->tgl_sls_pm);
            $no++;
            $numrow++;
        }
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Data Peserta Magang Balitklimat");
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Peserta Magang Balitklimat.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
