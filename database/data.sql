-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2016 at 10:01 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` varchar(5) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `tgl_lahir` varchar(35) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama_karyawan`, `tgl_lahir`, `gender`, `alamat`, `no_tlp`, `jabatan`, `foto`) VALUES
('00001', 'Sri astuti', '10 Tahun Sebelum Masehi', 'pria', 'Mesir', '123456789', 'manager', 'frank-lampard.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE IF NOT EXISTS `pelamar` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `posisi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `nama`, `tanggal_lahir`, `gender`, `alamat`, `no_tlp`, `pendidikan`, `posisi`) VALUES
('00001', 'Rio', '01 Pebruari 198', 'pria', 'Jl.graha Indah No.18 Bekasi', '0821667889997', 'D3', 'Supervisor'),
('00002', 'Danang', '19 Juni 1986', 'pria', 'Jl.kelapa gading, Jakarta', '081215254543', 'SMA', 'Operator'),
('00003', 'Linda', '20 Oktober 1985', 'wanita', 'Jl. Raya Jatiasih, Bekasi', '081378654329', 'SMA', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi`
--

CREATE TABLE IF NOT EXISTS `seleksi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `daftar_posisi` varchar(25) NOT NULL,
  `tanggal_seleksi` varchar(25) NOT NULL,
  `waktu_seleksi` varchar(25) NOT NULL,
  `tes_tulis` varchar(20) NOT NULL,
  `tes_wawancara` varchar(20) NOT NULL,
  `hasil` varchar(25) NOT NULL,
  `ket` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seleksi`
--

INSERT INTO `seleksi` (`id`, `nama`, `daftar_posisi`, `tanggal_seleksi`, `waktu_seleksi`, `tes_tulis`, `tes_wawancara`, `hasil`, `ket`) VALUES
(1, 'Rio', 'Supervisor', '14 Maret 2014', '10.00-11.00', '80', '80', '160', 'LULUS'),
(2, 'Danang', 'Operator', '15 Maret 2014', '11.00-12.00', '65', '65', '130', 'TIDAK LULUS'),
(3, 'Linda', 'Operator', '16 Maret 2014', '10.00-11.00', '85', '85', '170', 'LULUS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` char(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
