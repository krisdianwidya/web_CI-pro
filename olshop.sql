-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 02:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_iklan`
--

CREATE TABLE `data_iklan` (
  `ID_IKLAN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `JUDUL_IKLAN` varchar(50) NOT NULL,
  `FOTO_IKLAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI` varchar(1000) DEFAULT NULL,
  `HARGA` int(11) NOT NULL,
  `KATEGORI` varchar(20) NOT NULL,
  `TANGGAL_IKLAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VERIFIKASI` tinyint(1) DEFAULT NULL,
  `LAKU` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_iklan`
--

INSERT INTO `data_iklan` (`ID_IKLAN`, `ID_USER`, `JUDUL_IKLAN`, `FOTO_IKLAN`, `DESKRIPSI`, `HARGA`, `KATEGORI`, `TANGGAL_IKLAN`, `VERIFIKASI`, `LAKU`) VALUES
(12, 12, 'Kamera', 'kamera.jpg', 'Nego gan', 8000023, 'Elektronik', '2017-05-31 16:00:50', 1, 0),
(18, 14, 'Bola basket', 'file_1496760943.jpg', 'good', 500000, 'Olahraga', '2017-06-06 14:55:43', 1, 0),
(20, 14, 'Laptop', 'file_1496761191.png', 'apik', 200000, 'Elektronik', '2017-06-06 14:59:51', 1, 0),
(30, 13, 'Tes', 'file_1543756998.png', 'edit ininiansia ia iansia siansans aisias ansiahsaihsa siahs iahis asnjansiasians aisiansia.', 223232, 'Elektronik', '2018-12-02 13:23:18', 1, 0),
(64, 13, 'mesin cuci bagus', 'cuci1.jpg', 'limited edition limited edition limited editionlimited editionlimited editionlimited editionlimited editionlimited editionlimited edition limited edition limited edition limited edition.', 3599599, 'Elektronik', '2018-12-02 13:21:26', 1, 0),
(65, 13, 'washing machine', 'cuci1.jpg', 'limited edition limited edition limited editionlimited editionlimited editionlimited editionlimited editionlimited editionlimited edition limited edition limited edition limited edition.', 2626269, 'Elektronik', '2018-12-11 13:21:26', 1, 1),
(75, 13, 'TV bagus 2', 'file_1572784749.jpg', 'snglbnkslla jgkeagflaj jalmf labflaf alkngf lakfn laknf lasnd lasnd lasd', 2500000, 'Elektronik', '2019-11-05 12:39:09', 1, 1),
(76, 13, 'TV bagus', 'file_1572784749.jpg', 'edit qoidfqid 2doiqwdpiahfeheqphf caoiehvoiahvoiadshvoiav oiahvoiahiahf lahfoiahfo afhoa akb.', 2500000, 'Elektronik', '2019-11-03 12:39:09', 1, 0),
(78, 13, 'Vespa edit', 'file_1572788468.jpg', 'kjsbgkjsbgkuwhgh whgwhgwohohwf woihoiwhe fiweoiwyhoqh qoiyufoiqhfe iquefkpeqjpf qhfoieqyoifyqi viqyeoih3f8q foqiyfoihqeoiyf0q8v qohvoqehfoigq foiqefoiq8foiq f8qyfoihqoif qoieyfoqyfe8heov oiefhoqeyfoiqf qoieyfoiqye8fhoqif qoieyfqyfpiefhpefyeqyf e foiwfoiewofyw fowye8ofh we8yfiwey fo8weoif woeyfiw fyeygp9qygihojq;o83hrlke fihegh 8hg fi eifh8fihaeifhlihe;og qfifpiqhjopj hgiwhg edit.', 100000000, 'Otomotif', '2019-11-03 13:41:08', 0, 0),
(79, 13, 'Coba (Televisi) 2ljn lsn ls lkn lsk', 'file_1572784749.jpg', 'jbekjebfkqjhfqhef hqefoiqhfoiqef qoiefhoiqyfoqpfoiqhfeoiqehf qoifhqoihf qoidfqid 2doiqwdpiahfeheqphf caoiehvoiahvoiadshvoiav oiahvoiahiahf lahfoiahfo afhoa akb.', 2500000, 'Elektronik', '2019-11-03 12:39:09', 0, 0),
(98, 13, 'Vespa edit 1', 'file_1572788468.jpg', 'kjsbgkjsbgkuwhgh whgwhgwohohwf woihoiwhe fiweoiwyhoqh qoiyufoiqhfe iquefkpeqjpf qhfoieqyoifyqi viqyeoih3f8q foqiyfoihqeoiyf0q8v qohvoqehfoigq foiqefoiq8foiq f8qyfoihqoif qoieyfoqyfe8heov oiefhoqeyfoiqf qoieyfoiqye8fhoqif qoieyfqyfpiefhpefyeqyf e foiwfoiewofyw fowye8ofh we8yfiwey fo8weoif woeyfiw fyeygp9qygihojq;o83hrlke fihegh 8hg fi eifh8fihaeifhlihe;og qfifpiqhjopj hgiwhg edit.', 45262626, 'Otomotif', '2019-11-06 13:41:08', 0, 0),
(99, 13, 'Tes lkhvlwhgoiwhvowe', 'file_1543756998.png', 'data teso vwoivoiwvnowinv', 2000, 'Elektronik', '2018-12-02 13:23:18', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_komentar`
--

CREATE TABLE `data_komentar` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `ID_IKLAN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ISI_KOMENTAR` varchar(500) DEFAULT NULL,
  `TANGGAL_KOMENTAR` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_komentar`
--

INSERT INTO `data_komentar` (`ID_KOMENTAR`, `ID_IKLAN`, `ID_USER`, `ISI_KOMENTAR`, `TANGGAL_KOMENTAR`) VALUES
(1, 30, 13, 'tes tes tes testesteste testes tes tes tes tes tes testestes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes tes.', '2019-11-22 11:42:59'),
(2, 30, 7, 'tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2.', '2019-11-13 11:42:59'),
(3, 30, 16, 'tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2.', '2019-11-01 11:42:59'),
(4, 30, 12, 'iahdua akj adoa foaihdoaindoa tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2 tes2.', '2019-11-01 11:42:59'),
(5, 30, 13, 'aaa aaa aaa aaa', '2019-11-22 15:45:00'),
(6, 30, 13, 'aaa aaa aaa aahee hehe hehe a heheh eh eh ehe he he eheh eh ehe he eh ehe  e aaa aaa aaa aahee hehe hehe a heheh eh eh ehe he he eheh eh ehe he eh ehe ', '2019-11-22 15:45:59'),
(7, 64, 13, 'tes', '2019-11-23 05:59:33'),
(8, 64, 13, 'up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan up gan.', '2019-11-23 05:59:50'),
(9, 75, 13, 'nego gan', '2019-11-24 12:14:01'),
(10, 99, 13, 'up upupupupup up up up up up up up up up up up up up up up up up', '2019-11-24 12:23:17'),
(11, 99, 13, 'up upupupupup up up up up up up up up up up up up up up up up up', '2019-11-24 12:23:20'),
(12, 99, 13, 'up upupupupup up up up up up up up up up up up up up up up up edit', '2019-11-24 12:23:27'),
(13, 99, 13, 'tes tes tes', '2019-11-24 12:26:11'),
(14, 30, 13, 'up gan', '2019-11-24 12:31:32'),
(15, 30, 13, 'oeoeoe', '2019-11-24 12:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(50) NOT NULL,
  `NO_HP` varchar(30) NOT NULL,
  `TEMPAT_LAHIR` varchar(30) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `TIPE_USER` varchar(6) NOT NULL,
  `FOTO_USER` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`ID_USER`, `NAMA_USER`, `NO_HP`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `ALAMAT`, `JENIS_KELAMIN`, `TIPE_USER`, `FOTO_USER`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
(7, 'md', '12414', 'md', '2017-05-08', 'blili', 'L', 'Member', 'file_1495860677.JPG', 'kjsgbksj@gmail.com', 'mdmdm', 'bae441727eba703f1dee4194099f4c62'),
(9, 'Widya Ekatama', '081241241135', 'Jombang', '2017-05-10', 'Jombang', 'L', '1', 'file_1496242646.png', 'widya@yahoo.com', 'widyaadmin', 'widyaadmin'),
(12, 'Maya A', '0123456789', 'Surabaya', '1998-05-18', 'Jalan Soekarno Hatta', 'P', 'Member', 'file_1496760630.jpg', 'ayamm@gmail.com', 'mmaya', 'df9d5ffbbeeff76f2c5d4f5b39a577c8'),
(13, 'Ming Yao', '525251', 'China', '2017-06-26', 'Bandung', 'L', 'Member', 'barbarKing1.jpg', 'yaomingefef@gmail.com', 'yaoming', 'yaoming'),
(14, 'Ronaldo', '76796701', 'Blitar', '2017-06-15', 'Jalan Cengkeh', 'L', 'Member', 'file_1496316523.jpg', 'ronaldo@yahoo.com', 'ronaldo', 'c5aa3124b1adad080927ce4d144c6b33'),
(16, 'Krisdian Widya', '081234567891', NULL, NULL, NULL, NULL, 'Member', NULL, 'krisdian@gmail.com', 'kriswidya', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'Widya Ekatama', '08156754764', NULL, NULL, NULL, NULL, 'Member', NULL, 'widya@gmail.com', 'widyaeka', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, 'qwertyuiop', '345647689797', NULL, NULL, NULL, NULL, 'Member', NULL, 'qwert@gmail', 'qwerty', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_iklan`
--
ALTER TABLE `data_iklan`
  ADD PRIMARY KEY (`ID_IKLAN`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `data_komentar`
--
ALTER TABLE `data_komentar`
  ADD PRIMARY KEY (`ID_KOMENTAR`),
  ADD KEY `ID_IKLAN` (`ID_IKLAN`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_iklan`
--
ALTER TABLE `data_iklan`
  MODIFY `ID_IKLAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `data_komentar`
--
ALTER TABLE `data_komentar`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_iklan`
--
ALTER TABLE `data_iklan`
  ADD CONSTRAINT `data_iklan_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `data_user` (`ID_USER`);

--
-- Constraints for table `data_komentar`
--
ALTER TABLE `data_komentar`
  ADD CONSTRAINT `data_komentar_ibfk_1` FOREIGN KEY (`ID_IKLAN`) REFERENCES `data_iklan` (`ID_IKLAN`),
  ADD CONSTRAINT `data_komentar_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `data_user` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
