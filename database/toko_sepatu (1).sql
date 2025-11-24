-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2025 at 02:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `user_id`, `produk_id`, `jumlah`, `no_hp`, `alamat`) VALUES
(8, 15, 1, '1', '0899999', 'mkmkmk'),
(9, 15, 1, '1', '0899999', 'jakarta'),
(10, 15, 3, '1', '0899999', 'jakarta'),
(11, 15, 2, '1', '0899999', 'AJAKAK'),
(12, 15, 2, '1', '0899999', 'jkK'),
(13, 15, 1, '1', '087654321', 'WKWKWKWK'),
(14, 15, 1, '2', '0899999', 'akakka'),
(15, 15, 6, '1', '08967563578', 'jakrta'),
(16, 15, 1, '1', '08967563578', 'naknakna'),
(17, 15, 6, '1', '0899999', 'jl. cipageran'),
(18, 16, 2, '1', '0909', 'mkmk'),
(19, 17, 1, '1', '0909', 'mkmk'),
(20, 17, 1, '1', '0899999', 'kmkmk'),
(21, 17, 3, '1', '0899999', 'mkmk'),
(22, 16, 1, '1', '0899999', 'mlml');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `harga`, `stok`, `gambar`) VALUES
(1, 'Nike Air Max 270', 1799000.00, 25, 'Air Max 270.jpg'),
(2, 'Adidas Ultraboost 22', 2499000.00, 18, 'Let There Be adidas UltraBOOST.jpg'),
(3, 'Converse Chuck Taylor High', 899000.00, 40, 'Converse Shoes _ Converse Chuck Taylor All Star Move Platform Hightopwomen’s8 Sneaker 568497c _ Color_ Black_White _ Size_ 8.jpg'),
(4, 'Puma RS-X3 Puzzle', 1599000.00, 30, 'Men\'s Puma RS-X Puzzle Casual Shoes.jpg'),
(5, 'Vans Old Skool Classic', 10000000.00, 50, 'Timeless Skate Style – Vans Old Skool Navy The….jpg'),
(6, 'New Balance 574 Core', 1399000.00, 22, 'New Balance Women\'s Gray White 574 Core Lace Up….jpg'),
(7, 'Reebok Club C 85', 1199000.00, 28, 'Club C 85 Vintage Unisex Sneaker – Reebok EU.jpg'),
(8, 'Skechers Go Walk 6', 999000.00, 35, 'SKECHERS GO WALK_ keep up the pace in enhanced….jpg'),
(9, 'Asics Gel-Kayano 30', 2699000.00, 15, 'A true ASICS legend that\'s been around for….jpg'),
(10, 'Under Armour HOVR Sonic 6', 1899000.00, 20, 'Under Armour Hovr Sonic Athletic Sneakers - White.jpg'),
(11, 'GUCCI Salomon ', 19000000.99, 4, 'SOLE B1OCK Home Brand New Arrivals Hot List….jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'Ahmad Fauzu', 'ahmad@example.com', '12345', 'user'),
(2, 'Budi Santoso', 'budi@example.com', '12345', 'user'),
(3, 'Citra Lestari', 'citra@example.com', '12345', 'user'),
(4, 'Dewi Anggraini', 'dewi@example.com', '12345', 'user'),
(5, 'Eko Prasetyo', 'eko@example.com', '12345', 'user'),
(6, 'Fitri Handayani', 'fitri@example.com', '12345', 'user'),
(7, 'Gilang Saputra', 'gilang@example.com', '12345', 'user'),
(8, 'Hana Putri', 'hana@example.com', '12345', 'user'),
(9, 'Indra Wijaya', 'indra@example.com', '12345', 'user'),
(10, 'Joko Susanto', 'joko@example.com', '12345', 'admin'),
(11, 'jekk', 'jekk@gmail.com', '$2y$10$BDQgrqnXd5ufCzB/K6ZOlO4SLOMxu0lxXjuuVlg5fVs', 'user'),
(12, 'zaki', 'jekk@gmail.com', '$2y$10$2pcxW2vxZ.ylTXTDRApi7ekmWpML9.vPdHkziP4e8yr', 'user'),
(13, 'zaki', 'zaki@gmail.com', '$2y$10$dCY41ntgDsQ3GGeAKoZd7Ok1I9iEE6v/k0UhNGclEFL', 'user'),
(14, 'zakii', 'jekk@gmail.com', '$2y$10$xaWviDobMCSykg3jJzOZU.MddjtEiYPo4BI.si2O3ho', 'user'),
(15, 'zakiii', 'jekk@gmail.com', '$2y$10$qrdEwKeFpzZRUDMfDSt30eemPuPA2rAIeYsCGyVABEb4AXZbcHSvq', 'user'),
(16, 'admin', 'admin@gmail.com', '$2y$10$eY8EiynoQ.0kY0FrDgof9.5Zq.0heu8vzh0yBOUMBl.ceDwQMgLyG', 'admin'),
(17, 'user', 'user@gmail.com', '$2y$10$RnKmosOpVKy5kg8iIOtIQOlug1jxBinsmER3D.g2YQvyBp2xja7Ca', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
