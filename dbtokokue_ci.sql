-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtokokue_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kue` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_user`, `id_kue`, `jumlah`, `total`) VALUES
('PJ1697370924', 15, 18, 3, 300000),
('PJ1697370924', 15, 17, 2, 200000),
('PJ1697373348', 15, 17, 1, 100000),
('PJ1697377820', 15, 16, 2, 200000),
('PJ1697377820', 15, 17, 1, 100000),
('PJ1697378286', 15, 16, 1, 100000),
('PJ1697378402', 15, 16, 1, 100000),
('PJ1697988080', 19, 16, 2, 200000),
('PJ1697988080', 19, 17, 2, 200000),
('PJ1698366807', 19, 16, 3, 300000),
('PJ1698379029', 19, 19, 3, 405000),
('PJ1698392728', 19, 23, 2, 940000),
('PJ1698411082', 19, 16, 12, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_tukar`
--

CREATE TABLE `detail_tukar` (
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kue` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_tukar`
--

INSERT INTO `detail_tukar` (`no_penjualan`, `id_user`, `id_kue`, `jumlah`, `total`) VALUES
('PJ1698367015', 19, 16, 3, 30),
('PJ1698367015', 19, 16, 3, 30),
('PJ1698367658', 19, 16, 3, 30),
('PJ1698367658', 19, 16, 3, 30),
('PJ1698371128', 19, 23, 5, 75),
('PJ1698371128', 19, 16, 2, 20),
('PJ1698377559', 19, 17, 4, 20),
('PJ1698377751', 19, 18, 4, 40),
('PJ1698377862', 19, 18, 2, 20),
('PJ1698378504', 19, 18, 2, 20),
('PJ1698378504', 19, 18, 1, 10),
('PJ1698378916', 19, 18, 1, 10),
('PJ1698386782', 19, 18, 1, 10),
('PJ1698386782', 19, 23, 4, 60),
('PJ1698386903', 19, 18, 1, 10),
('PJ1698386903', 19, 23, 4, 60),
('PJ1698387063', 19, 18, 1, 10),
('PJ1698387063', 19, 23, 4, 60),
('PJ1698387099', 19, 22, 1, 15),
('PJ1698387268', 19, 22, 2, 30),
('PJ1698387359', 19, 22, 2, 30),
('PJ1698408239', 19, 22, 1, 15),
('PJ1698408850', 19, 22, 1, 15),
('PJ1698409791', 19, 22, 1, 15),
('PJ1698409791', 19, 16, 1, 10),
('PJ1698409821', 19, 22, 1, 15),
('PJ1698409821', 19, 16, 1, 10),
('PJ1698409863', 19, 16, 2, 20),
('PJ1698409875', 19, 16, 2, 20),
('PJ1698410351', 19, 16, 2, 20),
('PJ1698410733', 19, 16, 2, 20),
('PJ1698410896', 19, 16, 1, 10),
('PJ1698411054', 19, 16, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `kategori`) VALUES
(1, 'liquid01', 'E-Liquid'),
(2, 'mod01', 'vaporizer mod'),
(3, 'pod01', 'Pod System');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kue` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `tpoin` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `id_kue`, `jumlah`, `tanggal`, `tpoin`, `total`) VALUES
(158, 15, 17, 1, '15/10/2023', 5, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_poin`
--

CREATE TABLE `keranjang_poin` (
  `id_kue` int(99) NOT NULL,
  `id_user` int(99) NOT NULL,
  `jumlah` int(99) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `total` int(99) NOT NULL,
  `id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE `kue` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `poin` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`id`, `kategori`, `id_toko`, `nama`, `tanggal`, `deskripsi`, `status`, `stok`, `harga`, `poin`, `gambar`) VALUES
(16, 1, 1, 'Juta Cream Banana Strawberry 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 78, 100000, 10, '1.jpg'),
(17, 1, 2, 'Juta Yogurt Mix Berries 60ML', '2023-10-15', 'deskripsi disini', 'Baru', 100, 100000, 5, '2.jpg'),
(18, 1, 3, 'Juta Juice Anggur Merah 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 100, 100000, 10, '3.jpg'),
(19, 1, 3, 'Rotee O 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 100, 135000, 3, '4.jpg'),
(20, 1, 2, 'Juta Oat Strawberry Oat 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 100, 100000, 10, '5.jpg'),
(21, 2, 1, 'LOSTVAPE Thelema Solo Mod 100W', '2023-10-15', 'Deskripsi Disini', 'Baru', 100, 395000, 15, '6.jpg'),
(22, 2, 2, 'LOSTVAPE Thelema Mini 45W', '2023-10-15', 'Deskripsi Disini', 'Baru', 98, 295000, 15, '10.jpg'),
(23, 2, 2, 'VAPORESSO Target 200W', '2023-10-15', 'External Battery', 'Baru', 100, 470000, 15, '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `poin` int(11) DEFAULT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Transaksi Diproses',
  `konfirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `poin`, `status`, `konfirm`) VALUES
(134, 'PJ1697370924', 15, 500000, '15/10/2023', '', '', '', '', 40, 'Transaksi Berhasil', 1),
(135, 'PJ1697373348', 15, 100000, '15/10/2023', 'rumah', 'Ambil Di Toko', '', '081280647611', 5, 'Transaksi Diproses', 0),
(136, 'PJ1697377820', 15, 300000, '15/10/2023', 'alamat', 'Ambil Di Toko', '', '081280647611', 25, 'Transaksi Berhasil', 1),
(137, 'PJ1697378286', 15, 100000, '15/10/2023', 'antar kesini', '', '', '081280647611', 10, 'Transaksi Berhasil', 1),
(138, 'PJ1697378402', 15, 100000, '15/10/2023', 'payakumbuh', '', '', '081280647611', 10, 'Transaksi Diproses', 0),
(139, 'PJ1697988080', 19, 400000, '22/10/2023', 'efsf', 'Ambil Di Toko', '', '1323', 30, 'Transaksi Berhasil', 1),
(140, 'PJ1698366807', 19, 300000, '27/10/2023', 'sefsdf', 'Ambil Di Toko', '', '134', 30, 'Transaksi Berhasil', 1),
(141, 'PJ1698379029', 19, 405000, '27/10/2023', '', '', '', '5', 9, 'Transaksi Diproses', 0),
(142, 'PJ1698392728', 19, 940000, '27/10/2023', 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '', '1324', 30, 'Transaksi Diproses', 0),
(143, 'PJ1698411082', 19, 1200000, '27/10/2023', 'efds', 'Vape Marpoyan di Jl. Summagung III blok KR No. 22, Kelapa Gading Pekanbaru', '', '2234', 120, 'Transaksi Gagal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk_poin`
--

CREATE TABLE `produk_poin` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `poin` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `stok` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_poin`
--

INSERT INTO `produk_poin` (`id`, `kategori`, `id_toko`, `nama`, `tanggal`, `deskripsi`, `status`, `poin`, `gambar`, `stok`) VALUES
(16, 1, 1, 'Juta Cream Banana Strawberry 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 10, '1.jpg', 98),
(17, 1, 2, 'Juta Yogurt Mix Berries 60ML', '2023-10-15', 'deskripsi disini', 'Baru', 5, '2.jpg', 100),
(18, 1, 3, 'Juta Juice Anggur Merah 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 10, '3.jpg', 100),
(19, 1, 3, 'Rotee O 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 3, '4.jpg', 100),
(20, 1, 2, 'Juta Oat Strawberry Oat 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 10, '5.jpg', 100),
(21, 2, 1, 'LOSTVAPE Thelema Solo Mod 100W', '2023-10-15', 'Deskripsi Disini', 'Baru', 15, '6.jpg', 100),
(22, 2, 2, 'LOSTVAPE Thelema Mini 45W', '2023-10-15', 'Deskripsi Disini', 'Baru', 15, '10.jpg', 100),
(23, 2, 2, 'VAPORESSO Target 200W', '2023-10-15', 'External Battery', 'Baru', 15, '7.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `buka-toko` varchar(100) NOT NULL,
  `tutup-toko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `tentang`, `alamat`, `no_hp`, `status`, `buka-toko`, `tutup-toko`) VALUES
(1, 'Vape Panam', 'berbagai macam vape', 'Jl. Harapan Raya Pekanbaru', 214523956, 'Open', '08.00', '22.00'),
(2, 'Vape Marpoyan', 'Berbagai macam vape', 'Jl. Summagung III blok KR No. 22, Kelapa Gading Pekanbaru', 2147483647, 'Open', '09.00', '22.00'),
(3, 'Vape Harapan Raya', 'Menjeual berbagai macam vape', 'Jl. Bukit Barisan No.B7, Tangkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru', 2147483647, 'Open', '08.00', '22.00');

-- --------------------------------------------------------

--
-- Table structure for table `tukar_poin`
--

CREATE TABLE `tukar_poin` (
  `no_penjualan` varchar(255) NOT NULL,
  `id_user` int(99) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `total_poin` int(99) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id` int(99) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Transaksi Diproses',
  `konfirm` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tukar_poin`
--

INSERT INTO `tukar_poin` (`no_penjualan`, `id_user`, `tanggal`, `total_poin`, `alamat`, `pembayaran`, `keterangan`, `id`, `status`, `konfirm`, `gambar`) VALUES
('PJ1698367015', 19, '27/10/2023', 60, '123', 'Ambil Di Toko', '1312', 1, 'Transaksi Berhasil', 1, ''),
('PJ1698378916', 19, '27/10/2023', 10, '23', 'Ambil Di Toko', '234', 8, '', 2, ''),
('PJ1698386782', 19, '27/10/2023', 70, 'efds', 'Ambil Di Toko', '12', 9, 'Transaksi Diproses', 2, ''),
('PJ1698386903', 19, '27/10/2023', 70, 'sefsdf', 'Ambil Di Toko', '23', 10, 'Transaksi Diproses', 2, ''),
('PJ1698387063', 19, '27/10/2023', 70, 'sefsdf', 'Ambil Di Toko', '23', 11, 'Transaksi Diproses', 2, ''),
('PJ1698387099', 19, '27/10/2023', 15, 'efds', 'Ambil Di Toko', '23', 12, 'Transaksi Gagal', 2, ''),
('PJ1698387268', 19, '27/10/2023', 30, 'efds', 'Ambil Di Toko', '23', 13, 'Transaksi Gagal', 2, ''),
('PJ1698387359', 19, '27/10/2023', 30, 'efds', 'Ambil Di Toko', '23', 14, 'Transaksi Gagal', 2, ''),
('PJ1698403184', 19, '27/10/2023', 60, '423', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '432', 15, 'Transaksi Berhasil', 1, ''),
('PJ1698403226', 19, '27/10/2023', 90, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '234', 16, 'Transaksi Diproses', 0, ''),
('PJ1698408063', 19, '27/10/2023', 90, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '234', 17, 'Transaksi Diproses', 0, ''),
('PJ1698408183', 19, '27/10/2023', 90, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '234', 18, 'Transaksi Diproses', 0, ''),
('PJ1698408220', 19, '27/10/2023', 15, 'efds', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '243', 19, 'Transaksi Diproses', 0, ''),
('PJ1698408239', 19, '27/10/2023', 15, 'efds', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '243', 20, 'Transaksi Diproses', 0, ''),
('PJ1698408850', 19, '27/10/2023', 15, 'efds', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '2423', 21, 'Transaksi Diproses', 0, ''),
('PJ1698409791', 19, '27/10/2023', 25, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '12', 22, 'Transaksi Diproses', 0, ''),
('PJ1698409821', 19, '27/10/2023', 25, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '12', 23, 'Transaksi Diproses', 0, ''),
('PJ1698409863', 19, '27/10/2023', 20, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '12', 24, 'Transaksi Diproses', 0, ''),
('PJ1698409875', 19, '27/10/2023', 20, 'sefsdf', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '12', 25, 'Transaksi Diproses', 0, ''),
('PJ1698410351', 19, '27/10/2023', 20, '123', 'Vape Panam di Jl. Harapan Raya Pekanbaru', '231', 26, 'Transaksi Gagal', 2, ''),
('PJ1698410733', 19, '27/10/2023', 20, 'efds', 'Vape Marpoyan di Jl. Summagung III blok KR No. 22, Kelapa Gading Pekanbaru', '1312413', 27, 'Transaksi Berhasil', 1, ''),
('PJ1698410896', 19, '27/10/2023', 10, 'efsf', 'Vape Marpoyan di Jl. Summagung III blok KR No. 22, Kelapa Gading Pekanbaru', '24', 28, 'Transaksi Gagal', 2, ''),
('PJ1698411054', 19, '27/10/2023', 10, '42', '', '1234324', 29, 'Transaksi Gagal', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.png',
  `role` varchar(100) NOT NULL,
  `poin` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `poin`, `date_created`) VALUES
(15, 'abdul hafiz tarmizi', 'abdul@gmail.com', '$2y$10$upuSGK3rh.80xL6piMyF.uuIItJf4Hd0KJFRLyRZ7jx07Yi/nAIqO', 'default.jpg', 'User', 95, 1696691590),
(16, 'admin', 'admin@gmail.com', '$2y$10$WOpmZDNpvhyCsxMr0xabX.5HYrxAh8LL/aZZB674JkJHgNnF1SuXe', 'default.jpg', 'Admin', 95, 1696694170),
(17, 'hafiz', 'hafiz@gmail.com', '$2y$10$kxGZDnycbbuL5.LgpFHJqOB7Lsuzvv8ylAMKL8mOJ.yJc1mSjiyTu', 'default.jpg', 'User', 95, 1697349908),
(18, 'user@gmail.com', 'user@gmail.com', '$2y$10$s/zowR10YiqqtiDN33lvN.kz4IxnQrFH76n21l7Fh1zMPUjADFEy2', 'default.jpg', 'User', 95, 1697379372),
(19, 'Aldi', 'aldi@gmail.com', '$2y$10$WOpmZDNpvhyCsxMr0xabX.5HYrxAh8LL/aZZB674JkJHgNnF1SuXe', 'default.jpg', 'User', 95, 1697987965);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `idKue` (`id_kue`),
  ADD KEY `idUser` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`id_user`),
  ADD KEY `kueID` (`id_kue`);

--
-- Indexes for table `keranjang_poin`
--
ALTER TABLE `keranjang_poin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kue`
--
ALTER TABLE `kue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ka` (`kategori`),
  ADD KEY `to` (`id_toko`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `produk_poin`
--
ALTER TABLE `produk_poin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ka` (`kategori`),
  ADD KEY `to` (`id_toko`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tukar_poin`
--
ALTER TABLE `tukar_poin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `keranjang_poin`
--
ALTER TABLE `keranjang_poin`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `kue`
--
ALTER TABLE `kue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `produk_poin`
--
ALTER TABLE `produk_poin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tukar_poin`
--
ALTER TABLE `tukar_poin`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `idKue` FOREIGN KEY (`id_kue`) REFERENCES `kue` (`id`),
  ADD CONSTRAINT `idUser` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `kueID` FOREIGN KEY (`id_kue`) REFERENCES `kue` (`id`),
  ADD CONSTRAINT `userID` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `kue`
--
ALTER TABLE `kue`
  ADD CONSTRAINT `ka` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `to` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
