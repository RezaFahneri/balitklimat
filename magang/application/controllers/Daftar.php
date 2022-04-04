<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			$jenis = $this->session->userdata('jenis');
			if ($jenis == 'peserta') {
				redirect('peserta/laporan');
			} elseif ($jenis == 'pegawai') {
				redirect('pegawai/penugasan');
			} elseif ($jenis == 'adminmagang') {
				redirect('admin/penugasan');
			}
		}
		$keta = 'data_divisi.id_divisi = data_pegawai.id_divisi';
		$pegawai = $this->Model_daftar->join2where('data_pegawai', 'data_divisi', $keta, 'inner', 'nama_pegawai', 'ASC')->result();
		$ket1 = 'laporan_akhir.id_pm = peserta_magang.id_pm';
		$ket2 = 'data_pegawai.nip = peserta_magang.pembimbing_balai';
		$getdetail = $this->Model_daftar->join3('peserta_magang', 'laporan_akhir', 'data_pegawai', $ket1, $ket2, 'inner', 'tgl_up_lapak', 'ASC')->result();
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		//$this->form_validation->set_rules('jk', 'Jenis_Kelamin', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[peserta_magang.email_pm]');
		$this->form_validation->set_rules('nowa', 'Nomor Whatsapp', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis Magang', 'required');
		$this->form_validation->set_rules('asalinstansi', 'Asal Instansi/Universitas/Sekolah', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		// $this->form_validation->set_rules('pi', 'Pembimbing Instansi/Universitas/Sekolah', 'required');
		// $this->form_validation->set_rules('nowapi', 'Nomor Whatsapp Pembimbing', 'required');
		$this->form_validation->set_rules('tglmli', 'Tanggal Mulai', 'required');
		$this->form_validation->set_rules('tglsls', 'Tanggal Selesai', 'required');
		$this->form_validation->set_rules('pb', 'Pembimbing Balai', 'required');
		$this->form_validation->set_rules('ks1', 'Kata Sandi', 'required|trim|min_length[8]|matches[ks2]', [
			'matches' => 'Kata sandi tidak sama',
			'min_length' => 'Kata sandi terlalu pendek'
		]);
		$this->form_validation->set_rules('ks2', 'Kata Sandi', 'required|trim|matches[ks1]');

		if ($this->form_validation->run() == false) { //kl form validasi gagal
			$data['title'] = "Magang Balitklimat";
			$data['pegawai'] = $pegawai;
			$data['detail'] = $getdetail;
			$this->load->view('templates/header', $data);
			$this->load->view('v_daftar');
		} else {
			//bikin buat pengajuan
			$pengajuan = $_FILES['pengajuan']['name'];
			$penerimaan = $_FILES['penerimaan']['name'];
			if ($pengajuan) {
				$config['upload_path'] = './assets/dokumen/surat';
				$config['allowed_types'] = 'pdf|doc|docx';
				$config['max_size']     = '3000';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('pengajuan')) {
					$s_pengajuan_pm = $this->upload->data('file_name');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" > File Gagal Diunggah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
					redirect('daftar');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Tidak ada file atau file tidak memenuhi kebutuhan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
				redirect('daftar');
			}
			//bikin buat penerimaan
			if ($penerimaan) {
				$config['upload_path'] = './assets/dokumen/surat';
				$config['allowed_types'] = 'pdf|doc';
				$config['max_size']     = '3000';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('penerimaan')) {
					$s_penerimaan_pm = $this->upload->data('file_name');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert" > File Gagal Diunggah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button> </div>');
					redirect('daftar');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Tidak ada file atau file tidak memenuhi kebutuhan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
				redirect('daftar');
			}
			$email = $this->input->post('email');
			$id_pm = $this->Model_daftar->idpm();
			$data = [
				'id_pm' => $id_pm,
				'nama_pm' => htmlspecialchars($this->input->post('nama')),
				// 'jk_pm' => $this->input->post('jk'),
				'email_pm' => htmlspecialchars($this->input->post('email')),
				'no_wa_pm' => htmlspecialchars($this->input->post('nowa')),
				'jns_magang' => $this->input->post('jenis'),
				'asal_instansi_pm' => htmlspecialchars($this->input->post('asalinstansi')),
				'jurusan_pm' => htmlspecialchars($this->input->post('jurusan')),
				'pi_pm' => htmlspecialchars($this->input->post('pi')),
				'no_wa_pi_pm' => htmlspecialchars($this->input->post('nowapi')),
				'tgl_mli_pm' => $this->input->post('tglmli'),
				'tgl_sls_pm' => $this->input->post('tglsls'),
				's_pengajuan_pm' => $s_pengajuan_pm,
				's_penerimaan_pm' => $s_penerimaan_pm,
				'pembimbing_balai' => $this->input->post('pb'),
				'kata_sandi_pm' => password_hash($this->input->post('ks1'), PASSWORD_DEFAULT),
				'status_pm' => 'none'
			];
			//var_dump($data);
			$this->Model_daftar->insertdata($data, 'peserta_magang');
			//$this->db->insert('peserta_magang', $data);
			$token = base64_encode(random_bytes(32));
			$data = [
				'token' => $token,
				'waktu' => time(),
				'id_pm' => $id_pm
			];
			$this->Model_masuk->insert_data($data, 'magang_token');
			$this->load->library('phpmailer_lib');
			$mail = $this->phpmailer_lib->load();
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = 'magang.balitklimat@gmail.com';
			$mail->Password   = 'Asdfghjkl;1234';
			$mail->Port       = 587;
			$mail->setFrom('magang.balitklimat@gmail.com', 'MAGANG BALAI PENELITIAN AGAROKLIMAT DAN HIDROLOGI');
			$mail->addAddress($email, $getdetail['nama_pm']);
			$mail->addReplyTo('magang.balitklimat@gmail.com', 'MAGANG BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI');
			$mail->isHTML(true);
			$mail->Subject = 'AKTIVASI AKUN';
			$mail->Body    = 'Aktivasi akun anda melalui tautan berikut <a href="' . base_url() . 'daftar/aktif?email=' . $email . '&token=' . urlencode($token) . '">Aktifkan</a> ';
			if ($mail->send()) {
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data anda sudah tersimpan! Silakan aktivasi pada Email ' . $email . '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
				redirect('masuk');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal dikirim! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </div>');
				redirect('masuk');
			}
		}
	}
	public function aktif()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		$getdetail = $this->Model_masuk->getem($email, 'peserta_magang', 'email_pm');
		if ($getdetail) {
			// var_dump($getdetail);
			$gettoken = $this->Model_daftar->getdet('magang_token', ['token' => $token])->row();
			if ($gettoken) {
				if (time() - $gettoken->waktu < (60 * 60 * 24)) {
					$ket = ['id_magang_token' => $gettoken->id_magang_token];
					$ket2 = ['id_pm' => $getdetail['id_pm']];
					// var_dump($getdetail, "yaya", $gettoken, "yaya", $ket, "yaya", $ket2);
					$data = [
						'status_pm' => 'berlangsung',
					];
					$this->Model_peserta->updata('peserta_magang', $data, $ket2);
					$this->Model_daftar->hapus('magang_token', $ket);
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Aktivasi berhasil, silakan masuk! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button> </div>');
					redirect('masuk');
				} else {
					$ket = ['id_magang_token' => $gettoken->id_magang_token];
					$ket2 = ['id_pm' => $getdetail['id_pm']];
					$this->Model_daftar->hapus('magang_token', $ket);
					$this->Model_daftar->hapus('peserta_magang', $ket2);
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Token sudah kadaluarsa! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
					redirect('masuk');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Token untuk aktikan akun salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
				redirect('masuk');
			}
			// var_dump($gettoken);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Email untuk aktifkan akun salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
			redirect('masuk');
		}
	}
	public function yaya()
	{
		echo 'yaya';
	}
}
