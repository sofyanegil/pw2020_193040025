-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 07.00
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040025`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sofyan Egi Lesmana', '193040025', '193040025.sofyan@mail.unpas.ac.id', 'Teknik Informatika', 'egi.jpg'),
(2, 'Annisa Dian Fatwa', '193060017', '193060017.mail.unpas.ac.id', 'Perencanaan Wilayah dan Kota', 'annisad.jpg'),
(3, 'M. Hafidz Fadillah', '193030017', '193030017@mail.unpas.ac.id', 'Teknik Mesin', 'hafidz.jpg'),
(4, 'David Dalil', '193040002', '193040002@mail.unpas.ac.id', 'Teknik Informatika', 'david.jpg'),
(5, 'Renal Muttaqin', '193040037', '193040037@mail.unpas.ac.id', 'Teknik Informatika', 'renal.jpg'),
(6, 'Aryogi Aziz', '193040023', '193040023@mail.unpas.ac.id', 'Teknik Informatika', 'aryogi.jpg'),
(7, 'Elvina Raynisha', '193060014', '193060014@mail.unpas.ac.id', 'Perencanaan Wilayah dan Kota', 'elvina.jpg'),
(8, 'Yusril Ismail Azi', '193040024', '1903040024@mail.unpas.ac.id', 'Teknik Informatika', 'azi.jpg'),
(9, 'Fahri Arliansyah', '193040011', '193040011@mai;unpas.ac.id', 'Teknik Informatika', 'fahri.jpg'),
(10, 'Silvi Fitriawati', '193040028', '193040028@mail.unpas.ac.id', 'Teknik Informatika', 'silvi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$OkZcnPAwf9px6P7YGG2G0uy0d9cD68Cxu5GqyaUIlTX6HZNqU/PhC'),
(2, 'pw', '$2y$10$wXKDsoEFLFtMhPl3.CwER.Qpq9qVLWhxu5ZN9CZ5..fZRLNYmj7QK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
