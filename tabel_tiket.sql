-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 03:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_trpl1a_hazel_ransy_krishna`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(10) DEFAULT NULL,
  `kacamata_3d_id` int DEFAULT NULL,
  `efek_gerak_fitur` tinyint(1) DEFAULT NULL,
  `bantal_selimut_pack` tinyint(1) DEFAULT NULL,
  `layanan_butler` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Pengabdi Setan 2', '2026-06-15 14:30:00', 2, '35000.00', 'Regular', 'Dolby Digital', NULL, NULL, NULL, NULL, NULL),
(2, 'Miracle in Cell No. 7', '2026-06-15 16:45:00', 1, '35000.00', 'Regular', 'Stereo', NULL, NULL, NULL, NULL, NULL),
(3, 'Siksa Neraka', '2026-06-16 11:00:00', 3, '35000.00', 'Regular', 'Dolby Atmos', NULL, NULL, NULL, NULL, NULL),
(4, 'Kkn di Desa Penari', '2026-06-16 19:30:00', 2, '35000.00', 'Regular', 'Dolby Digital', NULL, NULL, NULL, NULL, NULL),
(5, 'Tekken 7', '2026-06-17 13:20:00', 1, '35000.00', 'Regular', 'Stereo', NULL, NULL, NULL, NULL, NULL),
(6, 'Avengers: Endgame', '2026-06-15 18:00:00', 4, '75000.00', 'IMAX', 'IMAX 12ch', NULL, 101, 1, NULL, NULL),
(7, 'Dune: Part Two', '2026-06-16 20:00:00', 2, '75000.00', 'IMAX', 'IMAX 12ch', NULL, 102, 1, NULL, NULL),
(8, 'Top Gun: Maverick', '2026-06-17 15:30:00', 3, '75000.00', 'IMAX', 'IMAX XT', NULL, 103, 0, NULL, NULL),
(9, 'Oppenheimer', '2026-06-18 13:00:00', 1, '75000.00', 'IMAX', 'IMAX 12ch', NULL, 104, 1, NULL, NULL),
(10, 'Interstellar', '2026-06-18 21:00:00', 2, '75000.00', 'IMAX', 'IMAX XT', NULL, 105, 1, NULL, NULL),
(11, 'Frozen 2', '2026-06-15 15:00:00', 2, '125000.00', 'Velvet', 'Dolby Atmos', 'Row C', NULL, NULL, 1, 1),
(12, 'The Batman', '2026-06-16 19:00:00', 1, '125000.00', 'Velvet', 'Dolby Digital', 'Row A', NULL, NULL, 1, 1),
(13, 'Spider-Man: No Way Home', '2026-06-16 21:30:00', 3, '125000.00', 'Velvet', 'Dolby Atmos', 'Row B', NULL, NULL, 0, 1),
(14, 'John Wick 4', '2026-06-17 18:45:00', 2, '125000.00', 'Velvet', 'Stereo', 'Row D', NULL, NULL, 1, 0),
(15, 'Encanto', '2026-06-17 14:15:00', 4, '125000.00', 'Velvet', 'Dolby Atmos', 'Row A', NULL, NULL, 1, 1),
(16, 'Wonka', '2026-06-18 12:00:00', 2, '40000.00', 'Regular', 'Dolby Digital', NULL, NULL, NULL, NULL, NULL),
(17, 'Godzilla x Kong', '2026-06-18 20:30:00', 3, '75000.00', 'IMAX', 'IMAX 12ch', NULL, 106, 1, NULL, NULL),
(18, 'Inside Out 2', '2026-06-19 16:00:00', 2, '125000.00', 'Velvet', 'Dolby Atmos', 'Row C', NULL, NULL, 1, 1),
(19, 'The Fall Guy', '2026-06-19 13:45:00', 1, '40000.00', 'Regular', 'Stereo', NULL, NULL, NULL, NULL, NULL),
(20, 'Kingdom of the Planet of the Apes', '2026-06-19 19:15:00', 2, '75000.00', 'IMAX', 'IMAX XT', NULL, 107, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
