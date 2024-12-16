-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 08:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsunami`
--

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(11) NOT NULL,
  `nm_pelapor` varchar(20) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `nm_korban` varchar(13) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `ciri` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`id`, `nm_pelapor`, `no_hp`, `nm_korban`, `lokasi`, `ciri`, `status`) VALUES
(10, 'Rindu Rahmadina', 2147483647, 'Marsinah', 'Way Muli', '19', 'dicari'),
(11, 'Tirta', 2147483647, 'Juanda', 'Way Muli', '-', 'dicari'),
(12, 'Azizah', 2147483647, 'Husin', 'Way Muli', '52', 'dicari'),
(13, 'Halma', 2147483647, 'Dirta', 'Way Muli', '73', 'dicari'),
(14, 'Halma', 2147483647, 'Masinah', 'Way Muli', '65', 'dicari'),
(15, 'Jaya', 2147483647, 'Aisyah', 'Way Muli', '70', 'dicari'),
(16, 'Nova', 2147483647, 'M Yusuf', 'Kunjir', '70', 'dicari'),
(17, 'Mamad', 2147483647, 'Nurhayati', 'Kunjir', '56', 'dicari'),
(18, 'Rizki', 2147483647, 'Ibrahim', 'Kunjir', '70', 'dicari'),
(19, 'Ilham', 2147483647, 'Edi Suwarno', 'Kunjir', '50', 'dicari'),
(20, 'Ika', 2147483647, 'Afifah Khairu', 'Terusan Nunyai', '4', 'dicari'),
(21, 'Magdanela', 2147483647, 'Nasiroh', 'Desa Maja', '80', 'dicari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
