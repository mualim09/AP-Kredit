-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2022 pada 16.16
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apps_perkreditan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_kredit`
--

CREATE TABLE `history_kredit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cicilan_ke` int(11) DEFAULT NULL,
  `nominal_bayar` double DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kredit_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_kredit`
--

INSERT INTO `history_kredit` (`id`, `user_id`, `cicilan_ke`, `nominal_bayar`, `tanggal`, `kredit_id`, `status`) VALUES
(1, 123, 3, 100000, '0000-00-00 00:00:00', 181, 'belum lunas'),
(2, 123, 3, 100000, '0000-00-00 00:00:00', 181, 'belum lunas'),
(3, NULL, 12, 0, '0000-00-00 00:00:00', 181, '1'),
(4, NULL, 12, 0, '0000-00-00 00:00:00', 181, '1'),
(5, NULL, 13, 22, '2019-11-20 00:00:00', 181, ''),
(6, NULL, 11, 6512, '0000-00-00 00:00:00', 181, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `id` int(11) NOT NULL,
  `nomor_kredit` varchar(255) DEFAULT NULL,
  `nama_nasabah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `dp` double DEFAULT NULL,
  `lama_cicilan` varchar(11) DEFAULT NULL,
  `barang` varchar(150) NOT NULL,
  `harga_cash` double NOT NULL,
  `harga_kredit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`id`, `nomor_kredit`, `nama_nasabah`, `alamat`, `ktp`, `nominal`, `dp`, `lama_cicilan`, `barang`, `harga_cash`, `harga_kredit`) VALUES
(181, '180', 'Lil uzi', 'Surabaya', '1097', 122222, 1111, '13 bulan', '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('PRIA','WANITA') COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `ktp` varchar(40) NOT NULL,
  `foto_pengguna` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `jenis_kelamin`, `alamat`, `ktp`, `foto_pengguna`, `kota`, `name`, `last_login`) VALUES
(131, 'abc', 'admin@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Laki-Laki', 'andil', '1099', 'default.jpg', 'Gempol', 'gembot', ''),
(134, 'abcx', 'aaaa', 'fahmiganteng', 'laki', 'bangil', '2133', '', 'pandean', 'oyoy', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_kredit`
--
ALTER TABLE `history_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_kredit`
--
ALTER TABLE `history_kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
