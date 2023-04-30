-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 07:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` varchar(8) NOT NULL,
  `id_pemasok` varchar(8) NOT NULL,
  `jenis_bahan` varchar(20) NOT NULL,
  `jumlah_bahan` int(5) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `biaya_produksi`
--

CREATE TABLE `biaya_produksi` (
  `id_biaya_produksi` varchar(8) NOT NULL,
  `id_data_produksi` varchar(8) NOT NULL,
  `biaya_produksi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_data_barang` varchar(8) NOT NULL,
  `id_kategori` varchar(8) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_gudang`
--

CREATE TABLE `data_gudang` (
  `id_data_gudang` varchar(8) NOT NULL,
  `id_stok_produksi` varchar(8) NOT NULL,
  `jumlah_stok` varchar(20) NOT NULL,
  `jumlah_masuk` varchar(20) NOT NULL,
  `jumlah_keluar` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_outlet`
--

CREATE TABLE `data_outlet` (
  `id_outlet` varchar(8) NOT NULL,
  `id_data_barang` varchar(8) NOT NULL,
  `jumlah_stok` varchar(20) NOT NULL,
  `jumlah_restok` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `lokasi_outlet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` varchar(8) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pemasok`
--

CREATE TABLE `data_pemasok` (
  `id_pemasok` varchar(8) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor_hp` int(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_produksi`
--

CREATE TABLE `data_produksi` (
  `id_data_produksi` varchar(8) NOT NULL,
  `id_bahan_baku` varchar(8) NOT NULL,
  `id_pegawai` varchar(8) NOT NULL,
  `jumlah_produksi` int(10) NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `Id_data_user` varchar(8) NOT NULL,
  `Id_pegawai` varchar(8) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level_akses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` varchar(8) NOT NULL,
  `id_data_gudang` varchar(8) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `jenis_material` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok_produksi`
--

CREATE TABLE `stok_produksi` (
  `id_stok_produksi` varchar(8) NOT NULL,
  `id_data_produksi` varchar(8) NOT NULL,
  `stok_masuk` varchar(10) NOT NULL,
  `stok_jumlah` varchar(10) NOT NULL,
  `stok_keluar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_kerja_pegawai`
--

CREATE TABLE `tenaga_kerja_pegawai` (
  `id_tenaga_kerja` varchar(8) NOT NULL,
  `id_pegawai` varchar(8) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `status_pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`),
  ADD KEY `id_pemasok` (`id_pemasok`);

--
-- Indexes for table `biaya_produksi`
--
ALTER TABLE `biaya_produksi`
  ADD PRIMARY KEY (`id_biaya_produksi`),
  ADD KEY `id_data_produksi` (`id_data_produksi`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_data_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `data_gudang`
--
ALTER TABLE `data_gudang`
  ADD PRIMARY KEY (`id_data_gudang`),
  ADD KEY `id_stok_produksi` (`id_stok_produksi`);

--
-- Indexes for table `data_outlet`
--
ALTER TABLE `data_outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_data_barang` (`id_data_barang`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_pemasok`
--
ALTER TABLE `data_pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indexes for table `data_produksi`
--
ALTER TABLE `data_produksi`
  ADD PRIMARY KEY (`id_data_produksi`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`,`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`Id_data_user`),
  ADD KEY `Id_pegawai` (`Id_pegawai`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_data_gudang` (`id_data_gudang`);

--
-- Indexes for table `stok_produksi`
--
ALTER TABLE `stok_produksi`
  ADD PRIMARY KEY (`id_stok_produksi`),
  ADD KEY `id_data_produksi` (`id_data_produksi`);

--
-- Indexes for table `tenaga_kerja_pegawai`
--
ALTER TABLE `tenaga_kerja_pegawai`
  ADD PRIMARY KEY (`id_tenaga_kerja`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD CONSTRAINT `bahan_baku_ibfk_1` FOREIGN KEY (`id_pemasok`) REFERENCES `data_pemasok` (`id_pemasok`);

--
-- Constraints for table `biaya_produksi`
--
ALTER TABLE `biaya_produksi`
  ADD CONSTRAINT `biaya_produksi_ibfk_1` FOREIGN KEY (`id_data_produksi`) REFERENCES `data_produksi` (`id_data_produksi`);

--
-- Constraints for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategori`);

--
-- Constraints for table `data_gudang`
--
ALTER TABLE `data_gudang`
  ADD CONSTRAINT `data_gudang_ibfk_1` FOREIGN KEY (`id_stok_produksi`) REFERENCES `stok_produksi` (`id_stok_produksi`);

--
-- Constraints for table `data_outlet`
--
ALTER TABLE `data_outlet`
  ADD CONSTRAINT `data_outlet_ibfk_1` FOREIGN KEY (`id_data_barang`) REFERENCES `data_barang` (`id_data_barang`);

--
-- Constraints for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `data_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `data_user` (`Id_pegawai`);

--
-- Constraints for table `data_produksi`
--
ALTER TABLE `data_produksi`
  ADD CONSTRAINT `data_produksi_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`),
  ADD CONSTRAINT `data_produksi_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id_pegawai`);

--
-- Constraints for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD CONSTRAINT `kategori_barang_ibfk_1` FOREIGN KEY (`id_data_gudang`) REFERENCES `data_gudang` (`id_data_gudang`);

--
-- Constraints for table `stok_produksi`
--
ALTER TABLE `stok_produksi`
  ADD CONSTRAINT `stok_produksi_ibfk_1` FOREIGN KEY (`id_data_produksi`) REFERENCES `data_produksi` (`id_data_produksi`);

--
-- Constraints for table `tenaga_kerja_pegawai`
--
ALTER TABLE `tenaga_kerja_pegawai`
  ADD CONSTRAINT `tenaga_kerja_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
