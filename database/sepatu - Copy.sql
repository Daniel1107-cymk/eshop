-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 08:20 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_stock` int(11) DEFAULT NULL,
  `id_status_order` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `harga_unit` float DEFAULT NULL,
  `sub_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id_stock` int(11) NOT NULL,
  `nama_item` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_tipe_item` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `harga_unit` float DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_stock`, `nama_item`, `deskripsi`, `id_kategori`, `id_tipe_item`, `quantity`, `harga_unit`, `gambar`) VALUES
(1, 'Puma Sport Heroes', 'Limited Summer Edition 2019', 1, 1, 1, 340000, '111-sepatu 2.png'),
(2, 'Adidas Go Run', 'For Jogging In the Shiny Day', 2, 1, 5, 275000, '972-Sepatu 3.png'),
(3, 'Fila Monster 2.0', 'New Stock ', 1, 1, 3, 380000, '628-Sepatu 4.png'),
(4, 'FIla Snow White Edition', 'New Stock', 1, 1, 8, 425000, '375-sepatu 5.png'),
(5, 'Cepyhrus 2.1', 'Winter Edition 2019', 1, 1, 4, 280000, '429-Untitled-2.png'),
(6, 'Go Run', 'New Male Running Shoes', 1, 1, 5, 320000, '482-Untitled-3.png'),
(7, 'Fila Shiny Light Winter Edition', 'Old Stock', 1, 1, 4, 310000, '464-Untitled-4.png'),
(8, 'Red Fire A.20', 'New Incoming', 1, 1, 3, 340000, '869-Untitled-5.png'),
(9, 'Nike - GORevo 2.0', 'Limited Edition', 1, 1, 3, 450000, '121-Untitled-6.png'),
(10, 'Nike Runvolutioner 4.0', 'New Running Shoes', 1, 1, 4, 390000, '490-Untitled-7.png'),
(11, 'Patron Running Shoes ', 'New Stock', 1, 1, 4, 420000, '361-Untitled-8.png'),
(12, 'Nike GoLight 1.0', 'Women Day 2020 Edition ', 2, 1, 3, 380000, '972-Untitled-9.png'),
(13, 'Go Matic', 'New Stock ', 1, 1, 4, 320000, '848-Untitled-10.png'),
(14, 'Mens Power Classical', 'New Stock ', 1, 1, 4, 390000, '348-Untitled-12png.png'),
(15, 'The Executive Classical Shoes ', 'New Stock ', 1, 1, 4, 420000, '38-Untitled-13psd.png'),
(16, 'NIke GoForLight Summer 2019', 'Old Stock', 1, 1, 2, 340000, '451-Untitled-14.png');

-- --------------------------------------------------------

--
-- Table structure for table `histori_trans`
--

CREATE TABLE `histori_trans` (
  `id_histori_trans` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_resi` int(11) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `kode_invoice` text DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `total_harga` float DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `id_member`, `is_admin`) VALUES
(1, 'admin', 'admin', NULL, 1),
(2, 'eko', '123', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `member_active` tinyint(1) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `member_active`, `alamat`, `email`, `tanggal_lahir`) VALUES
(1, 'eko', 1, 'test', 'eko@gmail.com', '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id_order` int(11) NOT NULL,
  `order_num` varchar(25) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_status_order` int(11) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `total_harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resi`
--

CREATE TABLE `resi` (
  `id_resi` int(11) NOT NULL,
  `nomor_resi` varchar(25) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_status_kirim` int(11) DEFAULT NULL,
  `id_status_trans` int(11) DEFAULT NULL,
  `id_order` int(11) NOT NULL,
  `total_harga` float DEFAULT NULL,
  `tanggal_trans` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `status_kirim`
--

CREATE TABLE `status_kirim` (
  `id_status_kirim` int(11) NOT NULL,
  `nama_status_kirim` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_kirim`
--

INSERT INTO `status_kirim` (`id_status_kirim`, `nama_status_kirim`) VALUES
(1, 'Kirim'),
(2, 'Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `status_order`
--

CREATE TABLE `status_order` (
  `id_status_order` int(11) NOT NULL,
  `nama_status_order` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_order`
--

INSERT INTO `status_order` (`id_status_order`, `nama_status_order`) VALUES
(1, 'Belum Bayar'),
(2, 'Kirim'),
(3, 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `status_trans`
--

CREATE TABLE `status_trans` (
  `id_status_trans` int(11) NOT NULL,
  `nama_status_trans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_trans`
--

INSERT INTO `status_trans` (`id_status_trans`, `nama_status_trans`) VALUES
(1, 'Proses'),
(2, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_item`
--

CREATE TABLE `tipe_item` (
  `id_tipe_item` int(11) NOT NULL,
  `nama_tipe_item` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_item`
--

INSERT INTO `tipe_item` (`id_tipe_item`, `nama_tipe_item`) VALUES
(1, 'Sneakers'),
(2, 'Sandals');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_stock` (`id_stock`),
  ADD KEY `id_status_order` (`id_status_order`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_tipe_item` (`id_tipe_item`);

--
-- Indexes for table `histori_trans`
--
ALTER TABLE `histori_trans`
  ADD PRIMARY KEY (`id_histori_trans`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_resi` (`id_resi`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_status_order` (`id_status_order`);

--
-- Indexes for table `resi`
--
ALTER TABLE `resi`
  ADD PRIMARY KEY (`id_resi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_status_kirim` (`id_status_kirim`),
  ADD KEY `id_status_trans` (`id_status_trans`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `status_kirim`
--
ALTER TABLE `status_kirim`
  ADD PRIMARY KEY (`id_status_kirim`);

--
-- Indexes for table `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id_status_order`);

--
-- Indexes for table `status_trans`
--
ALTER TABLE `status_trans`
  ADD PRIMARY KEY (`id_status_trans`);

--
-- Indexes for table `tipe_item`
--
ALTER TABLE `tipe_item`
  ADD PRIMARY KEY (`id_tipe_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `histori_trans`
--
ALTER TABLE `histori_trans`
  MODIFY `id_histori_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resi`
--
ALTER TABLE `resi`
  MODIFY `id_resi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `status_kirim`
--
ALTER TABLE `status_kirim`
  MODIFY `id_status_kirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_order`
--
ALTER TABLE `status_order`
  MODIFY `id_status_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_trans`
--
ALTER TABLE `status_trans`
  MODIFY `id_status_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_item`
--
ALTER TABLE `tipe_item`
  MODIFY `id_tipe_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order_list` (`id_order`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_stock`) REFERENCES `gudang` (`id_stock`),
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`id_status_order`) REFERENCES `status_order` (`id_status_order`);

--
-- Constraints for table `gudang`
--
ALTER TABLE `gudang`
  ADD CONSTRAINT `gudang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `gudang_ibfk_2` FOREIGN KEY (`id_tipe_item`) REFERENCES `tipe_item` (`id_tipe_item`);

--
-- Constraints for table `histori_trans`
--
ALTER TABLE `histori_trans`
  ADD CONSTRAINT `histori_trans_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `histori_trans_ibfk_2` FOREIGN KEY (`id_resi`) REFERENCES `resi` (`id_resi`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `order_list` (`id_order`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`id_status_order`) REFERENCES `status_order` (`id_status_order`);

--
-- Constraints for table `resi`
--
ALTER TABLE `resi`
  ADD CONSTRAINT `resi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `resi_ibfk_2` FOREIGN KEY (`id_status_kirim`) REFERENCES `status_kirim` (`id_status_kirim`),
  ADD CONSTRAINT `resi_ibfk_3` FOREIGN KEY (`id_status_trans`) REFERENCES `status_trans` (`id_status_trans`),
  ADD CONSTRAINT `resi_ibfk_4` FOREIGN KEY (`id_order`) REFERENCES `order_list` (`id_order`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
