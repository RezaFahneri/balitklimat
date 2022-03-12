<?php

class Perbaikan_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_perbaikan');
        $this->load->Model('Model_stok');
        $this->load->helper('url', 'array', 'fungsi');
        $this->load->library('form_validation', 'upload');
        $this->load->library('session');
        $this->session->keep_flashdata('pesan');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }

    function index()
    {
        $data['data_perbaikan'] = $this->Model_perbaikan->getList();
        $data['title'] = "Perbaikan Barang | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('perbaikan/v_perbaikan', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah()
    {
        $data['title'] = 'Tambah Perbaikan Barang | Balitklimat';
        $data['barang'] = $this->Model_stok->tampil_dataperbaikan();
        $this->load->view('template/template', $data);
        $this->load->view('perbaikan/v_tambah_perbaikan', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah_aksi()
    {
        if ($this->input->post('submit')); {
            // $this->db->join('pinjam_barang p', 'bk.barang_id = b.id_barang');
            // $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
            $this->form_validation->set_rules('id_barang', 'id_barang', 'required');
            $this->form_validation->set_rules('jenis', 'jenis', 'required');
            $this->form_validation->set_rules('tempat', 'tempat', 'required');
            $this->form_validation->set_rules('tglperbaikan', 'tglperbaikan', 'required');
            $this->form_validation->set_rules('tglselesai', 'tglselesai', 'required');
            $this->form_validation->set_rules('qty', 'qty', 'required');

            if ($this->form_validation->run() == true) {
                $idbarang     = $this->input->post('id_barang');
                $jenis     = $this->input->post('jenis');
                $tempat     = $this->input->post('tempat');
                $tglperbaikan    = $this->input->post('tglperbaikan');
                $tglselesai   = $this->input->post('tglselesai');
                $qty          = $this->input->post('qty');
                $status         = $this->input->post('status');

                $data = array(
                    'id_barang'    => $idbarang,
                    'jenis'    => $jenis,
                    'tempat'    => $tempat,
                    'tglperbaikan'   => $tglperbaikan,
                    'tglselesai'  => $tglselesai,
                    'qty'         => $qty,
                    'status'      => $status,
                );
                //Mengurangi stok barang
                $stokbarang = $this->db->where('id_barang', $idbarang)->get('stok_barang')->row('jumlah_barang');
                if ($stokbarang >= $qty) {
                    $this->Model_perbaikan->input_data($data, 'perbaikan_barang');
                    $updatestokbarang = (int) $stokbarang - $qty;
                    // $stokbarang = $this->db->where('id_barang', $idbarang)->get('stok_barang')->row('keterangan');
                    $this->db->set('jumlah_barang', $updatestokbarang)->where('id_barang', $idbarang)->update('stok_barang');
                    $this->session->set_flashdata('sukses', 'Berhasil tambah data perbaikan barang');
                    redirect('perbaikan_barang');
                } else {
                    $this->session->set_flashdata('pesan', 'Gagal menambah data perbaikan, stok barang tidak cukup');
                    redirect('perbaikan_barang/tambah');
                }
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('perbaikan_barang/tambah');
            }
        }
    }

    function selesai($id,$idbarang)
    {
        $where = array('id_perbaikan' => $id);
        $data = array(
            'status' => 2,
        );

        $where2 = array('id_barang' => $idbarang);
        $stokbarang = $this->db->where('id_barang', $idbarang)->get('stok_barang')->row('jumlah_barang');
        $qty = $this->db->where('id_perbaikan', $id)->get('perbaikan_barang')->row('qty');
        $data2 = array(
            'jumlah_barang' => (int) $stokbarang + $qty,
        );

        $this->Model_perbaikan->update_data($where, $data, 'perbaikan_barang');
        $this->Model_stok->update_data_stok($where2, $data2, 'stok_barang');
        $this->session->set_flashdata('sukses', 'Perbaikan barang sudah selesai');
        redirect('perbaikan_barang');
    }
}
