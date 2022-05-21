-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barcode` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `harga` float NOT NULL,
  `no_rak` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `barang_keluar`;
CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` float NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `barang_masuk`;
CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `qty` float NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `barang_return`;
CREATE TABLE `barang_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `data_po`;
CREATE TABLE `data_po` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_po` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `data_po_temp`;
CREATE TABLE `data_po_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_po` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `permintaan`;
CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `po`;
CREATE TABLE `po` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_po` varchar(30) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `jumlah_pembelian` float NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `suplier`;
CREATE TABLE `suplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(244) NOT NULL,
  `role` varchar(244) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `role`) VALUES
(2,	'owner',	'owner',	'',	'306688fc66898bf11ee91353fef1283b',	'Owner'),
(3,	'kasir',	'kasir',	'',	'c7911af3adbd12a035b289556d96470a',	'Kasir'),
(4,	'admin',	'admin',	'',	'21232f297a57a5a743894a0e4a801fc3',	'Admin Gudang');

-- 2022-05-21 07:26:50
