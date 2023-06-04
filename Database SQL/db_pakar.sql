-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2023 pada 09.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `short_description`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Karies Gigi', '<p>Karies atau gigi berlubang adalah suatu&nbsp;<strong>penyakit yang disebabkan oleh kerusakan lapisan email yang bisa meluas sampai ke bagian saraf gigi yang disebabkan oleh aktifitas bakteri di dalam mulut</strong>. Gigi berlubang disebabkan oleh beberapa faktor yaitu faktor gigi, mikroorganisme, substrat, dan waktu.</p>', '<h2 id=\"mcetoc_1gv3odl8g2cjh\"><strong>Apa itu Karies Gigi?</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Karies gigi adalah masalah gigi berlubang, yaitu ketika gigi mengalami kerusakan serta pembusukan di bagian luar dan dalam. Kondisi ini merupakan permasalahan gigi yang dapat menyerang saraf, sering kali karies gigi disebabkan oleh aktivitas bakteri&nbsp;<em>Streptococcus</em>&nbsp;<em>mutans</em>&nbsp;di dalam mulut.</p>\r\n<p>&nbsp;</p>\r\n<p>Bakteri yang berada di dalam rongga mulut tersebut berkembang biak dan menggerogoti sisa makanan yang menempel di permukaan gigi, lalu menghasilkan zat asam. Paparan zat asam disertai makanan dan minuman yang asam akan menyebabkan mineral gigi hilang, sehingga timbul karies gigi.</p>\r\n<p>&nbsp;</p>\r\n<h2 id=\"mcetoc_1gv3odl8g2cji\"><strong>Penyebab Karies Gigi</strong></h2>\r\n<p>&nbsp;</p>\r\n<p>Karies gigi terjadi ketika bakteri pada gigi menumpuk dan menimbulkan pembentukan plak, sehingga menyebabkan demineralisasi atau hilangnya komposisi mineral. Beberapa faktor yang dapat meningkatkan risiko karies gigi adalah sebagai berikut:</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li aria-level=\"1\"><strong>Mulut kering</strong>. Pada kondisi ini, produksi air liur di dalam mulut menjadi berkurang. Padahal, air liur dapat membantu mencegah kerusakan gigi dengan membersihkan sisa makanan dan plak yang menempel di gigi. Apabila produksi air liur menurun, maka tingkat asam dan bakteri di mulut akan meningkat, sehingga risiko gigi berlubang semakin besar.</li>\r\n<li aria-level=\"1\"><strong>Sering mengonsumsi makanan manis</strong>. Bakteri mendapatkan energi dari makanan manis yang masuk ke dalam mulut. Ketika sering mengonsumsi makanan manis, bakteri akan memiliki lebih banyak energi untuk menghasilkan asam. Selain itu, gula yang menempel di gigi juga mempermudah pembentukan plak dari bakteri.</li>\r\n<li aria-level=\"1\"><strong>Lokasi gigi</strong>. Sering kali gigi berlubang terjadi di area geraham karena area tersebut memiliki banyak celah yang membuat sisa makanan mudah menyangkut. Di samping itu, letaknya yang jauh di belakang sering kali membuat area ini sulit terjangkau sikat gigi, sehingga sisa makanan menumpuk lebih banyak.</li>\r\n<li aria-level=\"1\"><a href=\"https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-gerd-kenali-penyebab-faktor-risiko-dan-cara-mengatasinya\"><strong>Penyakit GERD</strong></a>. Penyakit ini dapat memicu karies gigi akibat asam lambung yang naik ke kerongkongan. Asam tersebut dapat mengalir ke mulut dan menimbulkan kerusakan di lapisan enamel gigi.</li>\r\n<li aria-level=\"1\"><a href=\"https://www.siloamhospitals.com/informasi-siloam/artikel/kenali-gejala-dan-ragam-jenis-gangguan-makan-eating-disorders\"><strong>Gangguan makan</strong></a>. Pasalnya, pengidap&nbsp;<a href=\"https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-anoreksia\"><strong>anoreksia</strong></a>&nbsp;sering kali melakukan diet secara ekstrem sehingga kekurangan nutrisi yang dibutuhkan untuk menjaga kesehatan gigi, seperti vitamin B, kalsium, dan zat besi. Sementara itu, pengidap&nbsp;<a href=\"https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-bulimia\"><strong>bulimia</strong></a>&nbsp;kerap memuntahkan makanannya, sehingga mendorong asam lambung naik ke kerongkongan sampai mulut dan memicu kerusakan pada gigi.</li>\r\n<li aria-level=\"1\"><strong>Faktor usia</strong>. Kondisi ini diketahui lebih sering terjadi pada anak-anak dan lansia. Karies gigi pada anak umumnya disebabkan oleh kebiasaan mengonsumsi makanan manis. Sedangkan, karies gigi pada lansia dipicu oleh menurunnya kekuatan gusi akibat proses penuaan.</li>\r\n</ul>', '230603073411.jpg', '2023-06-03 12:34:11', '2023-06-03 12:34:11'),
(2, 'Pulpitis', '<p>Pulpitis adalah suatu&nbsp;<strong>kondisi peradangan pada pulpa gigi yang terdiri dari jaringan vaskular, jaringan ikat, pembuluh darah, dan saraf</strong>. Ketika bagian ini mengalami peradangan, Anda akan mengalami rasa sakit dari saraf-saraf yang terlibat.</p>', '<p><strong>Pulpitis adalah peradangan pada pulpa gigi, yaitu saluran akar gigi yang berisi saraf dan pembuluh darah. Kondisi ini dapat menimbulkan gejala berupa sakit gigi parah, bau mulut, serta nyeri saat mengonsumsi makanan atau minuman yang manis, dingin, atau panas.</strong></p>\r\n<p>Gigi memiliki beberapa lapisan yang terdiri dari lapisan terluar (enamel), lapisan tengah (dentin), dan saluran akar gigi (pulpa). Normalnya, enamel dan dentin berfungsi untuk melindungi pulpa dari infeksi.</p>\r\n<p>Pada pulpitis, pulpa gigi meradang karena terinfeksi bakteri akibat kerusakan pada enamel dan dentin. Salah satu penyebab kerusakan pada lapisan tersebut adalah&nbsp;<a href=\"https://www.alodokter.com/gigi-berlubang\" target=\"_blank\" rel=\"noopener\">gigi berlubang</a>&nbsp;yang tidak segera ditangani.</p>\r\n<h3><strong>Penyebab Pulpitis</strong></h3>\r\n<p>Penyebab pulpitis adalah kerusakan pada enamel dan dentin sehingga bakteri bisa masuk lebih dalam sampai ke akar gigi, kemudian menginfeksi dan menyebabkan peradangan. Bakteri penyebab infeksi biasanya berasal dari jenis&nbsp;<em>Streptococcus mutans</em>.</p>\r\n<p>Kerusakan pada enamel dan dentin bisa terjadi karena beberapa penyakit atau kondisi berikut:</p>\r\n<ul>\r\n<li>Gigi berlubang</li>\r\n<li>Cedera pada gigi</li>\r\n<li>Gigi patah</li>\r\n<li>Kebiasaan menggesekkan gigi atas dan bawah (<a href=\"https://www.alodokter.com/bruxism\" target=\"_blank\" rel=\"noopener\">bruxism</a>)</li>\r\n</ul>', '230603073536.jpg', '2023-06-03 12:35:36', '2023-06-03 12:35:36'),
(3, 'Impaksi Gigi', '<p><strong>Impaksi gigi adalah gigi yang tidak dapat tumbuh, baik sebagian maupun sepenuhnya, sehingga tertanam di dalam gusi. Kondisi ini biasanya terjadi pada gigi bungsu, yaitu gigi yang tumbuh terakhir saat dewasa.</strong></p>', '<h3><strong>Penyebab Impaksi Gigi</strong></h3>\r\n<p><a href=\"https://www.alodokter.com/gigi-susu-pada-anak-proses-pertumbuhan-dan-cara-merawatnya\" target=\"_blank\" rel=\"noopener\">Gigi susu</a>&nbsp;akan mulai tumbuh saat bayi berusia 4&minus;6 bulan, kemudian akan lengkap ketika anak berusia 2&minus;3 tahun. Ketika anak berusia 6 tahun, gigi susu akan mulai tanggal dan digantikan dengan gigi permanen.</p>\r\n<p>Normalnya, orang dewasa memiliki 32 gigi, termasuk 4 gigi bungsu. Gigi bungsu adalah gigi yang tumbuh terakhir, yaitu ketika seseorang berusia 17&ndash;25 tahun.</p>\r\n<p>Impaksi gigi terjadi apabila salah satu atau beberapa&nbsp;<a href=\"https://www.alodokter.com/kapan-gigi-permanen-pada-anak-mulai-tumbuh\" target=\"_blank\" rel=\"noopener\">gigi permanen</a>&nbsp;tidak dapat tumbuh sempurna. Impaksi gigi bisa terjadi akibat berbagai kondisi, antara lain:</p>\r\n<ul>\r\n<li>Faktor genetik yang mengakibatkan rahang sempit sehingga tidak cukup ruangan untuk gigi tumbuh</li>\r\n<li>Gigi susu yang&nbsp;<a href=\"https://www.alodokter.com/penyebab-gigi-susu-belum-tanggal-saat-dewasa-dan-cara-menanganinya\" target=\"_blank\" rel=\"noopener\">terlambat tanggal</a>&nbsp;sehingga gigi permanen terhalang untuk tumbuh</li>\r\n<li>Tumor atau&nbsp;<a href=\"https://www.alodokter.com/kista\" target=\"_blank\" rel=\"noopener\">kista</a>&nbsp;di rahang yang menghalangi pertumbuhan gigi</li>\r\n</ul>', '230604052655.jpg', '2023-06-03 22:26:55', '2023-06-03 22:27:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indications`
--

CREATE TABLE `indications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_indication` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indication` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indications`
--

INSERT INTO `indications` (`id`, `code_indication`, `indication`, `created_at`, `updated_at`) VALUES
(1, 'IDC-0000', 'Karies pada gigi', '2023-06-03 03:57:30', '2023-06-03 22:31:44'),
(2, 'IDC-0001', 'Tidak terasa sakit', '2023-06-03 03:57:45', '2023-06-03 03:57:45'),
(3, 'IDC-0002', 'Tidak ada perbuhan warna gigi', '2023-06-03 03:57:53', '2023-06-03 03:57:53'),
(4, 'IDC-0003', 'Gigi vital', '2023-06-03 03:57:59', '2023-06-03 03:57:59'),
(5, 'IDC-0004', 'Terlalu kuat mengunyah', '2023-06-03 03:58:06', '2023-06-03 03:58:06'),
(6, 'IDC-0005', 'Akar tercemar, tetapi tidak membusuk', '2023-06-03 03:58:11', '2023-06-03 03:58:11'),
(7, 'IDC-0006', 'Gigi patah', '2023-06-03 03:58:17', '2023-06-03 03:58:17'),
(8, 'IDC-0007', 'Karies pada dentin', '2023-06-03 03:58:25', '2023-06-03 03:58:25'),
(9, 'IDC-0008', 'Tidak ada nyeri spontan', '2023-06-03 11:46:18', '2023-06-03 11:46:18'),
(10, 'IDC-0009', 'Tidak ada perubahan warna gigi', '2023-06-03 11:46:27', '2023-06-03 11:46:27'),
(11, 'IDC-0010', 'Karis pada pulpa', '2023-06-03 11:46:42', '2023-06-03 11:46:42'),
(12, 'IDC-0011', 'Nyeri spontan', '2023-06-03 11:46:52', '2023-06-03 11:46:52'),
(13, 'IDC-0012', 'Perubahan warna gigi', '2023-06-03 11:47:00', '2023-06-03 11:47:00'),
(14, 'IDC-0013', 'Tekstur gusi mengkilap', '2023-06-03 11:47:09', '2023-06-03 11:47:09'),
(15, 'IDC-0014', 'Sakit pada jaringan periodontal', '2023-06-03 11:47:17', '2023-06-03 11:47:17'),
(16, 'IDC-0015', 'Karang gigi', '2023-06-03 11:47:26', '2023-06-03 11:47:26'),
(17, 'IDC-0016', 'Gusi bengkak', '2023-06-03 11:47:33', '2023-06-03 11:47:33'),
(18, 'IDC-0017', 'Gigi belum tumbuh sempurna', '2023-06-03 11:47:40', '2023-06-03 11:47:40'),
(19, 'IDC-0018', 'Pipi bengkak', '2023-06-03 11:47:51', '2023-06-03 11:47:51'),
(20, 'IDC-0019', 'Pasien susah membuka mulut', '2023-06-03 11:47:57', '2023-06-03 11:54:26'),
(22, 'IDC-0020', 'Gusi bernanah', '2023-06-03 22:32:13', '2023-06-03 22:32:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indication_results`
--

CREATE TABLE `indication_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `results_id` bigint(20) UNSIGNED NOT NULL,
  `indication_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indication_results`
--

INSERT INTO `indication_results` (`id`, `results_id`, `indication_id`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2023-06-03 22:42:13', '2023-06-03 22:42:13'),
(2, 1, 9, '2023-06-03 22:42:13', '2023-06-03 22:42:13'),
(3, 1, 10, '2023-06-03 22:42:13', '2023-06-03 22:42:13'),
(4, 2, 13, '2023-06-03 22:45:12', '2023-06-03 22:45:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indication_sickness`
--

CREATE TABLE `indication_sickness` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sickness_id` bigint(20) UNSIGNED NOT NULL,
  `indication_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indication_sickness`
--

INSERT INTO `indication_sickness` (`id`, `sickness_id`, `indication_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-06-03 09:50:42', '2023-06-03 09:50:42'),
(2, 1, 1, '2023-06-03 09:56:12', '2023-06-03 09:56:12'),
(3, 1, 3, '2023-06-03 09:56:12', '2023-06-03 09:56:12'),
(4, 1, 4, '2023-06-03 09:56:12', '2023-06-03 09:56:12'),
(5, 1, 5, '2023-06-03 11:37:35', '2023-06-03 11:37:35'),
(6, 1, 6, '2023-06-03 11:37:35', '2023-06-03 11:37:35'),
(7, 1, 7, '2023-06-03 11:38:34', '2023-06-03 11:38:34'),
(8, 2, 3, '2023-06-03 11:45:39', '2023-06-03 11:45:39'),
(9, 2, 8, '2023-06-03 11:45:39', '2023-06-03 11:45:39'),
(10, 2, 9, '2023-06-03 11:57:03', '2023-06-03 11:57:03'),
(11, 3, 1, '2023-06-03 11:57:57', '2023-06-03 11:57:57'),
(12, 3, 12, '2023-06-03 11:57:57', '2023-06-03 11:57:57'),
(13, 4, 13, '2023-06-03 12:01:04', '2023-06-03 12:01:04'),
(14, 5, 14, '2023-06-03 12:01:22', '2023-06-03 12:01:22'),
(15, 6, 15, '2023-06-03 12:02:00', '2023-06-03 12:02:00'),
(16, 6, 16, '2023-06-03 12:02:00', '2023-06-03 12:02:00'),
(17, 7, 4, '2023-06-03 12:02:25', '2023-06-03 12:02:25'),
(18, 7, 17, '2023-06-03 12:02:25', '2023-06-03 12:02:25'),
(19, 8, 18, '2023-06-03 22:36:24', '2023-06-03 22:36:24'),
(20, 8, 19, '2023-06-03 22:36:24', '2023-06-03 22:36:24'),
(21, 8, 20, '2023-06-03 22:36:24', '2023-06-03 22:36:24'),
(22, 8, 22, '2023-06-03 22:36:24', '2023-06-03 22:36:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `medicines`
--

INSERT INTO `medicines` (`id`, `medicine_code`, `medicine_name`, `medicine_information`, `created_at`, `updated_at`) VALUES
(1, 'MDC-0000', 'Proris', 'meredakan nyeri pada gigi', '2023-06-03 03:51:53', '2023-06-03 22:30:40'),
(2, 'MDC-0001', 'Bufect Forte', 'menghilangkan rasa sakit gigi', '2023-06-03 03:52:03', '2023-06-03 03:52:03'),
(3, 'MDC-0002', 'Sumagesic Strip', 'meredakan nyeri seperti sakit gigi', '2023-06-03 03:52:16', '2023-06-03 03:52:16'),
(4, 'MDC-0003', 'Cap Kaka Tua', 'mampu meredakan sakit gigi, gusi yang bengkak serta membersihkan gigi dari kuman', '2023-06-03 03:52:29', '2023-06-03 03:52:29'),
(5, 'MDC-0004', 'Cooling 5 Orange', 'obat semprot rongga mulut yang berfungsi untuk menghilangkan rasa sakit misalnya pada saat sariawan, sakit gigi', '2023-06-03 03:52:39', '2023-06-03 03:52:39'),
(6, 'MDC-0005', 'Ponstan', 'obat yang bermanfaat untuk meredakan perdangan dan nyeri, seperti sakit gigi', '2023-06-03 03:52:54', '2023-06-03 03:52:54'),
(7, 'MDC-0006', 'Betadine Mouthwash', 'obat kumur ini digunakan untuk mengatasi masalah mulut seperti sakit tenggorokan, gusi bengkak, sariawan, bau mulut dan napas tidak segar', '2023-06-03 03:53:08', '2023-06-03 03:53:08'),
(8, 'MDC-0007', 'Ibuprofen', 'obat untuk untuk meredakan nyeri dan menurunkan deman', '2023-06-03 03:53:17', '2023-06-03 03:53:17'),
(9, 'MDC-0008', 'Dentasol', 'obat gigi yang dapat digunakan untuk mengatasi radang gusi, sariawan, sakit gigi, sakit dari rangsangan tumbuh gigi.', '2023-06-03 03:53:26', '2023-06-03 03:53:26'),
(10, 'MDC-0009', 'Gumafixa', 'obat gigi ngilu terpercaya dalam mengatasi segala masalah pada gigi.', '2023-06-03 03:53:36', '2023-06-03 03:53:36'),
(11, 'MDC-0010', 'Parasetamol', 'untuk mengatasi demam dan meringankan nyeri', '2023-06-03 03:53:46', '2023-06-03 03:53:46'),
(12, 'MDC-0011', 'Antibiotik', 'obat yang secara khusus digunakan untuk melawan infeksi akibat bakteri', '2023-06-03 03:53:54', '2023-06-03 03:53:54'),
(13, 'MDC-0012', 'Clindamycin', 'obat untuk mengatasi berbagai infeksi bakteri', '2023-06-03 03:54:04', '2023-06-03 03:54:04'),
(14, 'MDC-0013', 'Chloramphenicol', 'antibiotik yang dapat digunakan untuk mengobati infeksi bakteri di berbagai bagian tubuh', '2023-06-03 03:54:13', '2023-06-03 03:54:13'),
(15, 'MDC-0014', 'Metronidazole', 'antibiotik untuk mengobati infeksi bakteri di berbagai organ tubuh.', '2023-06-03 03:54:23', '2023-06-03 03:54:23'),
(16, 'MDC-0015', 'Hidrogen peroksida', 'mengurangi pembentukan plak dan untuk mengontrol radang gusi', '2023-06-03 03:54:32', '2023-06-03 03:54:32'),
(17, 'MDC-0016', 'Chlorhexidine', 'antiseptik dengan tindakan bakterisida dan fungisida yang dapat ditemukan dalam formulasi produk kebersihan mulut seperti pasta gigi, gel dan obat kumur.', '2023-06-03 03:54:41', '2023-06-03 03:54:41'),
(18, 'MDC-0017', 'Merflam', 'anti inflamasi non steroid yang dapat membantu mengatasi nyeri yang disertai bengkak pada sakit gigi.', '2023-06-03 03:54:51', '2023-06-03 03:54:51'),
(19, 'MDC-0018', 'Kalium diklofenak', 'obat anti nyeri golongan OAINS (obat anti inflamasi non steroid) untuk mengobati nyeri ringan sampai sedang.', '2023-06-03 03:55:03', '2023-06-03 03:55:03'),
(20, 'MDC-0019', 'Amoxicillin', 'salah satu obat yang bisa diresepkan dokter pada pasien sakit gigi.', '2023-06-03 03:55:12', '2023-06-03 03:55:12'),
(21, 'MDC-0020', 'Aspirin', 'salah satu obat yang juga bisa meredakan terjadinya sakit gigi', '2023-06-03 03:55:21', '2023-06-03 03:55:21'),
(22, 'MDC-0021', 'Asam Mefenamat', 'umumnya digunakan untuk meredakan berbagai keluhan akibat sakit gigi, seperti nyeri, bengkak di sekitar gigi atau gusi, demam, dan sakit kepala', '2023-06-03 22:30:15', '2023-06-03 22:30:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medicine_sickness`
--

CREATE TABLE `medicine_sickness` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sickness_id` bigint(20) UNSIGNED NOT NULL,
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `medicine_sickness`
--

INSERT INTO `medicine_sickness` (`id`, `sickness_id`, `medicine_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-06-03 07:35:45', '2023-06-03 07:35:45'),
(2, 1, 2, '2023-06-03 07:35:45', '2023-06-03 07:35:45'),
(3, 1, 3, '2023-06-03 10:35:30', '2023-06-03 10:35:30'),
(4, 1, 4, '2023-06-03 10:35:30', '2023-06-03 10:35:30'),
(5, 1, 5, '2023-06-03 10:35:30', '2023-06-03 10:35:30'),
(6, 1, 6, '2023-06-03 10:35:30', '2023-06-03 10:35:30'),
(7, 1, 7, '2023-06-03 10:35:30', '2023-06-03 10:35:30'),
(8, 2, 5, '2023-06-03 10:49:00', '2023-06-03 10:49:00'),
(9, 2, 6, '2023-06-03 10:49:00', '2023-06-03 10:49:00'),
(10, 2, 7, '2023-06-03 10:49:00', '2023-06-03 10:49:00'),
(11, 2, 9, '2023-06-03 10:49:00', '2023-06-03 10:49:00'),
(12, 2, 10, '2023-06-03 10:49:00', '2023-06-03 10:49:00'),
(13, 3, 12, '2023-06-03 10:54:06', '2023-06-03 10:54:06'),
(14, 3, 13, '2023-06-03 10:54:06', '2023-06-03 10:54:06'),
(15, 4, 13, '2023-06-03 11:14:10', '2023-06-03 11:14:10'),
(16, 4, 14, '2023-06-03 11:14:10', '2023-06-03 11:14:10'),
(17, 4, 15, '2023-06-03 11:14:10', '2023-06-03 11:14:10'),
(18, 4, 16, '2023-06-03 11:14:10', '2023-06-03 11:14:10'),
(19, 5, 9, '2023-06-03 11:21:09', '2023-06-03 11:21:09'),
(20, 5, 12, '2023-06-03 11:21:09', '2023-06-03 11:21:09'),
(21, 5, 13, '2023-06-03 11:21:09', '2023-06-03 11:21:09'),
(22, 5, 17, '2023-06-03 11:21:09', '2023-06-03 11:21:09'),
(23, 5, 18, '2023-06-03 11:21:09', '2023-06-03 11:21:09'),
(24, 6, 9, '2023-06-03 11:32:55', '2023-06-03 11:32:55'),
(25, 6, 12, '2023-06-03 11:32:55', '2023-06-03 11:32:55'),
(26, 6, 13, '2023-06-03 11:32:55', '2023-06-03 11:32:55'),
(27, 6, 19, '2023-06-03 11:32:55', '2023-06-03 11:32:55'),
(28, 6, 20, '2023-06-03 11:32:55', '2023-06-03 11:32:55'),
(29, 6, 21, '2023-06-03 11:32:55', '2023-06-03 11:32:55'),
(30, 7, 9, '2023-06-03 11:36:15', '2023-06-03 11:36:15'),
(31, 7, 12, '2023-06-03 11:36:15', '2023-06-03 11:36:15'),
(32, 7, 13, '2023-06-03 11:36:15', '2023-06-03 11:36:15'),
(33, 7, 14, '2023-06-03 11:36:15', '2023-06-03 11:36:15'),
(34, 7, 17, '2023-06-03 11:36:15', '2023-06-03 11:36:15'),
(35, 7, 21, '2023-06-03 11:36:15', '2023-06-03 11:36:15'),
(36, 8, 9, '2023-06-03 22:34:36', '2023-06-03 22:34:36'),
(37, 8, 12, '2023-06-03 22:34:36', '2023-06-03 22:34:36'),
(38, 8, 22, '2023-06-03 22:34:36', '2023-06-03 22:34:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_03_25_021326_create_roles_table', 1),
(5, '2023_03_25_021327_create_users_table', 1),
(6, '2023_04_01_063130_create_articles_table', 1),
(7, '2023_04_01_155941_create_medicines_table', 1),
(8, '2023_04_03_174154_create_sicknesses_table', 1),
(9, '2023_04_04_011702_create_indications_table', 1),
(10, '2023_04_04_012438_create_results_table', 1),
(11, '2023_04_17_024506_create_indication_sickness_table', 1),
(12, '2023_05_09_042032_indication_result', 1),
(13, '2023_05_13_193654_create_medicine_sickness_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `sickness_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `results`
--

INSERT INTO `results` (`id`, `datetime`, `sickness_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2023-06-04 05:42:13', 2, 5, '2023-06-03 22:42:13', '2023-06-03 22:42:13'),
(2, '2023-06-04 05:45:12', 4, 5, '2023-06-03 22:45:12', '2023-06-03 22:45:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-06-03 03:51:34', '2023-06-03 03:51:34'),
(2, 'Dokter', '2023-06-03 03:51:34', '2023-06-03 03:51:34'),
(3, 'User', '2023-06-03 03:51:34', '2023-06-03 03:51:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sicknesses`
--

CREATE TABLE `sicknesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sickness_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sickness_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sickness_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sickness_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sickness_solution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sicknesses`
--

INSERT INTO `sicknesses` (`id`, `sickness_code`, `sickness_name`, `sickness_image`, `sickness_description`, `sickness_solution`, `created_at`, `updated_at`) VALUES
(1, 'SICK-0000', 'Karies Gigi', '230603053530.Karies Gigi.jpg', '<p>Karies atau gigi berlubang adalah suatu&nbsp;<strong>penyakit yang disebabkan oleh kerusakan lapisan email yang bisa meluas sampai ke bagian saraf gigi yang disebabkan oleh aktifitas bakteri di dalam mulut</strong>. Gigi berlubang disebabkan oleh beberapa faktor yaitu faktor gigi, mikroorganisme, substrat, dan waktu.</p>', 'Membersihkan gigi dengan sikat dan benang gigi, setidaknya dua kali sehari. Berkumur dengan obat kumur yang mengandung fluoride atau menggunakan air garam. Membatasi konsumsi makanan dan minuman manis. Melakukan perawatan gigi dengan antibakteri.', '2023-06-03 07:35:45', '2023-06-03 11:38:34'),
(2, 'SICK-0001', 'Karies Dentin', '230603054900.jpg', '<p>Caries dentis merupakan&nbsp;<strong>istilah yang digunakan untuk menggambarkan kondisi gigi yang berlubang</strong>. Penyebab yang terseringnya adalah kebersihan gigi dan mulut yang kurang baik, sehingga menyebabkan penumpukan sisa makanan dan bakteri.</p>', '1. Penggunaan pasta gigi untuk gigi sensitif yang mengandung\r\n2. Pelapisan email gigi menggunakan fluoride untuk menguatkan gigi dan mengurangi nyeri\r\n3. Aplikasi resin pada permukaan akar gigi yang sensitif\r\n4. Tambal gigi untuk mengatasi gigi sensitif akibat gigi berlubang\r\n5. Perawatan saluran akar gigi', '2023-06-03 10:49:00', '2023-06-03 11:57:03'),
(3, 'SICK-0002', 'Pulpitis', '230603055406.jpg', '<p>Pulpitis adalah suatu&nbsp;<strong>kondisi peradangan pada pulpa gigi yang terdiri dari jaringan vaskular, jaringan ikat, pembuluh darah, dan saraf</strong>. Ketika bagian ini mengalami peradangan, Anda akan mengalami rasa sakit dari saraf-saraf yang terlibat</p>', 'Beberapa perawatan dan pengobatan untuk pulpitis yang dapat diambil, yaitu : · Perawatan : mengangkat karies yang ada, meletakkan pelindung pulpa yang cocok, dan restorasi permanen dilakukan. · Perawatan untuk radang pulpa gigi serius : melibatkan perawatan saluran akar atau operasi cabut gigi', '2023-06-03 10:54:06', '2023-06-03 11:57:57'),
(4, 'SICK-0003', 'Gangren Pulpa', '230603061410.jpg', '<p><strong>Gangren Pulpa</strong>&nbsp;adalah keadaan&nbsp;<strong>gigi</strong>&nbsp;dimana jaringan&nbsp;<strong>pulpa</strong>&nbsp;sudah mati sebagai sistem pertahanan&nbsp;<strong>pulpa</strong>&nbsp;sudah tidak dapat menahan rangsangan sehingga jumlah sel&nbsp;<strong>pulpa</strong>&nbsp;yang rusak menjadi semakin banyak dan menempati sebagian besar ruang&nbsp;<strong>pulpa</strong>.</p>', 'Gangren bisa diobati dan sembuh dengan penanganan yang tepat. Dokter akan melakukan berbagai macam cara untuk mencegah penyebaran infeksi ke anggota tubuh lainnya sehingga menimbulkan komplikasi. Upaya yang dilakukan tergantung dari tingkat keparahan gangren.', '2023-06-03 11:14:10', '2023-06-03 12:01:04'),
(5, 'SICK-0004', 'Gingivitis', '230603062109.jpg', '<p>Radang Gusi atau gingivitis merupakan suatu&nbsp;<strong>penyakit periodontal (jaringan pendukung gigi) berupa peradangan yang terjadi pada gusi yang dapat diakibatkan dari adanya penumpukan plak dan karang gigi</strong>.</p>', '1. Menjaga kebersihan dan kesehatan gigi dan gusi. Karena penyebab gingivitis adalah plak, maka kebersihan gigi dan gusi adalah yang utama. ...\r\n2. Menggunakan benang gigi. ...\r\n3. Pembersihan plak dan karang gigi rutin ke dokter gigi. ...\r\n4. Perhatikan faktor risiko.', '2023-06-03 11:21:09', '2023-06-03 12:01:22'),
(6, 'SICK-0005', 'Periodontis', '230603063255.jpg', '<p>Periodontitis adalah&nbsp;<strong>infeksi gusi yang dapat menyebabkan kerusakan pada gusi, tulang rahang, dan jaringan lunak di sekitar gusi</strong>. Kondisi ini merupakan salah satu komplikasi dari radang gusi (gingivitis) yang tidak ditangani dengan tepat.</p>', 'Pada periodontitis yang belum parah, metode pengobatan yang dilakukan dokter adalah:\r\n1. Scaling, untuk menghilangkan karang gigi dan bakteri dari permukaan gigi atau bagian bawah gusi.\r\n2. Root planing, untuk membersihkan dan mencegah penumpukan bakteri dan karang gigi lebih lanjut, serta untuk menghaluskan permukaan akar.', '2023-06-03 11:32:55', '2023-06-03 12:02:00'),
(7, 'SICK-0006', 'Abses Gingival', '230603063615.png', '<p>Abses gingiva, yaitu&nbsp;<strong>abses yang muncul di gusi</strong>. Abses gigi terjadi akibat berkembangnya bakteri di rongga mulut. Bakteri bisa masuk ke dalam gigi melalui lubang atau retakan di gigi penderita, kemudian menyebabkan pembengkakan dan peradangan di ujung akar.</p>', '1. Mengeluarkan nanah. Mengeluarkan nanah bertujuan untuk mengeringkan abses dan mengurangi pembengkakan. \r\n2. Menggunakan obat antibiotik. Obat antibiotik digunakan apabila infeksi telah menyebar ke area gigi, rahang atau area lainnya. \r\n3. Mencabut gigi. \r\n4. Perawatan akar gigi.', '2023-06-03 11:36:15', '2023-06-03 12:02:25'),
(8, 'SICK-0007', 'Impaksi', '230604053436.jpg', '<p><strong>Impaksi gigi adalah gigi yang tidak dapat tumbuh, baik sebagian maupun sepenuhnya, sehingga tertanam di dalam gusi. Kondisi ini biasanya terjadi pada gigi bungsu, yaitu gigi yang tumbuh terakhir saat dewasa.</strong></p>', 'Pengobatan impaksi gigi tergantung pada posisi gigi yang terdampak dan keparahan kondisinya. Jika impaksi gigi tidak menimbulkan gejala, dokter umumnya akan meminta pasien untuk menjalani kontrol secara rutin.', '2023-06-03 22:34:36', '2023-06-03 22:36:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `address`, `phone`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'default.png', 'empty', 'empty', '$2y$10$zaoaE8shFgT/8pZFvNgWW.P0Ujyl4hQsD3SugapQTvOba2EsC6XJG', 1, '2023-06-03 03:51:37', '2023-06-03 03:51:37'),
(2, 'doctor', 'doctor@gmail.com', 'default.png', 'empty', 'empty', '$2y$10$Fvtcob9o0FYYe6UN3WIw3u71nRZ4HmzzhEiPEq7HOZStSvR6jvqNK', 2, '2023-06-03 03:51:37', '2023-06-03 03:51:37'),
(3, 'user', 'user@gmail.com', 'default.png', 'empty', 'empty', '$2y$10$sXt5bp8emwyE5u9stoAKCOSRDRj1hj3sZfismcFaK3LgA857H2/qS', 3, '2023-06-03 03:51:37', '2023-06-03 03:51:37'),
(5, 'Yonanda Haryono', 'yonandaharyono@gmail.com', '230604053943.4.jpg', 'Perumahan Bumi Mondorko Raya Blok Ag 42 Singosari Malang', '082331050979', '$2y$10$ze461U83ZWQSvsoF2wVSpe4Ru0CMQFuwt.8jOVcHIrkR6Eamrsngi', 3, '2023-06-03 22:38:30', '2023-06-03 22:40:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indications`
--
ALTER TABLE `indications`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indication_results`
--
ALTER TABLE `indication_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indication_results_results_id_foreign` (`results_id`),
  ADD KEY `indication_results_indication_id_foreign` (`indication_id`);

--
-- Indeks untuk tabel `indication_sickness`
--
ALTER TABLE `indication_sickness`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indication_sickness_sickness_id_foreign` (`sickness_id`),
  ADD KEY `indication_sickness_indication_id_foreign` (`indication_id`);

--
-- Indeks untuk tabel `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `medicine_sickness`
--
ALTER TABLE `medicine_sickness`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicine_sickness_sickness_id_foreign` (`sickness_id`),
  ADD KEY `medicine_sickness_medicine_id_foreign` (`medicine_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_sickness_id_foreign` (`sickness_id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sicknesses`
--
ALTER TABLE `sicknesses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `indications`
--
ALTER TABLE `indications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `indication_results`
--
ALTER TABLE `indication_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `indication_sickness`
--
ALTER TABLE `indication_sickness`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `medicine_sickness`
--
ALTER TABLE `medicine_sickness`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sicknesses`
--
ALTER TABLE `sicknesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `indication_results`
--
ALTER TABLE `indication_results`
  ADD CONSTRAINT `indication_results_indication_id_foreign` FOREIGN KEY (`indication_id`) REFERENCES `indications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `indication_results_results_id_foreign` FOREIGN KEY (`results_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `indication_sickness`
--
ALTER TABLE `indication_sickness`
  ADD CONSTRAINT `indication_sickness_indication_id_foreign` FOREIGN KEY (`indication_id`) REFERENCES `indications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `indication_sickness_sickness_id_foreign` FOREIGN KEY (`sickness_id`) REFERENCES `sicknesses` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `medicine_sickness`
--
ALTER TABLE `medicine_sickness`
  ADD CONSTRAINT `medicine_sickness_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicine_sickness_sickness_id_foreign` FOREIGN KEY (`sickness_id`) REFERENCES `sicknesses` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_sickness_id_foreign` FOREIGN KEY (`sickness_id`) REFERENCES `sicknesses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
