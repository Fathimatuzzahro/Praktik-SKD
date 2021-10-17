-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 06:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keamananschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginlogs`
--

CREATE TABLE `loginlogs` (
  `id` int(100) NOT NULL,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_coding_sha`
--

CREATE TABLE `tb_coding_sha` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_coding_sha`
--

INSERT INTO `tb_coding_sha` (`id`, `username`, `email`, `passwordd`) VALUES
(1, 'Devi', 'devianggita41@gmail.com', 'b3c53b8004bb446f0600d97a55ec0d49ad8e15c1'),
(4, 'adi', 'adi@gmail.com', 'dfc87a8a900d23c665de66efee2248b6881b7771'),
(10, 'anggita27', 'anggita41@gmail.com', '52a88d62b70c14df7ce756ed58864ee92d54e55f'),
(11, 'Devi', 'devianggita41@gmail.com', 'a2a3c2796529e39b8a4dc0ee19640ab1d5f7cb66');

-- --------------------------------------------------------

--
-- Table structure for table `tb_designweb_sha`
--

CREATE TABLE `tb_designweb_sha` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_designweb_sha`
--

INSERT INTO `tb_designweb_sha` (`id`, `username`, `email`, `passwordd`) VALUES
(1, 'Devi Anggita', 'devianggita41@gmail.com', 'b3c53b8004bb446f0600d97a55ec0d49ad8e15c1'),
(2, 'Anggita', 'anggita41@gmail.com', '447f6f57de58e846355421e3509340c179258f05'),
(3, 'Devi', 'devianggita41@gmail.com', 'b3c53b8004bb446f0600d97a55ec0d49ad8e15c1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_extrakulikuler`
--

CREATE TABLE `tb_extrakulikuler` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_extrakulikuler`
--

INSERT INTO `tb_extrakulikuler` (`id`, `username`, `email`, `passwordd1`) VALUES
(1, 'Devi', 'devianggita41@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Salma Sabrina', 'salma123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Anggita41', 'devianggita41@gmail.com', 'ff47ec10cbc6e64ab270b5cfb40755f2'),
(6, 'DeviAA', 'devianggita27@gmail.com', 'd55e27c13f7c7278ac8ed26333446f91'),
(7, 'Devi123', 'devi123@gmail.com', '18965f652fdc43f0b18da6a3d6d3c3cf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_javascript_sha`
--

CREATE TABLE `tb_javascript_sha` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_javascript_sha`
--

INSERT INTO `tb_javascript_sha` (`id`, `username`, `email`, `passwordd`) VALUES
(1, 'Devi Anggita', 'devianggita41@gmail.com', 'b3c53b8004bb446f0600d97a55ec0d49ad8e15c1'),
(3, 'Adi', 'adisaputra123@gmail.com', 'dfc87a8a900d23c665de66efee2248b6881b7771'),
(4, 'anggita', 'anggita41@gmail.com', '447f6f57de58e846355421e3509340c179258f05'),
(5, 'Devi', 'devianggita41@gmail.com', '8ebe75c9f6b52e1451ceff32a22233f8b3e00c01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keamanandata_sha`
--

CREATE TABLE `tb_keamanandata_sha` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keamanandata_sha`
--

INSERT INTO `tb_keamanandata_sha` (`id`, `username`, `email`, `passwordd`) VALUES
(1, 'Devi Anggita', 'devianggita41@gmail.com', '33a4564089acf2779ffca89cdbb9430722e862e4'),
(2, 'Salma Sabrina', 'salma123@gmail.com', 'f707da5997fdee76c12b93b03206e3dd56fb4b84'),
(3, 'DeviAA', 'devianggita27@gmail.com', '9045c25c736b58b2bbf8163e81c43ed11909ad33'),
(4, 'Devi', 'devianggita41@gmail.com', '8ebe75c9f6b52e1451ceff32a22233f8b3e00c01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` varchar(100) NOT NULL,
  `rolee` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `passwordd`, `rolee`, `ket`) VALUES
(1, 'Devi Anggita Ambarwati', 'Devi', 'devianggita41@gmail.com', '18965f652fdc43f0b18da6a3d6d3c3cf', 'admin', 'lock'),
(11, 'Adi Saputra', 'Adi', 'Adi@gmail.com', 'c46335eb267e2e1cde5b017acb4cd799', 'user', 'unlock'),
(12, 'Devi Anggita', 'DeviAA', 'devianggita41@gmail.com', 'd55e27c13f7c7278ac8ed26333446f91', 'user', 'unlock'),
(13, 'Salma Sabrina', 'Salma Sabrina', 'salma123@gmail.com', '34b0d4d0b3c4173ec489e4ab677cbbdf', 'user', 'unlock'),
(14, 'Anggita', 'Anggita41', 'devianggita41@gmail.com', 'ff47ec10cbc6e64ab270b5cfb40755f2', 'user', 'unlock'),
(15, 'Devi Anggita Ambarwati', 'DeviAnggita27', 'devianggita41@gmail.com', 'd55e27c13f7c7278ac8ed26333446f91', 'user', 'unlock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginlogs`
--
ALTER TABLE `loginlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_coding_sha`
--
ALTER TABLE `tb_coding_sha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_designweb_sha`
--
ALTER TABLE `tb_designweb_sha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_extrakulikuler`
--
ALTER TABLE `tb_extrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_javascript_sha`
--
ALTER TABLE `tb_javascript_sha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keamanandata_sha`
--
ALTER TABLE `tb_keamanandata_sha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginlogs`
--
ALTER TABLE `loginlogs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_coding_sha`
--
ALTER TABLE `tb_coding_sha`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_designweb_sha`
--
ALTER TABLE `tb_designweb_sha`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_extrakulikuler`
--
ALTER TABLE `tb_extrakulikuler`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_javascript_sha`
--
ALTER TABLE `tb_javascript_sha`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_keamanandata_sha`
--
ALTER TABLE `tb_keamanandata_sha`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
