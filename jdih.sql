-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2020 at 10:32 AM
-- Server version: 10.3.22-MariaDB-1ubuntu1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdih`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `nama_kategori`, `isi`, `tanggal`) VALUES
(8, 'Bupati Kutai Jadi Tersangka Korupsi, Kekayaannya Tercatat Hanya Miliki 1 Mobil Seharga Rp 40 Juta', 'Teknologi', '<p style=\"text-align: center; \"><img src=\"http://localhost/jdih/assets/images/5eff91b5924e7.jpg\" style=\"width: 50%; float: left;\" class=\"note-float-left\"></p><p style=\"text-align: justify;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\">Bupati Kutai Timur Ismunandar dan istrinya yang menjabat sebagai Ketua DPRD Kutai Timur Encek Unguria tertangkap KPK pada Kamis (2/7/2020).</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\">Setelah menjalani pemeriksaan selama 1x24 jam, mereka ditetapkan sebagai tersangka dalam kasus dugaan suap terkait proyek infrastruktur di Kalimantan Timur.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\"><br></p>', '2020-07-01 12:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Teknologi'),
(8, 'anjay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `filepdf` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nomor`, `tahun`, `tentang`, `filepdf`, `konten`) VALUES
(17, '23', '2001', 'BPJS kesehatan tidak jadi naik', '1337-4065-1-PB2.pdf', '<p>alhamdulillah, bpjs kesehatan tidak jadi naik karena aliansi shinobi menentang keputuasan tersebut</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
