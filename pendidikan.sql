-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 09:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_formal`
--

CREATE TABLE IF NOT EXISTS `pendidikan_formal` (
`id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_institusi` varchar(140) NOT NULL,
  `tingkatan` varchar(20) NOT NULL,
  `gelar` varchar(10) NOT NULL,
  `jurusan` varchar(140) NOT NULL,
  `no_ijazah` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan_formal`
--

INSERT INTO `pendidikan_formal` (`id`, `nip`, `nama_institusi`, `tingkatan`, `gelar`, `jurusan`, `no_ijazah`, `tahun`) VALUES
(1, 12345678, 'ITB', 'S1', 'ST', 'Teknik Informatika', 'ab12345', 2001),
(2, 12345678, 'ITB', 'S2', 'M.T.', 'Teknik Elektro', 'bc23455', 2007);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
