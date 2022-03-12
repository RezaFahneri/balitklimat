-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 10:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_divisi` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_divisi`, `divisi`) VALUES
(2, 'Jasa Penelitian');

-- --------------------------------------------------------

--
-- Table structure for table `data_golongan`
--

CREATE TABLE `data_golongan` (
  `id_golongan` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_golongan`
--

INSERT INTO `data_golongan` (`id_golongan`, `golongan`) VALUES
(1, 'II C'),
(3, 'II D'),
(4, 'III A'),
(5, 'III B'),
(7, 'III C'),
(8, 'III D'),
(9, 'IV A'),
(10, 'IV B'),
(15, 'IV C'),
(16, 'IV D');

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Plt. Kepala Balai'),
(2, 'Peneliti Ahli Utama'),
(3, 'Peneliti Ahli Madya'),
(4, 'Plh.Kepala Balai');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_gaji_berkala`
--

CREATE TABLE `data_jadwal_gaji_berkala` (
  `kode_kgb` varchar(14) NOT NULL,
  `tgl_penjadwalan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nip` varchar(18) NOT NULL,
  `gaji_lama` int(11) NOT NULL,
  `gaji_baru` int(11) NOT NULL,
  `tmt_gaji_1` date DEFAULT NULL,
  `tmt_gaji_2` date DEFAULT NULL,
  `tmt_gaji_3` date DEFAULT NULL,
  `tmt_gaji_4` date DEFAULT NULL,
  `tmt_gaji_5` date DEFAULT NULL,
  `jadwal_kgb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jadwal_gaji_berkala`
--

INSERT INTO `data_jadwal_gaji_berkala` (`kode_kgb`, `tgl_penjadwalan`, `nip`, `gaji_lama`, `gaji_baru`, `tmt_gaji_1`, `tmt_gaji_2`, `tmt_gaji_3`, `tmt_gaji_4`, `tmt_gaji_5`, `jadwal_kgb`) VALUES
('030322001', '2022-03-03 14:26:21', '196401211990031002', 4000000, 45000000, '2022-03-03', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2026-03-03'),
('050322001', '2022-03-05 12:08:06', '196411291990032002', 4000000, 45000000, '2022-03-05', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-04-09'),
('060322001', '2022-03-06 13:27:57', '195805161993032002', 4000000, 5500000, '2022-03-06', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_naik_pangkat`
--

CREATE TABLE `data_jadwal_naik_pangkat` (
  `kode_kp` varchar(14) NOT NULL,
  `tgl_penjadwalan` timestamp NULL DEFAULT current_timestamp(),
  `nip` varchar(18) NOT NULL,
  `id_pangkat_berikutnya` int(11) NOT NULL,
  `id_golongan_berikutnya` int(11) NOT NULL,
  `tmt_pangkat_1` date DEFAULT NULL,
  `tmt_pangkat_2` date DEFAULT NULL,
  `tmt_pangkat_3` date DEFAULT NULL,
  `tmt_pangkat_4` date DEFAULT NULL,
  `tmt_pangkat_5` date DEFAULT NULL,
  `jadwal_kp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jadwal_naik_pangkat`
--

INSERT INTO `data_jadwal_naik_pangkat` (`kode_kp`, `tgl_penjadwalan`, `nip`, `id_pangkat_berikutnya`, `id_golongan_berikutnya`, `tmt_pangkat_1`, `tmt_pangkat_2`, `tmt_pangkat_3`, `tmt_pangkat_4`, `tmt_pangkat_5`, `jadwal_kp`) VALUES
('050322001', '2022-03-05 07:12:26', '195805161993032002', 6, 4, '2022-03-05', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-04-08'),
('050322002', '2022-03-05 10:05:04', '196411291990032002', 8, 9, '2022-03-18', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `data_notifikasi`
--

CREATE TABLE `data_notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pesan` text NOT NULL,
  `jenis_notif` varchar(255) NOT NULL,
  `tgl_notif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_notifikasi`
--

INSERT INTO `data_notifikasi` (`id_notifikasi`, `nip`, `pesan`, `jenis_notif`, `tgl_notif`) VALUES
(14, '195805161993032002', 'Waktunya naik pangkat pada tanggal 2022-04-08', 'notif_kp', '2022-03-09 08:33:05'),
(17, '196411291990032002', 'Waktunya naik pangkat pada tanggal 2022-06-04', 'notif_kgb', '2022-03-09 08:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `data_pangkat`
--

CREATE TABLE `data_pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `pangkat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pangkat`
--

INSERT INTO `data_pangkat` (`id_pangkat`, `pangkat`) VALUES
(1, 'Tidak ada'),
(2, 'Pembina Utama'),
(4, 'Pembina'),
(6, 'Penata'),
(7, 'Penata Tk I'),
(8, 'Pengatur Tk I'),
(10, 'Pembina Tk I'),
(13, 'Pembina Utama Muda');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_golongan` int(11) DEFAULT NULL,
  `id_status_peg` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama_pegawai`, `foto`, `id_golongan`, `id_status_peg`, `id_pangkat`, `id_jabatan`, `id_divisi`, `nik`, `email`, `password`, `no_whatsapp`, `role`) VALUES
('195805161993032002', 'Dr. Nani Heryani', 'fix_kolokium211.jpg', 16, 1, 2, 2, 2, '3271055605580006', 'lugasmunayasika@gmail.com', '123', '6281235062988 ', 'User'),
('196401211990031002', 'Dr. Ir. A. Arivin Rivaie, M.Sc', 'images6.jpg', 16, 1, 10, 1, 2, '3271062101640004', 'lugasmunaya@gmail.com', '12345678', '6281235062988 ', 'Admin ASN'),
('196411291990032002', 'Dr. Ir. Popi Redjekiningrum D M', 'DSCF5201-removebg-preview111.png', 16, 1, 2, 2, 2, '3201296911640001', 'adminbogorfood@gmail.com', '123', '6281235062988 ', 'User'),
('196901241998032001', 'Dr. Elza Surmaini', 'default.png', 15, 1, 13, 2, 2, '3271066401690004', 'admins@gmail.com', '123', '6281973034079', 'Admin Inventaris');

-- --------------------------------------------------------

--
-- Table structure for table `data_tugas`
--

CREATE TABLE `data_tugas` (
  `id_tugas` int(11) NOT NULL,
  `penugasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tugas`
--

INSERT INTO `data_tugas` (`id_tugas`, `penugasan`) VALUES
(3, 'Pemegang Uang Muka Kerja'),
(11, 'Kuasa Pengguna Anggaran'),
(12, 'PJ RPTP'),
(13, 'PJ RDHP'),
(14, 'PJ RKTM');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tugas`
--

CREATE TABLE `detail_tugas` (
  `id_detail_tugas` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_tugas`
--

INSERT INTO `detail_tugas` (`id_detail_tugas`, `id_tugas`, `nip`) VALUES
(41, 3, '196401211990031002'),
(43, 3, '195805161993032002');

-- --------------------------------------------------------

--
-- Table structure for table `status_kepegawaian`
--

CREATE TABLE `status_kepegawaian` (
  `id_status_peg` int(11) NOT NULL,
  `status_kepegawaian` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_kepegawaian`
--

INSERT INTO `status_kepegawaian` (`id_status_peg`, `status_kepegawaian`) VALUES
(1, 'PNS'),
(3, 'PNS/TB'),
(4, 'CPNS'),
(5, 'PPNPN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_jadwal_gaji_berkala`
--
ALTER TABLE `data_jadwal_gaji_berkala`
  ADD PRIMARY KEY (`kode_kgb`),
  ADD KEY `nip_pegawai_jadwal_gajiberkala` (`nip`);

--
-- Indexes for table `data_jadwal_naik_pangkat`
--
ALTER TABLE `data_jadwal_naik_pangkat`
  ADD PRIMARY KEY (`kode_kp`),
  ADD KEY `id_golongan_berikutnya_jadwal_pangkat` (`id_golongan_berikutnya`),
  ADD KEY `id_pangkat_berikutnya_jadwalkp` (`id_pangkat_berikutnya`),
  ADD KEY `nip_peg_jadwalkp` (`nip`);

--
-- Indexes for table `data_notifikasi`
--
ALTER TABLE `data_notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `nip_notif_peg` (`nip`);

--
-- Indexes for table `data_pangkat`
--
ALTER TABLE `data_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_gol_peg` (`id_golongan`),
  ADD KEY `id_status_datapeg` (`id_status_peg`),
  ADD KEY `id_pangkat_peg` (`id_pangkat`),
  ADD KEY `id_jabatan_peg` (`id_jabatan`),
  ADD KEY `id_divisi_peg` (`id_divisi`);

--
-- Indexes for table `data_tugas`
--
ALTER TABLE `data_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
  ADD PRIMARY KEY (`id_detail_tugas`),
  ADD KEY `detail_nip_tugas` (`nip`),
  ADD KEY `detail_id_tugas` (`id_tugas`);

--
-- Indexes for table `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  ADD PRIMARY KEY (`id_status_peg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_notifikasi`
--
ALTER TABLE `data_notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data_pangkat`
--
ALTER TABLE `data_pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_tugas`
--
ALTER TABLE `data_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
  MODIFY `id_detail_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  MODIFY `id_status_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_jadwal_gaji_berkala`
--
ALTER TABLE `data_jadwal_gaji_berkala`
  ADD CONSTRAINT `nip_pegawai_jadwal_gajiberkala` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Constraints for table `data_jadwal_naik_pangkat`
--
ALTER TABLE `data_jadwal_naik_pangkat`
  ADD CONSTRAINT `id_golongan_berikutnya_jadwal_pangkat` FOREIGN KEY (`id_golongan_berikutnya`) REFERENCES `data_golongan` (`id_golongan`),
  ADD CONSTRAINT `id_pangkat_berikutnya_jadwalkp` FOREIGN KEY (`id_pangkat_berikutnya`) REFERENCES `data_pangkat` (`id_pangkat`),
  ADD CONSTRAINT `nip_peg_jadwalkp` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Constraints for table `data_notifikasi`
--
ALTER TABLE `data_notifikasi`
  ADD CONSTRAINT `nip_notif_peg` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Constraints for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `id_divisi_peg` FOREIGN KEY (`id_divisi`) REFERENCES `data_divisi` (`id_divisi`),
  ADD CONSTRAINT `id_gol_peg` FOREIGN KEY (`id_golongan`) REFERENCES `data_golongan` (`id_golongan`),
  ADD CONSTRAINT `id_jabatan_peg` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `id_pangkat_peg` FOREIGN KEY (`id_pangkat`) REFERENCES `data_pangkat` (`id_pangkat`),
  ADD CONSTRAINT `id_status_datapeg` FOREIGN KEY (`id_status_peg`) REFERENCES `status_kepegawaian` (`id_status_peg`);

--
-- Constraints for table `detail_tugas`
--
ALTER TABLE `detail_tugas`
  ADD CONSTRAINT `detail_id_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `data_tugas` (`id_tugas`),
  ADD CONSTRAINT `detail_nip_tugas` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
