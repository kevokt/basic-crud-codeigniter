-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 01:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_gambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `description`, `filename`) VALUES
('item_681b2cccad20d9.19056932', 'Mobil SUV ', 'Jenis-jenis mobil yang saat ini cenderung banyak dipilih oleh masyarakat adalah model mobil SUV. Secara eksterior dan penampilan keseluruhan mobil SUV adalah perpaduan antara mobil jeep dan mobil sedan. Mobil SUV banyak diminati karena fungsinya yang dapat digunakan dalam segala medan termasuk casual offroad. ', 'item_681b2cccad20d9_19056932.png'),
('item_681b2d0f334ce6.72086177', 'Mobil Crossover', 'Desain yang dikedepankan pada hampir seluruh mobil crossover adalah sisi aerodinamisnya. Ini menunjukkan bahwa mobil Crossover mudah untuk dimanuver dan praktis dijadikan mobil perkotaan.  Selain terlihat lebih compact, mobil ini juga dihadirkan dengan berbagai fitur infotainment hingga safefty yang nyaman. Rata-rata jenis mobil ini diperlengkapi dengan fitur penggerak AWD. Salah satu contoh mobil yang beredar saat ini adalah Xpander Cross, Chevrolet Trax, Nissan Juke dan Mazda CX-3. ', 'item_681b2d0f334ce6_72086177.png'),
('item_681b2d55a98fd2.37441543', 'Mobil Sport Sedan', 'Jika Anda tertarik untuk memiliki mobil sport, Anda wajib mempertimbangkan fungsi dan kegunaannya yang terbatas. Mobil ini lebih difungsikan untuk pengendalian dan performa pengendara. Disebut sebagai mobil Sport karena dinilai mobil memiliki tampilan yang sporty. Tidak heran jika mobil ini memiliki harga yang tinggi. ', 'item_681b2d55a98fd2_37441543.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
