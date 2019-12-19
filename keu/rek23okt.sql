-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2011 at 04:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mardi`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_rekdpt`
--

CREATE TABLE IF NOT EXISTS `m_rekdpt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsub` varchar(30) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_rekdpt`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_rekklr`
--

CREATE TABLE IF NOT EXISTS `m_rekklr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsub` varchar(30) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `ket` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `m_rekklr`
--


-- --------------------------------------------------------

--
-- Table structure for table `m_reksub`
--

CREATE TABLE IF NOT EXISTS `m_reksub` (
  `idrek` int(11) NOT NULL AUTO_INCREMENT,
  `idsub` varchar(255) NOT NULL,
  `namasub` varchar(100) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`idrek`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `m_reksub`
--

INSERT INTO `m_reksub` (`idrek`, `idsub`, `namasub`, `norek`, `nama`, `status`) VALUES
(1, '1', '', '100', 'Klas IA', ''),
(2, 'IA', 'A. Dewasa', '100', 'Perwt. Klas IA', 'Pendapatan'),
(3, 'IA', 'A. Dewasa', '101', 'Perwt. Klas IB', 'Pendapatan'),
(4, 'IA', 'A. Dewasa', '102', 'Perwt. Klas II', 'Pendapatan'),
(5, 'IA', 'A. Dewasa', '103', 'Perwt. Klas IIIA', 'Pendapatan'),
(6, 'IA', 'A. Dewasa', '104', 'Perwt. Klas IIIB', 'Pendapatan'),
(7, 'IB', 'B. Bayi Sehat', '105', 'Perwt. Klas IA', 'Pendapatan'),
(8, 'IB', 'B. Bayi Sehat', '106', 'Perwt. Klas IB', 'Pendapatan'),
(9, 'IB', 'B. Bayi Sehat', '107', 'Perwt. Klas II', 'Pendapatan'),
(10, 'IB', 'B. Bayi Sehat', '108', 'Perwt. Klas IIIA', 'Pendapatan'),
(11, 'IB', 'B. Bayi Sehat', '109', 'Perwt. Klas IIIB', 'Pendapatan'),
(12, 'IC', 'C. Anak/Bayi Sakit', '110', 'Perwt. Klas IA', 'Pendapatan'),
(13, 'IC', 'C. Anak/Bayi Sakit', '111', 'Perwt. Klas IB', 'Pendapatan'),
(14, 'IC', 'C. Anak/Bayi Sakit', '112', 'Perwt. Klas II', 'Pendapatan'),
(15, 'IC', 'C. Anak/Bayi Sakit', '113', 'Perwt. Klas IIIA', 'Pendapatan'),
(16, 'IC', 'C. Anak/Bayi Sakit', '114', 'Perwt. Klas IIIB', 'Pendapatan'),
(17, 'ID', 'D. Khusus', '115', 'Perwt. Khusus', 'Pendapatan'),
(18, 'II', 'II Rawat Jalan', '200', 'Karcis', 'Pendapatan'),
(19, 'IIIA', 'A. Honor Asisten', '300', 'Asisten Operasi', 'Pendapatan'),
(20, 'IIIB', 'B. Honor Dokter', '302', 'Dokter Sp. OG', 'Pendapatan'),
(21, 'IIIC', 'C. Lainnya', '307', 'Sumbangan 10%', 'Pendapatan'),
(22, 'IVA', 'A. Dewasa', '400', 'Obat', 'Pendapatan'),
(23, 'IVB', 'B. Anak', '402', 'Obat', 'Pendapatan'),
(24, 'IVC', 'C. Kamar Operasi', '404', 'Obat', 'Pendapatan'),
(25, 'IVD', 'D. Poliklinik', '406', 'Obat', 'Pendapatan'),
(26, 'V', 'V Laboratorium', '500', 'Pemeriksaan Lab', 'Pendapatan'),
(27, 'VI', 'VI KM. Tindakan', '600', 'Kaber', 'Pendapatan'),
(28, 'VII', 'VII Gaji', '700', 'Astek', 'Pendapatan'),
(29, 'VIII', 'VIII Adm/Rehabilitasi', '800', 'Administrasi', 'Pendapatan'),
(30, 'IX', 'IX Lainnya', '902', 'Asrama', 'Pendapatan'),
(31, 'KI', 'Instalasi Gizi', '1000', 'Beras', 'Pengeluaran'),
(32, 'KIIA', 'IIA Inventaris', '2000', 'Medis', 'Pengeluaran'),
(33, 'KIIB', 'IIB Habis Pakai', '2002', 'ATK', 'Pengeluaran'),
(34, 'KIIC', 'IIC Perawatan', '2007', 'Inventaris', 'Pengeluaran'),
(35, 'KIID', 'IID Kendaraan', '2010', 'Premium/Olie', 'Pengeluaran'),
(36, 'KIIIA', 'IIIA Honor Asisten', '3000', 'Asisten Operasi', 'Pengeluaran'),
(37, 'KIIIB', 'IIIB Honor Dokter', '3002', 'Dokter Sp. OG', 'Pengeluaran'),
(38, 'KIIIC', 'IIIC Lainnya', '3006', 'PPh. Dokter 6%', 'Pengeluaran'),
(39, 'KIV', 'IV Obat/Alkes', '4000.a', 'Obat. A', 'Pengeluaran'),
(40, 'KV', 'V Laboratorium', '5000', 'Obat/Bahan/Alat', 'Pengeluaran'),
(41, 'KVI', 'VI KM. Tindakan', '6000', 'Alkes. Kaber', 'Pengeluaran'),
(42, 'KVII', 'VII Gaji', '7000', 'Astek', 'Pengeluaran'),
(43, 'KVIII', 'VIII Kegiatan', '8001', 'Pastoral', 'Pengeluaran'),
(44, 'KIX', 'IX Lainnya', '9004', 'PLN', 'Pengeluaran');
