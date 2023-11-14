-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 11.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_umuka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritaterkini`
--

CREATE TABLE `beritaterkini` (
  `id_berita` bigint(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `seen` int(11) DEFAULT NULL,
  `tags` varchar(150) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `roles_departemen_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `beritaterkini`
--

INSERT INTO `beritaterkini` (`id_berita`, `judul`, `category_id`, `content`, `gambar`, `tanggal`, `seen`, `tags`, `slug`, `user_id`, `roles_departemen_id`, `created_at`, `updated_at`) VALUES
(1, 'Post Blog', NULL, '&lt;ul&gt;\r\n	&lt;li&gt;ckjadbfadshvej dklfvnworuvh dfklvsoidvusgh dshfystdfucsjb ckncsidyvifilvms jbdufviklgbohjoitngkj vsm caghdicosbl cndm cslkhusvg cdjksnlsoidsv jdnms, lfsb s cbduyvsujbnslkdncjksbdcsjkvnkksfoiueytvwgehd am,cniusd hcs&lt;/li&gt;\r\n&lt;/ul&gt;', '20230218103520.png', '2023-02-18', NULL, NULL, 'Blogpost-With-Image', '1', 1, '2023-02-18 10:35:20', '2023-10-29 15:54:24'),
(2, 'Peluang beranda', NULL, '&lt;p&gt;ertyuioiuygfdghjkuy gjhkiouygf vbnmkiuytgfvbnmk iouygvbnmiuytfgvbnmjkiuytfgvbnm kiuytretyuiouytret yuijhgcvbnmnbvc hjkhjgfdghuiytretyuioiu ghfcxvbnmnbvcbhjkhgfdsfgyuiouytre tyuijhgfcvbnm,nbvchg jkhgfduioiuytretyuijkhgf hjkljhgfdg&lt;/p&gt;', '20230219092106.jpg', '2023-02-19', NULL, NULL, 'Peluang-beranda', '1', 2, '2023-02-19 02:21:06', '2023-06-05 00:13:58'),
(3, 'Jadwal Final Liga Champions 2022/2023: Manchester City vs Inter Milan', 1, '&lt;p&gt;&lt;strong&gt;Bola.net -&amp;nbsp;&lt;/strong&gt;Jadwal pertandingan final&amp;nbsp;&lt;a href=&quot;https://www.bola.net/tag/liga-champions/&quot;&gt;Liga Champions&lt;/a&gt;&amp;nbsp;2022/2023&amp;nbsp;&lt;a href=&quot;https://www.bola.net/tag/manchester-city/&quot;&gt;Manchester City&lt;/a&gt;&amp;nbsp;vs&amp;nbsp;&lt;a href=&quot;https://www.bola.net/tag/inter-milan/&quot;&gt;Inter Milan&lt;/a&gt;. Laga puncak UCL musim ini bakal dihelat pada Minggu, 11 Juni 2023 dini hari WIB mendatang.&lt;/p&gt;\r\n\r\n&lt;p&gt;Manchester City berhak melaju ke partai final kedua mereka dalam tiga musim terakhir usai sukses membungkam Real Madrid dengan skor agregat 5-1 di babak semifinal.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sementara itu, Inter Milan juga tak menemui rintangan berarti di semifinal.&amp;nbsp;&lt;em&gt;Nerazzurri&lt;/em&gt;&amp;nbsp;sukses menyingkirkan sang tetangga, AC Milan dengan kemenangan agregat 3-0.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;Simak rekap hasil semifinal dan jadwal final Liga Champions musim 2022/2023 selengkapnya di bawah ini.&lt;/em&gt;&lt;/p&gt;', '20230605082752.jpg', '2023-06-05', NULL, 'umuka,karanganyar', 'jadwal-final-liga-champions-20222023-manchester-city-vs-inter-milan', '1', 3, '2023-06-05 01:27:53', '2023-06-05 01:29:49'),
(4, 'New News', 1, '&lt;p&gt;new post&lt;/p&gt;', '20231029225154.png', '2023-10-29', NULL, 'news,umuka', 'new-news', '1', NULL, '2023-10-29 15:51:54', NULL),
(5, 'New News', 1, '&lt;p&gt;new post&lt;/p&gt;', '20231029225240.png', '2023-10-29', NULL, 'news,umuka', 'new-news', '1', NULL, '2023-10-29 15:52:40', NULL),
(6, 'Pengumuman1', 2, '&lt;p&gt;pengumuman isi&lt;/p&gt;', '20231030170646.png', '2023-10-30', NULL, 'pengumuman', 'pengumuman1', NULL, NULL, '2023-10-30 10:06:46', NULL),
(7, 'PENGUMUMAN2', 2, '&lt;p&gt;CKKKDJAWJDKWJDKWD&lt;/p&gt;', '20231030171634.png', '2023-10-30', NULL, 'pengumuman', 'pengumuman2', NULL, NULL, '2023-10-30 10:16:34', NULL),
(8, 'seminar', 2, '&lt;p&gt;goda&lt;/p&gt;', '20231030174313.png', '2023-10-30', NULL, 'good', 'seminar', NULL, NULL, '2023-10-30 10:43:13', NULL),
(9, 'Berita new', 1, '&lt;p&gt;Inilah berita&lt;/p&gt;', '20231109094430.png', '2023-11-09', NULL, 'berita,new,pengumuman', 'berita-new', '1', NULL, '2023-11-09 02:44:30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Berita Terkini', 'berita', '2023-01-12 20:34:13', '2023-01-12 20:34:13'),
(2, 'Event', 'event', '2023-06-03 16:03:01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departement_roles`
--

CREATE TABLE `departement_roles` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(35) DEFAULT NULL,
  `url_departemen` varchar(50) DEFAULT NULL,
  `kode_url` varchar(10) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `departement_roles`
--

INSERT INTO `departement_roles` (`id_departemen`, `nama_departemen`, `url_departemen`, `kode_url`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'S1 Teknik Komputer', 'teknik-computer', 'STK', NULL, '2023-06-03 04:05:38', '2023-06-03 04:05:38'),
(2, 'S1 Informatika', 'informatika', 'SIf', NULL, '2023-06-03 04:05:43', '2023-06-03 04:05:43'),
(3, 'S1 Bisnis Digital', 'bisnis-digital', 'SBD', NULL, '2023-06-03 04:05:46', '2023-06-03 04:05:46'),
(4, 'S1 Akuntansi', 'akuntansi', 'SAk', NULL, '2023-06-03 04:05:50', '2023-06-03 04:05:50'),
(5, 'S1 ILmu Komunikasi', 'ilmu-komunikasi', 'SIK', NULL, '2023-06-03 04:05:54', '2023-06-03 04:05:54'),
(6, 'S1 Fisioterapi', 'fisioterapi', 'SFs', NULL, '2023-06-03 04:05:57', '2023-06-03 04:05:57'),
(7, 'D3 Produksi Ternak', 'diploma-produksi-ternak', 'DPT', NULL, '2023-06-03 04:06:00', '2023-06-03 04:06:00'),
(8, 'D3 Perhotelan', 'diploma-perhotelan', 'DPh', NULL, '2023-06-03 04:06:10', '2023-06-03 04:06:10'),
(9, 'D3 Sekretari', 'diploma-sekretari', 'DSkr', NULL, '2023-06-03 04:06:14', '2023-06-03 04:06:14'),
(10, 'D3 Bina Wisata', 'diploma-bina-wisata', 'DBW', NULL, '2023-06-03 04:06:22', '2023-06-03 04:06:22'),
(11, 'root', NULL, 'DEWA', NULL, '2023-06-03 07:25:55', '2023-06-03 07:25:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_image` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_image`, `gambar`, `created_at`, `updated_at`) VALUES
(3, '20231109201029.png', '2023-11-09 13:10:29', NULL),
(4, '20231109201342.png', '2023-11-09 13:13:42', NULL),
(5, '20231109202027.png', '2023-11-09 13:20:28', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` bigint(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `seen` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `content`, `gambar`, `tanggal`, `seen`, `created_at`, `updated_at`) VALUES
(6, 'ggg', '&lt;p&gt;ggg&lt;/p&gt;', '20231030181843.png', '2023-10-30', NULL, '2023-10-30 11:18:44', NULL),
(7, 'Pengumuman 1', '&lt;p&gt;Ini Pengumuman&lt;/p&gt;', '20231108214648.png', '2023-11-08', NULL, '2023-11-08 14:46:48', NULL),
(8, 'Pengumuman new', '&lt;p&gt;Ini Pengumuman&lt;/p&gt;', '20231108224703.png', '2023-11-08', NULL, '2023-11-08 15:47:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_seen`
--

CREATE TABLE `post_seen` (
  `id_seen` int(11) NOT NULL,
  `post_category` varchar(50) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `seen` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `roles` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `roles`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'Super Admin', '2022-12-18 14:03:24', '2022-06-09 12:48:49'),
(2, 'Admin', 'Admin', '2022-12-18 14:03:28', '2022-06-09 12:48:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `departemen_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `contact`, `role_id`, `departemen_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'root', '$2y$10$8YdVY1JUBYUm2YHXcG3dXOm523QL7SObtv7a4l3xv9b', 'Super Admin', NULL, NULL, 1, 11, 1, '2022-12-18 14:15:27', '2022-12-18 14:15:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritaterkini`
--
ALTER TABLE `beritaterkini`
  ADD PRIMARY KEY (`id_berita`) USING BTREE;

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `departement_roles`
--
ALTER TABLE `departement_roles`
  ADD PRIMARY KEY (`id_departemen`) USING BTREE;

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_image`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `post_seen`
--
ALTER TABLE `post_seen`
  ADD PRIMARY KEY (`id_seen`) USING BTREE;

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritaterkini`
--
ALTER TABLE `beritaterkini`
  MODIFY `id_berita` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `departement_roles`
--
ALTER TABLE `departement_roles`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_image` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `post_seen`
--
ALTER TABLE `post_seen`
  MODIFY `id_seen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
