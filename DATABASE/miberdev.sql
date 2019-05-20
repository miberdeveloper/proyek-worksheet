-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2019 pada 10.02
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miberdev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `jenis_admin` int(11) NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nomor_anggota` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `jenis_admin` int(11) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_bahan` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_jadi`
--

CREATE TABLE `bahan_jadi` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_bahan` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bahan`
--

CREATE TABLE `jenis_bahan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_user`
--

CREATE TABLE `jenis_user` (
  `id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_pokok`
--

CREATE TABLE `simpanan_pokok` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_sukarela`
--

CREATE TABLE `simpanan_sukarela` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_wajib`
--

CREATE TABLE `simpanan_wajib` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_angsuran`
--

CREATE TABLE `transaksi_angsuran` (
  `id` int(11) NOT NULL,
  `id_angsuran` int(11) NOT NULL,
  `total_angsuran` int(11) NOT NULL,
  `tgl_angsuran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_masuk_bahan_baku`
--

CREATE TABLE `transaksi_masuk_bahan_baku` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_masuk_bahan_jadi`
--

CREATE TABLE `transaksi_masuk_bahan_jadi` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_bahan_jadi` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pinjam`
--

CREATE TABLE `transaksi_pinjam` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `total_pinjam` int(11) NOT NULL,
  `tgl_pinjam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_admin` (`jenis_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_admin` (`jenis_admin`);

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_bahan` (`jenis_bahan`);

--
-- Indexes for table `bahan_jadi`
--
ALTER TABLE `bahan_jadi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_bahan` (`jenis_bahan`);

--
-- Indexes for table `jenis_bahan`
--
ALTER TABLE `jenis_bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_user`
--
ALTER TABLE `jenis_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `simpanan_wajib`
--
ALTER TABLE `simpanan_wajib`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `transaksi_angsuran`
--
ALTER TABLE `transaksi_angsuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_angsuran` (`id_angsuran`);

--
-- Indexes for table `transaksi_masuk_bahan_baku`
--
ALTER TABLE `transaksi_masuk_bahan_baku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `transaksi_masuk_bahan_jadi`
--
ALTER TABLE `transaksi_masuk_bahan_jadi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_bahan_jadi` (`id_bahan_jadi`);

--
-- Indexes for table `transaksi_pinjam`
--
ALTER TABLE `transaksi_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bahan_jadi`
--
ALTER TABLE `bahan_jadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simpanan_wajib`
--
ALTER TABLE `simpanan_wajib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_angsuran`
--
ALTER TABLE `transaksi_angsuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_masuk_bahan_baku`
--
ALTER TABLE `transaksi_masuk_bahan_baku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_masuk_bahan_jadi`
--
ALTER TABLE `transaksi_masuk_bahan_jadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_pinjam`
--
ALTER TABLE `transaksi_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`jenis_admin`) REFERENCES `jenis_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`jenis_admin`) REFERENCES `jenis_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD CONSTRAINT `bahan_baku_ibfk_1` FOREIGN KEY (`jenis_bahan`) REFERENCES `jenis_bahan` (`id`);

--
-- Ketidakleluasaan untuk tabel `bahan_jadi`
--
ALTER TABLE `bahan_jadi`
  ADD CONSTRAINT `bahan_jadi_ibfk_1` FOREIGN KEY (`jenis_bahan`) REFERENCES `jenis_bahan` (`id`);

--
-- Ketidakleluasaan untuk tabel `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  ADD CONSTRAINT `simpanan_pokok_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`);

--
-- Ketidakleluasaan untuk tabel `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  ADD CONSTRAINT `simpanan_sukarela_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`);

--
-- Ketidakleluasaan untuk tabel `simpanan_wajib`
--
ALTER TABLE `simpanan_wajib`
  ADD CONSTRAINT `simpanan_wajib_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi_angsuran`
--
ALTER TABLE `transaksi_angsuran`
  ADD CONSTRAINT `transaksi_angsuran_ibfk_1` FOREIGN KEY (`id_angsuran`) REFERENCES `transaksi_pinjam` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi_masuk_bahan_baku`
--
ALTER TABLE `transaksi_masuk_bahan_baku`
  ADD CONSTRAINT `transaksi_masuk_bahan_baku_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi_masuk_bahan_jadi`
--
ALTER TABLE `transaksi_masuk_bahan_jadi`
  ADD CONSTRAINT `transaksi_masuk_bahan_jadi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `transaksi_masuk_bahan_jadi_ibfk_2` FOREIGN KEY (`id_bahan_jadi`) REFERENCES `bahan_jadi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
