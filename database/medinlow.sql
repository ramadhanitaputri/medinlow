-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2022 pada 12.35
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medinlow`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_lomba`
--

CREATE TABLE `kategori_lomba` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `parent_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_lomba`
--

INSERT INTO `kategori_lomba` (`id`, `nama`, `parent_kategori`) VALUES
(1, 'PKM', 1),
(2, 'MAWAPRES', 2),
(3, 'KBMI', 3),
(4, 'KDMI', 4),
(5, 'POMNAS', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_webinar`
--

CREATE TABLE `kategori_webinar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `parent_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_webinar`
--

INSERT INTO `kategori_webinar` (`id`, `nama`, `parent_kategori`) VALUES
(1, 'IT', 1),
(2, 'MMB', 2),
(3, 'Lainnya', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_lomba` varchar(255) NOT NULL,
  `gambar_lomba` varchar(255) NOT NULL,
  `deskripsi_lomba` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `kategori_id`, `nama_lomba`, `gambar_lomba`, `deskripsi_lomba`) VALUES
(1, 1, 'Pekan Perlombaan Kreativitas Mahasiswa Tingkat Nasional', 'lomba1-62a0926dd4167-jpg', 'Pekan perlombaan kreativitas mahasiswa (PPKM) merupakan great event dari UKM Penalaran dan Kewirausahaan dengan Tema \"Pengembangan Potensi Daerah Sebagai Penyanggah Ekonomi Menuju Era Society 5.0\", yang terdiri dari beberapa lomba seru bertaraf nasional.'),
(2, 2, 'National Innovation Technology', 'lomba3-62a0930e211ec-jpg', 'U-NITECH #2022\r\nSebuah kompetisi cipta inovasi teknologi tepat guna tingkat nasional yang diperuntukan bagi seluruh mahasiswa dan universitas di Indonesia. Tema lomba yaitu \"Pengembangan Teknologi Tepat Guna dalam Mendukung Kemajuan Fasilitas Kesehatan untuk Mewujutkan Indonesia Emas 2045\".'),
(3, 2, 'Essay Competition', 'lomba2-62a092fcb7a0b-jpg', 'Write Your Mind yang ditunggu-tunggu akhirnya kembali hadir!! Dengan menyuguhkan tema \"The Pandemic Era of Digital: Netpreneur as an Opportunity into the Indonesia\'s Digital Economy\", WYM akan mengadakan kompetisi penulisan esai hingga presentasi bagi yang lolos ke tahap final. Melalui kompetisi ini, kalian tentunya akan dapat lebih mengerti tentang dunia digital terutama dalam pandemi ini.'),
(4, 3, 'Gebyar Civic Education 11 Debat Competition', 'lomba4-62a0a1a0c1011-jpg', '\"Revitalisasi Semangat Bangsa Menuju Keemasan Melalui Semarak Gebyar Civic Education\r\ndi Era Disrupsi\"\r\nJenuh kuliah? Mageran? Merasa kurang produktif? GCE 11 Debat Competition hadir dan jadi jawaban buat kegalauan kalian.\r\n'),
(5, 4, 'Business Plan Competition DEF 2021', 'lomba5-62a0a29f81dc5-jpg', '\"Enhancing Sustainable Eco-Friendly Business in 5.0\"\r\nBusiness plan competition (BPC) DEF 2021 telah resmi dibuka! Mari mahasiswa/i tuangkan ide bisnis kreatif dan inovatif kalian di kesempatan yang berharga ini. Yuk daftar!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1653134429),
('m130524_201442_init', 1653134442),
('m190124_110200_add_verification_token_column_to_user_table', 1653134442);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `gambar_prestasi` varchar(255) NOT NULL,
  `deskripsi_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `gambar_prestasi`, `deskripsi_prestasi`) VALUES
(1, 'Kompetisi Penganugrahan Inovasi Teknologi Tahun 2020', 'lomba1-62a0945700c7c-jpg', 'Tiga Mahasiswa PENS PSDKU Lamongan mengikuti kegiatan kompetisi Penganugrahan Inovasi Teknologi tahun 2020 yang dilaksanakan di kota Lamongan pada bidang Teknologi dan Komunikasi(TIK) dengan mengajukan judul...'),
(2, 'Lomba Inovasi Digital Mahasiswa (LIDM) Tahun 2021', 'lomba2-62a09496a47b3-jpeg', 'Kompetisi bergengsi multimedia tingkat nasional yakni Lomba Inovasi Digital Mahasiswa (LIDM) kembali digelar secara online oleh Pusat Prestasi Nasional, Kemendikbud Ristek. Satu tim terbaik Politeknik Elektronika Negeri Surabaya (PENS)...'),
(3, 'Sosialisasi Tanaman Obat Keluarga (TOGA) dengan Virtual Reality (VR)', 'sosialisasi1-62a094c836ef0-png', 'Sebagai salah satu bentuk pengabdian terhadap masyarakat, Sosialisasi Tanaman Obat Keluarga (TOGA) dengan Virtual Reality (VR) sukses dilaksanakan oleh Program Studi di Luar...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'w1UMWiBdRUlC5TQVWZR_SYrZni2nNQ_t', '$2y$13$dtX5rFOOUJok0z2Bbv4zZOtom3vsjnnG98oqkM2KWzGo38jmk3oDi', NULL, 'admin@gmail.com', 10, 1653134604, 1653134604, 'eF4aazCPOzLs1nY1HUhdeioblxqTEWGJ_1653134604');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webinar`
--

CREATE TABLE `webinar` (
  `id_webinar` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_webinar` varchar(255) NOT NULL,
  `gambar_webinar` varchar(255) NOT NULL,
  `deskripsi_webinar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `webinar`
--

INSERT INTO `webinar` (`id_webinar`, `kategori_id`, `nama_webinar`, `gambar_webinar`, `deskripsi_webinar`) VALUES
(1, 1, 'Peran Tata Kelola TI di Perusahaan', 'webinar1-629c4db460d7b-jpg', 'Sadar atau tidak, peran TI pada suatu perusahaan itu sangat penting, loh! Nah, makanya perusahaan yang baik butuh tata kelola TI yang baik pula. Kupas tuntas dunia kelola TI di perusahaan secara GRATIS, yuk dengan join webinar “Peran Tata Kelola TI di Perusahaan”, bersama IT Consultant, Radityo Priyo Ndaru.'),
(2, 2, 'Digital Creative Design In The Millenials Era', 'webinar6-62a093a65919e-jpg', 'Hai Libs! BEM HIMA Perpusinfo 2021 proudly present WEBINAR NASIONAL UPI BOOKPEDIA 7.0 dengan tema “Digital Creative Design In The Millenials Era”! Pemateri dari webinar yang akan diselenggarakan akan menjawab berbagai pertanyaan yang kamu miliki seputar creative design yang baik. '),
(3, 1, 'Peranan Internet of Things pada Smart Farming 4.0', 'webinar4-62a093f46935d-jpg', 'Dalam rangka soft opening kegiatan INSTIPER Internet of Things (IoT) Academy, maka INSTIPER Yogyakarta akan menyelenggarakan Webinar dengan tema : “Peranan Internet of Things pada Smart Farming 4.0”'),
(5, 1, 'Public Speaking', 'webinar5-62a1644212384-jpg', 'Sadar atau tidak, peran TI pada suatu perusahaan itu sangat penting, loh! Nah, makanya perusahaan yang baik butuh tata kelola TI yang baik pula. Kupas tuntas dunia kelola TI di perusahaan secara GRATIS, yuk dengan join webinar “Peran Tata Kelola TI di Perusahaan”, bersama IT Consultant, Radityo Priyo Ndaru.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_webinar`
--
ALTER TABLE `kategori_webinar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indeks untuk tabel `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id_webinar`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_webinar`
--
ALTER TABLE `kategori_webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id_webinar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_lomba` (`id`);

--
-- Ketidakleluasaan untuk tabel `webinar`
--
ALTER TABLE `webinar`
  ADD CONSTRAINT `webinar_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_webinar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
