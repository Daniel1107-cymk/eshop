-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 12:39 PM
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
(1, 'Nike', 'shoe', 2, 1, 120, 100, 0x3935302d646f776e6c6f61642e6a7067),
(2, 'Nike', 'shoe', 2, 1, 110, 100, 0x37322d646f776e6c6f61642e6a7067),
(3, 'Nike', 'shoe', 2, 1, 110, 100, 0x3630312d646f776e6c6f61642e6a7067),
(4, 'Nike', 'shoe', 2, 1, 110, 100, 0x3538302d646f776e6c6f61642e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `histori_trans`
--

CREATE TABLE `histori_trans` (
  `id_histori_trans` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_resi` int(11) DEFAULT NULL,
  `id_stock` int(11) DEFAULT NULL,
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
  `id_stock` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
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
(1, 'eko@gmail.com', '123', 1, 0),
(2, 'admin', '123', NULL, 1);

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
(1, 'eko', 0, 'test', 'eko@gmail.com', '2020-05-14'),
(2, 'eko', 1, 'test', 'eko@gmail.com', '2020-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id_order` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_stock` int(11) DEFAULT NULL,
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
  `nomor_resi` int(11) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_status_kirim` int(11) DEFAULT NULL,
  `id_status_trans` int(11) DEFAULT NULL,
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
  ADD KEY `id_resi` (`id_resi`),
  ADD KEY `id_stock` (`id_stock`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_stock` (`id_stock`);

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
  ADD KEY `id_stock` (`id_stock`),
  ADD KEY `id_status_order` (`id_status_order`);

--
-- Indexes for table `resi`
--
ALTER TABLE `resi`
  ADD PRIMARY KEY (`id_resi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_status_kirim` (`id_status_kirim`),
  ADD KEY `id_status_trans` (`id_status_trans`);

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
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histori_trans`
--
ALTER TABLE `histori_trans`
  MODIFY `id_histori_trans` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resi`
--
ALTER TABLE `resi`
  MODIFY `id_resi` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_stock`) REFERENCES `gudang` (`id_stock`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_status_order`) REFERENCES `status_order` (`id_status_order`);

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
  ADD CONSTRAINT `histori_trans_ibfk_2` FOREIGN KEY (`id_resi`) REFERENCES `resi` (`id_resi`),
  ADD CONSTRAINT `histori_trans_ibfk_3` FOREIGN KEY (`id_stock`) REFERENCES `gudang` (`id_stock`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `order_list` (`id_order`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`id_stock`) REFERENCES `gudang` (`id_stock`);

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
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`id_stock`) REFERENCES `gudang` (`id_stock`),
  ADD CONSTRAINT `order_list_ibfk_3` FOREIGN KEY (`id_status_order`) REFERENCES `status_order` (`id_status_order`);

--
-- Constraints for table `resi`
--
ALTER TABLE `resi`
  ADD CONSTRAINT `resi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `resi_ibfk_2` FOREIGN KEY (`id_status_kirim`) REFERENCES `status_kirim` (`id_status_kirim`),
  ADD CONSTRAINT `resi_ibfk_3` FOREIGN KEY (`id_status_trans`) REFERENCES `status_trans` (`id_status_trans`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
