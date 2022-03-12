<?php

class Stok_alat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_stok');
        $this->load->helper('url','array');
        $this->load->library('form_validation', 'upload', 'session');
        // if ($this->session->userdata('logged_in') == false) {
		// 	redirect('login');
		// }
    }

    function index()
    {
        $data['data_stok'] = $this->Model_stok->tampil_data('stok_alat')->result();
        $data['title'] = "Stok Alat | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('stok/v_stok_alat', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Detail Stok Alat | Balitklimat";
        $data['detail'] = $this->Model_stok->detail_data($id);
        $this->load->view('template/template', $data);
        $this->load->view('stok/v_detail_stok', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $data['title'] = 'Tambah Stok Alat | Balitklimat';
        $this->load->view('template/template', $data);
        $this->load->view('stok/v_tambah_stok', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah_aksi()
    {
        if ($this->input->post('submit')); {
            $this->form_validation->set_rules('namaalat', 'namaalat', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            $this->form_validation->set_rules('stock', 'stock','required');
            $this->form_validation->set_rules('kondisi', 'kondisi', 'required');

            if ($this->form_validation->run() == true) {
                $config['upload_path'] = './assets/images/upload';
                $config['allowed_types'] = 'jpg|png|jpeg|webp';
                $config['max_size']  = '10000';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    if ($this->Model_stok->input_data($this->upload->data()) == true) {
                        $this->session->set_flashdata('sukses', 'Data Alat berhasil ditambah');
                        redirect('stok_alat');
                    } else {
                        $this->session->set_flashdata('gagal', 'Gagal menyimpan data');
                        redirect('stok_alat/tambah');
                    }
                } else {
                    $this->Model_stok->input_data('stok_alat');
                    $this->session->set_flashdata('sukses',  'tanpa gambar');
                    redirect('stok_alat');
                }
            } else {
                $this->session->set_flashdata('gagal',  validation_errors());
                redirect('stok_alat/tambah');
            }
        }
    }

    function edit()
    {
        $id = $this->input->get('idalat');
        $data['primary_view'] = 'stok/v_update_stok';
        $data['edit'] = $this->Model_stok->getDetail($id);
        $data['title'] = 'Edit Stok Alat | Balitklimat';
        $this->load->Model('Model_stok');
        $this->load->view('template/template', $data);
        $this->load->view('stok/v_update_stok', $data);
        $this->load->view('template/footer', $data);
    }

    function update()
    {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('namaalat', 'namaalat', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            $this->form_validation->set_rules('stock', 'stock','required');
            $this->form_validation->set_rules('kondisi', 'kondisi', 'required');

            if ($this->form_validation->run() == true) {
                $config['upload_path'] = './assets/images/upload';
                $config['allowed_types'] = 'jpg|png|jpeg|webp';
                $config['max_size']  = '10000';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image') == true) {
                    if ($this->Model_stok->update_data($this->input->post('idalat'), $this->upload->data()) == true) {
                        $this->session->set_flashdata('sukses', 'Data alat berhasil diperbarui');
                        redirect('stok_alat');
                    } else {
                        $this->session->set_flashdata('gagal', 'Gagal menyimpan data');
                        redirect('stok_alat/edit?idalat=' . $this->input->post('idalat'));
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Silahkan upload gambar');
                    redirect('stok_alat/edit?idalat=' . $this->input->post('idalat'));
                }
            } else {
                $this->session->set_flashdata('gagal', validation_errors());
                redirect('stok_alat/edit?idalat=' . $this->input->post('idalat'));
            }
        } else {
            $this->session->set_flashdata('gagal', validation_errors());
            redirect('stok_alat/edit?idalat=' . $this->input->post('idalat'));
        }
    }

    
    function hapus($id)
    {
        $where = array('idalat' => $id);
        $this->Model_stok->hapus_data($where, 'stok_alat');
        $this->session->set_flashdata('sukses', 'Data alat berhasil dihapus');
        redirect('stok_alat');
    }
}
