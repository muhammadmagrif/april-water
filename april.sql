-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2019 pada 09.39
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
  `pemesanan` varchar(10) NOT NULL,
  `kurir` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_kirim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`kode_pengiriman`, `nama_penerima`, `alamat_penerima`, `telepon_penerima`, `nama_pemesan`, `pemesanan`, `kurir`, `status`, `tanggal_kirim`) VALUES
(17, 'Dadang Mustang', 'Adaba', '0123123', 'Rahman', '002425', 'Rico', 'Sudah Dikirim', '2019-05-09'),
(18, 'Adaba', 'Jl. Road Perjalanan', '08111111111', 'Fauzan', '0024525', 'Rico', 'Sudah Dikirim', '0000-00-00');

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
('ppboa3m1q92p45qbn6qmhr82eq8bibud', '::1', 1557406359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373430363335393b),
('os36ok3o35u67hpa1f0esj3k535mpmqb', '::1', 1557406950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373430363935303b),
('nia132g0tcd3kr9fq28mlvrag06jlhpt', '::1', 1557408122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373430383132323b),
('oqep6rp0se0oknk6bu4c9pbaj9sodqnn', '::1', 1557408430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373430383433303b),
('97j0h6ofqikfhm1trrj7skuoks13ise3', '::1', 1557408769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373430383736393b616c6572747c733a31343a2268617075735f626572686173696c223b5f5f63695f766172737c613a313a7b733a353a22616c657274223b733a333a226f6c64223b7d),
('2lmkads6n25sshog699vhalscpke7vbs', '::1', 1557409707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373430393730373b),
('qfoldvp2d6epmi4b0sdc4etbfolrtb9i', '::1', 1557410267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431303236373b),
('oafp8dnmimt2a4qqea6g0qdqhu86f631', '::1', 1557410613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431303631333b),
('86nn3ob3v03976sh4ocdc6hetaj0in89', '::1', 1557410951, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431303935313b),
('5hsm4oesj0lm29jblpmd72or4jvfffo1', '::1', 1557412690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431323639303b616c6572747c733a31303a22676167616c5f64617461223b5f5f63695f766172737c613a313a7b733a353a22616c657274223b733a333a226f6c64223b7d),
('3o0rsp4cc1rhdf80m4imsmsejlc4bsi6', '::1', 1557413014, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431333031343b),
('2n7ago90j6er38l76lh9bvl44953ms95', '::1', 1557413371, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431333337313b616c6572747c733a31333a22626572686173696c5f64617461223b5f5f63695f766172737c613a313a7b733a353a22616c657274223b733a333a226f6c64223b7d),
('nuk7ddet0vpe98h54v621j817semhb7g', '::1', 1557413678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431333637383b616c6572747c733a31333a22626572686173696c5f64617461223b5f5f63695f766172737c613a313a7b733a353a22616c657274223b733a333a226f6c64223b7d),
('1o8qd94jc16tvfvmeo6l59hbm5quka22', '::1', 1557414180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431343138303b),
('j3oobthg2gs9khmkepsh3r8mc256a7hm', '::1', 1557414671, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431343637313b616c6572747c733a31333a22626572686173696c5f64617461223b5f5f63695f766172737c613a313a7b733a353a22616c657274223b733a333a226f6c64223b7d),
('0t83b38g741nsg0nu9fos7c8an8bmok3', '::1', 1557415467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431353436373b616c6572742d737563636573737c733a32323a224461746120626572686173696c206469757064617465223b5f5f63695f766172737c613a313a7b733a31333a22616c6572742d73756363657373223b733a333a226f6c64223b7d),
('afkavs4e6kkpu4975sgr6d9cccprdt27', '::1', 1557415858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431353835383b),
('6pl3uabs58i4mcgo5vc9v549coh326ur', '::1', 1557417115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431373131353b616c6572742d737563636573737c733a32323a224461746120626572686173696c206469757064617465223b5f5f63695f766172737c613a313a7b733a31333a22616c6572742d73756363657373223b733a333a226f6c64223b7d),
('kg59vsllgt8nqkc3avnu4nusqpt887ce', '::1', 1557417997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431373939373b),
('o86sosul7fm8bi1ieb8ssd0tq92j7qsd', '::1', 1557418575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431383537353b616c6572742d737563636573737c733a32323a224461746120626572686173696c206469757064617465223b5f5f63695f766172737c613a313a7b733a31333a22616c6572742d73756363657373223b733a333a226f6c64223b7d),
('gvps2kaqb73ijtldrv842v6ojd2fbdje', '::1', 1557418911, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431383931313b),
('emgs076de5trjci7a92l18tco71pg3r2', '::1', 1557419435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373431393433353b),
('a3qbp7jb1n4aqejh7ugs6d5ifu85qk2o', '::1', 1557420435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432303433353b),
('unv7jqvhr0vgs2h3l48f1b7hj0frkeiq', '::1', 1557420910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432303931303b),
('b8iefd5g83shbj0nn3iukfi1vc91j5ci', '::1', 1557421251, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432313235313b),
('bshj74ip5jbvjio3c6iq13tgubkj5ql8', '::1', 1557421552, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432313535323b),
('r3sftonga731d9ogojcq5tuevth946ak', '::1', 1557422201, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432323230313b),
('591p6vlht2qcpmi5v361jogunkrc0urv', '::1', 1557423367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432333336373b),
('2dh8a28pbvhg0s1267g1p0qglti2tqt8', '::1', 1557425105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432353130353b616c6572742d737563636573737c733a32303a22446174612073656c657361692064696b6972696d223b5f5f63695f766172737c613a313a7b733a31333a22616c6572742d73756363657373223b733a333a226f6c64223b7d),
('jlu0d355a3t90v1arm1gc674e2g22lh7', '::1', 1557425108, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373432353130353b);

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
  MODIFY `kode_pengiriman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
