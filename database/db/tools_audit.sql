-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Apr 2017 pada 13.17
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tools_audit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `audit_subdomain_proses`
--

CREATE TABLE IF NOT EXISTS `audit_subdomain_proses` (
  `id_proses_subdomain_audit` int(10) unsigned NOT NULL,
  `id_domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_subdomain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_audit`
--

CREATE TABLE IF NOT EXISTS `data_audit` (
  `id_data_audit` int(10) unsigned NOT NULL,
  `id_auditee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_proses_audit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_evidence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `id_user` int(10) unsigned NOT NULL,
  `nama_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_akses` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_auditee`
--

CREATE TABLE IF NOT EXISTS `dokumen_auditee` (
  `id_auditee` int(10) unsigned NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_sistem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_kerja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_risiko` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `risiko` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level_risiko` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `risk_cause` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `control` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_control` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `frekuensi_control` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribut_control` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dokumen_auditee`
--

INSERT INTO `dokumen_auditee` (`id_auditee`, `id_perusahaan`, `nama_sistem`, `unit_kerja`, `kode_risiko`, `risiko`, `level_risiko`, `risk_cause`, `control`, `jenis_control`, `frekuensi_control`, `attribut_control`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 1, 'RNO app', 'Network Operation', 'ITC-09', 'Terganggunya kualitas dan waktu pemrosesan data sebagai akibat insiden dan masalah yang terjadi tidak diidentifikasi dan diperbaiki.', 'Moderate Risk', 'Tidak terdapat mekanisme pencatatan dan penyelesaian insiden.', 'Insiden dicatat, dianalisa, dan diselesaikan tepat pada waktunya.', 'Manual', 'Daily', 'Terdapat dokumentasi pencatatan terjadinya insiden, Terdapat dokumentasi analisa insiden, Terdapat dokumentasi proses eskalasi insiden (jika diperlukan), Terdapat penutupan insiden. ', '', '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_kuesioner`
--

CREATE TABLE IF NOT EXISTS `dokumen_kuesioner` (
  `id_kuesioner` int(10) unsigned NOT NULL,
  `id_subdomain_proses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai_perdomain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `id_domain` int(10) unsigned NOT NULL,
  `kode_domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `domain`
--

INSERT INTO `domain` (`id_domain`, `kode_domain`, `nama_domain`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'EDM', 'Evaluate Direct Monitor', NULL, '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1),
(2, 'APO', 'Align Plan Organize', NULL, '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1),
(3, 'BAI', 'Build Acquiere Implement', NULL, '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1),
(4, 'DSS', 'Deliver Service Support', NULL, '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1),
(5, 'MEA', 'Monitor Evaluate Assess', NULL, '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2017_04_04_080916_create_perusahaan_table', 1),
(56, '2017_04_04_081620_create_data_audit_table', 1),
(57, '2017_04_04_082113_create_dokumen_auditee_table', 1),
(58, '2017_04_06_123020_create_data_user_table', 1),
(59, '2017_04_06_124439_create_dokumen_kuesioner_table', 1),
(60, '2017_04_06_125535_create_domain_table', 1),
(61, '2017_04_06_125907_create_nilai_kuesioner_table', 1),
(62, '2017_04_06_142606_create_proses_audit_tabel', 1),
(63, '2017_04_17_072919_create_subdomain_table', 1),
(64, '2017_04_20_030821_create_subdomain_proses_table', 1),
(65, '2017_04_22_231150_create_proses_audit_subdomain_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_kuesioner`
--

CREATE TABLE IF NOT EXISTS `nilai_kuesioner` (
  `id_nilai` int(10) unsigned NOT NULL,
  `nilai_kuesioner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_perusahaan` int(10) unsigned NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci,
  `tujuan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `misi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `deskripsi`, `tujuan`, `visi`, `misi`, `jabatan`, `keterangan`, `nama_pegawai`, `no_hp`, `email`, `logo`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'PT. Dirahasiakan ', '<p>PT Dirahasiakan adalah salah satu Perseroan pembiayaan otomotif independen terkemuka. Usaha utama Perseroan adalah di bidang pembiayaan konsumen, antara lain pembiayaan kepemilikan mobil baik baru maupun bekas. Perseroan juga menyediakan pembiayaan sewa guna usaha berdasarkan permintaan pelanggan.</p>', 'Target utama Perseroan adalah pelanggan perorangan, selain itu juga memberikan pembiayaan kepada badan usaha. ', 'Menjadi perusahaan pembiayaan yang terkemuka di Indonesia dengan menciptakan nilai-nilai yang terbaik bagi seluruh stakeholder', 'Memberikan kemudahan fasilitas kredit kendaraan bermotor yang terjangkau dan diandalkan melalui kerjasama yang saling menguntungkan serta berkesinambungan dengan mitra bisnis dan melalui pengelolaan bisnis yang prima', 'Sales & Marketing', 'On Progress', 'Luki Permana', '081301902019', 'lukiper@oto.or.id', 'PT. OTO.png', '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_audit`
--

CREATE TABLE IF NOT EXISTS `proses_audit` (
  `id_proses_audit` int(10) unsigned NOT NULL,
  `id_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_auditee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subdomain`
--

CREATE TABLE IF NOT EXISTS `subdomain` (
  `id_subdomain` int(10) unsigned NOT NULL,
  `id_domain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_subdomain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_subdomain` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `subdomain`
--

INSERT INTO `subdomain` (`id_subdomain`, `id_domain`, `kode_subdomain`, `nama_subdomain`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, '1', 'EDM01', 'Ensure Governance Framework Setting and Maintenance', '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1),
(2, '1', 'EDM02', 'Ensure Benefit Delivery', '2017-04-27 23:16:11', '2017-04-27 23:16:11', NULL, 1),
(3, '1', 'EDM03', 'Ensure Risk Optimisation', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(4, '1', 'EDM04', 'Ensure Resource Optimisation', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(5, '1', 'EDM05', 'Ensure Stakeholder Transparency', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(6, '2', 'APO01', 'Manage the IT Management Framework', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(7, '2', 'APO02', 'Manage strategy', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(8, '2', 'APO03', 'Manage Enterprise Architecture', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(9, '2', 'APO04', 'Manage Inovation', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(10, '2', 'APO05', 'Manage portofolio', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(11, '2', 'APO06', 'Manage Budget and Costs', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(12, '2', 'APO07', 'Manage Human Resources', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(13, '2', 'APO08', 'Manage Relationship', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(14, '2', 'APO09', 'Manage Service Agreements', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(15, '2', 'APO10', 'Manage Suppliers', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(16, '2', 'APO11', 'Manage Quality', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(17, '2', 'APO12', 'Manage Suppliers', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(18, '2', 'APO13', 'Manage Security', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(19, '3', 'BAI01', 'Manage Requirements Definition', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(20, '3', 'BAI02', 'Manage Requirements Definition', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(21, '3', 'BAI03', 'Manage SolutionsIdentification and Build', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(22, '3', 'BAI04', 'Manage Availability and Capacity', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(23, '3', 'BAI05', 'Manage Organisational Change Enablement', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(24, '3', 'BAI06', 'Manage Changes', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(25, '3', 'BAI07', 'Manage Change Acceptance and Transitioning', '2017-04-27 23:16:12', '2017-04-27 23:16:12', NULL, 1),
(26, '3', 'BAI08', 'Manage Knowledge', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(27, '3', 'BAI09', 'Manage Assets', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(28, '3', 'BAI10', 'Manage Configuration', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(29, '4', 'DSS01', 'Manage Configuration', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(30, '4', 'DSS02', 'Manage Service Requests and Incidents', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(31, '4', 'DSS03', 'Manage Problems', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(32, '4', 'DSS03', 'Manage Problems', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(33, '4', 'DSS04', 'Manage Continuity', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(34, '4', 'DSS05', 'Manage Security Services', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(35, '4', 'DSS06', 'Manage Security Services', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(36, '5', 'MEA01', 'Monitor, Evaluate and Assess Performance and Conformance', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(37, '5', 'MEA02', 'Monitor, Evaluate and Assess the System of Internal Control', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(38, '5', 'MEA03', 'MMonitor, Evaluate and Assess Compliance with External Requirements', '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subdomain_proses`
--

CREATE TABLE IF NOT EXISTS `subdomain_proses` (
  `id_subdomain_proses` int(10) unsigned NOT NULL,
  `id_domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_subdomain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_subdomain_proses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_subdomain_proses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level_temuan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level_target` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rekomendasi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `subdomain_proses`
--

INSERT INTO `subdomain_proses` (`id_subdomain_proses`, `id_domain`, `id_subdomain`, `kode_subdomain_proses`, `nama_subdomain_proses`, `level_temuan`, `level_target`, `rekomendasi`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, '1', '1', 'EDM01.01', 'Evaluate the governance system.', '', '', NULL, '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(2, '1', '1', 'EDM01.02', 'Direct the governance system..', '', '', NULL, '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(3, '1', '1', 'EDM01.03', 'Monitor the governance system..', '', '', NULL, '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(4, '1', '2', 'EDM02.01', 'Evaluate value optimisation.', '', '', NULL, '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(5, '1', '2', 'EDM02.02', 'Direct value optimisation.', '', '', NULL, '2017-04-27 23:16:13', '2017-04-27 23:16:13', NULL, 1),
(6, '1', '2', 'EDM02.03', 'Monitor value optimisation.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(7, '1', '3', 'EDM03.01', 'Evaluate risk management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(8, '1', '3', 'EDM03.02', 'Direct risk management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(9, '1', '3', 'EDM03.03', 'Monitor risk management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(10, '1', '4', 'EDM04.01', 'Evaluate resource management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(11, '1', '4', 'EDM04.02', 'Direct resource management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(12, '1', '4', 'EDM04.03', 'Monitor resource management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(13, '1', '5', 'EDM05.01', 'Evaluate resource management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(14, '1', '5', 'EDM05.02', 'Direct resource management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(15, '1', '5', 'EDM05.03', 'Monitor resource management.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(16, '2', '6', 'APO01.01', 'Define the organisational structure.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(17, '2', '6', 'APO01.02', 'Establish roles and responsibilities.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(18, '2', '6', 'APO01.03', 'Maintain the enablers of the management system.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(19, '2', '6', 'APO01.04', 'Communicate Management Objectives and Direction', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(20, '2', '6', 'APO01.05', 'Optimisation the Placement of the IT Function.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(21, '2', '6', 'APO01.06', 'Define Information (data) and System Ownership.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(22, '2', '6', 'APO01.07', 'Manage Continual Improvement of Processes.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(23, '2', '6', 'APO01.08', 'Monitor resource management.Ensure Compliance with Policies and Procedures.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(24, '2', '7', 'APO02.01', 'Understand enterprise direction.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(25, '2', '7', 'APO02.02', 'Assess the current environment, capabilities and performance.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(26, '2', '7', 'APO02.03', 'Define the target IT capabilities.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(27, '2', '7', 'APO02.04', 'Conduct a gap analysis.', '', '', NULL, '2017-04-27 23:16:14', '2017-04-27 23:16:14', NULL, 1),
(28, '2', '7', 'APO02.05', 'Define the strategic plan and road map.', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(29, '2', '7', 'APO02.06', 'Communicate the IT strategy and direction.', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(30, '2', '8', 'APO03.01', 'Develop the enterprise architechture vision', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(31, '2', '8', 'APO03.02', 'Define reference architechture', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(32, '2', '8', 'APO03.03', 'Select opportunities and solutions', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(33, '2', '8', 'APO03.04', 'Define architechture implementation', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(34, '2', '8', 'APO03.05', 'Provide enterprise architechture services', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(35, '2', '9', 'APO04.01', 'Create an environment conducive to innovation', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(36, '2', '9', 'APO04.02', 'Maintain an understanding of the enterprise environment', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(37, '2', '9', 'APO04.03', 'Monitor and scan the technology environment', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(38, '2', '9', 'APO04.04', 'Assess the potential of emerging technologies and innovation ideas', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(39, '2', '9', 'APO04.05', 'Recommend appropriate further initiatives', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(40, '2', '9', 'APO04.06', 'Monitor the implementation and use of innovation', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(41, '2', '10', 'APO05.01', 'Establish Target Investment Mix', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(42, '2', '10', 'APO05.02', 'Determine The Availability and Sources of Funds', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(43, '2', '10', 'APO05.03', 'Evaluate and Select Programmes to Fund', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(44, '2', '10', 'APO05.04', 'Monitor, Optimise and Report on Investment Portfolio Investment', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(45, '2', '10', 'APO05.05', 'Maintain Portfolios', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(46, '2', '10', 'APO05.06', 'Manage Benefits Achievement', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(47, '2', '11', 'APO06.01', 'Manage finance and accounting', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(48, '2', '11', 'APO06.02', 'Prioritise resource allocations', '', '', NULL, '2017-04-27 23:16:15', '2017-04-27 23:16:15', NULL, 1),
(49, '2', '11', 'APO06.03', 'Create and maintain budgets', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(50, '2', '11', 'APO06.04', 'Model and allocate costs', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(51, '2', '11', 'APO06.05', 'Manage costs', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(52, '2', '12', 'APO07.01', 'Maintain adequate and appropriate staffing', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(53, '2', '12', 'APO07.02', 'Identify key IT personnel', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(54, '2', '12', 'APO07.03', 'Maintain the skills and competencies of personnel', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(55, '2', '12', 'APO07.04', 'Evaluate employee job performance', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(56, '2', '12', 'APO07.05', 'Plan and track the usage of IT and business human resources', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(57, '2', '12', 'APO07.06', 'Manage contract staff', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(58, '2', '13', 'APO08.01', 'Understand business expectations', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(59, '2', '13', 'APO08.02', 'Identify opportunities, risks and constraints for IT to enchance the business', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(60, '2', '13', 'APO08.03', 'Manage business relationship', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(61, '2', '13', 'APO08.04', 'Co-ordinate and communicate', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(62, '2', '13', 'APO08.05', 'Provide input to the continual improvement of services', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(63, '2', '14', 'APO09.01', 'Identify IT services', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(64, '2', '14', 'APO09.02', 'Catalogue IT-enabled services', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(65, '2', '14', 'APO09.03', 'Define and prepare service agreements', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(66, '2', '14', 'APO09.04', 'Monitor and report service levels', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(67, '2', '14', 'APO09.05', 'Review service agreements and contracts', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(68, '2', '14', 'APO09.01', 'Identify IT services', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(69, '2', '14', 'APO09.02', 'Catalogue IT-enabled services', '', '', NULL, '2017-04-27 23:16:16', '2017-04-27 23:16:16', NULL, 1),
(70, '2', '14', 'APO09.03', 'Define and prepare service agreements', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(71, '2', '14', 'APO09.04', 'Monitor and report service levels', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(72, '2', '14', 'APO09.05', 'Review service agreements and contracts', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(73, '2', '15', 'APO10.01', 'Identify and evaluate supplier relationships and contracts', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(74, '2', '15', 'APO10.02', 'Select suppliers', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(75, '2', '15', 'APO10.03', 'Manage supplier relationships and contracts', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(76, '2', '15', 'APO10.04', 'Manage supplier risk', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(77, '2', '15', 'APO10.05', 'Monitor supplier performance and compliance', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(78, '2', '16', 'APO11.01', 'Establish a quality management system (QMS)', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(79, '2', '16', 'APO11.02', 'Define and manage quality standards, practices and procedures', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(80, '2', '16', 'APO11.03', 'Focus quality management on customers', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(81, '2', '16', 'APO11.04', 'Perform quality monitoring, control and reviews', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(82, '2', '16', 'APO11.05', 'Integrate quality management into solutions for development and service delivery', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(83, '2', '16', 'APO11.06', 'Ensure Continuous Improvement', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(84, '2', '17', 'APO12.01', 'Collect data', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(85, '2', '17', 'APO12.02', 'Analyse risk', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(86, '2', '17', 'APO12.03', 'Maintain a risk profile', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(87, '2', '17', 'APO12.04', 'Articulate risk', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(88, '2', '17', 'APO12.05', 'Define a risk management action portfolio', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(89, '2', '17', 'APO12.06', 'Respond to risk', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(90, '2', '18', 'APO13.01', 'Establish and maintain an information security management system (ISMS)', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(91, '2', '18', 'APO13.02', 'Define and manage an information security risk treatment plan', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1),
(92, '2', '18', 'APO13.03', 'Monitor and review the ISMS', '', '', NULL, '2017-04-27 23:16:17', '2017-04-27 23:16:17', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_subdomain_proses`
--
ALTER TABLE `audit_subdomain_proses`
  ADD PRIMARY KEY (`id_proses_subdomain_audit`);

--
-- Indexes for table `data_audit`
--
ALTER TABLE `data_audit`
  ADD PRIMARY KEY (`id_data_audit`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `data_user_nama_user_unique` (`nama_user`);

--
-- Indexes for table `dokumen_auditee`
--
ALTER TABLE `dokumen_auditee`
  ADD PRIMARY KEY (`id_auditee`);

--
-- Indexes for table `dokumen_kuesioner`
--
ALTER TABLE `dokumen_kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kuesioner`
--
ALTER TABLE `nilai_kuesioner`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`), ADD UNIQUE KEY `perusahaan_nama_perusahaan_unique` (`nama_perusahaan`);

--
-- Indexes for table `proses_audit`
--
ALTER TABLE `proses_audit`
  ADD PRIMARY KEY (`id_proses_audit`);

--
-- Indexes for table `subdomain`
--
ALTER TABLE `subdomain`
  ADD PRIMARY KEY (`id_subdomain`);

--
-- Indexes for table `subdomain_proses`
--
ALTER TABLE `subdomain_proses`
  ADD PRIMARY KEY (`id_subdomain_proses`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_subdomain_proses`
--
ALTER TABLE `audit_subdomain_proses`
  MODIFY `id_proses_subdomain_audit` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_audit`
--
ALTER TABLE `data_audit`
  MODIFY `id_data_audit` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_auditee`
--
ALTER TABLE `dokumen_auditee`
  MODIFY `id_auditee` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dokumen_kuesioner`
--
ALTER TABLE `dokumen_kuesioner`
  MODIFY `id_kuesioner` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `id_domain` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `nilai_kuesioner`
--
ALTER TABLE `nilai_kuesioner`
  MODIFY `id_nilai` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `proses_audit`
--
ALTER TABLE `proses_audit`
  MODIFY `id_proses_audit` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subdomain`
--
ALTER TABLE `subdomain`
  MODIFY `id_subdomain` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `subdomain_proses`
--
ALTER TABLE `subdomain_proses`
  MODIFY `id_subdomain_proses` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
