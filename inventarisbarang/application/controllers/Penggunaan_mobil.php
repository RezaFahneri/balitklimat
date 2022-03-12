<?php

class Penggunaan_mobil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_penggunaan');
        $this->load->Model('Model_kendaraan');
        $this->load->Model('Model_pegawai');
        $this->load->helper('url', 'array', 'fungsi');
        $this->load->library('form_validation', 'upload');
        $this->load->library('session');
        if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}
    }

    function index()
    {
        $data['data_penggunaan'] = $this->Model_penggunaan->getList();
        $data['title'] = "Penggunaan Mobil | Balitklimat";
        $this->load->view('template/template', $data);
        $this->load->view('kendaraan/v_penggunaan_mobil', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah()
    {
        $data['title'] = 'Tambah Penggunaan Mobil | Balitklimat';
        $data['pegawai'] = $this->Model_pegawai->tampil_datapenggunaan();
        $data['kendaraan'] = $this->Model_kendaraan->tampil_datapenggunaan();
        //statistik Pengemudi
        $data['sopir1_dalam'] = $this->Model_penggunaan->count_sopir1_dalam();
        $data['sopir1_luar'] = $this->Model_penggunaan->count_sopir1_luar();
        $data['sopir1_dalam_jan'] = $this->Model_penggunaan->count_sopir1_dalam_jan();
        $data['sopir1_luar_jan'] = $this->Model_penggunaan->count_sopir1_luar_jan();
        $data['sopir1_dalam_feb'] = $this->Model_penggunaan->count_sopir1_dalam_feb();
        $data['sopir1_luar_feb'] = $this->Model_penggunaan->count_sopir1_luar_feb();
        $data['sopir1_dalam_mar'] = $this->Model_penggunaan->count_sopir1_dalam_mar();
        $data['sopir1_luar_mar'] = $this->Model_penggunaan->count_sopir1_luar_mar();
        $data['sopir1_dalam_apr'] = $this->Model_penggunaan->count_sopir1_dalam_apr();
        $data['sopir1_luar_apr'] = $this->Model_penggunaan->count_sopir1_luar_apr();
        $data['sopir1_dalam_mei'] = $this->Model_penggunaan->count_sopir1_dalam_mei();
        $data['sopir1_luar_mei'] = $this->Model_penggunaan->count_sopir1_luar_mei();
        $data['sopir1_dalam_jun'] = $this->Model_penggunaan->count_sopir1_dalam_jun();
        $data['sopir1_luar_jun'] = $this->Model_penggunaan->count_sopir1_luar_jun();
        $data['sopir1_dalam_jul'] = $this->Model_penggunaan->count_sopir1_dalam_jul();
        $data['sopir1_luar_jul'] = $this->Model_penggunaan->count_sopir1_luar_jul();
        $data['sopir1_dalam_ags'] = $this->Model_penggunaan->count_sopir1_dalam_ags();
        $data['sopir1_luar_ags'] = $this->Model_penggunaan->count_sopir1_luar_ags();
        $data['sopir1_dalam_sep'] = $this->Model_penggunaan->count_sopir1_dalam_sep();
        $data['sopir1_luar_sep'] = $this->Model_penggunaan->count_sopir1_luar_sep();
        $data['sopir1_dalam_okt'] = $this->Model_penggunaan->count_sopir1_dalam_okt();
        $data['sopir1_luar_okt'] = $this->Model_penggunaan->count_sopir1_luar_okt();
        $data['sopir1_dalam_nov'] = $this->Model_penggunaan->count_sopir1_dalam_nov();
        $data['sopir1_luar_nov'] = $this->Model_penggunaan->count_sopir1_luar_nov();
        $data['sopir1_dalam_des'] = $this->Model_penggunaan->count_sopir1_dalam_des();
        $data['sopir1_luar_des'] = $this->Model_penggunaan->count_sopir1_luar_des();

        $data['sopir2_dalam'] = $this->Model_penggunaan->count_sopir2_dalam();
        $data['sopir2_luar'] = $this->Model_penggunaan->count_sopir2_luar();
        $data['sopir2_dalam_jan'] = $this->Model_penggunaan->count_sopir2_dalam_jan();
        $data['sopir2_luar_jan'] = $this->Model_penggunaan->count_sopir2_luar_jan();
        $data['sopir2_dalam_feb'] = $this->Model_penggunaan->count_sopir2_dalam_feb();
        $data['sopir2_luar_feb'] = $this->Model_penggunaan->count_sopir2_luar_feb();
        $data['sopir2_dalam_mar'] = $this->Model_penggunaan->count_sopir2_dalam_mar();
        $data['sopir2_luar_mar'] = $this->Model_penggunaan->count_sopir2_luar_mar();
        $data['sopir2_dalam_apr'] = $this->Model_penggunaan->count_sopir2_dalam_apr();
        $data['sopir2_luar_apr'] = $this->Model_penggunaan->count_sopir2_luar_apr();
        $data['sopir2_dalam_mei'] = $this->Model_penggunaan->count_sopir2_dalam_mei();
        $data['sopir2_luar_mei'] = $this->Model_penggunaan->count_sopir2_luar_mei();
        $data['sopir2_dalam_jun'] = $this->Model_penggunaan->count_sopir2_dalam_jun();
        $data['sopir2_luar_jun'] = $this->Model_penggunaan->count_sopir2_luar_jun();
        $data['sopir2_dalam_jul'] = $this->Model_penggunaan->count_sopir2_dalam_jul();
        $data['sopir2_luar_jul'] = $this->Model_penggunaan->count_sopir2_luar_jul();
        $data['sopir2_dalam_ags'] = $this->Model_penggunaan->count_sopir2_dalam_ags();
        $data['sopir2_luar_ags'] = $this->Model_penggunaan->count_sopir2_luar_ags();
        $data['sopir2_dalam_sep'] = $this->Model_penggunaan->count_sopir2_dalam_sep();
        $data['sopir2_luar_sep'] = $this->Model_penggunaan->count_sopir2_luar_sep();
        $data['sopir2_dalam_okt'] = $this->Model_penggunaan->count_sopir2_dalam_okt();
        $data['sopir2_luar_okt'] = $this->Model_penggunaan->count_sopir2_luar_okt();
        $data['sopir2_dalam_nov'] = $this->Model_penggunaan->count_sopir2_dalam_nov();
        $data['sopir2_luar_nov'] = $this->Model_penggunaan->count_sopir2_luar_nov();
        $data['sopir2_dalam_des'] = $this->Model_penggunaan->count_sopir2_dalam_des();
        $data['sopir2_luar_des'] = $this->Model_penggunaan->count_sopir2_luar_des();

        $this->load->view('template/template', $data);
        $this->load->view('kendaraan/v_tambah_penggunaan', $data);
        $this->load->view('template/footer', $data);
    }

    function tambah_aksi()
    {
        if ($this->input->post('submit')); {
            $this->form_validation->set_rules('nip', 'nip', 'required');
            $this->form_validation->set_rules('id_kendaraan', 'id_kendaraan', 'required');
            $this->form_validation->set_rules('tgl_pemakaian', 'tgl_pemakaian', 'required');
            $this->form_validation->set_rules('tgl_kembali', 'tgl_kembali', 'required');
            $this->form_validation->set_rules('lama_pemakaian', 'lama_pemakaian');
            $this->form_validation->set_rules('status_penggunaan', 'status_penggunaan', 'required');

            if ($this->form_validation->run() == true) {
                $nip     = $this->input->post('nip');
                $id_kendaraan     = $this->input->post('id_kendaraan');
                $tgl_pemakaian    = $this->input->post('tgl_pemakaian');
                $tgl_kembali   = $this->input->post('tgl_kembali');
                $lama_pemakaian   = $this->input->post('lama_pemakaian');
                $perjalanan   = $this->input->post('perjalanan');
                $status_penggunaan         = $this->input->post('status_penggunaan');

                $data = array(
                    'nip'    => $nip,
                    'id_kendaraan'    => $id_kendaraan,
                    'tgl_pemakaian'   => $tgl_pemakaian,
                    'tgl_kembali'   => $tgl_kembali,
                    'lama_pemakaian'  => $lama_pemakaian,
                    'perjalanan'  => $perjalanan,
                    'status_penggunaan'      => $status_penggunaan,
                );
                //Mengubah status data kendaraan
                $statuskendaraan = $this->db->where('id_kendaraan', $id_kendaraan)->get('data_kendaraan')->row('status');
                $updatestatuskendaraan = (int) $statuskendaraan + 1;
                $this->db->set('status', $updatestatuskendaraan)->where('id_kendaraan', $id_kendaraan)->update('data_kendaraan');

                //Mengubah status perjalanan
                $statusperjalanan = $this->db->where('nip', $nip)->get('status_perjalanan')->row('status_perjalanan');
                $updatestatusperjalanan = (int) $statusperjalanan + 1;
                $this->db->set('status_perjalanan', $updatestatusperjalanan)->where('nip', $nip)->update('status_perjalanan');

                $this->Model_penggunaan->input_data($data, 'penggunaan_mobil');
                $this->session->set_flashdata('sukses', 'Berhasil menambahkan data penggunaan mobil');
                redirect('penggunaan_mobil');
            } else {
                $this->session->set_flashdata('sukses', validation_errors());
                redirect('penggunaan_mobil/tambah');
            }
        }
    }

    function selesai($id,$id_kendaraan,$nip)
    {
        $where = array('id_penggunaan' => $id);
        $data = array(
            'status_penggunaan' => 2,
        );

        $where2 = array('id_kendaraan' => $id_kendaraan);
        $data2 = array(
            'status' => 1,
        );

        $where3 = array('nip' => $nip);
        $data3 = array(
            'status_perjalanan' => 0,
        );

        $this->Model_penggunaan->update_data($where, $data, 'penggunaan_mobil');
        $this->Model_kendaraan->update_data($where2, $data2, 'data_kendaraan');
        $this->Model_pegawai->update_data($where3, $data3, 'status_perjalanan');
        $this->session->set_flashdata('sukses', 'Penggunaan mobil sudah selesai');
        redirect('penggunaan_mobil');
    }

    // function selesai()
    // {

    // }
}
