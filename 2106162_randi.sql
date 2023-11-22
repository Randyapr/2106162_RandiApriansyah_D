-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2023 pada 14.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106162_randi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ngirim_barang`
--

CREATE TABLE `ngirim_barang` (
  `id` int(11) NOT NULL,
  `no_resi` varchar(35) NOT NULL,
  `nama_pengirim` varchar(78) NOT NULL,
  `alamat_pengirim` varchar(77) NOT NULL,
  `nama_penerima` varchar(78) NOT NULL,
  `alamat_penerima` varchar(77) NOT NULL,
  `berat_barangg` decimal(10,2) NOT NULL,
  `tanggal_pengiriman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ngirim_barang`
--

INSERT INTO `ngirim_barang` (`id`, `no_resi`, `nama_pengirim`, `alamat_pengirim`, `nama_penerima`, `alamat_penerima`, `berat_barangg`, `tanggal_pengiriman`) VALUES
(1, '1234', 'Asep', 'jl. kebenaran', 'Dedi', 'Jl. Kesalahan', '5.00', '2023-11-22 00:00:00'),
(2, '234', 'Saya', 'jl. Perintis', 'Gue', 'Jl.Jalan', '2.00', '2023-11-22 04:45:00'),
(3, '234', 'Saya', 'jl. Perintis', 'Gue', 'Jl.Jalan', '5.00', '2023-11-03 19:38:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ngirim_barang`
--
ALTER TABLE `ngirim_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ngirim_barang`
--
ALTER TABLE `ngirim_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
