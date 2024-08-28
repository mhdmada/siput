-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2024 pada 16.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(100) NOT NULL,
  `isi_artikel` longtext NOT NULL,
  `tgl_artikel` date NOT NULL,
  `author` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `isi_artikel`, `tgl_artikel`, `author`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Program Bantuan UMKM Kota Jambi: Meningkatkan Perekonomian Lokal sekota Jambi dalam hal perekonomian', '1722874372_c1c86a90029484b89b08.jpg', '<p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"text-align: left;\">Kota Jambi, 12 Agustus 2024 - Dinas Koperasi dan Usaha Kecil Menengah (UKM) Kota Jambi telah sukses melaksanakan pelatihan bagi pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) di wilayah Kota Jambi. Pelatihan ini merupakan bagian dari upaya pemerintah dalam meningkatkan kapasitas dan daya saing UMKM lokal di tengah persaingan pasar yang semakin ketat.</span></p><p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan pelatihan yang berlangsung selama tiga hari ini dihadiri oleh lebih dari 100 pelaku usaha dari berbagai sektor, mulai dari industri makanan dan minuman, kerajinan tangan, hingga sektor jasa. Dalam pelatihan tersebut, para peserta dibekali dengan berbagai materi penting, seperti manajemen keuangan, pemasaran digital, hingga inovasi produk.</p><p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Kepala Dinas Koperasi dan UKM Kota Jambi, Bapak Ahmad Zulkifli, menyatakan bahwa pelatihan ini diharapkan dapat memberikan wawasan baru dan meningkatkan kemampuan para pelaku UMKM dalam mengelola usahanya. \"Kami ingin para pelaku UMKM di Kota Jambi dapat lebih profesional dan mampu bersaing, baik di pasar lokal maupun nasional. Melalui pelatihan ini, kami juga berharap mereka dapat memanfaatkan teknologi digital untuk memperluas jangkauan pasar,\" ujarnya.</p><p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Salah satu peserta pelatihan, Ibu Rina, seorang pengusaha kerajinan tangan, mengungkapkan rasa terima kasihnya kepada Dinas Koperasi dan UKM Kota Jambi atas kesempatan ini. \"Pelatihan ini sangat bermanfaat bagi saya, terutama dalam hal pemasaran digital. Saya jadi lebih paham bagaimana memanfaatkan media sosial untuk menjual produk saya,\" katanya.</p><p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Dinas Koperasi dan UKM Kota Jambi berkomitmen untuk terus mendukung dan mendorong pertumbuhan UMKM di kota ini melalui berbagai program dan kegiatan pelatihan. Pelatihan ini merupakan salah satu langkah nyata pemerintah dalam meningkatkan kesejahteraan masyarakat dan mendorong pertumbuhan ekonomi di tingkat lokal.</p><p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Dengan pelatihan ini, diharapkan para pelaku UMKM di Kota Jambi dapat lebih siap menghadapi tantangan dan terus berkembang menjadi usaha yang berkelanjutan dan berdaya saing tinggi.</p>', '2024-08-06', 'Admin', '2024-08-05 16:12:52', '2024-08-14 16:15:06', '2024-08-14 23:15:06'),
(3, 'Facebook memberikan bantuan untuk UMKM di Kota Jambi langsung oleh mark zuckerberg', '1722918926_9ba25cfedba752406c0d.jpg', '<p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;Kota Jambi, yang dikenal dengan potensi ekonominya, kini semakin gencar mendukung pengembangan Usaha Mikro, Kecil, dan Menengah (UMKM) melalui berbagai program bantuan. Pemerintah Kota Jambi memahami bahwa UMKM merupakan tulang punggung perekonomian daerah, dan oleh karena itu, mereka terus menginisiasi program-program yang bertujuan untuk meningkatkan daya saing dan keberlanjutan usaha-usaha kecil ini.</p><p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Salah satu program unggulan yang diluncurkan adalah bantuan modal usaha dengan bunga rendah. Program ini dirancang untuk membantu para pelaku UMKM yang membutuhkan tambahan modal untuk mengembangkan usahanya, tanpa harus terbebani oleh bunga pinjaman yang tinggi. Selain itu, pemerintah juga memberikan pelatihan manajemen dan digitalisasi, yang bertujuan untuk meningkatkan keterampilan pengelolaan bisnis serta memanfaatkan teknologi digital dalam operasional sehari-hari.</p><p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Di samping itu, Pemkot Jambi juga berkolaborasi dengan berbagai pihak, termasuk perbankan dan lembaga keuangan non-bank, untuk memfasilitasi akses kredit bagi UMKM. Tidak hanya itu, pameran dan bazar UMKM secara rutin diselenggarakan untuk mempromosikan produk lokal, memperluas pasar, dan meningkatkan kesadaran masyarakat akan pentingnya mendukung produk dalam negeri.</p><p style=\"text-align: justify; \">&nbsp; &nbsp; Program-program ini diharapkan mampu meningkatkan pertumbuhan ekonomi di Kota Jambi, menciptakan lapangan kerja baru, dan mengurangi tingkat kemiskinan. Dengan dukungan yang terus berkelanjutan, UMKM di Kota Jambi dapat tumbuh lebih kuat dan berkontribusi secara signifikan terhadap perekonomian daerah. Pemerintah Kota Jambi berkomitmen untuk terus mendampingi dan memfasilitasi UMKM agar mereka dapat menjadi pilar penting dalam pembangunan ekonomi lokal.&nbsp;</p><p style=\"text-align: justify; \"><br></p>', '2024-08-09', 'Admin', '2024-08-06 04:35:26', '2024-08-14 15:36:17', '2024-08-14 22:36:17'),
(4, 'Selamat kepda para UMKM Jambi atas peraihan sebagai UMKM terbaik se-Indonesia yang mampu menanggulan', '1722922843_efba99de6fa52cb01636.jpg', 'Yogyakarta, 6 Mei 2024 – Dinas Koperasi dan UKM DIY membuka Pelatihan Manajemen Produksi Bagi UKM Siap Ekspor, berlokasi di Ros-In Hotel Yogyakarta. Pelatihan ini berlangsung dalam kurun waktu 3 hari (6-8 Mei 2024).Pelatihan ini dihadiri oleh ibu Veronica Setyoningtyas Prativi (Kepala Bidang UKM), beserta narasumber yakni : Retnosyari Septiyani, S.TP., M.Sc, Azzam Muhammad Bayhaqqi, Indun Dewi Puspita, SP., M.Sc., Ph.D., Dr. Dian Anggraini Suroto, S.TP., MP., M.Eng.,  Pakartian Ayu Sugmana, S.TP., MPH., Dr. Eni Andari, SE., M.Si., Ir, Bambang Arif Nugraha, S.TP., MBA., dengan membawakan materi-materi menarik dan bermanfaat bagi para UKM yang akan memperluas produk mereka ke ranah ekspor. Dari pola manajemen, pengendalian barang persediaan, pengelolaan rantai pasokan, dan seluk-beluk tentang apa saja yang akan dihadapi para UKM saat ingin mengekspor barang mereka.“ Kami Dinas Koperasi dan UKM DIY kerap mengadakan kegiatan pelatihan dan uji kompetensi ini. Kegiatan ini nantinya bertujuan agar bapak ibu dari UKM agar memiliki sistem produksi yang lebih baik, pengelolaan dan peningkatan kompetensi SDM, sistem manajemen dan pencatatan keuangan yang telah berbasis digital, termasuk bagaimana membuat pemasaran yang menarik dalam lingkup kelas ekspor.” sebut Veronica Setyoingtyas Prativi (Kepala Bidang UKM) dalam membuka Pelatihan Manajemen Produksi bagi UKM Siap Ekspor.', '2024-08-07', 'Admin', '2024-08-06 05:40:43', '2024-08-06 06:05:02', '2024-08-06 13:05:02'),
(5, 'Pelatihan UMKM Kuliner: Menyongsong Kesuksesan Bersama Dinas Tenaga Kerja, Koperasi dan UKM Kota Jam', '1724855542_a6c7a8275742aee53a53.jpg', '<div style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Kota Jambi, 14 Agustus 2024 – Dinas Koperasi dan UKM Kota Jambi baru-baru ini menggelar pelatihan khusus bagi pelaku usaha mikro, kecil, dan menengah (UMKM) di sektor kuliner. Acara ini bertujuan untuk memberdayakan para pelaku usaha kuliner dengan pengetahuan dan keterampilan yang diperlukan untuk mengembangkan bisnis mereka.\r\n\r\nPelatihan ini dilaksanakan di Gedung Dinas Koperasi dan UKM Kota Jambi dan dihadiri oleh puluhan peserta dari berbagai penjuru kota. Acara ini menghadirkan beberapa pembicara ahli di bidang kuliner, pemasaran, dan manajemen usaha yang memberikan wawasan berharga tentang cara memulai dan mengelola usaha kuliner yang sukses.\r\n\r\nSelama pelatihan, peserta mendapatkan materi mengenai teknik pengolahan makanan yang modern, strategi pemasaran yang efektif, serta cara menjaga kualitas dan kebersihan produk. Selain itu, mereka juga diajarkan tentang penggunaan media sosial dan platform digital untuk memperluas jangkauan pasar dan menarik lebih banyak pelanggan.\r\n</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\nSalah satu aspek penting dari pelatihan ini adalah sesi praktik langsung di mana peserta dapat mengaplikasikan ilmu yang didapat dengan membuat berbagai macam produk kuliner yang inovatif. Ini memberikan kesempatan bagi mereka untuk belajar secara langsung dan mendapatkan umpan balik konstruktif dari para ahli.\r\n\r\nDinas Koperasi dan UKM Kota Jambi berharap bahwa pelatihan ini akan menjadi langkah awal bagi para pelaku UMKM kuliner untuk meningkatkan kualitas produk mereka dan memperluas pangsa pasar. Dengan dukungan dari pemerintah daerah dan peningkatan keterampilan, diharapkan UMKM kuliner di Kota Jambi dapat tumbuh dan berkontribusi lebih besar terhadap perekonomian lokal.\r\n\r\nUntuk informasi lebih lanjut mengenai pelatihan UMKM atau program-program lainnya, silakan kunjungi website resmi Dinas Koperasi dan UKM Kota Jambi atau hubungi kantor Dinas Koperasi dan UKM di alamat berikut.\r\n\r\nKota Jambi, 14 Agustus 2024 – Dinas Koperasi dan UKM Kota Jambi baru-baru ini menggelar pelatihan khusus bagi pelaku usaha mikro, kecil, dan menengah (UMKM) di sektor kuliner. Acara ini bertujuan untuk memberdayakan para pelaku usaha kuliner dengan pengetahuan dan keterampilan yang diperlukan untuk mengembangkan bisnis mereka.\r\n\r\nPelatihan ini dilaksanakan di Gedung Dinas Koperasi dan UKM Kota Jambi dan dihadiri oleh puluhan peserta dari berbagai penjuru kota. Acara ini menghadirkan beberapa pembicara ahli di bidang kuliner, pemasaran, dan manajemen usaha yang memberikan wawasan berharga tentang cara memulai dan mengelola usaha kuliner yang sukses.\r\n</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\nSelama pelatihan, peserta mendapatkan materi mengenai teknik pengolahan makanan yang modern, strategi pemasaran yang efektif, serta cara menjaga kualitas dan kebersihan produk. Selain itu, mereka juga diajarkan tentang penggunaan media sosial dan platform digital untuk memperluas jangkauan pasar dan menarik lebih banyak pelanggan.\r\n\r\nSalah satu aspek penting dari pelatihan ini adalah sesi praktik langsung di mana peserta dapat mengaplikasikan ilmu yang didapat dengan membuat berbagai macam produk kuliner yang inovatif. Ini memberikan kesempatan bagi mereka untuk belajar secara langsung dan mendapatkan umpan balik konstruktif dari para ahli.\r\n\r\nDinas Koperasi dan UKM Kota Jambi berharap bahwa pelatihan ini akan menjadi langkah awal bagi para pelaku UMKM kuliner untuk meningkatkan kualitas produk mereka dan memperluas pangsa pasar. Dengan dukungan dari pemerintah daerah dan peningkatan keterampilan, diharapkan UMKM kuliner di Kota Jambi dapat tumbuh dan berkontribusi lebih besar terhadap perekonomian lokal.\r\n\r\nUntuk informasi lebih lanjut mengenai pelatihan UMKM atau program-program lainnya, silakan kunjungi website resmi Dinas Koperasi dan UKM Kota Jambi atau hubungi kantor Dinas Koperasi dan UKM di alamat berikut.</div><div style=\"text-align: justify;\"><a href=\"https://ziqranberbagiilmu.blogspot.com\">link pendaftaran</a><br></div>', '2024-08-14', 'Admin', '2024-08-14 16:40:27', '2024-08-28 14:32:22', '2024-08-28 21:32:22');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `berkas`, `keterangan`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'contoh ktp_1.docx', 'KTP Baru saya', 'RADHIYATUL HAYAT', '2024-08-28 04:45:13', '2024-08-28 04:45:13', '2024-08-28 11:45:13'),
(11, 'Contoh KK_2.docx', 'KK Baru saya', 'ADIAR BENDI', '2024-08-28 05:29:10', '2024-08-28 05:29:10', '2024-08-28 12:29:10'),
(12, 'contoh ktp_4.docx', 'Ktp baru', 'IRNA FADLIATI', '2024-08-28 06:36:02', '2024-08-28 06:36:02', '2024-08-28 13:36:02');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) UNSIGNED NOT NULL,
  `judul_konten` varchar(100) NOT NULL,
  `gambar_konten` varchar(100) NOT NULL,
  `isi_konten` longtext NOT NULL,
  `author` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul_konten`, `gambar_konten`, `isi_konten`, `author`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Visi dan Misi Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi', '1723472667_04bb6600c56932ae7122.jpg', '<p><b>Visi :</b><span style=\"font-family: Helvetica;\">﻿</span>\r\n</p><p>“Menjadikan Kota Jambi sebagai pusat perdagangan dan jasa berbasis masyarakat berakhlak dan berbudaya dengan mengedepankan pelayanan prima”.</p><p><b>\r\nMisi :</b></p><ol><li>Penguatan birokrasi dan peningkatan pelayanan masyarakat berbasis teknologi informasi.\r\n</li><li>&nbsp;Penguatan penegakan hukum, trantibmas dan kenyamanan masyarakat.\r\n</li><li>&nbsp;Penguatan pengelolaan infrastruktur dan utilitas perkotaan serta penataan lingkungan.</li><li>&nbsp;Penguatan kapasitas ekonomi perkotaan.</li><li>&nbsp;Peningkatan kualitas kehidupan masyarakat perkotaan.\r\n</li></ol>', 'Admin', '2024-08-12 14:24:27', '2024-08-13 05:31:12', '2024-08-13 12:31:12'),
(2, 'Struktur Organisasi Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi', '1723475445_c33f83b3e243dd0ecbad.png', '<p style=\"text-align: justify; \">&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" font-weight:=\"\" normal;\"=\"\">Secara struktural susunan organisasi Dinas Koperasi, Usaha Mikro Kecil dan Menengah Kota Jambi berdasarkan Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Organisasi Perangkat Daerah (Lembaran Negara Republik Indonesia Tahun 2016 Nomor 89, Tambahan Lembaran Negara Republik Indonesia Nomor 4741) Pada Dinas Koperasi, Usaha Mikro Keci﻿l dan Menengah Kota Jambi.</span></p><p class=\"MsoNormal\" style=\"line-height:200%\"><span lang=\"EN-US\">Berikut ini adalah\r\nTugas Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi :<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:3.0pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-18.0pt;line-height:200%;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Kepala Dinas</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">a.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Melaksanakan ketentuan sebagaimana\r\ndimaksud pada pasal 182 pergub nomor 30 tahun 2008</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:0cm;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">b.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Memimpin dan mengkoordinasi seluruh\r\nkegiatan secretariat, bidang, UPTD dan kelompok jabatan fungsional.<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:2.0cm;mso-add-space:\r\nauto;text-align:justify;line-height:200%\"><span lang=\"ES\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-ansi-language:ES\">&nbsp;</span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:3.0pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-18.0pt;line-height:200%;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Sekretariat</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;\r\nmargin-left:42.55pt;text-align:justify;text-indent:29.45pt;line-height:200%\"><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\r\n\" times=\"\" new=\"\" roman\"\"=\"\">Seketariat mempunyai tugas memberikan pelayanan administrasi\r\nkepada semua urusan Organisasi Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi\r\nserta melaksanakan koordinasi pelaksanaan tugas serta pembinaan di lingkungan\r\nDinas Tenaga Kerja, Koperasi dan UKM Kota Jambi.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;\r\nmargin-left:42.55pt;text-align:justify;line-height:200%\"><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\">Untuk\r\nmelaksanakan tugas sebagaimana di maksud, sekretariat mempunyai fungsi:<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:78.55pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l4 level1 lfo3\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">a.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Fungsional Perencanaan Ahli Muda.</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:78.55pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l4 level1 lfo3\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">b.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Subbag Pengelolaan Administrasi Keuangan.<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:78.55pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l4 level1 lfo3\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">c.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Subbag Administrasi Umum dan Kepegawaian.<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:56.75pt;mso-add-space:auto;text-align:justify;\r\nline-height:200%\"><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:\r\n200%\">&nbsp;</span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:3.0pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-18.0pt;line-height:200%;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">&nbsp; &nbsp; &nbsp; 3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Bidang Penempatan, Pelatihan dan Produktivitas Tenaga Kerja,\r\nterdiri dari:<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">a.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Pengantar Kerja Ahli Muda</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\"> </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:\r\nES\">(</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Pelatihan\r\ndan Produktivitas</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">b.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Pengantar Kerja Ahli Muda</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\"> </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:\r\nES\">(</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Penempatan\r\nTenaga Kerja</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:\r\n200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">c.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Pengantar Kerja Ahli Muda</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\"> </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:\r\nES\">(</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Perluasan\r\nKesempatan Kerja</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">).<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:56.75pt;mso-add-space:auto;text-align:justify;\r\nline-height:200%\"><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:\r\n200%;mso-ansi-language:ES\">&nbsp;</span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:3.0pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-18.0pt;line-height:200%;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">&nbsp; &nbsp; &nbsp; 4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Bidang Hubungan Industrial, </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">dan Jaminan\r\nSosial</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;\r\nmso-ansi-language:ES\"> Tenaga Kerja terdiri</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\"> </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\">dari:<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l1 level1 lfo5\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">a.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Mediator Hubungan Industrial\r\nAhli Muda (Persyaratan Kerja dan Kelembagaan)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l1 level1 lfo5\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">b.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Mediator Hubungan Industrial\r\nAhli Muda (</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:\r\n200%\">Pencegahan dan </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Penyelesaian Perselisihan Hubungan\r\nIndustrial)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:\r\n200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;\r\nmso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l1 level1 lfo5\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">c.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Mediator Hubungan Industrial\r\nAhli Muda&nbsp; (Seksi </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Pendataan dan\r\nJaminan Sosial</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:\r\n200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%\">.</span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l1 level1 lfo5\"><span lang=\"EN-US\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:3.0pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-18.0pt;line-height:200%;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">Bidang Perkoperasian, terdiri dari:<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l5 level1 lfo6\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">a.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Pengawas Koperasi Ahli Muda (</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Kelembagaan dan\r\nPemberdayaan Usaha Koperasi</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l5 level1 lfo6\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">b.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Pengawas Koperasi Ahli Muda (</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Pengawasan dan\r\nPemeriksaan Koperasi</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:6.0pt;margin-left:72.0pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-18.0pt;line-height:200%;mso-list:l5 level1 lfo6\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">c.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Pengawas Koperasi Ahli Muda (</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Peningkatan\r\nKapasitas SDM Koperasi</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:3.0pt;mso-add-space:\r\nauto;text-align:justify;text-indent:-18.0pt;line-height:200%;mso-list:l2 level1 lfo1\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Bidang Usaha Mikro Kecil dan Menengah,\r\nterdiri dari</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">:</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:3.0pt;\r\nmargin-left:42.55pt;text-align:justify;text-indent:35.45pt;line-height:200%\"><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-ansi-language:es\"=\"\">Bidang Usaha Mikro, Kecil dan Menengah\r\nmempunyai tugas melaksanakan rencana dan program penyiapan bahan perumusan dan\r\npenyebaran kebijaksanaan teknis Usaha Mikro, </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\">K</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-ansi-language:es\"=\"\">ecil dan </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\">M</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-ansi-language:es\"=\"\">enengah di sector kelembagaan, sector\r\nkemitraan, jaringan usaha, sector promosi dan pemasaran serta melaporkan\r\nseluruh kegiatan bidang kepada </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\">K</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-ansi-language:es\"=\"\">epala Dinas </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\">Tenaga\r\nKerja, </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;\r\nmso-bidi-font-family:\" times=\"\" new=\"\" roman\";mso-ansi-language:es\"=\"\">Koperasi dan </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-bidi-font-family:\r\n\" times=\"\" new=\"\" roman\"\"=\"\">Usaha </span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\";mso-ansi-language:es\"=\"\">Kecil\r\ndan </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;\r\nmso-bidi-font-family:\" times=\"\" new=\"\" roman\"\"=\"\">M</span><span lang=\"ES\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">enengah sebagai berikut:<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:70.9pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-21.25pt;line-height:200%;mso-list:l6 level1 lfo7\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">a.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Analis Kebijakan Ahli Muda (</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">Fasilitas</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:\r\nES\">i</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">\r\ndan Kemitraan UMKM</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">).</span><span lang=\"ES\" style=\"mso-bidi-font-size:\r\n12.0pt;line-height:200%;mso-bidi-font-family:\" times=\"\" new=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:70.9pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-21.25pt;line-height:200%;mso-list:l6 level1 lfo7\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">b.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Analis Kebijakan Ahli Muda\r\n(Pengembanga</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">n, Penguatan dan Perlindungan UMKM</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:ES\">)</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">.</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:\r\nES\"><o:p></o:p></span></p><p style=\"text-align: justify;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:3.0pt;margin-left:70.9pt;mso-add-space:auto;text-align:justify;\r\ntext-indent:-21.25pt;line-height:200%;mso-list:l6 level1 lfo7\"><!--[if !supportLists]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-fareast-font-family:\r\n\" times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";mso-ansi-language:=\"\" es\"=\"\">c.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-size-adjust: none; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">Fungsional Analis Kebijakan Ahli Muda (</span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;line-height:200%\">P</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;line-height:200%;mso-ansi-language:\r\nES\">eningkatan Kualitas </span><span lang=\"EN-US\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%\">K</span><span lang=\"ES\" style=\"mso-bidi-font-size:12.0pt;\r\nline-height:200%;mso-ansi-language:ES\">ewirausahaan).<o:p></o:p></span></p>', 'Admin', '2024-08-12 15:10:45', '2024-08-13 06:53:03', '2024-08-13 13:53:03'),
(3, 'Tentang Aplikasi', '1723536363_630719325a98e6acacce.jpg', '<div style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;Aplikasi SIPUTRI adalah sistem yang dikelola oleh Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi bidang UKM yang diperuntukkan untuk UMKM yang ada di Kota Jambi. Sehingga akses informasi untuk pelaku UMKM dapat dengan mudah diakses dengan internet. Begitu pula untuk Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi bidang UKM dapat dengan mudah melakukan pendataan secara online terhadap para pelaku UMKM yang ada di Kota Jambi. Di aplikasi ini juga terdapat berita seputar informasi terbaru dari Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi. Seperti informasi berita Pelatihan dan Program bantuan UMKM.</div><div style=\"text-align: justify;\"><br><a href=\"https://www.instagram.com/ziqfbian20?igsh=NmgxdWRyb2R4Ydj\">- Developer</a></div><br>', 'Admin', '2024-08-13 07:42:49', '2024-08-19 05:37:16', '2024-08-19 12:37:16'),
(4, 'Kontak Kantor Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi', '1723735532_1986eb0d6793b99d6d62.jpg', '<h5 style=\"text-align: justify; \"><b>Email : disnakerkopukm_jambikota@email.go.id<br></b><b>Telp&nbsp; &nbsp;: 085219754647</b></h5>', 'Admin', '2024-08-15 15:25:32', '2024-08-15 15:40:16', '2024-08-15 22:40:17');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2024-05-11-150205', 'App\\Database\\Migrations\\Umkm', 'default', 'App', 1715502924, 1),
(7, '2024-05-13-025813', 'App\\Database\\Migrations\\Pelatihan', 'default', 'App', 1715569834, 2),
(9, '2024-05-14-054019', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1716985230, 3),
(12, '2024-07-18-063309', 'App\\Database\\Migrations\\Product', 'default', 'App', 1721285726, 5),
(14, '2024-07-19-143941', 'App\\Database\\Migrations\\Perizinan', 'default', 'App', 1721453377, 6),
(15, '2024-07-25-134558', 'App\\Database\\Migrations\\Berkas', 'default', 'App', 1721916056, 7),
(16, '2024-07-28-124147', 'App\\Database\\Migrations\\SyaratPelatihan', 'default', 'App', 1722232642, 8),
(17, '2024-07-29-162058', 'App\\Database\\Migrations\\DaftarPelatihan', 'default', 'App', 1722271001, 9),
(18, '2024-08-05-143508', 'App\\Database\\Migrations\\Artikel', 'default', 'App', 1722869426, 10),
(19, '2024-08-06-075810', 'App\\Database\\Migrations\\AdminRekap', 'default', 'App', 1722932126, 11),
(21, '2024-08-12-125740', 'App\\Database\\Migrations\\Konten', 'default', 'App', 1723468431, 12);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nama_pelatihan`, `jadwal_pelatihan`, `lokasi_pelatihan`, `link_pendaftaran`, `deskripsi_pelatihan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tata Cara Pembuatan Izin Usaha', '2024-05-08', 'Aula Universitas Nurdin Hamzah Jambi', 'https://direktoridisnakerindonesia.wordpress.com/kota-jambi/', 'Pelatihan ini sangat berpotensi', '2024-07-03 07:26:29', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(2, 'Pembuatan Kapal Wisata', '2024-05-21', 'Danau Sipin', 'https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli/', 'cara buat login multi user', '2024-07-09 07:24:10', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(3, 'tutorial memasang umpan bersama iwan tegek bengkul', '2024-05-16', 'Merlung km 61', 'https://iwanslebew.blogspot.com', 'iwan yang jadi mentor', '2024-07-16 05:15:33', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(5, 'Mancing anti boncos bersama tutor danu', '2024-05-07', 'bayung lencir', 'https://riantempinomaster.blogspot.com', 'berlokasi di tempino sebelum bahar', '2024-07-16 05:16:18', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(6, 'Mahir Desain Grafis Bersama Udemy', '2024-07-16', 'Jambi Town Square Lantai Dasar', 'https://www.udemy.com/course/kelas-desain-grafis-praktis/', 'Pelatihan ini gratis tanpa harus bayar slebew', '2024-07-29 10:18:52', '2024-07-03 07:26:29', '2024-07-03 07:26:29'),
(8, 'Latihan Mewing', '2024-07-31', 'Aula UIN', 'https://ziqranberbagiilmu.blogspot.com', 'Latihan ini berguna untuk masa depan', '2024-07-15 22:14:36', '2024-07-15 22:14:36', '2024-07-16 05:14:36'),
(9, 'iwan slebew', '2024-07-18', 'Kantor Gubernur', 'https://slebewmania.blogspot.com', 'iwan slebew', '2024-07-15 22:17:46', '2024-07-15 22:17:46', '2024-07-16 05:17:46'),
(10, 'Danu bahar casting', '2024-07-17', 'Bahar bayung lencir', 'https://danubahar.blogspot.com', 'bahar gaming', '2024-07-15 22:19:08', '2024-07-15 22:19:08', '2024-07-16 05:19:08'),
(11, 'Tempino ice cup', '2024-07-23', 'Sebapo', 'https://sebapo.blogspot.com', 'Latihan mancing dekat sebapo', '2024-07-15 22:20:04', '2024-07-15 22:20:04', '2024-07-16 05:20:04'),
(12, 'pelatihan koki warung bagas 61', '2024-07-30', 'Merlung KM 61', 'https://bagas61gaming.blogspot.com', 'disponsori oleh rian bagas tempino', '2024-07-15 22:21:23', '2024-07-15 22:21:23', '2024-07-16 05:21:23'),
(13, 'Bermain volley bersama Sely', '2024-07-31', 'Merlung KM62', 'https://merlungvoli.blogspot.com', 'Mengasah kemampuan bermain voli anda guys', '2024-07-15 22:22:44', '2024-07-15 22:22:44', '2024-07-16 05:22:44'),
(14, 'Pelatihan Pangkas Rambut', '2024-08-05', 'Iwan Barber', 'https://iwanbarber.com', 'Pelatihan oleh iwan', '2024-08-06 06:10:50', '2024-08-06 06:10:50', '2024-08-06 13:10:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kode_daftar` varchar(100) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_nib` varchar(100) NOT NULL,
  `file_npwp` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `nama_lengkap`, `kode_daftar`, `file_ktp`, `file_kk`, `file_nib`, `file_npwp`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'RADHIYATUL HAYAT', '110002', 'contoh ktp.docx', 'Contoh KK.docx', 'Contoh NIB.docx', 'Contoh NPWP.docx', 'disetujui', '2024-08-28 04:36:37', '2024-08-28 11:48:58', '2024-08-28 11:48:58'),
(12, 'ADIAR BENDI', '120003', 'contoh ktp_2.docx', 'Contoh KK_1.docx', 'Contoh NIB_1.docx', 'Contoh NPWP_1.docx', 'pending', '2024-08-28 05:01:59', '2024-08-28 05:02:06', '2024-08-28 12:02:06'),
(13, 'IRNA FADLIATI', '130006', 'contoh ktp_3.docx', 'Contoh KK_3.docx', 'Contoh NIB_2.docx', 'Contoh NPWP_2.docx', 'pending', '2024-08-28 05:59:14', '2024-08-28 07:17:58', '2024-08-28 14:17:58'),
(14, 'BUDI IRAWAN', '140006', 'contoh ktp_5.docx', 'Contoh KK_4.docx', 'Contoh NIB_3.docx', 'Contoh NPWP_3.docx', 'pending', '2024-08-28 06:45:35', '2024-08-28 07:18:51', '2024-08-28 14:18:51'),
(15, 'ADAM SINATRYA RAMAHESA', '150006', 'contoh ktp_6.docx', 'Contoh KK_5.docx', 'Contoh NIB_4.docx', 'Contoh NPWP_4.docx', 'pending', '2024-08-28 07:07:28', '2024-08-28 07:18:30', '2024-08-28 14:18:30'),
(16, 'Asmini Chandra', '160007', 'contoh ktp_7.docx', 'Contoh KK_6.docx', 'Contoh NIB_5.docx', 'Contoh NPWP_5.docx', 'pending', '2024-08-28 07:30:58', '2024-08-28 07:31:03', '2024-08-28 14:31:03'),
(17, 'Meyni dwi astuti', '170008', 'contoh ktp_8.docx', 'Contoh KK_7.docx', 'Contoh NIB_6.docx', 'Contoh NPWP_6.docx', 'pending', '2024-08-28 07:49:06', '2024-08-28 07:49:46', '2024-08-28 14:49:46'),
(18, 'Sandra Suheri', '180009', 'contoh ktp_9.docx', 'Contoh KK_8.docx', 'Contoh NIB_7.docx', 'Contoh NPWP_7.docx', 'pending', '2024-08-28 08:41:25', '2024-08-28 08:41:29', '2024-08-28 15:41:29'),
(19, 'SUHARYADI', '190010', 'contoh ktp_10.docx', 'Contoh KK_9.docx', 'Contoh NIB_8.docx', 'Contoh NPWP_8.docx', 'pending', '2024-08-28 13:24:09', '2024-08-28 13:24:21', '2024-08-28 20:24:21'),
(20, 'SARJONO', '200011', 'contoh ktp_11.docx', 'Contoh KK_10.docx', 'Contoh NIB_9.docx', 'Contoh NPWP_9.docx', 'pending', '2024-08-28 14:06:27', '2024-08-28 14:06:34', '2024-08-28 21:06:34'),
(21, 'RASMAN', '210012', 'contoh ktp_12.docx', 'Contoh KK_11.docx', 'Contoh NIB_10.docx', 'Contoh NPWP_10.docx', 'pending', '2024-08-28 14:24:38', '2024-08-28 14:24:42', '2024-08-28 21:24:42');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_product`, `nama_product`, `nama_usaha`, `harga_product`, `alamat_usaha`, `no_hp`, `caption`, `path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, 'MIE AYAM', 'WARUNG MIE AYAM', 'Rp.10.000', 'RAWASARI  KEL RAWASARI KEC. ALAM BARAJO', '082391778349', 'Mie Ayam Harga murah dan enak.', '1724820212_38e1d01a5265565785a4.jpg', '2024-08-28 04:43:32', '2024-08-28 04:43:32', NULL),
(34, 'AYAM GEPREK', 'AYAM GEPREK', 'Rp.12.000', 'Kenali Besar Kec. Alam Barajo', '081271333832', 'Ayam Geprek enak dan murah', '1724821554_b2fe8077a08abe330bd6.jpg', '2024-08-28 05:05:54', '2024-08-28 05:05:54', NULL),
(35, 'ayam Geprek', 'ayam Geprek', 'Rp.10.000', 'PERUM. BOGENVIL LESTARI BLOK  JD  No. 10 KEL. KENALI BESAR KEC. ALAM BARAJO KOTA JAMBI', '082375727471', 'Ayam geprek pedas nan gurih', '1724826908_834de32abfff3d6f3dc1.jpeg', '2024-08-28 06:35:08', '2024-08-28 06:35:08', NULL),
(36, 'AYAM BAKAR & IKAN BAKAR', 'AYAM BAKAR & IKAN BAKAR', 'Rp.30.000', 'RAWASARI  KEL RAWASARI KEC. ALAM BARAJO', '085378367424', 'Ayam bakar dan ikan bakar pak budi', '1724827761_e60cba540455bb5d5d53.jpg', '2024-08-28 06:49:21', '2024-08-28 06:49:21', NULL),
(37, 'AYAM GEBPREK', 'AYAM GEBPREK', 'Rp.20.000', 'RT. 34 KEL. KENALI BESAR KEC. ALAM BARAJO KOTA JAMBI', '081379191902', 'Ayam Geprek maknyoos', '1724829185_0569c7b12d62016f82dc.jpg', '2024-08-28 07:13:05', '2024-08-28 07:13:05', NULL),
(38, 'Gamis', 'Chandra Fashion', 'Rp.120.000', 'RT.1 KEL. KENALI BESAR', '082113134533', 'Baju gamis dengan motif indah', '1724830452_283a3c1ce8e81f1135e9.jpg', '2024-08-28 07:34:12', '2024-08-28 07:34:12', NULL),
(39, 'Hoodie wanita', 'TUTI BUTIK', 'Rp.100.000', 'Jln Pattimura perumahan griya rukun Sentosa 3 blok C No 6', '082375840027', 'Baju Hoodie ciamik', '1724831597_f688302d5acad9af73d1.jpg', '2024-08-28 07:53:17', '2024-08-28 07:53:17', NULL),
(40, 'Ayam Potong', 'JUAL AYAM POTONG', 'Rp.34.999/kg', ' RT.012  KEC.ALAM BARAJO', '085266399679', 'Ayam potong segar', '1724832573_2bf1a0733df724de7aa8.jpg', '2024-08-28 08:09:33', '2024-08-28 08:09:33', NULL),
(41, 'Ayam Potong', 'AYAM POTONG KADIR', 'Rp.35.000/kg', 'JL. BERADAT RT.068 KEL. KENALI BESAR KEC. ALAM BARAJO JAMBI', '085379303305', 'Ayam potong segar dan berkualitas.', '1724833601_57d288af810060f411b1.jpg', '2024-08-28 08:26:41', '2024-08-28 08:26:41', NULL),
(42, 'Laundry Kiloan', 'Laundry Pakaian', 'Rp.5000/kg', 'Jln. Walisongo RT. 03, Kel. Kenali Besar, Kec. Alam Barajo Kota Jambi', '081274534922', 'Laundry dengan harga terjangkau.', '1724834436_f36b4402e8b5142e10e8.jpg', '2024-08-28 08:40:36', '2024-08-28 08:40:36', NULL),
(43, 'love bird', 'Ternak Burung', 'Rp.50.000/ekor', 'JL. SERSAN ANWAR RT.041 KEL. BAGAN PETE KEC. ALAM BARAJO KOTA JAMBI', '085266272074', 'Love bird dengan warna yang mencolok cocok untuk dijadikan peliharaan serta perawatannya mudah.', '1724835063_36cefb58440f8643d7b8.jpg', '2024-08-28 08:51:03', '2024-08-28 08:51:03', NULL),
(44, 'Bibit Sawit dari biji', 'PEMBIBITAN SAWIT', 'Rp.1.300/biji', 'JL. SUNAN PANDANARAN RT.031 KEL. BAGAN PETE KEC. ALAM BARAJO KOTA JAMB', '082373797883', 'Bibit sawit unggulan dijual per biji', '1724836209_3c0797d21ef5c611e949.jpg', '2024-08-28 09:10:10', '2024-08-28 09:10:10', NULL),
(45, 'Jasa Pembuatan etalase', 'Membuat etalase', 'Rp.540.000', 'Jl Walisongo Rt03 Kel Kenali Besar', '08127458050', 'Jasa Pembuatan etalase kaca dengan harga terjangkau.', '1724852798_73f6da7e98f2be76282f.jpg', '2024-08-28 13:46:38', '2024-08-28 13:46:38', NULL),
(46, 'Kursi Anyaman Rotan', 'PANGRAJIN MEBEL ROTAN', 'Rp.250.000', 'KELURAHAN LINGKAR SELATAN KECAMATAN PAAL MERAH', '089616674323', 'Kursi anyaman rotan dengan kualitas terjamin.', '1724853912_91a2f957da0986ba396e.jpg', '2024-08-28 14:05:12', '2024-08-28 14:05:12', NULL),
(47, 'Kursi Mebel Jati', 'MEBEL/PERABOT', 'Rp.300.000', 'RT. 13 Kel. Kenali Besar Kec. Alam Barajo', '082183897706', 'Mebel Jati berkualitas. produk kami sudah ekspor ke mancanegara.', '1724854987_0edb1d449352feebd7c6.jpg', '2024-08-28 14:23:07', '2024-08-28 14:23:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat_pelatihan`
--

CREATE TABLE `syarat_pelatihan` (
  `id_syarat` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(225) NOT NULL,
  `info_1` varchar(225) NOT NULL,
  `info_2` varchar(225) NOT NULL,
  `info_3` varchar(225) NOT NULL,
  `info_4` varchar(225) NOT NULL,
  `info_5` varchar(225) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `jadwal` datetime NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `syarat_pelatihan`
--

INSERT INTO `syarat_pelatihan` (`id_syarat`, `judul`, `info_1`, `info_2`, `info_3`, `info_4`, `info_5`, `lokasi`, `jadwal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pelatihan Kewirausahaan UMKM Kota Jambi', 'Usia 20-45 Tahun', 'KTP Domisili Kota Jambi', 'Surat NIB', 'Kartu Keluarga', 'NPWP', 'Aula Dalam Kantor Dinas Tenaga Kerja, Koperasi dan UKM Kota Jambi', '2024-07-29 09:24:57', '2024-07-29 14:30:01', '2024-08-24 17:51:03', '2024-08-25 00:51:03');

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
  `aset` varchar(60) NOT NULL,
  `jumlah_tenaga_kerja` varchar(60) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `id_product` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`id_umkm`, `nik`, `nama`, `nama_usaha`, `alamat`, `kelurahan`, `kecamatan`, `alamat_usaha`, `bidang_usaha`, `nib`, `npwp`, `omzet_biaya`, `aset`, `jumlah_tenaga_kerja`, `no_hp`, `id_product`, `created_at`, `updated_at`, `deleted_at`) VALUES
(67, 1502051303800000, 'RADHIYATUL HAYAT', 'WARUNG MIE AYAM', 'RAWASARI  KEL RAWASARI KEC. ALAM BARAJO', 'KEL RAWASARI', 'KEC. ALAM BARAJO', 'RAWASARI  KEL RAWASARI KEC. ALAM BARAJO', 'Kuliner', '1050072129726', '61.539.121.2-716.6467', 'Rp.5.000.000 - Rp.10.000.000', '35.000.000', '2', '082391778349', 0, '2024-08-27 21:07:24', '2024-08-27 21:07:24', '2024-08-28 04:07:24'),
(68, 1505012109920003, 'ADIAR BENDI', 'AYAM GEPREK', 'Kenali Besar Kec. Alam Barajo', 'Kenali Besar', 'Kec. Alam Barajo', 'Kenali Besar Kec. Alam Barajo', 'Kuliner', '9319423042043', '67.325.917.1-8345.828', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.15.000.000', '4', '081271333832', 0, '2024-08-27 21:56:40', '2024-08-27 21:56:40', '2024-08-28 04:56:40'),
(69, 1509025304930000, 'IRNA FADLIATI', 'ayam Geprek', 'PERUM. BOGENVIL LESTARI BLOK  JD  No. 10 KEL. KENALI BESAR KEC. ALAM BARAJO KOTA JAMBI', 'KEL. KENALI BESAR ', ' KEC. ALAM BARAJO', 'PERUM. BOGENVIL LESTARI BLOK  JD  No. 10 KEL. KENALI BESAR K', 'Kuliner', '7200756789774', '57.283.299.2-416.687', 'Rp.5.000.000 - Rp.10.000.000', 'Rp.5.000.000', '4', '082375727471', 0, '2024-08-27 22:55:06', '2024-08-27 22:55:06', '2024-08-28 05:55:06'),
(70, 1571012601830081, 'BUDI IRAWAN', 'AYAM BAKAR & IKAN BAKAR', 'RAWASARI  KEL RAWASARI KEC. ALAM BARAJO', 'KEL RAWASARI', 'KEC. ALAM BARAJO', 'RAWASARI  KEL RAWASARI KEC. ALAM BARAJO', 'Kuliner', '1396683860082', '46.708.844.2-666.270', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.12.000.000', '6', '085378367424', 0, '2024-08-27 23:44:10', '2024-08-27 23:44:10', '2024-08-28 06:44:10'),
(71, 1571013701970061, 'ADAM SINATRYA RAMAHESA', 'AYAM GEBPREK', 'RT. 34 KEL. KENALI BESAR KEC. ALAM BARAJO KOTA JAMBI', 'KENALI BESAR', 'ALAM BARAJO', 'RT. 34 KEL. KENALI BESAR KEC. ALAM BARAJO KOTA JAMBI', 'Kuliner', '5555023244825', '80.686.599.9-559.327', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.5.000.000', '5', '081379191902', 0, '2024-08-28 00:04:58', '2024-08-28 00:04:58', '2024-08-28 07:04:59'),
(72, 1571072411680001, 'Asmini Chandra', 'Fashion', 'RT.1 KEL. KENALI BESAR', 'KEL. KENALI BESAR', '-', 'RT.1 KEL. KENALI BESAR', 'Fashion', '2071385988031', '90.160.492.8-750.872', 'Rp.5.000.000 - Rp.10.000.000', 'Rp.25.000.000', '7', '082113134533', 0, '2024-08-28 00:28:31', '2024-08-28 00:28:31', '2024-08-28 07:28:31'),
(73, 1571074805960041, 'Meyni dwi astuti', 'Fashion', 'Jln Pattimura perumahan griya rukun Sentosa 3 blok C No 6', '-', '-', 'Jln Pattimura perumahan griya rukun Sentosa 3 blok C No 6', 'Fashion', '7765853302557', '19.675.458.4-862.238', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.35.000.000', '3', '082375840027', 0, '2024-08-28 00:45:15', '2024-08-28 00:45:15', '2024-08-28 07:45:15'),
(74, 1505017112990001, 'YOURMA OSNITHIA WIBOWO', 'JUAL AYAM POTONG', 'RT.012  KEC.ALAM BARAJO', '-', '.ALAM BARAJO', 'RT.012  KEC.ALAM BARAJO', 'Dagang', '7348093602560', '32.323.161.6-449.525', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.35.000.000', '5', '085266399679', 0, '2024-08-28 01:01:08', '2024-08-28 01:01:08', '2024-08-28 08:01:08'),
(75, 1505020311890001, 'A. KADIR', 'JUAL AYAM POTONG KADIR', 'JL. BERADAT RT.068 KEL. KENALI BESAR KEC. ALAM BARAJO JAMBI', 'KENALI BESAR', 'ALAM BARAJO', 'JL. BERADAT RT.068 KEL. KENALI BESAR KEC. ALAM BARAJO JAMBI', 'Dagang', '1747566984585', '13.903.836.7-640.731', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.25.000.000', '2', '085379303305', 0, '2024-08-28 01:20:03', '2024-08-28 01:20:03', '2024-08-28 08:20:03'),
(76, 1308122812770001, 'Sandra Suheri', 'Laundry Pakaian', 'Jln. Walisongo RT. 03, Kel. Kenali Besar, Kec. Alam Barajo Kota Jambi', 'Kenali Besar', 'Alam Barajo', 'Jln. Walisongo RT. 03, Kel. Kenali Besar, Kec. Alam Barajo K', 'Jasa', '7656702888369', '57.975.488.2-453.886', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.12.000.000', '2', '081274534922', 0, '2024-08-28 01:36:28', '2024-08-28 01:36:28', '2024-08-28 08:36:28'),
(77, 1503030409880001, 'FAUZAN', 'TERNAK BURUNG', 'JL. SERSAN ANWAR RT.041 KEL. BAGAN PETE KEC. ALAM BARAJO KOTA JAMBI', 'BAGAN PETE', 'ALAM BARAJO', 'JL. SERSAN ANWAR RT.041 KEL. BAGAN PETE KEC. ALAM BARAJO KOT', 'Peternakan', '4781418625886', '55.655.140.6-581.733', 'Rp.25.000.000 - Rp.30.000.000', 'Rp.5.000.000', '2', '085266272074', 0, '2024-08-28 01:47:35', '2024-08-28 01:47:35', '2024-08-28 08:47:35'),
(78, 1571071006680101, 'NUNUNG', 'PEMBIBITAN SAWIT ', 'JL. SUNAN PANDANARAN RT.031 KEL. BAGAN PETE KEC. ALAM BARAJO KOTA JAMBI', 'BAGAN PETE', 'ALAM BARAJO', 'JL. SUNAN PANDANARAN RT.031 KEL. BAGAN PETE KEC. ALAM BARAJO', 'Pertanian', '4050625824497', '93.385.449.1-261.794', 'Rp.15.000.000 - Rp.20.000.000', 'Rp.40.000.000', '20', '08237379788', 0, '2024-08-28 01:57:29', '2024-08-28 01:57:29', '2024-08-28 08:57:29'),
(79, 1571070502710061, 'SUHARYADI', 'Membuat Etalase', 'Jl Walisongo Rt03 Kel Kenali Besar', 'Kenali Besar', '-', 'Jl Walisongo Rt03 Kel Kenali Besar', 'Industri', '1782583686665', '45.654.644.7-754.765', 'Rp.35.000.000 - Rp.40.000.000', 'Rp.50.000.000', '6', '08127458050', 0, '2024-08-28 02:16:04', '2024-08-28 02:16:04', '2024-08-28 09:16:04'),
(80, 1571021512680080, 'SARJONO', 'PANGRAJIN MEBEL ROTAN', 'KELURAHAN LINGKAR SELATAN KECAMATAN PAAL MERAH', 'LINGKAR SELATAN', 'PAAL MERAH', 'KELURAHAN LINGKAR SELATAN KECAMATAN PAAL MERAH', 'Kriya', '9825560493776', '67.645.765.2-653.655', 'Rp.35.000.000 - Rp.40.000.000', 'Rp.50.000.000', '10', '089616674323', 0, '2024-08-28 06:59:33', '2024-08-28 06:59:33', '2024-08-28 13:59:33'),
(81, 1571070509760101, 'RASMAN', 'MEBEL/PERABOT', 'RT. 13 Kel. Kenali Besar Kec. Alam Barajo', 'Kenali Besar ', 'Alam Barajo', 'RT. 13 Kel. Kenali Besar Kec. Alam Barajo', 'Kriya', '6362816960953', '40.225.565.2-064.011', 'Rp.25.000.000 - Rp.30.000.000', 'Rp.15.000.000', '12', '082183897706', 0, '2024-08-28 07:18:27', '2024-08-28 07:18:27', '2024-08-28 14:18:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `foto_profil` varchar(255) DEFAULT 'avatar-1.png',
  `name_user` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nik`, `foto_profil`, `name_user`, `email`, `username`, `password`, `roles`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1571010102960025', 'avatar-1.png', 'M Ziqran Febian', NULL, 'Ziqran', '$2y$10$EIqX/whrFDBm85CRvvpiROhJcn3FyNg8oqbP5.sM0zsODBeNeYShu', 'SUPER_ADMIN', '2024-06-16 21:49:04', '2024-06-16 21:49:04', '0000-00-00 00:00:00'),
(25, '1502051303800002', '1724817007_40ba2e5e56247372c009.jpg', 'Radhiyatul Hayat', 'Radhiyatulhayat@gmail.com', 'RadhiyatulHayat', '$2y$10$fYiafLM7aChqey/6.U./geJPNnH0Uv2hIy86njlOBF3ayhmIPTy2a', 'UMKM', '2024-08-28 03:50:07', '2024-08-27 20:50:07', '2024-08-28 03:48:04'),
(26, '1505012109920003', 'avatar-1.png', 'ADIAR BENDI', 'adiarbendi@gmail.com', 'ADIARBENDI', '$2y$10$Q.amtp03pxCdEL5VftxCX.j3cYznEszZDXU7J8esLVFPa/bBRQnva', 'UMKM', '2024-08-27 21:50:43', '2024-08-27 21:50:43', '2024-08-28 04:50:43'),
(27, '1509025304930000', 'avatar-1.png', 'IRNA FADLIATI', 'irna@gmail.com', 'IRNA FADLIATI', '$2y$10$xisJIMDnuV1p9p9u20bXOOctB/vMQ74ZvlUrXWpd0BVTfqdKNUrC2', 'UMKM', '2024-08-27 22:38:16', '2024-08-27 22:38:16', '2024-08-28 05:38:16'),
(28, '1571012601830081', 'avatar-1.png', 'BUDI IRAWAN', 'budi@gmail.com', 'BUDI IRAWAN', '$2y$10$IciHW3huNcoOHO4ryvJOcuGzNFWZ9/GB7nQPOhrHPVADg946tfM5i', 'UMKM', '2024-08-27 23:40:54', '2024-08-27 23:40:54', '2024-08-28 06:40:54'),
(29, '1571013701970061', 'avatar-1.png', 'ADAM SINATRYA RAMAHESA', 'adam@gmail.com', 'ADAM SINATRYA', '$2y$10$jgdXjIrPkLgDphmOz17fDemV8DZ/gtatNtLfV.GVXtG8BamsRTRce', 'UMKM', '2024-08-27 23:57:04', '2024-08-27 23:57:04', '2024-08-28 06:57:04'),
(30, '1571072411680001', 'avatar-1.png', 'Asmini Chandra', 'chandra@gmail.com', 'Asmini Chandra', '$2y$10$n8KiFNUIVl/nHK5l1EP4TO/9g5GYwOF.LSj0kfIOHtCsZ4ojZomwe', 'UMKM', '2024-08-28 00:20:56', '2024-08-28 00:20:56', '2024-08-28 07:20:56'),
(31, '1571074805960041', 'avatar-1.png', 'Meyni dwi astuti', 'meyni@gmail.com', 'Meyni dwi astuti', '$2y$10$sW9PdXCVqAPuPmYlnfgP0OJ6qYmCaZkj55jyz42Kp3aLugVNRMNty', 'UMKM', '2024-08-28 00:41:10', '2024-08-28 00:41:10', '2024-08-28 07:41:10'),
(32, '1505017112990001', 'avatar-1.png', 'YOURMA OSNITHIA WIBOWO', 'yourma@gmail.com', 'YOURMA', '$2y$10$UpxG.AiA0SBST2SPUwS.oOrPMD.6fBI1XCg1Audpj.q4eLpzrW0Dq', 'UMKM', '2024-08-28 00:57:43', '2024-08-28 00:57:43', '2024-08-28 07:57:43'),
(33, '085379303305', 'avatar-1.png', 'A.KADIR', 'kadir@gmail.com', 'KADIR', '$2y$10$8ppfg.u/3p5zseFp29zQvuAYOKAjSz0l3BtZKsTx4W8MYOd0eVK0G', 'UMKM', '2024-08-28 01:13:59', '2024-08-28 01:13:59', '2024-08-28 08:13:59'),
(34, '1308122812770001', 'avatar-1.png', 'Sandra Suheri', 'sandra@gmail.com', 'Sandra', '$2y$10$12.CtBym30/bL1RmGQKHfO32xVM3.QmgMEEOvQ1vSsSgACmVsWHy6', 'UMKM', '2024-08-28 01:31:45', '2024-08-28 01:31:45', '2024-08-28 08:31:45'),
(35, '1503030409880001', 'avatar-1.png', 'FAUZAN', 'fauzan@gmail.com', 'FAUZAN', '$2y$10$HLUFUCunnrEreqkPA.zYNeWUQwUgucGW65kp6YKqvBusPPUo9hDI2', 'UMKM', '2024-08-28 01:44:05', '2024-08-28 01:44:05', '2024-08-28 08:44:05'),
(36, '1571071006680101', 'avatar-1.png', 'NUNUNG', 'nunung@gmail.com', 'NUNUNG', '$2y$10$wW/uYUV5E10ctJ23CT4xfO2VtAKiCVnvcTzlKaaOpw5oU4K4gOQBG', 'UMKM', '2024-08-28 01:54:21', '2024-08-28 01:54:21', '2024-08-28 08:54:21'),
(37, '1571070502710061', 'avatar-1.png', 'SUHARYADI', 'suharyadi@gmail.com', 'SUHARYADI', '$2y$10$eBNHauFULmZ6yfrYxvOsf.pulpweFX7QGYjgazHV4f4XmZJFuriRi', 'UMKM', '2024-08-28 02:12:17', '2024-08-28 02:12:17', '2024-08-28 09:12:17'),
(38, '1571021512680080', 'avatar-1.png', 'SARJONO', 'sarjono@gmail.com', 'SARJONO', '$2y$10$1nvZGMGgHcHw2GhFxMSpqOP6DKyrm8NMAvzyOTrJ9vV4LUiemQUy6', 'UMKM', '2024-08-28 06:49:28', '2024-08-28 06:49:28', '2024-08-28 13:49:28'),
(39, '1571070509760101', 'avatar-1.png', 'RASMAN', 'rasman@gmail.com', 'RASMAN', '$2y$10$daB0nKIk59NloqmDuXORWOCFpBK2sc1AZ54vj...dg47IGqPOLefi', 'UMKM', '2024-08-28 07:15:01', '2024-08-28 07:15:01', '2024-08-28 14:15:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

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
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

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
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `syarat_pelatihan`
--
ALTER TABLE `syarat_pelatihan`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Indeks untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `izin_usaha`
--
ALTER TABLE `izin_usaha`
  MODIFY `id_izin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `syarat_pelatihan`
--
ALTER TABLE `syarat_pelatihan`
  MODIFY `id_syarat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id_umkm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
