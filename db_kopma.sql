-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2018 pada 17.48
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `BRG_ID` varchar(10) NOT NULL,
  `BRG_NAMA` varchar(300) DEFAULT NULL,
  `BRG_STOCK` int(11) DEFAULT NULL,
  `BRG_HARGA` int(11) DEFAULT NULL,
  `BRG_EXPIRED` date DEFAULT NULL,
  `BRG_INPUT_TGL` varchar(50) DEFAULT NULL,
  `BRG_HARGA_JUAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`BRG_ID`, `BRG_NAMA`, `BRG_STOCK`, `BRG_HARGA`, `BRG_EXPIRED`, `BRG_INPUT_TGL`, `BRG_HARGA_JUAL`) VALUES
('87465853', 'Pupuk Organik Curah', 100, 50000, '0000-00-00', '0000-00-00 00:00:00', 51000),
('8768768', 'Energen 30 kg', 12, 5000, '2018-01-01', '2017/12/13', 10000),
('98754', 'Pepsodent 13 ml', 100, 10000, '2017-12-30', '0000-00-00 00:00:00', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `TRANS_ID` varchar(10) NOT NULL,
  `BRG_ID` varchar(10) NOT NULL,
  `TRANS_QTY` int(11) DEFAULT NULL,
  `TRANS_HARGA_SATUAN` int(11) DEFAULT NULL,
  `TRANS_SEMUA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`TRANS_ID`, `BRG_ID`, `TRANS_QTY`, `TRANS_HARGA_SATUAN`, `TRANS_SEMUA`) VALUES
('TRANS003', '87465853', 13, 51000, 663000),
('TRANS003', '8768768', 19, 10000, 190000),
('TRANS004', '87465853', 14, 51000, 714000),
('TRANS004', '98754', 20, 12000, 240000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `KSR_ID` varchar(10) NOT NULL,
  `KSR_PASSWORD` varchar(200) DEFAULT NULL,
  `KSR_NAMA` varchar(100) DEFAULT NULL,
  `KSR_JABATAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kasir`
--

INSERT INTO `tb_kasir` (`KSR_ID`, `KSR_PASSWORD`, `KSR_NAMA`, `KSR_JABATAN`) VALUES
('KS001', 'c4ca4238a0b923820dcc509a6f75849b', 'Rista Ameli', 'Kasir'),
('MG01', 'c4ca4238a0b923820dcc509a6f75849b', 'Ergi S', 'Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `TRANS_ID` varchar(10) NOT NULL,
  `KSR_ID` varchar(10) NOT NULL,
  `TRANS_TGL` date DEFAULT NULL,
  `TRANS_TOTAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`TRANS_ID`, `KSR_ID`, `TRANS_TGL`, `TRANS_TOTAL`) VALUES
('%3C', 'KS001', '2017-12-19', NULL),
('TRANS001', 'KS001', '2017-12-19', NULL),
('TRANS002', 'KS001', '2018-01-05', NULL),
('TRANS003', 'KS001', '2018-01-05', 853000),
('TRANS004', 'KS001', '2018-01-05', 954000),
('TRANS005', 'KS001', '2018-01-06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`BRG_ID`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`TRANS_ID`,`BRG_ID`),
  ADD KEY `FK_DIJUAL` (`BRG_ID`);

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`KSR_ID`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `FK_MEMASUKKAN` (`KSR_ID`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `FK_DIJUAL` FOREIGN KEY (`BRG_ID`) REFERENCES `tb_barang` (`BRG_ID`),
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`TRANS_ID`) REFERENCES `tb_transaksi` (`TRANS_ID`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `FK_MEMASUKKAN` FOREIGN KEY (`KSR_ID`) REFERENCES `tb_kasir` (`KSR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
