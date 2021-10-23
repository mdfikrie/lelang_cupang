-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 11:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `lelangan_id` int(11) DEFAULT NULL,
  `nominal` int(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `lelangan_id`, `nominal`, `user_id`, `created_at`, `updated_at`) VALUES
(115, 40, 120000, 12, '2021-08-04 05:45:49', '2021-08-04 05:45:49'),
(116, 41, 100000, 12, '2021-08-04 05:51:15', '2021-08-04 05:51:15'),
(117, 43, 150000, 11, '2021-08-04 05:53:49', '2021-08-04 05:53:49'),
(118, 44, 300000, 11, '2021-08-04 06:10:22', '2021-08-04 06:10:22'),
(119, 45, 300000, 11, '2021-08-04 06:51:40', '2021-08-04 06:51:40'),
(120, 42, 500000, 12, '2021-08-04 09:45:02', '2021-08-04 09:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `penerima_id` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `is_seen` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user_id`, `penerima_id`, `text`, `is_seen`, `created_at`, `updated_at`) VALUES
(36, 12, 11, 'halo fikz betta', 1, '2021-07-19 17:03:12', '2021-07-19 17:03:12'),
(37, 11, 12, 'halo', 1, '2021-07-19 17:03:10', '2021-07-19 17:03:10'),
(38, 11, 12, 'sehat?', 1, '2021-07-19 17:03:10', '2021-07-19 17:03:10'),
(39, 11, 12, 'anda goblok', 1, '2021-07-19 17:03:10', '2021-07-19 17:03:10'),
(40, 11, 12, 'halo', 1, '2021-07-19 17:03:10', '2021-07-19 17:03:10'),
(41, 11, 12, 'bro', 1, '2021-07-19 17:04:53', '2021-07-19 17:04:53'),
(42, 11, 12, 'sehat?', NULL, '2021-07-19 17:05:09', '2021-07-19 17:05:09'),
(43, 11, 12, 'bos', 1, '2021-07-19 17:07:16', '2021-07-19 17:07:16'),
(44, 11, 12, 'oi', 1, '2021-07-19 17:07:16', '2021-07-19 17:07:16'),
(45, 12, 11, 'gimana bosku?', 1, '2021-07-19 17:07:51', '2021-07-19 17:07:51'),
(46, 11, 12, 'bnr kah?', 1, '2021-07-19 17:08:08', '2021-07-19 17:08:08'),
(47, 13, 12, 'cok', 1, '2021-07-19 17:29:52', '2021-07-19 17:29:52'),
(48, 12, 20, 'py', 1, '2021-07-19 17:41:05', '2021-07-19 17:41:05'),
(49, 12, 13, 'py', 1, '2021-07-19 17:30:25', '2021-07-19 17:30:25'),
(50, 13, 12, 'warai ngoding a', 1, '2021-07-19 17:32:16', '2021-07-19 17:32:16'),
(51, 12, 13, 'wegah', 1, '2021-07-19 17:32:57', '2021-07-19 17:32:57'),
(52, 13, 12, 'ws go ah', 1, '2021-07-19 17:33:04', '2021-07-19 17:33:04'),
(53, 12, 13, 'angger sinau nk youtube', 1, '2021-07-19 17:33:19', '2021-07-19 17:33:19'),
(54, 13, 12, 'angel ', 1, '2021-07-19 17:33:26', '2021-07-19 17:33:26'),
(55, 12, 13, 'gampang.. angger di jajal sek', 1, '2021-07-19 17:33:49', '2021-07-19 17:33:49'),
(56, 12, NULL, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000', 0, '2021-07-19 17:39:17', '2021-07-19 17:39:17'),
(57, 12, NULL, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000', 0, '2021-07-19 17:39:53', '2021-07-19 17:39:53'),
(58, 12, 19, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.50000', 1, '2021-07-19 17:42:27', '2021-07-19 17:42:27'),
(59, 12, 20, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.200000, silahkan cek keranjang anda!', 1, '2021-07-19 17:43:40', '2021-07-19 17:43:40'),
(60, 12, 11, 'halo', 0, '2021-07-24 03:41:25', '2021-07-24 03:41:25'),
(61, 12, 11, 'bro', 0, '2021-07-24 03:42:36', '2021-07-24 03:42:36'),
(62, 12, 11, 'sehat?', 0, '2021-07-24 03:42:40', '2021-07-24 03:42:40'),
(63, 12, 20, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000, silahkan cek keranjang anda!', 0, '2021-08-04 03:41:20', '2021-08-04 03:41:20'),
(64, 12, 20, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000, silahkan cek keranjang anda!', 0, '2021-08-04 03:43:50', '2021-08-04 03:43:50'),
(65, 12, 20, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000, silahkan cek keranjang anda!', 0, '2021-08-04 03:46:01', '2021-08-04 03:46:01'),
(66, 12, 20, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000, silahkan cek keranjang anda!', 0, '2021-08-04 03:47:40', '2021-08-04 03:47:40'),
(67, 12, 20, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000, silahkan cek keranjang anda!', 0, '2021-08-04 03:49:09', '2021-08-04 03:49:09'),
(68, 11, 12, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.120000, silahkan cek keranjang anda!', 1, '2021-08-04 09:10:50', '2021-08-04 09:10:50'),
(69, 11, 12, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.100000, silahkan cek keranjang anda!', 1, '2021-08-04 09:10:50', '2021-08-04 09:10:50'),
(70, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 05:53:57', '2021-08-04 05:53:57'),
(71, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 06:10:26', '2021-08-04 06:10:26'),
(72, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 06:51:51', '2021-08-04 06:51:51'),
(73, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 06:54:56', '2021-08-04 06:54:56'),
(74, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 06:55:11', '2021-08-04 06:55:11'),
(75, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 06:56:00', '2021-08-04 06:56:00'),
(76, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 06:58:21', '2021-08-04 06:58:21'),
(77, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 07:00:30', '2021-08-04 07:00:30'),
(78, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 08:25:58', '2021-08-04 08:25:58'),
(79, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 08:27:20', '2021-08-04 08:27:20'),
(80, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 08:30:08', '2021-08-04 08:30:08'),
(81, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 08:31:58', '2021-08-04 08:31:58'),
(82, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 08:32:08', '2021-08-04 08:32:08'),
(83, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 08:33:27', '2021-08-04 08:33:27'),
(84, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 08:33:41', '2021-08-04 08:33:41'),
(85, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 08:33:51', '2021-08-04 08:33:51'),
(86, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-04 08:48:17', '2021-08-04 08:48:17'),
(87, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 08:48:55', '2021-08-04 08:48:55'),
(88, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-04 09:07:55', '2021-08-04 09:07:55'),
(89, 13, 12, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.500000, silahkan cek keranjang anda!', 0, '2021-08-04 09:45:51', '2021-08-04 09:45:51'),
(90, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.150000, silahkan cek keranjang anda!', 0, '2021-08-06 02:43:00', '2021-08-06 02:43:00'),
(91, 12, 11, 'Selamat anda memenangkan lelangan saya dengan nominal Rp.300000, silahkan cek keranjang anda!', 0, '2021-08-06 04:17:28', '2021-08-06 04:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `nama`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'Red Koi Copper atau Iron-Man', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">Ikan&nbsp;</span><span style=\"font-weight: 600; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">cupang red koi copper&nbsp;</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">punya ciri warna dominasi merah dengan sisik berwarna copper atau tembaga di tubuhnya, sisiknya acak dan tidak beraturan. Yellow koi copper berasal dari genetik yellow koi yang disilangkan dengan cupang yang memiliki warna copper.</span><br></p>', 'ironman.png-1624988443.png', '2021-06-29 13:28:46', '2021-06-29 17:40:43'),
(6, 'Avatar Copper', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">Ikan&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">cupang avatar</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">&nbsp;punya ciri warna dominasi hitam pekat dengan sisik berwarna copper di tubuhnya, sisiknya acak dan berbentuk titik mutiara kecil, seperti bintang di langit atau galaksi.&nbsp;</span><br></p>', 'avatar copper.png-1624973490.png', '2021-06-29 13:31:30', '2021-06-29 13:31:30'),
(7, 'Yellow Koi Copper', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">Ikan&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">cupang yellow koi copper&nbsp;</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">punya ciri warna dominasi kuning dengan sisik berwarna copper atau tembaga di tubuhnya, sisiknya acak dan tidak beraturan. Yellow koi copper berasal dari genetik yellow koi yang disilangkan dengan cupang yang memiliki warna copper.</span><br></p>', 'yc.png-1624974067.png', '2021-06-29 13:41:07', '2021-06-29 13:41:07'),
(8, 'Blue Rim', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">Ikan&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">cupang blue rim&nbsp;</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px; letter-spacing: normal;\">punya ciri warna putih dan memiliki rim berwarna biru. cupang bluerim memiliki 2 bentuk yaitu bluerim bicolor yaitu bluerim yang pada ekornya full berwarna biru, dan cupang bluerim butterfly yaitu bluerim yang memiliki warna biru pada setengah ekornya.</span><br></p>', 'br.png-1624974591.png', '2021-06-29 13:49:51', '2021-06-29 13:49:51'),
(10, 'Multi Color', '<p>Cupang jenis ini bisa disebut cupang muticolor ketika memiliki minimal 3 warna di sisiknya atau lebih. Jika kurang dari 3 warna cupang jenis ini belum bisa di kategorikan sebagai cupang multicolor.</p>', 'multi.png-1624989606.png', '2021-06-29 18:00:06', '2021-06-29 18:00:06'),
(11, 'Marble', '<p>Cupang ini bisa di katakan marble jika di tubuhnya/sisiknya terdapat dot-dot. Dot-dot tersebut bisa berwarna biru, merah kuning, tergantung dari genetik ikan tersebut.</p>', 'marbel.png-1624990125.png', '2021-06-29 18:08:45', '2021-06-29 18:08:45'),
(12, 'Fancy', '<p>Cupang ini bisa dikatakan fancy jika memiliki sisik yang berwarna putih mengkapur. Fancy merupakan jenis dasar dari cupang. Pengembangan dari cupang fancy bisa menjadi cupang lain seperti multicolor, bluerim, dll.</p>', 'FANCY.png-1624990232.png', '2021-06-29 18:10:32', '2021-06-29 18:10:32'),
(13, 'Crown Tail', '<p>Cupang crown tail memiliki ciri fisik yang mudah di ketahui yaitu memiliki ekor yang seperti duri. Cupang ini juga bisa disebut sebagai supang serit.</p>', 'ct.png-1624990537.png', '2021-06-29 18:15:37', '2021-06-29 18:15:37'),
(14, 'Big Ear', '<p>Cupang big ear memiliki ciri fisik yaitu memiliki sirip yang panjang. Cupang big ear memiliki warna yang bervariasi, mulai dari kuning, biru, putih, hitam, dll.</p>', 'be.png-1624990619.png', '2021-06-29 18:16:59', '2021-06-29 18:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pemenang` varchar(255) DEFAULT NULL,
  `telp_pemenang` varchar(20) DEFAULT NULL,
  `nominal` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `judul`, `pemenang`, `telp_pemenang`, `nominal`, `user_id`, `created_at`, `updated_at`) VALUES
(57, 'Iron-Man/Red Koi Copper', 'Fikz Betta', '8882866647', '150000', 12, '2021-08-06 02:43:00', '2021-08-06 02:43:00'),
(58, '1 Male Yellow Koi Copper Ori Thailand', 'Fikz Betta', '8882866647', '300000', 12, '2021-08-06 04:17:28', '2021-08-06 04:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pelelang` varchar(255) DEFAULT NULL,
  `telp_pelelang` varchar(20) DEFAULT NULL,
  `nominal` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bid_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `judul`, `pelelang`, `telp_pelelang`, `nominal`, `user_id`, `bid_id`, `created_at`, `updated_at`) VALUES
(133, 'Iron-Man/Red Koi Copper', 'Dzulfikri', '87700155523', '150000', 11, NULL, '2021-08-06 02:43:00', '2021-08-06 02:43:00'),
(134, '1 Male Yellow Koi Copper Ori Thailand', 'Dzulfikri', '87700155523', '300000', 11, NULL, '2021-08-06 04:17:28', '2021-08-06 04:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `lelangan`
--

CREATE TABLE `lelangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_close` date DEFAULT NULL,
  `jam_close` time DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lelangan`
--

INSERT INTO `lelangan` (`id`, `judul`, `deskripsi`, `gambar`, `tgl_close`, `jam_close`, `is_active`, `user_id`, `created_at`, `updated_at`) VALUES
(40, 'Cupang Iron Man/Red Koi Copper', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '172591692_317467159720772_5212135658654542352_n.jpg-1626079369.jpeg', '2021-07-12', '18:30:00', 1, 11, '2021-07-12 08:42:49', '2021-08-04 05:46:31'),
(41, '1 Male Yellow Koi Copper Ori Thailand', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '175549532_3738696689561107_2423132243053935651_n.jpg-1626079438.jpeg', '2021-07-12', '22:35:00', 1, 11, '2021-07-12 08:43:58', '2021-08-04 05:51:22'),
(42, '1 Male Avatar Gordon', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '178437459_324208012380020_6051076248213104465_n.jpg-1626079493.jpeg', '2021-07-12', '22:30:00', 1, 13, '2021-07-12 08:44:53', '2021-08-04 09:45:45'),
(43, 'Iron-Man/Red Koi Copper', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '173901156_3724907980939978_1168175686765291262_n.jpg-1626079566.jpeg', '2021-07-12', '21:30:00', 0, 12, '2021-07-12 08:46:06', '2021-08-06 02:42:51'),
(44, '1 Male Yellow Koi Copper Ori Thailand', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '178384422_3755812967849479_1706937243207385707_n.jpg-1626093081.jpeg', '2021-07-12', '21:30:00', 0, 12, '2021-07-12 12:31:21', '2021-08-06 04:17:10'),
(45, '1 Male Iron Man Ori Thailand', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '172591692_317467159720772_5212135658654542352_n.jpg-1626093745.jpeg', '2021-07-12', '22:41:00', 1, 12, '2021-07-12 12:42:25', '2021-08-04 09:07:47'),
(47, 'Cupang Iron Man/Red Koi Copper', '<p>📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</p><p><br></p><p>🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p><br></p><p>Size : S++</p><p><br></p><p>Age : 4 Bulan</p><p><br></p><p>Form &amp; warna bisa di cek di video/foto</p><p><br></p><p>👉OB : 30k ( Biar kumpul )</p><p><br></p><p>👉NB : 10k sesuai kelipatan&nbsp;</p><p><br></p><p>👉BN : 500k</p><p><br></p><p>✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p><br></p><p>✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p><br></p><p>✓ Format bebas (contoh : 1jt/Pati)</p><p><br></p><p>▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p><br></p><p>▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p><br></p><p>▶️Ongkir + Packing 10k di tanggung pemenang</p><p><br></p><p>▶️COD maksimal 2 km</p><p><br></p><p>📱WA: 08882866647</p><p><br></p><p>🌏Seller: Pati, Jawa Tengah</p><p><br></p><p>🏦 BNI/DANA/Rekber Shopee</p><p><br></p><p>Happy bid 🎉🎉🎉🎉</p>', '177388042_322980719169416_4385503402821617437_n.jpg-1626110865.jpeg', '2021-07-13', '02:27:00', 1, 19, '2021-07-12 17:27:45', '2021-07-12 17:30:37'),
(48, '1 Male Red Koi Copper', '<p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\"><span style=\"letter-spacing: 0.7px;\">📌( Khusus pulau Jawa , Bali , Lombok, Lampung, Palembang )</span><br></p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🐠1 Male Cupang Iron Man/Red Koi Copper🔥</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Size : S++</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Age : 4 Bulan</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Form &amp; warna bisa di cek di video/foto</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉OB : 30k ( Biar kumpul )</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉NB : 10k sesuai kelipatan&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">👉BN : 500k</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ CLOSE : Pukul 20.15 wib (Sesuai waktu hp saya)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ TANGGAL :&nbsp; 12 Juni 2021&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">✓ Format bebas (contoh : 1jt/Pati)</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Setting video ke 720p (untuk mendapatkan kualitas video terbaik)&nbsp;</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Sniper tidak sah setelah pelelang mencantumkan kata CLOSE</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️Ongkir + Packing 10k di tanggung pemenang</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">▶️COD maksimal 2 km</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">📱WA: 08882866647</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🌏Seller: Pati, Jawa Tengah</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">🏦 BNI/DANA/Rekber Shopee</p><p style=\"color: rgb(42, 47, 91); letter-spacing: 0.7px;\">Happy bid 🎉🎉🎉🎉</p>', '173901156_3724907980939978_1168175686765291262_n.jpg-1628048392.jpeg', '2021-08-04', '20:30:00', 1, 12, '2021-08-04 03:39:52', '2021-08-04 08:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `terlapor` varchar(255) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `user_id`, `terlapor`, `alasan`, `created_at`, `updated_at`) VALUES
(5, '12', 'ilham perdana', '<p>sudah melakukan bid n run</p>', '2021-07-28 03:33:04', '2021-07-28 03:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `alamat`, `kota`, `telp`, `gambar`, `link_fb`, `link_ig`, `role`, `is_active`, `token`, `created_at`, `updated_at`) VALUES
(9, 'Admin Cupang', 'admin@gmail.com', '$2y$10$4teYErhTPorgdH72mhMKbu3cpHFT17G.wqwVysmUkwrlIJ3ZMhkxK', 'Trangkil rt 07 rw07', 'Pati', '2147483647', NULL, NULL, NULL, 'admin', 1, NULL, '2021-06-11 11:14:46', '2021-06-11 11:15:50'),
(11, 'Fikz Betta', 'dzulfikri984@gmail.com', '$2y$10$KEnBbUx7geZoruSGByINJ.FN9QKA.EMcIz5mb.G7glES3XdUo2ffa', 'Trangkil rt 07 rw07', 'Pati', '8882866647', 'cupang-marble-1024x1003.jpg-1626064725.jpeg', NULL, NULL, 'user', 1, NULL, '2021-07-12 04:37:50', '2021-07-12 04:38:45'),
(12, 'Dzulfikri', 'dzulfikri@gmail.com', '$2y$10$ViV4E9sPx3JNgfdJ//79zuaU3vqBEFHzMEYyRoARN4OcBqR2WO1Ky', 'Trangkil, Pati', 'Pati', '87700155523', NULL, NULL, NULL, 'user', 1, NULL, '2021-07-12 04:42:59', '2021-07-13 16:22:56'),
(13, 'Ilham Perdana', 'ilham@gmail.com', '$2y$10$Nleg7vb5u6O.e.k9Mhe33uAMnSQUycxsKxAWYtG1hWjmO9APthpy6', 'Bae, Kudus', 'Kudus', '83116360650', NULL, NULL, NULL, 'user', 1, NULL, '2021-07-12 04:46:24', '2021-07-12 04:47:57'),
(19, 'ahmad', 'ahmad@gmail.com', '$2y$10$SWikzO59KlSVxDuwEf/.cuFoNafIhj07yOHUBC7PmjgR3.2uiXV/e', 'Jepara', 'Jepara', '08882866647', NULL, NULL, NULL, 'user', 1, NULL, '2021-07-12 17:24:27', '2021-07-12 17:25:12'),
(20, 'Agus', 'agus@gmail.com', '$2y$10$wsDOcP5z5tImdRfNJg7YBOqT6GhDlXrnByCgDrLlyHn7MDhop593W', 'Jepara', 'Jepara', '08882866647', NULL, NULL, NULL, 'user', 1, NULL, '2021-07-16 05:52:44', '2021-07-18 23:12:22'),
(21, 'dalhar suyuthi', 'dalhar@gmail.com', '$2y$10$vFvmC6Pqmda6cRpzlGRKEOiBdazLGp9bFjg3Hr0xdF05Zq7ROfePu', '', '', '', NULL, NULL, NULL, 'user', 1, NULL, '2021-07-24 03:46:38', '2021-07-24 04:46:23'),
(66, 'Adrik', 'adrik@gmail.com', '$2y$10$h/Q0KDlPCL3T6bqRFq25jeF9rA3kRl1xC40d5IXhF2Q6VGKs4tZDW', 'Jepara', 'Jepara', '87700155523', NULL, NULL, NULL, 'user', 1, 'gyRN62WihYqJJvL', '2021-08-06 06:44:33', '2021-08-06 07:18:55'),
(69, 'najiha betta', 'najihabetta@gmail.com', '$2y$10$8pmizvtixdCLcO84lS/KmeC6jontCPgaupH/KxoU2HFQsvBplxzCq', 'Ds. Sambilawang, Trangkil, Pati', 'Pati', '8882866647', NULL, NULL, NULL, 'user', 1, 'yCELbTbwx2YoJKf', '2021-08-06 09:31:25', '2021-08-06 09:32:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lelangan`
--
ALTER TABLE `lelangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `lelangan`
--
ALTER TABLE `lelangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
