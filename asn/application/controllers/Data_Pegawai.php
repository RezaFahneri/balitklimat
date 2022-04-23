<?php

class Data_Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Model_pegawai');
        $this->load->Model('Model_golongan');
        $this->load->Model('Model_status_pegawai');
        $this->load->Model('Model_pangkat');
        $this->load->Model('Model_jabatan');
        $this->load->Model('Model_divisi');
        $this->load->Model('Model_tugas');
        $this->load->Model('Model_detail_role');
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('logged_in') == false) {
            redirect('login');
        }
    }
    function index()
    {
        $data['data_pegawai'] = $this->Model_pegawai->getList();

        $data['title'] = 'ASN BALITKLIMAT | Data Pegawai';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }
    public function detail($nip)
    {
        $data['title'] = 'ASN BALITKLIMAT | Detail Pegawai';
        $detail = $this->Model_pegawai->detail_data($nip);
        $data['detail'] = $detail;
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_detail_pegawai', $data);
        $this->load->view('templates/footer');
    }

    function tambah()
    {
        $data['title'] = 'ASN BALITKLIMAT | Tambah Pegawai';
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_status_peg'] = $this->Model_status_pegawai->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();
        $data['id_jabatan'] = $this->Model_jabatan->getList();
        $data['id_divisi'] = $this->Model_divisi->getList();
        $data['id_tugas'] = $this->Model_tugas->getList();

        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_tambah_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }
    public function generateID()
    {
        $query = $this->db
            ->order_by('nip', 'DESC')
            ->limit(1)
            ->get('data_pegawai')
            ->row('nip');
        $lastNo = (int) substr($query, 3);
        $next = $lastNo + 1;
        $kd = 'HNR';
        return $kd . sprintf('%04s', $next);
    }
    function tambah_aksi()
    {
        $this->form_validation->set_rules(
            'nama_pegawai',
            'Nama Pegawai',
            'required|max_length[50]'
        );
        $nip = $this->input->post('nip');
        if (!empty($nip)) {
            $this->form_validation->set_rules('nip', 'NIP', 'exact_length[18]');
        } else {
            $nip = $this->generateID();
        }
        // $nip = $this->form_validation->set_rules('nip', 'NIP', 'required|exact_length[18]');
        // if (!empty($nip)) {
        //     $this->form_validation->set_rules('nip', 'NIP', 'exact_length[18]');
        // } else if(empty($nip)) {
        //     $nip = $this->generateID();
        // }
        $this->form_validation->set_rules('id_golongan', 'Golongan');
        $this->form_validation->set_rules(
            'id_status_peg',
            'Status Kepegawaian',
            'required'
        );
        $this->form_validation->set_rules('id_pangkat', 'Pangkat');
        $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('id_divisi', 'Divisi', 'required');
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|exact_length[16]'
        );
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[8]'
        );
        $this->form_validation->set_rules(
            'no_whatsapp',
            'Nomor Whatsapp',
            'required'
        );

        $this->form_validation->set_message(
            'required',
            '%s masih kosong, silahkan isi'
        );
        $this->form_validation->set_message(
            'min_length',
            '{field} minimal 8 karakter'
        );
        $this->form_validation->set_message(
            'max_length',
            '{field} maksimal 50 karakter'
        );
        $this->form_validation->set_message(
            'exact_length',
            '{field} harus 16 karakter'
        );
        $this->form_validation->set_message(
            'exact_length',
            '{field} harus 18 karakter'
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'ASN BALITKLIMAT | Tambah Pegawai';
            $data['id_golongan'] = $this->Model_golongan->getList();
            $data['id_status_peg'] = $this->Model_status_pegawai->getList();
            $data['id_pangkat'] = $this->Model_pangkat->getList();
            $data['id_jabatan'] = $this->Model_jabatan->getList();
            $data['id_divisi'] = $this->Model_divisi->getList();
            $data['id_tugas'] = $this->Model_tugas->getList();

            $this->load->view('templates/v_template', $data);
            $this->load->view('Data_Pegawai/v_tambah_pegawai', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama_pegawai = $this->input->post('nama_pegawai');
            $nip = $this->input->post('nip');
            if (!empty($nip)) {
                $nip = $nip;
            } else {
                $nip = $this->generateID();
            }
            $id_golongan = $this->input->post('id_golongan');
            $id_status_peg = $this->input->post('id_status_peg');
            $id_pangkat = $this->input->post('id_pangkat');
            $foto = $this->input->post('foto');
            $id_jabatan = $this->input->post('id_jabatan');
            $id_divisi = $this->input->post('id_divisi');
            $nik = $this->input->post('nik');
            $email = $this->input->post('email');
            // $password = md5($this->input->post('password'));
            $password = $this->input->post('password');
            $no_whatsapp =
                $this->input->post('62') . $this->input->post('no_whatsapp');

            $data = [
                'nama_pegawai' => $nama_pegawai,
                'nip' => $nip,
                'id_golongan' => $id_golongan,
                'id_status_peg' => $id_status_peg,
                'id_pangkat' => $id_pangkat,
                'id_jabatan' => $id_jabatan,
                'id_divisi' => $id_divisi,
                'foto' => $foto,
                'nik' => $nik,
                'email' => $email,
                'password' => $password,
                'no_whatsapp' => $no_whatsapp,
            ];

            $data2 = [
                'nip' => $nip,
                'nama_pegawai' => $nama_pegawai,
                'id_jabatan' => $id_jabatan,
                'status_perjalanan' => 0,
            ];
            $data3 = [
                'nama_pegawai' => $nama_pegawai,
                'nip' => $nip,
                'id_golongan' => $id_golongan,
                'id_status_peg' => $id_status_peg,
                'id_pangkat' => $id_pangkat,
                'id_jabatan' => $id_jabatan,
                'id_divisi' => $id_divisi,
                'foto' => $foto,
                'nik' => $nik,
                'email' => $email,
                'password' => $password,
                'no_whatsapp' => $no_whatsapp,
                'id_role' => 8,
                'role' => 'User',
            ];
            if ($this->Model_pegawai->EmailCheck($email) == true) {
                $this->Model_pegawai->input_data($data, 'data_pegawai');
                $this->Model_pegawai->input_data($data2, 'status_perjalanan');
                $this->Model_pegawai->input_data($data3, 'detail_role');
                $this->session->set_flashdata(
                    'sukses',
                    'Data pegawai berhasil ditambahkan'
                );
                redirect('data_pegawai');
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Email sudah digunakan, gunakan email lain'
                );
                redirect('data_pegawai/tambah');
            }
        }
    }
    function edit()
    {
        $nip = $this->input->get('nip');
        $data['primary_view'] = 'Data_Pegawai/v_update_pegawai';
        $data['id_golongan'] = $this->Model_golongan->getList();
        $data['id_status_peg'] = $this->Model_status_pegawai->getList();
        $data['id_pangkat'] = $this->Model_pangkat->getList();
        $data['id_jabatan'] = $this->Model_jabatan->getList();
        $data['id_divisi'] = $this->Model_divisi->getList();

        $data['update_pegawai'] = $this->Model_pegawai->getList2($nip);
        $data['title'] = 'Edit Data Pegawai | ASN';
        $this->load->view('templates/v_template', $data);
        $this->load->view('Data_Pegawai/v_update_pegawai', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $nip = $this->input->post('nip');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $id_golongan = $this->input->post('id_golongan');
        $id_status_peg = $this->input->post('id_status_peg');
        $id_jabatan = $this->input->post('id_jabatan');
        $id_divisi = $this->input->post('id_divisi');
        $id_pangkat = $this->input->post('id_pangkat');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        // $password = md5($this->input->post('password'));
        $password = $this->input->post('password');
        $no_whatsapp = $this->input->post('no_whatsapp');

        $data1 = [
            'nama_pegawai' => $nama_pegawai,
            'id_golongan' => $id_golongan,
            'id_status_peg' => $id_status_peg,
            'id_jabatan' => $id_jabatan,
            'id_divisi' => $id_divisi,
            'id_pangkat' => $id_pangkat,
            'nik' => $nik,
            'email' => $email,
            'password' => $password,
            'no_whatsapp' =>
                $this->input->post('62') . $this->input->post('no_whatsapp'),
        ];
        $data2 = [
            'nip' => $nip,
            'nama_pegawai' => $nama_pegawai,
            'id_jabatan' => $id_jabatan,
        ];
        $data3 = [
            'nama_pegawai' => $nama_pegawai,
            'id_golongan' => $id_golongan,
            'id_status_peg' => $id_status_peg,
            'id_jabatan' => $id_jabatan,
            'id_divisi' => $id_divisi,
            'id_pangkat' => $id_pangkat,
            'nik' => $nik,
            'email' => $email,
            'password' => $password,
            'no_whatsapp' =>
                $this->input->post('62') . $this->input->post('no_whatsapp'),
        ];
        $where = [
            'nip' => $nip,
        ];
        $this->load->Model('Model_pegawai');
        $this->Model_pegawai->update_data($where, $data1, 'data_pegawai');
        $this->Model_pegawai->update_data2($where, $data2, 'status_perjalanan');
        $this->Model_pegawai->update_data3($where, $data3, 'detail_role');
        $this->session->set_flashdata(
            'sukses',
            'Data Pegawai berhasil diperbarui'
        );
        redirect('data_pegawai');
    }

    function hapus($nip)
    {
        $where = ['nip' => $nip];

        // $this->Model_detail_role->hapus_data3($where, 'detail_role');

        if ($this->Model_pegawai->hapus_data($nip) == false):
            echo $this->session->set_flashdata(
                'error',
                'Data pegawai digunakan pada tabel lain'
            );
            redirect('data_pegawai');
        endif;
        if ($this->Model_pegawai->hapus_data($nip) == true):
            if ($this->Model_detail_role->hapus_data2($nip)) {
                if ($this->Model_detail_role->hapus_data3($nip)) {
                } else {
                    echo $this->session->set_flashdata(
                        'error',
                        'Data pegawai pada status perjalanan gagal dihapus'
                    );
                }
            } else {
                echo $this->session->set_flashdata(
                    'error',
                    'Data pegawai pada detail role gagal dihapus'
                );
            }
            echo $this->session->set_flashdata(
                'sukses',
                'Data pegawai berhasil dihapus'
            );
            redirect('data_pegawai');
        endif;

        // $where = array('nip' => $nip);
        // $table = array('status_perjalanan', 'data_pegawai');
        // $this->Model_pegawai->hapus_data($where,$table);
        // $error = $this->db->error();
        // if ($error ['code'] != 0){
        //     echo $this->session->set_flashdata('error','Data pegawai digunakan pada tabel lain');
        // }
        // else{
        //     echo $this->session->set_flashdata('sukses','Data pegawai berhasil dihapus');
        // }
        // echo "<script>window.location='".site_url('data_pegawai')."';</script>";
        // redirect('data_pegawai');
    }
}
