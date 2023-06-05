-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 05:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudangfurnitur`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama`, `nomor_hp`, `alamat`, `email`, `jenis_kelamin`, `tanggal_lahir`, `updated_at`, `created_at`) VALUES
('PE001', 'Adi Julia Saputra', '082134987312', 'Malang', 'adi@gmail.com', 'Laki-laki', '2002-07-19', '2023-06-05 06:30:06', '2023-06-01 09:50:31'),
('PE002', 'kevin', '082134987312', 'Sukoharjo, Jawa Timur', 'kevin@gmail.com', 'Laki-laki', '2003-01-16', '2023-06-05 06:30:33', '2023-06-02 04:39:53'),
('PE003', 'Juliana', '081212344567', 'Sidoarjo', 'juliana@gmail.com', 'Perempuan', '2003-02-05', '2023-06-05 06:31:22', '2023-06-03 08:12:24'),
('PE004', 'Ivania', '081212344567', 'Kediri, Jawa Timur', 'ivan@gmail.com', 'Perempuan', '2000-08-15', '2023-06-05 06:32:18', '2023-06-05 06:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahanbaku`
--

CREATE TABLE `tb_bahanbaku` (
  `id_bahan_baku` varchar(7) NOT NULL,
  `id_pemasok` varchar(7) NOT NULL,
  `jenis_bahan` varchar(30) NOT NULL,
  `jumlah_bahan` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `harga_bahan` int(30) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bahanbaku`
--

INSERT INTO `tb_bahanbaku` (`id_bahan_baku`, `id_pemasok`, `jenis_bahan`, `jumlah_bahan`, `tanggal_masuk`, `harga_bahan`, `updated_at`, `created_at`) VALUES
('BB01', 'PM01', 'Kayu', '23', '2023-06-01', 230000, '', ''),
('BB02', 'PM02', 'Besi', '25', '2023-06-01', 240000, '2023-06-05 06:55:55', '2023-06-05 06:55:55'),
('BB03', 'PM01', 'Aluminium', '23', '2023-06-01', 213000, '2023-06-05 10:42:42', '2023-06-05 10:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biayaproduksi`
--

CREATE TABLE `tb_biayaproduksi` (
  `id_biaya_produksi` varchar(7) NOT NULL,
  `id_data_produksi` varchar(7) NOT NULL,
  `biaya_produksi` varchar(30) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_databarang`
--

CREATE TABLE `tb_databarang` (
  `id_data_barang` varchar(7) NOT NULL,
  `id_kategori` varchar(7) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_databarang`
--

INSERT INTO `tb_databarang` (`id_data_barang`, `id_kategori`, `nama_barang`, `harga`, `updated_at`, `created_at`) VALUES
('DB01', 'KT01', 'Kursi', '230000', '', ''),
('DB02', 'KT01', 'Kursi Taman', '250000', '2023-06-05 11:52:17', '2023-06-05 07:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datagudang`
--

CREATE TABLE `tb_datagudang` (
  `id_data_gudang` varchar(7) NOT NULL,
  `id_stok_produksi` varchar(7) NOT NULL,
  `jumlah_stok` varchar(30) NOT NULL,
  `jumlah_masuk` varchar(30) NOT NULL,
  `jumlah_keluar` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_datagudang`
--

INSERT INTO `tb_datagudang` (`id_data_gudang`, `id_stok_produksi`, `jumlah_stok`, `jumlah_masuk`, `jumlah_keluar`, `tanggal_masuk`, `tanggal_keluar`, `updated_at`, `created_at`) VALUES
('DG01', 'SP01', '21', '33', '12', '2023-06-06', '2023-06-07', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataoutlet`
--

CREATE TABLE `tb_dataoutlet` (
  `id_outlet` varchar(7) NOT NULL,
  `id_data_barang` varchar(7) NOT NULL,
  `jumlah_stok` varchar(50) NOT NULL,
  `jumlah_restok` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `lokasi_outlet` varchar(50) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dataoutlet`
--

INSERT INTO `tb_dataoutlet` (`id_outlet`, `id_data_barang`, `jumlah_stok`, `jumlah_restok`, `tanggal_masuk`, `lokasi_outlet`, `updated_at`, `created_at`) VALUES
('OT01', 'DB01', '23', '22', '2023-06-01', 'Malang ~ Dinoyo', '2023-06-05 07:08:39', '2023-06-04 17:20:08'),
('OT02', 'DB01', '23', '12', '2023-06-06', 'Malang ~ Dinoyo', '2023-06-05 07:08:46', '2023-06-05 07:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataproduksi`
--

CREATE TABLE `tb_dataproduksi` (
  `id_data_produksi` varchar(7) NOT NULL,
  `id_bahan_baku` varchar(7) NOT NULL,
  `id_pegawai` varchar(7) NOT NULL,
  `jumlah_produksi` varchar(50) NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dataproduksi`
--

INSERT INTO `tb_dataproduksi` (`id_data_produksi`, `id_bahan_baku`, `id_pegawai`, `jumlah_produksi`, `tanggal_produksi`, `keterangan`, `updated_at`, `created_at`) VALUES
('DP01', 'BB01', 'PE001', '19', '2023-05-18', 'Pembuatan kursi dengan bahan kayu', '2023-06-05 06:57:12', ''),
('DP02', 'BB02', 'PE003', '14', '2023-05-25', 'Produksi pintu dengan bahan baku besi', '2023-06-05 06:56:59', '2023-06-05 06:56:59'),
('DP03', 'BB03', 'PE002', '9', '2023-06-03', 'Pembuatan meja menggunakan bahan aluminium', '2023-06-05 10:48:21', '2023-06-05 10:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategoribarang`
--

CREATE TABLE `tb_kategoribarang` (
  `id_kategori` varchar(7) NOT NULL,
  `id_data_gudang` varchar(7) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `jenis_material` varchar(30) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategoribarang`
--

INSERT INTO `tb_kategoribarang` (`id_kategori`, `id_data_gudang`, `jenis_barang`, `jenis_material`, `updated_at`, `created_at`) VALUES
('KT01', 'DG02', 'Furnitur Ruang Tamu', 'Besi', '2023-06-05 07:05:10', '2023-06-05 07:05:10'),
('KT02', 'DG01', 'Furnitur Ruang Keluarga', 'Aluminium', '2023-06-05 05:49:01', '2023-06-05 05:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemasok`
--

CREATE TABLE `tb_pemasok` (
  `id_pemasok` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pemasok`
--

INSERT INTO `tb_pemasok` (`id_pemasok`, `nama`, `nomor_hp`, `alamat`, `email`, `jenis_kelamin`, `tanggal_lahir`, `updated_at`, `created_at`) VALUES
('PM01', 'Andi', '082134987312', 'Bekasi', 'andi@gmail.com', 'Laki-laki', '1996-12-10', '2023-06-05 06:33:45', '2023-06-04 09:31:28'),
('PM02', 'Putra', '089890987662', 'Surabaya, Jawa Timur', 'putra@gmail.com', 'Laki-laki', '2004-10-07', '2023-06-05 06:34:27', '2023-06-05 06:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stokproduksi`
--

CREATE TABLE `tb_stokproduksi` (
  `id_stok_produksi` varchar(7) NOT NULL,
  `id_data_produksi` varchar(7) NOT NULL,
  `stok_masuk` varchar(50) NOT NULL,
  `stok_jumlah` varchar(50) NOT NULL,
  `stok_keluar` varchar(50) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_stokproduksi`
--

INSERT INTO `tb_stokproduksi` (`id_stok_produksi`, `id_data_produksi`, `stok_masuk`, `stok_jumlah`, `stok_keluar`, `updated_at`, `created_at`) VALUES
('SP01', 'DP01', '23', '0', '10', '2023-06-04 14:45:58', '2023-06-04 14:45:58'),
('SP02', 'DP01', '19', '32', '0', '2023-06-05 10:50:06', '2023-06-05 07:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tenagakerja`
--

CREATE TABLE `tb_tenagakerja` (
  `id_tenaga_kerja` varchar(7) NOT NULL,
  `id_pegawai` varchar(7) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `status_pekerjaan` varchar(30) NOT NULL,
  `upah_tenaga_kerja` varchar(50) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tenagakerja`
--

INSERT INTO `tb_tenagakerja` (`id_tenaga_kerja`, `id_pegawai`, `jabatan`, `divisi`, `status_pekerjaan`, `upah_tenaga_kerja`, `updated_at`, `created_at`) VALUES
('TE001', 'PE002', 'Kepala', 'Produksi', 'Tetap', '4500000', '2023-06-05 06:52:38', '2023-06-04 10:21:26'),
('TE002', 'PE003', 'Supervisor', 'Quality Control', 'Tetap', '3500000', '2023-06-05 06:52:12', '2023-06-05 06:52:12'),
('TE003', 'PE002', 'Karyawan', 'Pergudangan', 'Kontrak', '2500000', '2023-06-05 06:52:31', '2023-06-05 06:52:31'),
('TE004', 'PE004', 'Karyawan', 'Quality Control', 'Kontrak', '2500000', '2023-06-05 06:53:54', '2023-06-05 06:53:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_bahanbaku`
--
ALTER TABLE `tb_bahanbaku`
  ADD PRIMARY KEY (`id_bahan_baku`),
  ADD KEY `id_pemasok` (`id_pemasok`);

--
-- Indexes for table `tb_biayaproduksi`
--
ALTER TABLE `tb_biayaproduksi`
  ADD PRIMARY KEY (`id_biaya_produksi`),
  ADD KEY `id_data_produksi` (`id_data_produksi`);

--
-- Indexes for table `tb_databarang`
--
ALTER TABLE `tb_databarang`
  ADD PRIMARY KEY (`id_data_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_datagudang`
--
ALTER TABLE `tb_datagudang`
  ADD PRIMARY KEY (`id_data_gudang`),
  ADD KEY `id_stok_produksi` (`id_stok_produksi`);

--
-- Indexes for table `tb_dataoutlet`
--
ALTER TABLE `tb_dataoutlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_data_barang` (`id_data_barang`);

--
-- Indexes for table `tb_dataproduksi`
--
ALTER TABLE `tb_dataproduksi`
  ADD PRIMARY KEY (`id_data_produksi`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`,`id_pegawai`);

--
-- Indexes for table `tb_kategoribarang`
--
ALTER TABLE `tb_kategoribarang`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_data_gudang` (`id_data_gudang`);

--
-- Indexes for table `tb_pemasok`
--
ALTER TABLE `tb_pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indexes for table `tb_stokproduksi`
--
ALTER TABLE `tb_stokproduksi`
  ADD PRIMARY KEY (`id_stok_produksi`),
  ADD KEY `id_data_produksi` (`id_data_produksi`);

--
-- Indexes for table `tb_tenagakerja`
--
ALTER TABLE `tb_tenagakerja`
  ADD PRIMARY KEY (`id_tenaga_kerja`),
  ADD KEY `tb_tenagakerja_ibfk_1` (`id_pegawai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bahanbaku`
--
ALTER TABLE `tb_bahanbaku`
  ADD CONSTRAINT `tb_bahanbaku_ibfk_1` FOREIGN KEY (`id_pemasok`) REFERENCES `tb_pemasok` (`id_pemasok`);

--
-- Constraints for table `tb_tenagakerja`
--
ALTER TABLE `tb_tenagakerja`
  ADD CONSTRAINT `tb_tenagakerja_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
