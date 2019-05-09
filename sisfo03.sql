-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 02:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo03`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationdata`
--

CREATE TABLE `registrationdata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomer` text NOT NULL,
  `job` varchar(20) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationdata`
--

INSERT INTO `registrationdata` (`id`, `nama`, `tanggal_lahir`, `alamat`, `email`, `nomer`, `job`, `ijazah`, `cv`) VALUES
(1, 'atik', '2203-12-12', 'anaksn', 'skajdlk@ada.ada', '081325088305', 'Opsi 1', 'KHS.pdf', 'CV.pdf'),
(2, 'ade', '1787-12-12', 'aaaaaa', 'aaaa@aa.gg', '082313379917', 'Opsi 1', 'Visi_Misi.pdf', 'surat_lamaran_asprak.pdf'),
(3, 'Faiq askhabi R', '1998-08-01', 'Sukapura', 'askhabifaiq@gmail.com', '081325088305', 'Opsi 1', 'METODE_PADA_EVALUASI_USABILITAS_DAN_ANAL.pdf', 'zhu2012.pdf'),
(4, 'SADSADASD', '1212-12-12', 'SDSADASFAF', '223456SDFFDS@aSAFDGH.HGFD', '1234567823456', 'Opsi 4', 'coba.pdf', 'chiano1998.pdf'),
(5, 'SADSADASD', '1212-12-12', 'SDSADASFAF', '223456SDFFDS@aSAFDGH.HGFD', '1234567823456', 'Opsi 4', 'coba.pdf', 'chiano1998.pdf'),
(6, 'asadsaad', '1212-12-12', 'adasfadasd', 'safasdaadfaz2@asdas.safasf', '123456789123', 'Opsi 4', 'lanbo2008.pdf', '2.pdf'),
(7, 'asdasfa', '0222-02-23', 'asdafsdafsa', 'asfsafas@ADA.ADA', '131321312414141', 'Opsi 4', '2.pdf', '3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationdata`
--
ALTER TABLE `registrationdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrationdata`
--
ALTER TABLE `registrationdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
