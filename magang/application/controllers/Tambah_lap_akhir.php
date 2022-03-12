<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_lap_akhir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id_pm)
    {
        echo $id_pm;
    }
    public function tambah($id_pm)
    {
        $data['title'] = 'Tambah Laporan Akhir';
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_peserta->getdet('peserta_magang', $ket)->row();
        $data['detail'] = $getdetail;
        // $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('judullapak', 'Judul Laporan Akhir', 'required');
        // $this->form_validation->set_rules('abstraklapak', 'Abstrak Laporan Akhir', 'required');

        // if ($this->form_validation->run() == false) {
        if ($getdetail) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Sudah mengisi laporan akhir! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
            redirect('Masuk');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('v_tambah_lap_akhir', $data);
        }
        // } else {
        //     $doklapak = $_FILES['doklapak']['name'];
        //     if ($doklapak) {
        //         $config['upload_path'] = './assets/dokumen/lap_ak';
        //         $config['allowed_types'] = 'pdf|docx';
        //         $config['max_size']     = '3000';
        //         $this->load->library('upload', $config);
        //         if ($this->upload->do_upload('doklapak')) {
        //             $dok_lap_ak = $this->upload->data('file_name');
        //         } else {
        //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  File gagal diunggah </div>');
        //             redirect('peserta/lap_akhir/tambah');
        //         }
        //     } else {
        //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  File tidak memenuhi kebutuhan </div>');
        //         redirect('peserta/lap_akhir/tambah');
        //     }
        //     $data1 = [
        //         'id_lapak' => $this->Model_peserta->idlapak(),
        //         'tgl_up_lapak' => date('Y-m-d', time()),
        //         'judul_lapak' => htmlspecialchars($this->input->post('judullapak')),
        //         'abstrak_lapak' => htmlspecialchars($this->input->post('abstraklapak')),
        //         'dok_lapak' => $dok_lap_ak,
        //         'id_pm' => $id_pm
        //     ];
        //     // var_dump($data1, $data);
        //     $this->Model_peserta->insert($data1, 'laporan_akhir');
        //     $data['tgl_sls'] = date('d M Y', strtotime($getdetail->tgl_sls_pm));
        //     $data['tgl_mli'] = date('d M Y', strtotime($getdetail->tgl_mli_pm));
        //     $data['judul'] = $this->input->post('judullapak');
        //     $data['nama'] = $this->input->post('judullapak');
        //     $data['instansi'] = 'Balai Penelitian Agroklimat dan Hidrologi';
        //     $email = $getdetail->email;
        //     $nama = $getdetail->nama_pm;
        //     $file_name = 'Sertifikat_' . $nama . '.pdf';
        //     $size = 'A4';
        //     $orientation = "landscape";
        //     $this->load->library('generatepdf');
        //     $html = $this->load->view('v_sertif_pdf', $data, true);
        //     $this->generatepdf->generate2($html, $file_name, $size, $orientation);
        //     $this->load->library('phpmailer_lib');
        //     $mail = $this->phpmailer_lib->load();
        //     $mail->isSMTP();
        //     $mail->Host       = 'smtp.gmail.com';
        //     $mail->SMTPAuth   = true;
        //     $mail->Username   = 'magang.balitklimat@gmail.com';
        //     $mail->Password   = 'Asdfghjkl;1234';
        //     $mail->Port       = 587;
        //     $mail->setFrom('magang.balitklimat@gmail.com', 'BALAI PENELITIAN AGAROKLIMAT DAN HIDROLOGI');
        //     $mail->addAddress($email, $nama);
        //     $mail->addReplyTo('magang.balitklimat@gmail.com', 'bALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI');
        //     $mail->isHTML(true);
        //     $mail->Subject = 'SERTIFIKAT MAGANG';
        //     $mail->Body    = 'Terima kasih telah menyelesaikan magang! ';
        //     $mail->AddAttachment($file_name);
        //     if ($mail->send()) {
        //     } else {
        //         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        //     }
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Laporan Tersimpan </div>');
        //     redirect('peserta/lap_akhir');
        // }
    }
    public function simpan()
    {
        $id_pm = $this->input->post('id_pm');
        $ket = ['id_pm' => $id_pm];
        $getdetail = $this->Model_peserta->getdet('peserta_magang', $ket)->row();
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
                redirect('tambah_lap_akhir/tambah/' . $id_pm);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Tidak ada file atau file tidak memenuhi kebutuhan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
            redirect('tambah_lap_akhir/tambah/' . $id_pm);
        }
        $data1 = [
            'id_lapak' => $this->Model_peserta->idlapak(),
            'tgl_up_lapak' => date('Y-m-d', time()),
            'judul_lapak' => htmlspecialchars($this->input->post('judullapak')),
            'abstrak_lapak' => htmlspecialchars($this->input->post('abstraklapak')),
            'dok_lapak' => $dok_lap_ak,
            'id_pm' => $id_pm
        ];
        // var_dump($data1);
        $this->Model_peserta->insert($data1, 'laporan_akhir');
        $data['tgl_sls'] = date('d M Y', strtotime($getdetail->tgl_sls_pm));
        $data['tgl_mli'] = date('d M Y', strtotime($getdetail->tgl_mli_pm));
        $data['judul'] = $this->input->post('judullapak');
        $data['nama'] = $this->input->post('nama');
        $data['instansi'] = 'Balai Penelitian Agroklimat dan Hidrologi';
        $email = $getdetail->email_pm;
        $nama = $getdetail->nama_pm;
        // var_dump($data1, $nama, $email, $data);
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
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Email tidak terkirim. Mailer Error: {' . $mail->ErrorInfo . '} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Laporan Akhir Berhasil Disimpan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        redirect('tambah_lap_akhir/tambah/' . $id_pm);
    }
}
