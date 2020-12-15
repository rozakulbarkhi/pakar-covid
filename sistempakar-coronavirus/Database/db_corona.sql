-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 12:52 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(1, 'G1', 'Demam'),
(2, 'G2', 'Batuk'),
(3, 'G3', 'Kelelahan'),
(4, 'G4', 'Sesak nafas'),
(5, 'G5', 'Tidak enak badan'),
(6, 'G6', 'Sakit dan nyeri tubuh'),
(7, 'G7', 'Sakit kepala'),
(8, 'G8', 'Menggigil'),
(9, 'G9', 'Nyeri otot'),
(10, 'G10', 'Ingus'),
(11, 'G11', 'Sakit tenggorokan'),
(12, 'G12', 'Mual'),
(13, 'G13', 'Diare'),
(14, 'G14', 'Hilang rasa'),
(15, 'G15', 'Hilang bau'),
(16, 'G16', 'Batuk tidak berdahak'),
(17, 'G17', 'Batuk berdarah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `idhasil` int(5) NOT NULL,
  `idpasien` int(5) NOT NULL,
  `kdpenyakit` varchar(4) NOT NULL,
  `persentase` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `idpasien` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`idpasien`, `nama`, `gender`, `umur`, `alamat`) VALUES
(48, 'sasa', '', 'sas', 'sasa'),
(49, 'sasa', '', 'sas', 'sasa'),
(50, 'sasa', '', 'sas', 'sasa'),
(51, 'sasa', '', 'sas', 'sas'),
(52, '', '', '', ''),
(53, 'sasa', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(16) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`) VALUES
(1, 'P001', 'SARS'),
(2, 'P002', 'MERS'),
(3, 'P003', 'COVID-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_problem` int(11) DEFAULT NULL,
  `id_evidence` int(11) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id_problem`, `id_evidence`, `cf`) VALUES
(1, 1, 0.8),
(1, 2, 0.8),
(1, 3, 0.8),
(1, 4, 0.6),
(1, 5, 0.8),
(1, 6, 0.72),
(1, 7, 0.8),
(1, 8, 0.66),
(1, 13, 0.6),
(1, 16, 0.8),
(3, 15, 0.6),
(2, 1, 0.8),
(2, 2, 0.8),
(2, 4, 0.6),
(2, 5, 0.8),
(2, 8, 0.66),
(2, 9, 0.8),
(2, 12, 0.6),
(2, 13, 0.6),
(2, 17, 0.85),
(3, 1, 0.8),
(3, 2, 0.8),
(3, 4, 0.6),
(3, 7, 0.8),
(3, 8, 0.66),
(3, 9, 0.8),
(2, 10, 0.6),
(2, 11, 0.88),
(3, 12, 0.6),
(3, 13, 0.6),
(3, 14, 0.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `idhasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
