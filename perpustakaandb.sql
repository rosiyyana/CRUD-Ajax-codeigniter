-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Okt 2018 pada 14.24
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
-- Database: `perpustakaandb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` bigint(20) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `jumlah_eksemplar` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun`, `jumlah_buku`, `jumlah_eksemplar`, `kategori`) VALUES
(1, 'Twilight', 'Stephenie Meyer', 'Little Brown', 2015, 221, 750000, 'Fiksi'),
(2, 'Bumi Manusia', 'Pramoedya Anananta Toer', 'Hasta Mitra', 1980, 840, 800000, 'Fiksi Sejarah'),
(3, '1000 Cara Memasak pemula', 'Mia Haryanti', 'Ar-Ruzz', 2018, 918, 120000, 'Teknik'),
(4, 'Dilan 1991 - Bagian Kedua', 'Pidi Baiq', 'Pastel Books', 2014, 3152, 500000, 'Fiksi'),
(5, 'Ayat ayat cinta', 'Habiburrahman El-Shirazy', 'Basmala', 2004, 5586, 200000, 'Fiksi Novel'),
(6, 'Mengenal Framework Bootstrap untuk UI Interaktif', 'Ahmad', 'Elexmedia', 2017, 221, 40000, 'Teknik'),
(7, 'Teknik Komposisi Audio Dasar Untuk Pemula', 'Ahmad', 'Melodi', 2009, 256, 50000, 'Teknik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
