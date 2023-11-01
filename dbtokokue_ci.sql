-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2023 at 11:20 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

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
  `no_penjualan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `id_kue` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_tukar`
--

CREATE TABLE `detail_tukar` (
  `no_penjualan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `id_kue` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
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
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_kue` int NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tpoin` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_poin`
--

CREATE TABLE `keranjang_poin` (
  `id_kue` int NOT NULL,
  `id_user` int NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `total` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE `kue` (
  `id` int NOT NULL,
  `kategori` int NOT NULL,
  `id_toko` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL,
  `poin` int NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`id`, `kategori`, `id_toko`, `nama`, `tanggal`, `deskripsi`, `status`, `stok`, `harga`, `poin`, `gambar`) VALUES
(16, 1, 1, 'Juta Cream Banana Strawberry 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 74, 100000, 100, '1.jpg'),
(17, 1, 2, 'Juta Yogurt Mix Berries 60ML', '2023-10-15', 'deskripsi disini', 'Baru', 99, 100000, 10, '2.jpg'),
(18, 1, 3, 'Juta Juice Anggur Merah 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 100, 100000, 10, '3.jpg'),
(19, 1, 3, 'Rotee O 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 100, 135000, 3, '4.jpg'),
(20, 1, 2, 'Juta Oat Strawberry Oat 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 98, 100000, 10, '5.jpg'),
(26, 1, 1, 'vape tambahan baru', '2023-11-01', 'deskripsi disini', 'Baru', 10, 200000, 10, '51.jpg'),
(27, 2, 2, 'vape tambahan lagi', '2023-11-01', 'lamak bana laaa', 'Baru', 20, 200000, 20, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int NOT NULL,
  `no_penjualan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `total_bayar` int NOT NULL,
  `tanggal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pembayaran` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `poin` int DEFAULT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Transaksi Diproses',
  `konfirm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_poin`
--

CREATE TABLE `produk_poin` (
  `id` int NOT NULL,
  `kategori` int NOT NULL,
  `id_toko` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `poin` int NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg',
  `stok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_poin`
--

INSERT INTO `produk_poin` (`id`, `kategori`, `id_toko`, `nama`, `tanggal`, `deskripsi`, `status`, `poin`, `gambar`, `stok`) VALUES
(16, 1, 1, 'Juta Cream Banana Strawberry 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 50, '1.jpg', 81),
(17, 1, 2, 'Juta Yogurt Mix Berries 60ML', '2023-10-15', 'deskripsi disini', 'Baru', 10, '2.jpg', 96),
(18, 1, 3, 'Juta Juice Anggur Merah 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 10, '3.jpg', 97),
(19, 1, 3, 'Rotee O 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 3, '4.jpg', 100),
(20, 1, 2, 'Juta Oat Strawberry Oat 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 20, '5.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tentang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` int NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `buka-toko` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tutup-toko` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
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
  `no_penjualan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `total_poin` int NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Transaksi Diproses',
  `konfirm` int NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.png',
  `role` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `poin` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `poin`, `date_created`) VALUES
(15, 'abdul hafiz tarmizi', 'abdul@gmail.com', '$2y$10$upuSGK3rh.80xL6piMyF.uuIItJf4Hd0KJFRLyRZ7jx07Yi/nAIqO', 'default.jpg', 'User', 500, 1696691590),
(17, 'hafiz', 'hafiz@gmail.com', '$2y$10$kxGZDnycbbuL5.LgpFHJqOB7Lsuzvv8ylAMKL8mOJ.yJc1mSjiyTu', 'default.jpg', 'Admin', 500, 1697349908),
(18, 'user@gmail.com', 'user@gmail.com', '$2y$10$s/zowR10YiqqtiDN33lvN.kz4IxnQrFH76n21l7Fh1zMPUjADFEy2', 'default.jpg', 'User', 500, 1697379372),
(19, 'Aldi', 'aldi@gmail.com', '$2y$10$WOpmZDNpvhyCsxMr0xabX.5HYrxAh8LL/aZZB674JkJHgNnF1SuXe', 'default.jpg', 'User', 500, 1697987965),
(20, 'Admin', 'admin@gmail.com', '$2y$10$SRgF1APdJeoIsJhBsPQ5UeNaUXi0k0jUzGK4Wc8LPf5hvNIqFVcEe', 'default.jpg', 'Admin', 500, 1698414148),
(21, 'Abdul Halim', 'halim@gmail.com', '$2y$10$4QOSS3.Z/s1AhAM5pvi4lO2kTlQNIulNz282JEAdWwiaMJENk/iwW', 'default.jpg', 'User', 500, 1698832986),
(22, 'Abdul Haris', 'haris@gmail.com', '$2y$10$208ZU3jIQAiL874AhMRUBOHwMXeYRa8TK0pVyCndxENFySntEG.ae', 'default.jpg', 'User', 0, 1698878507);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `keranjang_poin`
--
ALTER TABLE `keranjang_poin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kue`
--
ALTER TABLE `kue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `produk_poin`
--
ALTER TABLE `produk_poin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tukar_poin`
--
ALTER TABLE `tukar_poin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
