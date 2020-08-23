-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 08:12 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbar` int(4) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbar`, `nama`, `kategori`) VALUES
(14, 'Kemangi', 'Bumbu Lalapan'),
(15, 'Jahe merah', 'rempah-rempah'),
(16, 'peh jan', 'ngawur to cah iki'),
(17, 'ada isinya', 'ngawur'),
(19, 'Pancing Iwak', 'Keren bos'),
(20, 'LAH', 'alhamdulillah'),
(21, 'Ayam Kremes', 'Ayah Muda Keren Bikin GEmens'),
(22, 'Mobil', 'avanza'),
(23, 'Tisu', 'basah'),
(24, 'Siska', 'Amalia'),
(26, 'Emas', 'Asli'),
(27, 'Emas', 'Asli'),
(28, 'Emas', 'antam'),
(29, 'Emas', 'antam'),
(30, 'trt', '88'),
(31, 'radio Q', 'AL Umm'),
(32, 'radio Q', 'AL Umm'),
(33, 'radio Q', 'AL Umm'),
(34, 'radio Q', 'AL Umm'),
(35, 'Balon', 'BEsar'),
(36, 'Kajian Imus', 'Islam'),
(37, 'Handphone', 'Samsung'),
(38, 'Iwak Peyek', 'Pecel'),
(39, 'Iwak Peyek', 'Pecel'),
(40, 'Telo Godok', 'Enak tenan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
