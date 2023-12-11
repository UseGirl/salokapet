-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 12:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salokapet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `no_telp`, `email`, `password`) VALUES
(0, 'shiftpagi', 123456, 'admin@gmail.com', 'adminpagi');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail_order` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `id_order` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_detail_order`, `id_produk`, `id_order`, `jumlah`, `harga`, `total`) VALUES
(45, 1, 1, 5, '10000', '50000'),
(46, 1, 2, 10, '10000', '100000'),
(47, 2, 3, 1, '15000', '15000'),
(49, 2, 4, 2, '15000', '30000'),
(50, 3, 5, 1, '15000', '15000'),
(52, 3, 6, 1, '15000', '15000'),
(53, 3, 7, 1, '15000', '15000'),
(54, 2, 8, 1, '15000', '15000'),
(55, 1, 9, 1, '10000', '10000'),
(56, 1, 10, 1, '10000', '10000'),
(57, 1, 11, 3, '10000', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'pakan'),
(2, 'Fet&Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(10) NOT NULL,
  `nama_kurir` varchar(20) NOT NULL,
  `id_wilayah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `id_wilayah`) VALUES
(2, 'Kurir Jogja', 3),
(3, 'Kurir Jakarta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(10) NOT NULL,
  `id_kurir` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_kurir`, `tanggal_transaksi`, `total`, `status`, `id_produk`, `harga`) VALUES
(1, 2, '2023-12-03', '50000', 'Approved', 1, '10000'),
(2, 2, '2023-12-03', '100000', 'Approved', 1, '10000'),
(4, 2, '2023-12-04', '30000', 'Approved', 2, '15000'),
(5, 2, '2023-12-04', '15000', 'Approved', 3, '15000'),
(6, 2, '2023-12-08', '15000', 'Waiting Approval', 3, '15000'),
(7, 2, '2023-12-08', '15000', 'Waiting Approval', 3, '15000'),
(8, 2, '2023-12-08', '15000', 'Waiting Approval', 2, '15000'),
(9, 2, '2023-12-11', '10000', 'Waiting Payment', 1, '10000'),
(10, 2, '2023-12-11', '10000', 'Waiting Payment', 1, '10000'),
(11, 2, '2023-12-11', '30000', 'Waiting Payment', 1, '10000');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah_stok` int(5) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `id_kategori`, `harga`, `jumlah_stok`, `ukuran`, `deskripsi`, `gambar`) VALUES
(1, 'Royal Canin Kitten', 1, '10000', 45, 'S', 'Royal Canin Kitten Food menyajikan formula nutrisi khusus yang dirancang untuk mendukung pertumbuhan dan perkembangan yang sehat. Tinggi protein, lemak, vitamin, dan mineral yang terkandung di dalamnya bekerja bersama-sama untuk memastikan kucing Anda mendapatkan dukungan maksimal untuk tulang, otot, dan sistem kekebalan tubuhnya.', 'royalcanin.png'),
(2, 'Royal Canin Dog', 1, '15000', 0, 'XL', 'Royal Canin Adult Dog Food menyuguhkan formula gizi lengkap dengan keseimbangan optimal protein, lemak, vitamin, dan mineral. Dengan perhatian khusus pada kebutuhan energi dan metabolisme anjing dewasa, produk ini membantu menjaga berat badan yang sehat sambil memberikan tenaga yang dibutuhkan.', 'royalcanindog.png'),
(3, 'Dog Food', 1, '15000', 50, 'XL', 'Ear Adult Dog Food  formula gizi lengkap , optimal protein, lemak, vitamin, dan mineral. Dengan perhatian khusus pada kebutuhan energi dan metabolisme anjing dewasa, produk ini membantu menjaga berat badan ', 'dogfood.png'),
(4, 'Necklace for Cat', 2, '40.000', 10, 'all size', 'Aksesoris khusus kucing ', 'kalungcat.png'),
(5, 'Necklace for Dog', 2, '73.000', 10, 'all ', 'aksesoris khusus anjing', 'kalungDog.png'),
(6, 'Keranjang ', 2, '250.000', 5, 'oversize', '-', 'KERANJANG.png'),
(7, 'Keranjang for cat', 2, '250.000', 5, 'all size', '-', 'keranjang1.png'),
(8, 'Tender & True', 1, '50.000', 20, 'XL', 'Pakan bernutrisi salmon untuk kucing adult', 'mio.png'),
(9, 'Edgard Cooper', 1, '60.000', 5, 'L', 'pakan bernutrisi yang dapat dikonsumsi kucing ataupun anjing', 'pakansalmon.png'),
(10, 'RC Persian Skin', 1, '150.000', 10, 'L', '-', 'RCPersia.png'),
(11, 'Set pembersig gigi a', 2, '35.000', 20, 'all size', '-', 'setgigi.png'),
(12, 'whiskas kitten ', 1, '76.000', 20, 'XL', '-', 'wiskasKitten.png'),
(13, 'Whiskas adult Tuna', 1, '50.000', 10, 'L', '-', 'wiskas.png'),
(14, 'Bed For Kitten', 2, '120.000', 5, 'M', 'kasur untuk kitten', 'tempattidur.png'),
(15, 'Wadah Pakan Anjing', 2, '72.000', 10, 'all size', '-', 'wadah.png'),
(16, 'Vitamin Kucing', 2, '80.000', 10, 'all size', '', 'vitcat.png'),
(17, 'Vitamin kekebalan im', 2, '100.000', 20, 'all size', 'vitamin yang dapat dikonsumsi kucing dan anjing', 'vitdog.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_telp`, `email`, `password`) VALUES
(6, 'anjay', 2147483647, 'mantep@gmail.com', 'mantep');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(10) NOT NULL,
  `nama_wilayah` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`, `harga`) VALUES
(1, 'Jakarta', '10000'),
(2, 'Bali', '10000'),
(3, 'Jogja', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`),
  ADD UNIQUE KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kurir`
--
ALTER TABLE `kurir`
  ADD CONSTRAINT `kurir_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
