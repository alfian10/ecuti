-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2021 pada 04.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_form_dosen`
--

CREATE TABLE `tb_form_dosen` (
  `id` int(10) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `nip_dosen` int(20) NOT NULL,
  `nama_dosen` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `awal_cuti` date NOT NULL,
  `akhir_cuti` date NOT NULL,
  `prodi` enum('TI','MI','SI','TK') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `ket_cuti` text NOT NULL,
  `status` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_form_dosen`
--

INSERT INTO `tb_form_dosen` (`id`, `no_surat`, `nip_dosen`, `nama_dosen`, `tgl`, `email`, `awal_cuti`, `akhir_cuti`, `prodi`, `no_hp`, `ket_cuti`, `status`, `alasan`) VALUES
(1, 'K001', 2147483647, 'Risky ', '2021-07-07', 'risky@gmail.com', '2021-07-22', '2021-07-24', 'TI', '0812345678', 'Sakit', 'Diterima', '-'),
(2, 'K002', 2147483647, 'Risna', '2021-07-16', 'risna@gmail.com', '2021-07-18', '2021-07-20', 'TI', '0987617262', 'Tugas', 'Diterima', '-\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_form_mhs`
--

CREATE TABLE `tb_form_mhs` (
  `id_mhs` int(10) NOT NULL,
  `nim_mhs` int(20) NOT NULL,
  `nama_mhs` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `email` text NOT NULL,
  `prodi` enum('TI','SI','MI','TK') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `cuti` enum('Ganjil','Genap') NOT NULL,
  `ta` enum('2019/2020','2020/2021') NOT NULL,
  `keterangan_cuti` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_form_mhs`
--

INSERT INTO `tb_form_mhs` (`id_mhs`, `nim_mhs`, `nama_mhs`, `tgl`, `email`, `prodi`, `no_hp`, `alamat`, `cuti`, `ta`, `keterangan_cuti`, `status`, `alasan`) VALUES
(1, 1654100100, 'Alfian Adi Wirawan', '2021-07-08', 'adiwalfian22@gmail.com', 'TI', '02147483647', 'Yogyakarta', 'Ganjil', '2019/2020', '', 'Diterima', ''),
(2, 175410098, 'Reno Aji', '2021-07-16', 'renoaji@gmail.com', 'SI', '089767564', 'Yogyakarta', 'Ganjil', '2019/2020', 'Pelatihan', 'Diterima', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_form_sk`
--

CREATE TABLE `tb_form_sk` (
  `id` int(10) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `nip` int(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_form_sk`
--

INSERT INTO `tb_form_sk` (`id`, `no_surat`, `nip`, `nama`, `email`, `no_hp`, `tgl`, `deskripsi`, `status`, `alasan`) VALUES
(1, 'K001', 2147483647, 'Reno', 'reno@gmail.com', '089654444', '2021-07-08', 'Pengajuan tugas', 'Diterima', '-'),
(2, 'K002', 2147483647, 'Rina', 'rina@coba.com', '08978686', '2021-07-16', 'PENGABDIAN PADA MASYARAKAT', 'Diterima', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nipm` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role_id` int(4) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nipm`, `nama`, `username`, `role_id`, `password`) VALUES
(1, 12, 'Admin', 'admin', 1, 123),
(2, 123, 'User', 'user', 2, 123),
(3, 1234, 'Aka', 'akademik', 3, 123),
(4, 12345, 'SDN', 'sdn', 4, 12345),
(5, 175410098, 'Reno Aji', 'reno', 2, 123);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_form_dosen`
--
ALTER TABLE `tb_form_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_form_mhs`
--
ALTER TABLE `tb_form_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `tb_form_sk`
--
ALTER TABLE `tb_form_sk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_form_dosen`
--
ALTER TABLE `tb_form_dosen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_form_mhs`
--
ALTER TABLE `tb_form_mhs`
  MODIFY `id_mhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_form_sk`
--
ALTER TABLE `tb_form_sk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
