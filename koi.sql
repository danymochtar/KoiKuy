-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02 Okt 2017 pada 18.24
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Akses`
--

CREATE TABLE `Akses` (
  `id_artikel` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pengguna`
--

CREATE TABLE `Pengguna` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_artikel` int(11) DEFAULT NULL,
  `id_thread` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Pengguna`
--

INSERT INTO `Pengguna` (`id_user`, `nama_user`, `username`, `email`, `password`, `id_artikel`, `id_thread`, `rating`, `level`) VALUES
(1, 'Jibs', 'hai', 'jibrilhp@gmail.com', 'a', 1, 1, 1, 0),
(2, 'Haha', 'Haha', 'Haha', 'www', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Web_Informasi`
--

CREATE TABLE `Web_Informasi` (
  `id_artikel` int(11) NOT NULL,
  `nama_artikel` varchar(100) NOT NULL,
  `isi_artikel` varchar(5000) NOT NULL,
  `tgl_artikel` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `jumlah_viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Web_Informasi`
--

INSERT INTO `Web_Informasi` (`id_artikel`, `nama_artikel`, `isi_artikel`, `tgl_artikel`, `id_user`, `rating`, `jumlah_viewer`) VALUES
(1, 'Haha', 'haha ''ku ''or; ', '30-Sep-2017|22:32:04', 1, 0, 0),
(2, 'Haha', ''' or haha', '30-Sep-2017|23:03:56', 1, 0, 0),
(3, 'Mooo', 'Md', '01-Oct-2017|13:14:02', 1, 0, 0),
(4, '', 'ew', '01-Oct-2017|15:26:11', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `Web_Informasi`
--
ALTER TABLE `Web_Informasi`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Pengguna`
--
ALTER TABLE `Pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Web_Informasi`
--
ALTER TABLE `Web_Informasi`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
