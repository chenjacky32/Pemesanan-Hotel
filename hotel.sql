-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2021 pada 19.34
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `no_akses` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `tipe_akses` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`no_akses`, `username`, `password`, `tipe_akses`) VALUES
('004', 'rudi123@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
('005', 'Roni@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
('006', '1', '202cb962ac59075b964b07152d234b70', 2),
('U-001', 'admin', '202cb962ac59075b964b07152d234b70', 1),
('U-002', 'staff', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(30) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nomor_kontak` varchar(20) NOT NULL,
  `alamat_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `nomor_kontak`, `alamat_email`) VALUES
('A-001', 'Andi', 'Jakarta', '2021-06-30', 'Jl.Lokomotif', '081375552855', 'Andi01@gmail.com'),
('B-001', 'Budiono', 'Lampung', '2021-06-02', 'Jl.Teropong', '0811565696', 'Budiono123@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `kode_kamar` varchar(20) NOT NULL,
  `no_kamar` varchar(100) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL,
  `harga_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`kode_kamar`, `no_kamar`, `jenis_kamar`, `harga_kamar`) VALUES
('KD-001', 'D001', 'DELUXE', '175.000'),
('KD-002', 'D002', 'DELUXE', '175.000'),
('KD-003', 'D003', 'DELUXE', '175.000'),
('KD-004', 'D004', 'DELUXE', '175.000'),
('KD-005', 'D005', 'DELUXE', '175.000'),
('KS-001', '0001', 'SUPERIOR', '125.000'),
('KS-002', 'S002', 'SUPERIOR', '125.000'),
('KS-003', 'S003', 'SUPERIOR', '125.000'),
('KS-004', 'S004', 'SUPERIOR', '125.000'),
('KS-005', 'S005', 'SUPERIOR', '125.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(10) NOT NULL,
  `nama_staff` varchar(20) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nomor_kontak` varchar(15) NOT NULL,
  `alamat_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `nomor_kontak`, `alamat_email`) VALUES
('001', 'Andi', 'Jakarta', '1992-06-02', 'Jl.Lokomotif No.40F Pekanbaru', '081375552', 'Andi01@staff.com'),
('002', 'Anto', 'Medan', '1989-10-22', 'JL.Rajawali No.55E Pekanbaru', '0811755895', 'Anto02@staff.com'),
('003', 'Bagio', ' Palembang', '1995-02-22', 'Jl Arengka No.45 Pekanbaru', '08123232555', 'Bagio03@gmail.com'),
('004', 'Rudiiii', 'jambi', '2021-06-18', 'Jl Arengka No.45 Pekanbaru', '123', 'rudi123@gmail.com'),
('005', 'Roni', ' Bandung', '2021-06-16', 'Jl Arengka No.45 Pekanbaru', '12', 'Roni@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_sewa_kamar`
--

CREATE TABLE `transaksi_sewa_kamar` (
  `no_transaksi` varchar(200) NOT NULL,
  `kode_kamar` varchar(10) NOT NULL,
  `no_kamar` varchar(20) NOT NULL,
  `jenis_kamar` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `tgl_checkin` datetime DEFAULT NULL,
  `tgl_checkout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_sewa_kamar`
--

INSERT INTO `transaksi_sewa_kamar` (`no_transaksi`, `kode_kamar`, `no_kamar`, `jenis_kamar`, `harga`, `jumlah`, `tgl_checkin`, `tgl_checkout`) VALUES
('HS-2106.0001', 'KD-001', '20', 'DELUXE', '175000', '1', '2021-06-01 18:46:37', '2021-06-02 18:46:41'),
('HS-2106.0002', 'KD-002', '21', 'DELUXE', '175000', '1', '2021-06-02 18:46:45', '2021-06-03 18:46:48'),
('HS-2106.0003', 'KD-002', 'D001', 'DELUXE', '175.000', '1', '2021-06-29 00:00:00', '2021-06-29 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`no_akses`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `alamat_email` (`alamat_email`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kode_kamar`),
  ADD UNIQUE KEY `no_kamar` (`no_kamar`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD UNIQUE KEY `alamat_email` (`alamat_email`);

--
-- Indeks untuk tabel `transaksi_sewa_kamar`
--
ALTER TABLE `transaksi_sewa_kamar`
  ADD PRIMARY KEY (`no_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
