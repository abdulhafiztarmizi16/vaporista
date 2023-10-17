-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2023 at 02:30 PM
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
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int NOT NULL,
  `id_kue` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
('PJ1697378402', 15, 16, 1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `tanggal` varchar(100) NOT NULL,
  `tpoin` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `id_kue`, `jumlah`, `tanggal`, `tpoin`, `total`) VALUES
(158, 15, 17, 1, '15/10/2023', 5, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE `kue` (
  `id` int NOT NULL,
  `kategori` int NOT NULL,
  `id_toko` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL,
  `poin` int NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`id`, `kategori`, `id_toko`, `nama`, `tanggal`, `deskripsi`, `status`, `stok`, `harga`, `poin`, `gambar`) VALUES
(16, 1, 1, 'Juta Cream Banana Strawberry 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 19, 100000, 10, '1.jpg'),
(17, 1, 2, 'Juta Yogurt Mix Berries 60ML', '2023-10-15', 'deskripsi disini', 'Baru', 6, 100000, 5, '2.jpg'),
(18, 1, 3, 'Juta Juice Anggur Merah 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 7, 100000, 10, '3.jpg'),
(19, 1, 3, 'Rotee O 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 15, 135000, 3, '4.jpg'),
(20, 1, 2, 'Juta Oat Strawberry Oat 60ML', '2023-10-15', 'Deskripsi disini', 'Baru', 20, 100000, 10, '5.jpg'),
(21, 2, 1, 'LOSTVAPE Thelema Solo Mod 100W', '2023-10-15', 'Deskripsi Disini', 'Baru', 5, 395000, 15, '6.jpg'),
(22, 2, 2, 'LOSTVAPE Thelema Mini 45W', '2023-10-15', 'Deskripsi Disini', 'Baru', 8, 295000, 15, '10.jpg'),
(23, 2, 2, 'VAPORESSO Target 200W', '2023-10-15', 'External Battery', 'Baru', 10, 470000, 15, '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int NOT NULL,
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int NOT NULL,
  `total_bayar` int NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `poin` int DEFAULT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Transaksi Diproses',
  `konfirm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `poin`, `status`, `konfirm`) VALUES
(134, 'PJ1697370924', 15, 500000, '15/10/2023', '', '', '', '', 40, 'Transaksi Berhasil', 1),
(135, 'PJ1697373348', 15, 100000, '15/10/2023', 'rumah', 'Ambil Di Toko', '', '081280647611', 5, 'Transaksi Diproses', 0),
(136, 'PJ1697377820', 15, 300000, '15/10/2023', 'alamat', 'Ambil Di Toko', '', '081280647611', 25, 'Transaksi Berhasil', 1),
(137, 'PJ1697378286', 15, 100000, '15/10/2023', 'antar kesini', '', '', '081280647611', 10, 'Transaksi Berhasil', 1),
(138, 'PJ1697378402', 15, 100000, '15/10/2023', 'payakumbuh', '', '', '081280647611', 10, 'Transaksi Diproses', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk_poin`
--

CREATE TABLE `produk_poin` (
  `id` int NOT NULL,
  `kategori` int NOT NULL,
  `id_toko` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `poin` int NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int NOT NULL,
  `status` varchar(100) NOT NULL,
  `buka-toko` varchar(100) NOT NULL,
  `tutup-toko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `tentang`, `alamat`, `no_hp`, `status`, `buka-toko`, `tutup-toko`) VALUES
(1, 'Vape Panam', 'berbagai macam vape', 'Jl. Harapan Raya Pekanbaru', 214523956, 'Open', '08.00', '22.00'),
(2, 'Vape Marpoyan', 'Berbagai macam vape', 'Jl. Summagung III blok KR No. 22, Kelapa Gading Pekanbaru', 2147483647, 'Open', '09.00', '22.00'),
(3, 'Vape Harapan Raya', 'Menjeual berbagai macam vape', 'Jl. Bukit Barisan No.B7, Tangkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru', 2147483647, 'Open', '08.00', '22.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.png',
  `role` varchar(100) NOT NULL,
  `poin` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `poin`, `date_created`) VALUES
(15, 'abdul hafiz tarmizi', 'abdul@gmail.com', '$2y$10$upuSGK3rh.80xL6piMyF.uuIItJf4Hd0KJFRLyRZ7jx07Yi/nAIqO', 'default.jpg', 'User', 75, 1696691590),
(16, 'admin', 'admin@gmail.com', '$2y$10$/eXJUNsLQLvKN/19yeBAwusX8kL0rPQu9fa4vubFfKeisKs1NPfbu', 'default.jpg', 'Admin', 0, 1696694170),
(17, 'hafiz', 'hafiz@gmail.com', '$2y$10$kxGZDnycbbuL5.LgpFHJqOB7Lsuzvv8ylAMKL8mOJ.yJc1mSjiyTu', 'default.jpg', 'User', 0, 1697349908),
(18, 'user@gmail.com', 'user@gmail.com', '$2y$10$s/zowR10YiqqtiDN33lvN.kz4IxnQrFH76n21l7Fh1zMPUjADFEy2', 'default.jpg', 'User', 0, 1697379372);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `kue`
--
ALTER TABLE `kue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `produk_poin`
--
ALTER TABLE `produk_poin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
