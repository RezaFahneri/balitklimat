<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai - Admin | Data Peserta';
        $data['sub'] = 'Data Peserta Bimbingan';
        $data['user'] = $this->Model_admin->getuser();
        $nip = $data['user']['nip'];
        $data['nip'] = $data['user']['nip'];
        $ket = ['pembimbing_balai' => $nip];
        $data['ps'] = $this->Model_admin->getdet('peserta_magang', $ket, 'nama_pm', 'ASC')->result();
        $data['all1'] = count($this->Model_admin->getdet('peserta_magang', $ket, 'nama_pm', 'ASC')->result());
        $ketb1 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung', 'jns_magang' => 'Mahasiswa'];
        $ketb2 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung', 'jns_magang' => 'Mandiri'];
        $ketb3 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung', 'jns_magang' => 'Siswa'];
        $ketb4 = ['pembimbing_balai' => $nip, 'status_pm' => 'berlangsung'];
        $data['b1'] = count($this->Model_admin->getdet('peserta_magang', $ketb1)->result());
        $data['b2'] = count($this->Model_admin->getdet('peserta_magang', $ketb2)->result());
        $data['b3'] = count($this->Model_admin->getdet('peserta_magang', $ketb3)->result());
        $data['b4'] = count($this->Model_admin->getdet('peserta_magang', $ketb4)->result());
        $kets1 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai', 'jns_magang' => 'Mahasiswa'];
        $kets2 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai', 'jns_magang' => 'Mandiri'];
        $kets3 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai', 'jns_magang' => 'Siswa'];
        $kets4 = ['pembimbing_balai' => $nip, 'status_pm' => 'selesai'];
        $data['s1'] = count($this->Model_admin->getdet('peserta_magang', $kets1)->result());
        $data['s2'] = count($this->Model_admin->getdet('peserta_magang', $kets2)->result());
        $data['s3'] = count($this->Model_admin->getdet('peserta_magang', $kets3)->result());
        $data['s4'] = count($this->Model_admin->getdet('peserta_magang', $kets4)->result());
        $data['pegawai'] = $this->Model_admin->get_peg_pdf();
        // var_dump($data['b1']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/peserta/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id_pm)
    {
        $data['title'] = 'Pegawai - Admin | Detail Peserta';
        $data['user'] = $this->Model_admin->getuser();
        $ket = ['id_pm' => $id_pm];
        $data['lap'] = $this->Model_admin->getdet('laporan_mingguan', $ket, 'tgl_lap_ming', 'ASC')->result();
        // $getdetail = $this->Model_admin->getdet('peserta_magang', $ket)->row();
        $ket1 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_admin->ajoin2('peserta_magang', 'data_pegawai', $ket1, $ket, $id_pm, 'inner', 'nama_pm', 'ASC')->row();
        // $getdetail = $this->Model_admin->ajoin2('peserta_magang', $ket)->row();
        $data['detail'] = $getdetail;
        $nohp = $getdetail->no_wa_pm;
        $nohp2 = $getdetail->no_wa_pi_pm;
        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp), 0, 2) == '62') {
                $data['nohp'] = '+' . substr(trim($nohp), 0);
            } elseif (substr(trim($nohp), 0, 3) == '+62') {
                $data['nohp'] = trim($nohp);
            } elseif (substr(trim($nohp), 0, 1) == '0') {
                $data['nohp'] = '+62' . substr(trim($nohp), 1);
            } else {
                $data['nohp'] = 'tidak valid';
            }
        }
        if (!preg_match('/[^+0-9]/', trim($nohp2))) {
            if (substr(trim($nohp2), 0, 2) == '62') {
                $data['nohp2'] = '+' . substr(trim($nohp2), 0);
            } elseif (substr(trim($nohp2), 0, 3) == '+62') {
                $data['nohp2'] = trim($nohp2);
            } elseif (substr(trim($nohp2), 0, 1) == '0') {
                $data['nohp2'] = '+62' . substr(trim($nohp2), 1);
            } else {
                $data['nohp2'] = 'tidak valid';
            }
        }
        //var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/peserta/v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function peserta_seluruh()
    {
        //echo 'selamat datang ' . $data['user2']['nama_pm'];
        $data['title'] = 'Pegawai - Admin | Data Peserta';
        $data['sub'] = 'Data Seluruh Peserta Magang';
        $data['user'] = $this->Model_admin->getuser();
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $getdetail = $this->Model_admin->bjoin2('peserta_magang', 'data_pegawai', $ket1, 'inner', 'nama_pm', 'ASC')->result();
        $data['detail'] = $getdetail;
        $data['aall1'] = count($getdetail);
        $data['pegawai'] = $this->Model_admin->get_peg_pdf();
        $ketb1 = ['status_pm' => 'berlangsung', 'jns_magang' => 'Mahasiswa'];
        $ketb2 = ['status_pm' => 'berlangsung', 'jns_magang' => 'Mandiri'];
        $ketb3 = ['status_pm' => 'berlangsung', 'jns_magang' => 'Siswa'];
        $ketb4 = ['status_pm' => 'berlangsung'];
        $data['ab1'] = count($this->Model_admin->getdet('peserta_magang', $ketb1)->result());
        $data['ab2'] = count($this->Model_admin->getdet('peserta_magang', $ketb2)->result());
        $data['ab3'] = count($this->Model_admin->getdet('peserta_magang', $ketb3)->result());
        $data['ab4'] = count($this->Model_admin->getdet('peserta_magang', $ketb4)->result());
        $kets1 = ['status_pm' => 'selesai', 'jns_magang' => 'Mahasiswa'];
        $kets2 = ['status_pm' => 'selesai', 'jns_magang' => 'Mandiri'];
        $kets3 = ['status_pm' => 'selesai', 'jns_magang' => 'Siswa'];
        $kets4 = ['status_pm' => 'selesai'];
        $data['as1'] = count($this->Model_admin->getdet('peserta_magang', $kets1)->result());
        $data['as2'] = count($this->Model_admin->getdet('peserta_magang', $kets2)->result());
        $data['as3'] = count($this->Model_admin->getdet('peserta_magang', $kets3)->result());
        $data['as4'] = count($this->Model_admin->getdet('peserta_magang', $kets4)->result());
        // var_dump($data['detail']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/peserta/index', $data);
        $this->load->view('templates/footer');
    }

    public function export_pdf()
    {
        $data['user'] = $this->Model_admin->getuser();
        $nip = $data['user']['nip'];
        $tglawal = $this->input->post('tglawal1');
        $tglakhir = $this->input->post('tglakhir1');
        $pdfjns = $this->input->post('pdfjns1');
        $pdfstat = $this->input->post('pdfstat1');
        if ($pdfjns == NULL and $pdfstat == NULL) {
            if ($tglawal == NULL  and $tglakhir == NULL) {
                //seluruh data 
                $ket1 = 'peserta_magang.pembimbing_balai = data_pegawai.nip';
                $ket2 = 'data_pegawai.nip';
                $data['detail'] = $this->Model_admin->ajoin2('data_pegawai', 'peserta_magang', $ket1, $ket2, $nip, 'inner', 'tgl_mli_pm', 'ASC')->result();
                $data['tglawal'] = 'Seluruh Tanggal';
                $data['tglakhir'] = ' ';
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = 'Seluruh Jenis';
                $data['pdfstat'] = 'Seluruh Status';
            } elseif ($tglawal == NULL or $tglakhir == NULL) {
                //ga valid
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('pegawai/peserta');
            } else {
                //tanggal doang
                $ket = [
                    'pembimbing_balai' => $nip
                ];;
                $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                $data['tglawal'] = date('d M Y', strtotime($tglawal));
                $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = 'Seluruh Jenis';
                $data['pdfstat'] = 'Seluruh Status';
            }
        } elseif ($pdfjns == NULL) {
            if ($tglawal == NULL  and $tglakhir == NULL) {
                //status doang
                $ket = [
                    'pembimbing_balai' => $nip,
                    'status_pm' => $pdfstat
                ];
                $data['detail'] = $this->Model_admin->mhs_nip($ket);
                $data['tglawal'] = 'Seluruh Tanggal';
                $data['tglakhir'] = ' ';
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = 'Seluruh Jenis';
                $data['pdfstat'] = $pdfstat;
            } elseif ($tglawal == NULL or $tglakhir == NULL) {
                //ga valid
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('pegawai/peserta');
            } else {
                //status and tanggal
                $ket = [
                    'pembimbing_balai' => $nip,
                    'status_pm' => $pdfstat
                ];
                $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                $data['tglawal'] = date('d M Y', strtotime($tglawal));
                $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = 'Seluruh Jenis';
                $data['pdfstat'] = $pdfstat;
            }
        } elseif ($pdfstat == NULL) {
            if ($tglawal == NULL  and $tglakhir == NULL) {
                //jns doang
                $ket = [
                    'jns_magang' => $pdfjns,
                    'pembimbing_balai' => $nip
                ];
                $data['detail'] = $this->Model_admin->mhs_nip($ket);
                $data['tglawal'] = 'Seluruh Tanggal';
                $data['tglakhir'] = ' ';
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = $pdfjns;
                $data['pdfstat'] = 'Seluruh Status';
            } elseif ($tglawal == NULL or $tglakhir == NULL) {
                //ga valid
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('pegawai/peserta');
            } else {
                //jenis and tanggal
                $ket = [
                    'jns_magang' => $pdfjns,
                    'pembimbing_balai' => $nip
                ];
                $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                $data['tglawal'] = date('d M Y', strtotime($tglawal));
                $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = $pdfjns;
                $data['pdfstat'] = 'Seluruh Status';
            }
        } else {
            if ($tglawal == NULL  and $tglakhir == NULL) {
                //jns dan status
                $ket = [
                    'jns_magang' => $pdfjns,
                    'pembimbing_balai' => $nip,
                    'status_pm' => $pdfstat
                ];
                $data['detail'] = $this->Model_admin->mhs_nip($ket);
                $data['tglawal'] = 'Seluruh Tanggal';
                $data['tglakhir'] = ' ';
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = $pdfjns;
                $data['pdfstat'] = $pdfstat;
            } elseif ($tglawal == NULL or $tglakhir == NULL) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('pegawai/peserta');
            } else {
                $ket = [
                    'jns_magang' => $pdfjns,
                    'pembimbing_balai' => $nip,
                    'status_pm' => $pdfstat
                ];
                $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                $data['tglawal'] = date('d M Y', strtotime($tglawal));
                $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                $data['pdfpeg'] = $data['user']['nama_pegawai'];
                $data['pdfjns'] = $pdfjns;
                $data['pdfstat'] = $pdfstat;
            }
        }

        // var_dump($tglawal, $tglakhir, $data['detail']);
        // } else {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Filter tidak valid!  </div>');
        //     redirect('pegawai/data_peserta/peserta_seluruh');
        // }
        $data['title'] = 'Daftar Peserta Bimbingan';
        $data['header'] = $this->Model_admin->getdet('data_header_surat', ['id_header_surat' => 'h01'])->row();
        $nama_file = 'peserta_magang_bimbingan';
        $size = 'A4';
        $orientation = "landscape";
        $this->load->library('generatepdf');
        $html = $this->load->view('v_lap_pdf', $data, true);
        $this->generatepdf->generate($html, $nama_file, $size, $orientation);
    }

    public function export_pdf2()
    {
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        $pdfjns = $this->input->post('pdfjns');
        $pdfpeg = $this->input->post('pdfpeg');
        $pdfstat = $this->input->post('pdfstat');
        if (!$pdfstat) {
            if ($pdfjns == NULL and $pdfpeg == NULL) {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket1 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
                    $data['detail'] = $this->Model_admin->bjoin2('peserta_magang', 'data_pegawai', $ket1, 'inner', 'nama_pm', 'ASC')->result();
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = 'Seluruh Status';
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    //ga valid
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    // echo "cuma buat tgl";
                    $data['detail'] = $this->Model_admin->tgl(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)));
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = 'Seluruh Status';
                }
            } elseif ($pdfpeg == NULL) {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'jns_magang' => $pdfjns
                    ];
                    // cuma buat jenis
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = 'Seluruh Status';
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'jns_magang' => $pdfjns
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = 'Seluruh Status';
                }
            } elseif ($pdfjns == NULL) {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'pembimbing_balai' => $pdfpeg
                    ];
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    // cuma buat peg
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = 'Seluruh Status';
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'pembimbing_balai' => $pdfpeg
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = 'Seluruh Status';
                }
            } else {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'jns_magang' => $pdfjns,
                        'pembimbing_balai' => $pdfpeg
                    ];
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = 'Seluruh Status';
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'jns_magang' => $pdfjns,
                        'pembimbing_balai' => $pdfpeg
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = 'Seluruh Status';
                }
            }
        } else {
            if ($pdfjns == NULL and $pdfpeg == NULL) {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = $pdfstat;
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = $pdfstat;
                }
            } elseif ($pdfpeg == NULL) {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'jns_magang' => $pdfjns,
                        'status_pm' => $pdfstat
                    ];
                    // cuma buat jenis
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = $pdfstat;
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'jns_magang' => $pdfjns,
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = 'Seluruh Pegawai';
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = $pdfstat;
                }
            } elseif ($pdfjns == NULL) {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'pembimbing_balai' => $pdfpeg,
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    // cuma buat peg
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = $pdfstat;
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'pembimbing_balai' => $pdfpeg,
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = 'Seluruh Jenis';
                    $data['pdfstat'] = $pdfstat;
                }
            } else {
                if ($tglawal == NULL and $tglakhir == NULL) {
                    $ket = [
                        'jns_magang' => $pdfjns,
                        'pembimbing_balai' => $pdfpeg,
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->mhs_nip($ket);
                    $data['tglawal'] = 'Seluruh Tanggal';
                    $data['tglakhir'] = ' ';
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = $pdfstat;
                } elseif ($tglawal == NULL or $tglakhir == NULL) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:90%"> Tanggal Tidak Valid! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                    redirect('admin/peserta/peserta_seluruh');
                } else {
                    $ket = [
                        'jns_magang' => $pdfjns,
                        'pembimbing_balai' => $pdfpeg,
                        'status_pm' => $pdfstat
                    ];
                    $data['detail'] = $this->Model_admin->tgl_mhs_nip(date('Y-m-d', strtotime($tglawal)), date('Y-m-d', strtotime($tglakhir)), $ket);
                    $data['tglawal'] = date('d M Y', strtotime($tglawal));
                    $data['tglakhir'] = date('d M Y', strtotime($tglakhir));
                    $data['pdfpeg'] = $pdfpeg;
                    $data['pdfjns'] = $pdfjns;
                    $data['pdfstat'] = $pdfstat;
                }
            }
        }
        // var_dump($data['detail']);
        $data['title'] = 'Daftar Peserta Magang';
        $data['header'] = $this->Model_admin->getdet('data_header_surat', ['id_header_surat' => 'h01'])->row();
        $nama_file = 'peserta_magang';
        $size = 'A4';
        $orientation = "landscape";
        $this->load->library('generatepdf');
        $html = $this->load->view('v_lap_pdf', $data, true);
        $this->generatepdf->generate($html, $nama_file, $size, $orientation);
    }

    public function hapus($id_pm)
    {
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_admin->getdet('peserta_magang', $ket)->row();
        if ($getdetail->status_pm == 'none') {
            $this->Model_pegawai->hapus('peserta_magang', $ket);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Peserta berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('admin/peserta/peserta_seluruh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Peserta sudah aktif! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('admin/peserta/peserta_seluruh');
        }
        // var_dump($getdetail);
    }
    public function hapus2($id_pm)
    {
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_admin->getdet('peserta_magang', $ket)->row();
        if ($getdetail->status_pm == 'none') {
            $this->Model_pegawai->hapus('peserta_magang', $ket);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Peserta berhasil dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('admin/peserta/peserta');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Peserta sudah aktif! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('admin/peserta/peserta');
        }
        // var_dump($getdetail);
    }

    public function export_excel()
    {
        $data['user'] = $this->Model_admin->getuser();
        $nip = $data['user']['nip'];
        $data['nip'] = $data['user']['nip'];
        $ket1 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $ket = 'peserta_magang.pembimbing_balai';
        $ket = ['pembimbing_balai' => $nip];
        $peserta = $this->Model_admin->ajoin2('peserta_magang', 'data_pegawai', $ket1, $ket, $nip, 'inner', 'nama_pm', 'ASC')->result();
        // $peserta = $this->Model_admin->getdet('peserta_magang', $ket)->result();
        // var_dump($peserta);
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
        $no = 1;
        $numrow = 2;
        foreach ($peserta as  $pm) {
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
            $sheet->setCellValue('K' . $numrow,  $pm->nama_pegawai);
            $sheet->setCellValue('L' . $numrow,  $pm->tgl_mli_pm);
            $sheet->setCellValue('M' . $numrow,  $pm->tgl_sls_pm);
            $no++;
            $numrow++;
        }
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Data Peserta Magang Balitklimat");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Peserta Magang Balitklimat.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
    public function export_excel2()
    {
        $ket1 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
        $peserta = $this->Model_admin->bjoin2('peserta_magang', 'data_pegawai', $ket1, 'inner', 'nama_pm', 'ASC')->result();
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
        $no = 1;
        $numrow = 2;
        foreach ($peserta as  $pm) {
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
            $sheet->setCellValue('K' . $numrow,  $pm->nama_pegawai);
            $sheet->setCellValue('L' . $numrow,  $pm->tgl_mli_pm);
            $sheet->setCellValue('M' . $numrow,  $pm->tgl_sls_pm);
            $no++;
            $numrow++;
        }
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Data Peserta Magang Balitklimat");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Peserta Magang Balitklimat.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
