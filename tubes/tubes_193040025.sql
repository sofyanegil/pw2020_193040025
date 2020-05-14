-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2020 pada 04.59
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
-- Database: `tubes_193040025`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `display` varchar(30) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `nama_artikel` varchar(50) NOT NULL,
  `size` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`id`, `display`, `merk`, `nama_artikel`, `size`, `harga`, `stok`) VALUES
(1, 'img1.png', 'Reclays', 'SAVE THE HUMAN – BLACK', 'S, M, L, XL', 135000, 12),
(2, 'img2.png', 'Rsch', 'SDT 86 SOFT GRAY', 'S, L', 210000, 22),
(3, 'img3.png', 'Billionaires Project', 'EXPERIMENT 8.0 - SNEAKER TALES', 'S, M, L, XL', 375000, 9),
(4, 'img4.png', 'United Hart', 'EARTH', 'M, L', 449000, 22),
(5, 'img5.png', 'Tenue de Attire', 'HOME LIBRE', 'S, M, L, XL', 449000, 12),
(6, 'img6.png', 'Kamengski Stuff', 'KASUR SHIRT', 'S, M, L', 280000, 17),
(7, 'img7.png', 'Pot Meets Pop', 'PIPES WASHED BLUE', 'S', 560000, 30),
(8, 'img8.png', 'Old Blue Co', '18 OZ OVER-SLUB SELVEDGE ATLANTIC', 'L', 1850000, 15),
(9, 'img9.png', 'Reclays', 'TORNESS CHINOS – GREY', 'M, L', 295000, 11),
(10, 'img10.png', 'Moskav', 'ROVER GREEN CARGO PANT', 'S, M, L, XL', 255000, 13),
(35, '5eb76b4b3dd89.png', 'East Hood', 'GUILTY FUTURE OLIVE PULLOVER', 'S', 340000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$TxwO3HbRNWtZ6kskAY489eAw1RyS.SA0nCx41ejdhAIQaMAmvBZPO'),
(2, 'sofyanegi', '$2y$10$lFHZbfQ.t6NX2LQMGuqAFewazqT6lpI11I1gydyJe518WKeaOBu0m'),
(18, 'admin1234', '$2y$10$Ma0sCcymCo4/f54oGG7XtOpPpV4uzS.GLrLB7qjl50hW4eTvXlxfm'),
(19, 'admin123456', '$2y$10$2Wp2ThAbNPoYqg.VkUOc9OM8jD1G70wfvQ5U6FNkD.lpQ.PN8B6Ui');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
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
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
