-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 06:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_basdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `ttl`, `jk`, `no_telp`, `alamat`) VALUES
(10801101, 'Alif Finandhita, S.kom, M.T', 'Subang, 20-09-1990', 'L', '081233987678', 'Dago Atas'),
(10801102, 'Andri Heryandi, MT.', 'Bandung, 30-08-1989', 'L', '082144559878', 'Ahmadyani'),
(10801103, 'Angga Setiyadi, M.Kom.', 'Lampun, 20-06-1987', 'L', '089712367836', 'Kopo'),
(10801104, 'Riska Purnamasari, M.T', 'Jakarta 08-08-1993', 'P', '082197903427', 'Sekeloa');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1010, 'Teknik dan Ilmu Komputer'),
(1020, 'Desain'),
(1030, 'Hukum'),
(1040, 'Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_fakultas`, `nama_jurusan`) VALUES
(1011, 1010, 'Teknik Informatika'),
(1012, 1010, 'Sistem Informasi'),
(1021, 1020, 'Desain Komunikasi Visual'),
(1022, 1020, 'Desain Interior'),
(1031, 1030, 'Ilmu Hukum'),
(1041, 1040, 'Inggris Sastra'),
(1042, 1040, 'Jepang Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `ttl`, `jk`, `no_tlp`, `alamat`, `id_jurusan`) VALUES
(101109, 'Riski Dwi', 'Cibiru taun 2000', 'P', '084775756', 'Rancaekek', 1012),
(10118043, 'Tatang Suroso', 'Dago taun 200', 'L', '0999995', 'Margahayu', 1011),
(10118098, 'Dadang Cuy', 'Cibaduyut 2001', 'L', '09857355', 'Manglayang', 1041);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `no_ruangan` int(11) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matakuliah`, `id_jurusan`, `nip`, `no_ruangan`, `nama_matakuliah`, `sks`, `semester`) VALUES
(101, 1011, 10801102, 5011, 'Basis Data 2', 4, 4),
(201, 1012, 10801103, 6012, 'Informasi Sistem', 3, 5),
(401, 1041, 10801104, 5012, 'Budaya Inggris', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nim` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `angka` int(11) NOT NULL,
  `indeks` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nim`, `id_matakuliah`, `angka`, `indeks`) VALUES
(10118098, 401, 69, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `no_ruangan` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`no_ruangan`, `kapasitas`) VALUES
(4031, 44),
(4032, 33),
(5011, 40),
(5012, 37),
(6011, 24),
(6012, 39),
(7023, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD KEY `no_ruangan` (`no_ruangan`),
  ADD KEY `id_dosen` (`nip`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `nim` (`nim`),
  ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`no_ruangan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`no_ruangan`) REFERENCES `ruangan` (`no_ruangan`),
  ADD CONSTRAINT `matakuliah_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `matakuliah_ibfk_3` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
