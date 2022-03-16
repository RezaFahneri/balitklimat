<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_akhir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Peserta | Laporan Akhir';
        $data['user2'] = $this->Model_peserta->getuser();
        $id_pm = $data['user2']['id_pm'];
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
        $data['detail'] = $getdetail;
        $data['header'] = $this->Model_peserta->getdet('data_header_surat', ['id_header_surat' => 'h01'])->row();
        // var_dump(ucfirst($getheader->eslon_tiga));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/laporan_akhir/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Peserta | Tambah Laporan Akhir';
        $data['user2'] = $this->Model_peserta->getuser();
        $id_pm = $data['user2']['id_pm'];
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('judullapak', 'Judul Laporan Akhir', 'required');
        $this->form_validation->set_rules('abstraklapak', 'Abstrak Laporan Akhir', 'required');
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();

        if ($this->form_validation->run() == false) {
            // var_dump($getdetail);
            if ($getdetail) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Sudah mengisi laporan akhir! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
                redirect('peserta/lap_akhir');
            } else {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('templates/sidebar');
                $this->load->view('peserta/laporan_akhir/v_tambah', $data);
                $this->load->view('templates/footer');
            }
        } else {
            $doklapak = $_FILES['doklapak']['name'];
            if ($doklapak) {
                $config['upload_path'] = './assets/dokumen/lap_ak';
                $config['allowed_types'] = 'pdf|docx';
                $config['max_size']     = '3000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('doklapak')) {
                    $dok_lap_ak = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> File Gagal Diunggah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> </div>');
                    redirect('peserta/lap_akhir/tambah');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Tidak ada file atau file tidak memenuhi kebutuhan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('peserta/lap_akhir/tambah');
            }
            $data1 = [
                'id_lapak' => $this->Model_peserta->idlapak(),
                'tgl_up_lapak' => date('Y-m-d', time()),
                'judul_lapak' => htmlspecialchars($this->input->post('judullapak')),
                'abstrak_lapak' => htmlspecialchars($this->input->post('abstraklapak')),
                'dok_lapak' => $dok_lap_ak,
                'id_pm' => $id_pm
            ];
            // var_dump($data1, $data);
            $this->Model_peserta->insert($data1, 'laporan_akhir');
            $getheader = $this->Model_peserta->getdet('data_header_surat', ['id_header_surat' => 'h01'])->row();
            $data['tgl_sls'] = date('d M Y', strtotime($data['user2']['tgl_sls_pm']));
            $data['tgl_mli'] = date('d M Y', strtotime($data['user2']['tgl_mli_pm']));
            $data['judul'] = $this->input->post('judullapak');
            $data['nama'] = $this->input->post('nama');
            $data['instansi'] = $getheader->eslon_tiga;
            $email = $this->input->post('email_pm');
            $nama = $data['user2']['id_pm'];
            $file_name = 'Sertifikat_' . $nama . '.pdf';
            $size = 'A4';
            $orientation = "landscape";
            $this->load->library('generatepdf');
            $html = $this->load->view('v_sertif_pdf', $data, true);
            $this->generatepdf->generate2($html, $file_name, $size, $orientation);
            $this->load->library('phpmailer_lib');
            $mail = $this->phpmailer_lib->load();
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'magang.balitklimat@gmail.com';
            $mail->Password   = 'Asdfghjkl;1234';
            $mail->Port       = 587;
            $mail->setFrom('magang.balitklimat@gmail.com', 'MAGANG BALAI PENELITIAN AGAROKLIMAT DAN HIDROLOGI');
            $mail->addAddress($email, $nama);
            $mail->addReplyTo('magang.balitklimat@gmail.com', 'MAGANG BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI');
            $mail->isHTML(true);
            $mail->Subject = 'SERTIFIKAT MAGANG';
            $mail->Body    = 'Terima kasih telah menyelesaikan magang! ';
            $mail->AddAttachment($file_name);
            if ($mail->send()) {
                unlink($file_name);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Email tidak terkirim. Mailer Error: {' . $mail->ErrorInfo . '} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
                redirect('peserta/lap_akhir');
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Laporan akhir berhasil disimpan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('peserta/lap_akhir');
        }
    }

    public function edit($id_lapak)
    {
        $data['title'] = 'Peserta | Edit Laporan';
        //ambil detail laporan sesuai id yang dipilih
        $ket = ['id_lapak' => $id_lapak];
        $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
        $data['detail'] = $getdetail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('peserta/laporan_akhir/v_edit', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $id_lapak = $this->input->post('id_lapak');
        $ket = ['id_lapak' => $id_lapak];
        $getdetail = $this->Model_peserta->getdet('laporan_akhir', $ket)->row();
        $doklapak = $_FILES['doklapak']['name'];
        if ($doklapak) {
            $config['upload_path'] = './assets/dokumen/lap_ak';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size']     = '3000';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('doklapak')) {
                $filelama = $getdetail->dok_lapak;
                unlink(FCPATH . '/assets/dokumen/lap_ak/' . $filelama);
                $dok_lap_ak = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  File gagal diunggah </div>');
                redirect('peserta/lap_akhir/edit/' . $id_lapak);
            }
        } else {
            $dok_lap_ak = $getdetail->dok_lapak;
        }
        $data = [
            // 'id_lapak' => $this->Model_peserta->idlapak(),
            // 'tgl_up_lapak' => date('Y-m-d', time()),
            'judul_lapak' => htmlspecialchars($this->input->post('judullapak')),
            'abstrak_lapak' => htmlspecialchars($this->input->post('abstraklapak')),
            'dok_lapak' => $dok_lap_ak,
            // 'id_pm' => $id_pm
        ];
        // var_dump($data);
        $this->Model_peserta->updata('laporan_akhir', $data, $ket);
        // $this->_email();
        //$this->Model_peserta->updata('laporan_mingguan', $data, $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Laporan diubah! </div>');
        redirect('peserta/lap_akhir');
    }

    // private function _email()
    // {
    //     $this->load->library('phpmailer_lib');
    //     $mail = $this->phpmailer_lib->load();
    //     $mail->isSMTP();
    //     $mail->Host       = 'smtp.gmail.com';
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'magang.balitklimat@gmail.com';
    //     $mail->Password   = 'Asdfghjkl;1234';
    //     $mail->Port       = 587;
    //     $mail->setFrom('magang.balitklimat@gmail.com', 'Magang Balai Penelitian Agroklimat dan Hidrologi');
    //     $mail->addAddress($email, $nama_pm);
    //     $mail->addReplyTo('magang.balitklimat@gmail.com', 'Magang Balai Penelitian Agroklimat dan Hidrologi');
    //     $mail->isHTML(true);
    //     $mail->Subject = 'SUDAH KIRIMt';
    //     $mail->Body    = '<h1>HakAMU dpt SERTIF nomor invoice </p> ';

    //     if ($mail->send()) {
    //         // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Dikirim! </div>');
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Laporan diubah!' . $mail->ErrorInfo . ' </div>');
    //         redirect('peserta/lap_akhir');
    //         // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //     }
    // }

    // public function blok()
    // {
    //     // $data['user2'] = $this->Model_peserta->getuser();
    //     // $tgl_sls = $data['user2']['tgl_sls_pm'];
    //     // $id_pm = $data['user2']['id_pm'];
    //     // // $test = time() - strtotime($tgl_sls);
    //     // $ket = ['id_pm' => $id_pm];
    //     //  else {

    //     //     echo "boleh";
    //     // }
    //     // // var_dump(time(), date('Y-m-d', time()), strtotime($tgl_sls));
    // }
}
