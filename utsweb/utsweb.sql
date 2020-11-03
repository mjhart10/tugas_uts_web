-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 05:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `tempat_kuliah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `nama`, `tgl_lahir`, `tempat_lahir`, `umur`, `tempat_kuliah`, `jurusan`, `prodi`) VALUES
(1, 'Muhammad Juliansyah', '25-Juli-2000', 'Depok', '20 Tahun', 'Universitas Pembangunan Jaya', 'Fakultas Teknologi Dan Desain', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `kode` int(10) NOT NULL,
  `your_nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`kode`, `your_nama`, `email`, `subjek`, `komen`) VALUES
(21, 'Juliansyah', '46m.juliansyah@gmail.com', 'mencoba', 'wqwqwqwqw'),
(22, 'guns', 'monu@admin.com', 'testing', 'weweweweewewewe');

-- --------------------------------------------------------

--
-- Table structure for table `hoby`
--

CREATE TABLE `hoby` (
  `id` int(10) NOT NULL,
  `hoby1` text NOT NULL,
  `hoby2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoby`
--

INSERT INTO `hoby` (`id`, `hoby1`, `hoby2`) VALUES
(2, 'sepak bola merupakan hobby saya saya bermain bola sejak kecil dan menjadi kebiassan saya sampai saat ini klub favorit saya adalah manchester city', 'bola basket merupakan hoby saya, saya sangat hoby untuk menonton basket di NBA TV menurut saya basket memiliki kultur yang berbeda dari sepak bola bola basket menurut saya cenderung memngikuti gaya hip hop amerika');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(10) NOT NULL,
  `sd` varchar(30) NOT NULL,
  `smp` varchar(40) NOT NULL,
  `smk` varchar(40) NOT NULL,
  `kuliah` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `sd`, `smp`, `smk`, `kuliah`) VALUES
(1, 'SDN Seroja, 2006-2012', 'SMP Gunung Sindur 1, 2012-2015', 'SMK Letris Indonesia 2, 2015-2018', 'Universitas Pembangunan Jaya, 2018-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `hoby`
--
ALTER TABLE `hoby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hoby`
--
ALTER TABLE `hoby`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
