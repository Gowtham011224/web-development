-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 10:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_obs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_11`
--

CREATE TABLE `customers_11` (
  `ID` varchar(4) NOT NULL,
  `Name` varchar(10) DEFAULT NULL,
  `Username` varchar(12) DEFAULT NULL,
  `Password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers_11`
--

INSERT INTO `customers_11` (`ID`, `Name`, `Username`, `Password`) VALUES
('1254', 'giri', 'loki62.3', 'poiuh'),
('fege', 'kill', '9u8ssL55', 'iuytrdcv'),
('LK23', 'Gowtho', 'huuuuuuuuuuu', 'ghy632kd'),
('poly', 'Mad', 'daferfafgwdw', '47864624');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_11`
--
ALTER TABLE `customers_11`
  ADD UNIQUE KEY `ID` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
