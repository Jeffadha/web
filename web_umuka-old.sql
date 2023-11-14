/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : web_umuka

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 11/10/2023 13:53:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for beritaterkini
-- ----------------------------
DROP TABLE IF EXISTS `beritaterkini`;
CREATE TABLE `beritaterkini`  (
  `id_berita` bigint NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `category_id` int NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tanggal` date NULL DEFAULT NULL,
  `seen` int NULL DEFAULT NULL,
  `tags` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `roles_departemen_id` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of beritaterkini
-- ----------------------------
INSERT INTO `beritaterkini` VALUES (1, 'Blogpost With Image', NULL, '&lt;ul&gt;\r\n	&lt;li&gt;ckjadbfadshvej dklfvnworuvh dfklvsoidvusgh dshfystdfucsjb ckncsidyvifilvms jbdufviklgbohjoitngkj vsm caghdicosbl cndm cslkhusvg cdjksnlsoidsv jdnms, lfsb s cbduyvsujbnslkdncjksbdcsjkvnkksfoiueytvwgehd am,cniusd hcs&lt;/li&gt;\r\n&lt;/ul&gt;', '20230218103520.png', '2023-02-18', NULL, NULL, 'Blogpost-With-Image', '1', 1, '2023-02-18 17:35:20', '2023-06-05 07:13:12');
INSERT INTO `beritaterkini` VALUES (2, 'Peluang beranda', NULL, '&lt;p&gt;ertyuioiuygfdghjkuy gjhkiouygf vbnmkiuytgfvbnmk iouygvbnmiuytfgvbnmjkiuytfgvbnm kiuytretyuiouytret yuijhgcvbnmnbvc hjkhjgfdghuiytretyuioiu ghfcxvbnmnbvcbhjkhgfdsfgyuiouytre tyuijhgfcvbnm,nbvchg jkhgfduioiuytretyuijkhgf hjkljhgfdg&lt;/p&gt;', '20230219092106.jpg', '2023-02-19', NULL, NULL, 'Peluang-beranda', '1', 2, '2023-02-19 09:21:06', '2023-06-05 07:13:58');
INSERT INTO `beritaterkini` VALUES (3, 'Jadwal Final Liga Champions 2022/2023: Manchester City vs Inter Milan', 1, '&lt;p&gt;&lt;strong&gt;Bola.net -&amp;nbsp;&lt;/strong&gt;Jadwal pertandingan final&amp;nbsp;&lt;a href=&quot;https://www.bola.net/tag/liga-champions/&quot;&gt;Liga Champions&lt;/a&gt;&amp;nbsp;2022/2023&amp;nbsp;&lt;a href=&quot;https://www.bola.net/tag/manchester-city/&quot;&gt;Manchester City&lt;/a&gt;&amp;nbsp;vs&amp;nbsp;&lt;a href=&quot;https://www.bola.net/tag/inter-milan/&quot;&gt;Inter Milan&lt;/a&gt;. Laga puncak UCL musim ini bakal dihelat pada Minggu, 11 Juni 2023 dini hari WIB mendatang.&lt;/p&gt;\r\n\r\n&lt;p&gt;Manchester City berhak melaju ke partai final kedua mereka dalam tiga musim terakhir usai sukses membungkam Real Madrid dengan skor agregat 5-1 di babak semifinal.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sementara itu, Inter Milan juga tak menemui rintangan berarti di semifinal.&amp;nbsp;&lt;em&gt;Nerazzurri&lt;/em&gt;&amp;nbsp;sukses menyingkirkan sang tetangga, AC Milan dengan kemenangan agregat 3-0.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;Simak rekap hasil semifinal dan jadwal final Liga Champions musim 2022/2023 selengkapnya di bawah ini.&lt;/em&gt;&lt;/p&gt;', '20230605082752.jpg', '2023-06-05', NULL, 'umuka,karanganyar', 'jadwal-final-liga-champions-20222023-manchester-city-vs-inter-milan', '1', 3, '2023-06-05 08:27:53', '2023-06-05 08:29:49');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Berita Terkini', 'berita', '2023-01-13 03:34:13', '2023-01-13 03:34:13');
INSERT INTO `category` VALUES (2, 'Event', 'event', '2023-06-03 23:03:01', NULL);

-- ----------------------------
-- Table structure for departement_roles
-- ----------------------------
DROP TABLE IF EXISTS `departement_roles`;
CREATE TABLE `departement_roles`  (
  `id_departemen` int NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `url_departemen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_url` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_departemen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departement_roles
-- ----------------------------
INSERT INTO `departement_roles` VALUES (1, 'S1 Teknik Komputer', 'teknik-computer', 'STK', NULL, '2023-06-03 11:05:38', '2023-06-03 11:05:38');
INSERT INTO `departement_roles` VALUES (2, 'S1 Informatika', 'informatika', 'SIf', NULL, '2023-06-03 11:05:43', '2023-06-03 11:05:43');
INSERT INTO `departement_roles` VALUES (3, 'S1 Bisnis Digital', 'bisnis-digital', 'SBD', NULL, '2023-06-03 11:05:46', '2023-06-03 11:05:46');
INSERT INTO `departement_roles` VALUES (4, 'S1 Akuntansi', 'akuntansi', 'SAk', NULL, '2023-06-03 11:05:50', '2023-06-03 11:05:50');
INSERT INTO `departement_roles` VALUES (5, 'S1 ILmu Komunikasi', 'ilmu-komunikasi', 'SIK', NULL, '2023-06-03 11:05:54', '2023-06-03 11:05:54');
INSERT INTO `departement_roles` VALUES (6, 'S1 Fisioterapi', 'fisioterapi', 'SFs', NULL, '2023-06-03 11:05:57', '2023-06-03 11:05:57');
INSERT INTO `departement_roles` VALUES (7, 'D3 Produksi Ternak', 'diploma-produksi-ternak', 'DPT', NULL, '2023-06-03 11:06:00', '2023-06-03 11:06:00');
INSERT INTO `departement_roles` VALUES (8, 'D3 Perhotelan', 'diploma-perhotelan', 'DPh', NULL, '2023-06-03 11:06:10', '2023-06-03 11:06:10');
INSERT INTO `departement_roles` VALUES (9, 'D3 Sekretari', 'diploma-sekretari', 'DSkr', NULL, '2023-06-03 11:06:14', '2023-06-03 11:06:14');
INSERT INTO `departement_roles` VALUES (10, 'D3 Bina Wisata', 'diploma-bina-wisata', 'DBW', NULL, '2023-06-03 11:06:22', '2023-06-03 11:06:22');
INSERT INTO `departement_roles` VALUES (11, 'root', NULL, 'DEWA', NULL, '2023-06-03 14:25:55', '2023-06-03 14:25:55');

-- ----------------------------
-- Table structure for post_seen
-- ----------------------------
DROP TABLE IF EXISTS `post_seen`;
CREATE TABLE `post_seen`  (
  `id_seen` int NOT NULL AUTO_INCREMENT,
  `post_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `post_id` int NULL DEFAULT NULL,
  `seen` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_seen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_seen
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Superadmin', 'Super Admin', '2022-12-18 21:03:24', '2022-06-09 19:48:49');
INSERT INTO `roles` VALUES (2, 'Admin', 'Admin', '2022-12-18 21:03:28', '2022-06-09 19:48:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `contact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role_id` int NULL DEFAULT NULL,
  `departemen_id` int NULL DEFAULT NULL,
  `active` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'root', '$2y$10$8YdVY1JUBYUm2YHXcG3dXOm523QL7SObtv7a4l3xv9b', 'Super Admin', NULL, NULL, 1, 11, 1, '2022-12-18 21:15:27', '2022-12-18 21:15:27');

SET FOREIGN_KEY_CHECKS = 1;
