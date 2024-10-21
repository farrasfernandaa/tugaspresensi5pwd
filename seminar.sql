-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2024 pada 08.47
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
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registration`
--

INSERT INTO `registration` (`id`, `email`, `name`, `institution`, `country`, `address`, `is_deleted`) VALUES
(1, 'sarraf@gmail.com', 'sarraf', 'akpol', 'wakanda', 'jl. sampit', 1),
(2, 'sarraf@gmail.com', 'sarraf', 'akpol', 'wakanda', 'jl. sampit', 1),
(3, 'sarraf@gmail.com', 'sarraf', 'akpol', 'wakanda', 'sampit', 1),
(4, 'sarraf@gmail.com', 'farras', 'indonesia', 'wakanda', 'sampit', 1),
(5, 'sarraf@gmail.com', 'sarraf', 'akpol', 'wakanda', 'sampit', 1),
(6, '2200018304@webmail.uad.ac.id', 'jembut', 'uad', 'usa', 'bantul', 1),
(7, 'sarraf@gmail.com', 'sarraf', 'uad', 'usa', 'sampit', 1),
(8, 'sarraf@gmail.com', 'sarraf', 'uad', 'usa', 'sampit', 1),
(9, 'sarraf@gmail.com', 'farras', 'uad', 'wakanda', 'sss', 1),
(10, 'sarraf@gmail.com', 'farras', 'uad', 'usa', 'sampit', 1),
(11, 'sarraf@gmail.com', 'farras', 'uad', 'usa', 'sampit', 1),
(12, 'sarraf@gmail.com', 'farras', 'uad', 'usa', 'sampit', 1),
(13, 'sarraf@gmail.com', 'farras', 'uad', 'usa', '123', 1),
(14, 'sarraf@gmail.com', 'farras', 'uad', 'usa', 'sampit', 1),
(15, 'sarraf@gmail.com', 'farras', 'uad', 'usa', 'sampit', 1),
(16, '', '', '', '', '', 1),
(17, 'sarraf@gmail.com', 'sarraf', 'uad', 'usa', 'sampit', 0),
(18, 'sarraf@gmail.com', 'sarraf', 'uad', 'wakanda', 'asdfsgfdg', 1),
(19, 'farrasfrnanda@gmail.com', 'farras', 'uad 4', 'indonesia', 'pontianak', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1'),
(2, 'admin', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `registration`
--
ALTER TABLE `registration`
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
-- AUTO_INCREMENT untuk tabel `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
