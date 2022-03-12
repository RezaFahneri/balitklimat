<?php

class Anggota_perjadin extends CI_Controller
{
    public $result = [
        'status'  => false,
        'data'    => []
    ];
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_kegiatan');
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_jenis_keg');
        $this->load->Model('Model_perjalanan_dinas');
        $this->load->Model('Model_anggota_perjadin');
        $this->load->Model('Model_kota');
        $this->load->Model('Model_mak');
        $this->load->helper('url');
    }
    function index()
    {
        $data['data_anggota_perjadin'] = $this->Model_anggota_perjadin->getList();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Anggota Perjalanan Dinas";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Anggota_Perjadin/v_anggota_perjadin', $data);
        $this->load->view('templates/footer', $data);
    }

    function anggota()
    {
        $data['data_anggota_perjadin'] = $this->Model_anggota_perjadin->getListAnggota();
        $data['title'] = "PERJADIN BALITKLIMAT | Data Anggota Perjalanan Dinas";
        $this->load->view('templates/v_template', $data);
        $this->load->view('Anggota_Perjadin/v_anggota_perjadin2', $data);
        $this->load->view('templates/footer', $data);
    }

    function tambah()
    {
        $data['title'] = 'PERJADIN BALITKLIMAT | Tambah Data Perjalanan Dinas';
        $id_perjalanan_dinas = $this->input->get('id_perjalanan_dinas');
        $data['data_perjalanan_dinas'] = $this->Model_perjalanan_dinas->getList2($id_perjalanan_dinas);
        $data['nip'] = $this->Model_pegawai->getList();

        $this->load->view('templates/v_template', $data);
        $this->load->view('Anggota_Perjadin/v_tambah_anggota_perjadin', $data);
        $this->load->view('templates/footer', $data);
    }
    function tambah_aksi()
    {
        $no_sppd = $this->input->post('kode_sppd') . $this->input->post('no_sppd');
        $id_perjalanan_dinas = $this->input->post('id_perjalanan_dinas');
        $kode_mak = $this->input->post('kode_mak');
        $kode_kegiatan = $this->input->post('kode_kegiatan');
        $uang_harian = $this->input->post('uang_harian');
        $uang_transportasi = $this->input->post('uang_transportasi');

        $hari_hotel_1 = $this->input->post('hari1');
        $hari_hotel_2 = $this->input->post('hari2');
        $hari_hotel_3 = $this->input->post('hari3');
        $biaya_hotel1 = $this->input->post('biaya1');
        $biaya_hotel2 = $this->input->post('biaya2');
        $biaya_hotel3 = $this->input->post('biaya3');

        $biaya_penginapan = ((int)$hari_hotel_1 * (int)$biaya_hotel1) + ((int)$hari_hotel_2 * (int)$biaya_hotel2) + ((int)$hari_hotel_3 * (int)$biaya_hotel3);
        $total_pendapatan = (int)$uang_harian + (int)$uang_transportasi + (int)$biaya_penginapan;
        $data = array(
            'id_perjalanan_dinas' => $id_perjalanan_dinas,
            'nip_anggota_perjadin' => $this->input->post('nip_anggota_perjadin'),
            'no_sppd' => $this->generateID(),
            'no_sppd2' => $no_sppd,
            'uang_harian' => $uang_harian,
            'uang_transportasi' => $uang_transportasi,
            'hari1' => $hari_hotel_1,
            'hari2' => $hari_hotel_2,
            'hari3' => $hari_hotel_3,
            'biaya1' => $biaya_hotel1,
            'biaya2' => $biaya_hotel2,
            'biaya3' => $biaya_hotel3,
            'uang_penginapan' => $biaya_penginapan,
            'total_pendapatan' => $total_pendapatan,
            'status_perjalanan_dinas' => $this->input->post('status_perjalanan_dinas')
        );

        $anggaran = $this->db->where('kode_mak', $kode_mak)->get('data_mak')->row('banyak_anggaran');
        $total_pengeluaran = $this->db->where('kode_kegiatan', $kode_kegiatan)->get('data_kegiatan')->row('biaya_pengeluaran');
        if ($anggaran >= $total_pendapatan) {
            if ($this->Model_anggota_perjadin->anggotaCheck($this->input->post('nip_anggota_perjadin')) == true) {
                $this->Model_anggota_perjadin->input_data($data, 'data_anggota_perjadin');
                //Mengurangi biaya anggaran data mak
                $mak_berkurang = $anggaran - $total_pendapatan;
                $this->db->set('banyak_anggaran', $mak_berkurang)->where('kode_mak', $kode_mak)->update('data_mak');
                $total_pengeluaran_bertambah = $total_pengeluaran + $total_pendapatan;
                $this->db->set('biaya_pengeluaran', $total_pengeluaran_bertambah)->where('kode_kegiatan', $kode_kegiatan)->update('data_kegiatan');
                $this->session->set_flashdata('sukses', 'Data anggota perjalanan dinas berhasil ditambahkan');
                redirect('perjalanan_dinas');
            } else {
                $this->session->set_flashdata('error', 'Pegawai ini sedang dalam proses perjalanan dinas');
                redirect('anggota_perjadin/tambah?id_perjalanan_dinas=' . $id_perjalanan_dinas);
            }
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan perjalanan dinas, anggaran biaya tidak mencukupi');
            redirect('anggota_perjadin/tambah?id_perjalanan_dinas=' . $id_perjalanan_dinas);
        }

        // $this->Model_anggota_perjadin->input_data($data, 'data_anggota_perjadin');
        // $this->session->set_flashdata('sukses','Data anggota perjalanan dinas berhasil ditambahkan');
        // redirect('perjalanan_dinas');
    }
    function edit()
    {
        $id_anggota_perjadin = $this->input->get('id_anggota_perjadin');

        $data['update_anggota_perjadin'] = $this->Model_anggota_perjadin->getList2($id_anggota_perjadin);
        $data['nip'] = $this->Model_pegawai->getList();

        $data['title'] = 'PERJADIN BALITKLIMAT | Edit Data Anggota Perjalanan Dinas';

        $this->load->view('templates/v_template', $data);
        $this->load->view('Anggota_Perjadin/v_edit_anggota_perjadin', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $no_sppd = $this->input->post('kode_sppd') . $this->input->post('no_sppd');
        $id_anggota_perjadin = $this->input->post('id_anggota_perjadin');
        $id_perjalanan_dinas = $this->input->post('id_perjalanan_dinas');
        $kode_mak = $this->input->post('kode_mak');
        $kode_kegiatan = $this->input->post('kode_kegiatan');

        $uang_harian = $this->input->post('uang_harian');
        $uang_transportasi = $this->input->post('uang_transportasi');

        $hari_hotel_1 = $this->input->post('hari1');
        $hari_hotel_2 = $this->input->post('hari2');
        $hari_hotel_3 = $this->input->post('hari3');
        $biaya_hotel1 = $this->input->post('biaya1');
        $biaya_hotel2 = $this->input->post('biaya2');
        $biaya_hotel3 = $this->input->post('biaya3');
        $biaya_penginapan = ((int)$hari_hotel_1 * (int)$biaya_hotel1) + ((int)$hari_hotel_2 * (int)$biaya_hotel2) + ((int)$hari_hotel_3 * (int)$biaya_hotel3);

        $total_pendapatan_lama = $this->input->post('total_pendapatan_lama');
        $total_pendapatan = (int)$uang_harian + (int)$uang_transportasi + (int)$biaya_penginapan;
        $hasil_pengurangan_total_pendapatan = abs((int)$total_pendapatan_lama - (int)$total_pendapatan);

        $data = array(
            'id_perjalanan_dinas' => $id_perjalanan_dinas,
            'no_sppd2' => $no_sppd,
            'nip_anggota_perjadin' => $this->input->post('nip_anggota_perjadin'),
            'uang_harian' => $this->input->post('uang_harian'),
            'uang_transportasi' => $this->input->post('uang_transportasi'),
            'hari1' => $hari_hotel_1,
            'hari2' => $hari_hotel_2,
            'hari3' => $hari_hotel_3,
            'biaya1' => $biaya_hotel1,
            'biaya2' => $biaya_hotel2,
            'biaya3' => $biaya_hotel3,
            'uang_penginapan' => $biaya_penginapan,
            'total_pendapatan' => $total_pendapatan,
            'status_perjalanan_dinas' => $this->input->post('status_perjalanan_dinas')
        );
        $where = array(
            'id_anggota_perjadin' => $id_anggota_perjadin
        );
        $anggaran = $this->db->where('kode_mak', $kode_mak)->get('data_mak')->row('banyak_anggaran');
        $total_pengeluaran = $this->db->where('kode_kegiatan', $kode_kegiatan)->get('data_kegiatan')->row('biaya_pengeluaran');
        if ($total_pendapatan_lama < $total_pendapatan) {
            if ($anggaran + $total_pendapatan_lama >= $total_pendapatan) {
                $this->Model_anggota_perjadin->update_data($where, $data, 'data_anggota_perjadin');

                $mak_update = $anggaran - $hasil_pengurangan_total_pendapatan;
                $this->db->set('banyak_anggaran', $mak_update)->where('kode_mak', $kode_mak)->update('data_mak');

                $pengeluaran_update = $total_pengeluaran + $hasil_pengurangan_total_pendapatan;
                $this->db->set('biaya_pengeluaran', $pengeluaran_update)->where('kode_kegiatan', $kode_kegiatan)->update('data_kegiatan');
                $this->session->set_flashdata('sukses', 'Data anggota perjalanan dinas berhasil diperbarui');
                redirect('perjalanan_dinas');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui perjalanan dinas, anggaran biaya tidak mencukupi');
                redirect('anggota_perjadin/edit?id_anggota_perjadin=' . $id_anggota_perjadin);
            }
        } else if ($total_pendapatan_lama > $total_pendapatan) {
            $this->Model_anggota_perjadin->update_data($where, $data, 'data_anggota_perjadin');
            $mak_update = $anggaran + $hasil_pengurangan_total_pendapatan;

            $pengeluaran_update = $total_pengeluaran - $hasil_pengurangan_total_pendapatan;
            $this->db->set('biaya_pengeluaran', $pengeluaran_update)->where('kode_kegiatan', $kode_kegiatan)->update('data_kegiatan');
            $this->db->set('banyak_anggaran', $mak_update)->where('kode_mak', $kode_mak)->update('data_mak');
            $this->session->set_flashdata('sukses', 'Data anggota perjalanan dinas berhasil diperbarui');
            redirect('perjalanan_dinas');
        } else {
            $this->Model_anggota_perjadin->update_data($where, $data, 'data_anggota_perjadin');
            $this->session->set_flashdata('sukses', 'Data anggota perjalanan dinas berhasil diperbarui');
            redirect('perjalanan_dinas');
        }
        // $anggaran = $this->db->where('kode_mak', $kode_mak)->get('data_mak')->row('banyak_anggaran');
        // $this->load->Model('Model_anggota_perjadin');
        // $this->Model_anggota_perjadin->update_data($where, $data, 'data_anggota_perjadin');
        // $this->session->set_flashdata('sukses','Data anggota perjalanan dinas berhasil diperbarui');
        // redirect('perjalanan_dinas');
    }
    public function generateID()
    {
        $query = $this->db->order_by('no_sppd', 'DESC')->limit(1)->get('data_anggota_perjadin')->row('no_sppd');
        $lastNo = (int) substr($query, 0);
        $next = $lastNo + 1;
        return ($next);
    }
    function hapus($id_anggota_perjadin, $kode_mak, $kode_kegiatan)
    {
        $anggaran = $this->db->where('kode_mak', $kode_mak)->get('data_mak')->row('banyak_anggaran');
        $total_pengeluaran = $this->db->where('kode_kegiatan', $kode_kegiatan)->get('data_kegiatan')->row('biaya_pengeluaran');
        $total_pendapatan = $this->db->where('id_anggota_perjadin', $id_anggota_perjadin)->get('data_anggota_perjadin')->row('total_pendapatan');
        //Menambah biaya anggaran mak
        $data2 = array(
            'banyak_anggaran' => (int) $anggaran + (int)$total_pendapatan,
        );
        $where2 = array('kode_mak' => $kode_mak);
        $this->Model_mak->update_data($where2, $data2, 'data_mak');
        //Mengurangi biaya pengeluaran data kegiatan
        $where3 = array('kode_kegiatan' => $kode_kegiatan);
        $data3 = array(
            'biaya_pengeluaran' => (int) $total_pengeluaran - (int)$total_pendapatan,
        );
        $this->Model_kegiatan->update_data($where3, $data3, 'data_kegiatan');
        // Menghapus data dari anggota perjadin
        $this->Model_anggota_perjadin->hapus_data($id_anggota_perjadin);
        $this->session->set_flashdata('sukses', 'Data anggota perjalanan dinas berhasil dihapus dan anggaran dikembalikan');
        redirect('perjalanan_dinas');
    }
}
// tes perubahan 3