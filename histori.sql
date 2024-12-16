-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2024 pada 21.30
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `magnitudo` varchar(20) NOT NULL,
  `sumber_tsunami` varchar(100) NOT NULL,
  `catatan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`id`, `tanggal`, `waktu`, `latitude`, `longitude`, `magnitudo`, `sumber_tsunami`, `catatan`) VALUES
(1, '2000-05-04', '04:21:16', '-1.105', '123.573', '7.6', 'Banggal, Sulawesi', 'Banggai: Intensitas maksimum\nsekitar VII MMI. Gempa bumi\nyang diikuti tsunami terjadi di\nPulau Peleng, Kepulauan\nBanggai, tsunami\nmenyebabkan 50 orang\nmeninggal.'),
(2, '2002-03-05', '00:00:00', '6.07', '126.34', '7.2', 'Mindanao, Filipina', 'Sekitar 15 orang meninggal, 100 terluka dan 800 bangunan rusak atau hancur di Mindanao selatan dan tengah. Di selatan Provinsi Kotabato tanah longsor memutus dinding kawah dari G. Parker dan dirasakan sampai ke Danau Maughan, sehingga menimbulkan banjir yang menghanyutkan rumah-rumah dan\r\nmembanjiri 9 sub-daerah. Tsunami Lokal dengan perkiraan ketinggian 3 meter menyebabkan kerusakan di Kiamba, Maitum dan Palimbang. Dirasakan IX PIVSdi Palimbang; (VIII PIVS) di Kiamba and Maitum; (VII PIVS) di Alabel, General Santos dan Sebu; (VI PIVS) di Koronadal; (V PIVS) di Cotabato; (IV PIVS) di Davao City, Kidapawan dan Zamboanga; (III PIVS) di Bislig, Malaybalay, Mati dan Pagadian; (II PIVS) di Butuan; (I PIVS) di Hibok-Hibok.'),
(3, '2002-10-10', '10:50:20', '-1.757', '134.297', '7.6', 'Irian Jaya', '8 Orang meninggal, sekitar 632 terluka, lebih dari 1000 rumah hancur atau beberapa rusak dan sekitar 900 banguan rusak di daerah Manokwari- Oransbari-Ransiki.Tanah Longsor memblokir jalan-jalan di daerah. Sebuah patahan di permukaan sepanjang 3 km terdapat di Ransiki. Beberapa rumah dibanjiri oleh lokal tsunami dengan perkiraan ketinggain 3 sampai 5 meter di Oransbaridan Ransiki, dan 1\r\nmeter di Manokwari. Liquefaksi terjadi disepanjang pantai di Manokwari, Oransbari dan Ransiki serta amblas kira-kira 2 sampai 3 m. diamati dari Oransbari. Dirasakan IV MMI di Biak, Sorong dan Timika; III MMI di Nabire dan Wamena.'),
(4, '2004-01-28', '22:15:30', '-3.12', '127.4', '6.7', 'P. Seram', '-'),
(5, '2004-11-11', '21:26:41', '-8.152', '124.868', '7.5', 'Kepulauan Alor', 'Pusat gempanumi terjadi di\r\ndarat sekitar 39 km sebelah\r\nTimur Kalabahi. 16 orang\r\nmeninggal, 142 orang luka\r\nberat, 5 orang luka ringan.\r\nKerusakan terjadi pada\r\nlandasan kapal terbang di\r\nbandara. Air laut memasuki\r\ndaratan hingga sejauh 100 m.\r\nHingga pukul 9.00 WIB telah\r\nterjadi 25 kali gempa susulan.'),
(6, '2004-12-26', '07:58:53', '3.295', '95.982', '9', 'Barat Daya Banda Aceh, Megathrust Sumatera\r\n', 'Pusat gempa berada di laut kurang lebih 149 km arah selatan Meulaboh.\r\nKorban Meninggal: 227.898 (Samudera-Hindia), 166.080 (Aceh)\r\nAir laut surut selama 30 menit setelah gempa, kemudian gelombang tsunami pertama datang.\r\nGelombang pertama datang jam 08.42 ( 44 menit setelah gempa). Gelombang kedua tiba jam 08.53 (lebih besar). Gelombang kedua tiba jam 09.15 (paling besar). Kota Banda Aceh yang luluh lantak akibat gempa berkekuatan 9 SR semakin mudah dihempas gelombang tsunami dan dibawanya jauh ke darat.'),
(7, '2005-03-28', '16:09:36', '2.085', '97.108', '8.7', 'Utara P.Nias, Megathrust Sumatera', 'Tsunami 3 meter telah merusak rumah-rumah di sekitar Pantai Nias, menyebabkan korban jiwa sekitar 10 orang.'),
(8, '2005-04-10', '10:29:11', '-1.644', '99.607', '6.7', 'Kepulauan Mentawai', 'Gempabumi tidak meyebabkan banyak kerusakan pada bangunan.'),
(9, '2005-07-24', '00:00:00', '7.9', '92.1', '7.2', 'Kepulauan Nikobar', '-'),
(10, '2006-03-14', '06:57:33', '-3.595', '127.214', '6.7', 'P. Seram', '231 rumah rusak barat dan 46 rumah rusak ringan. 3 orang meninggal dari desa Batu Jungku. Gempabumi ini menyebabkan 143 keluarga mengungsi (663 orang) dari desa Pella, daerah Batabual.'),
(11, '2006-07-17', '08:19:28', '-9.254', '107.411', '7.7', 'Pangandaran Jawa', 'Tsunami melanda kawasan pantai selatan P.Jawa sepanjang 500 km. Tsunami merusak desa-desa di pantai selatan Jawa Barat yaitu: Cipatujah(Tasikmalaya), Pangandaran(Ciamis), dan lokasi wisata pantai Pangandaran. Tinggi runup di Jawa Barat: Pameungpeuk 1 m; Pangandaran 3-8m; Jawa Tengah: Nusa Kambangan 20m; Cilacap 2m; Widara Payung 2-5m, Ayah 1 m; Yogyakarta: Parangtritis 3m; Jawa\r\nTimur: Sendangbiru 2m'),
(12, '2007-09-12', '11:10:26', '-4.438', '101.367', '8.4', 'Bengkulu, Sumatera', 'Bengkulu, Kabupaten Bengkulu Utara, dan Muko-muko: Telah terukur tsunami dengan ketinggian 2.2 m di Padang. Tsunami terjadi beberapa jam setelah tumbukan gempa besar. Tsunami menyebabkan kerusakan aliran listrik sehingga tidak ada penerangan di waktu malam sejak gempa terjadi. Tidak ada korban jiwa akibat kejadian tsunami ini. Umumnya korban jiwa diakibatkan oleh goncangan gempa yang meruntuhkan bangunan.'),
(13, '2008-02-25', '08:26:33', '-2.486', '99.972', '6.5', 'Painan, Sumatera Barat', 'Muko-Muko: Tidak ada Korban jiwa dan kerusakan bangunan.\r\n'),
(14, '2008-11-16', '17:02:37', '1.271', '122.091', '7.3', 'Sulawesi Utara', 'Tidak ada Korban jiwa dan kerusakan bangunan.'),
(15, '2009-01-03', '00:00:00', '-0.3', '132.8', '-', 'Manokwari, Irian Jaya', 'Manokwari: Tsunami kecil, tidak menimbulkan kerusakan.'),
(16, '2009-08-16', '07:38:23', '-1.525', '99.378', '6.8', 'Mentawai, Sumatera', 'Padang: Tsunami kecil, tidak menimbulkan kerusakan.\r\n'),
(17, '2009-09-02', '00:00:00', '-8.240', '107.320', '7.6', 'Tasikmalaya, Selatan Jawa Barat', 'Pelabuhan Ratu: Tsunami kecil, tidak menimbulkan kerusakan. Pameungpeuk: Kerusakan yang cukup parah hanya diakibatkan oleh gempa.'),
(18, '2009-09-30', '10:16:09', '-0.778', '99.719', '7.7', 'Padang, Sumatera Barat', 'Padang: Tsunami kecil, tidak menimbulkan kerusakan. Kerusakan parah akibat gempa. Tuapejat :Kerusakan yang cukup parah hanya diakibatkan oleh gempa.'),
(19, '2010-04-07', '22:15:03', '2.33', '97.02', '7.2', 'Sumatera, Indonesia', 'P. Banyak 0.43 m\r\nMeulaboh 0.36 m\r\nSibolga 0.20 m'),
(20, '2010-05-09', '05:59:41', '3.61', '95.84', '7.2', 'Meulaboh, NAD', 'P. Sinabang\r\n'),
(21, '2010-10-25', '14:42:19', '-3.57', '99.93', '7.7', 'Mentawai, Sumatera Barat', 'Kerusakan parah di pantai\r\nbarat Kepulauan Mentawai Bagian Selatan (P. Sipora, P.Pagai Utara Dan P. Pagai Selatan)'),
(22, '2011-03-11', '05:46:24', '38.32', '142.37', '9.0', 'Sendai Jepang', 'Tsunami setinggi 2 meter terjadi di pantai utara Papua, merusak jalan aspal dan beberapa rumah penduduk. Tsunami tiba 6 jam setelah gempa.\r\n'),
(23, '2012-04-11', '08:38:33', '2.34', '93.04', '8.4', '500km barat daya Aceh', 'Gempa doublet di lepas pantai\r\nSumatera. Tsunami tercatat di\r\nMeulaboh 0.8 meter. Korban\r\njiwa 5 orang akibat gempa dan\r\nserangan jantung.\r\n'),
(24, '2012-04-11', '10:43:11', '0.82', '92.42', '8.2', '500km barat daya Aceh', 'Gempa doublet di lepas pantai\r\nSumatera. Tsunami tercatat di\r\nMeulaboh 0.8 meter. Korban\r\njiwa 5 orang akibat gempa dan\r\nserangan jantung.\r\n'),
(25, '2014-11-15', '02:31:44', '1.95', '126.49', '7.3', 'Laut Maluku', 'Tsunami kecil terekam di Jailolo 9 cm dan Manado 3 cm.'),
(26, '2016-03-02', '12:49:46', '-4.96', '94.36', '7.8', 'Barat Daya Sumatera', 'Tsunami kecil terdeteksi di Pulau Cocos setinggi 10 cm dan di Padang setinggi 5 cm'),
(27, '2018-08-05', '11:46:37', '-8.37', '116.48', '7.0', 'Lombok Utara, NTB', 'Hasil observasi tsunami :\r\n- Carik (18:48 WIB) : 0,13 m\r\n- Badas (18:54 WIB) : 0,10 m\r\n- Lembar (19:27 WIB) : 0,09 m\r\n- Benoa (19:58 WIB) : 0,02 m'),
(28, '2018-09-28', '10:02:42', '-0.177', '119.821', '7.4', 'Donggala, Sulawesi Tengah', 'Korban Meninggal : total 2.037 orang, dengan rincian : Donggala : 171 orang, Palu : 1.636 orang, Sigi : 222 orang, Parimo : 8 orang, Pas-Ka : 1 orang\r\nHilang : total 671 orang, dengan rincian : Donggala : 14 orang, Palu : 652 orang, Sigi : 3 orang, Parimo : 2 orang\r\nTertimbun : total 152 orang\r\nKorban luka-luka : total 4.084 orang: Donggala : 1.750 orang, Palu : 1.549 orang, Sigi : 785 orang\r\nPengungsi : total 74.044 orang, Donggala : 20.223 orang, Palu : 38.621 orang, Sigi : 15.200 orang'),
(29, '2018-12-22', '00:00:00', '-6.100260967032511', '105.42825250126012', '3.4', 'Gunung Anak Krakatau', 'Dampak Keseluruhan:\r\n• Korban Meninggal : 431 orang\r\n• Korban luka-luka : 7,200 orang luka\r\n• Korban hilang : 15 orang\r\n• Korban mengungsi : 46,646 orang\r\nKerusakkan\r\n• Kerusakkan rumah : Rusak Ringan (RR) : 181 unit; Rusak Sedang (RS) : 70 unit; Rusak Berat (RB) : 1,527 unit; 76 unit penginapan dan warung rusak; 432 perahu dan kapal rusak.\r\n• Korban dan kerusakkan berasal dari lima Kabupaten yaitu Pandeglang, Serang, Lampung Selatan, Pesawaran, Tanggamus'),
(30, '2019-04-12', '18:40:49', '-1.90', '122.54', '6.9', 'Banggai, Kepulauan Sulawesi Tengah', 'Kedalaman: 10Km'),
(31, '2019-07-07', '22:08:39', '0.51', '126.18', '7.1', 'Ternate, Maluku Utara', 'Kedalaman: 10Km'),
(32, '2019-08-02', '19:03:21', '-7.54', '104.58', '7.4', 'Sumatera Utara - Banten', ''),
(33, '2019-11-14', '23:17:41', '1.63', '126.40', '7.4', 'Jailolo, Maluku Utara', 'Kedalaman: 10Km'),
(34, '2021-12-14', '10:20:22', '-7.59', '122.26', '7.5', 'Larantuka, NTT', 'Kedalaman: 10Km'),
(35, '2023-01-10', '00:47:34', '-7.25', '130.18', '7.9', 'Maluku Tenggara', 'Kedalaman: 131Km'),
(36, '2023-04-05', '03:00:57', '-0.93', '98.39', '7.3', 'Mentawai, Sumatera Barat', 'Kedalaman: 84Km');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
