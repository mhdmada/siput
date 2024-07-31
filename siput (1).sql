-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2024 pada 15.50
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
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) UNSIGNED NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `berkas`, `keterangan`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1721975539_b5bf0f04aaeee4a86a42.docx', 'Mahasiswa', 'muhammad ziqran febian', '2024-07-26 06:32:19', '2024-07-26 06:32:19', '2024-07-26 13:32:19'),
(2, 'Cetak-KRS-2001064.pdf', 'Kartu Rencana Studi 2001064', 'Muhammad Ziqran Febian', '2024-07-26 08:06:18', '2024-07-26 08:06:18', '2024-07-26 15:06:18'),
(4, 'SKRIPSI_A._IRFAN_YUSSA__C1B019059 pasca sidang.docx', 'Skripsi UNJA', 'Irfan Yuusha', '2024-07-26 08:27:09', '2024-07-26 08:27:09', '2024-07-26 15:27:09'),
(5, 'SKRIPSI_A._IRFAN_YUSSA__C1B019059 pasca sidang_1.docx', 'Skripsi UNJA', 'Irfan Yuusha', '2024-07-26 08:27:10', '2024-07-26 08:27:10', '2024-07-26 15:27:11'),
(6, 'SURAT- NH.pdf', 'Beasiswa UNH', 'Kharisma', '2024-07-26 08:48:37', '2024-07-26 08:48:37', '2024-07-26 15:48:37'),
(7, 'Cetak-KRS-2001064_2.pdf', 'Mahasiswa 2001064', 'Ziqran Febian', '2024-07-26 08:52:11', '2024-07-26 08:52:11', '2024-07-26 15:52:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin_usaha`
--

CREATE TABLE `izin_usaha` (
  `id_izin` bigint(20) UNSIGNED NOT NULL,
  `info_1` varchar(255) NOT NULL,
  `info_2` varchar(255) NOT NULL,
  `info_3` varchar(255) NOT NULL,
  `info_4` varchar(255) NOT NULL,
  `info_5` varchar(255) NOT NULL,
  `info_6` varchar(255) NOT NULL,
  `info_7` varchar(255) NOT NULL,
  `info_8` varchar(255) NOT NULL,
  `info_9` varchar(255) NOT NULL,
  `info_10` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `izin_usaha`
--

INSERT INTO `izin_usaha` (`id_izin`, `info_1`, `info_2`, `info_3`, `info_4`, `info_5`, `info_6`, `info_7`, `info_8`, `info_9`, `info_10`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Info lengkap pendaftar mulai dari nama, alamat, dan status kewarganegaraan.', 'Info lengkap pemegang hak cipta, mulai dari nama, alamat, dan status kewarganegaraan.', 'Judul atau nama karya cipta.', 'Waktu dan tempat karya pertama kali dipublikasikan.', 'Deskripsi karya cipta secara singkat.', 'Contoh karya yang didaftarkan. Format lengkapnya bisa kamu lihat di laman situs Ditjen HKI.\r\n', 'Surat kuasa bermaterai.', 'Surat pernyataan keaslian karya.', 'NPWP.', 'Contoh karya.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Surat pengantar RT dan RW, agar pemangku wilayah setempat tahu akan usaha yang dijalankan;', 'Akta perusahaan (bila ada);', 'KTP Asli dan Fotocopy KTP pemohon;', 'Fotocopy Npwp Perusahaan/ Pribadi (bila ada);', 'Email Perusahaan/Pribadi yang masih aktif ;', 'No Hp Perusahaan/Pribadi yang masih aktif.', 'Surat Rekomendasi HAKI', 'Foto usaha', 'KK Asli', '-', '2024-07-25 12:51:12', '2024-07-25 05:51:12', '0000-00-00 00:00:00'),
(3, 'Siapkan dokumen persyaratan yang telah difotokopi.', 'Datang ke KPP terdekat dari alamat pada KTP Anda.', 'Isi formulir pengajuan NPWP', 'Serahkan berkas ke petugas pendaftaran', 'Menerima tanda terima pendaftaran Wajib Pajak', 'Menyelesaikan Pendaftaran', '-', '-', '-', '-', '2024-07-25 13:00:59', '2024-07-25 06:00:59', '2024-07-24 18:20:09'),
(4, 'Membuat akun OSS di oss.go.id.', 'Mengisi kelengkapan data pelaku usaha dan data produk pangan.', 'Jika memenuhi persyaratan, SPP-IRT akan otomatis diterbitkan melalui OSS.', 'Melakukan pemenuhan komitmen dalam jangka waktu yang ditentukan.', '-', '-', '-', '-', '-', '-', '2024-07-24 23:25:01', '2024-07-24 18:20:09', '2024-07-24 18:20:09');

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
(10, '2024-05-29-132924', 'App\\Database\\Migrations\\Penjualan', 'default', 'App', 1716990170, 4),
(12, '2024-07-18-063309', 'App\\Database\\Migrations\\Product', 'default', 'App', 1721285726, 5),
(14, '2024-07-19-143941', 'App\\Database\\Migrations\\Perizinan', 'default', 'App', 1721453377, 6),
(15, '2024-07-25-134558', 'App\\Database\\Migrations\\Berkas', 'default', 'App', 1721916056, 7);

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
  `deskripsi_pelatihan` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nama_pelatihan`, `jadwal_pelatihan`, `lokasi_pelatihan`, `link_pendaftaran`, `deskripsi_pelatihan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tata Cara Pembuatan Izin Usaha', '2024-05-08', 'Aula Universitas Nurdin Hamzah Jambi', 'https://direktoridisnakerindonesia.wordpress.com/kota-jambi/', 'Pelatihan ini sangat berpotensi', '2024-07-03 07:26:29', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(2, 'Pembuatan Kapal Wisata', '2024-05-21', 'Danau Sipin', 'https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli/', 'cara buat login multi user', '2024-07-09 07:24:10', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(3, 'tutorial memasang umpan bersama iwan tegek bengkul', '2024-05-16', 'Merlung km 61', 'https://iwanslebew.blogspot.com', 'iwan yang jadi mentor', '2024-07-16 05:15:33', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(5, 'Mancing anti boncos bersama tutor danu', '2024-05-07', 'bayung lencir', 'https://riantempinomaster.blogspot.com', 'berlokasi di tempino sebelum bahar', '2024-07-16 05:16:18', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(6, 'Mahir Desain Grafis Bersama Udemy', '2024-07-16', 'Jambi Town Square Lantai 4', 'https://www.udemy.com/course/kelas-desain-grafis-praktis/', 'Pelatihan ini gratis tanpa harus bayar slebew', '2024-07-10 08:18:00', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(8, 'Latihan Mewing', '2024-07-31', 'Aula UIN', 'https://ziqranberbagiilmu.blogspot.com', 'Latihan ini berguna untuk masa depan', '2024-07-15 22:14:36', '2024-07-15 22:14:36', '2024-07-16 05:14:36'),
(9, 'iwan slebew', '2024-07-18', 'Kantor Gubernur', 'https://slebewmania.blogspot.com', 'iwan slebew', '2024-07-15 22:17:46', '2024-07-15 22:17:46', '2024-07-16 05:17:46'),
(10, 'Danu bahar casting', '2024-07-17', 'Bahar bayung lencir', 'https://danubahar.blogspot.com', 'bahar gaming', '2024-07-15 22:19:08', '2024-07-15 22:19:08', '2024-07-16 05:19:08'),
(11, 'Tempino ice cup', '2024-07-23', 'Sebapo', 'https://sebapo.blogspot.com', 'Latihan mancing dekat sebapo', '2024-07-15 22:20:04', '2024-07-15 22:20:04', '2024-07-16 05:20:04'),
(12, 'pelatihan koki warung bagas 61', '2024-07-30', 'Merlung KM 61', 'https://bagas61gaming.blogspot.com', 'disponsori oleh rian bagas tempino', '2024-07-15 22:21:23', '2024-07-15 22:21:23', '2024-07-16 05:21:23'),
(13, 'Bermain volley bersama Sely', '2024-07-31', 'Merlung KM62', 'https://merlungvoli.blogspot.com', 'Mengasah kemampuan bermain voli anda guys', '2024-07-15 22:22:44', '2024-07-15 22:22:44', '2024-07-16 05:22:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `harga_product` varchar(100) NOT NULL,
  `alamat_usaha` varchar(255) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_product`, `nama_product`, `nama_usaha`, `harga_product`, `alamat_usaha`, `no_hp`, `caption`, `path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 'Baju Oversize Romawi Soft Blue', 'Danu Boutique', 'Rp.300.000', 'Jln.Pemuda Bahar No.78', '087564535675', 'Baju Berbahan Halus', '1721371354_81cbfa167278d5e00fe1.jpg', '2024-07-19 06:42:34', '2024-07-19 06:42:34', NULL),
(26, 'Hexom Vape', 'DR. Vape', 'Rp.3.200.000', 'Simpang IV Sipin', '089676756756754', 'barang bagus stock ready', '1721373242_40f6e077caf3ed896778.jpg', '2024-07-19 07:14:02', '2024-07-19 07:14:02', NULL),
(27, 'baju koko', 'Danu Fesyen', 'Rp.90.000', 'Talang Bakung', '087564545322', 'Baju ini sangat bagas', '1721399159_27cdcf6c28a33355960d.jpg', '2024-07-19 14:25:59', '2024-07-19 14:25:59', NULL),
(29, 'Kemeja Jeans', 'Mestong Boutique', 'Rp.300.000', 'Mestong', '087564534534', 'Kemeja Bahan Super Lembut, Harga Premium. ', '1722010109_4608597090e5e3ebae5d.jpg', '2024-07-26 16:08:29', '2024-07-26 16:08:29', NULL);

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
(6, 157100411002020041, 'Muhammad Ziqran Febian', 'Ayam Geprek Saos Biru', 'Jln. Yulius Usman Lrg. Telaga 1 No.07 RT.18', 'Pematang Sulur', 'Telanaipura', 'Sebapo', 'Kuliner', '5830201', '61.318.029.8-723.000', 'Rp.10.000.000', '10', '089514806788', '2024-07-15 14:59:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
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
(36, 9223372036854775807, 'Mamat cedok', 'cedok club', 'talang bakung', 'talang', 'bakung', 'muaro jambi', 'industri', 'gfh5675765', 'gfdh54545645', '2000000', '3', '0896788568646454', '2024-06-28 12:56:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 2001068, 'Benuk Tamvan', 'Pangsit Benuk', 'Yulius Usman Rt.18', 'Pematang Sulur', 'Telanaipura', 'Golf Telanai', 'Kuliner', 'P121212', '12345678910', 'Rp.5.000.000 - Rp.10.000.000', '4', '082211350055', '2024-07-10 07:50:27', '2024-07-05 00:49:25', '0000-00-00 00:00:00');

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
(14, '25789238952356284343', 'Muhammad Ansor Laode', 'ansorlaode', '$2y$10$Ptvq60Ns237TDDKcHTThG.SEC97TodKta7rHJtphONUDJPUj8zxxW', 'UMKM', '2024-06-25 01:01:37', '2024-06-25 01:01:37', '0000-00-00 00:00:00'),
(15, '2001068', 'Muhammad Ibnu', 'Muhwan', '$2y$10$PGTnezcefesDPBiNSo6f4eW3wHzgyZM3c.0yLTPjoTPnbVkcPcws2', 'UMKM', '2024-07-05 00:49:24', '2024-07-05 00:49:24', '0000-00-00 00:00:00'),
(16, '5454767567567567567567567', 'wawan setiawan', 'wawank', '$2y$10$tUZC6XEoamffh.g5Uv0BoeKS/4jlaPX3OxWZ127YmYAJ3MpqFd3sK', 'UMKM', '2024-07-09 23:35:12', '2024-07-09 23:35:12', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `izin_usaha`
--
ALTER TABLE `izin_usaha`
  ADD PRIMARY KEY (`id_izin`);

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
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

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
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `izin_usaha`
--
ALTER TABLE `izin_usaha`
  MODIFY `id_izin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
