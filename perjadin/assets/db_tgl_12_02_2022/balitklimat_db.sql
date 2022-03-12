-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2022 pada 23.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balitklimat_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_golongan`
--

CREATE TABLE `data_golongan` (
  `id_golongan` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_golongan`
--

INSERT INTO `data_golongan` (`id_golongan`, `golongan`) VALUES
(1, 'II C'),
(3, 'II D'),
(4, 'III A'),
(6, 'III C'),
(7, 'III D'),
(8, 'IV A'),
(9, 'IV B'),
(10, 'IV C'),
(11, 'IV D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_header_surat`
--

CREATE TABLE `data_header_surat` (
  `id_header_surat` varchar(10) NOT NULL,
  `nama_kementerian` varchar(50) NOT NULL,
  `eslon_satu` varchar(50) NOT NULL,
  `eslon_dua` varchar(50) NOT NULL,
  `eslon_tiga` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_header_surat`
--

INSERT INTO `data_header_surat` (`id_header_surat`, `nama_kementerian`, `eslon_satu`, `eslon_dua`, `eslon_tiga`, `alamat`) VALUES
('h01', 'KEMENTERIAN PERTANIAN', 'BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN', 'BALAI BESAR LITBANG SUMBERDAYA LAHAN PERTANIAN', 'BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI', 'Jalan Tentara Pelajar No.1A, Kampus Penelitian Pertanian - Cimanggu Bogor 16111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `jabatan`) VALUES
(2, 'Plt. Kepala Balai'),
(3, 'Peneliti Ahli Utama'),
(4, 'Peneliti Ahli Madya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jenis_keg`
--

CREATE TABLE `data_jenis_keg` (
  `id_jenis_keg` int(11) NOT NULL,
  `jenis_keg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_jenis_keg`
--

INSERT INTO `data_jenis_keg` (`id_jenis_keg`, `jenis_keg`) VALUES
(2, 'Kerjasama'),
(3, 'APBN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `kode_kegiatan` varchar(10) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(25) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nip_pj_kegiatan` varchar(18) NOT NULL,
  `nip_pj_rrr` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`kode_kegiatan`, `judul_kegiatan`, `jenis_kegiatan`, `tahun`, `nip_pj_kegiatan`, `nip_pj_rrr`) VALUES
('RPTP-1', 'Pemetaan lahan pertanian Indonesia', 'Kerjasama', 2022, '195805161993032002', '196401211990031002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kota`
--

CREATE TABLE `data_kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kota`
--

INSERT INTO `data_kota` (`id_kota`, `kota`) VALUES
(2, 'Kabupaten Bogor, Jawa Barat'),
(3, 'Kota Bogor, Jawa Barat'),
(4, 'Kota Bandung, Jawa Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pangkat`
--

CREATE TABLE `data_pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `pangkat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pangkat`
--

INSERT INTO `data_pangkat` (`id_pangkat`, `pangkat`) VALUES
(1, 'Pembina Tk I'),
(2, 'Pembina Utama'),
(3, 'Pembina Utama Muda'),
(4, 'Pembina'),
(6, 'Penata'),
(7, 'Penata Tk I'),
(8, 'Pengatur Tk I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `status_kepegawaian` varchar(15) NOT NULL,
  `pangkat` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL,
  `admin` varchar(10) NOT NULL,
  `pumk` varchar(10) NOT NULL,
  `kpa` varchar(10) NOT NULL,
  `ppk` varchar(10) NOT NULL,
  `pj` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama_pegawai`, `foto`, `golongan`, `status_kepegawaian`, `pangkat`, `jabatan`, `nik`, `email`, `password`, `no_whatsapp`, `admin`, `pumk`, `kpa`, `ppk`, `pj`) VALUES
('195805161993032002', 'Dr. Nani Heryani', 'fix_kolokium.jpg', 'III A', 'PNS', 'Pembina Tk I', 'Peneliti Ahli Madya', '3271055605580006', 'administrator@gmail.com', '876543221', '081235062988', 'Iya', 'Iya', 'Iya', 'Tidak', 'Tidak'),
('196401211990031002', 'Dr. Ir. A. Arivin Rivaie, M.Sc', 'WhatsApp Image 2022-01-14 at 14.30.57.jpeg', 'III C', 'PNS/TB', 'Penata', 'Peneliti Ahli Utama', '3271062101640004', 'bogorfood.kel8@gmail.com', '12345678', '081235062988', 'Iya', 'Tidak', 'Iya', 'Tidak', 'Iya'),
('196411291990032002', 'Dr. Ir. Popi Redjekiningrum Dwi Mustatingingsih', 'DSCF5201-removebg-preview.png', 'III D', 'PNS/TB', 'Pembina Utama Muda', 'Peneliti Ahli Utama', '3201296911640001', 'administrator@gmail.com', '12345678', '081235062988', 'Tidak', 'Iya', 'Tidak', 'Iya', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_role`
--

CREATE TABLE `data_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_role`
--

INSERT INTO `data_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(3, 'PUMK'),
(4, 'Bendahara ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kepegawaian`
--

CREATE TABLE `status_kepegawaian` (
  `id_status_peg` int(11) NOT NULL,
  `status_kepegawaian` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_kepegawaian`
--

INSERT INTO `status_kepegawaian` (`id_status_peg`, `status_kepegawaian`) VALUES
(1, 'PNS'),
(2, 'PNS/TB'),
(3, 'CPNS'),
(5, 'PPNPN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indeks untuk tabel `data_header_surat`
--
ALTER TABLE `data_header_surat`
  ADD PRIMARY KEY (`id_header_surat`);

--
-- Indeks untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `data_jenis_keg`
--
ALTER TABLE `data_jenis_keg`
  ADD PRIMARY KEY (`id_jenis_keg`);

--
-- Indeks untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`kode_kegiatan`),
  ADD KEY `nip_pj_keg_nip` (`nip_pj_kegiatan`),
  ADD KEY `nip_pj_rrr_nip` (`nip_pj_rrr`);

--
-- Indeks untuk tabel `data_kota`
--
ALTER TABLE `data_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `data_pangkat`
--
ALTER TABLE `data_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  ADD PRIMARY KEY (`id_status_peg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_jenis_keg`
--
ALTER TABLE `data_jenis_keg`
  MODIFY `id_jenis_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_kota`
--
ALTER TABLE `data_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_pangkat`
--
ALTER TABLE `data_pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_role`
--
ALTER TABLE `data_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  MODIFY `id_status_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD CONSTRAINT `nip_pj_keg_nip` FOREIGN KEY (`nip_pj_kegiatan`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_pj_rrr_nip` FOREIGN KEY (`nip_pj_rrr`) REFERENCES `data_pegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
