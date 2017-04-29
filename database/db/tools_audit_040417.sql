-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Apr 2017 pada 15.20
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tools_audit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_audit`
--

CREATE TABLE `data_audit` (
  `id_data_audit` varchar(255) NOT NULL,
  `id_auditee` varchar(255) NOT NULL,
  `id_proses_audit` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nama_evidence` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_akses` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_auditee`
--

CREATE TABLE `dokumen_auditee` (
  `id_auditee` varchar(255) NOT NULL,
  `id_perusahaan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `risiko` varchar(255) NOT NULL,
  `level_risiko` varchar(50) NOT NULL,
  `risk_cause` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL,
  `frekuensi_control` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_kuesioner`
--

CREATE TABLE `dokumen_kuesioner` (
  `id_kuesioner` varchar(255) NOT NULL,
  `id_subdomain` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nilai_perdomain` int(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain_attribut`
--

CREATE TABLE `domain_attribut` (
  `id_domain` varchar(50) NOT NULL,
  `nama_domain` varchar(125) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_kuesioner`
--

CREATE TABLE `nilai_kuesioner` (
  `id_nilai` varchar(255) NOT NULL,
  `id_kuesioner` varchar(255) NOT NULL,
  `nilai_kuesioner` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_audit`
--

CREATE TABLE `proses_audit` (
  `id_proses_audit` varchar(255) NOT NULL,
  `id_subdomain` varchar(255) NOT NULL,
  `level_temuan` int(30) NOT NULL,
  `level_target` int(30) NOT NULL,
  `rekomendasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subdomain_attribut`
--

CREATE TABLE `subdomain_attribut` (
  `id_subdomain` varchar(255) NOT NULL,
  `id_domain` varchar(255) NOT NULL,
  `nama_subdomain` varchar(255) NOT NULL,
  `level_temuan` int(2) NOT NULL,
  `level_target` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_audit`
--
ALTER TABLE `data_audit`
  ADD PRIMARY KEY (`id_data_audit`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

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
-- Indexes for table `domain_attribut`
--
ALTER TABLE `domain_attribut`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indexes for table `nilai_kuesioner`
--
ALTER TABLE `nilai_kuesioner`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `proses_audit`
--
ALTER TABLE `proses_audit`
  ADD PRIMARY KEY (`id_proses_audit`);

--
-- Indexes for table `subdomain_attribut`
--
ALTER TABLE `subdomain_attribut`
  ADD PRIMARY KEY (`id_subdomain`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
