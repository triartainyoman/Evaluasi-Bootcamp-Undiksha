-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2021 at 04:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_bootcamp_undiksha_toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `penjelasan_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `total_terjual` int(11) NOT NULL,
  `total_views` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_produk`, `nama_produk`, `kategori_produk`, `penjelasan_produk`, `harga_produk`, `total_terjual`, `total_views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Baju Kaos', 'Baju', 'Baju kaos kualitas tinggi', 15000, 10, 100, '2021-12-04 01:49:12', '2021-12-04 01:49:12', '2021-12-04 01:49:12'),
(2, 'Kemeja', 'Baju', 'Kemeja bagus', 100000, 1, 1, '2021-12-04 01:53:14', '2021-12-04 01:53:14', NULL),
(4, 'Sepatu Nike', 'Sepatu', 'Sepatu sekolah anak', 450000, 200, 400, '2021-12-04 03:08:10', '2021-12-04 03:08:10', NULL),
(5, 'Case HP', 'Aksesoris', 'Case HP Termurah', 15000, 10, 20, '2021-12-04 03:11:43', '2021-12-04 03:13:03', NULL),
(6, 'Stand Handphone', 'Aksesoris', 'Bahan kuat', 8000, 12, 22, '2021-12-04 03:12:22', '2021-12-04 03:13:12', NULL),
(7, 'Charger Type C', 'Aksesoris', 'Kabel panjang', 35000, 10, 20, '2021-12-04 03:13:49', '2021-12-04 03:14:07', NULL),
(8, 'Ventela Public', 'Sepatu', 'Sepatu Lokal', 220000, 1000, 2000, '2021-12-04 03:14:50', '2021-12-04 03:14:50', NULL),
(9, 'Celana Cargo', 'Celana', 'Kualitas premium', 180000, 21, 33, '2021-12-04 03:15:37', '2021-12-04 03:27:09', NULL),
(10, 'Celana Jeans', 'Celana', 'Jeans asli', 200000, 10, 19, '2021-12-04 03:16:01', '2021-12-04 03:16:01', NULL),
(11, 'Celana Pendek', 'Celana', 'Harga murah', 80000, 2, 5, '2021-12-04 03:16:38', '2021-12-04 03:16:38', NULL),
(12, 'Head Phone', 'Aksesoris', 'Kualias Gaming', 800000, 3, 5, '2021-12-04 03:17:05', '2021-12-04 03:17:05', NULL),
(13, 'Keycron K2', 'Keyboard', 'Keyboard ori', 800000, 4, 8, '2021-12-04 03:17:40', '2021-12-04 03:17:40', NULL),
(14, 'Printer Deskjet', 'Printer', 'Produk Baru', 700000, 8, 9, '2021-12-04 03:18:23', '2021-12-04 03:18:23', NULL),
(15, 'Jaket Denim', 'Jaket', 'Kualitas ori', 120000, 1, 3, '2021-12-04 03:18:53', '2021-12-04 03:18:53', NULL),
(16, 'Charger Type B', 'Aksesoris', 'Charger ori', 50000, 9, 10, '2021-12-04 03:20:14', '2021-12-04 03:20:14', NULL),
(17, 'Case Redmi 10', 'Aksesoris', 'Bahan lentur', 20000, 90, 100, '2021-12-04 03:22:07', '2021-12-04 03:22:07', NULL),
(18, 'Sepatu Converse', 'Sepatu', 'Original', 900000, 9, 11, '2021-12-04 03:22:32', '2021-12-04 03:22:32', NULL),
(19, 'Gantungan kunci', 'Aksesoris', 'Motif Unik', 2000, 1, 2, '2021-12-04 03:23:29', '2021-12-04 03:23:29', NULL),
(20, 'Macbook Pro', 'Elektronik', 'Produk bekas', 8000000, 3, 100, '2021-12-04 03:24:33', '2021-12-04 03:24:33', NULL),
(21, 'Laptop Asus', 'Elektronik', 'Bekas', 3000000, 3, 10, '2021-12-04 03:25:08', '2021-12-04 03:25:08', NULL),
(22, 'Hardisk 500gb', 'Elektronik', 'Speed kenceng', 100000, 1, 10, '2021-12-04 03:25:45', '2021-12-04 03:25:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
