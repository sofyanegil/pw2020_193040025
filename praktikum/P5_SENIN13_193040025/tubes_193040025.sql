-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2020 pada 14.34
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
  `size_guide` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`id`, `display`, `merk`, `nama_artikel`, `size_guide`, `harga`, `stok`) VALUES
(1, 'img1.png', 'Reclays', 'SAVE THE HUMAN – BLACK', 'sg1.jpg', 135000, 12),
(2, 'img2.png', 'Rsch', 'SDT 86 SOFT GRAY', 'sg2.jpg', 210000, 21),
(3, 'img3.png', 'Billionaires Project', 'EXPERIMENT 8.0 - SNEAKER TALES', 'sg3.jfif', 375000, 9),
(4, 'img4.png', 'United Hart', 'EARTH', 'sg4.jpg', 449000, 22),
(5, 'img5.png', 'Tenue de Attire', 'HOME LIBRE', 'sg5.jpg', 449000, 12),
(6, 'img6.png', 'Kamengski Stuff', 'KASUR SHIRT', 'sg6.jpg', 280000, 17),
(7, 'img7.png', 'Pot Meets Pop', 'PIPES WASHED BLUE', 'sg7.jpg', 560000, 30),
(8, 'img8.png', 'Old Blue Co', '18 OZ OVER-SLUB SELVEDGE ATLANTIC', 'sg8.jpg', 1850000, 15),
(9, 'img9.png', 'Reclays', 'TORNESS CHINOS – GREY', 'sg9.jpg', 295000, 11),
(10, 'img10.png', 'Moskav', 'ROVER GREEN CARGO PANT', 'sg10.jpg', 255000, 13);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
