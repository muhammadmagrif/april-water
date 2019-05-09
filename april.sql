-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2019 pada 05.24
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `april`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `kode_pengiriman` int(10) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `telepon_penerima` text NOT NULL,
  `nama_pemesan` varchar(25) NOT NULL,
  `pemesanan` int(10) NOT NULL,
  `kurir` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_kirim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`kode_pengiriman`, `nama_penerima`, `alamat_penerima`, `telepon_penerima`, `nama_pemesan`, `pemesanan`, `kurir`, `status`, `tanggal_kirim`) VALUES
(13, 'Yafi Malik', 'Ciwastra Bandung', '085444657345', '2', 2, '1', 'Belum kirim', '2019-05-02 14:03:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `session`
--

CREATE TABLE `session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(100) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `session`
--

INSERT INTO `session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('bm9i5ogeu1ptjstsad01cd7h061aq0v1', '127.0.0.1', 1556121927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363132313932373b),
('jqara18h05i03e5eratlm0b1di1n4hbv', '::1', 1556799768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363739393736383b),
('kns85inrkoh4l7lths54t47elt2aqu7a', '::1', 1556805662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363830353636323b),
('eu16h7dge2bf3cljtrodumjss2avp39j', '::1', 1556806106, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363830363130363b),
('49oe5a199hsd1c4dn3dpr4mfdvu5rcqa', '::1', 1556811628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363831313632383b),
('f9dkte9p13c2btj57eqtu8cadcb656q7', '::1', 1556811628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363831313632383b),
('f0e3kinouj67turvp0atp59p5r77g30g', '::1', 1556828240, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363832383234303b),
('rvn5uhfndrokguovo95qvn6e0hk6ghib', '::1', 1556828586, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363832383538363b),
('kc607cns69grs7qqi0o53nk42h2vpv4q', '::1', 1556828893, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363832383839333b),
('lraghum4os3kb4kpnggi3chd0jtd5lnm', '::1', 1556829605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363832393630353b),
('tf7k3bom4fuhtjpm8bt01isiort7gk3m', '::1', 1556829945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363832393934353b),
('a2pnd7peved4a5586gml3a8uajdiecch', '::1', 1556830435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363833303433353b),
('k0io3h7n32c4bpr2qasglh4k5ennnut0', '::1', 1556830753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363833303735333b),
('h5fnhhanla8h0ot5lksqm569cujlgqjm', '::1', 1556831104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363833313130343b),
('m5hagdhq951ivvvae52vj0vngpo4evqn', '::1', 1556831329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363833313130343b),
('o9dpbdn9eq0127h71stjfgp4numqooga', '127.0.0.1', 1556853553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363835333535333b),
('fecdpht7dia54ko3l2ocinbshlmgm9fn', '127.0.0.1', 1556853198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363835333139383b),
('h8qtuh12lm2vqmnpgnoef3oep1bnglp7', '127.0.0.1', 1556853743, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363835333535333b);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`kode_pengiriman`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `kode_pengiriman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
