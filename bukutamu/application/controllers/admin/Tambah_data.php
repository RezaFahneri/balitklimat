<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
    }

    public function index()
    {
        $data['title'] = 'Admin | Dashboard';
        $data['user'] = $this->Model_buku_tamu->getuser();
        $keperluan = $this->Model_buku_tamu->get_data('bt_keperluan');
        $data['keperluan'] = $keperluan;
        $alasan = $this->Model_buku_tamu->get_data('bt_alasan');
        $data['alasan'] = $alasan;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/tambah_data', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_keperluan()
    {
        $data['title'] = 'Admin | Tambah Keperluan';
        $this->form_validation->set_rules('namakep', 'Nama Keperluan', 'required|trim');
        $this->form_validation->set_rules('ketkep', 'Keterangan Keperluan ', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar_adm');
            $this->load->view('admin/tambah_keperluan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_keperluan' => $this->Model_buku_tamu->idkep(),
                'nama_keperluan' => $this->input->post('namakep'),
                'ket_keperluan' => $this->input->post('ketkep'),
            ];
            // var_dump($data);
            $this->Model_buku_tamu->insert_data('bt_keperluan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Keperluan ditambah  </div>');
            redirect('admin/tambah_data');
        }
    }

    public function edit_keperluan($id_keperluan)
    {
        $data['title'] = 'Admin | Edit Keperluan';
        $ket = ['id_keperluan' => $id_keperluan];
        $data['detail'] = $this->Model_buku_tamu->getdetail('bt_keperluan', $ket);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/edit_keperluan', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_kep()
    {
        $id_keperluan = $this->input->post('id');
        $ket = ['id_keperluan' => $id_keperluan];
        $data = [
            'nama_keperluan' => $this->input->post('namakep'),
            'ket_keperluan' => $this->input->post('ketkep'),
        ];
        // var_dump($data, $ket);
        $this->Model_buku_tamu->updata('bt_keperluan', $data, $ket);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Keperluan diedit  </div>');
        redirect('admin/tambah_data');
    }

    public function hapus_keperluan($id_keperluan)
    {
        $ket = ['id_keperluan' => $id_keperluan];
        $this->Model_buku_tamu->hapus('bt_keperluan', $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Keperluan dihapus </div>');
        redirect('admin/tambah_data');
    }

    public function tambah_alasan()
    {
        $data['title'] = 'Admin | Tambah alasan';
        $this->form_validation->set_rules('namaals', 'Nama Alasan', 'required|trim');
        $this->form_validation->set_rules('ketals', 'Keterangan Alasan ', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar_adm');
            $this->load->view('admin/tambah_alasan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_alasan' => $this->Model_buku_tamu->idal(),
                'nama_alasan' => $this->input->post('namaals'),
                'ket_alasan' => $this->input->post('ketals'),
            ];
            // var_dump($data);
            $this->Model_buku_tamu->insert_data('bt_alasan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Alasan ditambah  </div>');
            redirect('admin/tambah_data');
        }
    }

    public function edit_alasan($id_alasan)
    {
        $data['title'] = 'Admin | Edit Alasan';
        $ket = ['id_alasan' => $id_alasan];
        $data['detail'] = $this->Model_buku_tamu->getdetail('bt_alasan', $ket);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_adm');
        $this->load->view('admin/edit_alasan', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_als()
    {
        $id_alasan = $this->input->post('id');
        $ket = ['id_alasan' => $id_alasan];
        $data = [
            'nama_alasan' => $this->input->post('namaals'),
            'ket_alasan' => $this->input->post('ketals'),
        ];
        // var_dump($data, $ket);
        $this->Model_buku_tamu->updata('bt_alasan', $data, $ket);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Alasan diedit  </div>');
        redirect('admin/tambah_data');
    }

    public function hapus_alasan($id_alasan)
    {
        $ket = ['id_alasan' => $id_alasan];
        $this->Model_buku_tamu->hapus('bt_alasan', $ket);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Alasan dihapus </div>');
        redirect('admin/tambah_data');
    }
}
