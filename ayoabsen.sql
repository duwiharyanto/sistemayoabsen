-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2019 at 04:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayoabsen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(6) NOT NULL,
  `user` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id`, `user`, `timestamp`, `message`) VALUES
(40, 'UFR100B4H', '2019-02-06 03:31:52', 'IN'),
(41, 'UFR100B4H', '2019-02-06 03:32:02', 'OUT'),
(42, 'UFR100B4H', '2019-02-08 03:02:42', 'IN'),
(43, 'UFR100B4H', '2019-02-08 03:03:50', 'IN'),
(47, 'UFR100B4H', '2019-02-08 03:11:28', 'OUT'),
(49, 'UFR100B4H', '2019-02-08 03:24:01', 'IN'),
(50, 'UFR100B4H', '2019-02-08 03:39:47', 'in'),
(51, 'UFR100B4H', '2019-02-08 03:40:01', 'out'),
(52, 'UFR100B4H', '2019-02-08 03:40:41', 'in'),
(53, 'UFR100B4H', '2019-02-08 03:40:52', 'IN'),
(55, 'UFR100B4H', '2019-02-08 03:42:42', 'IN'),
(56, 'UFR100B4H', '2019-02-08 03:43:20', 'out'),
(58, 'UFR100B4H', '2019-02-08 04:01:45', 'in'),
(60, 'UFR100B4H', '2019-02-08 04:02:52', 'IN'),
(61, 'UFR100B4H', '2019-02-11 04:41:56', 'IN'),
(62, 'UFR100B4H', '2019-02-11 04:44:40', 'IN'),
(63, 'UFR100B4H', '2019-02-12 03:46:30', 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(6) NOT NULL,
  `user` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `user`, `name`) VALUES
(0, 'POP2322', 'M'),
(0, 'QOZ1222', 'A'),
(0, 'UFR100B4H', 'Indri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `user` varchar(100) NOT NULL,
  `waktu_IN` time NOT NULL,
  `waktu_OUT` time NOT NULL,
  `totalJam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'adminer', '653caf8bdf55d6a99d77ceacd79f622353cd821a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
