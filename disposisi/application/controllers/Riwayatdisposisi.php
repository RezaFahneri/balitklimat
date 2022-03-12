<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayatdisposisi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        cekmasuk();
        $this->load->Model('Riwayatdisposisi_m');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->join3inner();
        $data['title'] = "Riwayat Disposisi Surat | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('RiwayatDisposisi/v_riwayatdisposisi',$data);
        $this->load->view('template/footer',$data);
    }
    
    public function tambah($id_suratmasuk)
	{
        $data['data_pegawai'] = $this->Riwayatdisposisi_m->get('data_pegawai');
        $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->get('riwayat_disposisi');
        $data['sifatsurat'] = $this->Riwayatdisposisi_m->get('sifat_surat');
        $data['suratmasuk'] = $this->Riwayatdisposisi_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->get('riwayat_disposisi');
        $ket1 = 'sifat_surat.id_sifatsurat = surat_masuk.sifatsurat_id';
        $ket2 = 'surat_masuk.id_suratmasuk';
        $surat = $this->Riwayatdisposisi_m->join2('surat_masuk', 'sifat_surat', $ket1, $ket2, $id_suratmasuk);
        
        $this->form_validation->set_rules('kepada', 'Diteruskan Kepada', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        
        $data['title'] = 'Tambah Disposisi Surat | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('RiwayatDisposisi/v_tambahdisposisi', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah_aksi()
    {
        $id_riwayat = $this->input->post('id_riwayat');
        $ket = ['id_riwayat' => $id_riwayat];
        $id_suratmasuk = $this->input->post('id');
        $ket2 = ['id_suratmasuk' => $id_suratmasuk];
        $data['user2'] = $this->Riwayatdisposisi_m->getuser();
        $nip = $data['user2']['nama_pegawai'];
       
            $data = [
                'user'=> $nip,
                'suratmasuk_id'=> $this->input->post('id'),
                'isi' =>  $this->input->post('isi'),
                'catatan' => $this->input->post('catatan'),
                'nip' => $this->input->post('nip'),
                // 'sifatsurat_id' => $this->input->post('sifatsurat_id'),
                // 'kode' => $this->input->post('kode'),
                // 'tanggal_surat' => $this->input->post('tanggal_surat'),
                // 'tanggal_input' => $this->input->post('tanggal_input'),
                // 'no_surat' => $this->input->post('no_surat'),
                // 'no_urut' => $this->input->post('no_urut'),
                // 'asal_surat' => $this->input->post('asal_surat'),
                // 'dokumen' => $dokumen,
                // 'perihal' => $this->input->post('perihal')
            ];
            $data2=[
                'status' => $this->input->post('nip'),
            ];
            $this->Riwayatdisposisi_m->input_data($data, 'riwayat_disposisi');
            $this->Riwayatdisposisi_m->update_data($ket2, $data2, 'surat_masuk');
            $this->session->set_flashdata('sukses', 'Disposisi Berhasil Ditambahkan');
            redirect('riwayatdisposisi');
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('no_surat', 'No Surat', 'required');
        $this->form_validation->set_rules('nip', 'Diteruskan Kepada', 'required');
        $this->form_validation->set_rules('isi', 'Isi Disposisi', 'required');
        $this->form_validation->set_rules('catatan', 'Catatan');
    }

    public function edit($id_riwayat)
    {
        $this->_validasi();
        $data['detail'] = $this->Riwayatdisposisi_m->getDetail($id_riwayat);
        $data['data_pegawai'] = $this->Riwayatdisposisi_m->get('data_pegawai');
        $ket = 'riwayat_disposisi.id_riwayat';
        $detailsurat = $this->Riwayatdisposisi_m->join2innerdetail($ket, $id_riwayat);
        $data['riwayat_disposisi'] = $detailsurat;
        $data['title'] = 'Edit Disposisi | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('RiwayatDisposisi/v_editdisposisi', $data);
        $this->load->view('template/footer', $data);
    }

    public function simpan()
    {
        $id_riwayat = $this->input->post('id');
        $ket = ['id_riwayat' => $id_riwayat];
        $detail = $this->Riwayatdisposisi_m->detailupdate('riwayat_disposisi', $ket);
        $data = [
                'suratmasuk_id'=> $detail->suratmasuk_id,
                'isi' =>  $this->input->post('isi'),
                'catatan' => $this->input->post('catatan'),
                'nip' => $this->input->post('nip'),
        ];
        $this->Riwayatdisposisi_m->update('riwayat_disposisi', $data, $ket);
        $this->session->set_flashdata('sukses', 'Disposisi Berhasil Diubah');
        redirect('riwayatdisposisi');
    }

    public function detail($id_suratmasuk)
    {
        $detail = $this->Riwayatdisposisi_m->detail_data($id_suratmasuk);
        $data['detail'] = $detail;
        $data['title'] = 'Detail Disposisi | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('Riwayatdisposisi/v_detaildisposisi', $data);
        $this->load->view('template/footer', $data);
    }

    public function hapus($id_riwayat)
	{
		$where = array('id_riwayat' => $id_riwayat);
		$this->Riwayatdisposisi_m->hapus_data($where, 'riwayat_disposisi');
        $this->session->set_flashdata('sukses', 'Disposisi Berhasil Dihapus');
		redirect('riwayatdisposisi');
	}
}