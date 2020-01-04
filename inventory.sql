-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2020 pada 11.43
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products_tb`
--

CREATE TABLE `products_tb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `suppliers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products_tb`
--

INSERT INTO `products_tb` (`id`, `product_name`, `suppliers_id`) VALUES
(27, 'hp baru', 9),
(28, 'durian', 10),
(29, 'hp', 11),
(30, 'lenova idepad', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supliers_tb`
--

CREATE TABLE `supliers_tb` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `addres` text NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supliers_tb`
--

INSERT INTO `supliers_tb` (`id`, `company_name`, `addres`, `phone`) VALUES
(5, 'PT dubways', 'kemanaja aja', '088462383028'),
(6, 'pt sinarmas', 'jl sudirman', '021-7462-4717'),
(9, 'PT hp', 'jl. alisa', '0121-38338'),
(10, 'PT asus', 'jl. asus', '0875-875578-888'),
(11, 'pt sukamas=ju', 'jl belimbing no123', '08463762746'),
(12, 'lama', 'gadihu indah, rt. 002, rw.013', '085796434464');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products_tb`
--
ALTER TABLE `products_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_id` (`suppliers_id`);

--
-- Indeks untuk tabel `supliers_tb`
--
ALTER TABLE `supliers_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products_tb`
--
ALTER TABLE `products_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `supliers_tb`
--
ALTER TABLE `supliers_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products_tb`
--
ALTER TABLE `products_tb`
  ADD CONSTRAINT `products_tb_ibfk_1` FOREIGN KEY (`suppliers_id`) REFERENCES `supliers_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
