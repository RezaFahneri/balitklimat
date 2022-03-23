-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2022 pada 18.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.27

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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_id`, `stok`, `satuan_id`) VALUES
(7, 'Pulpen Tali', 2, 62, 4),
(8, 'Info Agroklimat dan Hidrologi', 2, 1, 1),
(10, 'Tas Blacu', 4, 6, 2),
(11, 'Buku Tahunan', 2, 98, 2),
(12, 'Buletin Agroklimat dan Hidrologi', 2, 9, 1),
(13, 'Tumblr', 3, 2, 4),
(14, 'Notebook', 2, 4, 2),
(17, 'Juknis', 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barangkeluar` varchar(25) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_keluar` int(25) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `beritaacara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barangkeluar`, `tanggal_keluar`, `barang_id`, `jumlah_keluar`, `keterangan`, `foto`, `dokumen`, `status`, `beritaacara`) VALUES
('18', '2022-03-04', 17, 4, 'Barang Sesuai', 'default.png', '', '', ''),
('19', '2022-03-04', 10, 1, '-', 'default.png', '', '', 'laporan_penjualan_toko_kita_481.pdf'),
('20', '2022-03-08', 7, 1, '-', 'default.png', NULL, '', ''),
('21', '2022-03-09', 7, 2, 'Ok', 'default.png', NULL, '', ''),
('BK2203001', '2022-03-08', 0, 5, 'Ok', 'default.png', NULL, '', ''),
('BK2203002', '2022-03-10', 0, 5, 'Barang Sesuai', 'default.png', NULL, '', ''),
('BK2203003', '2022-03-10', 0, 5, '-', 'default.png', NULL, '', ''),
('BK2203004', '2022-03-10', 0, 5, 'Barang Sesuai', 'default.png', NULL, '', ''),
('BK2203005', '2022-03-11', 0, 5, 'Barang Sesuai', 'default.png', NULL, '', ''),
('BK2203006', '2022-03-10', 7, 5, 'Barang Sesuai', 'default.png', NULL, '', 'berita_acara_barang_diseminasi_3.pdf'),
('BK2203007', '2022-03-12', 7, 1, 'Barang Sesuai', 'default.png', NULL, '', ''),
('BK2203008', '2022-03-12', 7, 5, 'Barang Sesuai', 'default.png', NULL, '', ''),
('BK2203009', '2022-03-13', 12, 5, 'Barang Sesuai', 'default.png', NULL, '', 'laporan_transaksi_barang_masuk_101.pdf'),
('BK2203010', '2022-03-13', 7, 5, 'Barang Sesuai', 'default.png', NULL, '', 'berita_acara_barang_diseminasi_4.pdf'),
('BK2203011', '2022-03-11', 7, 5, 'Barang Sesuai', 'default.png', NULL, '', 'berita_acara_barang_diseminasi.pdf'),
('BK2203012', '2022-03-18', 7, 5, '', 'default.png', NULL, '', NULL);

--
-- Trigger `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `update_stok_keluar` BEFORE INSERT ON `barang_keluar` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` - NEW.jumlah_keluar WHERE `barang`.`id_barang` = NEW.barang_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_keluar_edit` AFTER UPDATE ON `barang_keluar` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` - NEW.jumlah_keluar + OLD.jumlah_keluar WHERE `barang`.`id_barang` = NEW.barang_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_keluar_hapus` AFTER DELETE ON `barang_keluar` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` + OLD.jumlah_keluar WHERE `barang`.`id_barang` = OLD.barang_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_kembali`
--

CREATE TABLE `barang_kembali` (
  `id_barangkembali` varchar(25) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_kembali` int(25) NOT NULL,
  `keterangankembali` varchar(255) NOT NULL,
  `barang_idkeluar` varchar(25) NOT NULL,
  `fotokembali` varchar(255) DEFAULT NULL,
  `dokumenkembali` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_kembali`
--

INSERT INTO `barang_kembali` (`id_barangkembali`, `tanggal_kembali`, `jumlah_kembali`, `keterangankembali`, `barang_idkeluar`, `fotokembali`, `dokumenkembali`) VALUES
('60', '2022-03-15', 1, 'gf', '15', 'default.png', ''),
('62', '2022-04-01', 1, 'gf', '17', 'default.png', ''),
('63', '2022-03-26', 1, 'gfh', '14', 'default.png', ''),
('65', '2022-03-03', 2, 'Barang Sesuai', '12', 'default.png', ''),
('67', '2022-03-12', 1, 'Barang Sesuai', '13', 'default.png', ''),
('70', '2022-03-12', 2, 'Barang Baik', '17', 'fococlipping-20220105-530571.png', ''),
('73', '2022-03-02', 1, '-', '16', 'default.png', ''),
('74', '2022-03-04', 1, '-', '19', 'default.png', ''),
('75', '2022-03-06', 1, '-', '16', 'default.png', ''),
('76', '2022-03-07', 1, 'Barang Sesuai', '1', 'default.png', ''),
('77', '2022-03-09', 1, 'Barang Baik', '21', 'default.png', NULL),
('BKM2203001', '2022-03-08', 1, '-', '21', 'default.png', NULL),
('BKM2203004', '2022-03-11', 1, '', 'BK2203006', 'default.png', NULL),
('BKM2203005', '2022-03-12', 1, '-', 'BK2203009', 'default.png', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barangmasuk` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barangmasuk`, `tanggal_masuk`, `barang_id`, `jumlah_masuk`, `foto`, `dokumen`, `keterangan`) VALUES
('36', '2022-02-19', 7, 54, '', '', '-'),
('37', '2022-02-22', 8, 2, '', '', '-'),
('38', '2022-02-22', 10, 8, 'WhatsApp Image 2021-12-11 at 09.15.08 (1).jpeg', 'file_form_master_form__FRM012_docx.docx', '-'),
('39', '2022-02-22', 11, 3, 'shopping-bag.png', '', '-'),
('41', '2022-02-26', 12, 2, 'icon3.png', 'file_form_master_form__FRM012_docx_(1)1.docx', '-'),
('42', '2022-03-01', 17, 7, 'box.png', '', 'Barang Sesuai'),
('BM2203001', '2022-03-10', 10, 3, 'bd8e8bc7c930275605186264b57ebd54.jpg', NULL, 'Barang Baik'),
('BM2203002', '2022-03-26', 8, 8, 'icon4.png', NULL, 'Barang Sesuai'),
('BM2203003', '2022-03-10', 13, 2, 'default.png', NULL, '');

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `update_stok_masuk` BEFORE INSERT ON `barang_masuk` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` + NEW.jumlah_masuk WHERE `barang`.`id_barang` = NEW.barang_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_masuk_edit` AFTER UPDATE ON `barang_masuk` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` + NEW.jumlah_masuk - OLD.jumlah_masuk WHERE `barang`.`id_barang` = NEW.barang_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_masuk_hapus` AFTER DELETE ON `barang_masuk` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` - OLD.jumlah_masuk WHERE `barang`.`id_barang` = OLD.barang_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_buku_tamu` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `asal_instansi` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `no_wa` varchar(20) DEFAULT NULL,
  `id_divisi` varchar(256) NOT NULL,
  `pegawai_nip` varchar(20) DEFAULT NULL,
  `keperluan` text NOT NULL,
  `alasan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_buku_tamu`, `jenis`, `tanggal`, `waktu`, `nama_lengkap`, `asal_instansi`, `email`, `no_wa`, `id_divisi`, `pegawai_nip`, `keperluan`, `alasan`, `keterangan`, `laporan`) VALUES
('BT220223001', 'A', '2022-02-25', '20:37:00', 'AZZAHRA RAMADIANA ARIFANI', 'ipb', 'azzahrara.0210@gmail.com', '2147483647', 'yantek', '12345678', 'KEP01', NULL, 'test 1', ''),
('BT220223002', 'A', '2022-02-23', '20:39:00', 'fee', 'xsda', 'feliia@gmail.com', '11111', 'yantek', NULL, 'KEP02', NULL, '', ''),
('BT220223003', 'B', '2022-02-23', '20:40:00', 'sehun', 'sm', 'sehun@gmail.com', '242111', 'tu', '12345678', 'KEP02', NULL, '', ''),
('BT220223004', 'B', '2022-02-23', '20:42:00', 'alasannnnnnnnnnnnnn', 'ipb', '10969zrazzahra@apps.ipb.ac.id', '812334123', 'tu', NULL, 'KEP02', 'ALS03', 'testsssssssssssssssssss', ''),
('BT220304001', 'Tidak Bertemu', '2022-03-04', '10:26:00', 'Azzahra Ramadiana Arifani', 'xsda', 'azzahrara.0210@gmail.com', '11111', 'tu', '196401211990031002', 'keperluannanana', 'alasannana', 'aa', 'edit'),
('BT220311001', 'Bertemu', '2022-03-12', '22:07:00', 'AZZAHRA RAMADIANA ARIFANI', 'dfad', 'azzahrara.0210@gmail.com', '2147483647', '4', '', 'keperluannanana', '', '', ''),
('BT220311002', 'Tidak Bertemu', '2022-03-12', '10:09:00', 'AZZAHRA RAMADIANA ARIFANI', 'asal instansi edit', 'azzahrara.0210@gmail.com', '2147483647', '196401211990031002', '', 'asa', 'alasannana', '', ''),
('BT220311004', 'Tidak Bertemu', '2022-03-12', '21:11:00', 'Amaira', 'asal instansi', 'feliia@gmail.com', '0', '2', '195805161993032002', 'asa', 'alasannana', 'a', ''),
('BT220311005', 'Bertemu', '2022-03-18', '11:12:00', 'Azzahra Ramadiana Arifani', 'dfad', 'lugasmunaya@gmail.com', '11111', '2', '195805161993032002', 'asa', '', '', ''),
('BT220311006', 'Tidak Bertemu', '2022-03-05', '11:13:00', 'Amaira', 'sm', '', '0', '2', '195805161993032002', 'keperluannanana', 'alasannana', '', ''),
('BT220311007', 'Bertemu', '2022-03-05', '09:15:00', 'test', 'dfad', '', '', '2', '195805161993032002', 'keperluannanana', '', '', ''),
('BT220311008', 'Bertemu', '2022-04-08', '11:18:00', 'test', 'asal instansi edit', 'azzahrara.0210@gmail.com', '11111', '1', '196401211990031002', 'keperluannanana', '', 'Have a bunch of buttons that all trigger the same modal with slightly different contents? Use event.relatedTarget and HTML data-* attributes (possibly via jQuery) to vary the contents of the modal depending on which button was clicked.\r\n\r\nBelow is a live demo followed by example HTML and JavaScript. For more information, read the modal events docs for details on relatedTarget.', 'fffd'),
('BT220311011', 'Bertemu', '2022-03-30', '13:50:00', 'AzzahraRamadi ana Arifani YAYAYA', 'asal instansi edit', 'fb.ipin@gmail.com', '2434234234', '1', '196401211990031002', 'keperluannanana', '', 'ASA', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggota_perjadin`
--

CREATE TABLE `data_anggota_perjadin` (
  `id_anggota_perjadin` int(11) NOT NULL,
  `id_perjalanan_dinas` int(11) NOT NULL,
  `nip_anggota_perjadin` varchar(18) NOT NULL,
  `no_sppd2` varchar(25) NOT NULL,
  `no_kas` int(11) DEFAULT NULL,
  `uang_harian` int(11) NOT NULL,
  `uang_transportasi` int(11) DEFAULT NULL,
  `hari1` int(11) DEFAULT NULL,
  `hari2` int(11) DEFAULT NULL,
  `hari3` int(11) DEFAULT NULL,
  `biaya1` int(11) DEFAULT NULL,
  `biaya2` int(11) DEFAULT NULL,
  `biaya3` int(11) DEFAULT NULL,
  `uang_penginapan` int(11) DEFAULT NULL,
  `total_pendapatan` int(11) NOT NULL,
  `status_perjalanan_dinas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_anggota_perjadin`
--

INSERT INTO `data_anggota_perjadin` (`id_anggota_perjadin`, `id_perjalanan_dinas`, `nip_anggota_perjadin`, `no_sppd2`, `no_kas`, `uang_harian`, `uang_transportasi`, `hari1`, `hari2`, `hari3`, `biaya1`, `biaya2`, `biaya3`, `uang_penginapan`, `total_pendapatan`, `status_perjalanan_dinas`) VALUES
(3, 27, '196710081994032013', '/SPPD/I.8.3/03/2022', NULL, 2580000, 0, 0, 0, 0, 0, 0, 0, 0, 2580000, 'Belum Berangkat'),
(4, 27, 'HNR1232211222', '/SPPD/I.8.3/03/2022', NULL, 2580000, 0, 0, 0, 0, 0, 0, 0, 0, 2580000, 'Belum Berangkat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_divisi` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_divisi`
--

INSERT INTO `data_divisi` (`id_divisi`, `divisi`) VALUES
(1, 'Tidak Ada'),
(2, 'Jasa Penelitian');

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
(1, 'Tidak Ada'),
(3, 'II C'),
(4, 'II D'),
(5, 'III A'),
(7, 'III B'),
(8, 'III C'),
(9, 'III D'),
(10, 'IV A'),
(15, 'IV B'),
(16, 'IV C'),
(17, 'IV D');

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
  `eslon_tiga_2` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `web_email` varchar(100) NOT NULL,
  `kode_balai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_header_surat`
--

INSERT INTO `data_header_surat` (`id_header_surat`, `nama_kementerian`, `eslon_satu`, `eslon_dua`, `eslon_tiga`, `eslon_tiga_2`, `alamat`, `kontak`, `web_email`, `kode_balai`) VALUES
('h01', 'KEMENTERIAN PERTANIAN', 'BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN', 'BALAI BESAR LITBANG SUMBERDAYA LAHAN PERTANIAN', 'Balai Penelitian Agroklimat dan Hidrologi', 'Balai Penelitian Agroklimat dan Hidrologi', 'Jl. Tentara Pelajar N0. 1A, Kampus Penelitian Pertanian Cimanggu Bogor 16111', 'Telepon (0251) 8312760, Faksimili (0251) 8323909', 'Website  http://balitklimat.litbang.pertanian.go.id  E-MAIL : balitklimat@litbang.pertanian.go,id', 648694);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Tidak Ada'),
(2, 'Kepala Balai'),
(3, 'Plt.Kepala Balai\r\n'),
(4, 'Peneliti Ahli Utama'),
(5, 'Peneliti Ahli Madya'),
(6, 'Pengemudi'),
(7, 'Pejabat Pembuat Komitmen'),
(8, 'Bendahara Penerimaan'),
(9, 'Bendahara Pengeluaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jadwal_gaji_berkala`
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
-- Dumping data untuk tabel `data_jadwal_gaji_berkala`
--

INSERT INTO `data_jadwal_gaji_berkala` (`kode_kgb`, `tgl_penjadwalan`, `nip`, `gaji_lama`, `gaji_baru`, `tmt_gaji_1`, `tmt_gaji_2`, `tmt_gaji_3`, `tmt_gaji_4`, `tmt_gaji_5`, `jadwal_kgb`) VALUES
('130322001', '2022-03-13 16:33:35', '196803301994031001', 4000000, 4500000, '2022-03-13', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-04-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jadwal_naik_pangkat`
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
-- Dumping data untuk tabel `data_jadwal_naik_pangkat`
--

INSERT INTO `data_jadwal_naik_pangkat` (`kode_kp`, `tgl_penjadwalan`, `nip`, `id_pangkat_berikutnya`, `id_golongan_berikutnya`, `tmt_pangkat_1`, `tmt_pangkat_2`, `tmt_pangkat_3`, `tmt_pangkat_4`, `tmt_pangkat_5`, `jadwal_kp`) VALUES
('130322001', '2022-03-13 16:25:18', '196803301994031001', 10, 8, '2022-03-13', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-04-09'),
('130322002', '2022-03-13 16:43:24', '196710081994032013', 10, 16, '2022-03-13', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2022-04-08');

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
(9, 'Kerjasama'),
(10, 'APBN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `kode_kegiatan` varchar(10) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `id_jenis_keg` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nip_pj_kegiatan` varchar(18) NOT NULL,
  `nip_pj_rrr` varchar(18) NOT NULL,
  `biaya_pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`kode_kegiatan`, `judul_kegiatan`, `id_jenis_keg`, `tahun`, `nip_pj_kegiatan`, `nip_pj_rrr`, `biaya_pengeluaran`) VALUES
('RPTP1', 'Pemetaan Lahan Pertanian Indonesia', 9, 2022, '196901241998032001', '196803301994031001', 1290000),
('RPTP1.2', 'Pemetaan Lahan Peternakan', 9, 2022, '196901241998032001', '196803301994031001', 5160000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kendaraan`
--

CREATE TABLE `data_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `no_polisi` varchar(15) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kendaraan`
--

INSERT INTO `data_kendaraan` (`id_kendaraan`, `no_polisi`, `merk`, `jenis`, `status`) VALUES
(1, 'F 6409 GR', 'Toyota Innova', 'Roda 4', 1),
(2, 'F 4326 AQ', 'Mitsubishi Kuda', 'Roda 4', 1),
(4, 'F 1020 MB', 'Toyota Innova', 'Roda 4', 1),
(5, 'F 6409 G', 'Toyota Innova', 'Roda 4', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kota`
--

CREATE TABLE `data_kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `id_sbuh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kota`
--

INSERT INTO `data_kota` (`id_kota`, `kota`, `id_sbuh`) VALUES
(6, 'Kota Medan', 3),
(7, 'Banda Aceh', 1),
(8, 'Kabupaten Aceh Barat', 1),
(9, 'Kota Bogor', 13),
(10, 'Kabupaten Bogor', 13),
(11, 'Kota Bandung', 13),
(12, 'Jakarta Selatan', 14),
(13, 'Jakarta Timur', 14),
(14, 'Kabupaten Magetan', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mak`
--

CREATE TABLE `data_mak` (
  `kode_mak` varchar(15) NOT NULL,
  `judul_mak` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `banyak_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mak`
--

INSERT INTO `data_mak` (`kode_mak`, `judul_mak`, `tahun`, `banyak_anggaran`) VALUES
('004.521211-C2', 'Biaya Perjalanan Dinas Luar Negeri', 2022, 17840000),
('004.524119-C2', 'Biaya Perjalanan Dinas Dalam Negeri', 2022, 67000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_notifikasi`
--

CREATE TABLE `data_notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pesan` text NOT NULL,
  `jenis_notif` varchar(255) NOT NULL,
  `tgl_notif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_notifikasi`
--

INSERT INTO `data_notifikasi` (`id_notifikasi`, `nip`, `pesan`, `jenis_notif`, `tgl_notif`) VALUES
(18, '196710081994032013', 'Waktunya naik pangkat pada tanggal 2022-04-08', 'notif_kp', '2022-03-13 16:43:41');

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
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_golongan` int(11) DEFAULT NULL,
  `id_status_peg` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_whatsapp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama_pegawai`, `foto`, `id_golongan`, `id_status_peg`, `id_pangkat`, `id_jabatan`, `id_divisi`, `nik`, `email`, `password`, `no_whatsapp`) VALUES
('11605806119105', 'Lugas Munayasika', 'default.png', 4, 3, 2, 8, 2, '111625124121341', 'lugas@gmail.com', '123', '6281973034079'),
('195805161993032002', 'Dr. Nani Heryani', 'WhatsApp_Image_2022-01-14_at_14_30_571.jpeg', 17, 3, 2, 4, 2, '3271055605580006', 'lugasmunayasikaa@gmail.com', '123', '6281235062988   '),
('196401211990031002', 'Dr. Ir. A. Arivin Rivaie, M.Sc', 'images6.jpg', 17, 3, 10, 2, 2, '3271062101640004', 'lugasmunayaa@gmail.com', '12345678', '6281235062988   '),
('196411291990032002', 'Dr. Ir. Popi Redjekiningrum D M', 'DSCF5201-removebg-preview111.png', 17, 3, 2, 7, 2, '3201296911640001', 'adminbogorfood@gmail.com', '123', '6281235062988    '),
('196710081994032013', 'Dr. Woro Estiningtyas', 'default.png', 15, 3, 10, 5, 2, '3201294810670003', 'freepik1@gmail.com', '123', '6281235062988'),
('196803301994031001', 'Dr. Budi Kartiwa', 'WhatsApp_Image_2022-01-14_at_14_30_572.jpeg', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
('196901241998032001', 'Dr. Elza Surmaini', 'default.png', 16, 1, 13, 2, 2, '3271066401690004', 'admins@gmail.com', '123', '6281973034079 '),
('HNR1232211222', 'Ujang Suseno', 'default.png', 1, 8, 1, 6, 2, '129719737913', 'ujang@gmail.com', '123', '62855558'),
('HNR932727', 'Asep Pisan', 'default.png', 1, 8, 1, 6, 2, '21318312', 'asep@gmail.com', '123', '62856546');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perjalanan_dinas`
--

CREATE TABLE `data_perjalanan_dinas` (
  `id_perjalanan_dinas` int(11) NOT NULL,
  `kode_kegiatan` varchar(10) NOT NULL,
  `dalam_rangka` varchar(100) NOT NULL,
  `nip_pumk` varchar(18) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `no_surat` varchar(25) DEFAULT NULL,
  `no_surat_tugas_tu` varchar(25) NOT NULL,
  `no_surat_tugas` varchar(25) NOT NULL,
  `kode_mak` varchar(15) NOT NULL,
  `jenis_pengajuan` varchar(5) NOT NULL,
  `jenis_perjalanan_dinas` varchar(15) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `kendaraan` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `lama_perjalanan` int(11) NOT NULL,
  `nip_ppk` varchar(18) NOT NULL,
  `nip_verifikator` varchar(18) NOT NULL,
  `nip_kpa` varchar(18) NOT NULL,
  `nip_bendahara` varchar(18) NOT NULL,
  `nip_kasub_bag_tu` varchar(18) NOT NULL,
  `nip_kepala_balai` varchar(18) NOT NULL,
  `nip_plt_kb` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_perjalanan_dinas`
--

INSERT INTO `data_perjalanan_dinas` (`id_perjalanan_dinas`, `kode_kegiatan`, `dalam_rangka`, `nip_pumk`, `tanggal_pengajuan`, `no_surat`, `no_surat_tugas_tu`, `no_surat_tugas`, `kode_mak`, `jenis_pengajuan`, `jenis_perjalanan_dinas`, `id_kota_asal`, `id_kota_tujuan`, `kendaraan`, `tanggal_berangkat`, `tanggal_kembali`, `lama_perjalanan`, `nip_ppk`, `nip_verifikator`, `nip_kpa`, `nip_bendahara`, `nip_kasub_bag_tu`, `nip_kepala_balai`, `nip_plt_kb`) VALUES
(27, 'RPTP1.2', 'Seminar pelatihan tentang pemetaan lahan pertanian indonesia pada kemana jaejj ajehau ahda', '196803301994031001', '2022-03-17', 'B-217', '/TU.040/H.8.3/03/2022', '/KP.440/I.8.3/03/2022', '004.521211-C2', 'LS', 'Menginap', 9, 11, 'Dinas', '2022-03-25', '2022-03-30', 6, '196411291990032002', '195805161993032002', '196411291990032002', '11605806119105', '196803301994031001', '196401211990031002', '196901241998032001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_role`
--

CREATE TABLE `data_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_role`
--

INSERT INTO `data_role` (`id_role`, `role`) VALUES
(1, 'Admin ASN'),
(2, 'Admin Perjalanan Dinas'),
(3, 'Admin Inventaris'),
(5, 'Admin Disposisi'),
(6, 'Admin Laporan Magang'),
(7, 'Admin Buku Tamu'),
(8, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sbuh`
--

CREATE TABLE `data_sbuh` (
  `id_sbuh` int(11) NOT NULL,
  `nama_provinsi` varchar(25) NOT NULL,
  `luar_kota` int(11) NOT NULL,
  `dalam_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sbuh`
--

INSERT INTO `data_sbuh` (`id_sbuh`, `nama_provinsi`, `luar_kota`, `dalam_kota`) VALUES
(1, 'Aceh', 360000, 140000),
(3, 'Sumatera Utara', 370000, 150000),
(4, 'Riau', 370000, 150000),
(5, 'Kepulauan Riau', 370000, 150000),
(6, 'Jambi', 370000, 150000),
(7, 'Sumatera Barat', 380000, 150000),
(8, 'Sumatera Selatan', 380000, 150000),
(9, 'Lampung', 380000, 150000),
(10, 'Bengkulu', 380000, 150000),
(11, 'Bangka Belitung', 410000, 160000),
(12, 'Banten', 370000, 150000),
(13, 'Jawa Barat', 430000, 170000),
(14, 'D.K.I. Jakarta', 530000, 210000),
(15, 'Jawa Tengah', 370000, 150000),
(16, 'D.I. Yogyakarta', 420000, 170000),
(17, 'Jawa Timur', 410000, 160000),
(18, 'Bali', 480000, 190000),
(19, 'Nusa Tenggara Barat', 440000, 180000),
(20, 'Nusa Tenggara Timur', 430000, 170000),
(21, 'Kalimantan Barat', 380000, 150000),
(22, 'Kalimantan Tengah', 360000, 140000),
(23, 'Kalimantan Selatan', 380000, 150000),
(24, 'Kalimantan Timur', 430000, 170000),
(25, 'Kalimantan Utara', 430000, 170000),
(26, 'Sulawesi Utara', 370000, 150000),
(27, 'Gorontalo', 370000, 150000),
(28, 'Sulawesi Barat', 410000, 160000),
(29, 'Sulawesi Selatan', 430000, 170000),
(30, 'Sulawesi Tengah', 370000, 150000),
(31, 'Sulawesi Tenggara', 380000, 150000),
(32, 'Maluku', 380000, 150000),
(33, 'Maluku Utara', 430000, 170000),
(34, 'Papua', 580000, 230000),
(35, 'Papua Barat', 480000, 190000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tugas`
--

CREATE TABLE `data_tugas` (
  `id_tugas` int(11) NOT NULL,
  `penugasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tugas`
--

INSERT INTO `data_tugas` (`id_tugas`, `penugasan`) VALUES
(3, 'Pemegang Uang Muka Kerja'),
(11, 'Kuasa Pengguna Anggaran'),
(12, 'PJ RPTP'),
(13, 'PJ RDHP'),
(14, 'PJ RKTM'),
(15, 'Kakelti'),
(16, 'Kasie'),
(17, 'Kasub');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_disposisi`
--

CREATE TABLE `detail_disposisi` (
  `id_kepada` int(11) NOT NULL,
  `suratmasuk_id` varchar(11) NOT NULL,
  `kepada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_disposisi`
--

INSERT INTO `detail_disposisi` (`id_kepada`, `suratmasuk_id`, `kepada`) VALUES
(34, 'SM220301', 'Kepala Sub Bagian Tata Usaha'),
(35, 'SM220301', 'Pejabat Pembuat Komitmen'),
(36, 'SM220302', 'Subkoordinator Jasa Penelitian'),
(37, 'SM220302', 'Bendahara Penerimaan'),
(38, 'SM220303', 'Subkoordinator Pelayanan Teknis'),
(39, 'SM220303', 'Pejabat Pembuat Komitmen'),
(40, 'SM220303', 'Bendahara Pengeluaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_dokumen`
--

CREATE TABLE `detail_dokumen` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` varchar(255) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_dokumen`
--

INSERT INTO `detail_dokumen` (`id_detail`, `id_transaksi`, `nama_dokumen`) VALUES
(49, 'BM2203005', '2547-5647-1-SM.pdf'),
(50, 'BM2203005', 'SKRIPSI_BAB_III_.pdf'),
(51, 'BM2203005', '10__BAB_II_-_SBCK_terbaru.pdf'),
(52, 'BM2203005', 'BAB_21.pdf'),
(53, 'BM2203005', 'Manajemen_Agribisnis_5-1.pdf'),
(54, 'BM2203005', 'kwu-tpb-modul5.pdf'),
(55, '43', 'Isi_Artikel_772230091805.pdf'),
(62, 'BK2203002', 'IMG-20190428-WA0023.jpg'),
(63, 'BK2203002', 'line_48299435944985.jpg'),
(64, 'BK2203001', 'Screenshot_(1).png'),
(65, 'BK2203001', 'Screenshot_(2).png'),
(66, 'BK2203003', 'Screenshot_(7).png'),
(67, 'BK2203003', 'Screenshot_(8).png'),
(68, 'BK2203003', 'Screenshot_(11).png'),
(69, 'BK2203003', 'Screenshot_(12).png'),
(70, 'BK2203004', 'Screenshot_(16).png'),
(71, 'BK2203004', 'Screenshot_(19).png'),
(72, 'BK2203004', 'Screenshot_(23).png'),
(73, 'BK2203004', 'Screenshot_(24).png'),
(76, 'BK2203005', 'Screenshot_(44).png'),
(77, 'BK2203005', 'Screenshot_(45).png'),
(93, 'BK2203008', 'laporan_transaksi_barang_masuk_3.pdf'),
(94, 'BK2203008', 'laporan_transaksi_barang_masuk_2.pdf'),
(106, 'BK2203009', 'laporan_transaksi_barang_keluar3.pdf'),
(179, 'BK2203010', 'disposisi_surat_80.pdf'),
(186, 'BK2203011', 'disposisi_surat_85.pdf'),
(187, 'BK2203011', 'disposisi_surat_84.pdf'),
(191, 'BKM2203005', 'disposisi_surat_65.pdf'),
(194, 'BM2203002', 'laporan_transaksi_barang_keluar.pdf'),
(195, 'BM2203002', 'laporan_transaksi_barang_masuk_10.pdf'),
(196, 'BM2203003', 'disposisi_surat_82.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penugasan`
--

CREATE TABLE `detail_penugasan` (
  `id_det_tugas` varchar(20) NOT NULL,
  `id_tugas` varchar(20) NOT NULL,
  `id_pm` varchar(20) NOT NULL,
  `hasil_tugas` text NOT NULL,
  `dok_hasil_tugas` varchar(256) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_penugasan`
--

INSERT INTO `detail_penugasan` (`id_det_tugas`, `id_tugas`, `id_pm`, `hasil_tugas`, `dok_hasil_tugas`, `status`) VALUES
('DPN2202011', 'PN220201', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202012', 'PN220201', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2202013', 'PN220201', 'PM22006', '', NULL, 'Berlangsung'),
('DPN2202021', 'PN220202', 'PM22004', '', 'ASSIGMENT_BOOK.docx', 'Terkumpul'),
('DPN2202022', 'PN220202', 'PM22006', '', NULL, 'Berlangsung'),
('DPN2202031', 'PN220203', 'PM22004', 'kjasdgkasdg', 'pdf_form_012.pdf', 'Terkumpul'),
('DPN2202041', 'PN220204', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202042', 'PN220204', 'PM22002', '', NULL, 'Berlangsung'),
('DPN2202043', 'PN220204', 'PM22004', 'gaubah file', 'Surat_TUGAS_PKL_Balai_Penelitian_Agroklimat_Hidrologi.pdf', 'Terkumpul'),
('DPN2202061', 'PN220206', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202071', 'PN220207', 'PM22002', '', NULL, 'Berlangsung'),
('DPN2202081', 'PN220208', 'PM22002', '', NULL, 'Berlangsung'),
('DPN2202082', 'PN220208', 'PM22006', '', NULL, 'Berlangsung'),
('DPN2202091', 'PN220209', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202092', 'PN220209', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2202101', 'PN220210', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2202111', 'PN220211', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202112', 'PN220211', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2202121', 'PN220212', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202122', 'PN220212', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2202131', 'PN220213', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2202132', 'PN220213', 'PM22004', 'hasil tugas', NULL, 'Terkumpul'),
('DPN2203021', 'PN220302', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2203022', 'PN220302', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2203023', 'PN220302', 'PM22111', '', NULL, 'Berlangsung'),
('DPN2203031', 'PN220303', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2203032', 'PN220303', 'PM22111', '', NULL, 'Berlangsung'),
('DPN2203041', 'PN220304', 'PM22002', '', NULL, 'Berlangsung'),
('DPN2203042', 'PN220304', 'PM22006', '', NULL, 'Berlangsung'),
('DPN2203051', 'PN220305', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2203052', 'PN220305', 'PM22002', '', NULL, 'Berlangsung'),
('DPN2203053', 'PN220305', 'PM22004', 'hai hai', '1-FRM_KESEDIAAN_PKL_TA_2122_INF.pdf', 'Terkumpul'),
('DPN2203061', 'PN220306', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2203062', 'PN220306', 'PM22002', '', NULL, 'Berlangsung'),
('DPN2203063', 'PN220306', 'PM22004', 'comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Form_Absensi_PKL.docx', 'Terkumpul'),
('DPN2203071', 'PN220307', 'PM22001', '', NULL, 'Berlangsung'),
('DPN2203072', 'PN220307', 'PM22004', 'test baru edit', 'Form_Absensi_PKL.pdf', 'Terkumpul'),
('DPN2203073', 'PN220307', 'PM22113', '', NULL, 'Berlangsung'),
('DPN2203081', 'PN220308', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2203091', 'PN220309', 'PM22004', 'PENUGSAN TEST', NULL, 'Terkumpul'),
('DPN2203101', 'PN220310', 'PM22004', '', NULL, 'Berlangsung'),
('DPN2203111', 'PN220311', 'PM22003', '', NULL, 'Berlangsung'),
('DPN2203112', 'PN220311', 'PM22005', '', NULL, 'Berlangsung'),
('DPN2203113', 'PN220311', 'PM22009', '', NULL, 'Berlangsung'),
('DPN2203114', 'PN220311', 'PM22007', '', NULL, 'Berlangsung'),
('DPN2203115', 'PN220311', 'PM22112', '', NULL, 'Berlangsung'),
('DPN2203116', 'PN220311', 'PM22110', '', NULL, 'Berlangsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_role`
--

CREATE TABLE `detail_role` (
  `id_detail_role` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `role` varchar(55) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `id_status_peg` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_role`
--

INSERT INTO `detail_role` (`id_detail_role`, `id_role`, `role`, `nip`, `nama_pegawai`, `foto`, `id_golongan`, `id_status_peg`, `id_pangkat`, `id_jabatan`, `id_divisi`, `nik`, `email`, `password`, `no_whatsapp`) VALUES
(26, 8, 'User', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(27, 1, 'Admin ASN', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(28, 2, 'Admin Perjalanan Dinas', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(29, 3, 'Admin Inventaris', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(30, 6, 'Admin Laporan Magang', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(31, 5, 'Admin Disposisi', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(32, 7, 'Admin Buku Tamu', '196803301994031001', 'Dr. Budi Kartiwa', 'default.png', 17, 3, 10, 5, 2, '3201293003680001', 'lugasmunaya@gmail.com', '123', '6281235062988  '),
(33, 8, 'User', '196710081994032013', 'Dr. Woro Estiningtyas', 'default.png', 15, 3, 10, 5, 2, '3201294810670003', 'freepik1@gmail.com', '123', '6281235062988'),
(34, 8, 'User', '11605806119105', 'Lugas Munayasika', 'default.png', 4, 3, 2, 8, 2, '111625124121341', 'lugas@gmail.com', '123', '6281973034079'),
(48, 8, 'User', 'HNR1232211222', 'Ujang Suseno', 'default.png', 1, 8, 1, 6, 2, '129719737913', 'ujang@gmail.com', '123', '62855558'),
(49, 8, 'User', 'HNR932727', 'Asep Pisan', 'default.png', 1, 8, 1, 6, 2, '21318312', 'asep@gmail.com', '123', '62856546');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tugas`
--

CREATE TABLE `detail_tugas` (
  `id_detail_tugas` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_tugas`
--

INSERT INTO `detail_tugas` (`id_detail_tugas`, `id_tugas`, `nip`) VALUES
(45, 12, '196803301994031001'),
(46, 15, '196901241998032001'),
(47, 11, '196411291990032002'),
(48, 17, '196803301994031001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(2, 'Alat Tulis'),
(3, 'Alat Makan'),
(4, 'Tas'),
(8, 'Cenderamata'),
(12, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_barang`) VALUES
(1, 'Peralatan dan Mesin (132111)'),
(2, 'Gedung dan Bangunan (133111)'),
(4, 'Irigasi (134112) '),
(5, 'Jaringan (134113)'),
(6, 'Aset tetap lainnya (135121)'),
(7, 'Aset tetap yang tidak digunakan (166112)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_akhir`
--

CREATE TABLE `laporan_akhir` (
  `id_lapak` varchar(20) NOT NULL,
  `tgl_up_lapak` date NOT NULL,
  `judul_lapak` text NOT NULL,
  `abstrak_lapak` text NOT NULL,
  `dok_lapak` varchar(256) NOT NULL,
  `id_pm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_akhir`
--

INSERT INTO `laporan_akhir` (`id_lapak`, `tgl_up_lapak`, `judul_lapak`, `abstrak_lapak`, `dok_lapak`, `id_pm`) VALUES
('LA220301', '2022-03-07', 'edit emaill3', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1-FRM_KESEDIAAN_PKL_TA_2122_INF.pdf', 'PM22001'),
('LA220302', '2022-03-08', 'Update model juduledutt', 'edit editUpdate model judulUpdate model judulUpdate model judulUpdate model judul \r\nUpdate model judulUpdate model judulUpdate model judul\r\nUpdate model judulUpdate model judul\r\n\r\nUpdate model judulUpdate model judulUpdate model judulUpdate model judul\r\n\r\n\r\nUpdate model judulUpdate model judulUpdate model judulUpdate model judulUpdate model judulUpdate model judulUpdate model judulUpdate model judul', 'TugasPertemuan3_J3C119027_AZZAHRA_RAMADIANA_A.pdf', 'PM22113'),
('LA220303', '2022-03-10', 'tes laporan akhir edit', 'ayayaya', 'Form_Absensi_PKL6.pdf', 'PM22004'),
('LA220304', '2022-03-10', 'INI JUDUL AMAIRA RASYIDAHHHH', 'ABSTFAKADKJHAKSDHA', 'pertemuan1213_-terkunci.pdf', 'PM22110'),
('LA220305', '2022-03-10', 'JUDUL RINEEEEEEEEEEEEE', 'YAYA', 'pertemuan11_.pdf', 'PM22009'),
('LA220306', '2022-03-10', 'JUDUL RINEEEEEEEEEEEEEEEEEEEEEEEEEE', 'YAYA', 'document.pdf', 'PM22008');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_mingguan`
--

CREATE TABLE `laporan_mingguan` (
  `id_lap_ming` varchar(20) NOT NULL,
  `tgl_lap_ming` date NOT NULL,
  `isi_lap_ming` text NOT NULL,
  `dok_lap_ming` varchar(256) DEFAULT NULL,
  `id_pm` varchar(20) NOT NULL,
  `review_lap` text NOT NULL,
  `status_rev` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_mingguan`
--

INSERT INTO `laporan_mingguan` (`id_lap_ming`, `tgl_lap_ming`, `isi_lap_ming`, `dok_lap_ming`, `id_pm`, `review_lap`, `status_rev`) VALUES
('LM220201', '2022-02-11', 'HALO HALO HALO 3 MARET', 'filebaruww.pdf', 'PM22004', 'menulis review', 'read'),
('LM220202', '2022-02-09', 'testtestetst', 'pdf_form_012_J3C119027_signed.pdf', 'PM22004', 'ini perbarui', 'read'),
('LM220203', '2022-02-11', 'JJGJHGJ', 'pdf_form_012.pdf', 'PM22004', '', ''),
('LM220204', '2022-02-18', 'asfasdfad', 'Profil_Instansi_Balitklimat.pdf', 'PM22003', '', ''),
('LM220205', '2022-02-22', 'adfaedare', 'pdf_form_012_J3C119027_signed.pdf', 'PM22003', '', ''),
('LM220206', '2022-02-18', 'asdaera', '1-FRM_KESEDIAAN_PKL_TA_2122_INF.pdf', 'PM22002', 'review', 'sent'),
('LM220207', '2022-02-26', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam pellentesque auctor. Mauris luctus mi leo, eget vulputate augue dignissim ac. Nulla auctor tortor tortor, ac finibus magna scelerisque non. Suspendisse ultrices justo eros, quis mollis nisi condimentum ut. Curabitur eu dictum arcu, a luctus mi. Morbi ac convallis libero. Duis et varius ipsum. Aenean euismod neque vel arcu semper vulputate. Quisque facilisis ipsum lectus, id molestie erat pretium nec. Curabitur et vestibulum ante.\r\n\r\nAenean eget mauris at est viverra ornare sed vitae sapien. Quisque sed purus iaculis, tincidunt purus in, porttitor nulla. Sed in nunc eu erat finibus semper vel a risus. Phasellus sagittis tellus in lectus efficitur fringilla. Quisque lacinia sed ipsum in pulvinar. Cras massa odio, gravida non metus ac, viverra commodo velit. Donec varius ante eu nunc dapibus, eget scelerisque lorem dapibus. Pellentesque non finibus elit, quis lacinia lorem. Maecenas pellentesque justo et ipsum volutpat, aliquam sodales ligula dignissim. Cras non tincidunt felis. Pellentesque hendrerit nunc et arcu tempor, sed bibendum leo congue. Vivamus et mi sed metus suscipit efficitur quis non nisi. Integer fermentum odio nec risus malesuada consequat. Suspendisse potenti. Nullam consectetur rhoncus tellus semper vehicula.\r\n\r\nSuspendisse potenti. Pellentesque vestibulum mauris est, eu facilisis lacus pulvinar et. Morbi lorem erat, lobortis vitae convallis nec, maximus sit amet eros. In lacinia sit amet nunc eu placerat. Aenean dapibus cursus nunc, quis ullamcorper diam finibus ac. Aliquam augue nisi, blandit id felis a, posuere tristique leo. Aliquam ac odio dictum lacus mollis dictum a vel nisi. Aenean dapibus tincidunt sem et sagittis. Donec commodo tortor egestas, dapibus est sed, fringilla dolor. Donec in sodales nibh. Nullam tempor lectus quis ipsum placerat interdum. Integer luctus neque eget quam aliquet, nec ornare nisi maximus. Aliquam in sapien sed ligula ultrices interdum. Nam dignissim, quam sit amet vestibulum ornare, dui nunc tempus neque, a rhoncus risus elit vel nibh. Nam vel vulputate mauris. ', 'Balai_Penelitian_Agroklimat_Hidrologi.pdf', 'PM22002', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believab\r\n\r\n\r\nle. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repea', 'sent'),
('LM220208', '2022-02-26', 'hohohohoohoh', 'J3C118143-04-Fiya_Mahdaula-Pendahuluan.pdf', 'PM22004', '', ''),
('LM220209', '2022-02-19', 'ini dr halo halo', 'Proyek_Aplikasi_WebGIS.pdf', 'PM22006', '', ''),
('LM220210', '2022-02-17', 'ini dr halo halo jg', NULL, 'PM22006', '', ''),
('LM220211', '2022-02-16', 'Truncates a string to the number of characters specified. It maintains the integrity of words so the character count may be slightly more or less than what you specify.\r\nTruncates a string to the number of characters specified. It maintains the integrity of words so the character count may be slightly more or less than what you specify.\r\nTruncates a string to the number of characters specified. It maintains the integrity of words so the character count may be slightly more or less than what you specify.\r\nTruncates a string to the number of characters specified. It maintains the integrity of words so the character count may be slightly more or less than what you specify.\r\nTruncates a string to the number of characters specified. It maintains the integrity of words so the character count may be slightly more or less than what you specify.', 'Surat_TUGAS_PKL_Balai_Penelitian_Agroklimat_Hidrologi3.pdf', 'PM22004', '', ''),
('LM220212', '2022-02-18', ' yoyo', 'Profil_Instansi_Balitklimat1.pdf', 'PM22004', '', ''),
('LM220213', '2022-02-18', 'aaaa', NULL, 'PM22004', '', ''),
('LM220214', '2022-02-18', 'azzahra', '2.pdf', 'PM22004', '', ''),
('LM220215', '2022-02-25', 'tes ga ada file', NULL, 'PM22006', '', ''),
('LM220216', '2022-02-22', 'tes ada file', '7.pdf', 'PM22006', '', ''),
('LM220217', '2022-02-21', 'test file baru', 'filebaru.pdf', 'PM22004', '', ''),
('LM220218', '2022-02-24', 'hi hi hi', 'BDA4.pdf', 'PM22004', '', ''),
('LM220301', '2022-03-09', 'comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham', 'Form_Absensi_PKL.pdf', 'PM22004', 'comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham\r\n&lt;a href=&quot;&lt;?= base_url(\'pegawai/laporan/hapus/\' . $detail-&gt;id_lap_ming) ?&gt;&quot; class=&quot;btn btn-danger float-right&quot;&gt;Hapus&lt;/a&gt;', 'read'),
('LM220303', '2022-04-12', 'ini lraporan update model tanpa pdf jd ada', 'pertemuan_3_.pdf', 'PM22113', 'yo', 'sent'),
('LM220304', '2022-03-31', 'ini buat hari ini', NULL, 'PM22113', 'ini review buat hari ini', 'read'),
('LM220305', '2022-03-17', 'test notif', NULL, 'PM22004', 'tambah review edit', 'read'),
('LM220307', '2022-03-29', 'TEST ALERT', NULL, 'PM22004', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif_peserta`
--

CREATE TABLE `notif_peserta` (
  `id_np` varchar(20) NOT NULL,
  `tgl_notif` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `id_aksi` varchar(20) NOT NULL,
  `status_np` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notif_peserta`
--

INSERT INTO `notif_peserta` (`id_np`, `tgl_notif`, `jenis`, `id_aksi`, `status_np`) VALUES
('NP2202004', '0000-00-00', 'Review', 'LM220202', 'read'),
('NP2202005', '0000-00-00', 'PReview', 'LM220202', 'read'),
('NP2202007', '0000-00-00', 'Review', 'DPN2202091', 'sent'),
('NP2202008', '0000-00-00', 'Tugas', 'DPN2202092', 'read'),
('NP2202009', '0000-00-00', 'Review', 'PN220210', 'sent'),
('NP2202010', '0000-00-00', 'Tugas', 'DPN2202111', 'sent'),
('NP2202011', '0000-00-00', 'Tugas', 'DPN2202112', 'read'),
('NP2202013', '0000-00-00', 'Tugas', 'DPN2202121', 'sent'),
('NP2202014', '0000-00-00', 'Tugas', 'DPN2202122', 'read'),
('NP2202015', '0000-00-00', 'Review', 'LM220207', 'sent'),
('NP2202016', '0000-00-00', 'Tugas', 'DPN2202131', 'sent'),
('NP2202017', '0000-00-00', 'Tugas', 'DPN2202132', 'read'),
('NP2202018', '0000-00-00', 'Review', 'LM220201', 'read'),
('NP2203001', '0000-00-00', 'Tugas', 'DPN2203021', 'sent'),
('NP2203002', '0000-00-00', 'Tugas', 'DPN2203022', 'read'),
('NP2203003', '0000-00-00', 'Tugas', 'DPN2203023', 'sent'),
('NP2203004', '2022-03-06', 'Tugas', 'DPN2203031', 'read'),
('NP2203005', '2022-03-06', 'Tugas', 'DPN2203032', 'sent'),
('NP2203006', '2022-03-06', 'UTugas', 'DPN2203051', 'sent'),
('NP2203007', '2022-03-06', 'UTugas', 'DPN2203052', 'sent'),
('NP2203008', '2022-03-07', 'UTugas', 'DPN2203051', 'sent'),
('NP2203009', '2022-03-07', 'UTugas', 'DPN2203052', 'sent'),
('NP2203010', '2022-03-07', 'UTugas', 'DPN2203051', 'sent'),
('NP2203011', '2022-03-07', 'UTugas', 'DPN2203052', 'sent'),
('NP2203012', '2022-03-07', 'UTugas', 'DPN2203053', 'read'),
('NP2203013', '2022-03-07', 'Tugas', 'DPN2203061', 'sent'),
('NP2203014', '2022-03-07', 'Tugas', 'DPN2203062', 'sent'),
('NP2203015', '2022-03-07', 'UTugas', 'DPN2203061', 'sent'),
('NP2203016', '2022-03-07', 'UTugas', 'DPN2203062', 'sent'),
('NP2203017', '2022-03-07', 'UTugas', 'DPN2203063', 'read'),
('NP2203018', '2022-03-08', 'Tugas', 'DPN2203071', 'sent'),
('NP2203019', '2022-03-08', 'Tugas', 'DPN2203072', 'read'),
('NP2203020', '2022-03-08', 'UTugas', 'DPN2203071', 'sent'),
('NP2203021', '2022-03-08', 'UTugas', 'DPN2203072', 'read'),
('NP2203022', '2022-03-08', 'UTugas', 'DPN2203073', 'read'),
('NP2203023', '2022-03-08', 'Review', 'LM220206', 'sent'),
('NP2203025', '2022-03-08', 'Review', 'LM220301', 'read'),
('NP2203026', '2022-03-08', 'Review', 'LM220304', 'read'),
('NP2203027', '2022-03-09', 'UTugas', 'DPN2203071', 'sent'),
('NP2203028', '2022-03-09', 'UTugas', 'DPN2203072', 'read'),
('NP2203029', '2022-03-09', 'UTugas', 'DPN2203073', 'sent'),
('NP2203030', '2022-03-09', 'UReview', 'LM220301', 'read'),
('NP2203031', '2022-03-09', 'UReview', 'LM220301', 'read'),
('NP2203032', '2022-03-09', 'UReview', 'LM220207', 'sent'),
('NP2203033', '2022-03-09', 'Tugas', 'DPN2203081', 'read'),
('NP2203034', '2022-03-09', 'Tugas', 'DPN2203091', 'read'),
('NP2203035', '2022-03-09', 'UTugas', 'DPN2203091', 'read'),
('NP2203036', '2022-03-09', 'Review', 'LM220305', 'read'),
('NP2203037', '2022-03-09', 'UReview', 'LM220305', 'read'),
('NP2203038', '2022-03-10', 'Tugas', 'DPN2203101', 'read'),
('NP2203039', '2022-03-10', 'UTugas', 'DPN2203101', 'sent'),
('NP2203040', '2022-03-10', 'Review', 'LM220303', 'sent'),
('NP2203041', '2022-03-11', 'Tugas', 'DPN2203111', 'sent'),
('NP2203042', '2022-03-11', 'Tugas', 'DPN2203112', 'sent'),
('NP2203043', '2022-03-11', 'Tugas', 'DPN2203113', 'sent'),
('NP2203044', '2022-03-11', 'Tugas', 'DPN2203114', 'sent'),
('NP2203045', '2022-03-11', 'Tugas', 'DPN2203115', 'sent'),
('NP2203046', '2022-03-11', 'Tugas', 'DPN2203116', 'sent');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaan_mobil`
--

CREATE TABLE `penggunaan_mobil` (
  `id_penggunaan` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `tgl_pemakaian` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_pemakaian` varchar(11) DEFAULT NULL,
  `perjalanan` varchar(50) NOT NULL,
  `status_penggunaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggunaan_mobil`
--

INSERT INTO `penggunaan_mobil` (`id_penggunaan`, `nip`, `id_kendaraan`, `tgl_pemakaian`, `tgl_kembali`, `lama_pemakaian`, `perjalanan`, `status_penggunaan`) VALUES
(7, 'HNR1232211222', 1, '2022-03-09', '2022-03-09', '5', 'Dalam Kota', 2),
(8, 'HNR932727', 4, '2022-03-09', '2022-03-09', '3', 'Dalam Kota', 2),
(9, 'HNR1232211222', 2, '2022-03-11', '2022-03-11', '5', 'Dalam Kota', 2),
(10, 'HNR1232211222', 5, '2022-03-15', '2022-03-15', '3', 'Dalam Kota', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan_alat`
--

CREATE TABLE `perbaikan_alat` (
  `id_perbaikan` int(11) NOT NULL,
  `idalat` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tglperbaikan` date NOT NULL,
  `tglselesai` date NOT NULL,
  `qty` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perbaikan_alat`
--

INSERT INTO `perbaikan_alat` (`id_perbaikan`, `idalat`, `jenis`, `tempat`, `tglperbaikan`, `tglselesai`, `qty`, `status`) VALUES
(1, 2, 'Tidak bisa hidup', 'bengkel', '2022-02-24', '2022-03-01', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan_barang`
--

CREATE TABLE `perbaikan_barang` (
  `id_perbaikan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tglperbaikan` date NOT NULL,
  `tglselesai` date NOT NULL,
  `qty` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perbaikan_barang`
--

INSERT INTO `perbaikan_barang` (`id_perbaikan`, `id_barang`, `jenis`, `tempat`, `tglperbaikan`, `tglselesai`, `qty`, `status`) VALUES
(4, 50, 'Mati total', 'Gudang kamera', '2022-02-20', '2022-02-27', 1, 2),
(5, 50, 'Lensa Buram', 'Canon Service Center', '2022-02-24', '2022-03-02', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_magang`
--

CREATE TABLE `peserta_magang` (
  `id_pm` varchar(50) NOT NULL,
  `nama_pm` varchar(150) NOT NULL,
  `jk_pm` varchar(8) NOT NULL,
  `email_pm` varchar(150) NOT NULL,
  `no_wa_pm` varchar(20) NOT NULL,
  `jns_magang` varchar(10) NOT NULL,
  `asal_instansi_pm` varchar(150) NOT NULL,
  `jurusan_pm` varchar(128) NOT NULL,
  `pi_pm` varchar(150) NOT NULL,
  `no_wa_pi_pm` varchar(20) NOT NULL,
  `tgl_mli_pm` date NOT NULL,
  `tgl_sls_pm` date NOT NULL,
  `s_pengajuan_pm` varchar(150) NOT NULL,
  `s_penerimaan_pm` varchar(150) NOT NULL,
  `pembimbing_balai` varchar(256) NOT NULL,
  `kata_sandi_pm` varchar(256) NOT NULL,
  `status_pm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_magang`
--

INSERT INTO `peserta_magang` (`id_pm`, `nama_pm`, `jk_pm`, `email_pm`, `no_wa_pm`, `jns_magang`, `asal_instansi_pm`, `jurusan_pm`, `pi_pm`, `no_wa_pi_pm`, `tgl_mli_pm`, `tgl_sls_pm`, `s_pengajuan_pm`, `s_penerimaan_pm`, `pembimbing_balai`, `kata_sandi_pm`, `status_pm`) VALUES
('PM22001', 'AZZAHRA RAMADIANA ARIFANI', 'Wanita', 'albumfotoku2aaa@gmail.com', '2147483647', 'Siswa', 'xsda', 'ijurusan', 'asdjabsdja', '231231', '2022-02-03', '2022-03-03', 'Pengajuan.pdf', 'Pengajuan.pdf', '196401211990031002', '$2y$10$HIlVr6nNCsbCCJQ.kQk4zuq5uZGo9Pu8o2MTycMYXhqIBeHO4aDbu', 'selesai'),
('PM22002', 'Arima', 'Wanita', 'tugastugasAAku01@gmail.com', '11111', 'Siswa', 'xsda', 'ijurusan', 'asdas', '0', '2022-02-09', '2022-02-16', 'Surat_TUGAS_PKL_Balai_Penelitian_Agroklimat_Hidrologi.pdf', 'Profil_Instansi_Balitklimat2.pdf', '196401211990031002', '$2y$10$pNbY72one63X6i7uFHGRvOJsfgdC1UROh//v8heHNlT1nh1C6ffke', 'selesai'),
('PM22003', 'Amaira', 'Wanita', 'tugastugasku01@gmail.com', '123849523', 'Siswa', 'dfad', 'asdasd', 'asdasd', '1312434', '2022-02-11', '2022-02-28', 'Surat_TUGAS_PKL_Balai_Penelitian_Agroklimat_Hidrologi6.pdf', 'Profil_Instansi_Balitklimat8.pdf', '195805161993032002', '$2y$10$lgFydGQRwGOODt6ta211Ie2Syo6rEhJ7i.sdHSrQZK0lAXloB6.fq', 'selesai'),
('PM22004', 'ini user', 'Pria', 'azzahrara.0210@gmail.com', '088975937747', 'Mahasiswa', 'xsdaaa', 'asdasda', 'xsdaaa', '081283327847', '2022-02-12', '2022-03-17', 'filebaru.pdf', 'DEATH_NOTE1.pdf', '196401211990031002', '$2y$10$VVOsl.PoNHLDdhzNB0IOr.bPLViPUZq14ePQ6CoOSAqqHMxyKStwy', 'berlangsung'),
('PM22005', 'amaira rasyidah', 'Wanita', 'amai@gmail.com', '2147483647', 'Siswa', 'asal insdatra', 'jrururuur', 'pbbbei', '423434123', '2022-02-01', '2022-02-28', 'J3C118156-04-Nadya_Rahma_Lestanti-pendahuluan.pdf', 'JC3116009-05-Aisyah-Pendahuluan.pdf', '195805161993032002', '$2y$10$08Unb1Y0R6uTTZI74PKNYebKG55n8xPUULCMqyhwu9gG7kIfXzPrK', 'selesai'),
('PM22006', 'halo halo', 'Wanita', 'halohalo@gmail.com', '12312312', 'Mandiri', 'asal insdatra', 'jrururuur', 'pbbbei', '21331231', '2022-02-01', '2022-02-28', '221021_Progres_kel07_INFB.pdf', 'Proyek_Aplikasi_WebGIS1.pdf', '196401211990031002', '$2y$10$aGzqLplfYAI3kb1u.ulagOEGRMBWKIQtf3DroqY5WQcymNYQzv5AG', 'berlangsung'),
('PM22007', 'magang mandiri', 'Pria', 'magangmandiri@gmail.com', '2147483647', 'Mandiri', 'ia', 'iyawawa', '', '0', '2022-02-21', '2022-02-15', 'BDA4.pdf', 'TUGAS_PROBSTAT_1.pdf', '195805161993032002', '$2y$10$0olnIpO2R4oM.acibQqyQ.gXL9at2tbjTA4sznT.Y6pFzrps7DLCS', 'berlangsung'),
('PM22008', 'nojk', '', 'rinealfi@gmail.com', '2147483647', 'Mahasiswa', 'asal insdatra', 'asdasda', 'asdasdas', '0', '2022-02-23', '2022-04-20', 'Doc1.pdf', 'Doc11.pdf', '196710081994032013', '$2y$10$6O9xhWBg.Q4C8Tz1wuhndu4.aHSZ18etJsi7knrlThQHCZdwj0uRC', 'berlangsung'),
('PM22009', 'confirm', '', 'rinealfi.09@gmail.com', '2147483647', 'Mahasiswa', 'asal insdatra', 'asdasda', 'pbbbei', '21331231', '2022-02-11', '2022-03-31', 'yg_ini.pdf', 'DEATH_NOTE.pdf', '195805161993032002', '$2y$10$/NQIYcvtsRUxIYcVd57Fj.j6XqX4p9aDQULFjKVFpqFFIlU4Y4QMO', 'selesai'),
('PM22110', 'test surat', '', 'isamaira@gmail.com', '2147483647', 'Mandiri', 'asal insdatra', 'asdasda', '', '0', '2022-02-25', '2022-02-28', 'TUGAS_PROBSTAT_11.pdf', 'J3C11027_Azzahra_Ramadiana_A1.pdf', '195805161993032002', '$2y$10$Vs7VY4PR9zsk2DQYBJXC1.csFrNwag431j3UrSimg3y6fRQaZfTZe', 'selesai'),
('PM22111', 'ini test model baru juga cek idpm', '', 'cekidpm@gmail.com', '812334123', 'Siswa', 'dfad', 'asdasd', 'asdas', '231231', '2022-03-15', '2022-03-31', 'Balai_Penelitian_Agroklimat_Hidrologi.pdf', 'pdf_form_012_J3C119027_signed1.pdf', '196401211990031002', '$2y$10$QskTWOLLqjD3IyTBkGavS.Mx07SrXexqY0g9gb3Y2gPVlHk2O/0La', 'berlangsung'),
('PM22112', 'test akhir', '', 'testkagir@gmai.com', '2147483647', 'Mandiri', 'dfad', 'asdasd', '', '0', '2022-03-08', '2022-03-17', '1-FRM_KESEDIAAN_PKL_TA_2122_INF1.pdf', 'Balai_Penelitian_Agroklimat_Hidrologi1.pdf', '195805161993032002', '$2y$10$c8PoB9DBm86j89cKkDOYM.Yfrta509rssOaj/agmeQjYaxacePkFW', 'selesai'),
('PM22113', 'update model ', '', 'updatemodel@gmail.com', '0812334123', 'Siswa', 'asal instansi ', 'jurusan ', 'pembimbing ', '088975937747', '2022-02-01', '2022-03-23', 'pertemuan8_.pdf', 'pertemuan9_10_.pdf', '196401211990031002', '$2y$10$6G.A.rcXBImAW.fbUrSXkeED11Hcs.L8HlK6DrH93g8R1YXFQR.Ne', 'berlangsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_alat`
--

CREATE TABLE `pinjam_alat` (
  `id_pinjam` int(11) NOT NULL,
  `idalat` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglselesai` date NOT NULL,
  `qty` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam_alat`
--

INSERT INTO `pinjam_alat` (`id_pinjam`, `idalat`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `keterangan`, `status`) VALUES
(8, 3, 'Dr. Elza Surmaini', '2022-03-13', '2022-03-13', 1, 'RPIK', 'Jakarta', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_barang`
--

CREATE TABLE `pinjam_barang` (
  `id_pinjam` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglselesai` date NOT NULL,
  `qty` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam_barang`
--

INSERT INTO `pinjam_barang` (`id_pinjam`, `id_barang`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `status`) VALUES
(14, 6, 'Robbi', '2022-02-12', '2022-02-16', 1, 'PKL', 'Bogor', 2),
(36, 1, 'Reza Fahneri', '2022-03-02', '2022-03-10', 2, 'Pelatihan', 'Bandung', 2),
(37, 9, 'Reza Fahneri', '2022-03-01', '2022-03-04', 1, 'Gotong Royong', 'Balai Penelitian Agroklimat dan Hidrologi ', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_alat`
--

CREATE TABLE `riwayat_alat` (
  `id_riwayat` int(11) NOT NULL,
  `idalat` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglselesai` date NOT NULL,
  `qty` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_alat`
--

INSERT INTO `riwayat_alat` (`id_riwayat`, `idalat`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `keterangan`, `status_riwayat`) VALUES
(1, 2, 'Tono', '2022-02-25', '2022-03-02', 1, 'RPIK', 'Jakarta', NULL, 3),
(2, 6, 'Tono', '2022-02-25', '2022-02-28', 1, 'Liburan', 'Bandung', NULL, 3),
(3, 4, 'Reza Fahneri', '2022-02-25', '2022-03-04', 1, 'Pelatihan', 'Bandung', NULL, 3),
(4, 7, 'Smit', '2022-03-01', '2022-03-04', 1, 'Pemantauan Lahan', 'Bogor', 'Telah melakukan pembayaran sebesar Rp.150.000,00', 3),
(5, 2, 'reza', '2022-03-11', '2022-03-16', 1, 'PKL', 'Bogor', 'Pembayaran sebesar 10000 telah diterima', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_disposisi`
--

CREATE TABLE `riwayat_disposisi` (
  `id_riwayat` int(11) NOT NULL,
  `suratmasuk_id` varchar(25) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_disposisi`
--

INSERT INTO `riwayat_disposisi` (`id_riwayat`, `suratmasuk_id`, `isi`, `catatan`, `user`, `nip`) VALUES
(50, 'SM220301', 'Minta Saran/Pendapat/Komentar', '-', 'Dr. Ir. A. Arivin Rivaie, M.Sc', ''),
(51, 'SM220302', 'Minta Saran/Pendapat/Komentar', '', 'Dr. Ir. A. Arivin Rivaie, M.Sc', ''),
(52, 'SM220303', 'Untuk Diketahui/Digunakan Seperlunya', '-', 'Dr. Ir. A. Arivin Rivaie, M.Sc', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_peminjaman`
--

CREATE TABLE `riwayat_peminjaman` (
  `id_riwayat` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglselesai` date NOT NULL,
  `qty` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_peminjaman`
--

INSERT INTO `riwayat_peminjaman` (`id_riwayat`, `id_barang`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `keterangan`, `status_riwayat`) VALUES
(3, 50, 'azer', '2022-02-22', '2022-03-02', 2, 'Liburan', 'Padang', NULL, 3),
(5, 9, 'Reza Fahneri', '2022-02-23', '2022-02-25', 3, 'Gotong Royong', 'Balai Penelitian Agroklimat dan Hidrologi ', NULL, 3),
(6, 5, 'Reza', '2022-02-12', '2022-02-14', 1, 'Gotong Royong', 'Balai Penelitian Agroklimat dan Hidrologi ', NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_surat`
--

CREATE TABLE `riwayat_surat` (
  `id_riwayatsurat` int(11) NOT NULL,
  `suratmasuk_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_surat`
--

INSERT INTO `riwayat_surat` (`id_riwayatsurat`, `suratmasuk_id`) VALUES
(13, 'SM220301'),
(14, 'SM220302'),
(15, 'SM220303');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `nama_satuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id`, `nama_satuan`) VALUES
(1, 'Lembar'),
(2, 'Pcs'),
(4, 'Unit'),
(5, 'Lusin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan_barang`
--

CREATE TABLE `satuan_barang` (
  `id_satuan` int(11) NOT NULL,
  `satuan_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `satuan_barang`
--

INSERT INTO `satuan_barang` (`id_satuan`, `satuan_barang`) VALUES
(1, 'Unit'),
(2, 'Buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sifat_surat`
--

CREATE TABLE `sifat_surat` (
  `id_sifatsurat` int(11) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sifat_surat`
--

INSERT INTO `sifat_surat` (`id_sifatsurat`, `sifat_surat`) VALUES
(1, 'Penting'),
(3, 'Rahasia');

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
(1, 'Tidak Ada'),
(3, 'PNS'),
(4, 'PNS/TB'),
(5, 'CPNS'),
(7, 'PPNPN'),
(8, 'OH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_perjalanan`
--

CREATE TABLE `status_perjalanan` (
  `id_status_perjalanan` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `status_perjalanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_perjalanan`
--

INSERT INTO `status_perjalanan` (`id_status_perjalanan`, `nip`, `nama_pegawai`, `id_jabatan`, `status_perjalanan`) VALUES
(3, '196901241998032001', 'Dr. Elza Surmaini', 2, 0),
(12, '196803301994031001', 'Dr. Budi Kartiwa', 5, 0),
(13, '196710081994032013', 'Dr. Woro Estiningtyas', 5, 0),
(14, '11605806119105', 'Lugas Munayasika', 8, 0),
(28, 'HNR1232211222', 'Ujang Suseno', 6, 1),
(29, 'HNR932727', 'Asep Pisan', 6, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_alat`
--

CREATE TABLE `stok_alat` (
  `idalat` int(11) NOT NULL,
  `namaalat` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `kondisi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok_alat`
--

INSERT INTO `stok_alat` (`idalat`, `namaalat`, `deskripsi`, `stock`, `image`, `kondisi`) VALUES
(2, 'GPS RTK', '2 Set Box + 2 Tripod', 1, 'b60fd606f3ba348e20cb746c00006dd2.png', 'Baik'),
(3, 'GPS Handle', '1 Set', 3, '6c2868edc884da24572c9850820f8b7d.png', 'Baik'),
(4, 'Geoscanner', 'Receiver + 3 Box Ground Wire', 1, '9e67c205bf3ae5a293f86bd8f06ccce1.png', 'Baik'),
(5, 'Current Meter', '1 Set', 2, '88f0cc0a6a08a5e05d2399a55263724c.png', 'Baik'),
(6, 'Drone Mavic 2 Pro', '1 Set', 1, '54d2f88075ffb05dec79f2f9dc851441.png', 'Baik'),
(7, 'Drone UAV', '1 Set', 1, 'fe410f06730b2eb5835c3d5eb292acc9.png', 'Baik'),
(8, 'Tripod', '1 Set', 3, 'abd9a7d46c4a19c19843198574afbaf4.png', 'Baik'),
(9, 'Total Station (TS)', '1 Set + charger + 1 Tripod', 1, '71db7a6e8843a17f6a25d7392606009e.png', 'Baik'),
(10, 'Handy Talkie (HT)', '1 Set + charger', 6, '4230aea1c769c8719e13a92ca4066f8e.png', 'Baik'),
(11, 'Meteran 100 m', '1 Set', 1, '382530a6bd00a48c7169e1276469b092.png', 'Baik'),
(12, 'Charger Aki', '1 Set', 1, '9f2a1e1a21fc7266cbef5eb9df18ba54.png', 'Baik'),
(13, 'Sprinter', '1 Set', 1, 'e8fd330da22334dfa03e8f7cc822f809.png', 'Baik'),
(14, 'Theodolite', '1 Set', 1, '5c6aea0282bba2001b905f7827f392d8.png', 'Baik'),
(15, 'Tang Keet', '1 Box', 1, 'a4860855635a8146db76ad60d38177f5.png', 'Baik'),
(16, 'Prisma', '1 Set', 1, 'fa7807cb8c5451a4fddbf3f8ee9f5e0f.png', 'Baik'),
(17, 'Soil Moisture', '1 Set', 1, 'e5eb4012ba08808b09f2c3f234fbda70.png', 'Baik'),
(18, 'Hand Bor', '1 Set', 1, 'cb802210d1009bb76e4ca88b20fdc836.png', 'Baik'),
(19, 'Kompas', '1 Set', 4, '71b1cf6773d064c78ad1fd66bc39e3ff.png', 'Baik'),
(20, 'Water Quality', '1 Set', 1, '75823687adc82b1510983bf45a8a0070.png', 'Baik'),
(21, 'Rambu Ukur', '1 Set', 1, '83c3533740cf19d9a155e7ac29bd3f44.png', 'Baik'),
(22, 'Piezometer', '1 Set', 1, '54eb03ccdb8cf25531d907e1b5f338a1.png', 'Baik'),
(23, 'Hawkeye Sonar', '1 Set', 2, '486e55849436f9f727b4b6b1c9612ecd.png', 'Baik'),
(24, 'River Surveyor', '1 Set', 1, '1e101bd9ba73f514910b6097fb876893.png', 'Baik'),
(25, 'SapFlow', '1 Set', 1, '23826afdde388e4f032129b7ff48fb77.jpg', 'Baik'),
(26, 'Terrameter', '1 Set', 1, '29d521427faecb20b1b4394366797cbf.png', 'Baik'),
(29, 'Ultrasonic flowmeter', '1 Set', 1, 'b05914c86a6200bc0396512ec2a8b7d5.png', 'Baik'),
(30, 'Battery / Accu', '1 Unit', 1, '481fabb7528a2a5f87582363055b96fe.png', 'Baik'),
(31, 'Kontak Gauge', '1 Set', 1, 'd6ae9bf42b29223a897105d0ca929565.jpg', 'Baik'),
(33, 'Bor Tangan Bosch', '1 Set + Box', 1, '5ee8c906af74020d189e5995298bf4e1.png', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id_barang` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `satuan_barang` varchar(255) DEFAULT NULL,
  `jumlah_barang` int(255) NOT NULL,
  `kondisi_barang` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok_barang`
--

INSERT INTO `stok_barang` (`id_barang`, `kode`, `gambar`, `nama_barang`, `jenis_barang`, `satuan_barang`, `jumlah_barang`, `kondisi_barang`, `keterangan`) VALUES
(1, '3.02.01.02.003', 'innova.png', 'Mini Bus (Penumpang 14 Orang Kebawah)', 'Peralatan dan Mesin (132111)', 'Unit', 4, 'Baik', NULL),
(5, '3.02.01.03.002', 'pickup2.jpg', 'Pick Up', 'Peralatan dan Mesin (132111)', 'Unit', 1, 'Baik', ''),
(6, '3.02.01..04.001', 'motor.jpg', 'Sepeda Motor', 'Peralatan dan Mesin (132111)', 'Unit', 4, 'Baik', ''),
(7, '3.02.01.04.999', '', 'Kendaraan Bermotor Beroda Dua Lainnya', 'Peralatan dan Mesin (132111)', '', 1, 'Baik', ''),
(8, '3.03.01.03.004', 'solderlistrik3.jpg', 'Solder  Listrik', 'Peralatan dan Mesin (132111)', 'Buah', 2, 'Baik', ''),
(9, '3.03.02.07.003', '', 'Bor', 'Peralatan dan Mesin (132111)', 'Buah', 5, 'Baik', ''),
(10, '3.03.02.12.028', '', 'Mesin Bor Listrik Tangan', 'Peralatan dan Mesin (132111)', 'Buah', 1, 'Baik', ''),
(11, '3.03.03.01.023', '', 'Volt Meter Elektronik', 'Peralatan dan Mesin (132111)', 'Buah', 1, 'Baik', ''),
(12, '3.03.03.01.072', '', 'Global Positioning System', 'Peralatan dan Mesin (132111)', 'Buah', 5, 'Baik', ''),
(13, '3.03.03.06.004', '', 'Oscilloscope Envelope', 'Peralatan dan Mesin (132111)', 'Buah', 1, 'Baik', ''),
(14, '3.03.03.08.020', '', 'Metra Block', 'Peralatan dan Mesin (132111)', 'Buah', 9, 'Baik', ''),
(15, '3.03.03.17.042', '', 'Soil Moisture Meter', 'Peralatan dan Mesin (132111)', 'Buah', 3, 'Baik', ''),
(16, '3.03.03.17.133', '', 'Resistivity Meter', 'Peralatan dan Mesin (132111)', 'Buah', 1, 'Baik', ''),
(17, '3.04.01.04.004', '', 'Lemari Penyimpanan', 'Peralatan dan Mesin (132111)', 'Buah', 8, 'Baik', ''),
(18, '3.04.01.05.999', '', 'Alat Laboratorium Pertanian Lainnya (Alat Pengolahan Pertanian)', 'Peralatan dan Mesin (132111)', '', 7, 'Baik', ''),
(19, '3.05.01.01.002', '', 'Mesin Ketik Manual Standard (14-16 Inci)', 'Peralatan dan Mesin (132111)', 'Buah', 5, 'Baik', ''),
(20, '3.05.01.02.001', '', 'Mesin Hitung Manual', 'Peralatan dan Mesin (132111)', 'Buah', 1, 'Baik', ''),
(21, '3.05.01.04.001', '', 'Lemari Besi/Metal', 'Peralatan dan Mesin (132111)', 'Buah', 37, 'Baik', ''),
(22, '3.05.01.04.002', '', 'Lemari Kayu', 'Peralatan dan Mesin (132111)', 'Buah', 24, 'Baik', ''),
(23, '3.05.01.04.003', '', 'Rak Besi', 'Peralatan dan Mesin (132111)', 'Buah', 10, 'Baik', ''),
(24, '3.05.01.04.004', '', 'Rak Kayu', 'Peralatan dan Mesin (132111)', 'Buah', 5, 'Baik', ''),
(50, '123', 'kamera2.jpg', 'Mirrorless', 'Peralatan dan Mesin (132111)', 'Unit', 3, 'Baik', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_suratmasuk` varchar(25) NOT NULL,
  `sifatsurat_id` int(11) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_suratmasuk`, `sifatsurat_id`, `kode`, `no_surat`, `tanggal_surat`, `asal_surat`, `perihal`, `dokumen`, `tanggal_input`, `no_urut`, `status`) VALUES
('SM220301', 1, 'HM.09', 1, '2022-03-16', 'Balitklimat', 'Undangan Zoom', '', '2022-03-16', 1, ''),
('SM220302', 1, 'HM.10', 2, '2022-03-17', 'Kementan', 'Hadiri', '', '2022-03-17', 11, ''),
('SM220303', 3, 'HM.10', 3, '2022-03-17', 'Balitklimat', 'Zoom', '', '2022-03-17', 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` varchar(20) NOT NULL,
  `isi_tugas` text NOT NULL,
  `jumlah_pm` int(11) NOT NULL,
  `tgl_pengumpulan` date NOT NULL,
  `dok_tugas` varchar(256) DEFAULT NULL,
  `pembimbing_balai` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `isi_tugas`, `jumlah_pm`, `tgl_pengumpulan`, `dok_tugas`, `pembimbing_balai`) VALUES
('PN220201', 'haloo', 3, '2022-02-19', '', '196401211990031002'),
('PN220202', 'Tugas 2 buat ini user dan halo halo', 2, '2022-02-21', '', '196401211990031002'),
('PN220203', 'ga ubah f', 1, '2022-02-24', 'Profil_Instansi_Balitklimat.pdf', '196401211990031002'),
('PN220204', 'tugas 4', 3, '2022-02-25', '', '196401211990031002'),
('PN220206', 'ini tugas buat zahra di tanggal 22', 1, '2022-02-25', '', '196401211990031002'),
('PN220207', 'ini diedit tanpa ubah file trs ubah tanggal jadi 28', 1, '2022-02-28', 'Surat_TUGAS_PKL_Balai_Penelitian_Agroklimat_Hidrologi1.pdf', '196401211990031002'),
('PN220208', 'jadi buat arima ama halo halo aja, terus abis itu diubah jadi tanggal 28 trs abis itu ditambahin dokumen jadi  jurnal', 2, '2022-02-28', 'Jurnal_Harian_PKL.docx', '196401211990031002'),
('PN220209', 'notif', 2, '2022-02-25', '', '196401211990031002'),
('PN220210', 'buta ini userrrr', 1, '2022-02-26', '', '196401211990031002'),
('PN220211', 'ini buat user ama zahra', 2, '2022-02-25', '', '196401211990031002'),
('PN220212', 'tes notif lg', 2, '2022-02-26', '', '196401211990031002'),
('PN220213', 'penugasan 25 feb', 2, '2022-02-26', '', '196401211990031002'),
('PN220301', 'aaa', 2, '2022-03-08', '', '196401211990031002'),
('PN220302', 'aaa', 3, '2022-03-08', '', '196401211990031002'),
('PN220303', 'ini tgl 6', 2, '2022-03-08', '', '196401211990031002'),
('PN220304', 'aaaaaaaaaa', 3, '2022-03-19', '', '196401211990031002'),
('PN220305', 'edittttt edit ke 5yyy', 3, '2022-03-17', '', '196401211990031002'),
('PN220306', 'ini cek tanggal edit', 3, '2022-03-26', '', '196401211990031002'),
('PN220307', 'comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 3, '2022-03-30', 'TUTORIAL_INSTALASI_WORDPRESS.pdf', '196401211990031002'),
('PN220308', 'tes notif', 1, '2022-03-19', '', '196401211990031002'),
('PN220309', 'ini tes notiff22111', 1, '2022-03-26', 'Form_Absensi_PKL.pdf', '196401211990031002'),
('PN220310', 'ini tes tgl 10y', 1, '2022-03-24', '', '196401211990031002'),
('PN220311', 'nbhg', 6, '2022-03-10', 'Riwayat_Disposisi_Surat_Disposisi.pdf', '195805161993032002');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `satuan_idbarang` (`satuan_id`),
  ADD KEY `jenis_idbarang` (`jenis_id`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barangkeluar`),
  ADD KEY `barang_idkeluar` (`barang_id`);

--
-- Indeks untuk tabel `barang_kembali`
--
ALTER TABLE `barang_kembali`
  ADD PRIMARY KEY (`id_barangkembali`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barangmasuk`),
  ADD KEY `barang_idmasuk` (`barang_id`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_buku_tamu`);

--
-- Indeks untuk tabel `data_anggota_perjadin`
--
ALTER TABLE `data_anggota_perjadin`
  ADD PRIMARY KEY (`id_anggota_perjadin`),
  ADD KEY `id_perjalanan_dinas_ap_pd` (`id_perjalanan_dinas`),
  ADD KEY `nip_anggota_perjadin_ap_peg` (`nip_anggota_perjadin`);

--
-- Indeks untuk tabel `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_divisi`);

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
-- Indeks untuk tabel `data_jadwal_gaji_berkala`
--
ALTER TABLE `data_jadwal_gaji_berkala`
  ADD PRIMARY KEY (`kode_kgb`),
  ADD KEY `nip_pegawai_jadwal_gajiberkala` (`nip`);

--
-- Indeks untuk tabel `data_jadwal_naik_pangkat`
--
ALTER TABLE `data_jadwal_naik_pangkat`
  ADD PRIMARY KEY (`kode_kp`),
  ADD KEY `id_golongan_berikutnya_jadwal_pangkat` (`id_golongan_berikutnya`),
  ADD KEY `id_pangkat_berikutnya_jadwalkp` (`id_pangkat_berikutnya`),
  ADD KEY `nip_peg_jadwalkp` (`nip`);

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
  ADD KEY `nip_pj_rrr_nip` (`nip_pj_rrr`),
  ADD KEY `id_jenis_keg_jk_keg` (`id_jenis_keg`);

--
-- Indeks untuk tabel `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `data_kota`
--
ALTER TABLE `data_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_sbuh_kota_sbuh` (`id_sbuh`);

--
-- Indeks untuk tabel `data_mak`
--
ALTER TABLE `data_mak`
  ADD PRIMARY KEY (`kode_mak`);

--
-- Indeks untuk tabel `data_notifikasi`
--
ALTER TABLE `data_notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `nip_notif_peg` (`nip`);

--
-- Indeks untuk tabel `data_pangkat`
--
ALTER TABLE `data_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_gol_peg` (`id_golongan`),
  ADD KEY `id_status_datapeg` (`id_status_peg`),
  ADD KEY `id_pangkat_peg` (`id_pangkat`),
  ADD KEY `id_jabatan_peg` (`id_jabatan`),
  ADD KEY `id_divisi_peg` (`id_divisi`);

--
-- Indeks untuk tabel `data_perjalanan_dinas`
--
ALTER TABLE `data_perjalanan_dinas`
  ADD PRIMARY KEY (`id_perjalanan_dinas`),
  ADD KEY `kode_kegiatan_dpd_dk` (`kode_kegiatan`),
  ADD KEY `nip_pumk_nip` (`nip_pumk`),
  ADD KEY `id_kota_asal_id_kota` (`id_kota_asal`),
  ADD KEY `id_kota_tujuan_id_kota` (`id_kota_tujuan`),
  ADD KEY `kode_mak_mak_peg` (`kode_mak`),
  ADD KEY `nip_kpa_dpd_peg` (`nip_kpa`),
  ADD KEY `nip_bendahara_dpd_peg` (`nip_bendahara`),
  ADD KEY `nip_kepala_balai_dpd_peg` (`nip_kepala_balai`),
  ADD KEY `nip_plt_kb_keg_peg` (`nip_plt_kb`),
  ADD KEY `nip_ppk_dpd_peg` (`nip_ppk`),
  ADD KEY `nip_verifikator_dpd_peg` (`nip_verifikator`),
  ADD KEY `nip_kasub_bag_tu_dpd_peg` (`nip_kasub_bag_tu`);

--
-- Indeks untuk tabel `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `data_sbuh`
--
ALTER TABLE `data_sbuh`
  ADD PRIMARY KEY (`id_sbuh`);

--
-- Indeks untuk tabel `data_tugas`
--
ALTER TABLE `data_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indeks untuk tabel `detail_disposisi`
--
ALTER TABLE `detail_disposisi`
  ADD PRIMARY KEY (`id_kepada`);

--
-- Indeks untuk tabel `detail_dokumen`
--
ALTER TABLE `detail_dokumen`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `detail_penugasan`
--
ALTER TABLE `detail_penugasan`
  ADD PRIMARY KEY (`id_det_tugas`);

--
-- Indeks untuk tabel `detail_role`
--
ALTER TABLE `detail_role`
  ADD PRIMARY KEY (`id_detail_role`),
  ADD KEY `id_role_detail` (`id_role`);

--
-- Indeks untuk tabel `detail_tugas`
--
ALTER TABLE `detail_tugas`
  ADD PRIMARY KEY (`id_detail_tugas`),
  ADD KEY `detail_nip_tugas` (`nip`),
  ADD KEY `detail_id_tugas` (`id_tugas`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `laporan_akhir`
--
ALTER TABLE `laporan_akhir`
  ADD PRIMARY KEY (`id_lapak`);

--
-- Indeks untuk tabel `laporan_mingguan`
--
ALTER TABLE `laporan_mingguan`
  ADD PRIMARY KEY (`id_lap_ming`);

--
-- Indeks untuk tabel `notif_peserta`
--
ALTER TABLE `notif_peserta`
  ADD PRIMARY KEY (`id_np`);

--
-- Indeks untuk tabel `penggunaan_mobil`
--
ALTER TABLE `penggunaan_mobil`
  ADD PRIMARY KEY (`id_penggunaan`),
  ADD KEY `nip_join` (`nip`),
  ADD KEY `id_kendaraan_join` (`id_kendaraan`);

--
-- Indeks untuk tabel `perbaikan_alat`
--
ALTER TABLE `perbaikan_alat`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_barang2_join` (`idalat`);

--
-- Indeks untuk tabel `perbaikan_barang`
--
ALTER TABLE `perbaikan_barang`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `id_barang2_join` (`id_barang`);

--
-- Indeks untuk tabel `peserta_magang`
--
ALTER TABLE `peserta_magang`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indeks untuk tabel `pinjam_alat`
--
ALTER TABLE `pinjam_alat`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `idalat_join` (`idalat`);

--
-- Indeks untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_barang_join` (`id_barang`);

--
-- Indeks untuk tabel `riwayat_alat`
--
ALTER TABLE `riwayat_alat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_barang_join3` (`idalat`);

--
-- Indeks untuk tabel `riwayat_disposisi`
--
ALTER TABLE `riwayat_disposisi`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `riwayat_peminjaman`
--
ALTER TABLE `riwayat_peminjaman`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_barang_join3` (`id_barang`);

--
-- Indeks untuk tabel `riwayat_surat`
--
ALTER TABLE `riwayat_surat`
  ADD PRIMARY KEY (`id_riwayatsurat`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `sifat_surat`
--
ALTER TABLE `sifat_surat`
  ADD PRIMARY KEY (`id_sifatsurat`);

--
-- Indeks untuk tabel `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  ADD PRIMARY KEY (`id_status_peg`);

--
-- Indeks untuk tabel `status_perjalanan`
--
ALTER TABLE `status_perjalanan`
  ADD PRIMARY KEY (`id_status_perjalanan`);

--
-- Indeks untuk tabel `stok_alat`
--
ALTER TABLE `stok_alat`
  ADD PRIMARY KEY (`idalat`);

--
-- Indeks untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `data_anggota_perjadin`
--
ALTER TABLE `data_anggota_perjadin`
  MODIFY `id_anggota_perjadin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_jenis_keg`
--
ALTER TABLE `data_jenis_keg`
  MODIFY `id_jenis_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_kota`
--
ALTER TABLE `data_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_notifikasi`
--
ALTER TABLE `data_notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `data_pangkat`
--
ALTER TABLE `data_pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `data_perjalanan_dinas`
--
ALTER TABLE `data_perjalanan_dinas`
  MODIFY `id_perjalanan_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `data_role`
--
ALTER TABLE `data_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_sbuh`
--
ALTER TABLE `data_sbuh`
  MODIFY `id_sbuh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `data_tugas`
--
ALTER TABLE `data_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `detail_disposisi`
--
ALTER TABLE `detail_disposisi`
  MODIFY `id_kepada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `detail_dokumen`
--
ALTER TABLE `detail_dokumen`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT untuk tabel `detail_role`
--
ALTER TABLE `detail_role`
  MODIFY `id_detail_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `detail_tugas`
--
ALTER TABLE `detail_tugas`
  MODIFY `id_detail_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penggunaan_mobil`
--
ALTER TABLE `penggunaan_mobil`
  MODIFY `id_penggunaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `perbaikan_alat`
--
ALTER TABLE `perbaikan_alat`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perbaikan_barang`
--
ALTER TABLE `perbaikan_barang`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pinjam_alat`
--
ALTER TABLE `pinjam_alat`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `riwayat_alat`
--
ALTER TABLE `riwayat_alat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `riwayat_disposisi`
--
ALTER TABLE `riwayat_disposisi`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `riwayat_peminjaman`
--
ALTER TABLE `riwayat_peminjaman`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_surat`
--
ALTER TABLE `riwayat_surat`
  MODIFY `id_riwayatsurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `satuan_barang`
--
ALTER TABLE `satuan_barang`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `sifat_surat`
--
ALTER TABLE `sifat_surat`
  MODIFY `id_sifatsurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  MODIFY `id_status_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `status_perjalanan`
--
ALTER TABLE `status_perjalanan`
  MODIFY `id_status_perjalanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `stok_alat`
--
ALTER TABLE `stok_alat`
  MODIFY `idalat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_anggota_perjadin`
--
ALTER TABLE `data_anggota_perjadin`
  ADD CONSTRAINT `id_perjalanan_dinas_ap_pd` FOREIGN KEY (`id_perjalanan_dinas`) REFERENCES `data_perjalanan_dinas` (`id_perjalanan_dinas`),
  ADD CONSTRAINT `nip_anggota_perjadin_ap_peg` FOREIGN KEY (`nip_anggota_perjadin`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `data_jadwal_gaji_berkala`
--
ALTER TABLE `data_jadwal_gaji_berkala`
  ADD CONSTRAINT `nip_pegawai_jadwal_gajiberkala` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `data_jadwal_naik_pangkat`
--
ALTER TABLE `data_jadwal_naik_pangkat`
  ADD CONSTRAINT `id_golongan_berikutnya_jadwal_pangkat` FOREIGN KEY (`id_golongan_berikutnya`) REFERENCES `data_golongan` (`id_golongan`),
  ADD CONSTRAINT `id_pangkat_berikutnya_jadwalkp` FOREIGN KEY (`id_pangkat_berikutnya`) REFERENCES `data_pangkat` (`id_pangkat`),
  ADD CONSTRAINT `nip_peg_jadwalkp` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD CONSTRAINT `id_jenis_keg_jk_keg` FOREIGN KEY (`id_jenis_keg`) REFERENCES `data_jenis_keg` (`id_jenis_keg`),
  ADD CONSTRAINT `nip_pj_keg_nip` FOREIGN KEY (`nip_pj_kegiatan`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_pj_rrr_nip` FOREIGN KEY (`nip_pj_rrr`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `data_kota`
--
ALTER TABLE `data_kota`
  ADD CONSTRAINT `id_sbuh_kota_sbuh` FOREIGN KEY (`id_sbuh`) REFERENCES `data_sbuh` (`id_sbuh`);

--
-- Ketidakleluasaan untuk tabel `data_notifikasi`
--
ALTER TABLE `data_notifikasi`
  ADD CONSTRAINT `nip_notif_peg` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `id_divisi_peg` FOREIGN KEY (`id_divisi`) REFERENCES `data_divisi` (`id_divisi`),
  ADD CONSTRAINT `id_gol_peg` FOREIGN KEY (`id_golongan`) REFERENCES `data_golongan` (`id_golongan`),
  ADD CONSTRAINT `id_jabatan_peg` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `id_pangkat_peg` FOREIGN KEY (`id_pangkat`) REFERENCES `data_pangkat` (`id_pangkat`),
  ADD CONSTRAINT `id_status_datapeg` FOREIGN KEY (`id_status_peg`) REFERENCES `status_kepegawaian` (`id_status_peg`);

--
-- Ketidakleluasaan untuk tabel `data_perjalanan_dinas`
--
ALTER TABLE `data_perjalanan_dinas`
  ADD CONSTRAINT `id_kota_asal_id_kota` FOREIGN KEY (`id_kota_asal`) REFERENCES `data_kota` (`id_kota`),
  ADD CONSTRAINT `id_kota_tujuan_id_kota` FOREIGN KEY (`id_kota_tujuan`) REFERENCES `data_kota` (`id_kota`),
  ADD CONSTRAINT `kode_kegiatan_dpd_dk` FOREIGN KEY (`kode_kegiatan`) REFERENCES `data_kegiatan` (`kode_kegiatan`),
  ADD CONSTRAINT `kode_mak_mak_peg` FOREIGN KEY (`kode_mak`) REFERENCES `data_mak` (`kode_mak`),
  ADD CONSTRAINT `nip_bendahara_dpd_peg` FOREIGN KEY (`nip_bendahara`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_kasub_bag_tu_dpd_peg` FOREIGN KEY (`nip_kasub_bag_tu`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_kepala_balai_dpd_peg` FOREIGN KEY (`nip_kepala_balai`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_kpa_dpd_peg` FOREIGN KEY (`nip_kpa`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_plt_kb_keg_peg` FOREIGN KEY (`nip_plt_kb`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_ppk_dpd_peg` FOREIGN KEY (`nip_ppk`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_pumk_nip` FOREIGN KEY (`nip_pumk`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_verifikator_dpd_peg` FOREIGN KEY (`nip_verifikator`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `detail_tugas`
--
ALTER TABLE `detail_tugas`
  ADD CONSTRAINT `detail_id_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `data_tugas` (`id_tugas`),
  ADD CONSTRAINT `detail_nip_tugas` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `perbaikan_alat`
--
ALTER TABLE `perbaikan_alat`
  ADD CONSTRAINT `idalat_join3` FOREIGN KEY (`idalat`) REFERENCES `stok_alat` (`idalat`);

--
-- Ketidakleluasaan untuk tabel `perbaikan_barang`
--
ALTER TABLE `perbaikan_barang`
  ADD CONSTRAINT `id_barang2_join` FOREIGN KEY (`id_barang`) REFERENCES `stok_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `pinjam_alat`
--
ALTER TABLE `pinjam_alat`
  ADD CONSTRAINT `idalat_join` FOREIGN KEY (`idalat`) REFERENCES `stok_alat` (`idalat`);

--
-- Ketidakleluasaan untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD CONSTRAINT `id_barang_join` FOREIGN KEY (`id_barang`) REFERENCES `stok_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `riwayat_alat`
--
ALTER TABLE `riwayat_alat`
  ADD CONSTRAINT `idalat_join2` FOREIGN KEY (`idalat`) REFERENCES `stok_alat` (`idalat`);

--
-- Ketidakleluasaan untuk tabel `riwayat_peminjaman`
--
ALTER TABLE `riwayat_peminjaman`
  ADD CONSTRAINT `id_barang_join3` FOREIGN KEY (`id_barang`) REFERENCES `stok_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
