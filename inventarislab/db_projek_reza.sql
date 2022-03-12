-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2022 pada 08.41
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
-- Database: `db_projek_reza`
--

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
(1, 'II C'),
(3, 'II D'),
(4, 'III A'),
(5, 'III B'),
(7, 'III C'),
(8, 'III D'),
(9, 'IV A'),
(10, 'IV B'),
(11, 'IV C'),
(14, 'IV D');

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
(4, 'Peneliti Ahli Madya'),
(5, 'Sopir');

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
('190222001', '2022-02-19 12:23:11', '196401211990031002', 4000000, 45000000, '2022-02-23', '2022-02-25', '0000-00-00', '0000-00-00', '0000-00-00', '2022-03-10');

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
('190222001', '2022-02-19 11:14:17', '196401211990031002', 6, 5, '2022-02-19', '2022-03-05', '0000-00-00', '0000-00-00', '0000-00-00', '2022-03-11');

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
(4, 'F 1020 MB', 'Toyota Innova', 'Roda 4', 1);

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
  `id_golongan` int(11) DEFAULT NULL,
  `id_status_peg` int(11) DEFAULT NULL,
  `id_pangkat` int(11) DEFAULT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL,
  `admin` varchar(5) NOT NULL,
  `pumk` varchar(5) NOT NULL,
  `kpa` varchar(5) NOT NULL,
  `ppk` varchar(5) NOT NULL,
  `pj` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama_pegawai`, `foto`, `id_golongan`, `id_status_peg`, `id_pangkat`, `id_jabatan`, `id_divisi`, `nik`, `email`, `password`, `no_whatsapp`, `admin`, `pumk`, `kpa`, `ppk`, `pj`) VALUES
('196401211990031002', 'Dr. Ir. A. Arivin Rivaie, M.Sc', 'WhatsApp_Image_2022-01-14_at_14_30_5721.jpeg', 14, 1, 1, 2, 2, '3271062101640004', 'lugasmunaya@gmail.com', '12345678', '6281235062988 ', 'Iya', 'Tidak', 'Tidak', 'Tidak', 'Tidak'),
('SPR198402022013', 'Robbi Hably', '', NULL, NULL, NULL, 5, NULL, '1234080202198300', 'robbi123@gmail.com', '12345', '081548778654', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak'),
('SPR1990062022018', 'Reza Fahneri', '', NULL, NULL, NULL, 5, NULL, '1267052006199000', 'reza@gmail.com', '123456', '081365908689', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak');

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
-- Struktur dari tabel `penggunaan_mobil`
--

CREATE TABLE `penggunaan_mobil` (
  `id_penggunaan` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `tgl_pemakaian` date NOT NULL,
  `lama_pemakaian` int(11) NOT NULL,
  `perjalanan` varchar(50) NOT NULL,
  `status_penggunaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggunaan_mobil`
--

INSERT INTO `penggunaan_mobil` (`id_penggunaan`, `nip`, `id_kendaraan`, `tgl_pemakaian`, `lama_pemakaian`, `perjalanan`, `status_penggunaan`) VALUES
(4, 'SPR198402022013', 1, '2022-02-22', 3, 'Dalam Kota', 2),
(5, 'SPR1990062022018', 4, '2022-02-22', 8, 'Luar Kota', 2),
(6, 'SPR1990062022018', 1, '2022-02-24', 2, 'Dalam Kota', 2),
(7, 'SPR198402022013', 2, '2022-03-01', 7, 'Luar Kota', 2),
(8, 'SPR198402022013', 4, '2022-03-03', 2, 'Dalam Kota', 2),
(9, 'SPR198402022013', 4, '2022-02-23', 3, 'Dalam Kota', 2),
(10, 'SPR1990062022018', 2, '2022-02-24', 2, 'Dalam Kota', 2);

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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam_alat`
--

INSERT INTO `pinjam_alat` (`id_pinjam`, `idalat`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `status`) VALUES
(2, 4, 'Reza Fahneri', '2022-02-25', '2022-03-04', 1, 'Pelatihan', 'Bandung', 2);

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
(15, 5, 'Reza', '2022-02-12', '2022-02-14', 1, 'Gotong Royong', 'Balai Penelitian Agroklimat dan Hidrologi ', 2);

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
  `status_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_alat`
--

INSERT INTO `riwayat_alat` (`id_riwayat`, `idalat`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `status_riwayat`) VALUES
(1, 2, 'Tono', '2022-02-25', '2022-03-02', 1, 'RPIK', 'Jakarta', 3),
(2, 6, 'Tono', '2022-02-25', '2022-02-28', 1, 'Liburan', 'Bandung', 3);

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
  `status_riwayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_peminjaman`
--

INSERT INTO `riwayat_peminjaman` (`id_riwayat`, `id_barang`, `peminjam`, `tglpinjam`, `tglselesai`, `qty`, `kegiatan`, `lokasi`, `status_riwayat`) VALUES
(3, 50, 'azer', '2022-02-22', '2022-03-02', 2, 'Liburan', 'Padang', 3),
(5, 9, 'Reza Fahneri', '2022-02-23', '2022-02-25', 3, 'Gotong Royong', 'Balai Penelitian Agroklimat dan Hidrologi ', 3);

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
(3, 'GPS Handle', '1 Set', 4, '6c2868edc884da24572c9850820f8b7d.png', 'Baik'),
(4, 'Geoscanner', 'Receiver + 3 Box Ground Wire', 0, '9e67c205bf3ae5a293f86bd8f06ccce1.png', 'Baik'),
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
(33, 'Bor Tangan Bosch', '1 Set + Box', 1, '5ee8c906af74020d189e5995298bf4e1.png', 'Baik'),
(34, 'Bor Tangan Bosch', '1 Set + Box', 1, '5ee8c906af74020d189e5995298bf4e1.png', 'Baik');

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
(1, '3.02.01.02.003', 'innova.png', 'Mini Bus (Penumpang 14 Orang Kebawah)', 'Peralatan dan Mesin (132111)', 'Unit', 6, 'Baik', NULL),
(5, '3.02.01.03.002', 'pickup2.jpg', 'Pick Up', 'Peralatan dan Mesin (132111)', 'Unit', 0, 'Baik', ''),
(6, '3.02.01..04.001', 'motor.jpg', 'Sepeda Motor', 'Peralatan dan Mesin (132111)', 'Unit', 4, 'Baik', ''),
(7, '3.02.01.04.999', '', 'Kendaraan Bermotor Beroda Dua Lainnya', 'Peralatan dan Mesin (132111)', '', 1, 'Baik', ''),
(8, '3.03.01.03.004', 'solderlistrik3.jpg', 'Solder  Listrik', 'Peralatan dan Mesin (132111)', 'Buah', 2, 'Baik', ''),
(9, '3.03.02.07.003', '', 'Bor', 'Peralatan dan Mesin (132111)', 'Buah', 6, 'Baik', ''),
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

--
-- Indexes for dumped tables
--

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
  ADD KEY `nip_pegawai_jadwal_pangkat` (`nip`),
  ADD KEY `id_pangkat_berikutnya_jadwal_pangkat` (`id_pangkat_berikutnya`),
  ADD KEY `id_golongan_berikutnya_jadwal_pangkat` (`id_golongan_berikutnya`);

--
-- Indeks untuk tabel `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

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
  ADD KEY `id_gol_nip_datapeg` (`id_golongan`),
  ADD KEY `id_statuspeg_nip_datapeg` (`id_status_peg`),
  ADD KEY `id_jabatan_nip_datapeg` (`id_jabatan`),
  ADD KEY `id_pangkat` (`id_pangkat`),
  ADD KEY `id_divisi_nip_datapeg` (`id_divisi`);

--
-- Indeks untuk tabel `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

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
-- Indeks untuk tabel `riwayat_peminjaman`
--
ALTER TABLE `riwayat_peminjaman`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_barang_join3` (`id_barang`);

--
-- Indeks untuk tabel `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  ADD PRIMARY KEY (`id_status_peg`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `riwayat_alat`
--
ALTER TABLE `riwayat_alat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_peminjaman`
--
ALTER TABLE `riwayat_peminjaman`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `satuan_barang`
--
ALTER TABLE `satuan_barang`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  MODIFY `id_status_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Ketidakleluasaan untuk tabel `data_jadwal_gaji_berkala`
--
ALTER TABLE `data_jadwal_gaji_berkala`
  ADD CONSTRAINT `nip_pegawai_jadwal_gajiberkala` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `data_jadwal_naik_pangkat`
--
ALTER TABLE `data_jadwal_naik_pangkat`
  ADD CONSTRAINT `id_golongan_berikutnya_jadwal_pangkat` FOREIGN KEY (`id_golongan_berikutnya`) REFERENCES `data_golongan` (`id_golongan`);

--
-- Ketidakleluasaan untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `id_divisi_nip_datapeg` FOREIGN KEY (`id_divisi`) REFERENCES `data_divisi` (`id_divisi`);

--
-- Ketidakleluasaan untuk tabel `penggunaan_mobil`
--
ALTER TABLE `penggunaan_mobil`
  ADD CONSTRAINT `id_kendaraan_join` FOREIGN KEY (`id_kendaraan`) REFERENCES `data_kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `nip_join` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `perbaikan_alat`
--
ALTER TABLE `perbaikan_alat`
  ADD CONSTRAINT `idalat_join3` FOREIGN KEY (`idalat`) REFERENCES `stok_alat` (`idalat`);

--
-- Ketidakleluasaan untuk tabel `perbaikan_barang`
--
ALTER TABLE `perbaikan_barang`
  ADD CONSTRAINT `id_barang2_join` FOREIGN KEY (`id_Barang`) REFERENCES `stok_barang` (`id_barang`);

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
