-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2019 at 03:23 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `skck`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_skck`
--
-- Creation: May 17, 2019 at 08:57 AM
-- Last update: May 17, 2019 at 02:22 PM
--

CREATE TABLE IF NOT EXISTS `data_skck` (
  `nomor` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `kebangsaan` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_ktp` int(30) NOT NULL,
  `no_paspor` int(30) NOT NULL,
  `rumus_sidik` varchar(20) NOT NULL,
  `mulai_tinggal` date NOT NULL,
  `sampai_tinggal` date NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `dari_tgl` date NOT NULL,
  `sampai_tgl` date NOT NULL,
  `dikeluarkan_di` varchar(30) NOT NULL,
  `pada_tgl` date NOT NULL,
  PRIMARY KEY (`nomor`,`no_ktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_skck`
--


-- --------------------------------------------------------

--
-- Table structure for table `kesatuan`
--
-- Creation: May 17, 2019 at 10:56 AM
-- Last update: May 17, 2019 at 11:14 AM
--

CREATE TABLE IF NOT EXISTS `kesatuan` (
  `daerah` varchar(50) NOT NULL,
  `kepolisian` varchar(50) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesatuan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--
-- Creation: May 17, 2019 at 09:00 AM
-- Last update: May 17, 2019 at 10:41 AM
--

CREATE TABLE IF NOT EXISTS `pejabat` (
  `nama_pejabat` varchar(50) NOT NULL,
  `pangkat` varchar(25) NOT NULL,
  `nrp` int(11) NOT NULL,
  PRIMARY KEY (`nrp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pejabat`
--

