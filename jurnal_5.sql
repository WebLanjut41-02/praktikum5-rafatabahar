-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2019 pada 03.11
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal_5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ipk` decimal(1,0) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `tanggal_lahir`, `ipk`, `kelas`) VALUES
(1, 'Rafata', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(2, 'Rizsa', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(3, 'Egan', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(4, 'Kusmaya', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(5, 'Putra', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(6, 'Fitria', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(7, 'Riadatul', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(8, 'Chusniah', 1111111, '1998-01-02', '4', 'D3SI-41-02'),
(9, 'Yusuf', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(10, 'Ramadhan', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(11, 'Rizky', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(12, 'Fadhil', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(13, 'Akbar', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(14, 'Ikhsan', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(15, 'Rifqi', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(16, 'Firza', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(17, 'Ester', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(18, 'Herdi', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(20, 'Aan', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(21, 'Firda', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(22, 'Desi', 1111111, '1998-01-02', '3', 'D3SI-41-02'),
(23, 'Nia', 12345678, '2019-03-20', '4', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
