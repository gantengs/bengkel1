-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jun 2017 pada 14.54
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nota`
--

CREATE TABLE `tb_nota` (
  `id_nota` int(15) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_pelanggan` int(15) DEFAULT NULL,
  `id_pekerjaan` int(11) DEFAULT NULL,
  `id_sukucadang` int(11) DEFAULT NULL,
  `total` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nota`
--

INSERT INTO `tb_nota` (`id_nota`, `id_user`, `id_pelanggan`, `id_pekerjaan`, `id_sukucadang`, `total`) VALUES
(22, 1, 21, 5, 8, '279000'),
(23, 1, 22, 3, 10, '67000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `pekerjaan`, `biaya`) VALUES
(2, 'ganti sepion', '12000'),
(3, 'Ganti kamprat', '27000'),
(4, 'Ganti ban', '27000'),
(5, 'Over houl', '79000'),
(6, 'ganti piston', '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(15) NOT NULL,
  `no_urut` varchar(15) DEFAULT NULL,
  `tgl_servis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_mesin` varchar(15) DEFAULT NULL,
  `no_rangka` varchar(15) DEFAULT NULL,
  `no_polisi` varchar(15) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `km` varchar(10) DEFAULT NULL,
  `nama_pembawa` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kec` varchar(25) DEFAULT NULL,
  `telpp` varchar(13) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `alamatp` varchar(50) DEFAULT NULL,
  `kecp` varchar(25) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `no_urut`, `tgl_servis`, `no_mesin`, `no_rangka`, `no_polisi`, `tipe`, `tahun`, `km`, `nama_pembawa`, `alamat`, `kec`, `telpp`, `nama_pemilik`, `alamatp`, `kecp`, `telp`) VALUES
(21, '1', '2017-06-08 03:48:44', '972364', '', 'N873K', '', '2015', '123123', 'Kamal', '', '', '', 'Farid', '', '', ''),
(22, '2', '2017-06-08 04:13:41', '', '', 'N123K', '', '', '', 'yuni ta', '', '', '', 'yana', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sukucadang`
--

CREATE TABLE `tb_sukucadang` (
  `id_sukucadang` int(11) NOT NULL,
  `sukucadang` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sukucadang`
--

INSERT INTO `tb_sukucadang` (`id_sukucadang`, `sukucadang`, `harga`) VALUES
(2, 'Busi', '1200'),
(6, 'Ban', '30000'),
(7, 'Lampu led', '23000'),
(8, 'Piston', '200000'),
(9, 'Rantai', '110000'),
(10, 'gir', '40000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jekel` varchar(15) NOT NULL,
  `foto` blob NOT NULL,
  `pekerjaan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `alamat`, `jekel`, `foto`, `pekerjaan`) VALUES
(1, 'toni', 'toni@gmail.com', '1', 'desa ngening', 'laki-laki', '', 'admin'),
(2, 'toni alqur', 'gugun@gmail.com', '1', 'ds.nyonyi', 'laki - laki', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_pekerjaan` (`id_pekerjaan`),
  ADD KEY `id_sukucadang` (`id_sukucadang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_sukucadang`
--
ALTER TABLE `tb_sukucadang`
  ADD PRIMARY KEY (`id_sukucadang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `id_nota` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_sukucadang`
--
ALTER TABLE `tb_sukucadang`
  MODIFY `id_sukucadang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD CONSTRAINT `tb_nota_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `tb_nota_ibfk_2` FOREIGN KEY (`id_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_pekerjaan`),
  ADD CONSTRAINT `tb_nota_ibfk_3` FOREIGN KEY (`id_sukucadang`) REFERENCES `tb_sukucadang` (`id_sukucadang`),
  ADD CONSTRAINT `tb_nota_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
