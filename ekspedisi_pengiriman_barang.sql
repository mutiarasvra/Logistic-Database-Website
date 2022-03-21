-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 05:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekspedisi_pengiriman_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_asuransi`
--

CREATE TABLE `jenis_asuransi` (
  `kode_jenis_asuransi` varchar(5) NOT NULL,
  `nama_jenis_asuransi` varchar(30) NOT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `tarif` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_asuransi`
--

INSERT INTO `jenis_asuransi` (`kode_jenis_asuransi`, `nama_jenis_asuransi`, `keterangan`, `tarif`) VALUES
('A01', 'Asuransi Barang Berharga', 'Barang berharga di atas 1 juta', 20000),
('A02', 'Asuransi Biasa', 'Barang berharga di bawah 1 jut', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dimensi`
--

CREATE TABLE `jenis_dimensi` (
  `kode_jenis_dimensi` varchar(5) NOT NULL,
  `nama_jenis_dimensi` varchar(50) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `tarif` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_dimensi`
--

INSERT INTO `jenis_dimensi` (`kode_jenis_dimensi`, `nama_jenis_dimensi`, `keterangan`, `tarif`) VALUES
('D01', 'Volume', '-', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_packaging`
--

CREATE TABLE `jenis_packaging` (
  `kode_jenis_packaging` varchar(10) NOT NULL,
  `nama_jenis_packaging` varchar(50) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `tarif` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_packaging`
--

INSERT INTO `jenis_packaging` (`kode_jenis_packaging`, `nama_jenis_packaging`, `keterangan`, `tarif`) VALUES
('PACK01', 'Bubble Wrap', '-', 10000),
('PACK02', 'Packing Kayu', '-', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penerima`
--

CREATE TABLE `jenis_penerima` (
  `kode_jenis_penerima` varchar(5) NOT NULL,
  `nama_jenis_penerima` varchar(30) NOT NULL,
  `keterangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penerima`
--

INSERT INTO `jenis_penerima` (`kode_jenis_penerima`, `nama_jenis_penerima`, `keterangan`) VALUES
('J01', 'Pribadi', 'Perorangan'),
('J02', 'Perusahaan', 'CV/PT dan yang lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengiriman`
--

CREATE TABLE `jenis_pengiriman` (
  `kode_jenis_pengiriman` varchar(5) NOT NULL,
  `nama_jenis_pengiriman` varchar(50) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `tarif` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengiriman`
--

INSERT INTO `jenis_pengiriman` (`kode_jenis_pengiriman`, `nama_jenis_pengiriman`, `keterangan`, `tarif`) VALUES
('JP001', 'OKE', 'Ekonomi', 11000),
('JP002', 'YES', 'Yakin Esok Sampai', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `kode_kabkota` varchar(5) NOT NULL,
  `kode_prov` varchar(5) DEFAULT NULL,
  `kabkota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`kode_kabkota`, `kode_prov`, `kabkota`) VALUES
('K01', 'PR01', 'Kendari'),
('K02', 'PR02', 'Makassar'),
('K03', 'PR03', 'Cirebon'),
('K04', 'PR04', 'Jakarta'),
('K06', 'PR06', 'Palembang');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kec` varchar(5) NOT NULL,
  `kode_kabkota` varchar(5) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kec`, `kode_kabkota`, `kecamatan`) VALUES
('KEC01', 'K01', 'Bala lompoa'),
('KEC02', 'K02', 'Tumpas'),
('KEC03', 'K03', 'Keringin'),
('KEC04', 'K04', 'Tamanlanrea');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `kode_kel` varchar(5) NOT NULL,
  `kode_kec` varchar(5) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`kode_kel`, `kode_kec`, `kelurahan`, `kode_pos`) VALUES
('KEL01', 'KEC01', 'Aduan', '33126'),
('KEL02', 'KEC02', 'Bunga', '93411'),
('KEL03', 'KEC03', 'Liambo', '33129'),
('KEL04', 'KEC04', 'Harum', '11992');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `kode_negara` varchar(5) NOT NULL,
  `negara` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`kode_negara`, `negara`) VALUES
('N01', 'Indonesia'),
('N02', 'Singapura');

-- --------------------------------------------------------

--
-- Table structure for table `paket_barang`
--

CREATE TABLE `paket_barang` (
  `kode_paket_barang` varchar(5) NOT NULL,
  `nama_jenis_paket` varchar(100) NOT NULL,
  `deskripsi` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_barang`
--

INSERT INTO `paket_barang` (`kode_paket_barang`, `nama_jenis_paket`, `deskripsi`) VALUES
('AA', 'Laptop', 's'),
('B01', 'Tas', '-'),
('B02', 'Pakaian', '-');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `kode_penerima` varchar(5) NOT NULL,
  `kode_jenis_penerima` varchar(5) DEFAULT NULL,
  `kode_kel` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`kode_penerima`, `kode_jenis_penerima`, `kode_kel`, `nama`, `alamat_lengkap`) VALUES
('KPN01', 'J01', 'KEL01', 'Fahri', 'Jl. Suka No. 2'),
('KPN02', 'J01', 'KEL02', 'Dea', 'Jl. Daya No. 4'),
('KPN03', 'J01', 'KEL02', 'Kifa', 'Jl. Jantan No. 4'),
('KPN04', 'J01', 'KEL03', 'Ratna', 'Jl. Landak No, 2'),
('KPN05', 'J01', 'KEL04', 'Nesta', 'Jl. Hari No. 7'),
('KPN06', 'J01', 'KEL01', 'Zulham', 'Jl. Sama No. 2'),
('KPN07', 'J01', 'KEL04', 'Sinta', 'Jl. A.Yani No. 112'),
('KPN08', 'J01', 'KEL01', 'Riska', 'Jl. Salam No. 9'),
('KPN09', 'J01', 'KEL02', 'Albert', 'Jl. Edi Sabara No. 8'),
('KPN10', 'J01', 'KEL03', 'A Muhammad Akbar', 'Jl Liambo No. 210'),
('KPN11', 'J02', 'KEL04', 'Riang', 'Jl. Siliwangi No. 9'),
('KPN12', 'J01', 'KEL01', 'Rara', 'Jl. Sama No. 1'),
('KPN13', 'J02', 'KEL03', 'Clay', 'Jl. Swadaya'),
('KPN14', 'J01', 'KEL04', 'Vira', 'Jl. Mawar No. 121'),
('KPN15', 'J01', 'KEL01', 'Ghea', 'Jl. Nasar No.21');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_prov` varchar(5) NOT NULL,
  `kode_negara` varchar(5) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kode_prov`, `kode_negara`, `provinsi`) VALUES
('PR01', 'N01', 'Sulawesi Tenggara'),
('PR02', 'N01', 'Sulawesi Selatan'),
('PR03', 'N01', 'Jawa Barat'),
('PR04', 'N01', 'DKI Jakarta'),
('PR06', 'N01', 'Sumatera Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `resi`
--

CREATE TABLE `resi` (
  `no_resi` varchar(150) NOT NULL,
  `tanggal_pengiriman` varchar(30) DEFAULT NULL,
  `tanggal_sampai` varchar(30) DEFAULT NULL,
  `total_biaya` int(50) DEFAULT NULL,
  `kode_penerima` varchar(5) DEFAULT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `alamat_pengirim` varchar(50) NOT NULL,
  `kode_paket_barang` varchar(5) DEFAULT NULL,
  `kode_jenis_packaging` varchar(10) DEFAULT NULL,
  `kode_jenis_asuransi` varchar(5) DEFAULT NULL,
  `kode_jenis_dimensi` varchar(5) DEFAULT NULL,
  `kode_status` varchar(5) DEFAULT NULL,
  `berat` int(11) NOT NULL,
  `kode_rute` varchar(5) NOT NULL,
  `kode_jenis pengiriman` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resi`
--

INSERT INTO `resi` (`no_resi`, `tanggal_pengiriman`, `tanggal_sampai`, `total_biaya`, `kode_penerima`, `nama_pengirim`, `alamat_pengirim`, `kode_paket_barang`, `kode_jenis_packaging`, `kode_jenis_asuransi`, `kode_jenis_dimensi`, `kode_status`, `berat`, `kode_rute`, `kode_jenis pengiriman`) VALUES
('60eecdaacc37415753781766ab804750', '2022-01-12', '2022-01-13', 130000, 'KPN01', 'Wendi', 'Jl. Jalan No. 21', 'AA', 'PACK01', 'A02', 'D01', 'S03', 4, 'R03', 'JP001'),
('81c1d439e49951e9d96028b9c8606714', '2022-01-02', '2022-01-06', 70000, 'KPN02', 'Sukri', 'Jl. Perjuangan No. 32', 'AA', 'PACK01', 'A02', 'D01', 'S03', 2, 'R01', 'JP001');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `kode_rute` varchar(5) NOT NULL,
  `kode_kabkota` varchar(5) DEFAULT NULL,
  `kota_B` varchar(30) DEFAULT NULL,
  `tarif` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`kode_rute`, `kode_kabkota`, `kota_B`, `tarif`) VALUES
('R01', 'K03', 'K02', 20000),
('R02', 'K01', 'K02', 15000),
('R03', 'K03', 'K01', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `status_pengiriman`
--

CREATE TABLE `status_pengiriman` (
  `kode_status` varchar(5) NOT NULL,
  `nama_status` varchar(50) DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pengiriman`
--

INSERT INTO `status_pengiriman` (`kode_status`, `nama_status`, `keterangan`) VALUES
('S01', 'CLOSED ONCE DELIVERY ATTEMPT', 'Kurir sudah mengantarkan paket Anda ke alamat tujuan tetapi tempat tujuan sedang tutup'),
('S02', 'DELIVERED', 'Paket sudah sampai di tempat tujuan dengan aman dan selamat.'),
('S03', 'ON-PROCESS', 'Paket sedang diproses untuk pengiriman'),
('S04', 'POD (PROCESS ON DELIVERY)', 'Paket akan diantar oleh kurir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `level`) VALUES
('akbar', '123', 'Akbar Tasmin', 'akbar@pmm.com', 'admin'),
('dea', '123', 'Dea', 'Dea@pmm.com', 'admin'),
('ratna', '123', 'Ratna', 'ratna@pmm.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_asuransi`
--
ALTER TABLE `jenis_asuransi`
  ADD PRIMARY KEY (`kode_jenis_asuransi`);

--
-- Indexes for table `jenis_dimensi`
--
ALTER TABLE `jenis_dimensi`
  ADD PRIMARY KEY (`kode_jenis_dimensi`);

--
-- Indexes for table `jenis_packaging`
--
ALTER TABLE `jenis_packaging`
  ADD PRIMARY KEY (`kode_jenis_packaging`);

--
-- Indexes for table `jenis_penerima`
--
ALTER TABLE `jenis_penerima`
  ADD PRIMARY KEY (`kode_jenis_penerima`);

--
-- Indexes for table `jenis_pengiriman`
--
ALTER TABLE `jenis_pengiriman`
  ADD PRIMARY KEY (`kode_jenis_pengiriman`);

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`kode_kabkota`),
  ADD KEY `kode_prov` (`kode_prov`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kec`),
  ADD KEY `kode_kab/kota` (`kode_kabkota`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`kode_kel`),
  ADD KEY `kode_kec` (`kode_kec`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`kode_negara`);

--
-- Indexes for table `paket_barang`
--
ALTER TABLE `paket_barang`
  ADD PRIMARY KEY (`kode_paket_barang`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`kode_penerima`),
  ADD KEY `kode_jenis_pelanggan` (`kode_jenis_penerima`),
  ADD KEY `kode_kel` (`kode_kel`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kode_prov`),
  ADD KEY `kode_negara` (`kode_negara`);

--
-- Indexes for table `resi`
--
ALTER TABLE `resi`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `kode_jenis_dimensi` (`kode_jenis_dimensi`),
  ADD KEY `kode_paket_barang` (`kode_paket_barang`),
  ADD KEY `kode_jenis_asuransi` (`kode_jenis_asuransi`),
  ADD KEY `kode_jenis_packaging` (`kode_jenis_packaging`),
  ADD KEY `kode_status` (`kode_status`),
  ADD KEY `kode_pelanggan` (`kode_penerima`),
  ADD KEY `kode_rute` (`kode_rute`),
  ADD KEY `kode_jenis pengiriman` (`kode_jenis pengiriman`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`kode_rute`),
  ADD KEY `kode_kab/kota` (`kode_kabkota`),
  ADD KEY `kota_B` (`kota_B`);

--
-- Indexes for table `status_pengiriman`
--
ALTER TABLE `status_pengiriman`
  ADD PRIMARY KEY (`kode_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD CONSTRAINT `kabkota_ibfk_1` FOREIGN KEY (`kode_prov`) REFERENCES `provinsi` (`kode_prov`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`kode_kabkota`) REFERENCES `kabkota` (`kode_kabkota`);

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`kode_kec`) REFERENCES `kecamatan` (`kode_kec`);

--
-- Constraints for table `penerima`
--
ALTER TABLE `penerima`
  ADD CONSTRAINT `penerima_ibfk_1` FOREIGN KEY (`kode_jenis_penerima`) REFERENCES `jenis_penerima` (`kode_jenis_penerima`),
  ADD CONSTRAINT `penerima_ibfk_2` FOREIGN KEY (`kode_kel`) REFERENCES `kelurahan` (`kode_kel`);

--
-- Constraints for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `provinsi_ibfk_1` FOREIGN KEY (`kode_negara`) REFERENCES `negara` (`kode_negara`);

--
-- Constraints for table `resi`
--
ALTER TABLE `resi`
  ADD CONSTRAINT `resi_ibfk_1` FOREIGN KEY (`kode_jenis_dimensi`) REFERENCES `jenis_dimensi` (`kode_jenis_dimensi`),
  ADD CONSTRAINT `resi_ibfk_10` FOREIGN KEY (`kode_rute`) REFERENCES `rute` (`kode_rute`),
  ADD CONSTRAINT `resi_ibfk_11` FOREIGN KEY (`kode_jenis pengiriman`) REFERENCES `jenis_pengiriman` (`kode_jenis_pengiriman`),
  ADD CONSTRAINT `resi_ibfk_4` FOREIGN KEY (`kode_paket_barang`) REFERENCES `paket_barang` (`kode_paket_barang`),
  ADD CONSTRAINT `resi_ibfk_5` FOREIGN KEY (`kode_jenis_asuransi`) REFERENCES `jenis_asuransi` (`kode_jenis_asuransi`),
  ADD CONSTRAINT `resi_ibfk_7` FOREIGN KEY (`kode_jenis_packaging`) REFERENCES `jenis_packaging` (`kode_jenis_packaging`),
  ADD CONSTRAINT `resi_ibfk_8` FOREIGN KEY (`kode_status`) REFERENCES `status_pengiriman` (`kode_status`),
  ADD CONSTRAINT `resi_ibfk_9` FOREIGN KEY (`kode_penerima`) REFERENCES `penerima` (`kode_penerima`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`kode_kabkota`) REFERENCES `kabkota` (`kode_kabkota`),
  ADD CONSTRAINT `rute_ibfk_3` FOREIGN KEY (`kota_B`) REFERENCES `kabkota` (`kode_kabkota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
