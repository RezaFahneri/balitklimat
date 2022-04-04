<?php

class Pinjam_alat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pinjam');
        $this->load->Model('Model_stok');
        $this->load->Model('Model_riwayat');
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
        $data['data_pinjam'] = $this->Model_pinjam->getList();
        $data['title'] = "Peminjaman Alat | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_pinjam', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Detail Peminjaman Alat | Balitklimat";
        $data['detail'] = $this->Model_pinjam->detail_data($id);
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_detail_pinjam', $data);
        $this->load->view('template/footer');
    }

    function pinjam()
    {
        $data['title'] = 'Pinjam Alat | Balitklimat';
        $data['alat'] = $this->Model_stok->tampil_datapinjam();
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_tambah_pinjam', $data);
        $this->load->view('template/footer', $data);
    }

    function pinjam_aksi()
    {
        if ($this->input->post('submit')); {
            // $this->db->join('pinjam_alat p', 'bk.barang_id = b.id_barang');
            // $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
            $this->form_validation->set_rules('idalat', 'idalat', 'required');
            $this->form_validation->set_rules('peminjam', 'peminjam', 'required');
            $this->form_validation->set_rules('tglpinjam', 'tglpinjam', 'required');
            $this->form_validation->set_rules('tglselesai', 'tglselesai', 'required');
            $this->form_validation->set_rules('qty', 'qty', 'required');
            $this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
            $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan');

            if ($this->form_validation->run() == true) {
                $idalat     = $this->input->post('idalat');
                $peminjam     = $this->input->post('peminjam');
                $tglpinjam    = $this->input->post('tglpinjam');
                $tglselesai   = $this->input->post('tglselesai');
                $qty          = $this->input->post('qty');
                $kegiatan     = $this->input->post('kegiatan');
                $lokasi       = $this->input->post('lokasi');
                $keterangan       = $this->input->post('keterangan');
                $status         = $this->input->post('status');

                $data = array(
                    'idalat'    => $idalat,
                    'peminjam'    => $peminjam,
                    'tglpinjam'   => $tglpinjam,
                    'tglselesai'  => $tglselesai,
                    'qty'         => $qty,
                    'kegiatan'    => $kegiatan,
                    'lokasi'      => $lokasi,
                    'keterangan'      => $keterangan,
                    'status'      => $status,
                );
                //Mengurangi stok barang
                $stokalat = $this->db->where('idalat', $idalat)->get('stok_alat')->row('stock');
                if ($stokalat >= $qty) {
                    $this->Model_pinjam->input_data($data, 'pinjam_alat');
                    $updatestokalat = (int) $stokalat - $qty;
                    $this->db->set('stock', $updatestokalat)->where('idalat', $idalat)->update('stok_alat');
                    $this->session->set_flashdata('sukses', 'Berhasil melakukan peminjaman alat');
                    redirect('pinjam_alat');
                } else {
                    $this->session->set_flashdata('pesan', 'Gagal melakukan peminjaman, stok alat tidak cukup');
                    redirect('pinjam_alat/pinjam');
                }
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('pinjam_alat/pinjam');
            }
        }
    }

    function edit()
    {
        $id = $this->input->get('id_pinjam');
        $data['primary_view'] = 'peminjaman/v_update_pinjam';
        $data['edit'] = $this->Model_pinjam->getDetail($id);
        $data['title'] = 'Edit Peminjaman Alat | Balitklimat';
        $this->load->Model('Model_stok');
        $this->load->view('template/template', $data);
        $this->load->view('peminjaman/v_update_pinjam', $data);
        $this->load->view('template/footer', $data);
    }

    function update()
    {
        if ($this->input->post('submit')) {
            // $this->form_validation->set_rules('idalat', 'idalat', 'required');
            $this->form_validation->set_rules('peminjam', 'peminjam', 'required');
            $this->form_validation->set_rules('tglpinjam', 'tglpinjam', 'required');
            $this->form_validation->set_rules('tglselesai', 'tglselesai', 'required');
            $this->form_validation->set_rules('qty', 'qty', 'required');
            $this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
            $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan');

            if ($this->form_validation->run() == true) {
                if ($this->Model_pinjam->update_data_pinjam($this->input->post('id_pinjam'), $this->upload->data()) == true) {
                    $this->session->set_flashdata('sukses', 'Data peminjaman alat berhasil diperbarui');
                    redirect('pinjam_alat');
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal menyimpan data');
                    redirect('pinjam_alat/edit?id_pinjam=' . $this->input->post('id_pinjam'));
                }
            } else {
                $this->session->set_flashdata('gagal', validation_errors());
                redirect('pinjam_alat/edit?id_pinjam=' . $this->input->post('id_pinjam'));
            }
        } else {
            $this->session->set_flashdata('gagal', validation_errors());
            redirect('pinjam_alat/edit?id_pinjam=' . $this->input->post('id_pinjam'));
        }
    }

    function dipinjamkan($id)
    {
        $where = array('id_pinjam' => $id);
        $data = array(
            'status' => 2,
        );
        $this->load->Model('Model_pinjam');
        $this->Model_pinjam->update_data($where, $data, 'pinjam_alat');
        $this->session->set_flashdata('sukses', 'Alat berhasil dipinjamkan');
        redirect('pinjam_alat');
    }

    function tolak($id, $idalat)
    {
        //menambah kembali stok barang
        $where2 = array('idalat' => $idalat);
        $stokalat = $this->db->where('idalat', $idalat)->get('stok_alat')->row('stock');
        $qty = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('qty');
        $data2 = array(
            'stock' => (int) $stokalat + $qty,
        );
        $this->Model_stok->update_data_stok($where2, $data2, 'stok_alat');

        //hapus datanya
        $where = array('id_pinjam' => $id);
        $this->Model_pinjam->hapus_data($where, 'pinjam_alat');
        $this->session->set_flashdata('sukses', 'Peminjaman alat ditolak');
        redirect('pinjam_alat');
    }

    function selesai($id, $idalat)
    {
        //input data ke tabel riwayat
        $id = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('id_pinjam');
        $idalat = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('idalat');
        $peminjam = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('peminjam');
        $tglpinjam = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('tglpinjam');
        $tglselesai = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('tglselesai');
        $qty = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('qty');
        $kegiatan = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('kegiatan');
        $lokasi = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('lokasi');
        $keterangan = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('keterangan');

        $data = array(
            'idalat'    => $idalat,
            'peminjam'    => $peminjam,
            'tglpinjam'   => $tglpinjam,
            'tglselesai'  => $tglselesai,
            'qty'         => $qty,
            'kegiatan'    => $kegiatan,
            'lokasi'      => $lokasi,
            'keterangan'      => $keterangan,
            'status_riwayat'      => 3,
        );
        $this->Model_riwayat->input_data($data, 'riwayat_alat');

        //menambah kembali stok barang
        $where2 = array('idalat' => $idalat);
        $stokalat = $this->db->where('idalat', $idalat)->get('stok_alat')->row('stock');
        $qty = $this->db->where('id_pinjam', $id)->get('pinjam_alat')->row('qty');
        $data2 = array(
            'stock' => (int) $stokalat + $qty,
        );
        $this->Model_stok->update_data_stok($where2, $data2, 'stok_alat');

        //hapus datanya
        $where = array('id_pinjam' => $id);
        $this->Model_pinjam->hapus_data($where, 'pinjam_alat');
        $this->session->set_flashdata('sukses', 'Peminjaman alat sudah selesai');
        redirect('pinjam_alat');
    }

    public function pdf($id)
    {

        // Ambil Data
        $data['detail'] = $this->Model_pinjam->detail_data($id);
        $this->load->view('Pdf/v_buktipinjam', $data);

        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Bukti Peminjaman Alat';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'bukti_peminjaman_alat';

        // setting paper
        $paper = 'A4';

        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		// $html=$this->load->view('pdf/v_buktipinjam', $this->data, true);	   
        $html = $this->output->get_output(); 
        
        // run dompdf
        $this->pdf->generate($html, $file_pdf,$paper,$orientation);
    }


    // function hapus($id)
    // {
    //     $where = array('id_barang' => $id);
    //     $this->Model_stok->hapus_data($where, 'stok_alat');
    //     $this->session->set_flashdata('sukses', 'Data barang berhasil dihapus');
    //     redirect('stok_alat');
    // }
}
