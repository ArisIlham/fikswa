-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 05:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fikswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
(1, 'arisilham', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `nomor`) VALUES
(1, 'Aris', '081368627804'),
(2, 'Alexius', '081368627804');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id_reminder` int(255) NOT NULL,
  `pesan` text NOT NULL,
  `media` varchar(255) NOT NULL,
  `tgl_terkirim` datetime NOT NULL,
  `status_terkirim` varchar(255) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_kontak` int(255) NOT NULL,
  `id_tagihan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id_reminder`, `pesan`, `media`, `tgl_terkirim`, `status_terkirim`, `status_bayar`, `tgl_bayar`, `id_kontak`, `id_tagihan`) VALUES
(3, ' ash fahsahsj ad', 'WhatsApp_Image_2022-01-15_at_17_20_51.jpg', '0000-00-00 00:00:00', '', 0, '2022-01-22', 2, 4),
(4, ' asd asdasd asd asd', 'aldi_(1)5.png', '0000-00-00 00:00:00', '', 0, '2022-01-12', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(255) NOT NULL,
  `nama_tagihan` varchar(255) NOT NULL,
  `nomor_tagihan` varchar(255) NOT NULL,
  `jenis_tagihan` varchar(255) NOT NULL,
  `tgl_reminder` date NOT NULL,
  `tgl_tagihan` date NOT NULL,
  `nominal_tagihan` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `nama_tagihan`, `nomor_tagihan`, `jenis_tagihan`, `tgl_reminder`, `tgl_tagihan`, `nominal_tagihan`) VALUES
(4, 'Mobil', '11111', 'hosting web utama', '2022-01-13', '2022-01-28', 10000),
(7, 'pembayaran hosting', '12345', 'cicilan', '2022-01-20', '2022-01-31', 200000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id_reminder`),
  ADD KEY `id_kontak` (`id_kontak`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id_reminder` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
