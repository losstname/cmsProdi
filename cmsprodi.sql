-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2015 at 07:30 PM
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
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `idalbum` int(2) NOT NULL,
  `nama_album` varchar(30) NOT NULL,
  PRIMARY KEY (`idalbum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`idalbum`, `nama_album`) VALUES
(1, 'BCSS'),
(2, 'Diskusi Ilmiah');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE IF NOT EXISTS `dokumentasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id`, `album`, `filename`, `keterangan`, `tanggal`) VALUES
(6, 'Diskusi Ilmiah', 'Diskusi Ilmiah_3.jpg', 'saa asda dad asda dad a', '2015-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE IF NOT EXISTS `penelitian` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(125) NOT NULL,
  `peneliti` varchar(125) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `sumberdana` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id`, `judul`, `peneliti`, `tahun`, `sumberdana`) VALUES
(1, 'penelitian', 'saya', '2992', 'sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian`
--

CREATE TABLE IF NOT EXISTS `pengabdian` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(125) NOT NULL,
  `nama_dosen` varchar(125) NOT NULL,
  `sumber_dana` varchar(124) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengabdian`
--

INSERT INTO `pengabdian` (`id`, `judul`, `nama_dosen`, `sumber_dana`, `tahun`) VALUES
(1, 'pengabdian', 'dia', 'saya', '3229');

-- --------------------------------------------------------

--
-- Table structure for table `post_artikel`
--

CREATE TABLE IF NOT EXISTS `post_artikel` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `Nama` char(50) NOT NULL,
  `Topik` char(50) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Pesan` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `post_artikel`
--

INSERT INTO `post_artikel` (`id`, `tanggal`, `Nama`, `Topik`, `Telepon`, `Email`, `Gambar`, `Pesan`) VALUES
(18, '0000-00-00', 'jkd kfjsd', 'ini judu', '532423', 'losstname@gmail.com', 'Capture.JPG', '<p>kjshfkj jshasjkdha ashdakjd&nbsp;</p>\r\n'),
(20, '0000-00-00', 'Umar Wirahadikusuma', 'informatik', '3872389423', 'fadilahfajriani18@gmail.com', 'createdb.JPG', '<p>dsjhskj dkjfhsdkj hsdfjs fhsdjkfhs</p>\r\n\r\n<p>sdkjfsdhf ksdjfsdhjkfsda</p>\r\n\r\n<p>dfsdfsd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `post_materi`
--

CREATE TABLE IF NOT EXISTS `post_materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `Nama` char(50) NOT NULL,
  `Topik` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pesan` longtext NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `File` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `post_materi`
--

INSERT INTO `post_materi` (`id`, `tanggal`, `Nama`, `Topik`, `Email`, `Pesan`, `Gambar`, `File`) VALUES
(1, '0000-00-00', 'bukansaya', 'inf', 'qwe@gmail.com', 'coba saja', '', ''),
(2, '0000-00-00', 'kjdsbfkjsbfkjsez caevew', 'ini judul', 'ppc.akun@yahoo.com', '<p>dsgjsdlf</p>\r\n\r\n<p>aafja</p>\r\n\r\n<p>fa</p>\r\n\r\n<p>ff;a</p>\r\n\r\n<p>fas</p>\r\n\r\n<p>fa;jf;sdfjs;</p>\r\n', '', ''),
(9, '0000-00-00', 'Umar Wirahadikusuma', 'ini judul', 'losstname@gmail.com', '<p>fjghjkf dsjfhsdkjf jsdkhfskjfa</p>\r\n\r\n<p>&nbsp;jkfhakjdf&nbsp;</p>\r\n', 'Capture.JPG', 'Tutorial.rar'),
(11, '0000-00-00', 'jkdshfkjds', 'informatika j', 'fadilahfajriani18@gmail.com', '<p>jgf jfjhf jfjhf jhhgjhg jhg jhgj</p>\r\n', '1.jpg', 'Portal_Registrasi_Akun_Webmail_UNHAS.zip');

-- --------------------------------------------------------

--
-- Table structure for table `profil_angkatan`
--

CREATE TABLE IF NOT EXISTS `profil_angkatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Angkatan` varchar(10) NOT NULL,
  `Deskripsi` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profil_angkatan`
--

INSERT INTO `profil_angkatan` (`id`, `Angkatan`, `Deskripsi`, `gambar`) VALUES
(1, '2012', '<p>teknik informatika unhas 2012</p>\r\n', 'designmodo.jpg'),
(2, '2014', '<p>sfsdfsdfsd</p>\r\n', 'themeforest.jpg'),
(3, '2013', '<p>alfj dsklsjfalsk fdlkasld jflkasjfslakdfj lkajfsa klfjlksdf</p>\r\n', 'envato.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_dosen`
--

CREATE TABLE IF NOT EXISTS `profil_dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(30) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Bidang` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profil_dosen`
--

INSERT INTO `profil_dosen` (`id`, `Nama`, `Telepon`, `Bidang`, `Alamat`, `Email`, `Gambar`) VALUES
(1, 'bapak', '087243433567', 'multimedia', 'unhas', 'unhastif@gmail.com', '2.jpg'),
(2, 'saya aleghireo ', 'jahff asdjk', '3872389423', 'ppc.akun@yahoo.com', 'asdasd asdas', '3.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE IF NOT EXISTS `publikasi` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(125) NOT NULL,
  `penjelasan` varchar(255) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id`, `judul`, `penjelasan`, `tahun`, `nama_dosen`) VALUES
(2, 'judul cocokmi', 'penjelasan cocokmi', '2004', 'nama cocokmi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
