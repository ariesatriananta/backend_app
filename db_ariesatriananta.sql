-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 09:40 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ariesatriananta`
--
CREATE DATABASE IF NOT EXISTS `db_ariesatriananta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ariesatriananta`;

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `kode_agama` int(11) NOT NULL AUTO_INCREMENT,
  `agama` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_agama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`kode_agama`, `agama`) VALUES
(1, 'Islam'),
(4, 'Khatolik'),
(7, 'Yahudi');

-- --------------------------------------------------------

--
-- Table structure for table `jk`
--

CREATE TABLE IF NOT EXISTS `jk` (
  `kode_jk` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_jk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jk`
--

INSERT INTO `jk` (`kode_jk`, `jk`) VALUES
(1, 'cowo'),
(2, 'cewe');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_user`
--

CREATE TABLE IF NOT EXISTS `kategori_user` (
  `kode_kat_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kat_user` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_kat_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kategori_user`
--

INSERT INTO `kategori_user` (`kode_kat_user`, `nama_kat_user`) VALUES
(2, 'Administrator'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `nis` int(12) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `umur` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_jk` int(11) NOT NULL,
  `kode_agama` int(11) NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `kode_jk` (`kode_jk`,`kode_agama`),
  KEY `kode_agama` (`kode_agama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nis`, `tgl`, `umur`, `nama`, `kode_jk`, `kode_agama`) VALUES
(1111, '2014-10-09 09:16:00', 1, 'asdasdasdasas', 1, 4),
(1212, '2014-10-09 09:36:29', 12, 'asdasdasd', 2, 4),
(22222, '2014-11-09 09:24:22', 22, 'qwe', 2, 4),
(33333, '2014-10-09 09:35:05', 33, 'sadasdad', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(100) NOT NULL,
  `kode_kat_user` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user`),
  KEY `kode_kat_user` (`kode_kat_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `kode_kat_user`, `password`) VALUES
('admin', 2, 'admin'),
('op', 3, 'op');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`kode_jk`) REFERENCES `jk` (`kode_jk`),
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`kode_agama`) REFERENCES `agama` (`kode_agama`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`kode_kat_user`) REFERENCES `kategori_user` (`kode_kat_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
