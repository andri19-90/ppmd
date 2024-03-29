-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2022 at 05:14 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

DROP TABLE IF EXISTS `identitas`;
CREATE TABLE IF NOT EXISTS `identitas` (
  `kode` varchar(6) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `instansi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `slogan` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tahun` float DEFAULT NULL,
  `pimpinan` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `kdpos` varchar(7) CHARACTER SET latin1 DEFAULT NULL,
  `tlp` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `fax` varchar(35) CHARACTER SET latin1 DEFAULT NULL,
  `website` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `logo` longtext CHARACTER SET latin1,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`kode`, `instansi`, `slogan`, `tahun`, `pimpinan`, `alamat`, `kdpos`, `tlp`, `fax`, `website`, `email`, `logo`) VALUES
('K00001', 'DINAS PERAWATAN PERSONIL TNI ANGKATAN LAUT', 'Bermoral, Integritas dan Profesional', 1985, 'Brigjen (Mar) Herry Djuhaeri, MM., CHRMP.,', 'Gedung B.3 Lantai 6, Mabes TNI AL - Cilangkap Jakarta Timur. ', '13870', '(021) 8711785', '-(021) 8723501', 'https://ppmd.tnial.mil.id/', 'ppmd_tnial@gmail.com', '1663765336_b313f89246069e9b8eac.png');

-- --------------------------------------------------------

--
-- Table structure for table `korps`
--

DROP TABLE IF EXISTS `korps`;
CREATE TABLE IF NOT EXISTS `korps` (
  `idkorps` varchar(6) NOT NULL,
  `nama_korps` varchar(45) NOT NULL,
  PRIMARY KEY (`idkorps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korps`
--

INSERT INTO `korps` (`idkorps`, `nama_korps`) VALUES
('K00001', 'Laut (P)'),
('K00002', 'Laut (T)'),
('K00003', 'Laut (E)'),
('K00004', 'Laut (S)'),
('K00005', 'Laut (PM)'),
('K00006', 'Laut (K)'),
('K00007', 'Laut (KH)'),
('K00008', 'Marinir'),
('K00009', 'Bah'),
('K00010', 'Nav'),
('K00011', 'Kom'),
('K00012', 'Tlg'),
('K00013', 'Ekl'),
('K00014', 'Eko'),
('K00015', 'Mer'),
('K00016', 'Amo'),
('K00017', 'Rdl'),
('K00018', 'SAA'),
('K00019', 'SBA'),
('K00020', 'TRB'),
('K00021', 'Esa'),
('K00022', 'ETK'),
('K00023', 'PDK'),
('K00024', 'Jas'),
('K00025', 'Mus'),
('K00026', 'TTG'),
('K00027', 'Ttu'),
('K00028', 'Keu'),
('K00029', 'Mes'),
('K00030', 'Lis'),
('K00031', 'TKU'),
('K00032', 'MPU'),
('K00033', 'LPU'),
('K00034', 'Ang'),
('K00036', 'POM'),
('K00037', 'EDE'),
('K00038', 'Lek'),
('K00039', 'Pas'),
('K00040', 'PNS'),
('K00042', 'Tek'),
('K00043', 'Bek'),
('K00044', 'Adm');

-- --------------------------------------------------------

--
-- Table structure for table `kotakmasuk`
--

DROP TABLE IF EXISTS `kotakmasuk`;
CREATE TABLE IF NOT EXISTS `kotakmasuk` (
  `idkotakmasuk` varchar(6) NOT NULL,
  `nm_depan` varchar(45) NOT NULL,
  `nm_belakang` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idkotakmasuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotakmasuk`
--

INSERT INTO `kotakmasuk` (`idkotakmasuk`, `nm_depan`, `nm_belakang`, `email`, `judul`, `pesan`, `tanggal`) VALUES
('K00001', 'rampa', 'praditya', 'rampa@gmail.com', 'Lokasi', 'Lokasi di surabaya kira2 ada di mana ya ?', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `media_sosial`
--

DROP TABLE IF EXISTS `media_sosial`;
CREATE TABLE IF NOT EXISTS `media_sosial` (
  `idmedia` varchar(6) NOT NULL,
  `tw` varchar(150) NOT NULL,
  `fb` varchar(150) NOT NULL,
  `gp` varchar(150) NOT NULL,
  `lk` varchar(150) NOT NULL,
  `ig` varchar(150) NOT NULL,
  PRIMARY KEY (`idmedia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_sosial`
--

INSERT INTO `media_sosial` (`idmedia`, `tw`, `fb`, `gp`, `lk`, `ig`) VALUES
('M00001', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'https://instagram.com/pen_diswatpersal/');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

DROP TABLE IF EXISTS `pangkat`;
CREATE TABLE IF NOT EXISTS `pangkat` (
  `idpangkat` varchar(6) NOT NULL,
  `nama_pangkat` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idpangkat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`idpangkat`, `nama_pangkat`) VALUES
('P00001', 'ADMIN'),
('P00003', 'Kelasi Dua'),
('P00004', 'Kelasi Satu'),
('P00005', 'Kelasi Kepala'),
('P00006', 'Prajurit Dua'),
('P00007', 'Prajurit Satu'),
('P00008', 'Prajurit Kepala'),
('P00009', 'Kopral Dua'),
('P00010', 'Kopral Satu'),
('P00011', 'Kopral Kepala'),
('P00012', 'Sersan Dua'),
('P00013', 'Sersan Satu'),
('P00014', 'Sersan Kepala'),
('P00015', 'Sersan Mayor'),
('P00016', 'Pembantu Letnan Dua'),
('P00017', 'Pembantu Letnan Satu'),
('P00018', 'Letnan Dua'),
('P00019', 'Letnan Satu'),
('P00020', 'Kapten'),
('P00021', 'Mayor'),
('P00022', 'Letnan Kolonel'),
('P00023', 'Kolonel');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

DROP TABLE IF EXISTS `pengajuan`;
CREATE TABLE IF NOT EXISTS `pengajuan` (
  `idpengajuan` varchar(6) NOT NULL,
  PRIMARY KEY (`idpengajuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

DROP TABLE IF EXISTS `peta`;
CREATE TABLE IF NOT EXISTS `peta` (
  `idpeta` varchar(6) NOT NULL,
  `textpeta` text NOT NULL,
  PRIMARY KEY (`idpeta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`idpeta`, `textpeta`) VALUES
('P00001', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.499664531328!2d106.90917771431123!3d-6.329241863691006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6d9552523f%3A0x8c3b949f8b36c981!2sMabes%20TNI%20AL!5e0!3m2!1sid!2sid!4v1662684966921!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` varchar(6) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `harga` float NOT NULL DEFAULT '0',
  `area` float NOT NULL DEFAULT '0',
  `persil` varchar(100) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `jml_bed` float NOT NULL DEFAULT '0',
  `car_port` float NOT NULL DEFAULT '0',
  `jml_bath` float NOT NULL DEFAULT '0',
  `t_api` float DEFAULT '0',
  `wastafel` float DEFAULT '0',
  `kolam_renang` float DEFAULT '0',
  `laundry` float DEFAULT '0',
  `emergency_exit` float DEFAULT '0',
  `jogging_path` float DEFAULT '0',
  `idvendor` varchar(6) NOT NULL,
  `deskripsi_singkat` text,
  PRIMARY KEY (`idproduk`),
  KEY `FK_produk_vendor` (`idvendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `gambar`, `nama_produk`, `harga`, `area`, `persil`, `kota`, `jml_bed`, `car_port`, `jml_bath`, `t_api`, `wastafel`, `kolam_renang`, `laundry`, `emergency_exit`, `jogging_path`, `idvendor`, `deskripsi_singkat`) VALUES
('P00001', '1662953361_d8d256a993f5e58d6fb8.jpg', 'SUPER NICE VILLA', 150000000, 120, 'Jalan sunter no 21 kepanjen', 'Sidoarjo', 1, 1, 1, 0, 0, 0, 0, 0, 0, 'V00001', '<p>1. Pondasi : menggunakan batu kali</p>\r\n<p>2. pintu : kayu jati jepara</p>\r\n<p>&nbsp;</p>'),
('P00002', '1662953445_81af61014f58b21642f2.jpg', 'SUPER NICE VILLA', 750000000, 350, 'Jalan sunter no 22 kepanjen', 'Surabaya', 2, 1, 2, 0, 0, 0, 0, 0, 0, 'V00001', 'Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...'),
('P00003', '1662953508_f8eca3809f6ec5f721b5.jpg', 'SUPER NICE VILLA', 250000000, 120, 'Jalan sunter no 26 kepanjen', 'Malang', 1, 1, 1, 0, 0, 0, 0, 0, 0, 'V00001', 'Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...'),
('P00004', '1662954767_fbe136aaa3ea16b4392f.jpg', 'SUPER NICE VILLA', 500000000, 130, 'Jalan sunter no 24 kepanjen', 'Gresik', 3, 2, 1, 0, 0, 0, 0, 0, 0, 'V00001', 'Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...'),
('P00005', '1662954850_4d44ca1df6b215978499.jpg', 'Grand Havana', 1500000000, 500, 'Jl Ir. Soekarno', 'Surabaya', 4, 3, 3, 0, 0, 0, 0, 0, 0, 'V00001', 'Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...'),
('P00006', '1663765699_7c257f1a38d34b2324f1.jpg', 'Fusia - A', 420000000, 90, 'Jln. Glandola No.4', 'Sidoarjo', 2, 1, 1, 0, 0, 0, 0, 0, 0, 'V00003', NULL),
('P00007', '1663765775_48f4745ef7f1cc670e9b.jpg', 'Fusia - B', 420000000, 90, 'Jln. Gading Blok 2 No.3', 'Sidoarjo', 2, 1, 1, 0, 0, 0, 0, 0, 0, 'V00003', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk_img`
--

DROP TABLE IF EXISTS `produk_img`;
CREATE TABLE IF NOT EXISTS `produk_img` (
  `idproduk_img` varchar(6) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `idproduk` varchar(6) NOT NULL,
  PRIMARY KEY (`idproduk_img`),
  KEY `FK_produk_img_key` (`idproduk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_img`
--

INSERT INTO `produk_img` (`idproduk_img`, `gambar`, `keterangan`, `idproduk`) VALUES
('G00001', '1663766215_517f4fafbad8f33b9e5a.jpg', '', 'P00001'),
('G00002', '1663765781_235e50946c2d1a4c383a.jpg', 'ini keterangan gambar 2', 'P00001'),
('G00003', '1663765807_532ef7f38a16943931d6.jpg', '', 'P00001'),
('G00004', '1663766629_f780efb22ec00209f098.jpg', '', 'P00001'),
('G00005', '1663771787_963167eb3cc572d88f00.jpg', '', 'P00006'),
('G00006', '1663771799_c7f630ba625c1a6081cc.jpg', '', 'P00006');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `idrole` varchar(6) NOT NULL,
  `nama_role` varchar(45) NOT NULL,
  PRIMARY KEY (`idrole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `nama_role`) VALUES
('R00001', 'ADMINISTRATOR'),
('R00002', 'PERSONEL'),
('R00003', 'SALES');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `idsales` varchar(6) NOT NULL,
  `nama_sales` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tlp` varchar(45) NOT NULL,
  `foto` varchar(150) NOT NULL,
  PRIMARY KEY (`idsales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`idsales`, `nama_sales`, `alamat`, `email`, `tlp`, `foto`) VALUES
('S00001', 'Bambang', 'Sidoarjo', 'bambang@gmail.com', '085731803889', '1662945484_300fad5b6615bc8623b2.png'),
('S00002', 'Anna Cambel', 'Sidoarjo', 'anna@gmail.com', '02837467283', '1662945706_9d198200edf9e42d6a03.png');

-- --------------------------------------------------------

--
-- Table structure for table `sales_medsos`
--

DROP TABLE IF EXISTS `sales_medsos`;
CREATE TABLE IF NOT EXISTS `sales_medsos` (
  `idsales_medsos` varchar(6) NOT NULL,
  `tw` varchar(150) NOT NULL,
  `fb` varchar(150) NOT NULL,
  `gp` varchar(150) NOT NULL,
  `lk` varchar(150) NOT NULL,
  `ig` varchar(150) NOT NULL,
  `idsales` varchar(6) NOT NULL,
  PRIMARY KEY (`idsales_medsos`),
  KEY `FK_sales_medsos_sales` (`idsales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` varchar(6) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`idslider`, `gambar`) VALUES
('S00003', '1663761808_211350d6bc6c46514408.jpg'),
('S00004', '1663761826_c10b41249c6ecc0d3c99.jpg'),
('S00005', '1663761838_5a88919ebf4e876909ba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sliderjudul`
--

DROP TABLE IF EXISTS `sliderjudul`;
CREATE TABLE IF NOT EXISTS `sliderjudul` (
  `idsliderjudul` varchar(6) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `subjudul` varchar(250) NOT NULL,
  PRIMARY KEY (`idsliderjudul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderjudul`
--

INSERT INTO `sliderjudul` (`idsliderjudul`, `judul`, `subjudul`) VALUES
('S00001', 'PROPERTY SEARCHING JUST GOT SO EASY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!');

-- --------------------------------------------------------

--
-- Table structure for table `syarat_khusus`
--

DROP TABLE IF EXISTS `syarat_khusus`;
CREATE TABLE IF NOT EXISTS `syarat_khusus` (
  `idsyarat_khusus` varchar(6) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`idsyarat_khusus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat_khusus`
--

INSERT INTO `syarat_khusus` (`idsyarat_khusus`, `keterangan`) VALUES
('K00001', '<ol style=\"list-style-type: lower-alpha;\">\r\n<li>Masa kerja dinas paling singkat 1 (Satu) tahun atau gaji sudah dipotong iuran Tabpin</li>\r\n<li>Surat pernyataan kesanggupan pemotongan gaji dengan materai cukup melalui Ka Akun atau bendahara pengeluaran</li>\r\n<li>Surat pengantar dari Kotama atau satker kepada Kadiswatpersal</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `syarat_umum`
--

DROP TABLE IF EXISTS `syarat_umum`;
CREATE TABLE IF NOT EXISTS `syarat_umum` (
  `idsyarat_umum` varchar(6) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`idsyarat_umum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat_umum`
--

INSERT INTO `syarat_umum` (`idsyarat_umum`, `keterangan`) VALUES
('S00001', '<ol style=\"list-style-type: lower-alpha;\">\r\n<li>Masa kerja dinas paling singkat 1 (Satu) tahun atau gaji sudah dipotong iuran Tabpin</li>\r\n<li>Surat pernyataan kesanggupan pemotongan gaji dengan materai cukup melalui Ka Akun atau bendahara pengeluaran</li>\r\n<li>Surat pengantar dari Kotama atau satker kepada Kediswatpersal</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` varchar(20) NOT NULL,
  `nrp` varchar(45) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(45) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(45) CHARACTER SET latin1 NOT NULL,
  `idrole` varchar(6) NOT NULL,
  `idkorps` varchar(6) NOT NULL,
  `idpangkat` varchar(6) NOT NULL,
  `foto` varchar(150) CHARACTER SET latin1 NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idusers`),
  KEY `FK_users_role` (`idrole`),
  KEY `FK_users_pangkat` (`idpangkat`),
  KEY `FK_users_korps` (`idkorps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `nrp`, `pass`, `nama`, `idrole`, `idkorps`, `idpangkat`, `foto`, `email`) VALUES
('U00001', 'ADMIN', 'aGtq', 'ADMINISTRATOR', 'R00001', 'K00011', 'P00014', '1662285401_5d458ef626a82ac04e36.png', 'admin@gmail.com'),
('U00002', '112607', 'aGtq', 'Dika Yudha Pratama', 'R00002', 'K00018', 'P00014', '1661787110_48fb49bcc9f7ef80c0a1.png', 'dika@gmail.com'),
('U00008', '114567', 'aGtq', 'Vali Diky Paticelona', 'R00002', 'K00023', 'P00014', '', 'vali@gmail.com'),
('U00009', '115627', 'aGtq', 'Kukuh Adrianto', 'R00002', 'K00011', 'P00014', '', 'kukuh@gmail.com'),
('U00010', '117189', 'aGtq', 'Girda Oky Pillarjati', 'R00002', 'K00010', 'P00014', '', 'girda@gmail.com'),
('U00011', '117271', 'aGtq', 'Muflikhun Najib', 'R00002', 'K00019', 'P00014', '', 'najib@gmail.com'),
('U00012', '117200', 'aGtq', 'Zalferius Fransiskus Rette', 'R00002', 'K00022', 'P00014', '', 'rette@gmail.com'),
('U00013', '118190', 'aGtq', 'Gun Navyadi', 'R00002', 'K00021', 'P00013', '', 'gun@gmail.com'),
('U00014', '119200', 'aGtq', 'Eric Juanto', 'R00002', 'K00009', 'P00013', '', 'eric@gmail.com'),
('U00015', '119201', 'aGtq', 'Syaiful Akbar', 'R00002', 'K00018', 'P00013', '', 'akbar@gmail.com'),
('U00016', '111/P', 'aGtq', 'Rampa praditya', 'R00002', 'K00001', 'P00019', '', 'rampa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `idvendor` varchar(6) NOT NULL,
  `namavendor` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `tlp` varchar(45) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `website` varchar(65) NOT NULL,
  `email` varchar(100) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`idvendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`idvendor`, `namavendor`, `alamat`, `tlp`, `logo`, `website`, `email`, `deskripsi`) VALUES
('V00001', 'PRAMEDIA', 'Rungkut Megah Raya E/16', '085731803889', '1662895657_bf2a116705251844d598.ico', 'https://pramediaenginering.com/', 'rampa@pramedia.com', 'Membangun Kehidupan yang Lebih Baik dengan Software Lebih Sempurna'),
('V00002', 'Koarmada II', 'Dermaga Ujung Surabaya Jawa Timur 60165, Indo', '+62-31-3292706', '1662903187_82af1bd71112dfaf866f.png', 'https://koarmada2.tnial.mil.id/', '', NULL),
('V00003', 'PT. Bumi Jatikalang Sejahtera', 'Jl. Kav. DPR IV No. 8 Sidoarjo- Jatim. 61252', '(031) 8948889', '1663765593_91b427bc330fc3303b53.jpg', '@qualitygroup.id', '', NULL),
('V00004', 'Cilengsui Graha Raya Group', 'Boulevard Raya Coco Garden Kavling 1-5. Klap ', '', '1663765940_c190e68e86c84886ac42.png', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_medsos`
--

DROP TABLE IF EXISTS `vendor_medsos`;
CREATE TABLE IF NOT EXISTS `vendor_medsos` (
  `idvendor_medsos` varchar(6) NOT NULL,
  `tw` varchar(150) NOT NULL,
  `fb` varchar(150) NOT NULL,
  `gp` varchar(150) NOT NULL,
  `lk` varchar(150) NOT NULL,
  `ig` varchar(150) NOT NULL,
  `idvendor` varchar(6) NOT NULL,
  PRIMARY KEY (`idvendor_medsos`),
  KEY `FK_vendor_medsos_key` (`idvendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_medsos`
--

INSERT INTO `vendor_medsos` (`idvendor_medsos`, `tw`, `fb`, `gp`, `lk`, `ig`, `idvendor`) VALUES
('V00001', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'https://pramediaenginering.com/', 'V00001'),
('V00002', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'V00002');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_vendor` FOREIGN KEY (`idvendor`) REFERENCES `vendor` (`idvendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk_img`
--
ALTER TABLE `produk_img`
  ADD CONSTRAINT `FK_produk_img_key` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales_medsos`
--
ALTER TABLE `sales_medsos`
  ADD CONSTRAINT `FK_sales_medsos_sales` FOREIGN KEY (`idsales`) REFERENCES `sales` (`idsales`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_korps` FOREIGN KEY (`idkorps`) REFERENCES `korps` (`idkorps`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_users_pangkat` FOREIGN KEY (`idpangkat`) REFERENCES `pangkat` (`idpangkat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_users_role` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendor_medsos`
--
ALTER TABLE `vendor_medsos`
  ADD CONSTRAINT `FK_vendor_medsos_key` FOREIGN KEY (`idvendor`) REFERENCES `vendor` (`idvendor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
