-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2020 pada 16.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `non_positif`
--

CREATE TABLE `non_positif` (
  `id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `non_positif`
--

INSERT INTO `non_positif` (`id`, `status`, `nama`, `alamat`, `keterangan`) VALUES
(7, '', 'AHMAD zUFRI kASTIAR', 'Jl. Tuah Karya Ujung, Perum. Vila Bambu No.A2', 'Materi Ujian'),
(8, '', 'AHMAD zUFRI kASTIAR', 'asf', 'Materi Ujian'),
(9, '', 'haiiiii', 'asf', 'Sampai Terpenuhi Kuota'),
(10, '', 'AHMAD ZUFRI KASTIAR', 'asf', 'Dilaksanakan langsung ketika mendaftar'),
(12, 'ODP', 'haiiiiiyooo', 'Jl. Tuah Karya Ujung, Perum. Vila Bambu No.A2', 'Sampai Terpenuhi Kuota'),
(14, 'PDP', 'AHMAD zUFRI kASTIAR', 'Jl. Tuah Karya Ujung, Perum. Vila Bambu No.A2', 'Sampai Terpenuhi Kuota'),
(16, 'ODP', 'AHMAD zUFRI kASTIAR', 'aku', 'aku'),
(17, 'PDP', 'AHMAD zUFRI kASTIAR', 'asf', 'Sampai Terpenuhi Kuota'),
(18, 'PDP', 'coab', 'jbadsfjk', 'kdnhvk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `positif`
--

CREATE TABLE `positif` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `dirawat_di` varchar(250) NOT NULL,
  `disebabkan_oleh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `positif`
--

INSERT INTO `positif` (`id`, `status`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `dirawat_di`, `disebabkan_oleh`) VALUES
(2, 'positif', '1', '1', '0001-01-01', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`) VALUES
(1, 'prima', 'primyo15@gmail.com', '$2y$10$jCj3sDZsrnWpFJwQDRYEE.W9s6W6.lDDbHqCbXWYaHIU0iNPkUn36', 'prima'),
(2, 'aku', 'aku@gmail.com', '$2y$10$tfg5wdKWBY1xtOsBha6pA.KZcaa1PEia.VXaL90VLqnekx/PR..Oy', 'aku'),
(3, 'coba', 'coba@gmail.com', '$2y$10$SkLaTDAXYSxqK4gecrU.qe.UHtil9LmCf0bMtEiFPZ2n.YsQM63qy', 'coba'),
(4, 'lulu', 'lulu@gmail.com', '$2y$10$1o2SklRf/eRR6JL8qO3wbupCibP9Sy5E1H.rooFMDERTeBj7Qg/iS', 'lulu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `non_positif`
--
ALTER TABLE `non_positif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `positif`
--
ALTER TABLE `positif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `non_positif`
--
ALTER TABLE `non_positif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `positif`
--
ALTER TABLE `positif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
