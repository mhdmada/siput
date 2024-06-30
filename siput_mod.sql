-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2024 pada 16.18
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siput`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2024-05-11-150205', 'App\\Database\\Migrations\\Umkm', 'default', 'App', 1715502924, 1),
(7, '2024-05-13-025813', 'App\\Database\\Migrations\\Pelatihan', 'default', 'App', 1715569834, 2),
(9, '2024-05-14-054019', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1716985230, 3),
(10, '2024-05-29-132924', 'App\\Database\\Migrations\\Penjualan', 'default', 'App', 1716990170, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` bigint(20) UNSIGNED NOT NULL,
  `nama_pelatihan` varchar(50) NOT NULL,
  `jadwal_pelatihan` date NOT NULL,
  `lokasi_pelatihan` varchar(50) NOT NULL,
  `link_pendaftaran` varchar(255) NOT NULL,
  `deskripsi_pelatihan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nama_pelatihan`, `jadwal_pelatihan`, `lokasi_pelatihan`, `link_pendaftaran`, `deskripsi_pelatihan`) VALUES
(1, 'Tata Cara Pembuatan Izin Usaha', '2024-05-08', 'Aula Universitas Nurdin Hamzah Jambi', 'https://direktoridisnakerindonesia.wordpress.com/kota-jambi/', 'Pelatihan ini sangat berpotensi'),
(2, 'Pembuatan Kapal Wisata', '2024-05-21', 'Danau Sipin', '', ''),
(3, 'tutorial memasang umpan bersama iwan tegek bengkul', '2024-05-16', 'Merlung km 61', '', ''),
(5, 'Mancing anti boncos bersama tutor danu', '2024-05-07', 'bayung lencir', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` bigint(20) UNSIGNED NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `foto_produk` varchar(500) NOT NULL,
  `lokasi_usaha` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nama_usaha`, `foto_produk`, `lokasi_usaha`, `nama_pemilik`, `no_hp`) VALUES
(1, 'Kripik Kentang Pedas Manis', '', 'Sebapo', 'Rian Bagas Hidayat', '089587635678'),
(2, 'Iwan Mukbang', 'tigabelas.jpg', 'Telanai', 'Ibnu Ridwan', '0897441782829');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkm`
--

CREATE TABLE `umkm` (
  `id_umkm` bigint(20) UNSIGNED NOT NULL,
  `nik` bigint(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `alamat_usaha` varchar(60) DEFAULT NULL,
  `bidang_usaha` varchar(50) DEFAULT NULL,
  `nib` varchar(60) DEFAULT NULL,
  `npwp` varchar(60) DEFAULT NULL,
  `omzet_biaya` varchar(60) DEFAULT NULL,
  `jumlah_tenaga_kerja` varchar(60) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`id_umkm`, `nik`, `nama`, `nama_usaha`, `alamat`, `kelurahan`, `kecamatan`, `alamat_usaha`, `bidang_usaha`, `nib`, `npwp`, `omzet_biaya`, `jumlah_tenaga_kerja`, `no_hp`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 157100411002020041, 'Muhammad Ziqran Febian', 'Ayam Geprek Saos Hitam', 'Jln. Yulius Usman Lrg. Telaga 1 No.07 RT.18', 'Pematang Sulur', 'Telanaipura', 'Mayang Mangurai', 'Kuliner', '5830201', '61.318.029.8-723.000', 'Rp.10.000.000', '10', '089514806788', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7865765423454356, 'Mamat', 'Mamat Pop Es', 'Mayang', 'mayang', 'nusa indah', 'Nusa Indah', 'Kuliner', '786789134', '23423727895235', 'Rp.10.000.000', '5', '089567337898', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 34562523234543443, 'Ibnu', 'Ibnu Pangsit', 'Jln Pattimura', 'legok', 'Legok', 'Danau Sipin', 'Kuliner', '8923472378942389', '52352352525', 'Rp.4.000.000', '9', '0853745278846', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 546546345345, 'Rian bagas ', 'Rian Toko bangunan', 'Tempino', 'Sebapo', 'Tempino', 'Purnama', 'Dagang', '232837892478', '2342342342323', 'Rp.7.000.000', '4', '089567625467', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 9223372036854775807, 'Charism Ambassador', 'Toko Immortal', 'Immortal', 'Pasar', 'Pasar', 'Komplek Immortal', 'Dagang', '234235346654', 'wt4e34563452525424', 'Rp.50.000.000', '2', '08975654545634', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 9223372036854775807, 'Danu Yudha', 'Danu Sawit', 'Bahar', 'bahar', 'Bahar', 'Dekat Bahar', 'Industri', '234354456346', '435646347347', 'Rp.9.000.000', '15', '0865354677856754', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 5656363466753754784, 'Irgi ', 'Kapal Wisata Danau Sipin', 'Danau Sipin', 'Danau Sipin', 'Danau Sipin', 'Kawasan Wisata Danau Sipin', 'Jasa', '236589578923895789', 'wre234523423', 'Rp.4.000.000', '1', '0895774534543434', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 345343454789534, 'Desi', 'Dimsum beringin', 'Beringin', 'Talang Banjar', 'talang banjar', 'Beringin', 'Kuliner', '23423545646456', 'hjqwer28947374373', 'Rp.5.000.000', '2', '089745467566', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 3245235892365235, 'Iwan Mukbang', 'Iwan Fashion', 'talang bakung', 'talang bakung ', 'talang bakung', 'Broni', 'Fashion', '345346575753', 'dfgdfgh546566565653', 'Rp.6.000.000', '5', '08964836348963', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 3453454563453, 'Amalia', 'Pangsheet', 'Simpang Rimbo', 'simpng rimbo', 'Telanaipura', 'Talang Banjar', 'Pertanian', '34563456252', '23423566', 'Rp.50.000.000', '45', '083135344552', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 3213423454, 'Danu Mewing', 'Kijang LGX Mania', 'bahar city', 'bahar', 'sebapo', 'bayung lencir', 'Jasa', '23543465467567', '2452657685679', 'Rp.5.000.000', '10', '0836473242378', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 1571010102960021, 'adam', 'Ternak Tuyul', 'jl neraka firdaus', 'monyet', 'sapi', 'jl bangsat', 'Dagang', '123', '456', NULL, '7', '081229818843', '2024-06-17 06:32:51', '2024-06-17 06:32:51', '0000-00-00 00:00:00'),
(34, 9223372036854775807, 'Mayang Sartika', 'Pempek Selam', 'Jln.Yulius Usman RT.18 No.8 Kel.Pematang Sulur Kec.Telanaipura', 'Pematang Sulur', 'Telanaipura', 'Tempino ', 'Dagang', 'GHKS91038465', '2346104372362', 'Rp.15.000.000 - Rp.20.000.000', '5', '8975563453452322', '2024-06-19 08:19:47', '2024-06-19 08:19:47', '0000-00-00 00:00:00'),
(35, 9223372036854775807, 'Ansor Komang', 'Laode Karaoke', 'Jln Sebab kau terlalu indah', 'Lebak', 'Bandung', 'Dari Kejauhan', 'Jasa', 'wewewrrwewer42423423', 'dsfsd2342143', 'Rp.195.000.000 - Rp.200.000.000', '100', '453656457745745745754', '2024-06-25 01:01:37', '2024-06-25 01:01:37', '0000-00-00 00:00:00'),
(36, 9223372036854775807, 'Mamat cedok', 'cedok club', 'talang bakung', 'talang', 'bakung', 'muaro jambi', 'industri', 'gfh5675765', 'gfdh54545645', '2000000', '3', '0896788568646454', '2024-06-28 12:56:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `name_user` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nik`, `name_user`, `username`, `password`, `roles`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1571010102960025', 'M Ziqran Febian', 'Ziqran', '$2y$10$EIqX/whrFDBm85CRvvpiROhJcn3FyNg8oqbP5.sM0zsODBeNeYShu', 'SUPER_ADMIN', '2024-06-16 21:49:04', '2024-06-16 21:49:04', '0000-00-00 00:00:00'),
(2, '12489283923', 'mada', 'mada123', '$2y$10$n/26IR/1XWNIVYLJcXCap.wNlKdz5d4GV2Axpj0TzpI4lMmpfXKiu', 'UMKM', '2024-06-16 21:55:47', '2024-06-16 21:55:47', '0000-00-00 00:00:00'),
(3, '1232323', 'mada', 'mada123', '$2y$10$6n1NNmmxAuG6YuIH6QIhBevSvA.8kKdnSk61NyBjjrQkNfvr8NjWi', 'UMKM', '2024-06-16 22:07:45', '2024-06-16 22:07:45', '0000-00-00 00:00:00'),
(4, '2323213', 'mada', 'mada123', '$2y$10$tp.h29JFF3cpMo7qt3mYDOna/EACGfDH.sKESI/2oy.aEyJpwhkCy', 'UMKM', '2024-06-16 22:13:32', '2024-06-16 22:13:32', '0000-00-00 00:00:00'),
(5, '1573498340434', 'mada', 'mada123', '$2y$10$ww6EU4jAoOH2XmgkIaCD4.B.x3t3tJbEtdMKsIHDNh9.pH.8r1q9G', 'UMKM', '2024-06-16 22:16:56', '2024-06-16 22:16:56', '0000-00-00 00:00:00'),
(6, '127483272323', 'mada', 'mada123', '$2y$10$wMnVK7SYwMMBhfiVYCCHpuomVvkUuGUuSFti6N/JA0pxjIvZJPZT6', 'UMKM', '2024-06-16 22:18:49', '2024-06-16 22:18:49', '0000-00-00 00:00:00'),
(7, '232323', 'mada', 'mada123', '$2y$10$mcmdX7XjfcbQ2fBGAeTi3eUWoPSRFLsN1HeJhvAs2pN99xUdi6ZDi', 'UMKM', '2024-06-16 22:22:41', '2024-06-16 22:22:41', '0000-00-00 00:00:00'),
(8, '32321323', 'mada', 'mada123', '$2y$10$rhYMV8Aqf5hXWG5kZVDfH.Sf86eb5Gjd4KfHn/89pUZRPu1Zgh1Xq', 'UMKM', '2024-06-16 22:26:48', '2024-06-16 22:26:48', '0000-00-00 00:00:00'),
(9, '32323', 'mada', 'mada1212', '$2y$10$7HWqTmgFhpnalDN0T15jt.2g7fK/l/ZfkTGhqZQ38zBBhY6wCsV/W', 'UMKM', '2024-06-16 22:29:40', '2024-06-16 22:29:40', '0000-00-00 00:00:00'),
(10, '323', 'mada', 'mada123', '$2y$10$3lGDn6aQYPAs5aZSoypzGuSLykHs1sgdQbo/GDs9X27NVKVRbBl32', 'UMKM', '2024-06-16 23:50:27', '2024-06-16 23:50:27', '0000-00-00 00:00:00'),
(12, '1571010102960021', 'muhammada mada', 'mada123', '$2y$10$pXHLo/QycEbZIzImWM2QL.NxCPnD1zhKJxfhLEDWTo/5Ym8ZH23RG', 'UMKM', '2024-06-17 06:32:51', '2024-06-17 06:32:51', '0000-00-00 00:00:00'),
(13, '15710973674864635373', 'Mayang Sartika', 'Mayang', '$2y$10$N9qOgaV3DqFBxC./0LXmh.sBGU/dzL3Z/zBWwpev0sjIr6PHLEGTO', 'UMKM', '2024-06-19 08:19:46', '2024-06-19 08:19:46', '0000-00-00 00:00:00'),
(14, '25789238952356284343', 'Muhammad Ansor Laode', 'ansorlaode', '$2y$10$Ptvq60Ns237TDDKcHTThG.SEC97TodKta7rHJtphONUDJPUj8zxxW', 'UMKM', '2024-06-25 01:01:37', '2024-06-25 01:01:37', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
