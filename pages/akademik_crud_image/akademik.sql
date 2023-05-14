-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2022 at 02:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_mahasiswa`
--

CREATE TABLE `table_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_mahasiswa`
--

INSERT INTO `table_mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `prodi`, `angkatan`, `photo`) VALUES
(7, 42513002, 'Aris', 'TKJ', '2013', '03072022104840-Akademik-default-avatar.png'),
(21, 4252002, 'pulung hendro prastyo', 'TKJ', '2021', '03072022104427-Akademik-87-871895_interview-icon-png.png'),
(22, 4252001, 'pulung', 'TKJ', '2013', '03072022162819-Akademik-1200px-Android_Studio_icon.svg.png'),
(23, 42513020, 'Arik bin Bash', 'TRJT', '2020', '03072022162911-Akademik-3a.png'),
(24, 42513023, 'Andy Resh', 'TKJ', '2013', '03072022104502-Akademik-6b3b6c6a6ec4416a20bf82994e732933.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'pulung', '0192023a7bbd73250516f069df18b500', 'php@gmail.com'),
(2, 'yusri', '0192023a7bbd73250516f069df18b500', 'yusrianto@gmil.com'),
(3, 'php', '0192023a7bbd73250516f069df18b500', 'pulung.hendro@gmail.com'),
(4, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com'),
(5, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
