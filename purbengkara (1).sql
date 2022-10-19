-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2022 at 01:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purbengkara`
--

-- --------------------------------------------------------

--
-- Table structure for table `backgroundheader`
--

CREATE TABLE `backgroundheader` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backgroundheader`
--

INSERT INTO `backgroundheader` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image/uploads/slideimage/1/2022101666178416.jpeg', '2022-10-19 18:20:16', '2022-10-19 18:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Cetak Cepat'),
(2, 'Cetak Murah');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id_featured` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id_featured`, `name`, `description`, `icon`) VALUES
(1, 'Produk Berkualitas', 'Dengan Mesin-mesin Printing Terbaru, Selalu Menggunakan Tinta Original, Tenaga kerja Ahli dan berpengalaman, Kami berkomitmen menghadirkan kualitas cetak terbaik bagi Anda.', 'image/uploads/featured/1/202291663038579.png'),
(2, 'Proses Cepat', 'Didukung mesin Printing Eropa dan Jepan dengan teknologi terbaru, Mesin Finishing otomatis, membuat hasil cetak Anda bisa ditunggu dan sampai di tangan Anda pada hari yang sama.', 'image/uploads/featured/2/202291663038593.png'),
(3, 'Ramah Dikantong', 'Efisiensi & Mesin Super Cepat dan Serba Otomatis membuat kami bisa menghadirkan Produk-produk berkualitas dengan harga terrrmuurahh.. BUKTIKAN', 'image/uploads/featured/3/202291663038604.png'),
(4, 'Terpercaya & Bertanggung Jawab', 'Kami berkomitmen selalu memberi hasil cetak yang memuaskan & menjaga kepercayaan yang Anda berikan pada kami.', 'image/uploads/featured/4/202291663038696.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url_segment` text NOT NULL,
  `priceMin` int(11) NOT NULL,
  `priceMax` int(11) NOT NULL,
  `spek` text DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `tofront` enum('Y','N') NOT NULL DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `url_segment`, `priceMin`, `priceMax`, `spek`, `categoryid`, `tofront`, `created_at`, `updated_at`) VALUES
(1, 'aanner1', 'banner1', 10000, 50000, 'Banner Bagus', 1, 'Y', '2022-09-21 03:55:25', '2022-09-21 03:55:25'),
(2, 'Banner', 'banner-phz', 100000, 10000000, 'Banner biasa', 2, 'N', '2022-09-18 06:07:54', '2022-09-18 06:07:54'),
(3, 'Banner', 'banner-e02', 100000, 10000000, 'Banner biasa', 2, 'N', '2022-09-18 06:08:15', '2022-09-18 06:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `productImage`
--

CREATE TABLE `productImage` (
  `id_productImage` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productImage`
--

INSERT INTO `productImage` (`id_productImage`, `productid`, `image`) VALUES
(1, 1, 'image/uploads/product/1/1/202291663485013.png'),
(2, 1, 'image/uploads/product/1/2/202291663485055.png'),
(3, 2, 'image/uploads/product/2/3/202291663481274.png'),
(4, 3, 'image/uploads/product/3/4/202291663481295.png'),
(5, 1, 'image/uploads/product/1/5/202291663485396.png');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `maps_link` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `telepon` text DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `logo_website` text DEFAULT NULL,
  `seo_keyword` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `cara_order` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `maps_link`, `address`, `email`, `telepon`, `whatsapp`, `logo_website`, `seo_keyword`, `seo_title`, `seo_description`, `cara_order`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.32461347667845!2d112.69058878865108!3d-7.332117426437667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1662175136084!5m2!1sid!2sid', 'Balas Klumprik,Kec. Wiyung, Kota SBY, Jawa Timur', 'ferdyp73@gmail.com', '0895355153024', '0895355153024', 'image/uploads/icon/2022101665453384.png', 'Percetakan Surabaya, Percetakan Murah Surabaya, Digital Printing Surabaya, Jasa Percetakan Murah Surabaya, Jasa Percetakan Cepat Dan Murah Surabaya', 'Purberkara - Digital Printing Percetakan Online Surabaya', 'Purbengkara, pusat digital printing, percetakan offset, laser cutting Surabaya kini hadir dengan layanan cetak online untuk berbagai kebutuhan anda. Melayani cetak pengiriman ke seluruh Indonesia.', 'Proses Order:\r\n\r\n1. Konsultasikan kebutuhan Anda Via WA: 0895355153024\r\n2. Masukan data lengkap, Nama, Nomer WA yg bisa dihubungi, File/ desain, keterangan order dan jumlah order Anda ke email : purbengkara@gmail.com\r\n3. Konfirmasikan kembali setelah Anda mengirimkan detail order dan konfirmasikan pembayaran Anda ke nomer WA: 08113527287 \r\n4. Tunggu proses pengerjaan sesuai waktu yang di janjikan. Selesai.  \r\nPembayaran resmi hanya melalui rekening BCA 123 atas nama Imam Hamdi. Waktu aktif pelayanan Senin-Sabtu 09:00-17:30 WIB.');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `name` text NOT NULL,
  `icon` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `name`, `icon`, `url`) VALUES
(1, 'Facebook', 'image/uploads/sosmed/1/2022101666178575.png', 'https://www.facebook.com/fvory.id/'),
(3, 'Instagram', 'image/uploads/sosmed/3/2022101666178593.png', 'https://instagram.com/ferdycp_'),
(4, 'Twitter', 'image/uploads/sosmed/4/202291663038479.png', 'https://twitter.com/monstreza');

-- --------------------------------------------------------

--
-- Table structure for table `specialprice`
--

CREATE TABLE `specialprice` (
  `id_specialprice` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialprice`
--

INSERT INTO `specialprice` (`id_specialprice`, `productid`, `name`, `price`, `note`) VALUES
(1, 1, 'Harga special', '100 ribu perbox', 'Kertas premium+kertas mantap+kertas jos\r\n'),
(2, 2, 'Harga special tahun baru', '100 juta - 1 M', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `specialpricedt`
--

CREATE TABLE `specialpricedt` (
  `id_specialpricedt` int(11) NOT NULL,
  `specialpriceid` int(11) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` enum('admin','karyawan') NOT NULL DEFAULT 'admin',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '2022-09-04 04:42:42', '2022-09-04 04:42:42'),
(2, 'ferdy', 'karyawan', 'ferdycp', 'ferdot123', '2022-09-07 03:48:13', '2022-09-07 03:48:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backgroundheader`
--
ALTER TABLE `backgroundheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id_featured`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `productImage`
--
ALTER TABLE `productImage`
  ADD PRIMARY KEY (`id_productImage`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `specialprice`
--
ALTER TABLE `specialprice`
  ADD PRIMARY KEY (`id_specialprice`);

--
-- Indexes for table `specialpricedt`
--
ALTER TABLE `specialpricedt`
  ADD PRIMARY KEY (`id_specialpricedt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backgroundheader`
--
ALTER TABLE `backgroundheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productImage`
--
ALTER TABLE `productImage`
  MODIFY `id_productImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialprice`
--
ALTER TABLE `specialprice`
  MODIFY `id_specialprice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specialpricedt`
--
ALTER TABLE `specialpricedt`
  MODIFY `id_specialpricedt` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
