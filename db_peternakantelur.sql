-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2022 pada 10.29
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peternakantelur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` varchar(3) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
('L01', 'SUPER ADMIN'),
('L02', 'OWNER'),
('L03', 'Karyawan Peternak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` varchar(4) NOT NULL,
  `nama_restoran` varchar(100) NOT NULL,
  `tentang` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `g_maps` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_restoran`, `tentang`, `no_telp`, `email`, `alamat`, `g_maps`, `logo`) VALUES
('PF01', 'PT. Peternakan Telur Sejahtera', '<p>Perusahaan&nbsp;Ini terbentuk sudah sejak lama Semenjak 1992, Perusahaan ini mempunyai produksi telur ayam yang sangat besar pada setiap harinya.</p>\r\n', '+6285773024435', 'selmipoters12@gmail.com', 'Kp. Jatimulya Jembatan 1 Kalimalang, RT 07/06 No.133, Tambun Selatan, Bekasi Timur', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.86930851829644!2d106.992133!3d-6.275703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ff931d7b67a2d9b!2sDealer+Isuzu+Bekasi!5e0!3m2!1sen!2sus!4v1551591741481', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_telur`
--

CREATE TABLE `p_telur` (
  `kd_telur` varchar(6) NOT NULL,
  `kualitas_telur` varchar(50) NOT NULL,
  `berat_telur` varchar(5) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `warna_chart` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `p_telur`
--

INSERT INTO `p_telur` (`kd_telur`, `kualitas_telur`, `berat_telur`, `tanggal_masuk`, `warna_chart`) VALUES
('TL0001', 'Kualitas Telur Baik', '12', '2020-06-28', '#00c0ef'),
('TL0002', 'Kualitas Telur Baik', '43', '2020-06-27', '#00c0ef'),
('TL0003', 'Kualitas Telur Baik', '14', '2020-06-26', '#00c0ef'),
('TL0004', 'Kualitas Telur Busuk', '13', '2020-06-28', '#f2e713');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `pesan_id` varchar(5) NOT NULL,
  `pesan_nama` varchar(64) NOT NULL,
  `pesan_email` varchar(50) NOT NULL,
  `pesan_nophone` varchar(30) NOT NULL,
  `pesan_isi` text NOT NULL,
  `pesan_tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`pesan_id`, `pesan_nama`, `pesan_email`, `pesan_nophone`, `pesan_isi`, `pesan_tanggal`, `status_pesan`) VALUES
('P0001', 'Selmi', 'selmiselmimi@gmail.com', '085773024435', 'Selamat Siang, sangat berguna sekali websitenya, semoga tetap dikembangkan supaya bisa lebih berguna untuk para pemilik peternakan telur ayam khususnya\r\n\r\nTerima Kasih', '2020-05-14 05:05:51', 'publish'),
('P0002', 'Bagas Dwi Rany S', 'bagas@gmail.com', '0857889211222', 'Hallo Bro, MAntapss', '2020-05-14 05:17:08', 'archive'),
('P0003', 'Selmi', 'selmiselmimi@gmail.com', '085773024435', 'Semangat Sktipsinya boyyy', '2020-06-04 19:50:02', 'publish'),
('P0004', 'selmi', 'selmiselmimi@gmail.com', '085773024435', 'asadasdadadsa', '2020-06-30 02:38:14', 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL,
  `ig` text NOT NULL,
  `id_level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `foto`, `fb`, `twitter`, `ig`, `id_level`) VALUES
('PT00', 'selmi', '7f39addd0285c813755caa0c52d1f18dc94bb97e', 'Selmi', 'Pas Photo.jpeg', 'https://www.facebook.com/selmi.ajjah?ref=br_rs', '#', 'https://www.instagram.com/selmi.mi/', 'L01'),
('PT01', 'selmimi', '75a885b0045b02123aa30cb6db661e0373ee24db', 'Selmi Owner Peternakan', 'dfa97a9ce366ca2cff98f3ba6c6723aa.jpg', '#', '#', '#', 'L02'),
('PT02', 'bagas', 'cd19030730b5774fc3bd4c5bc9a956b34702d6f3', 'bagasdrs', 'a6a6d5675f92487e1f6e6e68c368a981.png', '#', '#', '#', 'L02'),
('PT03', 'rifat', 'febb8ca6a18b7896e445f1a753a05bb2074d9629', 'Muhammad Rifat Agusni', '2702c430800fea6357addf92fd02ee8b.jpg', '#', '#', '#', 'L03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_history`
--

CREATE TABLE `user_history` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_history`
--

INSERT INTO `user_history` (`id`, `username`, `tanggal`) VALUES
(1, 'selmi', '2020-02-21 16:31:38'),
(2, 'selmi', '2020-02-21 17:59:41'),
(3, 'selmi', '2020-02-21 18:16:49'),
(4, 'selmimi', '2020-02-21 18:20:57'),
(5, 'selmi', '2020-02-21 18:21:59'),
(6, 'selmi', '2020-02-22 03:59:35'),
(7, 'selmi', '2020-02-22 07:54:33'),
(8, 'selmi', '2020-02-27 16:45:17'),
(9, 'selmi', '2020-02-28 03:37:01'),
(10, 'selmi', '2020-02-28 03:47:11'),
(11, 'selmi', '2020-02-28 04:21:16'),
(12, 'selmi', '2020-02-28 07:08:09'),
(13, 'selmi', '2020-02-28 07:10:19'),
(14, 'selmi', '2020-03-01 06:31:02'),
(15, 'selmi', '2020-03-01 09:29:39'),
(16, 'selmi', '2020-03-03 06:11:41'),
(17, 'selmi', '2020-03-03 13:41:51'),
(18, 'selmi', '2020-03-07 06:58:10'),
(19, 'selmi', '2020-03-12 01:18:11'),
(20, 'selmi', '2020-03-13 02:39:25'),
(21, 'selmi', '2020-03-13 07:17:59'),
(22, 'selmi', '2020-03-14 04:37:16'),
(23, 'selmi', '2020-03-14 04:37:19'),
(24, 'selmi', '2020-03-15 09:58:51'),
(25, 'selmi', '2020-03-15 10:16:43'),
(26, 'selmi', '2020-03-16 03:49:17'),
(27, 'selmi', '2020-03-18 10:29:08'),
(28, 'selmi', '2020-03-21 04:26:24'),
(29, 'selmi', '2020-04-13 05:03:38'),
(30, 'selmi', '2020-04-16 14:26:44'),
(31, 'selmi', '2020-04-19 02:27:25'),
(32, 'selmi', '2020-04-19 03:50:52'),
(33, 'selmi', '2020-05-05 19:34:20'),
(34, 'selmi', '2020-05-10 07:52:27'),
(35, 'selmi', '2020-05-10 14:35:33'),
(36, 'selmi', '2020-05-12 03:49:04'),
(37, 'selmi', '2020-05-13 04:08:46'),
(38, 'selmi', '2020-05-13 05:53:59'),
(39, 'selmi', '2020-05-13 12:25:45'),
(40, 'selmi', '2020-05-13 14:20:35'),
(41, 'selmi', '2020-05-13 14:21:10'),
(42, 'selmi', '2020-05-13 14:28:06'),
(43, 'selmi', '2020-05-13 18:29:34'),
(44, 'selmi', '2020-05-13 19:56:20'),
(45, 'bagas', '2020-05-13 19:56:43'),
(46, 'selmi', '2020-05-13 20:26:26'),
(47, 'selmi', '2020-05-13 20:29:11'),
(48, 'selmi', '2020-05-13 20:29:26'),
(49, 'selmi', '2020-05-14 04:56:28'),
(50, 'selmi', '2020-05-14 04:56:41'),
(51, 'selmi', '2020-05-14 10:02:03'),
(52, 'selmi', '2020-05-14 12:04:45'),
(53, 'selmi', '2020-05-14 12:31:12'),
(54, 'selmi', '2020-05-16 16:44:56'),
(55, 'selmi', '2020-05-18 12:59:58'),
(56, 'selmi', '2020-05-18 13:02:24'),
(57, 'selmi', '2020-05-22 07:59:16'),
(58, 'selmi', '2020-05-22 08:50:47'),
(59, 'selmi', '2020-05-22 08:50:54'),
(60, 'bagas', '2020-05-22 08:51:12'),
(61, 'selmi', '2020-05-22 11:49:15'),
(62, 'selmi', '2020-05-22 11:49:33'),
(63, 'selmi', '2020-05-22 11:58:38'),
(64, 'selmi', '2020-05-23 05:08:50'),
(65, 'selmi', '2020-05-23 05:09:48'),
(66, 'selmi', '2020-05-23 05:13:21'),
(67, 'selmi', '2020-05-23 08:15:14'),
(68, 'selmi', '2020-05-24 16:38:33'),
(69, 'selmi', '2020-06-01 16:52:12'),
(70, 'selmi', '2020-06-04 19:50:19'),
(71, 'selmi', '2020-06-05 07:46:29'),
(72, 'selmi', '2020-06-06 05:53:12'),
(73, 'selmi', '2020-06-07 01:49:27'),
(74, 'selmi', '2020-06-13 06:12:11'),
(75, 'bagas', '2020-06-13 06:12:53'),
(76, 'selmi', '2020-06-13 07:25:53'),
(77, 'bagas', '2020-06-13 07:29:58'),
(78, 'selmi', '2020-06-13 08:34:27'),
(79, 'selmimi', '2020-06-13 08:35:03'),
(80, 'selmi', '2020-06-18 00:37:46'),
(81, 'selmi', '2020-06-18 00:48:27'),
(82, 'selmi', '2020-06-28 04:11:39'),
(83, 'selmi', '2020-06-28 05:13:22'),
(84, 'selmi', '2020-06-28 08:06:16'),
(85, 'selmi', '2020-06-28 08:27:44'),
(86, 'selmi', '2020-06-28 12:05:33'),
(87, 'selmi', '2020-06-29 02:28:32'),
(88, 'selmi', '2020-06-30 07:59:34'),
(89, 'selmi', '2020-07-20 07:54:55'),
(90, 'selmi', '2020-07-21 06:57:40'),
(91, 'selmi', '2020-08-03 00:23:05'),
(92, 'selmi', '2020-08-05 10:14:36'),
(93, 'selmi', '2020-08-10 03:05:57'),
(94, 'selmi', '2020-08-10 12:07:56'),
(95, 'rifat', '2020-08-10 12:34:58'),
(96, 'bagas', '2020-08-10 12:35:22'),
(97, 'selmi', '2020-08-10 12:38:49'),
(98, 'selmi', '2020-08-10 12:49:04'),
(99, 'selmi', '2020-08-10 15:10:38'),
(100, 'selmi', '2020-09-18 13:40:46'),
(101, 'selmi', '2020-09-18 14:08:11'),
(102, 'selmi', '2020-12-03 15:38:08'),
(103, 'selmi', '2020-12-03 15:51:01'),
(104, 'selmi', '2020-12-04 02:09:56'),
(105, 'selmi', '2021-11-05 13:13:08'),
(106, 'selmi', '2021-11-19 12:11:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `p_telur`
--
ALTER TABLE `p_telur`
  ADD PRIMARY KEY (`kd_telur`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_history`
--
ALTER TABLE `user_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
