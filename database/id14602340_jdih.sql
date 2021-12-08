-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2020 at 09:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14602340_jdih`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Nurmia Bora', 'miaaa', '3e67038c022092aadd4000a259dd26b2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `thumbnail`, `nama_kategori`, `isi`, `tanggal`) VALUES
(8, 'Bupati Kutai Jadi Tersangka Korupsi, Kekayaannya Tercatat Hanya Miliki 1 Mobil Seharga Rp 40 Juta', 'Screenshot_5.png', 'Teknologi', '<p style=\"text-align: center; \"><img src=\"http://localhost/jdih/assets/images/5eff91b5924e7.jpg\" style=\"width: 100%; float: left;\" class=\"note-float-left\"></p><p style=\"text-align: justify;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\">Bupati Kutai Timur Ismunandar dan istrinya yang menjabat sebagai Ketua DPRD Kutai Timur Encek Unguria tertangkap KPK pada Kamis (2/7/2020).</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\">Setelah menjalani pemeriksaan selama 1x24 jam, mereka ditetapkan sebagai tersangka dalam kasus dugaan suap terkait proyek infrastruktur di Kalimantan Timur.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; text-align: start;\"><br></p>', '2020-07-01 12:43:33'),
(11, 'Pinrang Sulsel Uji Coba Sekolah Tatap Muka, Siswa Dilarang Berkerumun', 'Screenshot_1.png', 'Pendidikan', '<p><img src=\"https://nurmiabora.000webhostapp.com/assets/images/image.png\" style=\"width: 100%;\"><strong style=\"font-weight: bold; color: rgb(0, 0, 0); font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"></strong><span style=\"color: rgb(0, 0, 0); font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"> </span><br></p><p style=\"margin-bottom: 16px; display: inline; color: rgb(0, 0, 0); font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><b>Pinrang</b></p><p style=\"margin-bottom: 16px; display: inline; color: rgb(0, 0, 0); font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br></p><p style=\"margin-bottom: 16px; display: inline; color: rgb(0, 0, 0); font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Pemerintah Kabupaten Pinrang, Sulawesi Selatan (Sulsel) hari ini mulai memberlakukan sekolah tatap muka di tengah pandemi virus Corona (COVID-19). Siswa diminta selalu jaga jarak dan tidak boleh berkerumun.</p>', '2020-09-15 04:17:35');

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
(11, 'Pendidikan');

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
  `kategori` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nomor`, `tahun`, `tentang`, `filepdf`, `kategori`, `status`) VALUES
(2, '430/164/2016', '2016', '<p>pembentukan satgas paralegal pendampingan bagi korban kekerasan terhadap perempuan dan anak secara terpadu di kabupaten pinrang</p>', '15716384091.pdf', 'Peraturan Daerah', 'Berlaku'),
(3, '700/22/2020', '2020', '<p>HONORARIUM KEGIATAN PENGAWASAN, PEMERIKSAAN DAN PEMANTAU BAGI PENANGGUNG JAWAB TIM PADA INSPEKTORAT KABUPATEN PINRANG TAHUN ANGGARAN 2020</p>', '1596786991.pdf', 'Keputusan Bupati', 'Berlaku'),
(4, '7', '2019', '<p>PENCABUTAN PERDA KAB.PINRANG NOMOR 13 TAHUN 2012 TENTANG PENGELOLAAN PERTAMBANGAN MINERAL DAN BATUBARA</p>', '1578886981.pdf', 'Peraturan Daerah', 'Mencabut'),
(5, '1', '2017', '<p>Retribusi Pengendalian Menara Telekomunikasi</p>', '1572242613.pdf', 'Peraturan Daerah', 'Berlaku'),
(6, '521-1-2015', '2015', '<p>Penetapan Kuasa Pengguna Anggaran Dana Tugas Pembantuan Pada Satuan Kerja Kantor Ketahanan Pangan Kabupaten Pinrang Tahun Anggaran 2015</p>', '1571710363.pdf', 'Keputusan Bupati', 'Berlaku'),
(7, '2', '2014', '<p>Sistem Remunerasi Pada Badan Layanan Umum Daerah Rumah Sakit Umum Lasinrang Kab. Pinrang</p>', '1571713647.pdf', 'Peraturan Daerah', 'Berlaku'),
(8, '1', '2010', '<p>Pengaturan Kendaraan Tidak Bermotor Yang Beroperasi Dalam Kabupaten Pinrang</p>', '1571896681.pdf', 'Peraturan Daerah', 'Berlaku'),
(11, '1', '2019', '<p>Penetapan Besaran Tunjangan Komunikasi Intensif (TKI) dan Tunjangan Rese Pimpinan dan Anggota DPRD Kabupaten Pinrang serta Besaran Dana perasional Pimpinan DPRD Kabupaten Pinrang Tahun Anggaran 2019</p>', 'Peraturan_Bupati_Nomor_1_Tahun_2019.pdf', 'Peraturan Daerah', 'Berlaku'),
(12, '7', '2017', '<p>Hak Keuangan dan Administratif Pimpinan dan Anggota Dewan Perwakilan Rakyat Daerah</p>', 'Peraturan_Daerah_Nomor_7_Tahun_2017.pdf', 'Peraturan Daerah', 'Berlaku'),
(13, '6', '2017', '<p>PENANGGULANGAN PENYAKIT TUBERKULOSIS</p>', 'Peraturan_Daerah_Nomor_6_Tahun_2017.pdf', 'Peraturan Daerah', 'Berlaku'),
(14, '3', '2017', '<p>Pencabutan Peraturan Daerah Kabupaten Pinrang Nomor 16 Tahun 2008 Tentang Irigasi</p>', 'Peraturan_Daerah_Nomor_3_Tahun_2017.pdf', 'Peraturan Daerah', 'Berlaku'),
(15, '490/17/2020', '2020', '<p>Penunjukan Tenaga Teknis Network Administrator dan Web Programmer pada Dinas Komunikasi dan Informatika Kabupaten Pinrang Tahun Anggaran 2020</p>', 'Keputusan_Bupati_Nomor_490-17-2020_Tahun_2020.pdf', 'Peraturan Daerah', 'Berlaku'),
(16, '500/16/2020', '2020', '<p>Penetapan Besaran Pemberian Bahan Bakar Minyak untuk Kendaraan Dinas Lingkup Sekretariat Daerah Kabupaten Pinrang Tahun Anggaran 2020</p>', 'Keputusan_Bupati_Nomor_500-16-2020_Tahun_2020.pdf', 'Keputusan Bupati', 'Berlaku'),
(17, '500/15/2020', '2020', '<p>Penunjukan Pengawal Bupati Pinrang dan Pengawal Wakil Bupati Pinrang</p>', 'Keputusan_Bupati_Nomor_500-15-2020_Tahun_2020.pdf', 'Keputusan Bupati', 'Berlaku'),
(18, '700/23/2020', '2020', '<p>Penetapan Standar Biaya Keluaran Kegiatan Pengawasan Pemeriksaan dan Pemantauan Bagi Pejabat dan Pegawai Negeri Sipl pada Inspektorat Kabupaten Pinrang Tahun Anggaran 2020</p>', 'Keputusan_Bupati_Nomor_700-23-2020_Tahun_2020.pdf', 'Keputusan Bupati', 'Berlaku'),
(19, '36', '2019', '<p>Perubahan Peraturan Bupati Pinrang Nomor 24 Tahun 2018 Tentang Rencana Kerja Pemerintah Daerah Tahun 2019</p>', 'Peraturan_Bupati_Nomor_36_Tahun_20191.pdf', 'Peraturan Daerah', 'Berlaku'),
(20, '44', '2019', '<p>Penjabaran Perubahan Anggaran Pendapatan dan Belanja Daerah Kabupaten Pinrang Tahun Anggaran 2019</p>', 'Peraturan_Bupati_Nomor_44_Tahun_2019.pdf', 'Peraturan Daerah', 'Berlaku'),
(21, '2', '2010', '<p>Organisasi dan Tata Kerja Badan Penanggulangan Bencana Daerah Kabupaten Pinrang</p>', 'peraturan2.pdf', 'Peraturan Daerah', 'Berlaku'),
(22, '3', '2010', '<p>Organisasi dan Tata Kerja Kantor Pelayanan Perizinan Terpadu (KP2T) Kabupaten Pinrang</p>', 'peraturan3.pdf', 'Peraturan Daerah', 'Berlaku'),
(23, '2', '2013', '<p>Pajak Bumi dan Bangunan Perdesaan dan Perkotaan</p>', 'peraturan4.pdf', 'Peraturan Daerah', 'Berlaku'),
(24, '4', '2013', '<p>PEDOMAN PEMBENTUKAN PERATURAN DAERAH</p>', 'peraturan5.pdf', 'Peraturan Daerah', 'Berlaku'),
(25, '5', '2013', '<p>Pedoman Tata Cara Pembentukan dan Pengelolaan Badan Usaha Milik Desa</p>', 'peraturan6.pdf', 'Peraturan Daerah', 'Berlaku'),
(26, '6', '2013', '<p>KERJASAMA DESA</p>', 'peraturan7.pdf', 'Peraturan Daerah', 'Berlaku'),
(27, '7', '2013', '<p>PENGELOLAAN SAMPAH</p>', 'peraturan8.pdf', 'Peraturan Daerah', 'Berlaku'),
(28, '8', '2013', '<p>Pencegahan dan Penanggulangan Bahaya Kebakaran</p>', 'peraturan9.pdf', 'Peraturan Bupati', 'Berlaku'),
(29, '9', '2013', '<p>Pencabutan Peraturan Daerah Kabupaten Pinrang Nomor 25 Tahun 2011 Tentang Retribusi Pelayanan Kesehatan pada Rumah Sakit Umum&nbsp;Lasinrang</p>', 'peraturan10.pdf', 'Peraturan Daerah', 'Berlaku'),
(30, '800/3/2015', '2015', '<p>Penetapan Pegawai Negeri Sipil yang Mengikuti Tugas Belajar pada Program Pascasarjana (S.2) Administrasi Pelayanan Kesehatan STIA LAN Tahun Akademik 2014</p>', 'pdf02.pdf', 'Keputusan Bupati', 'Berlaku'),
(31, '800/4/2015', '2015', '<p>Penetapan Pegawai Negeri Sipil yang Mengikuti Tugas Belajar Pada Program Pascasarjana (S.2) Kebidanan Universitas Hasanuddin (UNHAS) Makassar Tahun Akademik 2014/2015</p>', 'pdf04.pdf', 'Keputusan Bupati', 'Berlaku'),
(32, '800/4/2015', '2015', '<p>Penetapan Pegawai Negeri Sipil yang Mengikuti Tugas Belajar Pada Program Pascasarjana (S.2) Kebidanan Universitas Hasanuddin (UNHAS) Makassar Tahun Akademik 2014/2015</p>', 'pdf041.pdf', 'Keputusan Bupati', 'Berlaku'),
(33, '050/6/2016', '2016', '<p>Penunjukan Satuan Kerja dan Pengangkatan Kuasa Pengguna Anggaran, Pejabat Pembuat Komitmen,&nbsp;Staf Teknis, Pejabat Pengadaan Kegiatan Tugas Pembantuan Penanganan Lahan Kritis Sumber Daya Air Berbasis Masyarakat Kab. Pinrang Tahun Anggaran 2016</p>', 'pdf054.pdf', 'Keputusan Bupati', 'Berlaku'),
(34, '360/5/2015', '2015', '<p>Penetapan Status Keadaan Darurat Penanganan Bencana Banjir, Tanah Longsor, Abrasi dan Angin Kencang di Kabupaten Pinrang</p>', 'pdf06.pdf', 'Peraturan Daerah', 'Berlaku'),
(35, '900/6/2015', '2015', '<p>Pembentukan Paniti Pemeriksa Barang Umum Daerah Ligkup Pemerintah Daerah Kabupaten Pinrang Tahun Anggaran 2015</p>', 'pdf07.pdf', 'Peraturan Bupati', 'Berlaku'),
(36, '050/7/2016', '2016', '<p>Pembetukan Tim Koordinasi Pelaksanaan Kegiatan Pengendalian,Pelaporan dan Evaluasi Pemanfaatan Program Dana Alokasi Khusus Kabupaten Pinrang Tahun 2016</p>', 'pdf08.pdf', 'Keputusan Bupati', 'Berlaku'),
(37, '3', '2015', '<p>Mekanisme Penetapan Harga Bersih Ikan dan Udang Produksi Balai Benih Ikan dan Es Balok Produksi Dinas Kelautan dan Perikanan Kabupaten Pinrang</p>', '1.pdf', 'Peraturan Bupati', 'Berlaku'),
(38, '1', '2016', '<p>Pedoman Pemberian Penghargaan Pegawai Syara, Tokoh Agama dan Guru Mengaji di Kabupaten Pinrang</p>', '2.pdf', 'Peraturan Bupati', 'Berlaku'),
(39, '2', '2016', '<p>Pedoman Pemberian Tambahan Penghasilan Bagi Aparatur Sipil Negara Lingkup Pemerintah Kabupaten Pinrang</p>', '3.pdf', 'Peraturan Bupati', 'Berlaku'),
(40, '3', '2016', '<p>Perubahan Kedua Atas Peraturan Bupati Pinrang Nomor 4 Taun 2012 Tentang Pelaksanaan Peraturan daerah Kabupaten Pinrang Nomor 16 Tahun 2011 Tentang Retribusi Pelayanan Pasar</p>', '4.pdf', 'Peraturan Bupati', 'Berlaku'),
(41, '7', '2016', '<p>Pedoman Pemberian Bahan Bakar Minyak Lingkup Pemerintah Kabupaten Pinrang</p>', '5.pdf', 'Peraturan Bupati', 'Berlaku'),
(42, '10', '2016', '<p>Perubahan Kedua Atas Peraturan Bupati Pinrang Nomor 5 Tahun 2013 Tentang Petunjuk Teknis Program Pengembangan Desa Mandiri&nbsp;</p>', '6.pdf', 'Peraturan Bupati', 'Berlaku'),
(43, '11', '2016', '<p>Daftar Kewenangan Desa Berdasarkan Ha Asal Usul dan Kewenangan okal Berskala Desa di kabupaten Pinrang</p>', '7.pdf', 'Peraturan Bupati', 'Berlaku'),
(44, '14', '2016', '<p>Pembentukan Satuan Tugas Tanggap Darurat Bencana (SATGAS TARUNA) Terpadu Pemerintah Kabupaten Pinrang</p>', '8.pdf', 'Peraturan Bupati', 'Berlaku'),
(45, '13', '2016', '<p>Perubahan Tarif Retribusi Tempat Rekreasi Permadian Air Panas Sulili</p>', '9.pdf', 'Peraturan Bupati', 'Berlaku'),
(46, '18', '2016', '<p>Tata Cara Pembukaan, Penutupan dan Penempatan Rekening Satuan Kerja Perangkat Daerah (SKPD)</p>', '10.pdf', 'Peraturan Bupati', 'Berlaku'),
(47, '21', '2016', '<p>Tarif pelayanan Kesehatan pada Badan Layanan Umum Daerah Puskesmas Kabupaten Pinrang</p>', '11.pdf', 'Peraturan Bupati', 'Berlaku'),
(48, '22', '2016', '<p>Sistem Remunerasi Pada Badan Layanan Umum Puskesmas kabupaten Pinrang</p>', '12.pdf', 'Peraturan Bupati', 'Berlaku'),
(49, '23', '2016', '<p>Pedoman Pemberian Tunjangan Perumahan Bagi Pimpinan dan Anggota Dewan Perwakilan Rakyat Daerah Kabupaten Pinrang</p>', '13.pdf', 'Peraturan Bupati', 'Berlaku'),
(50, '26', '2016', '<p>Pedoman Pembangunan dan Penggunaan Bersama Menara Telekomunikasi</p>', '14.pdf', 'Peraturan Bupati', 'Berlaku'),
(51, '27', '2016', '<p>Perubahan Atas Peraturan Bupati Pinrang Nomor 13 Tahun 2015 Tentang Pelaksanaan Hari Bebas Kendaraan Bermotor (Car Free day) di Kabupaten Pinrang&nbsp;</p>', '15.pdf', 'Peraturan Bupati', 'Berlaku'),
(52, '28', '2016', '<p>Pelaksanaan Peraturan Daerah Kabupaten Pinrang Nomor 2 Tahun 2015 Tentang Perubahan Atas Peraturan Daerah Kabupaten Pinrang Nomor 22 Tahun 2011 Tentang Penyelenggaraan Administrasi Kependudukan&nbsp;&nbsp;</p>', '16.pdf', 'Peraturan Bupati', 'Berlaku'),
(53, '33', '2016', '<p>Penetapan Besaran Tunjangan Perumahan Pimpinan dan Anggota Dewan Perwakilan Rakyat Daerah Kabupaten Pinrang</p>', '17.pdf', 'Peraturan Bupati', 'Berlaku'),
(54, '35', '2016', '<p>Peraturan Pelaksanaan Peraturan Daerah Kabupaten Pinrang Nomor 1 Thun 2015 Tentang Penerbitan Surat Izin Usaha Perdagangan dan Tanda Daftar Perusahaan</p>', '18.pdf', 'Peraturan Bupati', 'Berlaku'),
(55, '900/11/2020', '2020', '<p>Penetapan Jumlah Uang Persediaan pada Satuan Kerja Perangkat Daerah Kabupaten Pinrang&nbsp;</p>', '19.pdf', 'Keputusan Bupati', 'Berlaku'),
(56, '470/9/2020', '2020', '<p>Penunjukan Tenaga Administrator Database pada Dinas Kependudukan dan Pencatatan Sipil Kabupaten Pinrang&nbsp;</p>', '20.pdf', 'Keputusan Bupati', 'Berlaku'),
(57, '400/10/2020', '2020', '<p>Pembentukan Tim Pembina Usaha Kesehatan Sekolah/Madrasah dan Sekretariat Tetap Tim Pembina Usaha Kesehatan Sekolah/Madrasah Tingkat kabupaten Pinrang</p>', '21.pdf', 'Keputusan Bupati', 'Berlaku'),
(58, '900/5/2020', '2020', '<p>Penunjukan Bendahara Kass Umum Daerah Kabupaten Pinrang tahun Anggaran 2020</p>', '22.pdf', 'Keputusan Bupati', 'Berlaku'),
(59, '470/7/2020', '2020', '<p>Penunjukan Operator Penerapan Kartu Tanda Penduduk Elektronik Tingkat Kecamatan dan Kabupaten Tahun Anggaran 2020&nbsp;</p>', '24.pdf', 'Keputusan Bupati', 'Berlaku'),
(60, '900/596/2019', '2019', '<p>Pembentukan Tim Teknis Pelaksanaan Elektronik Audit Pemerintah Daerah Kabupaten Pinrang Tahun Anggaran 2020&nbsp;&nbsp;</p>', '25.pdf', 'Keputusan Bupati', 'Berlaku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
