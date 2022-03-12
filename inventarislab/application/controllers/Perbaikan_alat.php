<?php

class Perbaikan_alat extends CI_Controller
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
        // if ($this->session->userdata('logged_in') == false) {
		// 	redirect('login');
		// }
    }

    function index()
    {
        $data['data_perbaikan'] = $this->Model_perbaikan->getList();
        $data['title'] = "Perbaikan Alat | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('perbaikan/v_perbaikan', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah()
    {
        $data['title'] = 'Tambah Perbaikan Alat | Balitklimat';
        $data['alat'] = $this->Model_stok->tampil_dataperbaikan();
        $this->load->view('template/template', $data);
        $this->load->view('perbaikan/v_tambah_perbaikan', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah_aksi()
    {
        if ($this->input->post('submit')); {
            // $this->db->join('pinjam_barang p', 'bk.barang_id = b.id_barang');
            // $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
            $this->form_validation->set_rules('idalat', 'idalat', 'required');
            $this->form_validation->set_rules('jenis', 'jenis', 'required');
            $this->form_validation->set_rules('tempat', 'tempat', 'required');
            $this->form_validation->set_rules('tglperbaikan', 'tglperbaikan', 'required');
            $this->form_validation->set_rules('tglselesai', 'tglselesai', 'required');
            $this->form_validation->set_rules('qty', 'qty', 'required');

            if ($this->form_validation->run() == true) {
                $idalat     = $this->input->post('idalat');
                $jenis     = $this->input->post('jenis');
                $tempat     = $this->input->post('tempat');
                $tglperbaikan    = $this->input->post('tglperbaikan');
                $tglselesai   = $this->input->post('tglselesai');
                $qty          = $this->input->post('qty');
                $status         = $this->input->post('status');

                $data = array(
                    'idalat'    => $idalat,
                    'jenis'    => $jenis,
                    'tempat'    => $tempat,
                    'tglperbaikan'   => $tglperbaikan,
                    'tglselesai'  => $tglselesai,
                    'qty'         => $qty,
                    'status'      => $status,
                );
                //Mengurangi stok barang
                $stokalat = $this->db->where('idalat', $idalat)->get('stok_alat')->row('stock');
                if ($stokalat >= $qty) {
                    $this->Model_perbaikan->input_data($data, 'perbaikan_alat');
                    $updatestokalat = (int) $stokalat - $qty;
                    // $stokbarang = $this->db->where('id_barang', $idbarang)->get('stok_alat')->row('keterangan');
                    $this->db->set('stock', $updatestokalat)->where('idalat', $idalat)->update('stok_alat');
                    $this->session->set_flashdata('sukses', 'Berhasil tambah data perbaikan alat');
                    redirect('perbaikan_alat');
                } else {
                    $this->session->set_flashdata('pesan', 'Gagal menambah data perbaikan, stok alat tidak cukup');
                    redirect('perbaikan_alat/tambah');
                }
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('perbaikan_alat/tambah');
            }
        }
    }

    function selesai($id,$idalat)
    {
        $where = array('id_perbaikan' => $id);
        $data = array(
            'status' => 2,
        );

        $where2 = array('idalat' => $idalat);
        $stokalat = $this->db->where('idalat', $idalat)->get('stok_alat')->row('stock');
        $qty = $this->db->where('id_perbaikan', $id)->get('perbaikan_alat')->row('qty');
        $data2 = array(
            'stock' => (int) $stokalat + $qty,
        );

        $this->Model_perbaikan->update_data($where, $data, 'perbaikan_alat');
        $this->Model_stok->update_data_stok($where2, $data2, 'stok_alat');
        $this->session->set_flashdata('sukses', 'Perbaikan alat sudah selesai');
        redirect('perbaikan_alat');
    }
}
