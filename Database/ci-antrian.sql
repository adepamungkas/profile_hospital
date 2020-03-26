-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 03:17 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no_admin` int(11) NOT NULL COMMENT 'auto increment',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_admin`, `username`, `password`, `no_telp`, `status`, `id_dokter`) VALUES
(1, 'asisten1', 'b7f7b122c2b4c83b135d1041a09dbae4', '081277837748', 'tersedia', 1),
(2, 'asisten2', '5747b6fb1dc375a013b36e60d5d050e0', '085233837728', 'tersedia', 2),
(3, 'asisten3', '40bd7e1cea0fdb97e413e8132a076910', '081377677363', 'tersedia', 3);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL,
  `diposkan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tanggal`, `foto`, `diposkan`) VALUES
(1, 'Pilek', 'Artikel ini adalah artikel yang menejelaskan tentang apa itu penyakit pilek / flu, apa yang dapat menyebabkannya, serta bagaimana cara mengatasinya.', '2018-07-10', 'Pilek', 'admin'),
(2, 'Demam Berdarah', 'Demam berdarah adalah sebuah penyakit yang disebabkan penyakit menular yang disebabkan oleh virus dengue yang dibawa oleh nyamuk. Demam berdarah DBD dulu disebut penyakit “break-bone” karena kadang menyebabkan nyeri sendi dan otot di mana tulang terasa retak.\r\nDemam berdarah ringan menyebabkan demam tinggi, ruam, dan nyeri otot dan sendi. Demam berdarah yang parah, atau juga dikenal sebagai dengue hemorrhagic fever, dapat menyebabkan perdarahan serius, penurunan tekanan darah yang tiba-tiba (shock), dan kematian.Seberapa umumkah demam berdarah dengue?\r\nJutaan kasus infeksi DBD terjadi setiap tahunnya di seluruh dunia. Kondisi ini dapat terjadi pada pasien dengan usia berapapun. Demam berdarah dengue paling banyak ditemui selama musim hujan dan setelah musim hujan di area tropis dan subtropis di:\r\n\r\nAfrika\r\nAsia Tenggara dan China\r\nIndia\r\nTimur Tengah\r\nKaribia, Amerika Tengah dan Amerika Selatan\r\nAustralia, Pasifik Selatan dan Pasifik Tengah.', '2018-07-09', 'Demam Berdarah', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL,
  `diposkan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal`, `foto`, `diposkan`) VALUES
(1, 'Vaksin Gratis', 'Hari ini di RS Mitra Husada dilaksanakan kegiatan vaksin gratis untuk anak usia 10 tahun sampai 15 tahun. vaksin ini diberikan untuk menambah kekebalan tubuh terhadap penyakit. ', '2018-07-09', 'Faksin', 'admin'),
(2, 'Senam Pagi', 'Senam pagi di RS Mitra Husada kali ini dimeriahkan dengan hadirnya bapak Bupati Pringsewu, sekaligus memberikan himbauan agar selalu menjaga kesehatan dengan rajin berolah raga di pagi hari.', '2018-07-10', 'Senam', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL COMMENT 'auto increment',
  `kode_dokter` varchar(100) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `status_dokter` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `kode_dokter`, `nama_dokter`, `id_poli`, `status_dokter`) VALUES
(1, 'D.1', 'dr. Ubad MB, Sp.OG', 1, 'Tersedia'),
(2, 'D.2', 'dr. Tridjokotomo S, Sp.OG', 1, 'Tersedia'),
(3, 'D.3', 'dr. Nenti Fona, Sp.OG', 1, 'Tersedia'),
(4, 'D.4', 'dr. KMS.Nungtjik R, Sp.A', 2, 'Tersedia'),
(5, 'D.5', 'dr. Agung Mudapati, Sp.A', 2, 'Tersedia'),
(6, 'D.6', 'dr. Soraya Agustini, Sp.A', 2, 'Tersedia'),
(7, 'D.7', 'dr. Gambiro Wibowo, Sp.B', 3, 'Tersedia'),
(8, 'D.8', 'dr. Gunawan Wanas, Sp.B', 3, 'Tersedia'),
(9, 'D.9', 'dr. Masagus Nangutih, Sp.PD', 4, 'Tersedia'),
(10, 'D.10', 'dr. Andika Wiratama, Sp.PD', 4, 'Tersedia'),
(11, 'D.11', 'dr. TH. Niken Wijayanti, Sp.KK', 5, 'Tersedia'),
(12, 'D.12', 'dr. Rahmat Suhada, Sp.M', 6, 'Tersedia'),
(13, 'D.13', 'dr. Muslim Kasim,M.Sc,Sp.THT-KL', 7, 'Tersedia'),
(14, 'D.14', 'dr. Abdul Aziz,M.Sc,Sp,S', 8, 'Tersedia'),
(15, 'D.15', 'drg. Iwan Ristiawan', 9, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE IF NOT EXISTS `jadwal_dokter` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `jam_kerja` varchar(10) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `asuransi_pasien` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `tanggal`, `id_dokter`, `jam_kerja`, `hari`, `waktu`, `asuransi_pasien`) VALUES
(1, '0000-00-00', 1, 'Sore', 'Rabu', '17.00 s.d 20.00', 'Umum & BPJS'),
(2, '0000-00-00', 2, 'Pagi', 'Senin s.d Sabtu', '08.00 s.d 14.00', 'Umum & BPJS'),
(3, '0000-00-00', 2, 'Sore', 'Selasa', '18.00 s.d 20.00', 'Umum & BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(11) NOT NULL COMMENT 'auto increment',
  `nama_pasien` varchar(40) NOT NULL,
  `status_pasien` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `status_pasien`, `alamat`, `no_telepon`) VALUES
(1, 'Aris Puspito', 'N', 'Way Gatel, Pringsewu', '081283839383'),
(2, 'Anggraeni Retno Ningrum', 'N', 'Pajaresuk, Pringsewu', '082283748893'),
(3, 'Adelia Safitri', 'N', 'Pajaresuk, Pringsewu', '081288293382'),
(4, 'Alaida Sintiya Devi', 'N', 'Pajaresuk, Pringsewu', '085788279202'),
(5, 'Titin Sulastinah', 'N', 'Pajaresuk, Pringsewu', '081283774382'),
(6, 'Risba Sigit Utomo', 'N', 'Pringkumpul, Pringsewu', '085876786536'),
(7, 'Beni Prasetya', 'N', 'Pringsewu Utara', '081267827338'),
(8, 'Candra Kurnia Saputra', 'N', 'Pajaresuk, Pringsewu', '082344526637'),
(9, 'Nurman Sepriawan', 'N', 'Pringkumpul, Pringsewu', '081272273739'),
(10, 'Ria Fibriyanti', 'N', 'Simpang Tangkit', '081877689087'),
(12, 'Bapak Yahya', 'N', 'Pringkumpul, Pringsewu', '0828228282828');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE IF NOT EXISTS `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(60) NOT NULL,
  `deskripsi` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `deskripsi`) VALUES
(1, 'Poli Kandungan & Kebidanan', 'Poli Kandungan & Kebidanan'),
(2, 'Poli Anak', 'Poli Anak'),
(3, 'Poli Bedah', 'Poli Bedah'),
(4, 'Poli Penyakit Dalam', 'Poli Penyakit Dalam'),
(5, 'Poli Kulit & Kelamin', 'Poli Kulit & Kelamin'),
(6, 'Poli Mata', 'Poli Mata'),
(7, 'Poli THT', 'Poli THT'),
(8, 'Poli Syaraf', 'Poli Syaraf'),
(9, 'Poli Gigi', 'Poli Gigi'),
(10, 'KANTOR IT', 'KANTOR IT');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE IF NOT EXISTS `registrasi` (
  `id_registrasi` int(11) NOT NULL COMMENT 'auto increment',
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `status_cek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sliderku`
--

CREATE TABLE IF NOT EXISTS `sliderku` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderku`
--

INSERT INTO `sliderku` (`id_slider`, `gambar`, `keterangan`) VALUES
(1, 'rsmitrahusada', 'tampak depan'),
(2, 'rsmitrahusada', 'gedung persalinan (NICU)');

-- --------------------------------------------------------

--
-- Table structure for table `status_dokter`
--

CREATE TABLE IF NOT EXISTS `status_dokter` (
  `id_status` int(11) NOT NULL COMMENT 'auto incremen',
  `status` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_dokter`
--

INSERT INTO `status_dokter` (`id_status`, `status`, `deskripsi`) VALUES
(1, 'Tersedia', 'Tersedia'),
(2, 'Tidak Tersedia', 'Tidak Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_admin`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `sliderku`
--
ALTER TABLE `sliderku`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `status_dokter`
--
ALTER TABLE `status_dokter`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no_admin` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment',AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment',AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment';
--
-- AUTO_INCREMENT for table `sliderku`
--
ALTER TABLE `sliderku`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_dokter`
--
ALTER TABLE `status_dokter`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incremen',AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD CONSTRAINT `jadwal_dokter_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registrasi_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
