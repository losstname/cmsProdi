-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2015 at 08:11 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmsprodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `post_artikel`
--

CREATE TABLE IF NOT EXISTS `post_artikel` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Nama` char(50) NOT NULL,
  `Topik` char(50) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Pesan` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_artikel`
--

INSERT INTO `post_artikel` (`id`, `Nama`, `Topik`, `Telepon`, `Email`, `Gambar`, `Pesan`) VALUES
(1, 'saya aleghireo eifheofwehf lkwehworfhrwo3rhwlf h3o', 'informatika jkhefiuse dsjfhseur fshlehrweo', '123456875983', 'abc@gmail.com', 'kosong', 'tes tes isi databasejkfhkjsfhefwevwe sajlhvajkghak alhfakuhgwae');

-- --------------------------------------------------------

--
-- Table structure for table `post_materi`
--

CREATE TABLE IF NOT EXISTS `post_materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` char(50) NOT NULL,
  `Topik` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pesan` longtext NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `File` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_materi`
--

INSERT INTO `post_materi` (`id`, `Nama`, `Topik`, `Email`, `Pesan`, `Gambar`, `File`) VALUES
(1, 'bukansaya', 'inf', 'qwe@gmail.com', 'coba saja', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profil_angkatan`
--

CREATE TABLE IF NOT EXISTS `profil_angkatan` (
  `Angkatan` varchar(30) NOT NULL,
  `Deskripsi` longtext NOT NULL,
  PRIMARY KEY (`Angkatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_angkatan`
--

INSERT INTO `profil_angkatan` (`Angkatan`, `Deskripsi`) VALUES
('2012', 'teknik informatika unhas 2012');

-- --------------------------------------------------------

--
-- Table structure for table `profil_dosen`
--

CREATE TABLE IF NOT EXISTS `profil_dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` char(30) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Bidang` char(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profil_dosen`
--

INSERT INTO `profil_dosen` (`id`, `Nama`, `Telepon`, `Bidang`, `Alamat`, `Email`) VALUES
(1, 'bapak', '087243433567', 'multimedia', 'unhas', 'unhastif@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `profil_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `profil_mahasiswa` (
  `Nama` char(50) NOT NULL,
  `Nim` varchar(9) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_mahasiswa`
--

INSERT INTO `profil_mahasiswa` (`Nama`, `Nim`, `Alamat`, `Email`) VALUES
('kjhgfds', 'A43223454', 'pkg', 'gowa@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
